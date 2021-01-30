<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Quản lý tài khoản | MU H5</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"rel="stylesheet">

    <link rel="stylesheet" href="{{asset('user/css/user-style.css')}}">
    <link rel="shortcut icon" href="{{asset('img/favicon.png')}}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>


    <script>
        $(document).ready(function () {
            ajaxGetUserInfo();
            ajaxGetVipInfo();

        });
        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        })

    </script>

</head>

<body>
<div></div>
<nav class="navbar navbar-icon-top navbar-expand-lg navbar-light bg-light fixed-top">
    <div class="container">

        <button class="navbar-toggler collapsed" type="button" data-toggle="collapse"
                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="navbar-collapse collapse" id="navbarSupportedContent" style="">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="{{url('/user/home/'.$username)}}">
                        <i class="fa fa-home"></i>
                        Trang chủ
                        <span class="sr-only">(current)</span>
                    </a>
                </li>


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-credit-card">
                            <span class="badge badge-warning">KM</span>
                        </i>
                        Nạp xu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="/user/payment_momo">Nạp MoMo</a>
                        <a class="dropdown-item" href="/user/payment_bank">Nạp ngân hàng</a>
                        <a class="dropdown-item" href="/user/payment_mobi">Nạp thẻ cào</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="/user/exchange">
                        <i class="fa fa-lg fa-exchange-alt">
                        </i>
                        Nạp game
                    </a>
                </li>
            </ul>


            <ul class="navbar-nav ">

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-users"></i>
                        Cộng đồng
                    </a>
                    <div class="dropdown-menu" aria-labelledby="accountDropdown">

                        <a target="_blank" href="https://facebook.com/muh5z" class="dropdown-item "><i
                                class="fab fa-facebook fa-lg"></i> Fanpage</a>
                        <a target="_blank" href="https://facebook.com/groups/donggameviet" class="dropdown-item "><i
                                class="fab fa-facebook fa-lg"></i> Group</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-list">
                        </i>
                        Tính năng
                    </a>
                    <div class="dropdown-menu" aria-labelledby="accountDropdown">

                        <a href="/user/payment_log" class="dropdown-item "><i class="fa fa-lg fa-history"
                                                                              aria-hidden="true"></i> Lịch sử nạp</a>
                        <a href="/user/giftcode" class="dropdown-item "><i class="fa fa-lg fa-gift"
                                                                           aria-hidden="true"></i> Giftcode</a>

                    </div>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="accountDropdown" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fa fa-user">

                        </i>
                        <span class="niceUsername"></span>
                        {{$username}}
                    </a>
                    <div class="dropdown-menu" aria-labelledby="accountDropdown">
                        <a class="dropdown-item" href="/user/changePassword"><i class="fas fa-lg fa-lock"></i> Đổi mật
                            khẩu</a>
                        <a class="dropdown-item" href="/user/home"><i class="fas fa-info fa-lg"></i> Thông tin tài khoản</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('logout')}}"><i class="fas fa-sign-out-alt fa-lg"></i>
                            </i> Đăng xuất</a>
                    </div>
                </li>
            </ul>

        </div>
    </div>
</nav>

