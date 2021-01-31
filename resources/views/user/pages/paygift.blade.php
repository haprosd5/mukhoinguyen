@extends('user.layout')

@section('content')
    <div class="row pt-3">
        <div class="col-lg-9 col-md-12 col-xs-12 pb-2">
            <div>

                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1"><i class="fa fa-list" aria-hidden="true"></i> Quy đổi xu</a></li>

                </ul>
                <div class="tab-content">

                    <!-- Tab 1 thông tin tài khoản -->
                    <div class="tab-pane active border border-top-0 p-3" role="tabpanel" id="tab-1">

                        <form onsubmit="exchangeMoney();return false;">
                            <div class="form-group">
                                <label for="inputGame">Chọn game</label>
                                <select id="inputGame" class="form-control">
                                    <option value="1" selected="">MU</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="inputGameServer">Máy chủ</label>
                                <select onchange="getCharname(this.value)" id="inputGameServer" class="form-control">
                                    <option value="" selected="">Vui lòng chọn</option>
                                    <option value="4">Khởi Nguyên 4</option><option value="3">Khởi Nguyên 3</option><option value="2">Khởi Nguyên 2</option><option value="1">Khởi Nguyên 1</option></select>
                            </div>
                            <div class="form-group">
                                <label for="xxx">Nhân vật:</label>
                                <input type="text" class="form-control" id="actorname" disabled="true" value="Chưa có nhân vật">
                                <small class="text-muted">Vui lòng kiểm tra đúng tên nhân vật</small>
                            </div>

                            <div class="form-group">
                                <label for="inputGiftcode">Giftcode</label>
                                <input class="form-control" id="inputGiftcode" type="text" placeholder="Nhập mã quà tặng">
                            </div>

                            <div class="form-group">
                                <span id="msg"></span>                            </div>

                            <button id="confirmExchange" type="submit" class="btn btn-primary">Xác nhận</button>
                        </form>
                    </div>
                    <!-- list game -->

                </div>

            </div>

        </div>
        @include('user.slider')

    </div>
@endsection
