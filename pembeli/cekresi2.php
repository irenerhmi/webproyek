<?php

include "../koneksidb.php";


$url = "https://api.binderbyte.com/v1/track?api_key=3c827fba8ee67bb81c3bf842eb62836c1c641cafda8401f031cb3fd414a41d97&courier=jnt&awb=1136420703";

	$curl = curl_init();
	curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, FALSE);
	curl_setopt($curl, CURLOPT_HEADER, false);
	curl_setopt($curl, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($curl, CURLOPT_URL, $url);
	curl_setopt($curl, CURLOPT_REFERER, $url);
	curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
	echo "<h1>Detail Pelacakan</h1>";

	$response = curl_exec($curl);
	$err = curl_error($curl);

	curl_close($curl);

	if ($err) {
	  echo "cURL Error #:" . $err;
	} else {
		$data = json_decode($response, TRUE);

	  	echo "<pre>"; print_r($data); echo "</pre>";
	  	//kita mau ambil yg didalem result jadi masuk dlu ke rajaongkir baru ke result
	  	$datalacak = $data['data']['summary'];
	  
	  	echo "Detail Pesanan";

	  	foreach($datalacak as $key => $tiapresi){
	    	echo "History : ", $tiapresi['history'];

	    };
	  //kita mau ambil yg didalem result jadi masuk dlu ke rajaongkir baru ke result
	  //$dataprovinsi = $data['rajaongkir']['results'];
	};


/*jnt 1136420703
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.binderbyte.com/v1/track?api_key=3c827fba8ee67bb81c3bf842eb62836c1c641cafda8401f031cb3fd414a41d97",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "cache-control: no-cache"
  ),
));


$curl = curl_init();  
  curl_setopt_array($curl, array( 
    CURLOPT_URL => $url
  ));
//https://api.binderbyte.com/v1/track?api_key=8e49f28e0f2f2cf56393c352613eec358e85fb7077ce6f7f453ebb826a7b1f6d&courier=jne&awb=8825112045716759

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
	$data = json_decode($response, TRUE);

  //echo "<pre>"; print_r($data); echo "</pre>";

  //kita mau ambil yg didalem result jadi masuk dlu ke rajaongkir baru ke result
  //$dataprovinsi = $data['rajaongkir']['results'];
};*/

?>