<script type="text/javascript">
    //diem danh popup
    function attendance() {
        $(document).ready(function () {
            $.get("/api/attend.php",
                function (json) {
                    if (json.status == 1) {
                        Swal.fire(
                            'Điểm danh thành công',
                            "Bạn nhận được " + json.msg + ' Gem',
                            'success'
                        );
                    } else {
                        Swal.fire(
                            'Thất bại',
                            json.msg,
                            'error'
                        );
                    }
                }, 'json');
        });
    }

    // Get vip info
    function ajaxGetVipInfo() {
        var uid = "2577";
        $.post('/api/users/AjaxGetVipInfo.php', {
                uid: uid
            }, function (result) {
                if (result.status) {
                    valeur = result.vip_exp_current / result.vip_exp_next * 100;
                    $('.vip_level_current').html(result.vip_level_current);
                    $('.vip_level_next').html(result.vip_level_next);
                    $('.vip_exp_current').html(result.vip_exp_current);
                    $('.need_to_up').html(result.vip_exp_next);
                    if (result.vip_level_current < 5)
                        $('.progress-bar').css('width', valeur + '%').attr('aria-valuenow', valeur);
                    else {
                        $("#vip_info").html("Bạn đã đạt cấp VIP tối đa");
                        $('.progress-bar').css('width', '100%').attr('aria-valuenow', 100);
                    }
                } else {
                    $("#msg2").addClass("alert alert-danger").html(result.msg);

                }
            },
            'JSON'
        );
    }

    // Get user info
    function ajaxGetUserInfo() {
        var uid = "2577";
        $.post('/api/users/AjaxGetUserInfo.php', {
                uid: uid
            }, function (result) {


                if (result.status) {
                    if (result.avatar != '') {
                        $("#avatar").attr("src", result.avatar);

                    }
                    ver_icon = '';
                    if (result.verify) {
                        ver_icon = '<a class="p-1" href ="#" data-toggle="tooltip" data-html="true" data-placement="right" title="Đã xác minh"><img src="/assets/img/verify.png"></a>';
                    }
                    if (result.first_name != null || result.last_name != null)
                        var fullname = result.last_name + ' ' + result.first_name;
                    else
                        var fullname = result.niceUsername;
                    $(".fullname").val(fullname);
                    $(".fullname_txt").html(fullname + ver_icon);
                    $(".niceUsername").html(result.niceUsername);
                    $("#phonenumber").val(result.phonenumber);
                    $("#idcard").val(result.idcard);
                    $("#email").val(result.email);
                    $("#ggcoin").html(result.ggcoin);
                    $("#xuCurrent").val(result.ggcoin);
                    $("#gem").html(result.ggcoin_lock);
                    $("#vip_level").html(result.vip_level);
                    $("[data-toggle=tooltip]").tooltip();

                } else {
                    $("#msg2").addClass("alert alert-danger").html(result.msg);

                }
            },
            'JSON'
        );
    }

    function validateEmail($email) {
        var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
        return emailReg.test($email);
    }

    function ajaxUpdatePassword() {
        var password = $("#currentPasswordChange").val();
        var newPassword = $("#newPassword").val();
        var reNewPassword = $("#reNewPassword").val();

        if (!password || !newPassword || !reNewPassword) {

            $("#msg2").addClass("alert alert-danger").text('Vui lòng nhập đầy đủ các trường').show();
            return false;
        }
        $.post('/api/users/AjaxUpdatePassword.php', {
                password: password,
                newPassword: newPassword,
                reNewPassword: reNewPassword
            }, function (result) {
                if (result.status) {
                    $("#msg2").text('Cập nhật mật khẩu thành công!').removeClass("alert alert-danger").addClass("alert alert-success").show();
                } else {
                    $("#msg2").addClass("alert alert-danger").html(result.msg);
                }
            },
            'JSON'
        );
    }

</script>
<script type="text/javascript">
    $(document).ready(function () {

        const Toast = Swal.mixin({
            toast: true,
            position: 'bottom-end',
            showConfirmButton: true,
            confirmButtonText: "x",
            timer: 10000
        })


        setTimeout(function () {

            Toast.fire({
                type: 'success',
                title: 'Tham gia group nhận giftcode + lượt quay VQMM&nbsp;<a target="_blank" class="btn btn-sm btn-success" href="https://facebook.com/groups/donggameviet">THAM GIA</a>'
            })
        }, 10000);

    });


</script>


<div class="container">
    <div class="row mb-3 ">
        {{--        hien thi noi dung --}}
        @yield('content')
        {{--        ket thuc noi dung--}}

        <div class="footer-basic">
            <footer>

                <ul class="list-inline">
                    <li class="list-inline-item"><a href="/">Trang chủ</a></li>
                    <li class="list-inline-item"><a href="#">Chính sách</a></li>
                </ul>
            </footer>
        </div>
</body>
<script type="text/javascript" src="{{asset('user/js/jquery.smartWizard.min.js')}}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-81642971-6">
</script>
<script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
        dataLayer.push(arguments);
    }

    gtag('js', new Date());

    gtag('config', 'UA-81642971-6');
</script>
<script type="text/javascript">
    $(document).ready(function () {

        $('#smartwizard').smartWizard();

    });

</script>
<!---Dùng não và code như 1 người trưởng thành đi :Ds---->

</html>


