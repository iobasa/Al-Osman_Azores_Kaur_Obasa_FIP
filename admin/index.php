
<?php
    require_once '../load.php';

    if (isset($_GET['media'])) {
        $tbl = "tbl_" . trim($_GET['media']);
    }

if (isset($_GET['filter'])) {
    //Filter
        // 'tbl' => 'tbl_movies',
        
        $tbl2 = 'tbl_genre';
        $tbl3 = 'tbl_mov_genre';
        $col = 'movies_id';
        $col2 = 'genre_id';
        $col3 = 'genre_name';
        $filter = $_GET['filter'];

    $results = getMoviesByFilter($tbl, $tbl2, $tbl3, $col, $col2, $col3, $filter);

    echo json_encode($results);

} else {
    
    $results = getAll($tbl);

    echo json_encode($results);
}
