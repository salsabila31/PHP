<?php
if (isset($_GET['total'])) {
    $total = $_GET['total'];

    echo $total;

    echo '<br>';

    echo idorder();

    echo '<br>';

    inserOrder(idorder(), $_SESSION['idpelanggan'], '2019-12-21', $total);
}


function idorder()
{
    global $db;
    $sql = "SELECT idorder FROM tblorder ORDER BY idorder DESC";
    $jumlah = $db->rowCOUNT($sql);

    if ($jumlah == 0) {
        $id = 1;
    } else {
        $item = $db->getITEM($sql);
        $id = $item['order'] + 1;
    }

    return $id;
}

function inserOrder($idorder, $idpelanggan, $tgl, $total)
{
    global $db;

    $sql = "INSERT INTO tblorder VALUES ($idorder, $idpelanggan,'$tgl', $total,0,0,0)";

    echo $sql;

    $db->runSQL($sql);
}
