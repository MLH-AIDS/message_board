<?php
//创建数据库
/*
$servername = "";
$username = "";
$password = "";
$conn = new mysqli($servername, $username, $password);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
$dbname="";
// 创建数据库
$sql = "CREATE DATABASE ".$dbname;
if ($conn->query($sql) === TRUE) {
    echo "数据库创建成功";
} else {
    echo "Error creating database: " . $conn->error;
}
$conn->close();
*/

//创建数据表
$servername = "";
$username = "";
$password = "";
$dbname = "";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
// 使用 sql 创建数据表
$tname="mytable";
$sql = "CREATE TABLE ".$tname." (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
fnfn VARCHAR(30) NOT NULL,
ftft VARCHAR(100) NOT NULL,
reg_date TIMESTAMP
)";
if ($conn->query($sql) === TRUE) {
    echo "Table ".$tname." created successfully";
} else {
    echo "创建数据表错误: " . $conn->error;
}
$conn->close();
?>