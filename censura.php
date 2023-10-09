<?php

$paragraph = $_GET['paragraph'];
$censura = $_GET['censura'];
$new_Paragraph = str_ireplace($censura, "***", $paragraph);

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Censura</title>
</head>

<body>
    <div class="container">
        <h1 class="m-5"><?php echo $new_Paragraph ?></h1>
    </div>

</body>

</html>