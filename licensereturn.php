<html>
  <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
</head>
<body>
<?php
$license = array(
	'url' => $_GET["url"],
	'name' => $_GET["name"],
	'button' => $_GET["button"],
	'deed' => $_GET["deed"]
);
?>
<script>
jQuery(function($) {
	parent.setLicense($.parseJSON('<?php echo json_encode($license); ?>'));
parent.tb_remove();
document.write(json_encode($license));
});
</script>

</body>
</html>
