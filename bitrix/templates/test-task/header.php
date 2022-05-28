<?php
if (!defined ('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true)
{
	die();
}

if (!\Bitrix\Main\Loader::includeModule('landing'))
{
	return;
}

\Bitrix\Landing\Connector\Mobile::prologMobileHit();
?><!DOCTYPE html>
<html xml:lang="<?= LANGUAGE_ID;?>" lang="<?= LANGUAGE_ID;?>" class="<?$APPLICATION->ShowProperty('HtmlClass');?>">
<head>
	<?$APPLICATION->ShowProperty('AfterHeadOpen');?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0, width=device-width">
	<meta name="HandheldFriendly" content="true" >
	<meta name="MobileOptimized" content="width">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<title><?$APPLICATION->ShowTitle();?></title>
	<?
	$APPLICATION->ShowHead();
	$APPLICATION->ShowProperty('MetaOG');
	$APPLICATION->ShowProperty('BeforeHeadClose');

    \Bitrix\Main\UI\Extension::load("ui.forms");
    \Bitrix\Main\UI\Extension::load("ui.buttons");
    ?>

    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/css/reset.css" />

    <link rel="stylesheet" type="text/css" href="<?=SITE_TEMPLATE_PATH?>/assets/css/style.css" />

</head>
<body class="<?$APPLICATION->ShowProperty('BodyClass');?>" <?$APPLICATION->ShowProperty('BodyTag');?>>




<?
/*
This is commented to avoid Project Quality Control warning
$APPLICATION->ShowPanel();
*/
?>
<?$APPLICATION->ShowProperty('Noscript');?>
<?$APPLICATION->ShowProperty('AfterBodyOpen');?>
<main class="main <?$APPLICATION->ShowProperty('MainClass');?>" <?$APPLICATION->ShowProperty('MainTag');?>>