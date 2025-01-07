<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

    <title>Edit Post</title>
</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1>Sửa Khách hàng</h1>
                <form action="{{ route('khachhangs.update', $khachhang->makh) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label for="makh" class="form-label">Mã khách hàng</label>
                        <input type="text" class="form-control" id="makh" name="makh" value="{{ $khachhang->makh }}" readonly>
                    </div>
                    <div class="mb-3">
                        <label for="hoten" class="form-label">hoten</label>
                        <input type="text" class="form-control" id="hoten" name="hoten" value="{{ $khachhang->hoten }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="diachi" class="form-label">diachi</label>
                        <input type="text" class="form-control" id="diachi" name="diachi" value="{{ $khachhang->diachi }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="sdt" class="form-label">sdt</label>
                        <input type="text" class="form-control" id="sdt" name="sdt" value="{{ $khachhang->sdt }}" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Cập nhật</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
