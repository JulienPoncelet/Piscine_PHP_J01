#!/usr/bin/php
<?PHP

$stdin = fopen("php://stdin", "r");
while ($stdin && !feof($stdin))
{
	echo "Entrez un nombre: ";
	$line = fgets($stdin);
	if ($line)
	{
		$line = str_replace("\n", "", "$line");
		if (!is_numeric($line))
			echo "'".$line."' n'est pas un chiffre";
		else
		{
			echo "Le chiffre ".$line." est ";
			if ($line % 2 == 0)
				echo "Pair";
			else
				echo "Impair";
		}
		echo "\n";
	}
}
fclose($stdin);

?>
