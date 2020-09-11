<?php
	$url = "https://epayments.tupago.net.co/checkout/" . base64_encode($_SERVER["QUERY_STRING"]);
	die("<script>document.location.href='$url';</script>");
?>
