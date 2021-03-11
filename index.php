<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">


</head>
<body class="m-0">
    <div class="block_login">
        <div class="card_login border-25">
            <div class="login_title">
                <p>Please Login</p>
            </div>
                <form method="post" action="login_process.php">
                    <div class="input_username">
                        <input id="username" type="text" name="username" />
                    </div>
                    <div class="input_password">
                        <input id="password" type="text" name="password" />
                    </div>
                    <input id="submit" type="submit" name="submit" value="LOGIN" />
                </form>
        </div>
    </div>
</body>
</html>