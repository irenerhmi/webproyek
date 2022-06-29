<?php

include "../koneksidb.php";
session_start();

$noresi = $_POST["noresi"];
$kurir = $_POST["kurir"];

$url = "https://api.binderbyte.com/v1/track?api_key=3c827fba8ee67bb81c3bf842eb62836c1c641cafda8401f031cb3fd414a41d97&courier=$kurir&awb=$noresi";

$curl = curl_init();
curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($curl, CURLOPT_HEADER, false);
curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_REFERER, $url);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
		$data = json_decode($response, TRUE);
		$message = $data['status'];
		if ($message == 200){
		  	$datalacak = $data['data']['history'];
		  
		  	echo "
		  	<div class='row'>
	            <div class='col-12'>
	            	<h3>Hasil Pelacakan</h3><br>
	                <div class='table_desc'>
	                    <div class='table_page table-responsive'>
	                        <table>
	                            <thead>
	                                <tr>
	                                    <th class='product_remove'>Tanggal</th>
	                                    <th class='product_thumb'>Deskripsi</th>
	                                    <th class='product_name'>Lokasi</th>
	                                </tr>
	                            </thead> 
	        ";
							  	foreach($datalacak as $key => $tiapresi){
							    	echo "
						                    <tbody>  
						                        <tr>
						                            <td class='product_remove'>
						                                '".$tiapresi['date']."'
						                            </td>
						                            <td class='product_thumb'>
						                               	'".$tiapresi['desc']."'
						                            </td>
						                            <td class='product_name'>
						                              	'".$tiapresi['location']."'
						                            </td>
						                        </tr> 
						                    </tbody>";
						        }

	        echo	       "</table>
	                    </div>
	                </div>
	            </div>
	        </div>";
	    } else {
	    	echo "Nomor Resi Tidak Valid";
	    };
	};

?>