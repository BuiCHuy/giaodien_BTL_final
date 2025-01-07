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
                <form action="{{ route('nhanviens.tts') }}" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="manv" class="form-label">Mã nhân viên</label>
                        <input type="text" class="form-control" id="manv" name="manv" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Lưu</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>