<?php

require_once("biographs.php");

$test  = getBiographById(4);
/*
echo ($test->getFirstname());

echo ($test->getFirstname());
$con = $test->getContent();
echo ($con[0]);
*/

$con = $test->getContent();

$return = "'callme',";

$return .= "'".$test->getFirstname()." ".$test->getLastname()."'";

$return .= ",";

$return .= "'".$test->getBirthDate()."'";

$return .= ",";

$return .= "'".$con[0]."'";

//echo $return;




function getBiographById($id) {


	$ret = new Biograph();
	/**
 	* Datenbank-Zugriff 
 	**/
	$ret->setId(1);
	$ret->setFirstname("Michaela");
	$ret->setLastname("Mustermann");
	$ret->setBirthDate("01.01.1999");
	$ret->setDeathDate("--");
  //  $content = new Array();
	$content[0] = "Bild\n".$ret->getFirstname()." ".$ret->getLastname()."\ngeb. ".$ret->getBirthDate();
	$content[1] = "hier kommt wahrscheinlich text und text asdflksjaflalsfjdalsflasfjlaskdfjlaskjflaskfjlaskdjfalsdjkfalsfjalskfjalskfjs" .
		"laskjdflkasjdfölkjasdljf lasjdflkjasd lfkjaslödk jfölaskdjflökasjdflkjs fasldkj flaksdjf lsk jlsk jf";

	$content[2] = "hier kommt wahrscheinlich text und text asdflksjaflalsfjdalsflasfjlaskdfjlaskjflaskfjlaskdjfalsdjkfalsfjalskfjalskfjs" .
		"laskjdflkasjdfölkjasdljf lasjdflkjasd lfkjaslödk jfölaskdjflökasjdflkjs fasldkj flaksdjf lsk jlsk jf";

	$content[3] = "hier kommt wahrscheinlich text und text asdflksjaflalsfjdalsflasfjlaskdfjlaskjflaskfjlaskdjfalsdjkfalsfjalskfjalskfjs" .
		"laskjdflkasjdfölkjasdljf lasjdflkjasd lfkjaslödk jfölaskdjflökasjdflkjs fasldkj flaksdjf lsk jlsk jf";

	$content[4] = "hier kommt wahrscheinlich text und text asdflksjaflalsfjdalsflasfjlaskdfjlaskjflaskfjlaskdjfalsdjkfalsfjalskfjalskfjs" .
		"laskjdflkasjdfölkjasdljf lasjdflkjasd lfkjaslödk jfölaskdjflökasjdflkjs fasldkj flaksdjf lsk jlsk jf";
	$content[5] = "hier kommt wahrscheinlich text und text asdflksjaflalsfjdalsflasfjlaskdfjlaskjflaskfjlaskdjfalsdjkfalsfjalskfjalskfjs" .
		"laskjdflkasjdfölkjasdljf lasjdflkjasd lfkjaslödk jfölaskdjflökasjdflkjs fasldkj flaksdjf lsk jlsk jf";
	
    	$ret->setContent($content);
    
	//$ret->timings = .....;
	return $ret;


}



?>

