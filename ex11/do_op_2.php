#!/usr/bin/php
<?PHP

function			ft_add($a, $b)
{
	return ($a + $b);
}

function			ft_minus($a, $b)
{
	return ($a - $b);
}

function			ft_mult($a, $b)
{
	return ($a * $b);
}

function			ft_div($a, $b)
{
	return ($a / $b);
}

function			ft_modulo($a, $b)
{
	return ($a % $b);
}

if ($argc == 2)
{
	$ope = explode(";", "+;-;*;/;%");

	foreach ($ope as $value)
	{
		$tmp = explode($value, $argv[1]);
		if (count($tmp) == 2)
		{
			$tmp[0] = trim($tmp[0]);
			$tmp[1] = trim($tmp[1]);
			if (is_numeric($tmp[0]) && is_numeric($tmp[1]))
			{
				if (!strcmp("+", $value))
					print(ft_add($tmp[0], $tmp[1]));
				if (!strcmp("-", $value))
					print(ft_minus($tmp[0], $tmp[1]));
				if (!strcmp("*", $value))
					print(ft_mult($tmp[0], $tmp[1]));
				if (!strcmp("/", $value))
					print(ft_div($tmp[0], $tmp[1]));
				if (!strcmp("%", $value))
					print(ft_modulo($tmp[0], $tmp[1]));
			}
			else
			{
				print("Syntax Error");
				break ;
			}
		}
	}

}
else
	print("Incorrect Parameters");
print("\n");

?>
