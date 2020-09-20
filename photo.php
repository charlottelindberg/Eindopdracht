<?php
include("includes/header.php");
// require_once ("admin/includes/init.php");


$foto = Photo::find_by_id($_GET['id'], 'FotoID');

if (isset($_POST['submit'])) {
    $Gebruiker = trim($_POST['Gebruiker']);
    $Bericht = trim($_POST['Bericht']);

    $new_comment = Comment::create_comment($foto->FotoID, $Gebruiker, $Bericht);

    if ($new_comment && $new_comment->save()) {
        redirect("photo.php?id={$foto->FotoID}");
    } else {
        $message = "There are some problems saving";
    }
} else {
    $Gebruiker = "";
    $Bericht = "";
}

$comments = Comment::find_the_comment($foto->FotoID);
?>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">

            <!-- Title -->
            <h1 class="mt-4"><?php echo $foto->title; ?></h1>

            <p class="lead">
                door de <strong>Vind een Dier</strong> crew
            </p>
            <hr>

            <!-- Datuum includeren  -->
            <!-- <?php echo "Gepubliceerd op " . date("l") . " " . date("Y-m-d") . "<br>"; ?> -->
            <!-- <hr>  -->


            <img class="img-fluid rounded" src="<?php echo 'admin' . DS . $foto->picture_path(); ?>" alt="">
            <hr>
            <!-- Post Content -->
            <?php echo $foto->description; ?>
            <hr>

            <!-- Comments Form -->
            <div class="card my-4 bg-light mx-auto">
                <h5 class="card-header">Laat een bericht achter!</h5>
                <div class="card-body">
                    <form method="post">
                        <div class="form-group">
                            <br>
                            <label for="Gebruiker"> Gebruikernaam:</label>
                            <input type="text" name="Gebruiker" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Bericht"> Bericht:</label>
                            <textarea class="form-control" name="Bericht" rows="3"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-secondary btn-block">Submit</button>
                    </form>
                </div>
            </div>

            <?php foreach ($comments as $comment) : ?>
                <div class="media mb-4">
                    <img class="d-flex mr-3 rounded-circle" src="http://placeimg.com/50/50/people" alt="">

                    <div class="media-body">
                        <h5 class="mt-0"><?php echo $comment->Gebruiker; ?>

                            <!-- tekst 'op foto' includeren  -->
                            <!-- op foto <?php echo $comment->FotoID; ?> -->
                        </h5>
                        <p><?php echo $comment->Bericht; ?></p>
                        <hr>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>


<?php include('includes/footer.php') ?>