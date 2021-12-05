<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <title>Danh sách</title>
</head>

<body>
    <div class="container mt-3">
        <h3>Employee List</h3>
        <p>Danh sách các user hiện có:</p>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">Họ và tên</th>
                    <th scope="col">Email</th>
                    <th scope="col">Số điện thoại</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $stt = 1;
                foreach ($data as $value) {
                ?>
                    <tr>
                        <td><?php echo $stt; ?></td>
                        <td><?php echo $value['Name']; ?></td>
                        <td><?php echo $value['email']; ?></td>
                        <td><?php echo $value['phone']; ?></td>
                        <td>
                            <a href="index.php?controller=employees&action=edit&id=<?php echo $value['id']; ?>"><button type="button" class="btn btn-primary">Chi tiết</button></a>
                            <a onclick="return confirm('Bạn có chắc muốn xoá không?')" href="index.php?controller=employees&action=delete&id=<?php echo $value['id']; ?>"><button type="button" class="btn btn-danger">Xoá</button></a>
                        </td>
                    </tr>
                <?php
                    $stt++;
                }
                ?>
            </tbody>
        </table>
        <a href="index.php?controller=employees&action=add"><button type="button" class="btn btn-success">Thêm mới</button></a>
    </div>
</body>

</html>