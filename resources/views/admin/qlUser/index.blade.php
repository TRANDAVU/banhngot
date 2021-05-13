@extends('layouts.Admin_master')

@section('title', 'Quản lý người dùng')

@section('content')
    <div class="content-wrapper">
        <x-admin.table :colums="$colums" title='Thông tin người dùng'>
            <x-slot name='table'>
                @foreach ($user as $user)
                    <tr>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->email }}
                        </td>
                        <td>{{ $user->address }}</td>
                        <td> {{ $user->sdt }}</td>
                        <td>{{ $user->level->level_ten }}</td>
                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-flat">Action</button>
                                <button type="button" class="btn btn-success btn-flat dropdown-toggle dropdown-icon"
                                    data-toggle="dropdown">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item"
                                        href="{{ route('admin.userController.edit', $user->slug) }}">Thay đổi</a>
                                    <a class="dropdown-item" onclick="return confirm('Are you sure?')"
                                        href="{{ route('admin.userController.getDelete', $user->slug) }}">Xóa</a>
                                </div>
                            </div>

                        </td>
                    </tr>
                @endforeach
            </x-slot>
        </x-admin.table>
    </div>
@stop

@extends('layouts.kichban')