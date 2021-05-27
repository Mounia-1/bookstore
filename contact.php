<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue layout-top-nav">
<div class="wrapper">

	<?php include 'includes/navbar.php'; ?>
	 
	  <div class="content-wrapper">
	    <div class="container">

	      <!-- Main content -->
	      <section class="content">
	        <div class="row">
	        	<div class="col-sm-9">
	        		<?php
	        			if(isset($_SESSION['error'])){
	        				echo "
	        					<div class='alert alert-danger'>
	        						".$_SESSION['error']."
	        					</div>
	        				";
	        				unset($_SESSION['error']);
	        			}
	        		?>
	        		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		                <ol class="carousel-indicators">
		                  <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="1" class=""></li>
		                  <li data-target="#carousel-example-generic" data-slide-to="2" class=""></li>
		                </ol>
		                <div class="carousel-inner">
		                  <div class="item active">
		                    <img src="images/slide1.png" alt="First slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/slide2.png" alt="Second slide">
		                  </div>
		                  <div class="item">
		                    <img src="images/slide3.png" alt="Third slide">
		                  </div>
		                </div>
		                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
		                  <span class="fa fa-angle-left"></span>
		                </a>
		                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
		                  <span class="fa fa-angle-right"></span>
		                </a>
		            </div>
					
		            <h2>Contactez-Nous</h2>
		       		
		       			    <section class="bg-white py-10">
							  
							   <div class="container">
								   
								   <form>
									   <div class="form-row">
										   <div class="form-group col-md-6"><label class="text-dark" for="inputName">Nom Complet</label><input class="form-control py-4" id="inputName" type="text" placeholder="Nom Complet" /></div>
										   <div class="form-group col-md-6"><label class="text-dark" for="inputEmail">Email</label><input class="form-control py-4" id="inputEmail" type="email" placeholder="name@example.com" /></div>
									   </div>
									   <div class="form-group"><label class="text-dark" for="inputMessage">Message</label><textarea class="form-control py-3" id="inputMessage" type="text" placeholder="Entrer votre message..." rows="4"></textarea></div>
									   <div class="text-center"><button class="btn btn-primary btn-marketing mt-4" type="submit">Envoyer</button></div>
								   </form>
	   
							   </div>
	   
							   
						   </section>

		       		 
	        	</div>
	        	<div class="col-sm-3">
	        		<?php include 'includes/sidebar.php'; ?>
	        	</div>
	        </div>
	      </section>
	     
	    </div>
	  </div>
  
  	<?php include 'includes/footer.php'; ?>
</div>

<?php include 'includes/scripts.php'; ?>
</body>
</html>