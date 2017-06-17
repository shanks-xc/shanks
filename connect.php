
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>MYSQL</title>
</head>
<body>
<?php
session_start();
$conn= mysqli_connect('localhost','root','shanks1314520','shanks');

if (!$conn)
{
      die('Could not connect: ' . mysqli_error($conn));
}
else{
	echo "连接成功!";
}
mysqli_select_db($conn,"ajax_demo");
$names=$_GET['username'];
$title=$_GET['title'];
$description=$_GET['description'];
$sql = "INSERT INTO shanks_tab (username,title,derscription)
VALUES ('$names','$title','$description')";


//$sql = "SELECT id, username, title,derscription FROM shanks_tab where uwe="asdfasdf";
if (mysqli_query($conn, $sql)) {
    echo "新记录插入成功";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



$sql2 = "SELECT username,title,derscription FROM shanks_tab";
$result = $conn->query($sql2);
if ($result->num_rows > 0) {
    // 输出每行数据
    while($row = $result->fetch_assoc()) {
        echo "<br> ".  " username: ". $row["username"]. " ," ."title: ". $row["title"]. ", " ."description:". $row["derscription"];
    }
} else {
    echo "0 个结果";
}

$conn->close();
?>
</body>

</html>