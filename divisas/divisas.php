<?php
    if($_POST){
        $dinero=$_POST['dinero'];
        $dat=$_POST['dat'];

        if($dat==1){
            $dol=$dinero/24.5;  
            $eur=$dinero/30; 
            echo "<h2>Dolares ".round($dol,2)."</h2>";
            echo "<h2>Euros ".round($eur,2)."</h2>";
        }
        if($dat==2){
            $pes=$dinero*24.5;
            $eur=$dinero*24.5/30;
            echo "<h2>Pesos $".round($pes,2)."</h2>";
            echo "<h2>Euros ".round($eur,2)."</h2>";  
        }
        if($dat==3){
            $pes=$dinero*30;
            $dol=$dinero*30/24.5;
            echo "<h2>Pesos $".round($pes,2)."</h2>";
            echo "<h2>Dolares ".round($dol,2)."</h2>";  
        }



    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convertidor de monedas</title>
</head>
<body>
    <h1>Coversos de Divisas</h1>
    <form action="divisas.php" method="POST">
    <table>
        <tr>
            <td>Cantidad:</td>
            <td><input type="number" name="dinero"></td>
        </tr>
        <tr>
            <td>Moneda:</td>
            <td>
                <select name="dat">
                    <option value="1">Pesos</option>
                    <option value="2">Dolares</option>
                    <option value="3">Euros</option>
                </select>
            </td>
        </tr>
    </table>
    <input type="submit" value="Covertir">
    </form>
</body>
</html>