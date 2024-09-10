<?php
if(isset($_POST["t1"]))$a1=$_POST["t1"];
if(isset($_POST["t2"]))$a2=$_POST["t2"];

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
    <h1 style="text-align: center;">北科大陳擎文，作業10</h1>
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
    
<div id="header" class="container" style="background-color:royalblue;color:white;">
	<h1 class="text-center">查詢價格的範圍</h1>
</div>
<div class="container">

    <form method="post" action="p3.php">
        <div class="row">
            <div class="col-auto col-3 offset-2">
                <input name="t1" type="text" placeholder="查詢最低的價格" class="form-control" >
            </div>
            <div class="col-auto col-3">
              <input name="t2" type="text" placeholder="查詢的最高價格" class="form-control" >
            </div>
            <div class="col-auto offset-1">
                <button name="b3" type="submit" class="btn btn-primary">依價格排序</button>
            </div>
        
        </div>   
    </form>


 <div class="row">
    <h1 class="text-danger offset-2">
    <?php    
    //讀取資料表，4個步驟：

    //1.連線資料庫
    //$conn = new mysqli("ccw-mysql.mysql.database.azure.com","user1","123@Ntut","firstdb");
    $conn = new mysqli("ccw-mysql.mysql.database.azure.com","user1","123@Ntut","firstdb");
    $conn->set_charset('utf8');

    //2.查詢資料表
    //$result = $conn->query("select * from books  where 價格 between ".$a1." and ".$a2." order by 價格 desc" );
    $result = $conn->query("select * from books  where 價格 between {$a1} and {$a2} order by 價格 desc" );
    
    //3.輸出全部資料
    $rowall = $result->fetch_all(MYSQLI_ASSOC);
    foreach($rowall as $item)
    {
        //echo "<br>".$item["書籍編號"].'，'.$item["書籍名稱"].'，'.$item["價格"];
        echo "<br>{$item["書籍編號"]}，{$item["書籍名稱"]}，{$item["價格"]}";
    }        

    
    //4.關閉連線：close connect
    $conn->close();
?>
    </h1>
 </div>

</div>


 
  </body>
</html>