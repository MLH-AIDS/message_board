<!DOCTAPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>留言</title>
<style>
span.fnfn{color:blue;font-size:18px;}
div#lylist{background-color:#eeeeee}
#sucpost{color:green;display:;}
button{padding:5px;background:#eee;}
</style>
</head>
<body>
<div>
<a href="#sent"><button>发送留言</button></a>
</div>
<div id="lylist">
<p>留言列表：</p>
<?php
$servername = "服务器名";
$username = "用户名";
$password = "密码";
$dbname = "数据库名";
$tablename = "数据表名";
// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
 
$sql = "SELECT id, fnfn, ftft FROM ".$tablename;
$result = $conn->query($sql);
 
if ($result->num_rows > 0) {
    // 输出数据
    while($row = $result->fetch_assoc()) {
        echo "<span id='mea_" . $row["id"]."'>#" . $row["id"]. " - <span class='fnfn'>" . $row["fnfn"]. "</span>：" . $row["ftft"]. "<br/></span>";
    }
} else {
    echo "0 结果";
}
$conn->close();
?>
<p>---</p>
</div>
<p id="sent">发送留言</p>
<form method="post" action="se.php" onsubmit="return checkmes()">名字: <input type="text" name="fnfn" id="fnfn" class="fnfn"></span><br/>留言: <input type="text" name="ftft" id="inputmes" autocomplete="off"><br/><input type="submit" value="提交" onclick="fosu"></form>
<a href="#"><button>返回顶部</button></a>
<script>
function checkmes(){
    let inputa=toString(document.getElementById("inputmes").value);
    if(inputa.length>100){alert("留言不能大于100字");return false;}
    if(inputa.length<1){alert("留言不能为空");return false;}
}
</script>
</body>
</html>