#!/usr/bin/php
<?PHP

if ($argc == 2)
{
	$str = $argv[1];
	$len = mb_strlen($str);
	$i = 0;
	$new = "o";
	$j = 0;
	while ($i < $len - 1)
	{
		if ($str[$i] == " ")
		{
			if ($str[$i + 1] != " ")
			{
				$new[$j] = $str[$i];
				$j++;
			}
		}
		else
		{
			$new[$j] = $str[$i];
			$j++;
		}
		$i++;
	}
	$new[$j] = $str[$i];
	$new = trim($new);
	echo $new."\n";
}

?>
