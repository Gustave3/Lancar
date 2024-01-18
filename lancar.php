<?php

function ceklancar($lancar, $kondisiterminasi, $l1, $l2, $l3, $l4, $l5, $l6, $l7, $l8, $l9, $tl, $tl2, $tl3, $tl4, $tl5){
    echo "<h1>Latihan Konsep Function Pengulangan dan Pengkondisian</h1>";
    echo "<hr/>";
    for($lancar; $lancar <= $kondisiterminasi; $lancar++){
        if($lancar == $l1 || $lancar == $l2 || $lancar == $l3 || $lancar == $l4 || $lancar == $l5 || $lancar == $l6 || $lancar == $l7 || $lancar == $l8 || $lancar == $l9){
            echo "Lampu lalu lintas no $lancar lancar <br/>";
        }else if($lancar == $tl || $lancar == $tl2 || $lancar == $tl3 || $lancar == $tl4 || $lancar == $tl5){
            echo "Lampu lalu lintas no $lancar tidak lancar <br/>";
        }else{
            echo "Lampu lalu lintas no $lancar tidak berfungsi <br/>";
        }
    }
}
echo ceklancar(1, 20, 3, 6, 7, 8, 9, 15, 17, 19, 20, 2, 4, 10, 12, 18, 5, 11, 13, 14,);

?>