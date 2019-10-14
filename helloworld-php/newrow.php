

<?php

// if(!empty($_POST))
//     echo header("HTTP/1.1 200 OK");
// else
//     echo header("HTTP/1.1 404 Not Found");


// if(!empty($_POST)){
//     file_put_contents('./newrow.log', $_POST['date'].", ".$_POST['ip'].", ".$_POST['port'].", ".$_POST['ua']."\n", FILE_APPEND|LOCK_EX);
// } else {
//     file_put_contents('./newrow.log', "No data received (POST var is empty). Something is not right!"."\n", FILE_APPEND|LOCK_EX);
// }

    
    
    // foreach ($_POST as $value) {
    // {
        // echo '<pre>'; var_dump($item);

        $co = file_get_contents('https://ifconfig.me/ip');//"???????";
        // echo '<pre>'; var_dump($co);

        file_put_contents('./newrow.log', $_POST['date'].", ".$_POST['ip'].", ".$_POST['port'].", ".$co.", ".$_POST['ua']."\n", FILE_APPEND|LOCK_EX);

         

    // }   
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>
    <h1>Latest Data</h1>
    <div id="div1"></div>
    <script>        
        var tbl=$("<table/>").attr("id","mytable");
        $("#div1").append(tbl);
        var tr="<tr>";
        var td1="<td>" + <?php echo $_POST['date']; ?> + "</td>";
        var td2="<td>" + <?php echo $_POST['ip']; ?> + "</td>";
        var td3="<td>" + <?php echo $_POST['port']; ?> + "</td></tr>";
        var td3="<td>" + <?php echo $co; ?> + "</td></tr>";
        $("#mytable").append(tr+td1+td2+td3);
    </script>
</body>
</html>