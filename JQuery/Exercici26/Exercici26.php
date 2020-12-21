
<?php
$name='';
$age='';
$city='';

if ($_REQUEST['pm']=='pm'){
    $name = "PACO";
    $age = "44";
    $city = "PALMA";

    $printData = '{"Name":"'.$name.'"," age":"'.$age.'"," city":"'.$city.'"}';

}
else if ($_REQUEST['p']=='m'){
    $name = "JOAN";
    $edat = "51";
    $city = "MANACOR";

    $printData =' {"Name":"'.$name.'"," age":"'.$age.'"," city":"'.$city.'"} </br/> ';

    $name = "ALICIA";
    $age = "22";
    $city = "MANACOR";

    $printData += ' {"Name":"'.$name.'"," age":"'.$age.'"," city":"'.$city.'"} ';

}
else if ($_REQUEST['p']=='i') {
    $name = "MARIA";
    $age = "33";
    $city = "INCA";

    $printData =  ' {"Name":"'.$name.'"," age":"'.$age.'"," city":"'.$city.'}';

    $name = "JOSE";
    $age = "25";
    $city = "INCA";

    $printData += '{"Name":"'.$name.'"," age":"'.$age.'"," city":"'.$city.'"} ';


}else if ($_REQUEST['p'] == 's'){
    $name = "PETER";
    $age = "19";
    $city = "SOLLER";

    $printData = '{"Name":"'.$name.'"," age":"'.$age.'"," city":"'.$city.'"} ';
}

echo $printData;

?>