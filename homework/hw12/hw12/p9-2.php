<?php
    $a = 0;
    $b = 0;
    $c = 0;
    if(is_numeric($_POST["t1"])==true)
    {
        $a = $_POST["t1"];
    }
    if(is_numeric($_POST["t2"]))
    {
        $b = $_POST["t2"];
    }
    $c = $a + $b;
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

    <title>北科大陳擎文</title>
  </head>
  <body>
  <h1 class="text-center">北科大陳擎文，作業12</h1>
    <div class="container">
        <div class="row">
            <a class="btn bg-danger text-light col-2 offset-1" href="index.html">首頁</a>
            <a class="btn bg-warning col-2 offset-1" href="a1.html">第1題</a>
            <a class="btn bg-primary text-light col-2 offset-1" href="a2.html">第2題</a>
            <a class="btn bg-success text-light col-2 offset-1" href="a3.html">第3題</a>
        </div>
        <div class="row">
          <a class="btn bg-danger text-light col-2 offset-1" href="a4.html">第4題</a>
          <a class="btn bg-warning col-2 offset-1" href="a5.html">第5題</a>
          <a class="btn bg-primary text-light col-2 offset-1" href="a6.html">第6題</a>
          <a class="btn bg-success text-light col-2 offset-1" href="a7.html">第7題</a>
      </div>
    </div>
    <hr>
    <h1 class="text-center text-danger">前端html傳送資料到後端php</h1>
    <hr>
    <div class="container" style="margin-top:50px;">
    
      <form method="post" action="p9-2.php" class="form-inline">
       <div class="form-group">
         <input type="text" name="t1" value="<?php echo $a; ?>" class="form-control" placeholder="數字1">
       ＋
         <input type="text" name="t2"  value="<?php echo $b; ?>" class="form-control" placeholder="數字2">
       ＝
         <input type="text" name=""  value="<?php echo $c; ?>" class="form-control" placeholder="數字3">
       </div>
       <button type="submit" class="btn btn-danger">雲端計算</button>
      </form>
      <h2 class="text-danger">答案是<?php echo $c; ?></h2>
     
     </div>

  </body>
</html>