<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN PHP</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <h3 class = "text-uppercase text-center my-4">Đăng Nhập </h3>
        <form action = "xulylog.php" method = "POST">
            Username: <input name = "user" type = "text" class = "form-control" require="">
            Password: <input name = "pass" type = "password" class = "form-control" require="">
            <br><input name = "submit" type = "submit" value = "Login" class = "btn btn-block btn-info">
        </form>
    </div>
</body>
</html>