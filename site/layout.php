<!doctype html>
<html lang="en">
  <head>
    <title>OT-Shop</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
	<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.min.js" type="text/javascript"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="content/css/style.css">
    <link rel="stylesheet" href="content/css/product.css">
    <link rel="stylesheet" href="content/css/slideShow.css">
    <script src="content/js/slideShow.js"></script>
    <script src="content/js/checklogin.js"></script>
</head>
  <body>
        <div class="container">
            <header>
            <div>
                <h1 class="alert alert-success"><b>Siêu thị trực tuyến</b><h1>
            </div>
            </header>
                <?php
                    include_once 'layout/menu.php';
                ?>
            <div class="boxcenter">
                <?php
                    include_once 'trang-chinh/index.php';
                ?>
            </div>
            <div class="boxleft">
                <?php
                    include_once 'layout/dang-nhap.php';
                    include_once 'layout/list.php';
                    include_once 'layout/top10.php';
                ?>
            </div>
        <footer>
            <div>
                <h4>Bản quyền thuộc nhóm 7 - Fpoly</h4>
            </div>
        </footer>
    </div>
   </body>
</html>