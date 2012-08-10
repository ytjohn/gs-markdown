<?php
$thisfile = basename(__FILE__, ".php");
register_plugin(
	$thisfile,
	'Markdown for GS',
	'&infin;',
	'Martijn',
	'http://zegnat.net/',
	'Write your pages using <a href="http://daringfireball.net/projects/markdown/syntax">the Markdown syntax</a>.'
);
require_once 'gs-markdown/markdown.php';
add_filter('content','Markdown');
?>
