<!DOCTYPE html>
<html>
<body>
    <form method="POST" action="ajax.php">
<div id="demo"><h2>Let AJAX change this text</h2></div>

<button type="button" onclick="loadDoc()">Change Content</button>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (xhttp.readyState == 4 && xhttp.status == 200) {
      document.getElementById("demo").innerHTML = xhttp.responseText;
    }
  }
  xhttp.open("GET", "index.php", true);
  xhttp.send();
}
</script>

</body>
</form>
</html>



<?php
?>