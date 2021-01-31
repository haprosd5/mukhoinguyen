@extends('user.layout')

@section('content')
    <div class="row pt-3">
        <div class="col">
            <div>

                <ul class="nav nav-tabs">
                    <li class="nav-item"><a class="nav-link active" role="tab" data-toggle="tab" href="#tab-1"><i class="fa fa-list" aria-hidden="true"></i> Lịch sử nạp tiền</a></li>
                    <li class="nav-item"><a class="nav-link" role="tab" data-toggle="tab" href="#tab-2"><i class="fa fa-question" aria-hidden="true"></i> Trợ giúp</a></li>

                </ul>
                <div class="tab-content">
                    <!-- Log -->
                    <div class="tab-pane active border border-top-0 p-3" role="tabpanel" id="tab-1">
                        <div class="table-responsive">
                            <div id="memListTable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="row"><div class="col-sm-12 col-md-6"><div class="dataTables_length" id="memListTable_length"><label>Xem <select name="memListTable_length" aria-controls="memListTable" class="custom-select custom-select-sm form-control form-control-sm"><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> mục</label></div></div><div class="col-sm-12 col-md-6"><div id="memListTable_filter" class="dataTables_filter"><label>Tìm:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="memListTable"></label></div></div></div><div class="row"><div class="col-sm-12"><table id="memListTable" class="table table-striped table-bordered dataTable no-footer" role="grid" aria-describedby="memListTable_info" style="width: 789px;">


                                            <thead>
                                            <tr role="row"><th class="sorting" tabindex="0" aria-controls="memListTable" rowspan="1" colspan="1" aria-label="Mã giao dịch: activate to sort column ascending" style="width: 139px;">Mã giao dịch</th><th class="sorting" tabindex="0" aria-controls="memListTable" rowspan="1" colspan="1" aria-label="Phương thức: activate to sort column ascending" style="width: 140px;">Phương thức</th><th class="sorting" tabindex="0" aria-controls="memListTable" rowspan="1" colspan="1" aria-label="Số tiền: activate to sort column ascending" style="width: 81px;">Số tiền</th><th class="sorting" tabindex="0" aria-controls="memListTable" rowspan="1" colspan="1" aria-label="Trạng thái: activate to sort column ascending" style="width: 112px;">Trạng thái</th><th class="sorting_desc" tabindex="0" aria-controls="memListTable" rowspan="1" colspan="1" aria-sort="descending" aria-label="Ngày tạo: activate to sort column ascending" style="width: 103px;">Ngày tạo</th></tr>
                                            </thead>

                                            <tbody><tr class="odd"><td valign="top" colspan="5" class="dataTables_empty">Không tìm thấy dòng nào phù hợp</td></tr></tbody></table><div id="memListTable_processing" class="dataTables_processing card" style="display: none;">Đang xử lý...</div></div></div><div class="row"><div class="col-sm-12 col-md-5"><div class="dataTables_info" id="memListTable_info" role="status" aria-live="polite">Đang xem 0 đến 0 trong tổng số 0 mục</div></div><div class="col-sm-12 col-md-7"><div class="dataTables_paginate paging_simple_numbers" id="memListTable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="memListTable_previous"><a href="#" aria-controls="memListTable" data-dt-idx="0" tabindex="0" class="page-link">Trước</a></li><li class="paginate_button page-item next disabled" id="memListTable_next"><a href="#" aria-controls="memListTable" data-dt-idx="1" tabindex="0" class="page-link">Tiếp</a></li></ul></div></div></div></div>
                        </div>
                    </div>

                    <div class="tab-pane border border-top-0 p-3" role="tabpanel" id="tab-2">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item font-weight-bold">Nếu chưa thanh toán hoặc muốn thanh toán lại vui lòng:</li>
                            <li class="list-group-item">1. Thực hiện chuyển tiền bằng hình thức chọn từ trước (VD Momo, Bank,...)</li>
                            <li class="list-group-item">2. Chuyển tiền với Số tiền và Nội dung trong phần lịch sử giao dịch</li>
                            <li class="list-group-item">3. Chờ 2-3 phút để hệ thống kiểm tra và chuyển xu</li>
                        </ul>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item font-weight-bold">Mọi thắc mắc vui lòng liên hệ:</li>
                            <li class="list-group-item">Fanpage: <a target="_blank" href="https://facebook.com/muh5z"> Mộng Tây Du H5</a></li>
                            <li class="list-group-item">Email: vnagame.com@gmail.com</li>
                        </ul>

                        <ul class="list-group list-group-flush">
                            <li class="list-group-item font-weight-bold">Chú thích các trạng thái:</li>
                            <li class="list-group-item">Chờ thanh toán: hệ thống đang kiểm tra các bạn đã thanh toán chưa</li>
                            <li class="list-group-item">Đã thanh toán: thanh toán thành công chờ hệ thống thêm xu</li>
                            <li class="list-group-item">Hoàn thành: giao dịch thành công kiểm tra xu trong tài khoản</li>
                            <li class="list-group-item">Bị hủy: giao dịch thất bại</li>
                        </ul>

                    </div>

                </div>


            </div>
        </div>
        @include('user.slider')

    </div>
@endsection
