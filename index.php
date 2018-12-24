<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>第三方登陆之QQ登陆简单demo</title>
</head>
<body>
	<?php
    require_once('./QQ_Connect2.1/qqConnectAPI.php');
    $qc = new QC();
    $qc->qq_login();
    ?>
</body>
</html>