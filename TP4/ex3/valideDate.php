<!DOCTYPE html>
<html>
    <!--   NOM: HANANE EL FERDAOUSSI    -->
<head>
	<title>TP4-ex3</title>
</head>
<body>
    <CENTER> <h1>VALIDATION DE LA DATE</h1>
        
<?php
     if(isset($_POST["envoyer"]))    
     {
         $jour=$_POST["jour"];
         $mois=$_POST["mois"];
         $annee=$_POST["annee"];
         echo 'La date saisie est:&nbsp&nbsp&nbsp<b style="color:#008B8B;">'.$jour.'-'.$mois.'-'.$annee.'</b>';
         $jma=$jour.$mois.$annee; $time = strtotime($jma);
     
         if(checkdate($mois, $jour, $annee)==true)
         {
             echo '<br> La date saisie est <B style="color:#32CD32;">valide</B>';
         }
 else
 {
    echo '<br> La date saisie est <B style="color:red;">non valide</B>';
 }
         
     }
        
?>