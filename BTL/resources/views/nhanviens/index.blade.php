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
                        <a class="navbar-brand h1" href="{{ route('nhanviens.index') }}">CRUDPosts</a>
                        <div class="justify-end ">
                            <div class="col ">
                                <a href="{{ route('nhanviens.create') }}" class="btn btn-success">Thêm mới</a>
                                <a href="{{route('home')}}" class="btn btn-success"> <span>Trở về</span></a>

                            </div>
                        </div>
                </nav>
                @if(session('success'))
					<div class="alert alert-success">
						{{ session('success') }}
					</div>
				@endif

				<a href="{{ route('nhanviens.ttl') }}" class="btn btn-primary">Lịch sử thanh toán lương</a>
                <a href="{{ route('nhanviens.tt') }}" class="btn btn-primary">Thanh toán lương</a>

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Mã nhân viên</th>
                            <th scope="col">Tên nhân viên</th>
                            <th scope="col">Địa chỉ</th>
                            <th scope="col">Ngày sinh</th>
                            <th scope="col">Giới tính</th>
                            <th scope="col">Số điện thoại</th>
                            <th scope="col">Lương 1 giờ</th>
							<th scope="col">Giờ làm</th>
							<th scope="col">Lương</th>
                            <th scope="col">Hành động</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($nhanviens as $nhanvien)
                            <tr>
                                <th scope="row">{{ $nhanvien->manv}}</th>
                                <td>{{ $nhanvien->hoten }}</td>
                                <td>{{ $nhanvien->diachi }}</td>
								<td>{{ $nhanvien->ngaysinh }}</td>
								<td>{{ $nhanvien->gioitinh }}</td>
                                <td>{{ $nhanvien->sdt }}</td>
                                <td>{{ $nhanvien->luong1gio }}</td>
                                <td>{{ $nhanvien->giolam }}</td>
                                <td>{{ $nhanvien->luong }}</td>
                                <td>

                                    <a href="{{ route('nhanviens.edit', $nhanvien->manv) }}" class="btn btn-primary">Sửa</a>

                                    <form action="{{route('nhanviens.destroy',$nhanvien->manv)}}" method="POST" style="display:inline;">
										@csrf
										@method('DELETE')
										<button type="submit" class="btn btn-danger ">Xóa</button>
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
