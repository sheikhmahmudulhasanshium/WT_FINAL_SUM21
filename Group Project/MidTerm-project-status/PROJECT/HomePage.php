<html>
<head>
	<style>
		
	</style>
</head>
<body>
    
	<table align="center">
		<tr>
			<td>
				<p>&nbsp;&nbsp;&nbsp;&nbsp;Hotline Number:&nbsp;+88019xxxxxxx,&nbsp;+88018yyyyyyyyy</p>
			</td>
			<td align="right">
				&nbsp;&nbsp;&nbsp;&nbsp;<a href="MyLogin.php"><input type="submit" value="Book Now" ></a>
			</td>
		</tr>
		<tr>
			<td colspan="4">
			</td>
			<td colspan="3">
			</td>
		</tr>
		<tr>
			<td colspan="4">
			</td>
			<td colspan="3">
			</td>
		</tr>
		
	</table>
	<table align="center">
		<tr>
			<td>
				<a href="HomePage.php"><input type="submit" value="Home" ></a>
			</td>
			<td>
				<a href="Category.php"><input type="submit" value="Rooms" ></a>
			</td>
			<!--<td>rgba(237, 226, 0, 0.6)
				<select>
						<option selected disabled>Facilities & Services</option>
						<a href="GymReserve.html"><option>Gym</option></a>
						<a href="Restaurant.html"><option>Food Order</option></a>
						<!--<option>Facilities & Services</option>
						<option>Facilities & Services</option>
				</select>
			</td>-->
			<td>
				<a href="MyLogin.php"><input type="submit" value="Reservation" ></a>
			</td>
			<td>
				<a href="Gallery.php"><input type="submit" value="Gallery" ></a>
			</td>
			<td>
				<a href="Events.php"><input type="submit" value="Events" ></a>
			</td>
			<td>
				<a href="GymReserve.php"><input type="submit" value="Gym" ></a>
			</td>
			<td>
				<a href="Spa.php"><input type="submit" value="Spa" ></a>
			</td>
			<td>
				<a href="Restaurant.php"><input type="submit" value="Resturant" ></a>
			</td>
			<td>
				<a href="Special_offer.html"><input type="submit" value="Special Offers" ></a>
			</td>
			<td>
				<a href="Review.php"><input type="submit" value="Contact Us" ></a>
			</td>
		</tr>
	</table>
	<img width="1335px" height="550px" src="Hotel Image1.jpg">
	<table align="center" >
		<tr>
			<td>Check In</td>
			<td>Check Out</td>
			<td>Adult</td>
			<td>Children</td>
			<td rowspan="2"><a href="Category.php"><input type="submit" value="Check Availability"></a></td>
		</tr>
		<tr>
			<td><input type="text"></td>
			<td><input type="text"></td>
			<td>
				<select>
					<option selected disabled>--Select--</option>
							<?php
								for($i=1; $i<=15; $i++){
									echo "<option>$i</option>";
								}
							?>
				</select>
			</td>
			<td>
				<select>
					<option selected disabled>--Select--</option>
							<?php
								for($i=1; $i<=15; $i++){
									echo "<option>$i</option>";
								}
							?>
				</select>
			</td>
		</tr>
	</table>
	<br>
	<table>
		<tr>
			<td colspan="5" align="center">
				<h3 ><i>OTHERS</i></h3>
			</td>
		</tr>
		<tr>
			<td colspan="2" align="center">
				<img width="600px" height="500px" src="4 beds.jpg">
			</td>
			<td colspan="3" align="center">
				<h3>Luxurious Hotel In Dhaka</h3>
				<hr><br>
				<p> we are dedicated in making sure that your visit to Dhaka is memorable, comfortable and delightful.</p>
			</td>
		</tr>
	</table>
</body>
</html>