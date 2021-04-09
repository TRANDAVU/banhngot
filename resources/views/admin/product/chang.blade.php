@extends('layouts.Admin_master')

@section('title', 'Thêm sản phẩm')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <x-admin.titleForm title='Thêm sản phẩm'></x-admin.titleForm>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <x-admin.form title='Sản phẩm mới' :user='$a'>
                            <x-slot name='noidung'>

                            </x-slot>

                            <x-slot name='noidungForm'>
                                <form id="quickForm" method="POST"
                                    action="{{ route('admin.adminProductcontroller.postChang') }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên sản phẩm</label>
                                            <input type="text" name="sanpham_ten" class="form-control"
                                                id="exampleInputName">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tên sản phẩm *</label>
                                            <input type="text" name="sanpham_ten_en" class="form-control"
                                                id="exampleInputAddress1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Số lượng nhập</label>
                                            <input type="text" name="soluongnhap" class="form-control"
                                                id="exampleInputName">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mô tả</label>
                                            <input type="text" name="sp_mota" class="form-control"
                                                id="exampleInputAddress1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Mô tả *</label>
                                            <input type="text" name="sp_mota_en" class="form-control" id="exampleInputName">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Thông tin sản phẩm</label>
                                            <input type="text" name="thongtinsp" class="form-control"
                                                id="exampleInputAddress1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Thông tin sản phẩm *</label>
                                            <input type="text" name="thongtinsp_en" class="form-control"
                                                id="exampleInputName">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Hạng sử dụng(tính từ ngày up)</label>
                                            <input type="text" name="hangsudung" class="form-control"
                                                id="exampleInputAddress1">
                                        </div>
                                        <div class="form-group">

                                            <label>Thông tin ưu đãi (nếu có)</label>
                                            <select class="form-control select2bs4 js-example-basic-single"
                                                style="width: 100%;" name='khuyenmai_id'>

                                                <option value="">-</option>
                                                @foreach ($level as $level)
                                                    <option value="{{ $level->id }}"
                                                        {{ $qlevel->contains($level->id) ? 'selected' : '' }}>
                                                        {{ $level->level_ten }}
                                                    </option>
                                                @endforeach

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tình trạng sản phẩm</label>
                                            <select class="form-control select2bs4 js-example-basic-single"
                                                style="width: 100%;" name='tinhtrangsp'>

                                                @for ($i=1 ; $i<=2 ; $i++)
                                                    <option value="{{ $i }}"> {{--$qlevel->contains($level->id) ? 'selected' : '' --}}
                                                        @if($i==1) còn hàng @else Hết rồi @endif
                                                    </option>
                                                @endfor

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Đơn vị bán</label>
                                            <select class="form-control select2bs4 js-example-basic-single"
                                                style="width: 100%;" name='donviban'>

                                                @for ($i=1 ; $i<=2 ; $i++)
                                                    <option value="{{ $i }}"> {{--$qlevel->contains($level->id) ? 'selected' : '' --}}
                                                        @if($i==1) hộp @else cái @endif
                                                    </option>
                                                @endfor

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Chi tiết danh mục</label>
                                            <select class="form-control select2bs4 js-example-basic-single"
                                                style="width: 100%;" name='chitietdanhmuc_id'>

                                                {{-- @foreach ($level as $level)
                                                    <option value="{{ $level->id }}">
                                                        {{ $level->level_ten }}
                                                    </option>
                                                @endforeach --}}

                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Giá sản phẩm</label>
                                            <input type="text" name="giasp" class="form-control" id="exampleInputName">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Tag</label>
                                            <input type="text" name="sanpham_tag" class="form-control"
                                                id="exampleInputAddress1">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Hình ảnh sản phẩm</label>
                                            <input type="text" name="sanpham_anh" class="form-control"
                                                id="exampleInputName">
                                        </div>

                                    </div>
                                    <!-- /.card-body -->
                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>
                            </x-slot>
                        </x-admin.form>
                        <!-- /.card -->
                    </div>
                    <!--/.col (left) -->
                    <!-- right column -->
                    <div class="col-md-6">

                    </div>
                    <!--/.col (right) -->
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
@stop

@section('script')
    <!-- jQuery -->
    <script src="plugins/jquery/jquery.min.js"></script>
    <!-- Bootstrap 4 -->
    <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
    <!-- jquery-validation -->
    <script src="plugins/select2/js/select2.full.min.js"></script>
    <script src="plugins/jquery-validation/jquery.validate.min.js"></script>
    <script src="plugins/jquery-validation/additional-methods.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/adminlte.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
    <!-- Page specific script -->
    <script>
        $(function() {
            // $.validator.setDefaults({
            //     submitHandler: function() {
            //         alert("Form successful submitted!");
            //     }
            // });
            $('#quickForm').validate({
                rules: {

                    level_ten: {
                        required: true,
                        //minlength: 5
                    },
                    mota: {
                        required: true,
                    },


                },
                messages: {

                    level_ten: {
                        required: "Please enter a name level",
                    },
                    mota: {
                        required: "Please enter description",
                    }

                    // password: {
                    //     required: "Please provide a password",
                    //     minlength: "Your password must be at least 5 characters long"
                    // },
                    //terms: "Please accept our terms"
                },
                errorElement: 'span',
                errorPlacement: function(error, element) {
                    error.addClass('invalid-feedback');
                    element.closest('.form-group').append(error);
                },
                highlight: function(element, errorClass, validClass) {
                    $(element).addClass('is-invalid');
                },
                unhighlight: function(element, errorClass, validClass) {
                    $(element).removeClass('is-invalid');
                }
            });
        });

    </script>
@stop
