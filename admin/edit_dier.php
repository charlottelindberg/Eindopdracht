<?php include("includes/header.php");

if (!$session->is_signed_in()) {
    redirect('login.php');
}
$foto = Photo::find_all();
if (empty($_GET['id'])) {
    redirect('../../Eindopdracht/admin/dieren.php');
} elseif (empty($_GET['id'])) {
    $photo = Photo::find_by_id($_GET['id'], 'FotoID');
    if (isset($_POST['update'])) {
        if ($photo) {
            $photo->Bestandsnaam = $_POST['Bestandsnaam'];
            $photo->Dier_ID = $_POST['Dier_ID'];
            $photo->update();
        }
    }
} else {
    $dier = new Dieren();
    if(isset($_POST['update'])){
        if($dier){
            $dier->Naam = $_POST['Naam'];
            $dier->Leeftijd = $_POST['Leeftijd'];
            $dier->Geslacht = $_POST['Geslacht'];
            $dier->Gesteriliseerd = $_POST['Gestereliseerd'];
            $dier->Ras = $_POST['Ras'];
            $dier->Omschrijving = $_POST['Omschrijving'];
            $dier->Asiel = $_POST['Asiel'];
            $dier->Geadopteerd = $_POST['Geadopteerd'];
            $dier->Datum = $_POST['Datum'];
            $dier->update();
}
    }
}

?>

<?php include("includes/sidebar.php"); ?>

<?php include("includes/content-top.php"); ?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Welkom op de dier wijzigen pagina</h2>

            <form action="edit_dier.php" method="post" enctype="multipart/form-data">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="Naam">Naam van het dier</label>
                        <input type="text" name="Naam" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Leeftijd">Leeftijd</label>
                        <input type="text" name="Leeftijd" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Geslacht">Geslacht</label>
                        <select name="Geslacht" class="form-control">
                            <option selected>Kies een optie</option>
                            <option value="1">Manneke</option>
                            <option value="2">Vrouwke</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Gestereliseerd">Gestereliseerd</label>
                        <select name="Gestereliseerd" class="form-control">
                            <option selected>Kies een optie</option>
                            <option value="1">Ja</option>
                            <option value="2">Nee</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Ras">Dierenras</label>
                        <input type="text" name="Ras" class="form-control">
                    </div>
                    <div class="form-group">
                       <label for="Dier_ID">Omschrijving</label>
                        <textarea class="form-control" name="Omschrijving" id="" cols="30" rows="10"><?php echo $dier->Omschrijving; ?></textarea>
                    </div>             
                    <div class="form-group">
                        <label for="Dier_ID">Type van dier</label>
                        <select name="Dier_ID" class="form-control">
                            <option selected>Kies een dierensoort</option>
                            <option value="1">Hond</option>
                            <option value="2">Kat</option>
                            <option value="3">Konijn</option>
                            <option value="4">Paard</option>
                            <option value="5">Vogel</option>
                            <option value="6">Knaagdier</option>
                            <option value="7">Reptiel</option>
                            <option value="8">Andere</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Asiel">Asiel</label>
                        <select name="Asiel" class="form-control">
                            <option selected>Kies een asiel</option>
                            <option value="1">Het Knaagtandje</option>
                            <option value="2">Pelsjes & Pootjes</option>
                            <option value="3">Dieropvang Lubbeek</option>
                            <option value="4">Dierenasiel Meerbeke</option>
                            <option value="5">De Snorhaar</option>
                            <option value="6">Forrest & Friends</option>
                            <option value="7">'t Poezenhuisopvang</option>
                            <option value="8">Andere</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="Geadopteerd">Geadopteerd</label>
                        <select name="Geadopteerd" class="form-control">
                            <option selected>Kies een optie</option>
                            <option value="1">Nee</option>
                            <option value="2">Ja</option>
                        </select>
                    </div>
                   

                    <div class="info-box-footer">
                    <div class="info-box-update">
                        <a href="edit_dier.php?id=<?php echo $photo->FotoID; ?>" class="btn btn-primary btn-lg">Dier wijzigen</a>
                    </div>
                </div>
                </div>

            </form>

        </div>
    </div>
</div>

<?php include("includes/footer.php"); ?>