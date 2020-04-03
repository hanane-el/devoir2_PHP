<?php
    //NOM: HANANE EL FERDAOUSSI
try{
$fic=fopen("commandes.txt","r");
}catch(exception $e){
    die("l'erreur est:".$e);
}
try{
$CLI1001=fopen("pscde01_CLI1001.txt","w+");
}catch(exception $e){
    die("l'erreur est:".$e);
}
try{
    $CLI1004=fopen("pscde01_CLI1004.txt","w+");
}catch(exception $e){
    die("l'erreur est:".$e);
}
?>
<head>
	<title>TP4-ex2</title>
</head>
<table border=0>
    <tr style="background:#00FFFF;">
        <th>numéro de commande</th>   <th>numéro de client</th>
        <th>Date de commande</th>    <th>Désignation d'article</th>  
        <th>Quantité de commande</th>  <th>prix unitaire</th>      
        <th>Date de livraison</th>    <th>Adresse du client</th>
    </tr>
<?php
while($lignes=fgets($fic)){
    echo"<tr>";
        $var=explode("|",$lignes);
    if($var[1]=="CLI1001")
    {
        fprintf($CLI1001,"%s",$lignes);
    }
    else if($var[1]=="CLI1004")
    {
        fprintf($CLI1004,"%s",$lignes);
    }
    foreach($var as $td)
    {
        echo "<td>".$td."</td>";
    }
    echo"</tr>";
}
?>
</table>