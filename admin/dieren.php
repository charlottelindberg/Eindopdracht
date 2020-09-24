<?php include("includes/header.php");

if(!$session->is_signed_in()){
    redirect('login.php');
}
$foto = Photo::find_all();
?>

<?php include("includes/sidebar.php"); ?>

<?php include("includes/content-top.php");?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Dieren - Overzicht</h2>
            <td><a href="add_dier.php" class="btn btn-primary rounded-0"><i class="fas fa-user-plus"></i> Nieuwe Dier Toevoegen</a></td>
            <table class="table table-header">
                <thead>
                <tr>
                    <th>Photo</th>
                    <th>FotoID</th>
                    <th>Bestandsnaam</th>
                    <th>Dierensoort</th>
                    <th>Comments</th>
                    <th>View?</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($foto as $photo): ?>
                <tr>
                    <td><img src="<?php echo $photo->picture_path(); ?>" height="62" width="62" alt=""></td>
                    <td><?php echo $photo->FotoID; ?></td>
                    <td><?php echo $photo->Bestandsnaam; ?></td>
                    <td><?php echo $photo->Dier_ID; ?></td>
                    
                    <td><a href="comments_photo.php?id=<?php echo $photo->FotoID;?>">
                            <?php
                            $comments = Comment::find_the_comment($photo->FotoID);
                            echo count($comments);
                            ?>
                        </a></td>

                        <!-- buttons  -->
                    <td><a href="../photo.php?id=<?php echo $photo->FotoID; ?>"
                           class="btn btn-danger rounded-0"><i class="fas fa-eye"></i></a></td>
                </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>
