<?php

include 'header.php';

?>
<main class="background-member">
	<div class="container card border-dark rounded bg-transparent mb-3 p-0">
		<div class="row no-gutters">
			<div class="col-md-4 p-0">
				<img src="./img/icon_<?php echo $_GET['title']; ?>.jpg" class="card-img" alt="...">
			</div>
			<div id="feature-box2" class="col-md-8 p-0">
				<div class="card-body">
					<h2 class="card-title text-white"><?php echo $_GET['title']; ?></h2>
					<h5 class="card-text text-white"><?php echo $_GET['description']; ?></h5>
				</div>
			</div>
		</div>
	</div>
</main>
<?php

include 'footer.php';

?>
