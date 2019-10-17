<?php
//extract payload from source POST
$json_str = file_get_contents('php://input');

//write payload to log.txt just so it can be seen in a log file, no other reason.
$fp = fopen('log.txt', 'w');
echo ($json_str);
fwrite($fp, $json_str);
fclose($fp);

//URL you want to forward payload to.
//Setting to localhost or 0.0.0.0 with a different port will forward internally on the server to a different port. For example, if you can only receive external traffic on standard ports, such as 80 or 443, you can use this to forward the payload to another application running on another port that isn't accessible externally. 
$url = 'http://0.0.0.0:10061';

//open connection and POST payload
$ch = curl_init();
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_str);
curl_setopt($ch,CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
$result = curl_exec($ch);
curl_close($ch);


 ?>
