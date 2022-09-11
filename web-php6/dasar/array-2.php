<?php 
    $apel = ['manalagi','washington','merah'];
    
    $buah = ['mangga'=>300,'jeruk'=>200,'apel'=>$apel];

    var_dump($buah);

    echo "<pre>";
    print_r($buah);
    echo "</pre>";

    echo $buah['apel'][0] . "<br>";

    foreach ($buah as $key => $value) {
        if (!is_array($value)) {
            echo $key . "=> " . $value;
            echo "<br>";
        }
        else {
            $key;
            foreach ($value as $key => $value) {
                echo "<li>";
                echo $value;
                echo "</li>";
            }
        }
    }
?>