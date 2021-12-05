<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chỉnh sửa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</head>

<body>

    <div class="content">
        <div class="chinhsua container mt-3">
            <a href="index.php?controller=employees&&action=detail"><button type="button" class="btn btn-info">Danh sách</button></a>
            <h3>Chi tiết</h3>
            <form action="" method="POST">
                <div class="form-group col-6">
                    <label>Họ và tên</label>
                    <input type="text" name="hoten" class="form-control" placeholder="Họ và tên" value="<?php echo $dataID['Name']; ?>">
                </div>
                <div class="form-group col-6">
                    <label>Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Email" value="<?php echo $dataID['email']; ?>">
                </div>
                <div class="form-group col-6">
                    <label>Số điện thoại</label>
                    <input type="text" name="sodienthoai" class="form-control" placeholder="Số điện thoại" value="<?php echo $dataID['phone']; ?>">
                </div>
                <button type="submit" name="edit_employees" class="btn btn-primary mt-3">Change</button>
            </form>
        </div>
    </div>
</body>

</html>