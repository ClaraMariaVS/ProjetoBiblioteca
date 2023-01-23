<html>
<head><title> </title></head>
<body>
<?php
$con=mysqli_connect("localhost","root","","biblioteca"); 
if (mysqli_connect_errno())  {  echo "Failed to connect to MySQL: " . mysqli_connect_error();  }
$result = mysqli_query($con,"SELECT * FROM cadastro");?><p> <center>
<table border="2" bordercolor="brown" background="img/fundo3.jpg">	
<tr><th>Id</th> <th>Nome cliente</th> <th>CPF</th> <th>Nome livro</th> <th>Autor</th> <th>Data retirada</th> <th>Data devolução</th>
</tr>
<?php while($row = mysqli_fetch_array($result)){ ?>  	
    <tr><td><?php echo $row['ip']; ?></td>	
    <td><?php echo $row['nomec']; ?></td>
    <td><?php echo $row['cpf']; ?></td>
    <td><?php echo $row['nomel']; ?></td>
    <td><?php echo $row['autor']; ?></td>  
    <td><?php echo $row['dtretirada']; ?></td>      
    <td><?php echo $row['dtdevolucao']; ?></td>

     <?php } 	mysqli_close($con);?>    </table></p>        
</body>    
</html>