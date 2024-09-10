
<?php
/*
重點1：判別前端是否有輸入資料submit按鈕到後端，php程式碼寫法有兩種：
方法：判別是否isset($_POST['n1'])==true

重點2：如果有按按鈕送出，才會$_POST==true：
if(isset($_POST['n1']))
{

}
*/
if(isset($_POST["b1"]))$a1="書籍編號";
if(isset($_POST["b2"]))$a1="書籍名稱";
if(isset($_POST["b3"]))$a1="價格";
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
	<h1 class="text-center">各種排序</h1>
</div>
<div class="container">

  <div class="row">
    <form method="post" action="p1.php">
      <button name="b1" type="submit" class="btn btn-danger col-2 offset-1">依書籍編號排序</button>
      <button name="b2" type="submit" class="btn btn-warning col-2 offset-1">依書籍名稱排序</button>
      <button name="b3" type="submit" class="btn btn-primary col-2 offset-1">依價格排序</button>
    </form>
  </div>  

 <div class="row">
    <h1 class="text-danger offset-2">
    <?php    
    //讀取資料表，4個步驟：

    //1.連線資料庫
    $conn = new mysqli("ccw-mysql.mysql.database.azure.com","user1","123@Ntut","firstdb");
    //$conn = new mysqli("localhost:3307","root","","ch09");
    $conn->set_charset('utf8');

    //2.查詢資料表
    $result = $conn->query("select * from books order by ".$a1);
    
    //3.輸出全部資料
    $rowall = $result->fetch_all(MYSQLI_ASSOC);
    foreach($rowall as $item)
    {
        echo "<br>".$item["書籍編號"].'，'.$item["書籍名稱"].'，'.$item["價格"];
    }        

    
    //4.關閉連線：close connect
    $conn->close();
?>
    </h1>
 </div>

</div>


 
  </body>
</html>