<?php

include 'header.php';

?>
<main>

<div class="container .bg-cover">
	<!-- about us area -->
	<h1 class="text-white pt-5 pl-5 pb-3">About Us</h1>
	<h4 class="text-white lead mb-5"><?php echo $index_row['about_us']; ?></h4>



	<!-- feature boxes -->
	<!-- $index_row has the associated array returned from the query "SELECT * FROM page"; -->
	<div class="row">
		<div class="card border-dark rounded bg-transparent col-12 col-md-6 mb-3 p-0">
		  <div class="row no-gutters">
		    <div class="col-md-4 p-0">
		      <img src="img/<?php echo $index_row['feature_box_1_image']; ?>" class="card-img" alt="...">
		    </div>
		    <div id="feature-box1" class="col-md-8 p-0">
		      <div class="card-body">
		        <h2 class="card-title text-white"><?php echo $index_row['feature_box_1_title']; ?></h2>
		        <h5 class="card-text text-white"><?php echo $index_row['feature_box_1_text']; ?></h5>
						<button class="ui inverted button mt-3 pl-5 pr-5 rounded-pill">Learn more</button>
		      </div>
		    </div>
		  </div>
		</div>
		<div class="card border-dark rounded bg-transparent col-12 col-md-6 mb-3 p-0">
		  <div class="row no-gutters">
		    <div class="col-md-4 p-0">
		      <img src="img/<?php echo $index_row['feature_box_2_image']; ?>" class="card-img" alt="...">
		    </div>
		    <div id="feature-box2" class="col-md-8 p-0">
		      <div class="card-body">
		        <h2 class="card-title text-white"><?php echo $index_row['feature_box_2_title']; ?></h2>
		        <h5 class="card-text text-white"><?php echo $index_row['feature_box_2_text']; ?></h5>
						<button class="ui inverted button mt-3 pl-5 pr-5 rounded-pill">See plans</button>
		      </div>
		    </div>
		  </div>
		</div>
	</div>



</main>
<?php

include 'footer.php';

?>
