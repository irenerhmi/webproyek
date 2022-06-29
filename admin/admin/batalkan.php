<?php
include "fungsi.php";



$idtrans = $_GET["id"];

if ( batalkan($idtrans) > 0 ) {
  header ("location: pelunasan.php");
} else {
  echo "Error deleting record";
}

?>