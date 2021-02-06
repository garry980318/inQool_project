<?php

function trim_blanks($array)
{
	$ret = array();
	foreach ($array as $value) {
		$trimmed = trim($value);
		if (isset($trimmed) && $trimmed !== '') {
			array_push($ret, $trimmed);
		}
	}
	return $ret;
}
