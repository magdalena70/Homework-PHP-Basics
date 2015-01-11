<?php
$list = $_GET['list'];
$line = preg_split('/[\r\n]+/', trim($list), -1, PREG_SPLIT_NO_EMPTY);
//var_dump($line);

$minPrice = $_GET['minPrice'];
$maxPrice = $_GET['maxPrice'];
$filterType = $_GET['filter'];
$order = $_GET['order'];

$id = 0;

$productsData = [];
foreach($line as $part) {
    $id++;
    $products = preg_split('/[\|]+/', $part, -1, PREG_SPLIT_NO_EMPTY);
    //var_dump($products);

    $name = trim($products[0]);
    $type = trim($products[1]);
    $components = preg_split('/[\,]+/', $products[2], -1, PREG_SPLIT_NO_EMPTY);
    //var_dump($components);
    $price = floatval($products[3]);
    $data = [
        'name' => $name,
        'type' => $type,
        'components' => $components,
        'price' => $price,
        'id' => $id
    ];

    if(($price >= $minPrice && $price <= $maxPrice && $type == $filterType) ||
        ($price >= $minPrice && $price <= $maxPrice && $filterType == 'all')){
            $productsData[] = $data;
    }

}
//var_dump($productsData);
usort($productsData, function($a, $b) use ($order){
    if($a['price'] == $b['price']){
        return $a['id'] - $b['id'];
    }
    if($order == 'ascending'){
        return $a['price'] > $b['price'] ? 1 : -1;
    }else{
        return $a['price'] < $b['price'] ? 1 : -1;
    }
});
//var_dump($productsData);
//print result
foreach($productsData as $result){
    $html = '<div class="product" id="product'.$result['id'].'"><h2>'.htmlspecialchars(trim($result['name'])).'</h2><ul>';
    foreach($result['components'] as $comp) {
        $html .= '<li class="component">'.htmlspecialchars(trim($comp)).'</li>';
    }
    $html .= '</ul><span class="price">'.number_format($result['price'], 2, '.', '').'</span></div>';
    echo $html;
}

