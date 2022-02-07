<?php
//echo "Vengo desde verificacion de cp con: ".$_POST["cp"];
$cpSelect = $_POST["cp"];
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://api.copomex.com/query/info_cp/'.$cpSelect.'?token=fe43a3c3-da39-40e5-b712-3832547bebb3',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'POST',
  CURLOPT_HTTPHEADER => array(
    'Cookie: ci_session=4da46c73a576ac39b98ca6a29913d06844da411a'
  ),
));

$response = curl_exec($curl);

curl_close($curl);
echo $response;

?>