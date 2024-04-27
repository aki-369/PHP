<?php
function TotalScore($score1, $score2, $score3){
    $total = $score1 + $score2 + $score3;
    if($total >= 210){
        echo "合計点は" . $total . "なので合格です" . "<br />";
    }else{
        echo "合計点は" . $total . "なので不合格です" . "<br />";
    }
}

echo(TotalScore(88, 90 ,75));