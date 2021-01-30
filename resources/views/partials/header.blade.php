<section id="header">

    @if ($errors->any())
        <div class="alert alert-danger text-center">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @isset($dk_error)
        {{$dk_error}}
    @endisset
    @isset($username)
        {{$username}}
    @endisset
    <div class="container header-box vertical-center text-center">
        <div class="row mx-auto">
            <div class="col-md-12">
                <h3>{{$h3text}}</h3>
                <h4 class="header-text">{{$headerText}}</h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row p-0">
            <!-- button play -->
            <div class="col-md-3 pb-3 pt-3 text-center action-box">
                <button href="#login" data-toggle="modal" class="border-0 btn-play p-4 mb-3"><i class="fa fa-gamepad"
                                                                                                aria-hidden="true"></i>
                    Chơi ngay!
                </button>
                <div class="btn-group">
                    <button onclick=" window.open('#','_blank')"
                            class="border-0 p-2 btn-play">Nạp tiền
                    </button>
                    <button href="#register" data-toggle="modal" class="border-0 p-2 btn-play">Đăng ký</button>
                </div>
            </div>
        </div>
    </div>
</section>
