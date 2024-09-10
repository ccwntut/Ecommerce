<?php
if(isset($_POST["t1"]))$a1=$_POST["t1"];
if(isset($_POST["t2"]))$a2=$_POST["t2"];
if(isset($_POST["t3"]))$a3=$_POST["t3"];

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
      <h1 class="text-center">新增資料</h1>
    </div>
    <div class="container">
      <form method="post" action="p4.php">
        <div class="row">
          <div class="col-auto col-5">
            <input type="text" name="t1" placeholder="輸入書籍名稱" class="form-control" >
          </div>
          <div class="col-auto">
            <input type="text" name="t2" placeholder="輸入價格" class="form-control" >
          </div>
          <div class="col-auto">
            <input type="text" name="t3" placeholder="輸入負責員工編號" class="form-control" >
          </div>          
          <div class="col-auto">
            <input type="submit" class="form-control btn btn-danger" value="新增記錄" >
          </div>          
        </div>
        <div class="container">
          <div class="row">
            <h1 class="text-danger offset-2">
            <?php
//(1).資料庫設定
$dbServer = "ccw-mysql.mysql.database.azure.com";
$dbName = "user1";
$dbUser = "123@Ntut";
$dbPass = "firstdb";

//(2).建構物件: 連線資料庫伺服器
$mysqli = @new mysqli($dbServer, $dbUser, $dbPass, $dbName);

if ($mysqli->connect_errno)  // 存取成員
  die("無法連線資料庫伺服器");

//(3).設定連線的字元集為 UTF8 編碼
$mysqli->set_charset("utf8");

//(4).新增一筆資料
if(isset($_POST['t1']))
{
    //$sql="INSERT Into books(書籍名稱, 價格) VALUES ('{$_POST['t1']}','{$_POST['t2']}')";
    $sql="INSERT Into books(書籍名稱, 價格) VALUES ('".$_POST['t1']."','".$_POST['t2']."')";

    //(5).執行SQL指令
    if( $mysqli->query($sql) ) 
        echo "資料庫新增記錄成功<br>";
    else
        die("資料庫新增記錄失敗<br>"); 
}

//(6).釋放記憶體，關閉資料庫連接
$mysqli->close();    


?>
            </h1>
          </div>
        </div>

      </form>
    </div>


 
  </body>
</html>