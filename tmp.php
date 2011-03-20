<?php

$id = $_POST["id"];

function random_float ($min,$max) {
   return ($min+lcg_value()*(abs($max-$min)));
}


switch($_POST["function"]){

	case "fillMarkers":
		include "dbconf.php";
		//echo "['".$db_host."','".$db_user."','".$db_passwd."','".$db_name."']";
	
		$db = @ mysql_connect ( $db_host, $db_user, $db_passwd )
		   or die ( 'Konnte keine Verbindung zur Datenbank herstellen' );
		
		$db_check = @ mysql_select_db ( $db_name );
		
		/*
		if ( $db )
		{
		  echo 'Verbindung zur Datenbank wurde hergestellt';
		}
		*/
		$lat = 52.5056;
		$lng = 13.3896;
		
		for($i = 0; $i < 1200; $i++){
				$sql = "INSERT INTO `berlinminsk`.`orte` (`id` ,`lat` ,`lng`) VALUES ( NULL , '".random_float (52,53)."', '".random_float (13,14)."' )";
				$result = mysql_query ( $sql );
		}
	break;

	case "markers":
	
		include "dbconf.php";
		//echo "['".$db_host."','".$db_user."','".$db_passwd."','".$db_name."']";
	
		$db = @ mysql_connect ( $db_host, $db_user, $db_passwd )
		   or die ( 'Konnte keine Verbindung zur Datenbank herstellen' );
		
		$db_check = @ mysql_select_db ( $db_name );
		
		/*
		if ( $db )
		{
		  echo 'Verbindung zur Datenbank wurde hergestellt';
		}
		*/
		
		$sql = "SELECT * FROM `orte` ORDER BY `id` ASC";
		
		$result = mysql_query ( $sql );
		if (!$result) {
			die('Ungültige Abfrage: ' . mysql_error());
		}
		
		$return = "['setMarkers','";

		while ( $result && $row = mysql_fetch_row ( $result ) ) 
		{
			$return .= $row[0]."-".$row[1]."-".$row[2].",";
		}
		$return .= "']";
		echo $return;
	break;
	
	case "markersClustered":
		
				include "dbconf.php";
		//echo "['".$db_host."','".$db_user."','".$db_passwd."','".$db_name."']";
	
		$db = @ mysql_connect ( $db_host, $db_user, $db_passwd )
		   or die ( 'Konnte keine Verbindung zur Datenbank herstellen' );
		
		$db_check = @ mysql_select_db ( $db_name );
		
		/*
		if ( $db )
		{
		  echo 'Verbindung zur Datenbank wurde hergestellt';
		}
		*/
		
		$sql = "SELECT * FROM `orte` ORDER BY `id` ASC";
		
		$result = mysql_query ( $sql );
		if (!$result) {
			die('Ungültige Abfrage: ' . mysql_error());
		}
		
		$return = "['setMarkersClustered','";

		while ( $result && $row = mysql_fetch_row ( $result ) ) 
		{
			$return .= $row[0]."-".$row[1]."-".$row[2].",";
		}
		$return .= "']";
		echo $return;
		
	break;
	
	case "testing":
		if( $id == "123"){

			$return = "['showBiographsInfo',";
			$return .= "'3000, 3000, 1000, 2000, 1000, 2000, 4000, 4000'";
			$return .= ",";

			//feld 1 leftTop
			$return .= "'~";

			//feld 2 leftBottom
			$return .= "<p style=\"margin: 40px 5px 5px 35px;\"><img src=\"images/123_NafSol_2.png\" alt=\"Bild\"></p>~";

			//feld 3 centerLeftTop
			$return .= "<p style=\"font-size:12px;margin-left:10px;\">Prenzlauer Str. 17, Berlin Mitte<br>(heute: Karl-Liebknecht-Straße)</p><h1 style=\"color:green;margin-left:10px;\">Naftalie<br>Solländer</h1>" .
					"<p style=\"font-size:14px;margin-left:10px;\">geb. am<br>06. September 1903<br>in Tarnów/Tarnau,<br>Polen</p>~";


					
			//feld 4 centerLeftBottom
			$return .= "<p style=\"margin:5px;\"><strong style=\"color:green;\"><u>Naftalie Solländer</u></strong> wurde am 06. September 1903 als Sohn von <b>Toni, geb. Bromberger</b> (*14. Oktober 1878 in Kattowice/ Kattowitz, Polen) " .
					"und <b>Hirsch Solländer</b> geboren. Er hatte vier <b>Geschwister: Jakob, Rachela, Siegmund</b> und <b>Gisela Gettel</b>. Alle Kinder kamen in der Geburtsstadt ihres Vaters Tarnów/Tarnau, Polen zur Welt. " .
					"Zum Zeitpunkt ihrer Geburt lag die Stadt in Österreich-Ungarn. Bis zur Einbürgerung durch das Deutsche Reich, waren Naftalies Eltern polnische Staatsbürger.</p>~"; 
					
			//feld 5 centerRightTop
			$return .= "<p style=\"margin:5px;\">Die Familie Solländer lebte vermutlich seit dem Jahr 1911 in <b>Berlin</b>. Hirsch Solländer betrieb eine <b>Fischgroßhandlung</b> in der <b>Zentral-Markthalle</b>, " .
					"die im Februar 1917 beim Amtsgericht Mitte ins Handelsregister eingetragen wurde. Nach seinem Tod am 8. September 1934 beantragte seine Frau Toni die Umschreibung der Firma auf ihren Namen. " .
					"Das Geschäft wurde im Februar 1938, nach der von ihr beantragten Namensänderung, unter <strong style=\"color:green;\"><u>Tina Solländer</u></strong> ins Handelsregister eingetragen.</p>~";

			//feld 6 centerRightBottom
			$return .= "~";

			//feld 7 rightTop
			$return .= "<p style=\"margin: 20px 5px 5px 30px;\"><img src=\"images/123_NafSol.png\" alt=\"Bild\"></p>~";

			// feld 8 rightBottom
			$return .= "<p style=\"margin:5px;\">Tina Solländer lebte mit ihren Kindern Jakob, Rachela und Siegmund in der <b>Kaiser-Wilhelm-Str. 25</b>. Ihre Tochter Gisela Gettel wanderte 1935 nach Haifa, Israel aus. ".
					"Im Zuge der Umgestaltung des Ost-Berliner Zentrums in den 1970er Jahren wurden die beiden Zentral-Markthallen abgerissen, sowie Straßenverläufe verändert und umbenannt. Heute sind die Kaiser-Wilhelm-Straße " .
					"und die Prenzlauer Straße, in der Naftalie mit seiner Familie lebte, ein Teil der <b>Karl-Liebknecht-Straße</b>.</p>" .
					"<button id=\"nextPage\" type=\"button\" value=\"next\" onclick=\"javascript:getBiograph(124);\"><img src=\"images/next.png\" width=\"28\" height=\"28\" alt=\"close\"></button>" .
					"<button id=\"closePage\" type=\"button\" value=\"close\" onclick=\"javascript:hideOverlays();\"><img src=\"images/close.png\" width=\"28\" height=\"28\" alt=\"close\"></button>";

			$return .= "']";

			echo $return;

}
		elseif( $id == "124"){

			$return = "['showBiographsInfoSecondPage',";
			$return .= "'3000, 3000, 1000, 2000, 1000, 2000, 4000, 4000'";
			$return .= ",";

			//feld 1 leftTop
			$return .= "'<p style=\"margin: 10px 5px 5px 10px;\"><img src=\"images/123_RosSol.png\" alt=\"Bild\"></p>~";

			//feld 2 leftBottom
			$return .= "<p style=\"margin:5px;\">Als <b>Kürschner</b> verarbeitete Naftalie Solländer Tierfelle zu Pelzkleidung oder -futter. Um 1900 entwickelte sich Leipzig zum Zentrum der Kürschnerei in Europa.~";

			//feld 3 centerLeftTop
			$return .= "<p style=\"margin:5px;\">Naftalie war mit <strong style=\"color:green;\"><u>Rosa Auguste Solländer</u></strong>, geb. Wulkan (*01. Mai 1903 in Köln) verheiratet. Gemeinsam hatten sie drei Töchter, die ".
					"alle in Berlin geboren wurden: <b>Hanni</b> (Channi) kam am 01. November 1923 zur Welt, am 25. Dezember 1926 wurde <b>Margot Miriam</b> und am 13. April 1929 ihre jüngste Tochter <strong style=\"color:green;\"><u>Sonja</u></strong> geboren. Gemeinsam ".
					"mit Rosas Schwester Golda Hartmayer, geb. Wulkan lebten sie in der <b>Prenzlauer Str. 17</b> in Berlin Mitte.</p>~";


					
			//feld 4 centerLeftBottom
			$return .= "<p style=\"margin: 5px 5px 5px 5px;\"><img src=\"images/123_Rauchwarenhandlung.png\" alt=\"Bild\"></p>~"; 
					
			//feld 5 centerRightTop
			$return .= "~";

			//feld 6 centerRightBottom
			$return .= "<p style=\"margin:5px;\">Naftalie Solländers älteste Tochter <b>Hanni</b> (Channi) verließ Berlin am 25. Oktober 1939 in Richtung Spreenhagen, Brandenburg. Ob sie dort die Kriegszeit verbrachte ".
				"ist nicht bekannt, in den 1960er Jahren lebte sie in Haifa, Israel. <b>Margot Miriam</b> verließ ihre Familie einen Tag nach ihrem dreizehnten Geburtstag am 26. Dezember 1939 und flüchtete ".
				"nach <b>Israel</b>. Ihre Großmutter <b>Tina Solländer</b> folgte ihr am nächsten Tag.</p>~";

			//feld 7 rightTop
			$return .= "<p style=\"margin: 5px 5px 5px 5px;\"><img src=\"images/123_SonSol.png\" alt=\"Bild\"></p>~";

			// feld 8 rightBottom
			$return .= "<p style=\"margin:5px;\">Am 14. November 1941 wurden <b>Rosa</b> und <b>Naftalie Solländer</b>, sowie ihre zu diesem Zeitpunkt zwölfjährige Tochter <b>Sonja</b> nach <b>Minsk</b>, Sowjetunion ".
				"(Weißrussland) deportiert. Über ihr weiteres Schicksal ist nichts bekannt. Sie starben in der Shoah. Naftalies Schwester <b>Rachela</b> wurde am 03. März 1943 nach ".
				"<b>Auschwitz</b> deportiert und ermordet. Auch seine Schwägerin <b>Golda Hartmayer</b> starb in Auschwitz. Über das Schicksal seiner Brüder Jakob und Siegmund ist nichts bekannt..</p>" .
				//"<button id=\"nextPage\" type=\"button\" value=\"next\" onclick=\"javascript:nextPage();\"><img src=\"images/next.png\" width=\"28\" height=\"28\" alt=\"close\"></button>" .
				"<button id=\"backPage\" type=\"button\" value=\"close\" onclick=\"javascript:getBiograph(125);\"><img src=\"images/back.png\" width=\"28\" height=\"28\" alt=\"close\"></button>".
				"<button id=\"closePage\" type=\"button\" value=\"close\" onclick=\"javascript:hideOverlays();\"><img src=\"images/close.png\" width=\"28\" height=\"28\" alt=\"close\"></button>";
				

			$return .= "']";

			echo $return;

}
		elseif( $id == "125"){

			$return = "['showBiographsInfoSecondPage',";
			$return .= "'3000, 3000, 1000, 2000, 1000, 2000, 4000, 4000'";
			$return .= ",";

			//feld 1 leftTop
			$return .= "'~";

			//feld 2 leftBottom
			$return .= "<p style=\"margin: 40px 5px 5px 35px;\"><img src=\"images/123_NafSol_2.png\" alt=\"Bild\"></p>~";

			//feld 3 centerLeftTop
			$return .= "<p style=\"font-size:12px;margin-left:10px;\">Prenzlauer Str. 17, Berlin Mitte<br>(heute: Karl-Liebknecht-Straße)</p><h1 style=\"color:green;margin-left:10px;\">Naftalie<br>Solländer</h1>" .
					"<p style=\"font-size:14px;margin-left:10px;\">geb. am<br>06. September 1903<br>in Tarnów/Tarnau,<br>Polen</p>~";


					
			//feld 4 centerLeftBottom
			$return .= "<p style=\"margin:5px;\"><strong style=\"color:green;\"><u>Naftalie Solländer</u></strong> wurde am 06. September 1903 als Sohn von <b>Toni, geb. Bromberger</b> (*14. Oktober 1878 in Kattowice/ Kattowitz, Polen) " .
					"und <b>Hirsch Solländer</b> geboren. Er hatte vier <b>Geschwister: Jakob, Rachela, Siegmund</b> und <b>Gisela Gettel</b>. Alle Kinder kamen in der Geburtsstadt ihres Vaters Tarnów/Tarnau, Polen zur Welt. " .
					"Zum Zeitpunkt ihrer Geburt lag die Stadt in Österreich-Ungarn. Bis zur Einbürgerung durch das Deutsche Reich, waren Naftalies Eltern polnische Staatsbürger.</p>~"; 
					
			//feld 5 centerRightTop
			$return .= "<p style=\"margin:5px;\">Die Familie Solländer lebte vermutlich seit dem Jahr 1911 in <b>Berlin</b>. Hirsch Solländer betrieb eine <b>Fischgroßhandlung</b> in der <b>Zentral-Markthalle</b>, " .
					"die im Februar 1917 beim Amtsgericht Mitte ins Handelsregister eingetragen wurde. Nach seinem Tod am 8. September 1934 beantragte seine Frau Toni die Umschreibung der Firma auf ihren Namen. " .
					"Das Geschäft wurde im Februar 1938, nach der von ihr beantragten Namensänderung, unter <strong style=\"color:green;\"><u>Tina Solländer</u></strong> ins Handelsregister eingetragen.</p>~";

			//feld 6 centerRightBottom
			$return .= "~";

			//feld 7 rightTop
			$return .= "<p style=\"margin: 20px 5px 5px 30px;\"><img src=\"images/123_NafSol.png\" alt=\"Bild\"></p>~";

			// feld 8 rightBottom
			$return .= "<p style=\"margin:5px;\">Tina Solländer lebte mit ihren Kindern Jakob, Rachela und Siegmund in der <b>Kaiser-Wilhelm-Str. 25</b>. Ihre Tochter Gisela Gettel wanderte 1935 nach Haifa, Israel aus. ".
					"Im Zuge der Umgestaltung des Ost-Berliner Zentrums in den 1970er Jahren wurden die beiden Zentral-Markthallen abgerissen, sowie Straßenverläufe verändert und umbenannt. Heute sind die Kaiser-Wilhelm-Straße " .
					"und die Prenzlauer Straße, in der Naftalie mit seiner Familie lebte, ein Teil der <b>Karl-Liebknecht-Straße</b>.</p>" .
					"<button id=\"nextPage\" type=\"button\" value=\"next\" onclick=\"javascript:getBiograph(124);\"><img src=\"images/next.png\" width=\"28\" height=\"28\" alt=\"close\"></button>" .
					"<button id=\"closePage\" type=\"button\" value=\"close\" onclick=\"javascript:hideOverlays();\"><img src=\"images/close.png\" width=\"28\" height=\"28\" alt=\"close\"></button>";

			$return .= "']";

			echo $return;

}

	break;
	default:
	break;
}




?>

    
