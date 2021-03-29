
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">{{$title}}</h3>
        </div>
        <!-- /.card-header -->
        <div class="card-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>{{$name}}</th>
                        <th>{{$email}}</th>
                        <th>{{$address}}</th>
                        <th>{{$sdt}}</th>
                        <th>{{$level}}</th>
                        <th>Tùy chọn</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $user)
                    <tr>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}
                        </td>
                        <td>{{$user->address}}</td>
                        <td> {{$user->sdt}}</td>
                        <td>{{$user->level_id}}</td>
                    </tr>
                    @endforeach
                </tbody>
                <tfoot>
                    <tr>
                        <th>{{$name}}</th>
                        <th>{{$email}}</th>
                        <th>{{$address}}</th>
                        <th>{{$sdt}}</th>
                        <th>{{$level}}</th>
                        <th>Tùy chọn</th>
                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.card-body -->
    </div>
