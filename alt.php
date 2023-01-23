<html>
<head><title> </title></head>
<body>
<?php
$con=mysqli_connect("localhost","root","","biblioteca"); 
if (mysqli_connect_errno())  {  echo "Failed to connect to MySQL: " . mysqli_connect_error();  }
$result = mysqli_query($con,"SELECT * FROM cadastro");?><p> <center>
<table border="2" bordercolor="brown" background="img/fundo3.jpg">	
<tr><th>Id</th> <th>Nome cliente</th> <th>CPF</th> <th>Nome livro</th> <th>Autor</th> <th>Data retirada</th> <th>Data devolução</th> <th>Del</th><th>Alt</th>
</tr>
<?php while($row = mysqli_fetch_array($result)){ ?>  	
    <tr><td><?php echo $row['ip']; ?></td>	
    <td><?php echo $row['nomec']; ?></td>
    <td><?php echo $row['cpf']; ?></td>
    <td><?php echo $row['nomel']; ?></td>
    <td><?php echo $row['autor']; ?></td>  
    <td><?php echo $row['dtretirada']; ?></td>      
    <td><?php echo $row['dtdevolucao']; ?></td>
    <td><form action="del.php" method="post">
    <input type="hidden" name="ip" value="<?php echo $row["ip"]; ?>"/>			  
    <button type="submit" name="botdel" value="ok">Del</button>
</form></td>
<td><form action="form_alt.php" method="post">
    <input type="hidden" name="ip" value="<?php echo $row["ip"]; ?>"/>		            
    <button type="submit" name="botalt" value="ok">Alt</button>
</form></td></tr>
     <?php } 	mysqli_close($con);?>    </table></p>        
</body>    
</html>