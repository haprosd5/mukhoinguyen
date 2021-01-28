@extends('layouts.frontend')

@section('content')
    <div class="row ng-scope">

        <div class="col-md-12 mt-4 mb-4">
            @for ($i = 0; $i < 5; $i++)

                <section class="search-result-item">
                    <div class="search-result-item-body p-2 mt-2">
                        <div class="row">
                            <div class="col-md-3">
                                <a href="#"><img class="image justify-content-center" src="{{asset('images/img-thum-tin-tuc.jpg')
                    }}">
                                </a>
                            </div>
                            <div class="col-sm-7 p-0">
                                <h4 class="search-result-item-heading"><a
                                            href="{{route('post')}}">[Sự kiện] KM
                                        100% Quy Đổi
                                        Kim Cương Chào Đón Máy Chủ 3</a></h4>
                                <p class="info">23-01-2021</p>
                                <p class="description">Trong thời gian diễn ra sự kiện từ: 10h ngày 23/1 đến 10h ngày
                                    24/1 khi thực
                                    hiện quy đổi xu -&gt; KC sẽ nhận được x2 KC

                                    &nbsp;

                                    VD: gói quy đổi 20k xu sẽ nhận được 400k KC (có tính mốc VIP + mốc nạp)

                                    Áp dụng cho toàn bộ máy chủ

                                    &nbsp;

                                    Ch&amp;u... </p>
                            </div>
                            <div class="col-sm-2">
                                <a class="btn btn-primary btn-info btn-sm"
                                   href="{{route('post')}}">Xem thêm...</a>
                            </div>
                        </div>
                    </div>
                </section>

            @endfor
        </div>
    </div>




@endsection
