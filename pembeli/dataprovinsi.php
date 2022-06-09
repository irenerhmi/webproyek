<?php

$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => "https://api.rajaongkir.com/starter/province",
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => "",
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 30,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => "GET",
  CURLOPT_HTTPHEADER => array(
    "key: 2a1b137f79d11bfed6a2b885b884495b"
  ),
));

$response = curl_exec($curl);
$err = curl_error($curl);

curl_close($curl);

if ($err) {
  echo "cURL Error #:" . $err;
} else {
  //echo $response;
  // Hasilnya dalam bentuk json
  // kita koversi ke array
  $data = json_decode($response, TRUE);

  //echo "<pre>"; print_r($data); echo "</pre>";

  //kita mau ambil yg didalem result jadi masuk dlu ke rajaongkir baru ke result
  //$dataprovinsi = $array_response['rajaongkir']['results'];
  
  //echo "<option value=''>-Pilih provinsi--</option>";

  /*foreach($dataprovinsi as $key => $tiap_provinsi){
    echo "<option value='".$tiap_provinsi['province_id']."' id_provinsi='".$tiap_provinsi['province_id']."'>";
    echo $tiap_provinsi['province'];
    echo "</option>";
  }*/
}

?>