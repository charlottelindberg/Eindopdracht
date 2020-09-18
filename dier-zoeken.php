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

<p></p>

<?php foreach ($photos as $photo) : ?>

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

<?php endforeach; ?>



<div class="row ">
    <div class="col-12">
        <ul class="pagination ">
            <?php
            if ($paginate->page_total() > 1) {
                if ($paginate->has_next()) {
                    echo "<li class='next'><a href='dier-zoeken.php?page={$paginate->next()}'>Next</a></li>";
                }
                for ($i = 1; $i <= $paginate->page_total(); $i++) {
                    if ($i == $paginate->current_page) {
                        echo "<li class='active'><a href='dier-zoeken.php?page={$i}'> {$i} </a> </li>";
                    } else {
                        echo "<li><a href='dier-zoeken.php?page={$i}'> {$i} </a> </li>";
                    }
                }
                if ($paginate->has_previous()) {
                    echo "<li class='previous'><a href='dier-zoeken.php?page={$paginate->previous()}'>Previous</a></li>";
                }
            }
            ?>
        </ul>
    </div>
</div>


<?php

include("includes/footer.php");

?>