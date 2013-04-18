<?php
include("conexion.php");
echo "<table>
<tr>
<td>Número de sobre</td>
<td>Cliente</td>
<td>Entrada</td>
<td>Salida</td>
</tr>";
$result=mysql_query("SELECT * FROM listado");
while($row = mysql_fetch_array($result))
  {
  echo "<tr>";
  echo "<td>" . $row['codigo'] . "</td>";
  echo "<td>" . $row['cliente'] . "</td>";
  echo "<td>" . $row['entrada'] . "</td>";
  echo "<td>" . $row['salida'] . "</td>";
  echo "</tr>";
  }
echo "</table>";

mysql_close($con);

?>
