<?php
    $plat_nomor = "AB";
    switch($plat_nomor){
        case "AB":
            echo "Yogyakarta";
            break;
        case "AD":
            echo "Surabaya";
            break;
        case "BE":
            echo "Lampung";
            break;
        case "B":
            echo "Jakarta";
            break;
        default:
            echo "Plat kendaraan tidak diketahui";
            break;
    }
?>