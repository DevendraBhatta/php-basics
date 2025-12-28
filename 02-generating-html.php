<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <style>
        .body-1{
        background-color:red;
        }
        </style>
</head>
<body>
<h1>Hello </h1>
 <!--  inner php outer html-->
<h1> <?php echo 'Hello from PHP';?></h1>
<!-- inner html outer php-->
<?php echo '<h1> Hello from PHP</h1>'; ?>
</body>
</html>