<?php
date_default_timezone_set("Europe/Sofia");
$text = $_GET['text'];
//var_dump($text);
if(strlen($text) == 0) {
   // echo '<div>No books</div>';
    die();
}

$minPrice = floatval($_GET['min-price']);
$maxPrice = floatval($_GET['max-price']);
if($minPrice > $maxPrice || $minPrice < 0) {
   // echo '<div>Error</div>';
}else {
    $sort = $_GET['sort'];
    $order = $_GET['order'];

    $textAsLine = preg_split('/[\r\n]+/', $text, -1, PREG_SPLIT_NO_EMPTY);
    //var_dump($textAsLine);
    $orderedBooks = [];
    foreach ($textAsLine as $parts) {
        $components = preg_split('/[\/]/', trim($parts), -1, PREG_SPLIT_NO_EMPTY);
        //var_dump($components);
        $author = $components[0];
        $name = $components[1];
        $genre = $components[2];
        $price = $components[3];
        $date = date_create_from_format("Y-m-d", $components[4]);
        $info = $components[5];

        $books = [
            'author' => $author,
            'name' => $name,
            'genre' => $genre,
            'price' => $price,
            'date' => $date,
            'info' => $info
        ];

        if ($price <= $maxPrice && $price >= $minPrice) {
            $orderedBooks[] = $books;
        }
         //var_dump($orderedBooks);
        usort($orderedBooks, function ($a, $b) use($order, $sort){
            $compareGenre = strcmp($a['genre'], $b['genre']);
            $compareAuthor = strcmp($a['author'], $b['author']);

            switch($sort){
                case 'genre':
                    if($compareGenre === 0){
                        return $a['date'] > $b['date'] ? 1 : -1;
                    }else{
                        if($order === 'ascending') {
                            return $compareGenre;
                        }else {
                            $compareGenre *= -1;
                            return $compareGenre;
                        }
                    }
                    break;
                case 'author':
                    if ($compareAuthor === 0){
                        return $a['date'] > $b['date'] ? 1 : -1;
                    }else{
                        if($order === 'ascending') {
                            return $compareAuthor;
                        }else{
                            $compareAuthor *= -1;
                            return $compareAuthor;
                        }
                    }
                    break;
                case 'publish-date':
                     if($order === 'ascending'){
                         return  $a['date'] > $b['date'] ? 1 : -1;
                     }else if($order === 'descending'){
                         return $a['date'] > $b['date'] ? -1 : 1;
                     }
                    break;
            }
        });
        //var_dump($orderedBooks);
    }
    foreach ($orderedBooks as $book) {
        echo '<div><p>' . htmlspecialchars($book['name']) . '</p>';
        echo '<ul><li>' . htmlspecialchars($book['author']) . '</li>';
        echo '<li>' . htmlspecialchars($book['genre']) . '</li>';
        echo '<li>' . $book['price'] . '</li><li>' . date_format($book['date'], 'Y-m-d') . '</li>';
        echo '<li>' . htmlspecialchars($book['info']) . '</li></ul></div>';
    }
}