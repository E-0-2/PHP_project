<?php

$con=mysqli_connect("localhost", "root", "", "phpprojectdb","3307") or die("MYSQL 접속 실패 !!");

$userID = $_POST["userid"];
$name = $_POST["name"];
$birthYear = $_POST["birthyear"];
$addr = $_POST["addr"];
$mobile1 = $_POST["mobile1"];
$mobile2 = $_POST["mobile2"];
$height = $_POST["height"];
$mDate = $_POST["mdate"];

$sql ="update usertbl set name= '".$name."',birthyear= '".$birthYear; 
$sql = $sql."',addr= '".$addr."',mobile1= '".$mobile1."',mobile2= '".$mobile2;
$sql = $sql."',height= '".$height."',mdate= '".$mDate."' where userid ='".$userID."'";

$ret = mysqli_query($con, $sql);
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
    margin-bottom: 75px;
    color: gray;
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

  .success {
    color: #007bff;
    font-weight: bold;
  }

  .failure {
    color: #ff0000;
    font-weight: bold;
  }

  .back-link {
    text-align: center;
    margin-top: 20px;
  }

  a {
    text-decoration: none;
    color: #007bff;
  }

  a:hover {
    text-decoration: underline;
  }
</style>
</head>
<body>
<h1>회원 정보 수정 결과</h1>
<div class="result">
  <?php
  if ($ret) {
    echo "<p class='success'>데이터가 성공적으로 수정됨.</p>";
  } else {
    echo "<p class='failure'>데이터 수정 실패!!!</p>";
    echo "<p class='failure'>실패 원인: " . mysqli_error($con) . "</p>";
  }
  mysqli_close($con);
  ?>
  <div class="back-link"><a href='main.php'>&lt;-- 초기 화면</a></div>
</div>
</body>
</html>

