<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style_login.css">
    <title>Login</title>
    <style>
        .warpper {
            width:100%;
            display:flex;
            justify-content:center;
            align-items:center;
            height: calc(100vh - 230px - 34px);
        }
        .warpper form {
            background-image: linear-gradient(to top, #fbc2eb 0%, #a6c1ee 100%);
            padding: 20px;
            border-radius:12px;
            height:320px;
        }
        .warpper h1 {
            text-align: center;
            margin-bottom: 48px;
        }
        .warpper .submit {
            display: block;margin: 0 auto;
            background-color: red;
            color: #fff;
            margin-top: 24px;
            padding: 12px;
            border-radius:12px;
            cursor: pointer;
        }
        .taikhoan {
            margin-bottom: 24px;
        }
        .taikhoan, .matkhau {
            display:flex;
            justify-content:center;
            align-items: center;
        }
        .taikhoan label, .matkhau label {
            margin-bottom: 0;
        }
        .taikhoan input, .matkhau input {
            margin-top: 0;
            margin-left: 24px;
        }
        .text-form {
            display: none;color: red;
        }

    </style>
</head>
<body>
   
    <div class="warpper">
        <form action="" method="POST">
            <h1>Đăng nhập</h1>
        <div class="taikhoan">
            <label for=""> Tài Khoản</label><br>
            <input type="text" name="taikhoan">
        </div>

        <div class="matkhau">
            <label for=""> Mật khẩu</label><br>
            <input type="password" name="password">
        </div>
        <div>
            <input class="submit" type="submit" name="dangnhap" value="Đăng Nhập">
        </div>
        <!-- <p class="text-form">Mật khẩu hoặc Email sai ,vui lòng nhập lại.</p> -->
        </form>
    </div>
    
</div>

    
</body>
</html>