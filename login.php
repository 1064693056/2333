<?php
header("Access-Control-Allow-Origin : http://10.30.29.53:63341");
header("Access-Control-Allow-Credentials : true");
header('Access-Control-Allow-Headers : Content-Type');
//echo '{"userName":"NBThreeMan"}';
$data=array("userName"=>"NBThreeMan");
echo json_encode($data);
?>
