<?php
include "fungsi.php";



$id_kat = $_GET["id_kat"];

if ( pulihkan($id_kat) > 0 ) {
  header ("location: kelolakat.php");
} else {
  echo "Error deleting record";
}

?>