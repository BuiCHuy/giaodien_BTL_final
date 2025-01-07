<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Bootstrap CRUD Data Table for Database with Modal Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- Liên kết Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="table-title bg-dark">
    <div class="row">
        <div class="col-sm-6">
            <h2 class="text-light">Thống kê các hóa đơn đã được thanh toán</h2>
        </div>
    </div>
</div>
<table class="table table-striped table-hover">
    <thead>
    <tr>
        <th>Mã hóa đơn</th>
        <th>Mã khách hàng</th>
        <th>Mã nhân viên</th>
        <th>Ngày lập</th>
        <th>Tổng tiền</th>
        <th>Trạng thái Thanh Toán</th>

    </tr>
    </thead>
    <tbody>
    @foreach ($hoadon as $hd)
        <tr>
            <td>{{$hd->mahd}}</td>
            <td>{{$hd->manv}}</td>
            <td>{{$hd->makh}}</td>
            <td>{{$hd->ngaylap}}</td>
            <td>{{$hd->tongtien}}</td>
            <td>{{$hd->TTthanhtoan ? 'Đã thanh toán':'Chưa thanh toán'}}</td>


        </tr>
    @endforeach
</table>
</body>

