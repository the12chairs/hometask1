<?php
    $array = array (
            array (
                'name' => 'Вася Пупкин',
                'rank' => 5
                ),
            array (
                'name' => 'Сергей Сергеев',
                'rank' => 3
                ),
            array (
                'name' => 'Иван Иванов',
                'rank' => 4
                )
            );


# High tier (usort)
   
    function cmp($a, $b){
        if($a['rank'] == $b['rank'])
            return 0;
        return ($a['rank'] > $b['rank']) ? -1: 1;
    }
    uasort($array, 'cmp');
    var_dump($array);


# Low tier (bubble)
    $tmp = null;
    for($i = 0; $i < count($array); $i++){
        for($j= 0; $j < count($array) - $i; $j++)
            if($array[$j]['rank'] < $array[$j+1]['rank']){
                $tmp = $array[$j];
                $array[$j] = $array[$j+1];
                $array[$j+1] = $tmp;
            }
    }
    var_dump($array);

?>

