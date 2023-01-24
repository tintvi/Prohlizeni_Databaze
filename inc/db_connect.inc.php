<?php
$inifile = parse_ini_file("config.ini");

$host = $inifile["db_host"];
$db = $inifile["db"];
$user = $inifile["user"];
$pass = $inifile["pass"];
$charset = $inifile["charset"];

$dsn = "mysql:host=$host;dbname=$db;charset=$charset";

$options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_OBJ,
    PDO::ATTR_EMULATE_PREPARES => false,
];
$pdo = new PDO($dsn, $user, $pass, $options);

function getRooms() {
    global $pdo;
    $query = "select * from room";
    return $pdo->query($query)->fetchAll(PDO::FETCH_OBJ);
}

function getEmployees() {
    global $pdo;
    $query = "select employee_id, concat(surname, ' ', employee.name) as 'name', room.name as 'room_name', phone, job from employee join room on employee.room = room.room_id ";
    return $pdo->query($query)->fetchAll(PDO::FETCH_OBJ);
}

function getEmployee($employee_id) {
    global $pdo;
    $query = "select employee_id, surname, employee.name as 'first_name', room_id, room.name as 'room_name', wage, job from employee join room on employee.room = room.room_id where employee_id = {$employee_id};";
    $employee = $pdo -> query($query) -> fetch(PDO::FETCH_OBJ);

}

function getRoom($room_id) {

}


//include ("./inc/db_connect.inc.php");
//include ("./errors.php");
// write key like `key`
