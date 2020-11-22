<?php
$nom='';
$edat='';
$ciutat='';

if ($_REQUEST['p']=='p'){
    $nom = "PACO";
    $edat = "44";
    $ciutat = "PALMA";

    $data = '{"nom":"'.$nom.'","edat":"'.$edat.'","ciutat":"'.$ciutat.'"}';

}
else if ($_REQUEST['p']=='m'){
    $nom = "JOAN";
    $edat = "51";
    $ciutat = "MANACOR";

    $data =' {"nom":"'.$nom.'","edat":"'.$edat.'","ciutat":"'.$ciutat.'"} </br/> ';

    $nom = "ALICIA";
    $edat = "22";
    $ciutat = "MANACOR";

    $data += ' {"nom":"'.$nom.'","edat":"'.$edat.'","ciutat":"'.$ciutat.'"} ';

}
else if ($_REQUEST['p']=='i') {
    $nom = "MARIA";
    $edat = "33";
    $ciutat = "INCA";

    $data =  ' {"nom":"'.$nom.'","edat":"'.$edat.'","ciutat":"'.$ciutat.'}';

    $nom = "JOSE";
    $edat = "25";
    $ciutat = "INCA";

    $data += '{"nom":"'.$nom.'","edat":"'.$edat.'","ciutat":"'.$ciutat.'"} ';


}else if ($_REQUEST['p'] == 's'){
    $nom = "PETER";
    $edat = "19";
    $ciutat = "SOLLER";

    $data = '{"nom":"'.$nom.'","edat":"'.$edat.'","ciutat":"'.$ciutat.'"} ';
}

echo $data;

?>
