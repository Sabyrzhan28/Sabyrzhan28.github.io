<?php
	 require_once('config.php'); 
	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Site</title>
</head>
<body>

<form action="add-new.php" method="POST" enctype="multipart/form-data" style="display: flex; justify-content: center; margin-top: 30px;">
						<!-- ДЛЯ ОТПРАВКИ ФОТО ОБЗ. multipart/form-data -->
						<div class="form-group">
							<input name="name" type="text" class="form-control" placeholder="Имя" style="margin-left: 10px;">
						</div>
						
						<div class="form-group">
							<input name="surname" type="text" class="form-control" placeholder="Фамилия" style="margin-left: 10px;">
						</div>

						<div class="form-group">
							<input name="email" type="text" class="form-control" placeholder="Почта" style="margin-left: 10px;">
						</div>

			
						
							<button type="submit" class="btn btn-primary" style="margin-left: 30px;">ADD</button>
						</div>
</form>



<div class="items-list" style="margin-top: 30px;">
<?php 
	
	$sql = "SELECT * FROM users";
	$result = $db->query($sql);
	$products = $result->fetchAll(PDO::FETCH_ASSOC);


	foreach ($products as $product) {
		echo '<div class="items-lis" style="display: flex;justify-content: space-around; text-align: center;">';
		 include 'item.php';
		echo "</div>";
	}

 ?>

		
</div>
 


	<!-- style="margin-left: 10px;border-radius: 10px;border: 1px solid black;text-decoration: none;outline: 0;height: 30px;text-align: center;" -->

	
</body>
</html>
