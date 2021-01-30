<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-sc"text-danger"=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>Quên mật khẩu | H5GATE.COM</title>

    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">



    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

    </style>
    <!-- Custom styles for this template -->
    <link href="{{asset('login/css/css-signin.css')}}" rel="stylesheet">
</head>
<body class="text-center">
<script type="text/javascript">
    function ajaxLogin() {
        var username = $("#username").val();
        var email = $("#email").val();
        if (!username) {
            $("#msg").addClass("text-danger ").html('<i class="fa fa-close" aria-hidden="true"></i> Vui lòng nhập tên đăng nhập');
            $("#username").focus();
        } else if (!email) {
            $("#msg").addClass("text-danger").html('<i class="fa fa-close" aria-hidden="true"></i> Vui lòng nhập email');
            $("#email").focus();
        }
        else
        {
            $.post('/api/users/AjaxForgotPassword.php', {username:username,email:email,}, function (result){
                    if(result.status){
                        $("#msg").html('<i class="fa fa-check" aria-hidden="true"></i>  Gửi yêu cầu thành công, vui lòng kiểm tra mail để tiếp tục (kể cả mục Spam)!').removeClass("text-danger").addClass("text-success");

                    }
                    else{
                        $("#msg").addClass("text-danger").html('<i class="fa fa-close" aria-hidden="true"></i> '+result.msg);
                    }
                },
                'JSON'
            );
        }
    }
</script>

<form method="post" onsubmit="ajaxLogin();return false;" class="form-signin">
    <div class="bg-light border rounded p-4 m-3">
        <div class="avatar">
            <img src="https://www.tutorialrepublic.com/examples/images/avatar.png" alt="Avatar">
        </div>
        <!-- <img class="mb-4" src="/assets/img/sdfsdf.png" alt="" width="150"> -->

        <h1 class="h3 m-3 font-weight-normal">Quên mật khẩu</h1>

        <div class="form-row align-items-center">
            <div class="col-12">
                <label class="sr-only" for="inlineFormInputGroup">Nhập tài khoản</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></div>
                    </div>
                    <input type="text" id="username" name="username" class="form-control" id="inlineFormInputGroup" placeholder="Nhập tài khoản">
                </div>
            </div>
            <div class="col-12">


                <label class="sr-only" for="inlineFormInputGroup">Nhập email</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></div>
                    </div>
                    <input type="email" id="email" name="password" class="form-control" id="inlineFormInputGroup" placeholder="Nhập mật khẩu">
                </div>
            </div>
        </div>

        <span id="msg"></span>

        <button class="btn btn-lg btn-info btn-block" type="submit">Xác nhận</button></form>
<div class="text-center m-2 font-italic">hoặc</div>
<button type="button"  href="javascript:void(0)" onclick="fblogin()" class="btn btn-lg btn-primary btn-block"> <i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</button>
<script type="text/javascript">
    function fblogin(){window.location='https://360game.vn/h5/auth/fb-login?url=https%3A%2F%2Fh5.bb.360game.vn%2Fquick-play%3F'}
</script>
<hr>
<div class="row">

    <div class="col-6"><p><a href="{{route('get.login')}}">Đăng nhập</a></p></div>

    <div class="col-6"><p><a href="{{route('get.register')}}"> Đăng ký</a></p></div>
</div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
