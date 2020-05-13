<!DOCTYPE html>
<html>
<head>
<title>Testing Post Method</title>
</head>
<body>
<form action="test_form.php" method="post">
    <p>Enter login: <input type="text" name="login" value="<?=$input_login?>"><?=$error_login?></p>
    <p>Enter password: <input type="password" name="pass" value="<?=$input_pass?>"><?=$error_pass?></p>
    <p><input type="submit" value="submit" name="submit"></p>
</form>
</body>
</html>
