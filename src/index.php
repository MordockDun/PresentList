<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <title>Geschenkeliste</title>

    <link rel="stylesheet" type="text/css" href="style/style.css">
    <link rel="stylesheet" type="text/css" href="style/switch.css">
</head>
<body>

<h1>Geschenkeliste für die Hochzeit von Isa und Daniel</h1><br>

<p>Es reicht uns völlig wenn ihr einfach so kommt und gute Laune mitbringt. Wer unbedingt etwas schenken möchte aber kein Geld verschenken möchte findet hoffentlich hier etwas geeignetes.</p>

<br>

<div class="list-type1">
    <ol>
<?php

$row = 1;
if (($handle = fopen("data.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {

        if($data[2]==1){
            $class = "used";
            $checked = "checked";
        } else {
            $class = "";
            $checked = "";
        }

        echo "<li>
            
                <a class='".$class."' href='".$data[1]."' target='_blank'>".$data[0]."
                <div class='onoffswitch'>
                    <input type='checkbox' name='onoffswitch' class='onoffswitch-checkbox' id='myonoffswitch".$row."' $checked>
                    <label class='onoffswitch-label' for='myonoffswitch".$row."'>
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



</body>
</html>