<?php
$products = array(
		"Electronics" => array(
				"Television" => array(
									array(
										"id" => "PR001", 
										"name" => "MAX-001",
										"brand" => "Samsung"
											),
									array(
										"id" => "PR002", 
										"name" => "BIG-301",
										"brand" => "Bravia"
											),
									array(
										"id" => "PR003", 
										"name" => "APL-02",
										"brand" => "Apple"
											)
										),
				"Mobile" => array(
									array(
										"id" => "PR004", 
										"name" => "GT-1980",
										"brand" => "Samsung"
											),
										array(
										"id" => "PR005", 
										"name" => "IG-5467",
										"brand" => "Motorola"
											),
										array(
										"id" => "PR006", 
										"name" => "IP-8930",
										"brand" => "Apple"
											)
										)
								),
				"Jewelry" => array(
							"Earrings" => array(
										array(
										"id" => "PR007", 
										"name" => "ER-001",
										"brand" => "Chopard"
											),
										array(
										"id" => "PR008", 
										"name" => "ER-002",
										"brand" => "Mikimoto"
											),
										array(
										"id" => "PR009", 
										"name" => "ER-003",
										"brand" => "Bvlgari"
												)
											),
							"Necklaces" => array(
										array(
										"id" => "PR010", 
										"name" => "NK-001",
										"brand" => "Piaget"
											),
										array(
										"id" => "PR011", 
										"name" => "NK-002",
										"brand" => "Graff"
											),
										array(
										"id" => "PR012", 
										"name" => "NK-003",
										"brand" => "Tiffany"
												)
											)				
									)
					)
					?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#first{
			text-align: center;
		}
		.center{
			margin-left: auto;
			margin-right: auto;
		}
		table, th, td {
  			border: 1px solid black;
  			border-collapse: collapse;
		}
		#second{
			text-align: center;
		}
		#third{
			text-align: center;
		}
		#fourth{
			text-align: center;
		}
		#fifth{
			text-align: center;
		}
	</style>
</head>
<body>

	<section id="first">
		<h1>Task 1:-</h1>
		<table class="center" width="1200px" height="600px">
			<th>Category</th> <th>Subcategory</th> <th>ID</th> <th>Name</th> <th>Brand</th> 
			
					<?php
					foreach ($products as $key => $cat) {
						foreach ($cat as $key1 => $subcat) {
							foreach ($subcat as $key2 => $item) {
								echo "<tr>";
								echo "<td>".$key."</td>";
								echo "<td>".$key1."</td>";

								foreach ($item as $subitem) {
									echo "<td>".$subitem."</td>";
								}
								echo "</tr>";
							}
						}
					}
					?>
		</table><br><br>
	</section>

	<section id="second">
		<h1>Task 2:-</h1>
		<table class="center" width="1200px" height="300px">
			<th>Category</th> <th>Subcategory</th> <th>ID</th> <th>Name</th> <th>Brand</th> 	

			<?php 
				foreach ($products as $key => $cat) {
					foreach ($cat as $key1 => $Category) {
						foreach ($Category as $key2 => $item) {
							if($key == "Electronics" && $key1 == "Mobile"){
							echo "<tr>";
							echo "<td>".$key."</td>";
							echo "<td>".$key1."</td>";

							foreach ($item as $subitem) {
									echo "<td>".$subitem."</td>";
								}
							}	
							echo "</tr>";
						}
					}
				}

			?>
		</table>
	</section>

	<section id="third">
			<h1>Task 3:-</h1>
				<table class="center" width="1200px" height="200px">
			<th>Category</th> <th>Subcategory</th> <th>ID</th> <th>Name</th> <th>Brand</th> 	

			<?php 
				foreach ($products as $key => $cat) {
					foreach ($cat as $key1 => $Category) {
						foreach ($Category as $key2 => $item) {
							if($key == "Electronics" && $key2 == "Samsung"){
							echo "<tr>";
							echo "<td>".$key."</td>";
							echo "<td>".$key1."</td>";

							foreach ($item as $subitem) {
									echo "<td>".$subitem."</td>";
								}
							}	
							echo "</tr>";
						}
					}
				}

			?>
		</table>
	</section>

	<section id="fourth">
		<h1>Task 4:-</h1>
			<table class="center" width="1200px" height="500px">
			<th>Category</th> <th>Subcategory</th> <th>ID</th> <th>Name</th> <th>Brand</th> 	

			<?php 
				unset($products['Electronics']['Television'][2]);
				foreach ($products as $key => $cat) {
					foreach ($cat as $key1 => $Category) {
						foreach ($Category as $key2 => $item) {
							// if($item['id'] =='PR003'){
								// unset($item);	

						// }else{
							echo "<tr>";
							echo "<td>".$key."</td>";
							echo "<td>".$key1."</td>";

							foreach ($item as $subitem) {
									echo "<td>".$subitem."</td>";
								}
							}
						}	
							echo "</tr>";
					}
			?>
		</table>
		
	</section>

	 <section id="fifth">
		<h1>Task 5:-</h1>
			<table class="center" width="1200px" height="500px">
			<th>Category</th> <th>Subcategory</th> <th>ID</th> <th>Name</th> <th>Brand</th> 	

			<?php 
				foreach ($products as $key => $cat) {
					foreach ($cat as $key1 => $Category) {
						foreach ($Category as $key2 => $item) {
							if($item['id'] =='PR002'){
								$item['name']='BIG-555';
							}
							echo "<tr>";
							echo "<td>".$key."</td>";
							echo "<td>".$key1."</td>";

							foreach ($item as $subitem) {
									echo "<td>".$subitem."</td>";
								}
							}	
							echo "</tr>";
						}
					}
			?>
		</table>
	</section>

</body>
</html>