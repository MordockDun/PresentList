<?php
/**
 * Created by PhpStorm.
 * User: danie
 * Date: 02.01.2019
 * Time: 22:15
 */

try {
    $id = filter_input(INPUT_POST, "id");
    $checked = filter_input(INPUT_POST, "checked");

    $fileContent = [];
    if (($handle = fopen("data.csv", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ";")) !== FALSE) {

            $fileContent[] = $data;
        }
        fclose($handle);
    } else trigger_error("konnte nicht lesen",E_USER_WARNING);

    if (isset($fileContent[$id - 1])) {
        $fileContent[$id - 1][2] = $checked=="true"?1:0;
    }

    if (($handle = fopen("data.csv", "w")) !== FALSE) {
        foreach ($fileContent as $data) {
            fputcsv($handle, $data, ";");
            echo var_export($data,true)."<br>";
        }

        fclose($handle);
    } else trigger_error("konnte nicht schreiben",E_USER_WARNING);

} catch(\Exception $exception){
    echo $exception->getMessage();
}