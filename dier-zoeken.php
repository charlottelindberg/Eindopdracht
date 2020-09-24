<!-- card layout support van bootstrap  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/masonry/4.2.2/masonry.pkgd.min.js" integrity="sha384-GNFwBvfVxBkLMJpYMOABq3c+d3KnQxudP/mGPkzpZSTYykLBNsZEnG2D9G/X/+7D" crossorigin="anonymous" async></script>

<?php
include("includes/header.php");
include("includes/top-filter.php");

//Set up a Paginate object
$page = !empty($_GET['page']) ? (int)$_GET['page'] : 1;
$items_per_page = 6;
$paginate = new Paginate($page, $items_per_page);

//Lookup dieren with the Paginate as input
$dieren = Dieren::find_per_page($paginate);

//Lookup all photos
$photos = Photo::find_all();



?>

<p></p>

<div class="card-columns">
<?php 
	foreach ($dieren as $dier) : 
		$photo = $dier->find_matching_photo($photos);
?>
    <div class="card">
    	<?php if($photo != null) : ?>
        	<a href="photo.php?id=<?php $photo->FotoID?>">
            	<img class="card-img-top" src="<?php echo 'admin' . DS . $photo->picture_path(); ?>" alt="" class="img-fluid">
        	</a>
        <?php endif; ?>
        <div class="card-body">
            <h5 class="card-title"><?php echo $dier->Naam; ?></h5>
            <!-- <p class="card-text"><?php echo $dier->Omschrijving; ?></p> -->
        </div>
    </div>


<?php endforeach; ?>
</div>




<div class="row ">
    <div class="col-12">
        <ul class="pagination ">
            <?php
            if ($paginate->total_pages > 1) {
                if ($paginate->has_next()) {
                    echo "<li class='next'><a href='dier-zoeken.php?page={$paginate->next()}'>Next</a></li>";
                }
                for ($i = 1; $i <= $paginate->total_pages; $i++) {
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