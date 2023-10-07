<?php

$con=mysqli_connect("localhost", "root", "", "phpprojectdb","3307") or die("MYSQL 접속 실패 !!");
$sql ="select * from usertbl where userid='".$_GET['userid']."'";

$ret = mysqli_query($con, $sql);
if($ret) {
	$count = mysqli_num_rows($ret);
	if($count==0) {
	
	echo $count = mysqli_num_rows($ret);

	echo $_GET['userid']." 아이디의 회원이 없음!!!"."<br>";
	
	echo "<br> <a href='login.html'> <-- 로그인 창으로 이동</br>";
	exit();
	}
}
else {
	echo "데이터 조회 실패!!!"."<br>";
	echo "실패 원인 :".mysqli_error($con);
	echo $count['userid'];
echo "<br> <a href='login.html'> <--로그인 창으로 이동</a> ";
	exit();
}
$row = mysqli_fetch_array($ret);
$userID = $row['userid'];
$name = $row["name"];
$birthYear = $row["birthyear"];
$addr = $row["addr"];
$mobile1 = $row["mobile1"];
$mobile2 = $row["mobile2"];
$height = $row["height"];
$mDate = $row["mdate"];
?>

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
	margin-top: 100px;
	margin-bottom: 50px;
	color: gray;
  }

  form {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    margin: 0 auto;
    max-width: 400px;
  }

  label {
	color: gray;
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
  }

  input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  input[type="text"][readonly] {
    background-color: #f2f2f2;
  }

  input[type="submit"] {
    background-color: gray;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  input[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>
<h1>회원 정보 수정</h1>
<form method="get" action="update_result.php">
  <label for="userid">아이디:</label>
  <input type="text" name="userid" value=<?php echo $userID ?> readonly><br>

  <label for="name">이름:</label>
  <input type="text" name="name" value=<?php echo $name ?>><br>

  <label for="birthyear">출생년도:</label>
  <input type="text" name="birthyear" value=<?php echo $birthYear ?>><br>

  <label for="addr">지역:</label>
  <input type="text" name="addr" value=<?php echo $addr ?>><br>

  <label for="mobile1">휴대폰 국번:</label>
  <input type="text" name="mobile1" value=<?php echo $mobile1 ?>><br>

  <label for="mobile2">휴대폰 전화번호:</label>
  <input type="text" name="mobile2" value=<?php echo $mobile2 ?>><br>

  <label for="height">신장:</label>
  <input type="text" name="height" value=<?php echo $height ?>><br>

  <label for="mdate">회원 가입일:</label>
  <input type="text" name="mdate" value=<?php echo $mDate ?> readonly><br>

  <br><br>
  <input type="submit" value="정보 수정">
</form>
</body>
</html>


