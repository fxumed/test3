<?php 


$url = 'https://app.salesap.ru/api/v1/contacts';
$token = '60a6fd22355504c790bf6a2776f873429501df4d9628ea6541d6c41d724aad65';
$head = array(
    'Content-Type: application/vnd.api+json',
    'Authorization: Bearer ' . $token);


$data_string = '
     {
       "data":{
         "type":"contacts",
         "attributes":{
           "first-name":"Иван",
           "last-name":"Петров"
         }
       }
     }';
print_r($data_string);
$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, $url); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);


$head = json_decode(curl_exec($ch),1); 

curl_close($ch);



print_r($head);
 ?>