<?php
include("config.php");
session_start();

if(isset($_POST['ajax_content']))
{
	$my_section=$_POST['section'];
	$my_content=$_POST['content'];
	
	$conn= new mysqli($host, $username, $password, $databasename);	
	$sql = "UPDATE content SET content='$my_content' WHERE section='$my_section'";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
exit;

}

if(isset($_POST['ajax_content_load']))
{
	$my_section=$_POST['section'];
	
	$conn= new mysqli($host, $username, $password, $databasename);
	$sql= "SELECT content FROM content WHERE section='$my_section'";

	$result = $conn->query($sql);

	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			echo $row["content"];
		}
	} else {
		echo "fail";
	}
$conn->close();
exit;

}

?>