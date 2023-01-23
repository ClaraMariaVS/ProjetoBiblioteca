<html>
<head><title> </title></head>
<body>
<?php		
$ip=$_POST['ip'];                
$nomec= $_POST['nomec'];		
$cpf=$_POST['cpf'];               
$nomel=$_POST['nomel'];		
$autor=$_POST['autor'];               
$dtretirada=$_POST['dtretirada'];                
$dtdevolucao=$_POST['dtdevolucao'];	

$sql="update cadastro set i='$ip',nomec='$nomec',cpf='$cpf',nomel='$nomel',autor='$autor',dtretirada='$dtretirada',dtdevolucao='$dtdevolucao' where ip=$ip";
$con=mysqli_connect("127.0.0.1","root","","biblioteca");          		
if (mysqli_connect_errno())	
    {  echo "Failed to connect to MySQL: " . mysqli_connect_error(); }  

mysqli_query($con, $sql);
 echo "<center><h2>Alteração realizada com sucesso!</center></h2><p><br>";                
    mysqli_close($con);		
?>              
         <center><h2><a href="alt.php">VOLTAR</a></h2></center>
</body>    
</html>