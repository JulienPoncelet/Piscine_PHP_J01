<?PHP

function ft_split($str)
{
	$split = explode(" ", $str);
	$len = count($split);
	$i = 0;
	while ($i < $len)
	{
		if (!$split[$i])
		{
			array_splice($split, $i, 1);
			$len--;
		}
		else
			$i++;
	}
	sort($split);
	return $split;
}

?>
