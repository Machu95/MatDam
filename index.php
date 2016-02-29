<?
require(config.php)



$result = mysql_query('select * from tab1');
while ($row = mysql_fetch_object($result)) {
    echo $row->id;
    echo $row->nazwa;
	echo "<br/>";
}
mysql_free_result($result);

?>