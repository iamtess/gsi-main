

<div class="widget">
	<h6 class="title">RESOURCES</h6>
	<hr>
	<ul class="link-list list-space">
		<li>
			<a class="list-link-deets" href="https://system.na2.netsuite.com/app/site/hosting/scriptlet.nl?script=168&deploy=1&compid=3743011">Place an Order</a>
		</li>
		<?php
		
		//echo 'pageName'.$pageName.'<br>';
		
		if(isset($pageName)) {
			if ($pageName == "askCEO"){
				echo '
				<li class="link-list-on"><strong>Ask the CEO</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'dealer-admin/ask-the-ceo.php?distributor=true">Ask the CEO</a></li>';
			}
		}
		
		if(isset($pageName)) {
			if ($pageName == "distContact"){
				echo '
				<li class="link-list-on"><strong>Contacts</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'distributor-portal/dist-contacts.php?distributor=true">Contacts</a></li>';
			}
		}
		
		
		


		 if(isset($pageName)) {
			if ($pageName == "FGoods"){
				echo '
				<li class="link-list-on"><strong>Faulty Goods Claim</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'dealer-admin/onlineWarranty.php?distributor=true">Faulty Goods Claim</a></li>';
			}
		}
		
			
		echo '<li><a class="list-link-deets" href="https://itunes.apple.com/au/app/global-surf-industries-catalogue/id503697347?mt=8&ls=1\">GSI iPad/iPhone App</a></li>';
		
		
		if(isset($pageName)) {
			if ($pageName == "mediaDownloads"){
				echo '
				<li class="link-list-on"><strong>Media Downloads</strong></li>
				';
			}
			else {
			echo ' <li><a class="list-link-deets" href="'.HOME.'media/media.php?distributor=true">Media Downloads</a></li>';
			}
		}
		
		
		//if(isset($pageName)) {
			//if ($pageName == "trainingVideos"){
			//	echo '
			//	<li class="link-list-on"><strong>Training Videos</strong></li>
			//	';
			//}
		//	else {
		//	echo ' <li><a class="list-link-deets" href="'.HOME.'dealer-admin/dealer-training-videos.php?distributor=true">Training Videos</a></li>';
		//	}
		//}
		
		
		
		
	   ?>


	</ul>
</div>
<!-- end widget -->