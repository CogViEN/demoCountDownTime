<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="TimeCircles.css">
</head>
<body>
    <?php
        $connect = mysqli_connect("localhost","root","","bthai");
        $result = mysqli_query($connect, "select * from orders where ID = '1'");
        $row = mysqli_fetch_object($result);
     ?>

     <div id="countDown" data-date="<?php echo $row->created_at ?>"></div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
    <script src="TimeCircles.js"></script>
    <script>
        $("#countDown").TimeCircles();
    </script>
</body>
</html>