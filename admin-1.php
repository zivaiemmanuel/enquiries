<?php
$servername='localhost';
$username='root';
$password='';
$dbname='records';
$conn = mysqli_connect($servername,$username,$password,$dbname);
if(!$conn){
    die("ERROR: Could not connect");
}
$sql = "SELECT * FROM user";
$result = ($conn->query($sql));
$row = [];
if($result->num_rows > 0){
    $row = $result->fetch_all(MYSQLI_ASSOC);
}
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ADMNISTRATION</title>
</head>
<body>
    <main>
        <!--Intro starts-->
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
                        <th>Enquiy</th>
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
                        <td><?php echo $rows['Name']; ?></td>
                        <td><?php echo $rows['Number']; ?></td>
                        <td><?php echo $rows['Email']; ?></td>
                        <td><?php echo $rows['Enquiry']; ?></td>
                        <td><?php echo $rows['Response']; ?></td>
                    </tr>
                   <?php } ?>
                </tbody>
            </table>
            </div>
            <div>
            <h2>Respond to a Query</h2>
            <form  name="enquiryform" action="respond.php" method="host">
                <input type="text" placeholder="recepiant's email" name="emailaddress">
                <textarea placeholder="your response" cols="30" rows="10" name="enquiry"></textarea>
                <input type="submit" value="send message" class="subbutton">
            </form>
            </div>
        </div>
        <!--Contact ends-->
    </main>
</body>
</html>

<?php   
    mysqli_close($conn);
?>