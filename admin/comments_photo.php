<?php include("includes/header.php");

if(!$session->is_signed_in()){
    redirect('login.php');
}
if (empty($_GET['id'])){
    redirect("photos.php");
}
$comments = Comment::find_the_comment($_GET['id'], 'CommentID');
?>

<?php include("includes/sidebar.php"); ?>

<?php include("includes/content-top.php");?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Kommentaren voor deze foto</h2>
            <table class="table table-header">
                <thead>
                <tr>
                    <th>Gebruiker</th>
                    <th>Bericht</th>
                    <th>Delete?</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($comments as $comment): ?>
                    <tr>
                        <td><?php echo $comment->FotoID; ?></td>
                        <td><?php echo $comment->Gebruiker; ?></td>
                        <td><?php echo $comment->Bericht; ?></td>
                        
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>
