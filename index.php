<?php
header("Access-Control-Allow-Origin : http://10.30.29.51:63341");
header("Access-Control-Allow-Credentials : true");
header('Acce?>ss-Control-Allow-Headers : Content-Type');

//echo '{"userName":"123"}';
$data=array("userName"=>"123");
echo json_encode($data);
?>