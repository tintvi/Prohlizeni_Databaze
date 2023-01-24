<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Seznam místností</title>
</head>
<body class="container">
<h1>Seznam místností</h1>
<table class='table'>
    <?php
    include ("./inc/db_connect.inc.php");
    include ("./errors.php");

    $list = getRooms();
//    var_dump($list);
    foreach ($list as $room) {
        echo "
                <tr>
                        <td><a href='room.php?roomId={$room->room_id}'>{$room->name}</a></td>
                        <td>{$room->no}</td>
                        <td>{$room->phone}</td>
                </tr>
        ";
    }
    ?>
</table>
</body>
</html>

