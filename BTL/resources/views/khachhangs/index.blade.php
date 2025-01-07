<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <title>CRUDPosts</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">

                <nav class="navbar navbar-expand-lg navbar-light bg-warning">
                    <div class="container-fluid">
                        <a class="navbar-brand h1" href="{{ route('khachhangs.index') }}">CRUDPosts</a>
                        <div class="justify-end ">
                            <div class="col ">
                                <a href="{{ route('khachhangs.create') }}" class="btn btn-success">Thêm mới</a>
                                <a href="{{route('home')}}" class="btn btn-success"> <span>Trở về</span></a>

                            </div>
                        </div>
                </nav>
                @if(session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
				@endif

                <a href="{{ route('khachhangs.ttd') }}" class="btn btn-primary">Danh sách thẻ tích điểm</a>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã khách hàng</th>
                            <th scope="col">Tên khách hàng</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($khachhangs as $khachhang)
                            <tr>
                                <th scope="row">{{ $khachhang->makh}}</th>
                                <td>{{ $khachhang->hoten }}</td>
                                <td>{{ $khachhang->diachi }}</td>
                                <td>{{ $khachhang->sdt }}</td>
                                <td>

                                    <a href="{{ route('khachhangs.edit', $khachhang->makh) }}" class="btn btn-primary">Sửa</a>

                                    <form action="{{ route('khachhangs.destroy', $khachhang->makh) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger">Xóa</button>
                                    </form>

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>

</html>
