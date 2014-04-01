#!/usr/bin/php
<?PHP

if ($argc > 2)
{
	$search = $argv[1];
	$to_print = false;
	$i = 2;
	while ($i < $argc)
	{
		$tmp = explode(":", $argv[$i]);
		if (!strcmp($search, $tmp[0]))
			$to_print = $tmp[1];
		$i++;
	}
	if ($to_print)
		print($to_print."\n");
}

?>
