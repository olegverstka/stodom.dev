<?
if(!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
	die();
	//конструкция, которая получает текущий uri и заносит в массив названия разделов
	global $APPLICATION;
	$dir = $APPLICATION->GetCurDir(); 
	$array_dir = explode( '/', $dir );
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<?$APPLICATION->ShowHead();?>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<title><?$APPLICATION->ShowTitle();?></title>
		
		<link rel="stylesheet" href="<?=SITE_TEMPLATE_PATH?>/css/vendor.css">

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>

		<div id="panel">
			<?$APPLICATION->ShowPanel();?>
		</div>

		<header class="header">
			<div class="head_top">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<a class="viewed" href="#"><i></i>Просмотренные</a>
							<a class="comparison" href="#"><i></i>Список сравнения</a>
							<a class="liked" href="#"><i></i>Понравились</a>
						</div>
						<div class="col-md-6">
							<div class="login">
								<?php global $USER;
								if ($USER->IsAuthorized()){ ?>
									<a class="auth_login" href="/cabinet/"><i></i><?php echo $USER->GetFullName();?></a>
									<a class="logout" href="#"><i></i>Выйти</a>
								<?php }else{ ?>
									<a class="reg" href="/auth/registration.php"><i></i>Регистрация</a>
									<a class="auth" href="/auth/"><i></i>Войти</a>
								<?php } ?>
							</div>
						</div>
					</div>
				</div>
			</div><!-- .head_top -->
			<div class="head_center">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="logo">
								<a href="/">
									<img src="<?=SITE_TEMPLATE_PATH?>/img/logo.png" alt="Логотип сайта">
								</a>
							</div>
							<a class="btn rent" href="#">Сдать жилье</a>
						</div>
					</div>
				</div>
			</div><!-- .head_center -->
			<?php if( $array_dir[1]=='' &&  $array_dir[2]=='' ) : ?>
				<div class="head-slider">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="wrap-slider">
									<ul class="bxslider">
										<li>
											<p>
												<span>Добро пожаловать на сайт по аренде квартир.</span>
												Аренда квартир - отличная альтернатива гостиницам. Недорого снимайте и выгодно сдавайте жилье без посредников на stodom.com!
											</p>
										</li>
										<li>
											<p>
												<span>Добро пожаловать на сайт по аренде квартир.</span>
												Аренда квартир - отличная альтернатива гостиницам. Недорого снимайте и выгодно сдавайте жилье без посредников на stodom.com!
											</p>
										</li>
										<li>
											<p>
												<span>Добро пожаловать на сайт по аренде квартир.</span>
												Аренда квартир - отличная альтернатива гостиницам. Недорого снимайте и выгодно сдавайте жилье без посредников на stodom.com!
											</p>
										</li>
									</ul>
								</div><!-- .wrap-slider -->
							</div>
						</div>
					</div>
				</div><!-- .head-slider -->
			<?php endif; ?>
		</header><!-- .header -->