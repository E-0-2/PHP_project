
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<style>
  body {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
  }

  h1 {
    text-align: center;
	color: gray;
	margin-top: 200px;
	margin-bottom:100px;
  }
  table {
    border-collapse: collapse;
    width: 100%;
    max-width: 800px;
    margin: 20px auto;
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
  }

  table, th, td {
    border: 1px solid #ccc;
  }

  th, td {
    padding: 10px;
    text-align: center;
  }

  th {
    background-color: gray;
    color: #fff;
    font-weight: bold;
  }

  tr:nth-child(even) {
    background-color: #f2f2f2;
  }

  a {
    text-decoration: none;
    color: #007bff;
  }

  a:hover {
    text-decoration: underline;
  }

  .back-link {
    text-align: center;
    margin-top: 20px;
  }


</style>

</table>

</body>
</html>

<?php
	
	$con=mysqli_connect("localhost", "root", "", "phpprojectdb","3307") or die("MYSQL 접속 실패 !!");
	$sql ="select * from usertbl";
	$ret = mysqli_query($con, $sql);

	if($ret) {
	 $count = mysqli_num_rows($ret);
	}
	else {
	 echo "usertbl 데이터 조회 실패!!!","<br>";
	 echo "실패 원인 :".mysqli_error($con);
	 exit();
	}

	echo "<h1> 회원 조회 결과 </h1>";
	echo "<table border=1>";
	echo "<tr>";
	echo "<th>아이디</th><th>이름</th><th>출생년도</th><th>지역</th><th>극번</th>";
	echo "<th>전화번호</th><th>키</th><th>가입일</th><th>수정</th><th>삭제</th>";
	echo"</tr>";
	while($row = mysqli_fetch_array($ret)) {
	 echo "<tr>";
	 echo "<td>", $row['userid'], "</td>";
	 echo "<td>", $row['name'], "</td>";
	 echo "<td>", $row['birthyear'], "</td>";
	 echo "<td>", $row['addr'], "</td>";
	 echo "<td>", $row['mobile1'], "</td>";
	 echo "<td>", $row['mobile2'], "</td>";
	 echo "<td>", $row['height'], "</td>";
	 echo "<td>", $row['mdate'], "</td>";
	 echo "<td>", "<a href='update.php?userid=", $row['userid'], "'>수정</a></td>";
	 echo "<td>", "<a href='delete.php?userid=", $row['userid'], "'>삭제</a></td>";
	 echo "</tr>";
	}

	mysqli_close($con);
	echo "</table>";
echo "<div><br><center><button><a href='main.php'> <-- 초기 화면</a></button></center></div> ";
?>