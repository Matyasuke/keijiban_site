<?php
require_once('db_info.php');

$sql=mysqli_query($mysqli,"select MAX(comment_number) as max_value from comment");
$row=$sql->fetch_assoc();
$now_num=$row["max_value"]+1;
$name=$_POST['name'];
$text=$_POST['text'];
$h_text=$mysqli->real_escape_string($text);
$time=date("Y-m-d H:i:s");


$query="insert into comment values('$now_num','$name','$h_text','$time')";

if(mysqli_query($mysqli,$query)){
	echo "Post comment success!";
}
else{
	echo "error is occur.";
}
mysqli_close($mysqli);
echo "wait for a while";
header('Location: index.php');
exit();
?>
