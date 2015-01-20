<?php
$luggage = $_GET['luggage'];
if(!empty($_GET['typeLuggage']) && !empty($_GET['room']) && !empty($_GET['minWeight']) && !empty($_GET['maxWeight'])){
    $filterTypeLuggage = $_GET['typeLuggage'];
    $filterRoom = $_GET['room'];
    $minWeight = intval($_GET['minWeight']);
    $maxWeight = intval($_GET['maxWeight']);
    //echo $minWeight . 'kg. <--> ' . $maxWeight . 'kg.<br/>';
    $partsLuggage = preg_split('/[\C\|\_\|]+/', $luggage, -1, PREG_SPLIT_NO_EMPTY);
    $sortedLuggage = [];

    foreach ($partsLuggage as $parts) {
        $luggagePieces = explode(';', $parts);
        $luggageType = $luggagePieces[0];
        $roomName = $luggagePieces[1];
        $piecesName = $luggagePieces[2];
        $weight = explode('kg', $luggagePieces[3]);
        $currWeight = intval($weight[0]);

        $allLuggage = [
            'type' => $luggageType,
            'roomName' => $roomName,
            'piecesName' => $piecesName,
            'currWeight' => $currWeight
        ];
        //var_dump($allLuggage);

        if($allLuggage['type'] == $filterTypeLuggage[0] ||
            $allLuggage['type'] == $filterTypeLuggage[1] ||
            $allLuggage['type'] == $filterTypeLuggage[2]){
            if($allLuggage['roomName'] == $filterRoom) {
                $sortedLuggage[] = $allLuggage;
            }
        }
    }
    sort($sortedLuggage);
    //var_dump($sortedLuggage);

    $sumWeightFur = 0; $sumWeightBox = 0; $sumWeightBag = 0;
    $piecesFur = []; $piecesBox = []; $piecesBag = [];
    $bags = []; $boxes = []; $furniture = [];

    foreach($sortedLuggage as $sortedTypes){
        switch($sortedTypes['type']){
            case 'bags': $sumWeightBag += $sortedTypes['currWeight'];
                $piecesBag[] = htmlspecialchars($sortedTypes['piecesName']);
                $bags = [
                    'sumWeightBag' => $sumWeightBag,
                    'piecesBag' => $piecesBag
                ];
                break;
            case 'boxes': $sumWeightBox += $sortedTypes['currWeight'];
                $piecesBox[] = htmlspecialchars($sortedTypes['piecesName']);
                $boxes = [
                    'sumWeightBox' => $sumWeightBox,
                    'piecesBox' => $piecesBox
                ];
                break;
            case 'furniture': $sumWeightFur += $sortedTypes['currWeight'];
                $piecesFur[] = htmlspecialchars($sortedTypes['piecesName']);
                $furniture = [
                    'sumWeightFur' => $sumWeightFur,
                    'piecesFur' => $piecesFur
                ];
                break;
        }
    }
    //var_dump($bags);
    //var_dump($boxes);
    //var_dump($furniture);
    //print result ->
    echo '<ul>';
    if((count($bags) > 0)&& ($sumWeightBag >= $minWeight && $sumWeightBag <= $maxWeight)){
        echo '<li><p>bags</p>';
        echo '<ul><li><p>'.htmlspecialchars($filterRoom).'</p>';
        echo '<ul><li><p>'.implode(', ', $piecesBag).' - '.$sumWeightBag.'kg</p></li></ul></li></ul></li>';
    }
    if((count($boxes) > 0) && ($sumWeightBox >= $minWeight && $sumWeightBox <= $maxWeight)){
        echo '<li><p>boxes</p>';
        echo '<ul><li><p>'.htmlspecialchars($filterRoom).'</p>';
        echo '<ul><li><p>'.implode(', ', $piecesBox).' - '.$sumWeightBox.'kg</p></li></ul></li></ul></li>';
    }
    if((count($furniture) > 0) && ($sumWeightFur >= $minWeight && $sumWeightFur <= $maxWeight)){
        echo '<li><p>furniture</p>';
        echo '<ul><li><p>'.htmlspecialchars($filterRoom).'</p>';
        echo '<ul><li><p>'.implode(', ', $piecesFur).' - '.$sumWeightFur.'kg</p></li></ul></li></ul></li>';
    }
    echo '</ul>';

}else{
    echo "<ul></ul>";
}