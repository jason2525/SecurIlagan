<body background=bg3.jpg>
<br><br><br><center><table border=5>
<tr><td><font face = 'veranda' size = 4>ITEM CODE:<td><?php print $_GET['item'];?>
<tr><td><font face = 'veranda' size = 4>UNIT COST:<td><?php print $_GET['ucost'];?>
<tr><td><font face = 'veranda' size = 4>QUANTITY:<td><?php print $_GET['qty'];?>
<tr><td><font face = 'veranda' size = 4>AMOUNT:<td><?php print $_GET['ucost']*$_GET['qty'];?>
<tr><td colspan=2><center><p>Thank you for ordering! Come back again.</p></table><br><a href='login.php'>Logout</a>
<br><br><td colspan = 4 bgcolor=grey><center>Copyright &copy; Jason Ilagan

