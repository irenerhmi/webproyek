<?php
include "fungsi.php";



$id = $_GET['m_id'];

if ( hapusmet($id) > 0 ) {
  header ("location: metode.php");
} else {
  echo "Error deleting record";
}

?>