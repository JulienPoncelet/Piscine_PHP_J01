#!/usr/bin/php
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
	return $split;
}

if ($argc > 1)
{
	$tmp = ft_split($argv[1]);
	$tmp[count($tmp)] = $tmp[0];
	array_shift($tmp);
	foreach ($tmp as $value)
		print($value." ");
	print("\n");
}

?>
