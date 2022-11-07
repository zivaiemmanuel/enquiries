<?php
$servername='localhost';
$username='root';
$password='';
$dbname='mydb';
$conn = mysqli_connect($servername,$username,$password,$dbname);

$txtMessage = $_POST['fldMessage'];
$txtEmail = $_POST['fldEmail'];
$txtResponse = $_POST['fldResponse'];

if(!$conn){
    die("ERROR: Could not connect");
}
$txtMessage= $_REQUEST['fldMessage'];
$txtEmail= $_REQUEST['fldEmail'];
$sql = "UPDATE tbl_contact SET fldResponse='$txtResponse' WHERE fldEmail = '$txtEmail'";

if(mysqli_query($conn, $sql)){
    echo"<h2>Responded to query successfully</h2>";
}
else{
    echo"ERROR: Sorry :".$sql."".mysqli_error($conn);
}
mysqli_close($conn);
?>