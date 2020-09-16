<?php include("includes/header.php");

if(!$session->is_signed_in()){
    redirect('login.php');
}

    $foto = new Photo();
    if(isset($_POST['submit'])){
        if($foto){
            $foto->Bestandsnaam = $_POST['Bestandsnaam'];
            $foto->Dier_ID = $_POST['Dier_ID'];
            $foto->set_file($_FILES['file']);
            $foto->save();


        }
    }
?>

<?php include("includes/sidebar.php"); ?>

<?php include("includes/content-top.php");?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Welkom op de 'Foto Toevoegen' pagina</h2>
            <form action="add_photo.php" method="post" enctype="multipart/form-data">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="Bestandsnaam">Bestandsnaam</label>
                        <input type="text" name="Bestandsnaam" class="form-control">
                    </div>
                                     
                    <div class="form-group">
                        <label for="Adres">Type van dier</label>
                        <select name="Dier_ID" class="form-control">
                            <option selected>Kies een dierensoort</option>
                            <option value="1">Hond</option>
                            <option value="2">Kat</option>
                            <option value="3">Konijn</option>
                            <option value="4">Paard</option>
                            <option value="4">Vogel</option>
                            <option value="4">Knaagdier</option>
                            <option value="4">Reptiel</option>
                            <option value="4">Andere</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="file">Foto toevoegen</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <input type="submit" name="submit" value="Foto toevoegen" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>