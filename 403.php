<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"><head>
<title>Error 403 - Forbidden Access</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
<meta name="description" content="403 - Forbidden"/>
<link href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
<style type="text/css">
  html,
  body {
  	font-family: 'Montserrat', sans-serif;
  	font-size: 14px;
  	color: #2d2d2d;
  	margin: 0;
  	padding: 0;
  	width: 100%;
  	height: 100%;
  }
  .error-block {
    position: absolute;
    transform: translate(-50%, -50%);
    top: 50%;
    left: 50%;
  	width: 100%;
  	max-width: 400px; 
  	margin-left: auto !important;
  	margin-right: auto !important;
  }
  .error-block > .error-code {
    font-size: 140px;
    line-height: 140px;
    color: #333;
    font-weight: 600;
    text-align: center;
  }
  .error-block > .error-msg {
  	font-size: 26px;
  	color: #3e3e3e;
  	font-weight: 400;
  	text-transform: uppercase;
  	text-align: center;
  }
  .error-block > .error-detail { font-size: 14px; text-align: center; color: #d9534f;}
  .error-block > .error-return { text-align: center; margin-top: 10px;}
  .error-block > .error-return a { font-size: 14px;}
</style>
</head>
<body>
  <div class="wrap">
  	<div class="container">
  	  <div class="error-block">
		<div class="error-code">403</div>
		<div class="error-msg">Forbidden Access.</div>
		<div class="error-detail">Permission denied to view this.</div>
		<div class="error-return">
		  <a href="https://<?php echo $_SERVER['HTTP_HOST'] ?>" class="btn btn-primary">Go Home</a>
		</div>
	  </div>
	</div>
  </div>
</body>
</html>
