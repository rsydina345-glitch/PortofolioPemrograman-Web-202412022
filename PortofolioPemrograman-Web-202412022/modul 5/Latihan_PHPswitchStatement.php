<?php

$ukuran_baju = "L";

switch ($ukuran_baju) {
    case "S":
        echo "Ukuran baju yang dipilih adalah Small (S).";
        break;

    case "M":
        echo "Ukuran baju yang dipilih adalah Medium (M).";
        break;

    case "L":
        echo "Ukuran baju yang dipilih adalah Large (L).";
        break;

    case "XL":
        echo "Ukuran baju yang dipilih adalah Extra Large (XL).";
        break;

    default:
        echo "Ukuran baju tidak tersedia.";
}

?>