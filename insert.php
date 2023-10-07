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
	margin-top: 100px;
	margin-bottom:100px;
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
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    color: gray;
  }

  input[type="text"] {
    width: 100%;
    padding: 10px;
    margin: 5px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
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
<h1>신규 회원 입력</h1>
<form method="post" action="insert_result.php">
  <label for="userid">아이디:</label>
  <input type="text" name="userid" required><br>

  <label for="name">이름:</label>
  <input type="text" name="name" required><br>

  <label for="birthyear">출생년도:</label>
  <input type="text" name="birthyear" required><br>

  <label for="addr">지역:</label>
  <input type="text" name="addr" required><br>

  <label for="mobile1">휴대폰 국번:</label>
  <input type="text" name="mobile1" required><br>

  <label for="mobile2">휴대폰 전화번호:</label>
  <input type="text" name="mobile2" required><br>

  <label for="height">신장:</label>
  <input type="text" name="height" required><br>

  <label for="mdate">회원 가입일:</label>
  <input type="text" name="mdate" required><br>

  <br><br>
  <input type="submit" value="회원 입력">
</form>
</body>
</html>
