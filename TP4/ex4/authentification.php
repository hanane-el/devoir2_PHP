<!DOCTYPE html>
<html>
    <!--   NOM: HANANE EL FERDAOUSSI    -->
<head>
	<title>TP4-ex4</title>
</head>
<body>
    <CENTER> <h1>VALIDATION DE LOGIN</h1>
        
<?php
      /*  error_reporting(0);
ini_set('display_errors', 0);*/
        
        
    //FONCTION POUR LA VALIDATION D'EMAIL
 function validateMail($mailadr)
 {

if (preg_match('/^([a-z0-9_\.-]+)@([\da-z\.-]+)\.([a-z\.]{2,6})$/  ',
$mailadr)) {
 return true;
} else {
 return false;
}
 }
   
        //FONCTION POUR LA VALIDATION DU MOT DE PASSE
      function validatePassword($pass)
 {
          if(strlen($pass)>7){
              
                     if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W)#', $pass)) {
        return true;
	}
	
    else {
        return false;
	}  
              
          }
 
    
}
  
        
        
     if(isset($_POST["envoie"]))    
     {
         $mail=$_POST["mail"];
         
         $password=$_POST["password"];
         
 
        if(validateMail($mail)==true ) 
        {
           echo '<B style="color:#32CD32;">mail valid</B><br>'; 
        }
         else 
         {
            echo '<B style="color:red;">mail invalid!</B><br>';  
         }
         
                 if(validatePassword($password)==true) 
        {
           echo '<B style="color:#32CD32;">Mot de passe conforme</B><br>';
        }
         else 
         {
           echo '<B style="color:red;">Mot de passe non conforme</B><br>';  
         }
         
        
             if(existelogin($mail,$password)==true)
             {
                 echo'<B style="color:#32CD32;"><br><br>authentification réussie!</B><br>';
             }
             else
             {
                 echo '<B style="color:red;"><br><br>login inexistant!</B><br>';
             }
         
         
     }
         
         function existelogin($mail,$pass){
                      //VERIFIE SI LOGIN EXISTE DANS LE FICHIER
         try{
$fic=fopen("login.txt","r");
  
            

    while(!feof($fic)){
    $ligne=fgets($fic);
    
    $var=explode("|",$ligne);
       
   if($var[0] == $mail && $var[1] == $pass)
   {
       
       return true;
       exit();
   }
        
}}
         catch(exception $e){
    die("erreur!!:".$e);
}
             
         }

         
    
  
  


 
          
         
     
        
?>