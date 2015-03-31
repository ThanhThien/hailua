<style>
	p{
	padding: 2em;
	}
	body{
	}
	.img-limit{
	max-width:400px;
	}
</style>
  </head>
  <body>
  	<nav class="navbar navbar-default navbar-static-top">
	 <div class="container">
	 <ul class="nav navbar-nav">
    <li class="navbar-text"> <?php echo $title; ?> </li>
	</ul>
	</div>
	</nav>
	<div class="container">

	<div class="row">
	<div class="col-md-3">
	<nav class="nav nav-pills nav-stacked">
	<li role="presentation" class="active"> <a href="#">Home </a></li>
	<li role="presentation">  <a href="#">Profile</a> </li>
	<li role="presentation">  <a href="#">Messages </a></li>
	</nav>
	</div>
	<div class="col-md-9">
	<?php 
	foreach($products as $product):
	?>
	<div class="col-md-6">
	<h4><?= $product['product_name']; ?></h4>
	<a href="#" class="center-block">
      <img src="../resources/images/<?php echo  $product['image_url']; ?>" class="img-rounded center-block img-responsive" alt="...">
    </a>
	<p>
	<?php echo  $product['description']; ?>
	</p>
	</div>
	<?php
	endforeach;
	?>
	<!--
	<div class="row">
	<div class="col-md-6">
	<h4> Goyen Electric Solenoid Valve Straight </h4>
	<a href="#" class="center-block">
      <img src="../resources/images/img1.jpg " class="img-rounded center-block img-responsive" alt="...">
    </a>
	<p>
The Selecta Power 400 litre fire fighting units are high quality, affordable units that will fit neatly across the back, of your 1 tonne tray, and also fits between the wheel arches of popular utilities.

The Selecta Fire Fighting equipment range consists of Fire pumps, 400 & 800 litre Fire fighting units fire hose, fire guns. The range also includes 500 to 1000 litre Skid and Trailed fire fighters.</p>

	</div>
	<div class="col-md-6">
	</div>
	<h4> Primus Lamb Detailer</h4>
		<a href="#" class="center-block">
      <img src="../resources/images/img2.jpg " class="img-rounded center-block img-responsive" alt="...">
    </a>
	<p>
Bootstrap (currently v3.3.4) has a few easy ways to quickly get started, eaotstrap (currently v3.3.4) has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suotstrap (currently v3.3.4) has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what such one appealing to a different skill level and use case. Read through to see what suits your particular needs.
	</p>
	</div>
	<div class="row">
	<div class="col-md-6">
	<h4> Blundstone Boots Style 200</h4>
		<a href="#" class="center-block">
      <img src="../resources/images/img3.jpg " class="img-rounded center-block img-responsive" alt="...">
    </a>
		<p>
		Bootstrap (currently v3.3.4) has a few easy ways to quickly get started, each one appealing to a different skill level and use case. Read through to see what suits your particular needs.
		</p>
	</div>
	<div class="col-md-6">
	<h4> Pfizer Dectomax Injectable Endectocide 2.5 Lt</h4>
		<a href="#" class="center-block">
      <img src="../resources/images/img4.jpg " class="img-rounded center-block" alt="...">
    </a>
		<p>
		Dectomax Injectable solution is a ready-to-use, colourless to pale yellow, sterile solution containing 1% w/v Doramectin (10mg/mL). 
In cattle, Dectomax is formulated to deliver the recommended dosage (200u/kg of body weight) when given by subcutaneous (SC) injection at the rate of 1mL/50kg of body weight. Dectomax® injection is indicated for the treatment and control of gastrointestinal roundworms, lungworms, sucking lice, biting lice, cattle tick and mange mites. Consult your veterinarian for assistance in the diagnosis, treatment, and control of parasitism</p>
	</div>
	</div>
	-->
	</div>
	</div>
	</div>
	</div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../resources/js/bootstrap.min.js"></script>
  </body>
</html>