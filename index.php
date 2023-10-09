<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php

        //1 uzduotis
        $vidurkis=array(8.4, 5.6, 5.2, 7.4, 6.9, 4.5, 7.4, 6.7, 7.6, 4.5);
        $vidurkio_avg = array_sum($vidurkis) / count($vidurkis);
        echo "Clases vidurkis yra: $vidurkio_avg <br> <br>";

        //2 uzduotis
        $vardai=array("Algis", "Alvita", "Dangira", "Ona", "Agnė", "Andrius", "Gabija", "Jokūbas", "Matas", "Sofija");
        $key=array(3.4, 6.7, 7.8, 2.4, 5.9, 8.9, 4.0, 7.3, 9.4, 3.9);
        $arrlength = count($vardai);
        rsort($key);

        for($x = 0; $x < $arrlength; $x++) {
            if($x < 6) {
                echo "Mokinys/Mokinie " .$vardai[$x]. "ir jo/jos vidurkis yra = " .$key[$x]. " jo/jos vidurkis teigemas <br>";
            } else {
                echo "Mokinys/Mokinie " .$vardai[$x]. "ir jo/jos vidurkis yra = " .$key[$x]. " jo/jos vidurkis NEIGIAMAS <br>";
            }
        }
    ?>

</body>
</html>