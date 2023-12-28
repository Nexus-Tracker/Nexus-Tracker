<?php
session_start();
var_dump($_SESSION['packages_arr']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tracking Result</title>
</head>
<body>
    <h1>Track result</h1>
    <?php
if(isset($_GET['error'])){
    echo $_GET['error'];
}
?>

</body>
</html>