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

// $dier = Dieren::find_by_id($_GET['id'], 'DierenID');

// $dier = Dieren::find_the_animal();

$new_dier = new Dieren;
$dier = $new_dier->find_the_animal($_GET['id'], 'DierenID');
// var_dump($new_dier);
// var_dump($dier);
// echo $dier[0]->Naam;

?>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-12">

            <!-- Title -->
            <h1 class="mt-4"><?php echo $dier[0]->Naam; ?></h1>
            

            <p class="lead">
                door de <strong>Vind een Dier</strong> crew
            </p>
            <hr>

            <!-- Datuum includeren  -->
            Gepubliceerd op: <?php echo $dier[8]->Datum; ?>
            <p></p> 

            <!-- Foto  -->
            <img class="img-fluid rounded" src="<?php echo 'admin' . DS . $foto->picture_path(); ?>" alt="">
            <hr>

            <!-- Post Content -->

            Leeftijd: <?php echo $dier->Leeftijd; ?>
            <br>
            Geslacht: <?php echo $dier->Geslacht; ?>
            <br>
            Gesteriliseerd: <?php echo $dier->Gesteriliseerd; ?>
            <br>
            Ras: <?php echo $dier->Ras; ?>
            <br>
            Asiel: <?php echo $dier->Asiel; ?>
            <br>
            Geadopteerd: <?php echo $dier->Geadopteerd; ?>
            <br>
            Omschrijving:
            <p>
            <?php echo $dier->Omschrijving; ?>
            </p>
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