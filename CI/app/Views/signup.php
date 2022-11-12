<!--
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet

    <div class="container mt-5">
        <div class="row justify-content-md-center">
            <div class="col-5">
                <h2>Register User</h2>
                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/public/SignupController/store" method="post">
                    <div class="form-group mb-3">
                        <input type="text" name="username" placeholder="Name" value="<?= set_value('username') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="email" name="email" placeholder="Email" value="<?= set_value('email') ?>" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="password" placeholder="Password" class="form-control" >
                    </div>
                    <div class="form-group mb-3">
                        <input type="password" name="confirmpassword" placeholder="Confirm Password" class="form-control" >
                    </div>
                    <div class="d-grid">
                        <button type="submit" class="btn btn-dark">Signup</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;400;500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link href="https://fonts.googleapis.com/css2?family=Milonga&display=swap" rel="stylesheet">
    <title>Codeigniter Auth User Registration Example</title>
    <style>
        a{
            text-decoration: none;
        }
        body{
            background-image: url(images/image1.png);
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
    </style>
</head>
<body>
    <div class="form-cont d-flex flex-column align-items-center">
        <h3>Zamve Sign Up</h3>
                <?php if(isset($validation)):?>
                <div class="alert alert-warning">
                   <?= $validation->listErrors() ?>
                </div>
                <?php endif;?>
                <form action="<?php echo base_url(); ?>/public/SignupController/store" method="post"  class="d-flex flex-column align-content-center align-items-start">
                <label for="username">Username</label>
                <input type="text" name="username" id="uname">
                <label for="email">Email</label>
                <input type="email" name="email" id="setpass">
                <label for="password">Set Password</label>
                <input type="password" name="password" id="confpass">
                <button type="submit" class="align-self-center">Register</button>
                </form>
        <br><br>
        <div class="row container-fluid bottom-text-cont">
            <div class="col-7 d-flex justify-content-start">
                <span>Have an account?&nbsp;</span><span><a href="http://localhost/CI/public/login" style="color:#FFADBC;"><b>Sign in</b></a></span>
            </div>
            <div class="col-5 d-flex justify-content-end">
                <span>Forgot password?</span>
            </div>
        </div>
    </div>
</body>
</html>