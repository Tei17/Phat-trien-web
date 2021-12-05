<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm mới</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

    <div class="content">
        <div class="themmoi container mt-3">
            <a href="index.php?controller=employees&&action=detail"><button type="button" class="btn btn-info">Danh sách</button></a>
            <h3>Thêm mới</h3>
            <form action="" method="POST">
                <div class="form-group col-6">
                    <label>Nhập tên</label>
                    <input type="text" name="hoten" class="form-control" placeholder="Họ và tên">
                </div>
                <div class="form-group col-6">
                    <label>Nhập Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email">
                </div>
                <div class="form-group col-6">
                    <label>Nhập số điện thoại</label>
                    <input type="text" name="sodienthoai" class="form-control" placeholder="Số điện thoại">
                </div>
                <button type="submit" name="add_employees" class="btn btn-primary mt-3">Submit</button>
            </form>
        </div>
    </div>
</body>

</html>