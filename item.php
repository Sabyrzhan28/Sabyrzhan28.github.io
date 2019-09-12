

			<div class="items " style="display: flex;">


			<form action="update.php" method="POST" >

			<input type="text" name="user_id" style="display: none;" value="<?php echo $product['id']; ?>">

			<input type="text" name="user_name" value="<?php echo $product['name']; ?>">

			<input type="text" name="user_surname" value="<?php echo $product['surname']; ?>">

			<input type="text" name="user_email" value="<?php echo $product['email']; ?>">

			<button type="submit" style="text-decoration: none; margin-left: 10px;">
				<p>UPDATE</p>
			</button> 

			</form>

			<form action="delete.php" method="POST">

			<input type="text" value="<?php echo $product['id']; ?>" name="user_id" style="display: none;">

			<button type="submit" style="text-decoration: none; margin-left: 10px;">
				<p>DELETE</p>
			</button> 

			</form>

			</div>