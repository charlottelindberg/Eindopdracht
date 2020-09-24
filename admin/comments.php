<?php include("includes/header.php");

if(!$session->is_signed_in()){
    redirect('login.php');
}
$comments = Comment::find_all();
?>

<?php include("includes/sidebar.php"); ?>

<?php include("includes/content-top.php");?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Kommentaren - Overzicht</h2>
            <table class="table table-header">
                <thead>
                <tr>
                    <!-- <th>CommentID</th> -->
                    <th>Foto</th>
                    <th>Geruiker</th>
                    <th>Bericht</th>
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