<?php
include "fungsi.php";



$idtrans = $_GET["id"];

if ( confirm($idtrans) > 0 ) {
  header ("location: pending.php");
} else {
  echo "Error deleting record";
}

?>