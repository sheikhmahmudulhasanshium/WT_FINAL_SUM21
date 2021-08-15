<?php
		require_once 'Controller/PaymentController.php';
		$pm = getPaymentMethods();
		$i=1;
		echo "<h1 style='color:green' align='center'><b>Payment Method</b></h1>";

		foreach($pm as $c)
		{
			$id = $c["id"];
			
			echo "<table border = '6'>";
			
			echo "<tr>";
			//echo "<td></td>";
			echo "<td colspan='3'>
			<h1 style='color:brown'>$i. ". $c["name"].'</h1>'."</td>";
			echo "</tr>";
			echo "<tr>";
			echo "<td>&nbsp;&nbsp;<b>Category:</b> </td><td>".'&nbsp;&nbsp;&nbsp;&nbsp;'.$c["paymentCat"]. '&nbsp;&nbsp;&nbsp;&nbsp;'."</td>";
			echo "</tr>";
			
			
			echo "<tr>";
			echo "<td>&nbsp;&nbsp;<b>Description:</b> </td><td>".'&nbsp;&nbsp;&nbsp;&nbsp;'.$c["description"]. '&nbsp;&nbsp;&nbsp;&nbsp;'."</td>";
			echo "</tr>";
			echo "<tr><td>";
			echo '<a href= "delete_payment_method.php?id='.$id.'"><input type="button" value="Delete" ></a>';
			
			echo "</td></tr>";
			echo "</table>";
			echo "&nbsp;&nbsp;&nbsp;&nbsp;";
			$i++;
		}
			echo '<a href= "add_payment_method.php?id='.$id.'"><input type="button" value="Add">  </a>';
			
			
			
			
		
		?>
