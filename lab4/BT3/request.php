<?php

include 'HanhKhach.php';

$n = 0;
$list = array();

$arrten = array();
$arrgioitinh = array();
$arrtuoi = array();
$arrve = array();

isset($_POST['n']) ? $n = $_POST['n'] : $n = 0;

isset($_POST['ten']) ? $arrten = $_POST['ten'] : $arrten = [];
isset($_POST['gioitinh']) ? $arrgioitinh = $_POST['gioitinh'] : $arrgioitinh = [];
isset($_POST['tuoi']) ? $arrtuoi = $_POST['tuoi'] : $arrtuoi = [];
isset($_POST['ve']) ? $arrve = $_POST['ve'] : $arrve = [];

$ve = new VeMayBay();
$ve->Nhap('Liên Khương - Nội Bài', '09-10-2021', 450000);

for ($i = 0; $i < $n; $i++) {


    $hanhkhach = new HanhKhach($ve);
    $hanhkhach->Nhap($arrten[$i], $arrgioitinh[$i], $arrtuoi[$i]);
    $hanhkhach->NhapSL($arrve[$i]);

    $list[] = $hanhkhach->GetThongTin();

}
// Sắp xếp mảng
function sortArr($a, $b)
{
    if ($a['tongtien'] == $b['tongtien']) {
        return 0;
    }
    return ($a['tongtien'] > $b['tongtien']) ? -1 : 1;
}

usort($list, 'sortArr');


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hành Khách</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous">
    </script>
</head>
<style>
    html,
    body {
        height: 100%
    }
</style>


<body>
<div class="col-12 m-1">
    <div class="row">
        <?php
        echo '<h1>Thông tin vé</h1>';

        echo '<p>' . $ve->Xuat() . '</p>';
        echo '';
        ?>
    </div>
    <div class="row">
        <h1>Danh sách hành khách</h1>


        <?php
        for ($i = 0; $i < $n; $i++) {
            $hanhkhach = $list[$i];
            ?>
            <div class="card m-2" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Tên: <?php echo $hanhkhach['hoten'] ?></h5>
                    <p class="card-text">Tuổi: <?php echo $hanhkhach['tuoi'] ?></p>
                    <p class="card-text">Giới tính: <?php echo $hanhkhach['gioitinh'] ?></p>
                    <p class="card-text">Số lượng vé: <?php echo $hanhkhach['soluong'] ?></p>
                    <p class="card-text">Tổng số tiền phải trả: <?php echo number_format($hanhkhach['tongtien']) ?></p>
                </div>
            </div>
            <?php
        }

        ?>

    </div>

</div>


</body>

</html>
