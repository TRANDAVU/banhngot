@extends('layouts.Admin_master')

@section('title', 'Thay đổi thông tin quyền')

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
                        <x-admin.form title='level ' :user='$level'>
                            <x-slot name='noidung'>
                                {{ $level->level_ten }}
                            </x-slot>

                            <x-slot name='noidungForm'>
                                <form id="quickForm" method="POST"
                                    action="{{ route('admin.levelController.postEdit', $level->level_slug) }}">
                                    @csrf
                                    <div class="card-body">
                                        <div class="form-group">
                                            <label for="exampleInputEmail1">Tên quyền</label>
                                            <input type="text" name="level_ten" class="form-control" id="exampleInputName"
                                                value="{{ $level->level_ten }}">
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleInputPassword1">Mô tả</label>
                                            <input type="text" name="mota" class="form-control" id="exampleInputAddress1"
                                                value="{{ $level->mota }}">
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
