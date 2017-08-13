<?php
include("koneksi.php");

function parseToXML($htmlStr) 
{ 
$xmlStr=str_replace('<','&lt;',$htmlStr); 
$xmlStr=str_replace('>','&gt;',$xmlStr); 
$xmlStr=str_replace('"','&quot;',$xmlStr); 
$xmlStr=str_replace("'",'&#39;',$xmlStr); 
$xmlStr=str_replace("&",'&amp;',$xmlStr); 
return $xmlStr; 
} 

// Opens a connection to a MySQL server
$connection=mysql_connect ($server, $username, $password);
if (!$connection) {
  die('Not connected : ' . mysql_error());
}
// Set the active MySQL database
$db_selected = mysql_select_db($database, $connection);
if (!$db_selected) {
  die ('Can\'t use db : ' . mysql_error());
}
// Select all the rows in the markers table
$query = "SELECT * FROM pohon WHERE 1";
$result = mysql_query($query);
if (!$result) {
  die('Invalid query: ' . mysql_error());
}
header("Content-type: text/xml");
// Start XML file, echo parent node
echo '<pohon>';
// Iterate through the rows, printing XML nodes for each
while ($row = @mysql_fetch_assoc($result)){
  // ADD TO XML DOCUMENT NODE
  echo '<pohon ';
  echo 'nmpohonum="' . parseToXML($row['nmpohonum']) . '" ';
  echo 'nmpohonil="' . parseToXML($row['nmpohonum']) . '" ';
  echo 'nmpohonlok="' . parseToXML($row['nmpohonum']) . '" ';
  echo 'foto="' . parseToXML($row['foto']) . '" ';
  echo 'tinggi="' . parseToXML($row['tinggi']) . '" ';
  echo 'diameter="' . parseToXML($row['diameter']) . '" ';
  echo 'longitude="' . parseToXML($row['longitude']) . '" ';
  echo 'lattitude="' . parseToXML($row['lattitude']) . '" ';
  echo 'wilayah="' . parseToXML($row['wilayah']) . '" ';
  echo 'kelangkaan="' . parseToXML($row['kelangkaan']) . '" ';
  echo 'genus="' . parseToXML($row['genus']) . '" ';
  echo '/>';
}
// End XML file
echo '</pohon>';
?>