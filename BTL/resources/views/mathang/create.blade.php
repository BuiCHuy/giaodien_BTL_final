<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initialscale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-
alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-
GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD"
crossorigin="anonymous">
<title>Posts</title>
</head>
<body>


    <h1 style="margin: 50px 50px">Thêm mặt hàng mới</h1>
    <form action="{{ route('nmathang.store') }}" method="POST" style="margin: 50px 50px">
        @csrf
        <div class="mb-3">
            <label for="mamh" class="form-label">Mã mặt hàng</label>
            <input type="text" class="form-control" id="mamh" name="mamh" required>
        </div>
        <div class="mb-3">
            <label for="tenmh" class="form-label">Tên mặt hàng</label>
            <input type="text" class="form-control" id="tenmh" name="tenmh" required>
        </div>
        <div class="mb-3">
            <label for="malh" class="form-label">Tên loại hàng</label>
            <select class="form-control" id="malh" name="malh" required>
                @foreach($nloaihang as $loaihang)
                    <option value="{{ $loaihang->malh }}">{{ $loaihang->tenlh }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="dongia" class="form-label">Đơn giá</label>
            <input type="text" class="form-control" id="dongia" name="dongia" required>
        </div>
        <div class="mb-3">
            <label for="soluong" class="form-label">Số lượng</label>
            <input type="text" class="form-control" id="soluong" name="soluong" required>
        </div>
        <div class="mb-3">
            <label for="gianhap" class="form-label">Giá nhập</label>
            <input type="text" class="form-control" id="gianhap" name="gianhap" required>
        </div>
        <button type="submit" class="btn btn-primary">Thêm</button>
    </form>

    <script>
        var dsmamh = @json($nmathang);
        const maMatHang = document.getElementById('mamh');

        const tenmh = document.getElementById('tenmh');
        const dongia = document.getElementById('dongia');
        const gianhap = document.getElementById('gianhap');
        const tenlh = document.getElementById('malh');

        maMatHang.addEventListener('blur', function(){
            autoWrite();
        });

        function autoWrite(){
            const mamh = maMatHang.value;
            dsmamh.forEach(mh =>{
                if(mh.mamh.trim() === mamh){
                    console.log('mat hang ton tai');

                    console.log(mh.tenmh);
                    tenmh.value = mh.tenmh;
                    console.log(mh.dongia);
                    dongia.value = mh.dongia;
                    console.log(mh.gianhap);
                    gianhap.value = mh.gianhap;

                    const dstenlh = tenlh.options;
                    for(let i = 0 ; i < dstenlh.length ; i++){
                        if(dstenlh[i].value === mh.malh){
                            dstenlh[i].selected = true;
                        }
                    }

                }
            });
        }
    </script>

</body>
