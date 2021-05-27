<div class="row">
	<div class="box box-solid">
	  	<div class="box-header with-border">
	    	<h3 class="box-title"><b>Les Plus Vues Aujourd'hui</b></h3>
	  	</div>
	  	<div class="box-body">
	  		<ul id="trending">
	  		<?php
	  			$now = date('Y-m-d');
	  			$conn = $pdo->open();

	  			$stmt = $conn->prepare("SELECT * FROM products WHERE date_view=:now ORDER BY counter DESC LIMIT 10");
	  			$stmt->execute(['now'=>$now]);
	  			foreach($stmt as $row){
	  				echo "<li><a href='product.php?product=".$row['slug']."'>".$row['name']."</a></li>";
	  			}

	  			$pdo->close();
	  		?>
	    	<ul>
	  	</div>
	</div>
</div>


<div class="row">
	<div class='box box-solid'>
	  	<div class='box-header with-border'>
	    	<h3 class='box-title'><b>Suivez-nous sur les réseaux sociaux</b></h3>
	  	</div>
	  	<div class='box-body'>
	    	<a class="btn btn-social-icon btn-facebook" href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
	    	<a class="btn btn-social-icon btn-twitter" href="https://twitter.com/"><i class="fa fa-twitter"></i></a>
	    	<a class="btn btn-social-icon btn-instagram" href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a>
	    	<a class="btn btn-social-icon btn-linkedin" href="https://www.linkedin.com/"><i class="fa fa-linkedin"></i></a>
	  	</div>
	</div>
</div>
