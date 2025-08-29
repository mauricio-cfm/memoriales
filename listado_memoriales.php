<?
$cat=$_REQUEST['cat'];
$cnn=mysql_connect("localhost","interac_hector","matucana501");
mysql_select_db("interac_memoriales",$cnn);

$sql = "SELECT p.ID, p.post_title
	FROM wp_posts p
	LEFT OUTER JOIN wp_term_relationships r ON r.object_id = p.ID
	LEFT OUTER JOIN wp_terms t ON t.term_id = r.term_taxonomy_id
	WHERE t.slug =  '$cat'";

//echo $sql;

$field = "";

$Q = mysql_query($sql, $cnn);

while($R=mysql_fetch_object($Q))
{
	$field .= "<ul class='memorial'><a href='javascript:VerMemorial($R->ID)'><li>".UTF8_encode($R->post_title)."</li></a></ul>";	
}

	if($field == "") $field = "<img class='imgNo' src='http://interactivos.museodelamemoria.cl/memoriales/img/alertNos.png'>";

echo $field;
?>

