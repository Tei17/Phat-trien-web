<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai Tap 3</title>
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

<?php

$n = 0;
isset($_GET['n']) ? $n = $_GET['n'] : $n = 0;

?>

<body>
<div class="h-100 row align-items-center">
    <div class="d-flex justify-content-center">


        <?php

        if ($n == 0) {
            ?>
            <form action="" method="get">
                <div class="form-group">
                    <label for="n">Nhập số hành khách</label>
                    <input type="number" id="n" class="form-control" name="n" value="0">
                </div>


                <button type="submit" class="btn btn-primary mt-2">Submit</button>
                <input class="btn btn-danger mt-2" type="reset" value="Cancel">

            </form>
            <?php
        } else {
            ?>

            <form action="request.php" class="row" method="post">

                <?php
                for ($i = 0; $i < $n; $i++):
                    ?>
                    <input type="hidden" value="<?php echo $n ?>" name="n">

                    <div class="card m-2 p-2 bg-info col-3" style="width: 18rem;">
                        <div class="form-group mt-2">
                            <h6 class="text-danger">Hành khách <?php echo $i + 1; ?></h6>
                        </div>

                        <div class="form-group">
                            <label for="n">Nhập Tên </label>
                            <input type="text" id="n" class="form-control" name="ten[]">
                        </div>

                        <div class="form-group">
                            <label for="n">Nhập Giới Tính </label>
                            <select class="form-select" aria-label="Default select example" name="gioitinh[]">
                                <option value="" selected>Giới Tính</option>
                                <option value="male">Male</option>
                                <option value="femail">Femail</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="tuoi">Nhập Tuổi </label>
                            <input type="number" id="tuoi" class="form-control" name="tuoi[]" value="0">
                        </div>

                        <div class="form-group">
                            <label>Nhập số lượng vé</label>
                            <input type="number" class="form-control" name="ve[]" value="0">
                        </div>
                    </div>
                <?php endfor; ?>


                <button type="submit" class="btn btn-primary m-2 col-5">Submit</button>
                <a href="index.php" class="btn btn-danger m-2 col-5">Quay lại</a>
            </form>
            <?php
        }

        ?>
    </div>
</div>


</body>

</html>