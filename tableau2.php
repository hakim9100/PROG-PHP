<!DOCTYPE HTML>
<HTML>
<HEAD>
      <TITLE>Utilisation des tableaux-1</TITLE>
</HEAD>
 <BODY>
 	<UL>
          <?php
          	$liens=file("tableau-06.txt");

          	for ($i=0;$i<count($liens);$i++) {
            	echo "<LI><A HREF=\"".$liens[$i]."\">".$liens[$i]."</A>\n";
          	}
          ?>
    </UL>
</BODY>
</HTML>