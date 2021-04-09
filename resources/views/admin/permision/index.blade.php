@extends('layouts.Admin_master')

@section('title', 'Quyền người dùng')

@section('content')
<div class="content-wrapper">
    <x-admin.table :colums="$colums"  title='Chi tiết quyền'>
        <x-slot name='table'>
            @foreach($permision  as $permision)
                <tr>
                    <td>{{$permision->permison_ten}}</td>
                    <td>{{$permision->slug}}
                    </td>
                    <td>
                        <div class="btn-group">
                            <button type="button" class="btn btn-success btn-flat">Action</button>
                            <button type="button" class="btn btn-success btn-flat dropdown-toggle dropdown-icon"
                                data-toggle="dropdown">
                                <span class="sr-only">Toggle Dropdown</span>
                            </button>
                            <div class="dropdown-menu" role="menu">
                                <a class="dropdown-item" href="{{ route('admin.permisionController.postEdit',$permision->slug) }}">Thay đổi</a>
                                {{-- <a class="dropdown-item" onclick="return confirm('Are you sure?')"
                                href="{{ route('admin.userController.getDelete', $user->slug) }}">Xóa</a> --}}
                            </div>
                        </div>
                        
                </tr>
            @endforeach
        </x-slot>
    </x-admin.table>
</div>
@stop

@extends('layouts.kichban')
