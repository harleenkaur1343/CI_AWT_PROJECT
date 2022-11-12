<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="http://localhost/CI/public/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Milonga&display=swap" rel="stylesheet">

    <title>Zamve Login</title>
    <style>
        a{
            text-decoration: none;
        }
        body{
            background-image: url(http://localhost/CI/public/images/image1.png);
        }
        .row{
            padding:0px;
        }
        .col{
            padding:0px;
        }
        .form-cont{
            position:absolute;
            top:50%;
            left: 50%;
            transform: translate(-50%,-50%);
            background-color: #383838;
            padding:28px 24px;
            border-radius: 16px;
            color:#fff;
            font-family: Raleway;
            font-weight: 200;
            width:400px;
        }
        .form-cont h3{
            color:#fff;
            font-family: Milonga;
            font-weight: 400;
            font-size:24px;
            margin-bottom: 30px;
        }
        .form-cont span{
            font-size:12px;
            font-family: Raleway;
        }
        .form-cont label{
            font-family: 'Raleway';
            font-weight: 400;
            font-size: 14px;
            letter-spacing: .05em;
            line-height: 15px;
            color: #FFFFFF;
            display: block;
            margin-bottom: 12px;
        }
        .form-cont input{
            background-color: #2E2E2E;
            width: 328px;
            height: 48px;
            border-radius:6px;
            border: none;
            display: block;
            margin-bottom: 28px;
            color: #fff;
            font-size: 14px;
        }
        .form-cont input:hover{
            border: 1px solid rgb(224, 224, 224);
        }
        .form-cont input:focus{
            outline:unset !important;
            border: 1px solid #f8cdd4;
        }
        .form-cont button{
            width: 112px;
            height: 35px;
            background: #F7526F;
            border-radius: 4px;
            color: #fff;
            font-size: 14px;
            font-weight: 500;
            letter-spacing: .05em;
            border: none;
        }
        .form-cont button:hover{
            background-color: #F63254;
            cursor:pointer;
        }
        .bottom-text-cont span{
            letter-spacing: 0.1em;
           
        }
        .other-signin{
            width: 328px;
            border-radius: 6px;
            background-color: #fff;
            color: #1d1d1d;
            text-align: center;
            font-size: 14px;
            font-weight: 600;
            padding:12px 8px;
            border:3px solid #383838;
        }
        .other-signin:hover{
            cursor: pointer;
            border:3px solid rgb(9, 189, 212);
            transition:all 0.5s;
        }
    </style>
</head>
<body>
    <div class="form-cont d-flex flex-column align-items-center">
        <h3>Zavme Login</h3>
        <form action="http://localhost/CI/public/index.php/User" class="d-flex flex-column align-content-center align-items-start">
            <?=csrf_field()?>
            <label for="email">Email</label>
            <input type="text" name="email" id="uname">
            <label for="password">Password</label>
            <input type="password" name="password" id="setpass">

            <button type="submit" class="align-self-center">Sign in</button>
        </form><br>
        <!--<p>Or</p>
        <div class="other-signin d-flex align-items-center justify-content-center">
            Sign in with Google&nbsp;&nbsp;&nbsp;&nbsp;
            <img src="http://localhost/CI/public/images/logos_google-icon.svg" alt="google-icon">
        </div>-->
        <br><br>
        <div class="row container-fluid bottom-text-cont">
            <div class="col-7 d-flex flex-column justify-content-start align-items-start">
                <span>Don't have an account?</span><span><a href="http://localhost/CI/public/signup" style="color:#FFADBC;"><b>Sign up</b></a></span>
            </div>
            <div class="col-5 d-flex justify-content-end">
                <span>Forgot password?</span>
            </div>
        </div>
    </div>
</body>
</html>