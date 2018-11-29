<?php
                    //Haal de input op vanuit de formulioer
                    $datum = $_POST["datum"];
                    $afspraak = $_POST["afspraak"];
                    $adres = $_POST["adres"];
                    //zet de input in een array
                    $inputToList = array($datum , $afspraak , $adres);
                    //Open het bestand waar we naartoe schrijven
                    $OpenAfspraken = fopen("files/project.csv", "a");
                    //Controlleer de input op invoer
                    //Zodra er ze alle 3 zijn ingevoerd dan write
                    //invoer naar afspraken.csv
                    if ($datun != "" && $afspraak != "" && $adres != "") {
                        fputcsv($OpenAfspraken, $inputToList);
                    }
                    fclose($OpenAfspraken);
?>