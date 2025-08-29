<?
$id=$_REQUEST['id'];

$field = @file_get_contents("http://190.98.219.232/~interac/memoriales/?p=".$id);

echo $field;
?>