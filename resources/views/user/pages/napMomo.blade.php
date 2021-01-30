@extends('user.layout')

@section('content')
<div class="row pt-3">


    <div class="col-lg-9 col-md-12 col-xs-12 pb-2">

        <div id="smartwizard" class="sw-main sw-theme-dots stepwizard p-4 border sw-theme-none">
            <h4><i class="fa fa-money" aria-hidden="true"></i> Nạp tiền qua Momo</h4>
            <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#exampleModal">
                Hướng dẫn nạp xu bằng Momo
            </button>
            <ul class="nav nav-tabs step-anchor">
                <!-- <li><a href="#step-1">Bước 1 <br /><small>Chọn số tiền muốn nạp</small></a></li> -->
                <li class="nav-item active"><a href="#step-1" class="nav-link">Bước 1<br><small>Step 1</small></a></li>
                <li class="nav-item"><a href="#step-2" class="nav-link">Hoàn thành<br><small>Step 2</small></a></li>
            </ul>

            <div class="sw-container tab-content" style="min-height: 0px;">
                <!--  <div id="step-0" class="">
                     <form>
                       <div class="form-group row">
                         <label for="inputEmail3" class="col-sm-3 col-form-label">Tài khoản nhận</label>
                         <div class="col-sm-9">
                           <input type="email" class="form-control" id="inputEmail3" value="" disabled>
                         </div>
                       </div>
                       <div class="form-group row">
                         <label for="inputPassword3" class="col-sm-3 col-form-label">Số tiền nạp</label>
                         <div class="col-sm-9">
                            <select id="inputState" class="form-control">
                             <option selected>Vui lòng chọn...</option>
                             <option>10,000</option>
                           </select>
                         </div>
                       </div>
                       <fieldset class="form-group">
                         <div class="row">
                           <legend class="col-form-label col-sm-3 pt-0">Chuyển vào</legend>
                           <div class="col-sm-9">
                             <div class="form-check">
                               <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="option1" checked>
                               <label class="form-check-label" for="gridRadios1">
                                 Tài khoản chính
                               </label>
                             </div>

                           </div>
                         </div>
                       </fieldset>


                     </form>
                 </div> -->
                <div id="step-2" class="tab-pane step-content">

                    <p><b>Bước 1</b>: Bạn hãy  <img width="25" src="https://img.mservice.io/momo-payment/icon/cdn/material/img/qr-code-1.png" alt=""><b> Quét mã</b> dưới đây bằng ứng dụng <b>Momo</b>.<br>Hoặc chọn mục <b>Chuyển tiền</b> <i class="fa fa-arrow-right"></i> <b>Chuyển tiền đến ví MoMo</b> Nhập số điện thoại:
                        <span class="badge-warning p-1 font-weight-bold">0332699443</span></p>
                    <div class="row">
                        <div class="col-md-12 text-center">
                            <img src="/assets/img/	.jpg" width="200">
                            <p><small class="text-muted"></small></p><div class="spinner-border spinner-border-sm text-info"></div><small class="text-muted">
                                Đang chờ bạn quét ...</small><p></p>

                        </div>




                    </div>
                    <p><b>Bước 2: Quan trọng</b>:</p>
                    <ul style="background-color: #fcf8e3" class="list-group p-3">
                        Nhập thông tin chính xác như sau
                        <li class="list-group-item font-weight-bold">Số tiền : <span id="payment_amount" class="badge-success p-1">lỗi</span></li>
                        <li class="list-group-item font-weight-bold">Nội dung tin nhắn : <span id="payment_id" class="badge-danger p-1">lỗi</span></li>
                    </ul>

                    <div class="text-center"><button id="submitPayment" class="btn btn-info mt-2" onclick="confirmMsg();"><i class="fa fa-check-circle" aria-hidden="true"></i>
                            Xác nhận đã chuyển</button></div>
                </div>
                <div id="step-1" class="tab-pane step-content" style="display: block;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="alert alert-warning fade in alert-dismissible show">
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true" style="font-size:20px">×</span>
                                </button>    <strong>Lưu ý!</strong> Số tiền phải là số lớn hơn 10,000 và chia hết cho 1,000.
                            </div>
                            <div class="alert alert-info" style="margin:10px 0 15px 0; /*padding:5px 5px 5px 15px;*/">
                                <i class="fa fa-info-circle"></i> <a target="_blank" href="http://muh5z.com/huong-dan/nap-tien-bang-momo">Click xem hướng dẫn nạp qua Momo.</a>
                            </div>
                        </div>

                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="confirmAmount">Nhập số tiền muốn nạp</label>
                                <input type="tel" class="form-control" id="confirmAmount" placeholder="Chọn để nhập" required="" maxlength="19">

                                <div class="text-info pt-2">Xu thực nhận: <span id="coinReceive">0 </span></div>
                                <div class="text-info pt-2">Lượt quay tặng thêm: <span id="turnReceive">0 </span></div>
                            </div>

                        </div>



                    </div>


                </div>
            </div><div class="btn-toolbar sw-toolbar sw-toolbar-bottom justify-content-end"><div class="btn-group mr-2 sw-btn-group" role="group"><button class="btn btn-warning sw-btn-next" type="button">Bước tiếp theo</button></div></div>
        </div>
    </div>
    @include('user.slider')

</div>
@endsection