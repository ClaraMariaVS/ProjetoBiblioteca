<html>
<head><title> </title></head>
<body>
<?php	
$nomec= $_POST['nomec'];
$cpf=$_POST['cpf'];    
$nomel=$_POST['nomel'];
$autor= $_POST['autor'];
$dtretirada= $_POST['dtretirada'];
$dtdevolucao= $_POST['dtdevolucao'];	

$sql = "insert into cadastro(nomec,cpf,nomel,autor,dtretirada,dtdevolucao)               
values('$nomec','$cpf','$nomel','$autor','$dtretirada','$dtdevolucao')";

$con=mysqli_connect("127.0.0.1","root","","biblioteca");	
	if (mysqli_connect_errno())
	{  echo "Failed to connect to MySQL: " .  mysqli_connect_error();}

mysqli_query($con,$sql);
echo "<center><h2>Cadastrado com sucesso!</center></h2><p><br>";  

    mysqli_close($con);
 ?>              
         <center><h2><a href="http://localhost/projetobiblioteca/cadastrar.html">VOLTAR</a></h2></center>
</body>    
</html>