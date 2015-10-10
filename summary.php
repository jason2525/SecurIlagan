<form action=summary1.php method=get>
<body background=bg2.jpg>
<br>
<table border=2 align=center bgcolor=black >
<tr><td><font face = 'veranda' size = 4><font color=white>NAME CODE:  <input name=item value="<?php print $_GET['item'];?>">
<tr><td><font face = 'veranda' size = 4><font color=white>UNIT COST:  <input name=ucost value="<?php print $_GET['ucost'];?>">
<tr><td><font face = 'veranda' size = 4><font color=white>QUANTITY :  	<input name=qty required>
<tr><td colspan = 2><center><input type=submit value='Order Now!' name=order>
<td colspan = 4 bgcolor=black><center><font color=white style=veranda>Copyright &copy; Jason Ilagan
</table>
