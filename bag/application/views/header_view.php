<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<title>Insert title here</title>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="<?= base_url() ?>bootstrap-3.3.1-dist/dist/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="<?= base_url() ?>bootstrap-3.3.1-dist/dist/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="<?= base_url() ?>bootstrap-3.3.1-dist/dist/js/bootstrap.min.js"></script>
<script src="<?= base_url() ?>js/jquery-1.11.1.js"></script>

</head>
<body>
	<nav class="navbar navbar-inverse">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="#">WebSiteName</a>
        </div>
        <div>
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?= base_url().index_page() ?>">Home</a></li>
            <li><a href="<?= base_url().index_page() ?>/main/">Products</a></li>
            <li><a href="<?= base_url().index_page() ?>/main/">Customise</a></li>
            <li><a href="<?= base_url().index_page() ?>/main/"></a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
          	<li><a href="<?= base_url().index_page() ?>/main/"><span class="glyphicon glyphicon-user"></span>Login</a></li>
          </ul>
        </div>
        
      </div>
      
    </nav>

	<div class="container">
		