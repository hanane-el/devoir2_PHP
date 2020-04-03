<!DOCTYPE html>
<html>
    <!--   NOM: HANANE EL FERDAOUSSI    -->
<head>
	<title>TP4-ex3</title>
</head>
<body>
    
   <CENTER> <h1>CHOISIR UNE DATE</h1>
    <form action="valideDate.php" method="post">
        
         <label >Jour:</label>
  <input type="number" name="jour" min="01" max="31" style="width:50px;height:25px;border-radius:20px;background:#FFDEAD;" required>
        
         <label >Mois:</label>
  <input type="number" name="mois" min="01" max="12" style="width:50px;height:25px;border-radius:20px;background:#FFDEAD;" required>
        
         <label >Annee:</label>
  <input type="number" name="annee" min="1930" max="2020" style="width:50px;height:25px;border-radius:20px;background:#FFDEAD;" required><br><br>
        
        <input type="submit" name="envoyer" value="envoyer"style="border-radius:20px;background:#FFFAF0;" />
    </form></CENTER>
    
    
    
    
    </body>
    
</html>