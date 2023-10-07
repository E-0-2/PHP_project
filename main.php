<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<style>
  body {
    background-color: #f2f2f2;
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }

  h1 {
    text-align: center;
    color: gray;
    margin-top: 200px;
    margin-bottom: 100px;
  }

  .result {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    margin: 0 auto;
    max-width: 400px;
    text-align: center;
  }

  .login-container {
    background-color: #fff;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
    padding: 20px;
    margin: 0 auto;
    max-width: 400px;
  }

  .login-container button a {
    text-decoration: none;
    color: gray;
    font-weight: bold;
    font-size: 16px;
  }

  .login-container button {
    background-color: transparent;
    border: none;
    padding: 0;
    margin: 0;
  }

  .login-container button:hover a {
    text-decoration: underline;
  }

  .login-container form {
    text-align: center;
  }

  .login-container input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
  }

  .login-container input[type="submit"] {
    background-color: gray;
    color: #fff;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
  }

  .login-container input[type="submit"]:hover {
    background-color: #0056b3;
  }
</style>
</head>
<body>
<h1>회원 관리 시스템 프로그래밍</h1>
<div class="result">
  <?php
  $con = mysqli_connect("localhost", "root", "", "phpprojectdb", "3307") or die("MYSQL 접속 실패 !!");
  $sql = "select * from usertbl where userid='" . $_GET["userid"] . "' and name ='" . $_GET["name"] . "'";

  $ret = mysqli_query($con, $sql);
  ?>

  <?php
  if ($ret) {
    $count = mysqli_num_rows($ret);
    if ($count == 0) {
      echo $_GET['userid'] . " 아이디의 회원이 없음!!!" . "<br>";
      echo "<br> <a href='login.html'> <--초기화면</br>";
      exit();
    }
  } else {
    echo "데이터 조회 실패!!!" . "<br>";
    echo "실패 원인 :" . mysqli_error($con);
    echo "<br> <a href='login.html'> <--초기 화면</a> ";
    exit();
  }
  ?>
</div>
<div class="login-container">
  <button><a href='select.php'>(1) 회원 조회 (조회 후 수정/삭제 가능)</a></button><br><br>
  <button><a href='insert.php'>(2) 신규 회원 등록</a></button><br><br><br>
  <form method="get" action="update.php">
    (3) 회원 수정 - 회원 아이디 : <input type="text" name="userid"><br><br>
    <input type="submit" value="수정">
  </form>
  <form method="get" action="delete.php"><br><br>
    (4) 회원 삭제 - 회원 아이디 : <input type="text" name="userid"><br><br>
    <input type="submit" value="삭제">
  </form>
</div>
</body>
</html>
