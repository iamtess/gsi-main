

<div class="widget">
	<h6 class="title">RESOURCES</h6>
	<hr>
	<ul class="link-list list-space">
		<li>
			<a class="list-link-deets" href="https://system.na2.netsuite.com/app/site/hosting/scriptlet.nl?script=168&deploy=1&compid=3743011">Place an Order</a>
		</li>
		<?php
		
		
		
		
		
		
		if(isset($pageName)) {
			if ($pageName == "viewDealer"){
				echo '
				<li class="link-list-on"><strong>View Live Inventory</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'brian/dealer-quick-view.php?warehouse='.$_SESSION ['warehouse'].'">View Live Inventory</a></li>';
			}
		}

		
		
	
		
		
		if (($_SESSION ['warehouse'] == '13') || ($_SESSION ['warehouse'] == '16') || ($_SESSION ['warehouse'] == '15')){
		
		echo '<li><a class="list-link-deets" href="https://shop.surfindustries.com/us/affiliate-area/">Affilliate Program</a></li>';
		
		}
		if (($_SESSION ['warehouse'] == '4') || ($_SESSION ['warehouse'] == '3')){
		
		echo '<li><a class="list-link-deets" href="https://shop.surfindustries.com/au/affiliate-area/">Affilliate Program</a></li>';
		
		}
		if ($_SESSION ['warehouse'] == '12'){
		
		echo '<li><a class="list-link-deets" href="https://shop.surfindustries.com/nz/affiliate-area/">Affilliate Program</a></li>';
		
		}
		
		

		
		if(isset($pageName)) {
			if ($pageName == "askCEO"){
				echo '
				<li class="link-list-on"><strong>Ask the CEO</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'dealer-admin/ask-the-ceo.php">Ask the CEO</a></li>';
			}
		}
		
		if(isset($pageName)) {
			if ($pageName == "dealerContact"){
				echo '
				<li class="link-list-on"><strong>Contacts</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'dealer-admin/dealerContact.php">Contacts</a></li>';
			}
		}
		
		
		
		
		if(isset($pageName)) {
			if ($pageName == "dealerLoyalty"){
				echo '
				<li class="link-list-on"><strong>Dealer Loyalty Program</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'dealer-admin/dealer-loyalty-program.php">Dealer Loyalty Program</a></li>';
			}
		}
		
		
		
		
		
		if(isset($pageName)) {
			if ($pageName == "dealerAssist"){
				echo '
				<li class="link-list-on"><strong>Dealer Portal Assistance</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'dealer-admin/dealer-portal-help-screens.php">Dealer Portal Assistance</a></li>';
			}
		}
		
		if(isset($pageName)) {
			if ($pageName == "trainingVideos"){
				echo '
				<li class="link-list-on"><strong>Dealer Training Videos</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'dealer-admin/dealer-training-videos.php">Dealer Training Videos</a></li>';
			}
		}
		
		if(isset($pageName)) {
			if ($pageName == "DIT"){
				echo '
				<li class="link-list-on"><strong>DIT Claim</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'dealer-admin/onlineDIT.php">DIT Claim</a></li>';
			}
		}


		 if(isset($pageName)) {
			if ($pageName == "FGoods"){
				echo '
				<li class="link-list-on"><strong>Faulty Goods Claim</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'dealer-admin/onlineWarranty.php">Faulty Goods Claim</a></li>';
			}
		}
		
			
		echo '<li><a class="list-link-deets" href="https://itunes.apple.com/au/app/global-surf-industries-catalogue/id503697347?mt=8&ls=1\">GSI iPad/iPhone Catalogue</a></li>';
		
		
		echo '<li><a class="list-link-deets" href="'.HOME.'GSIpayments">Make a Payment</a></li>';
		
		
		
		
	   ?>


	</ul>
</div>
<!-- end widget -->