$(document).ready(function(){
setInterval(function(){actualizarTabla()},1000);
function actualizarTabla()
{

if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
  xmlhttp=new XMLHttpRequest();
  }
else
  {// code for IE6, IE5
  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
xmlhttp.onreadystatechange=function()
  {
  if (xmlhttp.readyState===4 && xmlhttp.status===200)
    {
    document.getElementById("tabla").innerHTML=xmlhttp.responseText;
    }
  };
xmlhttp.open("GET","tabla.php",true);
xmlhttp.send();
}
    
  $("article").click(function(){
    $("section").slideDown();
  });
});
