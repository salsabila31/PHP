<nav>
    <ul>
        <li><a href="?menu=isi">isi</a></li>
        <li><a href="?menu=hapus">hapus</a></li>
        <li><a href="?menu=destroy">destroy</a></li>
    </ul>
</nav>

<?php 
    session_start();

    if (isset($_GET['menu'])) {
        $menu = $_GET['menu'];

        echo $menu;

        switch ($menu) {
            case 'isi':
                isisession();
                break;
            
            case 'hapus':
                unset($_SESSION['user']);
                break;

            case 'destroy':
                session_destroy();
                break;

            default:
                # code...
                break;
        }
    }

    echo '<br>';
    var_dump($_SESSION);


    function isisession(){
        $_SESSION['user'] = 'Joni';

        $_SESSION['nama'] = 'Joni Rambo';

        $_SESSION['alamat'] = 'Sidoarjo';

    }
?>