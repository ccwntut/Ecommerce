<?php
    $a1 = $_POST["s1"];
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
   <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.1/dist/umd/popper.min.js" integrity="sha384-W8fXfP3gkOKtndU4JGtKDvXbO53Wy8SZCQHczT5FMiiqmQfUpWbYdTil/SxwZgAN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.min.js" integrity="sha384-skAcpIdS7UcVUC05LJ9Dxay8AXcDYfBJqt1CJ85S/CFujBsIzCIv+l9liuYLaMQ/" crossorigin="anonymous"></script>
    -->

    <title>Hello, world!</title>
  </head>
  <body>
    <h1 style="text-align: center;">北科大陳擎文，作業9</h1>
    <div class="container">
        <div class="row">
            <a href="index.html" class="btn btn-danger col-2 offset-1">首頁</a>
            <a href="a1.html" class="btn btn-warning col-2 offset-1">第1題</a>
            <a href="a2.html" class="btn btn-primary col-2 offset-1">第2題</a>
            <a href="a3.html" class="btn btn-success col-2 offset-1">第3題</a>
        </div>
        <div class="row">
            <a href="a4.html" class="btn btn-danger col-2 offset-1">第4題</a>
            <a href="a5.html" class="btn btn-warning col-2 offset-1">第5題</a>
            <a href="a6.html" class="btn btn-primary col-2 offset-1">第6題</a>
        </div>
    </div>

    <hr>
    <div class="container">
        <form method="post" action="p3.php">
            <select name="s1">
                <option>請選擇產品</option>
                <option <?php if($a1=="蘋果"){echo "selected";}  ?>>蘋果</option>
                <option <?php if($a1=="柳丁"){echo "selected";}  ?>>柳丁</option>
                <option <?php if($a1=="香蕉"){echo "selected";}  ?>>香蕉</option>
            </select>
            <button class="btn btn-warning">購買送出</button>

        </form>
        <h1 class="text-danger">你購買的產品是：<?php  echo $a1;  ?></h1>
    </div>


 
  </body>
</html>