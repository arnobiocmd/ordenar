<?php
include('confi.php');
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
  <base href="">
<?php
  
  

  if(isset($_GET['ordem']) && !empty($_GET['ordem'])){
    $ordem = addslashes($_GET['ordem']);
    
    $sql = MySql::conectar()->prepare("SELECT * FROM ordenar ORDER BY ".$ordem);
        

  }else{
    $ordem = '';
    $sql = MySql::conectar()->prepare("SELECT * FROM ordenar");
    
    
    
  }


?>


<div class="container">
  <form method="GET">
  	<select name="ordem" onchange="this.form.submit()">
  	<option></option>
  	<option value="nome"<?php echo($ordem == "nome")?'selected="selected"':'';?>>Pelo Nome</option>
  	<option value="idade"<?php echo($ordem == "idade")?'selected="selected"':'';?>>Pela Idade</option>
	
  </select>
 </form>
  <table class="table">
    <thead class="thead-dark">
      <tr>
        <th>Nome</th>
        <th>Idade</th>
      </tr>
    </thead>
    <?php 
      $sql->execute();
      if($sql->rowCount() > 0){
          foreach ($sql as $key => $value) {
        ?>
         <tbody>
          <tr>
            <td><?php echo $value['nome'];?></td>
            <td><?php echo $value['idade'];?></td>
          </tr>
      
    </tbody>
        <?php
      }
      }
    

    ?>
   
  </table>
  
</div>


</body>
</html>