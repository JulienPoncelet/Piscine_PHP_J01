<?PHP

function ft_is_sort($tab)
{
	$tmp = $tab;
	sort($tmp);
	foreach($tab as $key => $value)
		if ($tab[$key] != $tmp[$key])
			return (false);
	return (true);
}

?>
