<!DOCTYPE html>
<html>
 <head>
 <title>Venta</title>
 </head>
 <body>
 <h3>Ticket: 00316813</h3>
  <?php
//var_dump($_POST);
      $productos = array(
	 '1'=> array(
	      'cant' => $_POST['cant1'],
	      'prod' => $_POST['prod1'],
	      'punit'=> $_POST['punit1']
	   ),
	  '2'=> array(
	      'cant' => $_POST['cant2'],
	      'prod' => $_POST['prod2'],
	      'punit'=> $_POST['punit2']
	   ),
	  '3'=> array(
	      'cant' => $_POST['cant3'],
	      'prod' => $_POST['prod3'],
	      'punit'=> $_POST['punit3']
	   )
      );
 
      $prod1 = $productos['1'];
      $prod2 = $productos['2'];
      $prod3 = $productos['3'];
 //     echo"<br/>";
 //     var_dump($prod1);
 //     echo"<br/>";
      $suma_cant = $prod1['cant'] + $prod2['cant'] + $prod3['cant'];
      $subt1 = $prod1['cant'] * $prod1['punit'];
      $subt2 = $prod2['cant'] * $prod2['punit'];
      $subt3 = $prod3['cant'] * $prod3['punit'];
      $subtotal = $subt1 + $subt2 + $subt3;
      $total = ($subt1 + $subt2 + $subt3)*1.16;
 //     var_dump(subt1);
    ?>
  <div>
  <?php
 
    echo "<h1>$subt1</h1>";
    echo "<h1>$subt2</h1>"; 
    
  ?>
   </div>
 </body>
</html>
