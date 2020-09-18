<?php
include("includes/header.php");
include("includes/top-filter.php");

$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
$items_per_page = 12;
$items_total_count = Photo::count_all();

$paginate = new Paginate($page, $items_per_page, $items_total_count);

$sql = "SELECT * FROM foto ";
$sql .= "LIMIT {$items_per_page} ";
$sql .= "OFFSET {$paginate->offset()}";

$photos = Photo::find_this_query($sql);
?>

<p>

</p>
<div class="card-columns">
    <div class="card">
        <a href="photo.php?id=<?php echo $photo->FotoID; ?>">
            <img class="card-img-top" src="<?php echo 'admin'.DS.$photo->picture_path(); ?>" alt="" class="img-fluid">
        </a>
        <div class="card-body">
            <h5 class="card-title">Card title - PHP</h5>
            <p class="card-text">Dier omschrijving - PHP</p>
        </div>
    </div>
</div>


<div class="card-columns">
                        <div class="card">
                            <a href="photo.php?id=<?php echo $photo->FotoID; ?>">
                                <img class="card-img-top" src="<?php echo 'admin' . DS . $photo->picture_path(); ?>" alt="" class="img-fluid">
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">Card title - PHP</h5>
                                <p class="card-text">Dier omschrijving - PHP</p>
                            </div>
                        </div>
                    </div>

<?php

include("includes/footer.php");

?>