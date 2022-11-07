<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>HURUDZA</title>
<style>
body{
    background-color: ;
}
h2{
    text-align: center;
}
div{
    background-color: lightgreen;
    border-radius: 10;
}
    
h1{
    color: lightgreen;
    font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;
    text-align: center;}
</style>
</head>
<body>
<h1>
    HURUDZA
    </h1>>
<div class="div2">

       <h2> <a href="C:\xampp\htdocs\testphp\enquiry.php">ENQUIRE</a><br>
      <h2>  <a href="C:\xampp\htdocs\testphp\admin-1.php">RESPOND</a><br>
   
</div>
<fieldset>
<legend>Quiries Form</legend>
<form name="frmContact" method="post" action="connect.php">
<p>
<input type="text1s" placeholder="Enter Name"  name="txtName" id="txtName">
</p>
<p>
<input type="text" placeholder="Enter Email"  name="txtEmail" id="txtEmail">
</p>
<p>
<input type="text" placeholder="Enter Phone"  name="txtPhone" id="txtPhone">
</p>
<p>
<textarea name="txtMessage"  placeholder="Enter Message"  id="txtMessage"></textarea>
</p>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</fieldset>
</body>
</html>
<?php
$servername='localhost';
$username='root';
$password='';
$dbname='mydb';
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("ERROR: Could not connect");
}
$sql = "SELECT * FROM tbl_contact";
$result = ($conn->query($sql));
$row = [];
if($result->num_rows > 0){
    $row = $result->fetch_all(MYSQLI_ASSOC);
}
?>

        <div>
            <div >
                <h2>ADMNISTRATION</h2>
            </div>
        </div>
        <!--Intro ends-->
        <!--Contact starts-->
        <div id="log-cont">
            <div id="alogbox">
            <center>
            <h2>List of Customer Queries</h2>
            </center>
            
            <table border="1" width="100%">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Number</th>
                        <th>Email</th>
                        <th>Message</th>
                        <th>Response</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if(!empty($row))
                    foreach($row as $rows)
                   { 
                    ?>
                    <tr>
                        <td><?php echo $rows['fldName']; ?></td>
                        <td><?php echo $rows['fldEmail']; ?></td>
                        <td><?php echo $rows['fldPhone']; ?></td>
                        <td><?php echo $rows['fldMessage']; ?></td>
                        <td><?php echo $rows['fldResponse']; ?></td>
                    </tr>
                   <?php } ?>
                </tbody>
            </table>
            </div>
            <div>
                
            <h2>Respond to a Query</h2>
            <form  name="enquiryform" action="respond.php" method="host">
                <input type="text" placeholder="recepiant's email" name="txtEmail">
                <textarea placeholder="your response" cols="30" rows="10" name="txtResponse"></textarea>
                <input type="submit" value="send message" class="subbutton">
            </form>
            </div>
        </div>
  <?php   
    mysqli_close($conn);
?>