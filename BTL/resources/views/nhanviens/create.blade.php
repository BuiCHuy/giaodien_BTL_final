<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Create Post</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-warning">
        <div class="container-fluid">
            <a class="navbar-brand h1" href="{{ route('nhanviens.index') }}">CRUDPosts</a>
            <div class="justify-end ">
                <div class="col ">
                    <a class="btn btn-sm btn-success" href="{{ route('nhanviens.create') }}">Thêm mới</a>
                </div>
            </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Thêm mới bài đăng</h1>
                <form action="{{ route('nhanviens.store') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="manv" class="form-label">Mã nhân viên</label>
                        <input type="text" class="form-control" id="manv" name="manv" required>
                    </div>
                    <div class="mb-3">
                        <label for="hoten" class="form-label">hoten</label>
                        <input type="text" class="form-control" id="hoten" name="hoten" required>
                    </div>
                    <div class="mb-3">
                        <label for="diachi" class="form-label">diachi</label>
                        <input type="text" class="form-control" id="diachi" name="diachi" required>
                    </div>
                    <div class="mb-3">
                        <label for="ngaysinh" class="form-label">ngaysinh</label>
                        <input type="date" class="form-control" id="ngaysinh" name="ngaysinh" required>
                    </div>
                    <div class="mb-3">
                        <label for="gioitinh" class="form-label">gioitinh</label>
                        <input type="text" class="form-control" id="gioitinh" name="gioitinh" required>
                    </div>
                    <div class="mb-3">
                        <label for="sdt" class="form-label">sdt</label>
                        <input type="text" class="form-control" id="sdt" name="sdt" required>
                    </div>
                    <div class="mb-3">
                        <label for="luong1gio" class="form-label">luong1gio</label>
                        <input type="text" class="form-control" id="luong1gio" name="luong1gio" required>
                    </div>
                    <div class="mb-3">
                        <label for="giolam" class="form-label">giolam</label>
                        <input type="text" class="form-control" id="giolam" name="giolam" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>