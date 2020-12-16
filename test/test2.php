<?php
function Add2NumbersColor($n1,$n2,$color="#EE55FF"){
    $sum=$n1+$n2;
    echo "<div style='color: ".$color."'>".$sum."</div>";
    return $sum;
}
echo "br/>" .Add2NumbersColor(5,12,"#EE66FF")*Add2NumbersColor(2,3,"purple");
?>