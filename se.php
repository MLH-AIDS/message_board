<!DOCTAPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8" http-equiv="refresh" content="5;URL='index.php'; " />
<title>留言发送</title>
</head>
<body>
<?php
if(!(empty($_POST) or empty($_COOKIE["fnfn"]) or empty($_POST["ftft"]))){
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
    $tablename="";
    $sql = "INSERT INTO ".$tablename." (fnfn, ftft)
    VALUES ('".$_COOKIE["fnfn"]."', '".$_POST["ftft"]."')";
    
    if ($conn->query($sql) === TRUE) {
        echo "发送成功<br/>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    } 
    $conn->close();
}
?>
<p>
5秒后自动返回<a href="index.php">发送页</a>
</p>
</body>
</html>