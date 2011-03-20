<?php

class MarkerHandler {

	public function getMarkers(){
	
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
			//die('Ungültige Abfrage: ' . mysql_error());
		}

		$return = "['setMarkers','";

		while ( $result && $row = mysql_fetch_row ( $result ) ) 
		{
			$return .= $row[0]."-".$row[1]."-".$row[2].",";
		}
		$return .= "']";
		
		return $return;
	}
	
	
	public function fillMarkers(){
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
	}
	
	
	public function getMarkersClustered(){
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
		
		$sql = "SELECT `place_id` FROM `personen` ORDER BY `id` ASC";
		
		$result = mysql_query ( $sql );
		if (!$result) {
			die('Ungültige Abfrage: ' . mysql_error());
		}
	
		while ( $result && $row = mysql_fetch_row ( $result ) ) 
		{
			$pers_ids[] = $row[0];
		}
		
		
		
		$sql = "SELECT * FROM `orte` WHERE `id` NOT IN (".implode(", ", $pers_ids).") ORDER BY `id` ASC";
		
		$result = mysql_query ( $sql );
		if (!$result) {
			die('Ungültige Abfrage: ' . mysql_error());
		}
		
		$return = "['setMarkersClustered','";

		while ( $result && $row = mysql_fetch_row ( $result ) ) 
		{
			$return .= $row[0].":".$row[1].":".$row[2].",";
		}
		$return .= "']";
		echo $return;
	}
	
	
	public function getMarkersAndPersons(){
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
		
		$sql = "SELECT * FROM `personen`, `orte` WHERE `personen`.`place_id` = `orte`.`id` ORDER BY `personen`.`id` ASC";
		
		$result = mysql_query ( $sql );
		if (!$result) {
			die('Ungültige Abfrage: ' . mysql_error());
		}

		$return = "['setMarkersAndPersons','";
		
		while ( $result && $row = mysql_fetch_row ( $result ) ) 
		{
			$return .= $row[6].":".$row[7].":".$row[8].":".$row[0].":".$row[1].":".$row[2].":".$row[3].":".$row[4].",";
		}	
			
		
		
		$return .= "']";
		echo $return;
	}
	
	
}


	function getResponse($func){
	
		eval("\$ret = MarkerHandler::".$func."();");
		return $ret;
	
	}


?>