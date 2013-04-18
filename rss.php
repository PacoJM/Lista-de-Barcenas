<?php
include ("conexion.php");
$result=mysql_query("SELECT * FROM listado");
$buffer='<?xml version="1.0" encoding="iso-8859-1"?>
    <rss version="2.0">
<channel>
  <title>La lista de Bárcenas</title>
  <link>http://lalistadebarcenas.tk</link>
  <description>Anota tus sobres en negro al estilo Bárcenas</description>    
';
while($row = mysql_fetch_array($result)): 
$buffer.= "<item>
    <title>Código: " .$row['codigo']. " Titular: " . $row['cliente'] . "</title>
        <link>http://lalistadebarcenas.tk</link>
<description>Entrada: " . $row['entrada'] . ", Salida: " . $row['salida'] ."</description>
</item>";
    

endwhile;
$buffer.="</channel></rss>";
  $file=fopen("rss.xml","w+");
  fwrite ($file,$buffer);
  fclose($file);
  
  header('Location: rss.xml'); 
?>
