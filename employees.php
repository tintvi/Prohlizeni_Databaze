<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <!-- Bootstrap-->
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Seznam zaměstnanců</title>
</head>
<body class="container">
<h1>Seznam zaměstnanců</h1>
<table class='table'>
    <?php
    include ("./inc/db_connect.inc.php");
    include ("./errors.php");

    $list = getEmployees();
    //var_dump($list);
    foreach ($list as $employee) {
        echo "
                <tr>
                        <td><a href='employee.php?employeeId{$employee->employee_id}'>{$employee->name}</a></td>
                        <td>{$employee->room_name}</td>
                        <td>{$employee->phone}</td>
                        <td>{$employee->job}</td>
                </tr>
        ";
    }
    ?>
</table>
</body>
</html>
