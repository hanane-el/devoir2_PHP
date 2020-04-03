<!DOCTYPE html>
<html>
    <!--   NOM: HANANE EL FERDAOUSSI    -->
<head>
	<title>TP4-ex1</title>
</head>
<body>
		<table border-collapse: collapse;>
    <tr >
<?php

function decouper($phrase,$delimiteur){
  $arr=explode($delimiteur,$phrase);
    foreach($arr as $var)
    {
        echo'<td style=" border: 1px solid red">'.$var.'</td>';
            
    }
}

decouper('hello word, c le devoir 2, module php, ex1',',');

?>
            </tr>      </table>
</body>
</html>