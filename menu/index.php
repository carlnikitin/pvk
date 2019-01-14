<?php
    function soodus($hind, $soodusProtsent) {
        return round ($hind * ((100 - $soodusProtsent) / 100), 2);
    }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tartu KHK menüü</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css"/>

    <!--Bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">

    <!--Font awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

</head>
<body>

    <!--Pealkiri-->
    <h2 class="pealkiri">Tartu KHK koolimenüü</h2>

    <!--Praed-->
    <div class="center ">
        <div class="card praed" style="width: 22rem;">
            <div class="card-header praed2">
                Praed<br> <i class="fas fa-utensils"></i>
            </div>
            <?php
            $praed = array(
                    array(
                        'nimetus' => 'Sealihapada ploomide ja aprikoosiga',
                        'kirjeldus' => 'sealihapada, lisand, salat, leib',
                        'hind' => '2.65€'
                    ),
                    array (
                        'nimetus' => 'Praetud kanakints',
                        'kirjeldus' => 'Kints, lisand, kaste, leib, salat',
                        'hind' => '2.50€'
                    ),
                    array (
                        'nimetus' => 'Hakklihakaste',
                        'kirjeldus' => 'hakklihakaste, lisand, salat, leib',
                        'hind' => '2.45€'
                    ),
                    array (
                        'nimetus' => 'Kartul, kaste, salat, leib',
                        'kirjeldus' => '',
                        'hind' => '1.38€'
                    ),
                    array (
                        'nimetus' => 'Hakklihakaste 1/2',
                        'kirjeldus' => 'hakklihakaste, lisand, salat, leib',
                        'hind' => '1.30€'
                    ),
            );
            foreach ($praed as $praad=>$info) {
            echo '<ul class="list-group list-group-flush">'.
                    '<li class="list-group-item">'.$info['nimetus'].' <br>'
                    .$info['kirjeldus'].' <span class="hinnad">'.$info['hind'].'<br>'.'
                    <span class="hinnad2">'.soodus($info['hind'], 15).'€'.'</span> </li>
               
            </ul>';
            }
            ?>
        </div>

        <!--Magustoidud-->
        <div class="card praed" style="width: 22rem;">
            <div class="card-header praed2">
                Magustoidud<br> <i class="fas fa-utensil-spoon"></i>
            </div>

            <?php
            $magustoidud = array(
                array (
                    'nimetus' => 'Rosinakissell vahukoorega',
                    'hind' => '1.4€'
                ),
                array (
                    'nimetus' => 'Mannavaht piimaga',
                    'hind' => '1.2€'
                ),
                array (
                    'nimetus' => 'Moosisai',
                    'hind' => '0.4€'
                ),
            );

            foreach ($magustoidud as $magustoit=>$info2) {
                echo '<ul class="list-group list-group-flush">'.
                    '<li class="list-group-item">'.$info2['nimetus']
                    .' <span class="hinnad">'.$info2['hind'].'<br>'.'
                    <span class="hinnad2">'.soodus($info2['hind'], 15).'€'.'</span> </li>
            </ul>';
            }
            ?>
        </div>

        <!--Joogid-->
        <div class="card praed" style="width: 22rem;">
            <div class="card-header praed2">
                Joogid<br> <i class="fas fa-coffee"></i>
            </div>
            <?php

            $joogid = array(
                array (
                    'nimetus' => 'Mahl',
                    'hind' => '0.8€'
                ),
                array (
                    'nimetus' => 'Piim',
                    'hind' => '1.0€'
                ),
                array (
                    'nimetus' => 'Morss',
                    'hind' => '0.5€'
                ),
            );

            foreach ($joogid as $jook=>$info3) {
                echo '<ul class="list-group list-group-flush">'.
                    '<li class="list-group-item">'.$info3['nimetus']
                    .' <span class="hinnad">'.$info3['hind'].'<br>'.'
                    <span class="hinnad2">'.soodus($info3['hind'], 15).'€'.'</span> </li>
            </ul>';
            }
            ?>
        </div>
    </div>

</body>
</html>
