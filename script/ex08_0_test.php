#!/usr/bin/php
<?PHP

include("../ex08/ft_is_sort.php");

$tab1 = array("1", "3", "2");
$tab2 = array("a", "b", "c");
$tab3 = array();

if (ft_is_sort($tab1))
	echo "Le tableau est trie\n";
else
	echo "Le tableau n’est pas trie\n";

if (ft_is_sort($tab2))
	echo "Le tableau est trie\n";
else
	echo "Le tableau n’est pas trie\n";

if (ft_is_sort($tab3))
	echo "Le tableau est trie\n";
else
	echo "Le tableau n’est pas trie\n";

?>
