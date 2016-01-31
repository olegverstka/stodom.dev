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
				<?$APPLICATION->IncludeComponent(
					"bitrix:news", 
					"slider", 
					Array(
						"ADD_ELEMENT_CHAIN" => "N",	// Включать название элемента в цепочку навигации
						"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
						"AJAX_MODE" => "N",	// Включить режим AJAX
						"AJAX_OPTION_ADDITIONAL" => "",	// Дополнительный идентификатор
						"AJAX_OPTION_HISTORY" => "N",	// Включить эмуляцию навигации браузера
						"AJAX_OPTION_JUMP" => "N",	// Включить прокрутку к началу компонента
						"AJAX_OPTION_STYLE" => "Y",	// Включить подгрузку стилей
						"BROWSER_TITLE" => "-",	// Установить заголовок окна браузера из свойства
						"CACHE_FILTER" => "N",	// Кешировать при установленном фильтре
						"CACHE_GROUPS" => "Y",	// Учитывать права доступа
						"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
						"CACHE_TYPE" => "A",	// Тип кеширования
						"CHECK_DATES" => "Y",	// Показывать только активные на данный момент элементы
						"COMPONENT_TEMPLATE" => ".default",
						"DETAIL_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
						"DETAIL_DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
						"DETAIL_DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
						"DETAIL_FIELD_CODE" => "",	// Поля
						"DETAIL_PAGER_SHOW_ALL" => "Y",	// Показывать ссылку "Все"
						"DETAIL_PAGER_TEMPLATE" => "",	// Название шаблона
						"DETAIL_PAGER_TITLE" => "Страница",	// Название категорий
						"DETAIL_PROPERTY_CODE" => "",	// Свойства
						"DETAIL_SET_CANONICAL_URL" => "N",	// Устанавливать канонический URL
						"DISPLAY_BOTTOM_PAGER" => "Y",	// Выводить под списком
						"DISPLAY_DATE" => "Y",	// Выводить дату элемента
						"DISPLAY_NAME" => "Y",	// Выводить название элемента
						"DISPLAY_PICTURE" => "Y",	// Выводить изображение для анонса
						"DISPLAY_PREVIEW_TEXT" => "Y",	// Выводить текст анонса
						"DISPLAY_TOP_PAGER" => "N",	// Выводить над списком
						"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// Скрывать ссылку, если нет детального описания
						"IBLOCK_ID" => "1",	// Инфоблок
						"IBLOCK_TYPE" => "slider",	// Тип инфоблока
						"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// Включать инфоблок в цепочку навигации
						"LIST_ACTIVE_DATE_FORMAT" => "d.m.Y",	// Формат показа даты
						"LIST_FIELD_CODE" => "",	// Поля
						"LIST_PROPERTY_CODE" => "",	// Свойства
						"MESSAGE_404" => "",	// Сообщение для показа (по умолчанию из компонента)
						"META_DESCRIPTION" => "-",	// Установить описание страницы из свойства
						"META_KEYWORDS" => "-",	// Установить ключевые слова страницы из свойства
						"NEWS_COUNT" => "20",	// Количество новостей на странице
						"PAGER_BASE_LINK_ENABLE" => "N",	// Включить обработку ссылок
						"PAGER_DESC_NUMBERING" => "N",	// Использовать обратную навигацию
						"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// Время кеширования страниц для обратной навигации
						"PAGER_SHOW_ALL" => "N",	// Показывать ссылку "Все"
						"PAGER_SHOW_ALWAYS" => "N",	// Выводить всегда
						"PAGER_TEMPLATE" => ".default",	// Шаблон постраничной навигации
						"PAGER_TITLE" => "Новости",	// Название категорий
						"PREVIEW_TRUNCATE_LEN" => "",	// Максимальная длина анонса для вывода (только для типа текст)
						"SEF_MODE" => "N",	// Включить поддержку ЧПУ
						"SET_LAST_MODIFIED" => "N",	// Устанавливать в заголовках ответа время модификации страницы
						"SET_STATUS_404" => "N",	// Устанавливать статус 404
						"SET_TITLE" => "Y",	// Устанавливать заголовок страницы
						"SHOW_404" => "N",	// Показ специальной страницы
						"SORT_BY1" => "ACTIVE_FROM",	// Поле для первой сортировки новостей
						"SORT_BY2" => "SORT",	// Поле для второй сортировки новостей
						"SORT_ORDER1" => "DESC",	// Направление для первой сортировки новостей
						"SORT_ORDER2" => "ASC",	// Направление для второй сортировки новостей
						"USE_CATEGORIES" => "N",	// Выводить материалы по теме
						"USE_FILTER" => "N",	// Показывать фильтр
						"USE_PERMISSIONS" => "N",	// Использовать дополнительное ограничение доступа
						"USE_RATING" => "N",	// Разрешить голосование
						"USE_RSS" => "N",	// Разрешить RSS
						"USE_SEARCH" => "N",	// Разрешить поиск
						"USE_SHARE" => "N",	// Отображать панель соц. закладок
						"VARIABLE_ALIASES" => array(
							"ELEMENT_ID" => "ELEMENT_ID",
							"SECTION_ID" => "SECTION_ID",
						)
					),
				false
				);?>
			<?php endif; ?>
		</header><!-- .header -->