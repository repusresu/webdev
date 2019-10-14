<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Hello World!</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    
</body>
</html>
<?php
    $dt = date('d-m-Y, H:i:s');    
    $ip = $_SERVER['REMOTE_ADDR'];
    $port = $_SERVER['REMOTE_PORT'];
    $ua = $_SERVER['HTTP_USER_AGENT'];

    file_put_contents('./log.log', $dt.",".$ip.",".$port.",".$ua."\n", FILE_APPEND|LOCK_EX);
    
    /************************************* */   

    $url = 'http://localhost/helloworld/newrow.php'; 
    $row = array(
        'date'  => $dt,
        'ip'    => $ip,
        'port'  => $port,
        'ua'    => $ua,
    );
    $data = http_build_query( $row ); 
    $options = array(
        'http' => array(
            'header'  => "Content-type: application/x-www-form-urlencoded",
            'method'  => 'POST',
            'content' => $data,
        ),
    );    
    $context = stream_context_create( $options );    
    $result = file_get_contents( $url, false, $context );

?>

