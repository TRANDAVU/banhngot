@extends('layouts.Admin_master')

@section('title', 'Sản phẩm')

@section('content')
    <div class="content-wrapper">
        <x-admin.table :colums="$colums" title='Sản phẩm'>
            <x-slot name='button'>
                <a href="{{route('admin.adminProductcontroller.chang')}}" class="btn btn-primary" data-toggle="button"
                    aria-pressed="false" autocomplete="off">
                    Thêm sản phẩm
                </a>
            </x-slot>
            <x-slot name='table'>
                @foreach ($product as $product)
                    <tr>
                        <td>{{ $product->sanpham_ten }}</td>
                        <td>{{ $product->hangsudung }}</td>
                        <td>{{ $product->khuyenmai->pt_giam }}%</td>
                        <td>{{ $product->giasp }}</td>
                        <td>
                        @if ($product->tinhtrangsp == 1) còn hàng @else hết nhé
                            @endif
                        </td>
                        <td>
                            @if ($product->donviban == 1) Hộp @else Cái @endif
                        </td>
                        <td>{{ $product->chitietdanhmuc->chitietdanhmuc_ten }}</td>
                        <td>{{ $product->sanpham_anh }}</td>

                        <td>
                            <div class="btn-group">
                                <button type="button" class="btn btn-success btn-flat">Action</button>
                                <button type="button" class="btn btn-success btn-flat dropdown-toggle dropdown-icon"
                                    data-toggle="dropdown">
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <div class="dropdown-menu" role="menu">
                                    <a class="dropdown-item"
                                        href="{{ route('admin.adminProductcontroller.postEdit', $product->slug) }}">Thay
                                        đổi</a>
                                    <a class="dropdown-item" onclick="return confirm('Are you sure?')"
                                        href="{{ route('admin.adminProductcontroller.getDelete', $product->slug) }}">Xóa</a>
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
