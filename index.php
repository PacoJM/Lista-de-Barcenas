<?
//Connection
php
include ("conexion.php");
    function Security($_Cadena) {  
    $_Cadena = htmlspecialchars(trim(addslashes(stripslashes(strip_tags($_Cadena)))));  
    $_Cadena = str_replace(chr(160),'',$_Cadena);  
    return mysql_real_escape_string($_Cadena);  
    }  

global $num;
global $cliente;
if(isset($_REQUEST["cliente"])){
    $cliente=trim(Security($_POST["cliente"]));
    if(isset($_REQUEST["dinero"])){
       $num=(float)trim(Security($_POST["dinero"]));
       if($_REQUEST["tipo"]=="en"){
           mysql_query("INSERT INTO listado (cliente, entrada) VALUES ('$cliente', $num)");
       }
       if($_REQUEST["tipo"]=="sa"){
           mysql_query("INSERT INTO listado (cliente, salida) VALUES ('$cliente', $num)");
       }
    }
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>La lista de Bárcenas</title>
        <script src="jquery-1.9.0.min.js"></script>
        <script src="main.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <article>
            Añade tu sobre (click aquí)
        </article>
        <aside><a href="rss.php">RSS</a></aside>
        <section>
            <form action="index.php" method="post">
                <label>Cliente del sobre:</label> <input type="text" name="cliente" required><br>
                <label>Cantidad en €:</label> <input type="text" name="dinero" required><br>
                <label>Entrada:</label> <input type="radio" name="tipo" value="en" checked> Salida: <input type="radio" name="tipo" value="sa">
                <br>
                <input type="submit" id="submit" value="Enviar sobre">
            </form>
        </section>
        <div class="CSSTableGenerator">
	<table id="tabla">
		<tr> 
			<td>
				Número de sobre
			</td>
			<td >
				Cliente
			</td>
			<td>
				Entrada
			</td>
                        <td>
				Salida
			</td>
		</tr>
        <?php
        $result=mysql_query("SELECT * FROM listado");
while($row = mysql_fetch_array($result)){   
echo "<tr>";
echo "<td>";
echo $row["codigo"];
echo "</td>";
echo "<td>";
echo $row["cliente"];
echo "</td>";
echo "<td>";
echo $row["entrada"];
echo "</td>";
echo "<td>";
echo $row["salida"];
echo "</td>";
echo "</tr>";								
}
  
 mysql_close($con); 
        ?>
        </table>
        </div>
        <br><br>
        <script>
  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-38334940-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
    </body>
</html>
