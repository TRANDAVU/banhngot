<div class="card">
    <div class="card-header">
        <h3 class="card-title">{{$title}}</h3>
    </div>
    <!-- /.card-header -->
    {{$button ?? null}}
    <div class="card-body">
        <table id="example" class="table table-bordered table-striped ">
            <thead>
                <tr>
                    @foreach($colums as $item)
                    <th>{{$item}}</th>
                    @endforeach
                    <th>Tùy chọn</th>
                </tr>
            </thead>
            <tbody>
                {{$table}}
            </tbody>
            <tfoot>
                <tr>
                    @foreach($colums as $item)
                    <th>{{$item}}</th>
                    @endforeach
                    <th>Tùy chọn</th>
                </tr>
            </tfoot>
        </table>
    </div>
    <!-- /.card-body -->
</div>