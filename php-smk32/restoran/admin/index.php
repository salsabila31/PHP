<?php 
    require_once "../dbcontroller.php";
    $db = new DB;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page | Aplikasi Restoran SMK</title>
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
</head>
<body>
    <div class="container">

        <div class="row">
            <div class="col-md-3">
                <h2>Restoran</h2>
            </div>

            <div class="col-md-9">
                <div class="float-end mt-4">logout</div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-3">
                <ul class="nav flex-column">
                    <li class="nav-item"><a class="nav-link" href="?f=kategori&m=select">Kategori</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=menu&m=select">Menu</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=pelanggan&m=select">Pelanggan</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=order&m=select">Order</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=orderdetail&m=select">Order Detail</a></li>
                    <li class="nav-item"><a class="nav-link" href="?f=user&m=select">User</a></li>
                </ul>
            </div>

            <div class="col-md-9">
                <?php 
                    if (isset($_GET['f']) && isset($_GET['m'])) {
                        $f=$_GET['f'];
                        $m=$_GET['m'];

                        $file = '../'.$f.'/'.$m.'.php';

                        require_once $file;
                    }
                ?>
            </div>
        </div>

        <div class="row mt-5">

            <div class="col">
                <p class="text-center">2019 - copyright@smkrevit.com</p>
            </div>
        </div>
    </div>
</body>
</html>