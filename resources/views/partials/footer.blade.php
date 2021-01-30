<footer class="section footer-classic context-dark bg-image">
    <div class="container">
        <div class="row row-30 p-4">
            <div class="col-md-4 col-xl-5">
                <div class="pr-xl-4"><a class="brand" href="muh5z.html"><img class="brand-logo-light"
                                                                             src="{{asset('images/img-logo-mu-h5.png')}}"
                                                                             alt="MU H5" width="103px"></a>
                    <p>Game MU H5 thể loại Game H5 chơi trên mọi thiết bị, không cần cài đặt, không tốn dung lượng. Đồ
                        họa siêu đẹp, điểm danh nhận KC, đánh BOSS rớt KC. MU Khởi Nguyên H5</p>
                    <!-- Rights-->
                </div>
            </div>
            <div class="col-md-4">
                <dl class="contact-list">
                    <dt>Địa chỉ</dt>
                    <dd>714 Nguyễn Kiệm, P.4, Q.Phú Nhuận</dd>
                </dl>
                <dl class="contact-list">
                    <dt>Email</dt>
                    <dd><a href="mailto:#">muh5z.com@gmail.com</a></dd>
                </dl>
            </div>
            <div class="col-md-4 col-xl-3">
                <h5>Li&ecirc;n k&#7871;t</h5>
                <ul class="nav-list">
                    <li><a target="blank" href="#">Fanpage</a></li>
                    <li><a target="blank" href="#">Cộng đồng</a></li>
                    <li><a target="blank" href="#">Hỗ trợ</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
        </div>

        <div class="row no-gutters social-container">
            <div class="col"><a class="social-inner" href="{{route('home')}}"><span>Trang chủ</span></a></div>
            <div class="col"><a class="social-inner" href="@if (session()->has('username'))
                {{ url('user/home') }}
                @else
                {{route('get.login')}}
                @endif"><span>Tài khoản</span></a></div>
            <div class="col"><a class="social-inner" href=""><span>Nạp xu</span></a></div>
            <div class="col"><a class="social-inner" href="#"><span>Điều khoản</span></a></div>
        </div>
    </div>
</footer><!-- ./Footer -->
