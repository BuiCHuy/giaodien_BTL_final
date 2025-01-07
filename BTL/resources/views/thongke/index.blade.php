<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chọn Xem Thống Kê</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            transition: transform 0.3s;
        }
        .card:hover {
            transform: scale(1.05);
        }
    </style>
</head>
<body>
<div class="container py-5">
    <div class="text-center mb-4">
        <h1 class="display-4">Chọn Xem Thống Kê</h1>
        <p class="lead">Chọn loại thống kê bạn muốn xem bên dưới.</p>
    </div>

    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Thống Kê Doanh thu theo ngày</h5>
                    <p class="card-text">Xem chi tiết doanh thu theo thời gian.</p>
                    <a href="{{route('lai')}}" class="btn btn-primary">Xem Thống Kê</a>
                </div>
            </div>
        </div>

        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Thống Kê 5 Mặt hàng bán chạy nhất</h5>
                    <p class="card-text">Kiểm tra thông tin về số lượng và hiệu suất bán hàng.</p>
                    <a href="{{route('top5')}}" class="btn btn-success">Xem Thống Kê</a>
                </div>
            </div>
        </div>


        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Thống Kê Doanh Thu Theo Khách Hàng</h5>
                    <p class="card-text">Doanh Thu Theo Khách Hàng.</p>
                    <a href="{{route('doanhthukhachhang.index')}}" class="btn btn-warning">Xem Thống Kê</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Thống Kê Doanh Thu Theo Nhân viên</h5>
                    <p class="card-text">Doanh Thu Theo Nhân viên.</p>
                    <a href="{{route('doanhthunhanvien.index')}}" class="btn btn-primary">Xem Thống Kê</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Thống Kê Tiêu dùng Khách Hàng</h5>
                    <p class="card-text">Tiêu dùng khách hàng.</p>
                    <a href="{{route('thongke.khachhangtieudung')}}" class="btn btn-success">Xem Thống Kê</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Thống Kê Số lượng hàng đã bán</h5>
                    <p class="card-text">Số liệu mặt hàng.</p>
                    <a href="{{route('thongke.doanhthumathang')}}" class="btn btn-warning">Xem Thống Kê</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card shadow-sm">
                <div class="card-body text-center">
                    <h5 class="card-title">Thống Kê Hóa đơn đã được thanh toán</h5>
                    <p class="card-text">Thanh toán.</p>
                    <a href="{{route('thanhtoan')}}" class="btn btn-primary">Xem Thống Kê</a>
                </div>
            </div>
        </div>
    </div>

</div>

<!-- Bootstrap Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
