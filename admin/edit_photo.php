<?php include("includes/header.php");

if(!$session->is_signed_in()){
    redirect('login.php');
}
$foto = Photo::find_all();
if(empty($_GET['id'])){
    redirect('photos.php');
}else{
    $photo = Photo::find_by_id($_GET['id']);
    if(isset($_POST['update'])){
        if($photo){
            $photo->FotoID = $_POST['FotoID'];
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
                        <label for="FotoID">FotoID</label>
                        <input type="text" name="FotoID" class="form-control" value="<?php echo $photo->FotoID; ?>">
                    </div>
                    <div class="form-group">
                        <a href="#" class="thumbnail"><img src="<?php echo $photo->picture_path(); ?>" alt=""></a>
                    </div>
                    <div class="form-group">
                        <label for="Bestandsnaam">Caption</label>
                        <input type="text" name="Bestandsnaam" class="form-control" value="<?php echo $photo->Bestandsnaam; ?>">
                    </div>
                    <div class="form-group">
                        <label for="alternate_text">Alternate text</label>
                        <input type="text" name="alternate_text" class="form-control" value="<?php echo $photo->alternate_text; ?>">
                    </div>
                    <div class="form-group">
                        <label for="Dier_ID">Description</label>
                        <textarea class="form-control" name="Dier_ID" id="" cols="30" rows="10"><?php echo $photo->Dier_ID; ?></textarea>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="photo-info-box">
                        <div class="info-box-header">
                            <h4>Save <span id="toggle" class="fas fa-arrow-up"></span></h4>
                        </div>
                        <div class="inside">
                            <div class="box-inner">
                                <p class="text">
                                    <span class="fas fa-calendar">Uploaded on: April, 15, 2019 @ 7:54</span>
                                </p>
                                <p class="text">
                                    <span class="data photo_id_box">Uploaded on: April, 15, 2019 @ 7:54</span>
                                </p>
                                <p class="text">
                                    Photo id: <span class="data">34</span>
                                </p>
                                <p class="text">
                                    Filename: <span class="data">image.jpg</span>
                                </p>
                                <p class="text">
                                    <label for="type">File Type</label>
                                    <input readonly type="text" name="type" class="form-control" value="<?php echo $photo->type; ?>">
                                </p>
                                <p class="text">
                                    <label for="size">File Size</label>
                                    <input readonly type="text" name="size" class="form-control" value="<?php echo $photo->size; ?>">
                                </p>
                            </div>
                            <div class="info-box-footer float-left">
                                <div class="info-box-delete pull-left">
                                    <a href="delete_photo.php?id=<?php echo $photo->id; ?>" class="btn btn-danger btn-lg">Delete</a>
                                </div>
                                <div class="info-box-update float-right">
                                    <input type="submit" name="update" value="update" class="btn btn-primary btn-lg">
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
