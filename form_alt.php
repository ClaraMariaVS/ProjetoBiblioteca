<html>
<head><title> </title></head>
<body>
<?php		
$ip= $_POST['ip'];	
$con=mysqli_connect("127.0.0.1","root","","biblioteca"); 
if (mysqli_connect_errno())
{  echo "Failed to connect to MySQL: " . mysqli_connect_error();}	
$result = mysqli_query($con,"SELECT * FROM cadastro WHERE ip='$ip'");	
?>
<p><center><form action="realizaalt.php" method="post">
<?php while($row = mysqli_fetch_array($result)){ ?>	
<input type="hidden" name="ip" value="<?php echo $row['ip']; ?>" />	
<label>Nome Cliente:<input type="text" name="nomec" value="<?php echo $row['nomec']; ?>" /></label><br/>
<label>CPF:<input type="text" name="cpf" value="<?php echo $row['cpf']; ?>" />	</label><br/>
<label>Nome Livro:<input type="text" name="nomel" value="<?php echo $row['nomel']; ?>" /></label><br/>
<label>Autor:<input type="text" name="autor" value="<?php echo $row['autor']; ?>"></label><br>
<label>Data Retirada:<input type="text" name="dtretirada" value="<?php echo $row['dtretirada']; ?>"/></label><br/>
<label>Data Devolução:<input type="text" name="dtdevolucao" value="<?php echo $row['dtdevolucao']; ?>" /></label><br/>	
<button type="submit" name="enviar" value="ok">	Alterar	</button></form>
<?php } ?></p>                     
</body>    
</html>