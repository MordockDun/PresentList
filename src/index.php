<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Geschenkeliste</title>

    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/switch.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="events.js"></script>
</head>
<body>

<h1>Geschenkeliste für die Hochzeit von Isa und Daniel</h1>

<p>
    Liebe Hochzeitsgäste<br>
    <br>
    Neuseeland, der Oman, Norwegen, Jordanien, St. Petersburg, Schottland stehen alle auf unserer Reiseziel-Wunschliste (neben vielen weiteren Zielen) - und: die Hochzeitsreise ist noch nicht gebucht! Wir freuen uns also sehr über Geldgeschenke.
    Wer doch eher etwas zur Aussteuer beitragen möchte, hier ein paar Ideen.<br>
    <br>
    <b>Bitte sprecht euch mit unseren Trauzeugen ab</b>, ob ein Geschenk noch „frei“ ist. Wenn ihr euch für eines entschieden habt, einfach anklicken.<br>
    <br>
    Das bedeuten die Farben:<br>
        <ul>
            <li>
                Grüne Felder = noch frei<br>
            </li>
            <li>
                Graue Felder = da war ein anderer schneller<br>
            </li>
        </ul>
    <br>
    Vielen Dank<br>
    Euer Brautpaar
</p>

<br>

<div class="list-type1">
    <ol>
<?php

$row = 1;
if (($handle = fopen("data.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {

        if($data[2]==1){
            $class = "";
            $checked = "checked";
        } else {
            $class = "used";
            $checked = "";
        }

        echo "<li>
            
                <a title='Link in neuem Fenster öffnen' class='".$class."' href='".$data[1]."' target='_blank'>".$data[0]."
                <div class='onoffswitch'>
                    <input type='checkbox' name='onoffswitch' class='onoffswitch-checkbox' id='myonoffswitch_".$row."' $checked>
                    <label class='onoffswitch-label' for='myonoffswitch_".$row."'>
                        <span class='onoffswitch-inner'></span>
                        <span class='onoffswitch-switch'></span>
                    </label>
                </div>
                
                </a>
            
            </li>";

        $row++;
    }
    fclose($handle);
}
?>
    </ol>
</div>

<p>Im Zweifelsfall freuen wir uns immer über Reisen jeglicher Art. ;)</p>

</body>
</html>