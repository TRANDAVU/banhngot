<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>{{$title ?? null}}</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="{{route('admin.adminController.index')}}">Home</a></li>
                    <li class="breadcrumb-item active">{{$title ?? null }}</li>
                </ol>
            </div>
        </div>
    </div><!-- /.container-fluid -->
</section>