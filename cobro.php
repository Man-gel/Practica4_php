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
      $IVA = ($subt1 + $subt2 + $subt3)*0.16;
      $total = ($subt1 + $subt2 + $subt3)*1.16;
 //     var_dump(subt1);
    ?>
  <div>
    <table>
	   <tr>
	    <th>Producto</th>
	    <th>Cantidad</th>
	    <th>$ Unitario</th>
	   </tr>
	   <tr>
	    <td><?php echo $prod1['prod']?></td>
	    <td><?php echo $prod1['cant']?></td>
	    <td><?php echo $prod1['punit']?></td>
	   </tr>
	   <tr>
	    <td><?php echo $prod2['prod']?></td>
	    <td><?php echo $prod2['cant']?></td>
	    <td><?php echo $prod2['punit']?></td>
	   </tr>
	   <tr>
	    <td><?php echo $prod3['prod']?></td>
	    <td><?php echo $prod3['cant']?></td>
	    <td><?php echo $prod3['punit']?></td>
	   </tr>		
	</table>
   </div>
   <br/>
   <br/>
   <div>
    <table>
	   <tr>
	    <td><?php echo "SUBTotal"?></td>
	    <td><?php echo " 	$"?></td>
	    <td><?php echo $subtotal?></td>
	   </tr>
	   <tr>
	    <td><?php echo "IVA "?></td>
	    <td><?php echo "	$"?></td>
	    <td><?php echo $IVA?></td>
	   </tr>
	   <tr>
	    <td><?php echo "TOTAL $"?></td>
	    <td><?php echo ""?></td>
	    <td><?php echo $total?></td>
	   </tr>		
	</table>
   </div>
 </body>
</html>
