<?php 

	$getUrl = strip_tags(trim(filter_input(INPUT_GET, 'url', FILTER_DEFAULT)));
	$setUtrl = (empty($getUrl) ? 'index' : $getUrl);
	$Url = explode('/', $setUtrl);

 ?>