<!-- braind ad include -->
<?php
if ($url_frag == 'https://shop.surfindustries.com/au')
	{
		$country = 'au';
	}
	elseif ($url_frag == 'https://shop.surfindustries.com/nz')
	{
		$country = 'nz';
	}
	else
	{
		$country = 'us';
	}
if ($country == 'au'){
	echo '<img src="../images/brian-ad-salt-gypsy-2.png" width="200" height="600" alt=""/>';
}
elseif ($country == 'nz'){
	echo '<img src="../images/brian-ad-salt-gypsy-2.png" width="200" height="600" alt=""/>';
	}
else
	{
	echo  '<img src="../images/brian-ad-salt-gypsy-2.png" width="200" height="600" alt=""/>';
	}
?>
<!-- end brain ad includes -->