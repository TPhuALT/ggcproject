<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quên mật khẩu</title>
    <<<<<<< HEAD <link rel="stylesheet" href="./css/style_form.css">
        =======
        <link rel="stylesheet" href="./css/style.css">
        <style>
        input[type="submit"] {
            display: block;
            margin: 0 auto;
            color: #fff;
            background-color: #4CAF50;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
        }
        </style>
        >>>>>>> hung
</head>

<body>
    <div id="header" name="header">
        <h1>Quên mật khẩu</h1>
    </div>
    <div id="submit-form" name="submit-form">
        <form action="./forget_password.php" method="post">
            <fieldset name="submit-form">
                <div id="verification-check"></div>
                <div class="form-component">
                    <div class="form-header">Tên người dùng <p>*</p>
                    </div>
                    <input type="text" name="username" placeholder="Tên người dùng" required>
                </div>

                <div class="form-component">
                    <div id="secure_question" class="form-header">Câu hỏi bảo mật:
                    </div>
                    <input type="text" name="secure_answer" placeholder="Câu trả lời" required>
                </div>
            </fieldset>

            <div class="form-component">
                <input type="submit"
                    style="display: inline-block; margin-left: 20px; width: 40px; height: 40px; padding: 10px 10px;"
                    id="btn_homepage" onclick="location.href='./index.php'" value="🏠">
                <input id="submit" style="display: inline-block; margin-right: 5px;" type="submit" name="submit"
                    value="Gửi">
            </div>
        </form>
    </div>
</body>

<?php
    require_once("./php/connect_MySQL_n_log.php");
    require_once("./php/forget_password_action.php");
?>