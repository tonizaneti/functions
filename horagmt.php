<?php
//$hora = htmlspecialchars($_POST['hora'], ENT_QUOTES, 'UTF-8');
$ndata = date("Y-m-d H:i:s");
//$hora = date("H:i:s");
//2025-12-12 18:18:36
//18:18:36
echo "Data Original: ".$ndata."<br>";
//$novadata = substr($ndata, 8, 2) . "/" . substr($ndata, 5, 2) . "/" . substr($ndata, 0, 4);
//$novadata = substr($ndata, 0, 4)."-".substr($ndata, 5, 2)."-".substr($ndata, 8, 2) ;
$novahora = substr($ndata, 11, 2) . "h" . substr($ndata, 14, 2)  . "m" . substr($ndata, 17, 2) . "s";
echo "Data Modificada: " . $novadata. "<br>";
echo "Hora BR". $novahora."<br>";
//$novahora=substr($hora,0,2) ."h" .substr($hora,3,2)  ."m" .substr($hora,6,2) . "s" ;
$horabr = substr($novahora, 0, 2);
$horaconv = (int)$horabr;
if($horaconv >=21){
    $horagmt = $horaconv -21 + 3;
    $novodiagmt = substr($ndata, 8,2) + 1;
    if($novodiagmt <10){
        $novodiagmt = "0".$novodiagmt;
    }
}
else{
    $horagmt=$horaconv+3;
    $novodiagmt = substr($ndata, 8,2);
}

$horariogmt = $horagmt . "h" . substr($novahora, 3, 2) . "min" . substr($novahora, 6, 2) . "s";
$novadata_utc = substr($ndata, 0, 4)."-".substr($ndata, 5, 2)."-".$novodiagmt." ".$horariogmt ;
echo "Horario GMT " . $horariogmt. "<br>";
echo "Data UTC ". $novadata_utc . "<br>";


echo "NOvo Dia " . $novodiagmt . "<br>";
//$novadata = substr($ndata, 8, 2) . "/" . substr($ndata, 5, 2) . "/" . substr($ndata, 0, 4);
echo  "Nova hora BR: $novahora";
echo "<br>";
echo "Hora GMT: $horariogmt";
$datagmt =  $novadata . $horariogmt;
//echo "Hora GMT". $datagmt;

?>