<?php
	include('confi.php');
	$info = Painel::GetAll();


?>

<!DOCTYPE html>
<html>
<head>
	<title>Ordenar</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
</head>
<body>



<div class="container">

	<select name="ordem">
	<option></option>
	<option value="nome">Pelo Nome</option>
	<option value="idade">Pela Idade</option>
	
</select>
 
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Nome</th>
        <th>Idade</th>
      </tr>
    </thead>
    <?php 
    	foreach ($info as $key => $value) {
    		?>
    		 <tbody>
      		<tr>
        		<td><?php echo $value['nome'];?></td>
       			<td><?php echo $value['idade'];?></td>
      		</tr>
      
    </tbody>
    		<?php
    	}
    ?>
   
  </table>
  
</div>


</body>
</html>