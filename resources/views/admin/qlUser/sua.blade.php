@extends('layouts.Admin_master')

@section('title', 'Thay đổi thông tin người dùng')

@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <x-admin.titleForm title='Thông tin người dùng'></x-admin.titleForm>
        <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- left column -->
                    <div class="col-md-12">
                        <!-- jquery validation -->
                        <x-admin.form title='Username ' :user='$user'>
                            <x-slot name='noidung'>
                                {{ $user->name }}
                            </x-slot>

                            <x-slot name='noidungForm'>
                                <form id="quickForm" method="POST"
                                    action="{{ route('admin.userController.postEdit', $user->slug) }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Họ và Tên</label>
                                            <input type="text" name="name" class="form-control" id="exampleInputName"
                                                value="{{ $user->name }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Email</label>
                                            <input type="email" name="email" class="form-control" id="exampleInputEmail1"
                                                value="{{ $user->email }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Địa chỉ</label>
                                            <input type="text" name="address" class="form-control" id="exampleInputAddress1"
                                                value="{{ $user->address }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Số điện thoại</label>
                                            <input type="text" name="sdt" class="form-control" id="exampleInputPhone1"
                                                value="{{ $user->sdt }}">
                                        </div>

                                        <div class="form-group">
                                            <label>Phân quyền</label>
                                            <select class="form-control select2bs4 js-example-basic-single"
                                                style="width: 100%;" name='level_id'>

                                                @foreach ($level as $level)
                                                    <option value="{{$level->id}}" {{$qlevel->contains($level->id) ? 'selected':''}}>
                                                        {{ $level->level_ten }}
                                                    </option>
                                                @endforeach

                                            </select>
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
                    email: {
                        required: true,
                        email: true,
                    },
                    name: {
                        required: true,
                        //minlength: 5
                    },
                    address: {
                        required: true,
                    },
                    sdt: {
                        required: true,
                        minlength: 10
                    },

                },
                messages: {
                    email: {
                        required: "Please enter a email address",
                        email: "Please enter a vaild email address"
                    },
                    name: {
                        required: "Please enter a name",
                    },
                    address: {
                        required: "Please enter address",
                    },
                    phone: {
                        required: "Please enter a phone address",
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
