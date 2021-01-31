@extends('user.layout')

@section('content')
    <div class="row pt-3">
        <div class="col mb-2">
            <div>

                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1"><i class="fa fa-list" aria-hidden="true"></i> Nạp thẻ cào</a></li>

                </ul>
                <div class="tab-content">
                    <!-- Tab 1 thông tin tài khoản -->
                    <div class="tab-pane active border border-top-0 p-3" role="tabpanel" id="tab-1">
                        <div class="alert alert-warning alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert">×</button>
                            <strong>Lưu ý!</strong> Vui lòng chọn đúng mệnh giá, seri thẻ và nhà mạng nếu không sẽ bị mất thẻ (không hỗ trợ), thẻ nạp có thể bị trễ, chờ trong ít phút hoặc liên hệ admin để được trợ giúp!
                        </div>

                        <form method="post" onsubmit="ajaxMobiPayment();return false;">


                            <div class="form-group">
                                <label for="inputAddress2">Loại thẻ</label>
                                <select id="card_type_id" class="form-control">
                                    <option value="">- Vui lòng chọn -</option>
                                    <option value="VTT">Viettel</option>
                                    <option value="VNP">Vinaphone</option>
                                    <option value="VMS">Mobifone</option>
                                    <option value="ZING">Zing</option>

                                </select>
                                <small class="text-muted">Các thẻ ưu tiên sẽ được +10% giá trị thẻ nạp (VD: 100k sẽ nhận được 110k xu)</small>
                            </div>

                            <div class="form-group">
                                <label for="inputAddress2">Mệnh giá</label>
                                <select onchange="confirm_price(this.value)" id="price_guest" class="form-control">
                                    <option value="">- Chọn mệnh giá -</option>
                                    <option value="10000">10.000vnđ</option>
                                    <option value="20000">20.000vnđ</option>
                                    <option value="30000">30.000vnđ</option>
                                    <option value="50000">50.000vnđ</option>
                                    <option value="100000">100.000vnđ</option>
                                    <option value="200000">200.000vnđ</option>
                                    <option value="300000">300.000vnđ</option>
                                    <option value="500000">500.000vnđ</option>
                                    <option value="1000000">1.000.000vnđ</option>
                                </select>
                                <div class="text-info pt-2">Xu thực nhận: <span id="coinReceive"> 0</span></div>
                                <div class="text-info pt-2">Lượt quay tặng thêm: <span id="turnReceive"> 0</span></div>
                            </div>

                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputFullname">Số seri</label>
                                    <input id="seri" type="text" class="form-control" placeholder="Nhập số seri">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputPassword4">Mã thẻ</label>
                                    <input id="pin" type="text" class="form-control" placeholder="Nhập mã thẻ">
                                </div>
                            </div>

                            <div class="form-group">
                                <span id="msg"></span>
                            </div>

                            <button type="submit" class="btn btn-info">Nạp thẻ</button>
                        </form>
                    </div>
                    <!-- list game -->

                </div>

            </div>
        </div>
        @include('user.slider')

    </div>
@endsection
