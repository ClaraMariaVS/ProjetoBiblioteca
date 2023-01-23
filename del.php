<html>
<head><title> </title></head>
<body>
<?php	
$ip=$_POST['ip']; 
$sql = "delete from cadastro where id='$ip'";	   
$con=mysqli_connect("127.0.0.1","root","","biblioteca");    
    if (mysqli_connect_errno())
    { echo "Failed to connect to MySQL: " . mysqli_connect_error(); }

mysqli_query($con, $sql);
    echo "<center><h2> Deletado com sucesso!</center></h2><p><br>";              
mysqli_close($con);

?>    
         <center><h2><a href="alt.php">VOLTAR</a></h2></center>
</body>    
</html>