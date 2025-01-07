<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản Lý Tác Vụ</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Quản Lý</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Quản lý cửa hàng tiện lợi</a>
                </li>

            </ul>
        </div>
    </div>
</nav>

<div class="container mt-5">
    <h1 class="text-center">Chọn Tác Vụ Quản Lý</h1>
    <div class="row mt-4">

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Quản Lý Nhân Viên</h5>
                    <p class="card-text">Thêm, sửa, xoá thông tin nhân viên.</p>
                    <a href="{{route('nhanviens.index')}}" class="btn btn-success">Quản Lý</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Quản Lý Khách Hàng</h5>
                    <p class="card-text">Thêm, sửa, xoá thông tin khách hàng.</p>
                    <a href="{{route('khachhangs.index')}}" class="btn btn-primary">Quản Lý</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Quản Lý Sản Phẩm</h5>
                    <p class="card-text">Quản lý danh sách sản phẩm trong hệ thống.</p>
                    <a href="{{route('dashboard')}}" class="btn btn-warning">Quản Lý</a>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Quản Lý Hóa Đơn</h5>
                    <p class="card-text">Theo dõi và xử lý đơn hàng.</p>
                    <a href="{{route('hoadon.index')}}" class="btn btn-success">Quản Lý</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5 class="card-title">Thống kê</h5>
                    <p class="card-text">Các thống kê cửa hàng</p>
                    <a href="{{route('thongke')}}" class="btn btn-primary">Quản Lý</a>
                </div>
            </div>
        </div>
    </div>
</div>

<footer class="bg-light text-center text-lg-start mt-5">
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © 2025 Bởi Nhóm Quản Lý:
        <a class="text-dark" href="#">Nhóm của chúng tôi :v</a>
    </div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
