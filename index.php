<?php
	header("Expires: Tue, 01 Jan 2000 00:00:00 GMT");
	header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");

	include('head.php');
	include('navbar.php');

	if ($_GET['id'] == 'subject'){
		include('page-subject.php');
	}


	if ($_GET['id'] == 'topic'){
		include('topic.php');
	}
	if ($_GET['id'] == 'subject1'){
		include('page-subject-one.php');
	}


	if ($_GET['id'] == 'home'){
		include('content.php');
	}

	include('footer.php');
	include('end.php');
	
?>
