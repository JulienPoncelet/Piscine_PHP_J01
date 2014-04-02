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
	$i = 1;
	$k = 0;
	while ($i < $argc)
	{
		$tmp = ft_split($argv[$i]);
		$len_tmp = count($tmp);
		$j = 0;
		while ($j < $len_tmp)
		{
			$split[$k] = $tmp[$j];
			$j++;
			$k++;
		}
		$i++;
	}
	sort($split);
	foreach($split as $value)
		print($value."\n");
}
?>
