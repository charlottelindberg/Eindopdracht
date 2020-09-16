<?php include("includes/header.php");

if(!$session->is_signed_in()){
    redirect('login.php');
}
$foto = Photo::find_all();
if(empty($_GET['id'])){
    redirect('photos.php');
}else{
    $photo = Photo::find_by_id($_GET['id'], 'FotoID');
    if(isset($_POST['update'])){
        if($photo){
            $photo->Bestandsnaam = $_POST['Bestandsnaam'];
            $photo->Dier_ID = $_POST['Dier_ID'];
            $photo->update();
        }
    }
}
?>

<?php include("includes/sidebar.php"); ?>

<?php include("includes/content-top.php");?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Welkom op de edit photo pagina</h2>
            <form action="edit_photo.php?id=<?php echo $photo->id; ?>" method="post">
                <div class="col-md-8">
                    <div class="form-group">
                        <a href="#" class="thumbnail"><img src="<?php echo $photo->picture_path(); ?>" height="400" width="auto" alt=""></a>
                    </div>
                    <div class="form-group">
                        <label for="Bestandsnaam">Naam</label>
                        <input type="text" name="Bestandsnaam" class="form-control" value="<?php echo $photo->Bestandsnaam; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Dier_ID">Omschrijving</label>
                        <textarea class="form-control" name="Dier_ID" id="" cols="30" rows="10"><?php echo $photo->Dier_ID; ?></textarea>
                    </div>
                </div>
                                           
                            
                            <div class="info-box-footer">
                                <div class="info-box-delete">
                                    <a href="delete_photo.php?id=<?php echo $photo->FotoID; ?>" class="btn btn-danger btn-lg">Delete</a>
                                </div>
                                <div class="info-box-update">
                                <a href="edit_photo.php?id=<?php echo $photo->FotoID; ?>"
                                   class="btn btn-primary btn-lg">Update</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>
