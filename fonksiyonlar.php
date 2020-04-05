<?php 

function cikis()
{ 
	unset($_SESSION['adSoy']);
	unset($_SESSION['id']);       
}

function ara($bas, $son, $yazi)
{
	@preg_match_all('/' . preg_quote($bas, '/') .
		'(.*?)'. preg_quote($son, '/').'/i', $yazi, $m);
	return @$m[1];
}