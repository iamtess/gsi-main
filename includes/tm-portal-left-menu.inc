

<div class="widget">
	<h6 class="title">RESOURCES</h6>
	<hr>
	<ul class="link-list list-space">
		<li>
			<a class="list-link-deets" <?php echo 'href="'.HOME.'brian/brian-create-an-order.php"'; ?> >Brian</a>
		</li>
		<?php
		
		if(isset($pageName)) {
			if ($pageName == "viewPER"){
				echo '
				<li class="link-list-on"><strong>View Live Inventory - Perth</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'brian/tm-quick-view.php?warehouse=4">View Live Inventory - Perth</a></li>';
			}
		}


		if(isset($pageName)) {
			if ($pageName == "viewSYD"){
				echo '
				<li class="link-list-on"><strong>View Live Inventory - Sydney</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'brian/tm-quick-view.php?warehouse=3">View Live Inventory - Sydney</a></li>';
			}
		}


		if(isset($pageName)) {
			if ($pageName == "viewLA"){
				echo '
				<li class="link-list-on"><strong>View Live Inventory - LA</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'brian/tm-quick-view.php?warehouse=16">View Live Inventory - LA</a></li>';
			}
		}


		if(isset($pageName)) {
			if ($pageName == "viewATL"){
				echo '
				<li class="link-list-on"><strong>View Live Inventory - Atlanta</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'brian/tm-quick-view.php?warehouse=13">View Live Inventory - Atlanta</a></li>';
			}
		}


		if(isset($pageName)) {
			if ($pageName == "viewHI"){
				echo '
				<li class="link-list-on"><strong>View Live Inventory - Hawaii</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'brian/tm-quick-view.php?warehouse=15">View Live Inventory - Hawaii</a></li>';
			}
		}


		if(isset($pageName)) {
			if ($pageName == "viewAUCK"){
				echo '
				<li class="link-list-on"><strong>View Live Inventory - Auckland</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'brian/tm-quick-view.php?warehouse=12">View Live Inventory - Auckland</a></li>';
			}
		}


		if(isset($pageName)) {
			if ($pageName == "CPIPProc"){
				echo '
				<li class="link-list-on"><strong>CPIP Process</strong></li>
				';
}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'TM-portal/tm-cpip-process.php">CPIP Process</a></li>';
			}
		}


		if(isset($pageName)) {
			if ($pageName == "CPIPProd"){
				echo '
				<li class="link-list-on"><strong>CPIP Product</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'TM-portal/tm-cpip-product.php">CPIP Product</a></li>';
			}
		}


		if(isset($pageName)) {
			if ($pageName == "DIT"){
				echo '
				<li class="link-list-on"><strong>DIT Claim</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'TM-portal/tm-dit-online.php">DIT Claim</a></li>';
			}
		}


		 if(isset($pageName)) {
			if ($pageName == "FGoods"){
				echo '
				<li class="link-list-on"><strong>Faulty Goods Claim</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'TM-portal/tm-warranty-online.php">Faulty Goods Claim</a></li>';
			}
		}
	   ?>


	</ul>
</div>
<!-- end widget -->