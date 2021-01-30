
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <link rel="shortcut icon" href="{{asset('login/favicons/img-favicon.png')}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Game Ninja đồ họa chibi, lối chơi chiến thuật mới lạ, cộng đồng đông đảo, giải trí đích thực. Chơi trên mọi trình duyệt không cần cài đặt." />
    <title>Đăng ký tài khoản | Naruto H5</title>

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
    var referrer = "none";
    function ajaxRegister() {
        var username = $("#username").val();
        var password = $("#password").val();
        var rePassword = $("#rePassword").val();
        var email = $("#email").val();
        if (!username) {
            $("#msg").addClass("text-danger").html('<i class="fa fa-close" aria-hidden="true"></i> Vui lòng nhập tên tài khoản');

            $("#username").focus();
        }else if (!email) {
            $("#msg").addClass("text-danger").html('<i class="fa fa-close" aria-hidden="true"></i> Vui lòng nhập Email');
            $("#email").focus();
        }else if (!password) {
            $("#msg").addClass("text-danger").html('<i class="fa fa-close" aria-hidden="true"></i> Vui lòng nhận mật khẩu');
            $("#password").focus();
        }
        else if (!rePassword) {
            $("#msg").addClass("text-danger").html('<i class="fa fa-close" aria-hidden="true"></i> Vui xác nhập mật khẩu');
            $("#rePassword").focus();
        }else if(password != rePassword){
            $("#msg").addClass("text-danger").html('<i class="fa fa-close" aria-hidden="true"></i> Xác nhận mật khẩu không chính xác');
        }

        else
        {
            $.post('/api/users/AjaxRegister.php', {password:password,username:username, email:email,rePassword:rePassword, referrer:referrer}, function (result){
                    if(result.status){
                        $("#msg").html('<i class="fa fa-check" aria-hidden="true"></i> Đăng kí thành công!').removeClass("text-danger").addClass("text-success");
                        setTimeout(function(){
                            window.location.href = '/';

                        }, 1000);
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
<form method="post" onsubmit="ajaxRegister();return false;" class="form-signin">
    <div class="bg-light border rounded p-4 m-3">
        <div class="avatar">
            <img src="{{asset('login/images/img-avatar.png')}}" alt="Avatar">
        </div>
        <!-- <img class="mb-4" src="/assets/img/sdfsdf.png" alt="" width="150"> -->

        <h2 class="h3 m-3 font-weight-normal">Đăng ký</h2>

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
                <label class="sr-only" for="inlineFormInputGroup">Email</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                    </div>
                    <input type="email" id="email" name="email" class="form-control" id="inlineFormInputGroup" placeholder="Nhập Email">
                </div>
            </div>
            <div class="col-12">
                <label class="sr-only" for="inlineFormInputGroup">Nhập mật khẩu</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></div>
                    </div>
                    <input type="password" id="password" name="password" class="form-control" id="inlineFormInputGroup" placeholder="Nhập mật khẩu">
                </div>
            </div>
            <div class="col-12">
                <label class="sr-only" for="inlineFormInputGroup">Xác nhận mật khẩu</label>
                <div class="input-group mb-2">
                    <div class="input-group-prepend">
                        <div class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></div>
                    </div>
                    <input type="password" id="rePassword" name="rePassword" class="form-control" id="inlineFormInputGroup" placeholder="Xác nhận mật khẩu">
                </div>
            </div>
        </div>
        <span id="msg"></span>

        <div class="checkbox mb-3">
            <label>
                <input type="checkbox" value="remember-me"> Đồng ý với điều khoản
            </label>
        </div>
        <button class="btn btn-lg btn-info btn-block" type="submit">
            Đăng ký</button>

</form>
<!-- <div class="text-center m-2 font-italic">hoặc</div>
  <button type="button"  href="javascript:void(0)" onclick="fblogin()" class="btn btn-lg btn-primary btn-block"> <i class="fa fa-facebook-square" aria-hidden="true"></i> Facebook</button>
  <script type="text/javascript">
    function fblogin(){window.location='/auth/fblogin/?returnURL=/'}
    </script> -->
<hr>
<div class="row">


    <div class="col-12"><p class=" text-center">Đã có tài khoản? <a href="{{route('get.login')}}"> Đăng
                nhập</a></p></div>
</div>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</body>
</html>
<?php
