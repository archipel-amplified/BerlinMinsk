<?php

class PersonHandler{

	public function testing(){
	
		$id = $_POST["id"];
	
		if( $id == "1"){

			$return = "['showBiographsInfo',";
			$return .= "'3000, 3000, 1000, 2000, 1000, 2000, 4000, 4000'";
			$return .= ",";

			//feld 1 leftTop
			$return .= "'~";

			//feld 2 leftBottom
			$return .= "<p style=\"margin: 40px 5px 5px 35px;\"><img src=\"images/123_NafSol_2.png\" alt=\"Bild\"></p>~";

			//feld 3 centerLeftTop
			$return .= "<p style=\"font-size:12px;margin-left:10px;\">Prenzlauer Str. 17, Berlin Mitte<br>(heute: Karl-Liebknecht-Stra�e)</p><h1 style=\"color:green;margin-left:10px;\">Naftalie<br>Soll�nder</h1>" .
					"<p style=\"font-size:14px;margin-left:10px;\">geb. am<br>06. September 1903<br>in Tarn�w/Tarnau,<br>Polen</p>~";


					
			//feld 4 centerLeftBottom
			$return .= "<p style=\"margin:5px;\"><strong style=\"color:green;\"><u>Naftalie Soll�nder</u></strong> wurde am 06. September 1903 als Sohn von <b>Toni, geb. Bromberger</b> (*14. Oktober 1878 in Kattowice/ Kattowitz, Polen) " .
					"und <b>Hirsch Soll�nder</b> geboren. Er hatte vier <b>Geschwister: Jakob, Rachela, Siegmund</b> und <b>Gisela Gettel</b>. Alle Kinder kamen in der Geburtsstadt ihres Vaters Tarn�w/Tarnau, Polen zur Welt. " .
					"Zum Zeitpunkt ihrer Geburt lag die Stadt in �sterreich-Ungarn. Bis zur Einb�rgerung durch das Deutsche Reich, waren Naftalies Eltern polnische Staatsb�rger.</p>~"; 
					
			//feld 5 centerRightTop
			$return .= "<p style=\"margin:5px;\">Die Familie Soll�nder lebte vermutlich seit dem Jahr 1911 in <b>Berlin</b>. Hirsch Soll�nder betrieb eine <b>Fischgro�handlung</b> in der <b>Zentral-Markthalle</b>, " .
					"die im Februar 1917 beim Amtsgericht Mitte ins Handelsregister eingetragen wurde. Nach seinem Tod am 8. September 1934 beantragte seine Frau Toni die Umschreibung der Firma auf ihren Namen. " .
					"Das Gesch�ft wurde im Februar 1938, nach der von ihr beantragten Namens�nderung, unter <strong style=\"color:green;\"><u>Tina Soll�nder</u></strong> ins Handelsregister eingetragen.</p>~";

			//feld 6 centerRightBottom
			$return .= "~";

			//feld 7 rightTop
			$return .= "<p style=\"margin: 20px 5px 5px 30px;\"><img src=\"images/123_NafSol.png\" alt=\"Bild\"></p>~";

			// feld 8 rightBottom
			$return .= "<p style=\"margin:5px;\">Tina Soll�nder lebte mit ihren Kindern Jakob, Rachela und Siegmund in der <b>Kaiser-Wilhelm-Str. 25</b>. Ihre Tochter Gisela Gettel wanderte 1935 nach Haifa, Israel aus. ".
					"Im Zuge der Umgestaltung des Ost-Berliner Zentrums in den 1970er Jahren wurden die beiden Zentral-Markthallen abgerissen, sowie Stra�enverl�ufe ver�ndert und umbenannt. Heute sind die Kaiser-Wilhelm-Stra�e " .
					"und die Prenzlauer Stra�e, in der Naftalie mit seiner Familie lebte, ein Teil der <b>Karl-Liebknecht-Stra�e</b>.</p>" .
					"<button id=\"nextPage\" type=\"button\" value=\"next\" onclick=\"javascript:getBiograph(2);\"><img src=\"images/next.png\" width=\"28\" height=\"28\" alt=\"close\"></button>" .
					"<button id=\"closePage\" type=\"button\" value=\"close\" onclick=\"javascript:hideOverlays();\"><img src=\"images/close.png\" width=\"28\" height=\"28\" alt=\"close\"></button>";

			$return .= "']";

			echo $return;

}
		elseif( $id == "2"){

			$return = "['showBiographsInfo',";
			$return .= "'3000, 3000, 1000, 2000, 1000, 2000, 4000, 4000'";
			$return .= ",";

			//feld 1 leftTop
			$return .= "'<p style=\"margin: 10px 5px 5px 10px;\"><img src=\"images/123_RosSol.png\" alt=\"Bild\"></p>~";

			//feld 2 leftBottom
			$return .= "<p style=\"margin:5px;\">Als <b>K�rschner</b> verarbeitete Naftalie Soll�nder Tierfelle zu Pelzkleidung oder -futter. Um 1900 entwickelte sich Leipzig zum Zentrum der K�rschnerei in Europa.~";

			//feld 3 centerLeftTop
			$return .= "<p style=\"margin:5px;\">Naftalie war mit <strong style=\"color:green;\"><u>Rosa Auguste Soll�nder</u></strong>, geb. Wulkan (*01. Mai 1903 in K�ln) verheiratet. Gemeinsam hatten sie drei T�chter, die ".
					"alle in Berlin geboren wurden: <b>Hanni</b> (Channi) kam am 01. November 1923 zur Welt, am 25. Dezember 1926 wurde <b>Margot Miriam</b> und am 13. April 1929 ihre j�ngste Tochter <strong style=\"color:green;\"><u>Sonja</u></strong> geboren. Gemeinsam ".
					"mit Rosas Schwester Golda Hartmayer, geb. Wulkan lebten sie in der <b>Prenzlauer Str. 17</b> in Berlin Mitte.</p>~";


					
			//feld 4 centerLeftBottom
			$return .= "<p style=\"margin: 5px 5px 5px 5px;\"><img src=\"images/123_Rauchwarenhandlung.png\" alt=\"Bild\"></p>~"; 
					
			//feld 5 centerRightTop
			$return .= "~";

			//feld 6 centerRightBottom
			$return .= "<p style=\"margin:5px;\">Naftalie Soll�nders �lteste Tochter <b>Hanni</b> (Channi) verlie� Berlin am 25. Oktober 1939 in Richtung Spreenhagen, Brandenburg. Ob sie dort die Kriegszeit verbrachte ".
				"ist nicht bekannt, in den 1960er Jahren lebte sie in Haifa, Israel. <b>Margot Miriam</b> verlie� ihre Familie einen Tag nach ihrem dreizehnten Geburtstag am 26. Dezember 1939 und fl�chtete ".
				"nach <b>Israel</b>. Ihre Gro�mutter <b>Tina Soll�nder</b> folgte ihr am n�chsten Tag.</p>~";

			//feld 7 rightTop
			$return .= "<p style=\"margin: 5px 5px 5px 5px;\"><img src=\"images/123_SonSol.png\" alt=\"Bild\"></p>~";

			// feld 8 rightBottom
			$return .= "<p style=\"margin:5px;\">Am 14. November 1941 wurden <b>Rosa</b> und <b>Naftalie Soll�nder</b>, sowie ihre zu diesem Zeitpunkt zw�lfj�hrige Tochter <b>Sonja</b> nach <b>Minsk</b>, Sowjetunion ".
				"(Wei�russland) deportiert. �ber ihr weiteres Schicksal ist nichts bekannt. Sie starben in der Shoah. Naftalies Schwester <b>Rachela</b> wurde am 03. M�rz 1943 nach ".
				"<b>Auschwitz</b> deportiert und ermordet. Auch seine Schw�gerin <b>Golda Hartmayer</b> starb in Auschwitz. �ber das Schicksal seiner Br�der Jakob und Siegmund ist nichts bekannt..</p>" .
				//"<button id=\"nextPage\" type=\"button\" value=\"next\" onclick=\"javascript:nextPage();\"><img src=\"images/next.png\" width=\"28\" height=\"28\" alt=\"close\"></button>" .
				"<button id=\"backPage\" type=\"button\" value=\"close\" onclick=\"javascript:getBiograph(3);\"><img src=\"images/back.png\" width=\"28\" height=\"28\" alt=\"close\"></button>".
				"<button id=\"closePage\" type=\"button\" value=\"close\" onclick=\"javascript:hideOverlays();\"><img src=\"images/close.png\" width=\"28\" height=\"28\" alt=\"close\"></button>";
				

			$return .= "']";

			echo $return;

}
		elseif( $id == "3"){

			$return = "['showBiographsInfoSecondPage',";
			$return .= "'3000, 3000, 1000, 2000, 1000, 2000, 4000, 4000'";
			$return .= ",";

			//feld 1 leftTop
			$return .= "'~";

			//feld 2 leftBottom
			$return .= "<p style=\"margin: 40px 5px 5px 35px;\"><img src=\"images/123_NafSol_2.png\" alt=\"Bild\"></p>~";

			//feld 3 centerLeftTop
			$return .= "<p style=\"font-size:12px;margin-left:10px;\">Prenzlauer Str. 17, Berlin Mitte<br>(heute: Karl-Liebknecht-Stra�e)</p><h1 style=\"color:green;margin-left:10px;\">Naftalie<br>Soll�nder</h1>" .
					"<p style=\"font-size:14px;margin-left:10px;\">geb. am<br>06. September 1903<br>in Tarn�w/Tarnau,<br>Polen</p>~";


					
			//feld 4 centerLeftBottom
			$return .= "<p style=\"margin:5px;\"><strong style=\"color:green;\"><u>Naftalie Soll�nder</u></strong> wurde am 06. September 1903 als Sohn von <b>Toni, geb. Bromberger</b> (*14. Oktober 1878 in Kattowice/ Kattowitz, Polen) " .
					"und <b>Hirsch Soll�nder</b> geboren. Er hatte vier <b>Geschwister: Jakob, Rachela, Siegmund</b> und <b>Gisela Gettel</b>. Alle Kinder kamen in der Geburtsstadt ihres Vaters Tarn�w/Tarnau, Polen zur Welt. " .
					"Zum Zeitpunkt ihrer Geburt lag die Stadt in �sterreich-Ungarn. Bis zur Einb�rgerung durch das Deutsche Reich, waren Naftalies Eltern polnische Staatsb�rger.</p>~"; 
					
			//feld 5 centerRightTop
			$return .= "<p style=\"margin:5px;\">Die Familie Soll�nder lebte vermutlich seit dem Jahr 1911 in <b>Berlin</b>. Hirsch Soll�nder betrieb eine <b>Fischgro�handlung</b> in der <b>Zentral-Markthalle</b>, " .
					"die im Februar 1917 beim Amtsgericht Mitte ins Handelsregister eingetragen wurde. Nach seinem Tod am 8. September 1934 beantragte seine Frau Toni die Umschreibung der Firma auf ihren Namen. " .
					"Das Gesch�ft wurde im Februar 1938, nach der von ihr beantragten Namens�nderung, unter <strong style=\"color:green;\"><u>Tina Soll�nder</u></strong> ins Handelsregister eingetragen.</p>~";

			//feld 6 centerRightBottom
			$return .= "~";

			//feld 7 rightTop
			$return .= "<p style=\"margin: 20px 5px 5px 30px;\"><img src=\"images/123_NafSol.png\" alt=\"Bild\"></p>~";

			// feld 8 rightBottom
			$return .= "<p style=\"margin:5px;\">Tina Soll�nder lebte mit ihren Kindern Jakob, Rachela und Siegmund in der <b>Kaiser-Wilhelm-Str. 25</b>. Ihre Tochter Gisela Gettel wanderte 1935 nach Haifa, Israel aus. ".
					"Im Zuge der Umgestaltung des Ost-Berliner Zentrums in den 1970er Jahren wurden die beiden Zentral-Markthallen abgerissen, sowie Stra�enverl�ufe ver�ndert und umbenannt. Heute sind die Kaiser-Wilhelm-Stra�e " .
					"und die Prenzlauer Stra�e, in der Naftalie mit seiner Familie lebte, ein Teil der <b>Karl-Liebknecht-Stra�e</b>.</p>" .
					"<button id=\"nextPage\" type=\"button\" value=\"next\" onclick=\"javascript:getBiograph(2);\"><img src=\"images/next.png\" width=\"28\" height=\"28\" alt=\"close\"></button>" .
					"<button id=\"closePage\" type=\"button\" value=\"close\" onclick=\"javascript:hideOverlays();\"><img src=\"images/close.png\" width=\"28\" height=\"28\" alt=\"close\"></button>";

			$return .= "']";

			return $return;

	
		}

	}

}
	function getResponse($func){
	
		eval("\$ret = PersonHandler::".$func."();");
		return $ret;
	
	}

?>