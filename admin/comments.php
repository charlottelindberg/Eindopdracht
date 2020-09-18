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
            <!-- <td><a href="add_comment.php" class="btn btn-primary rounded-0"><i class="fas fa-comment"></i> Add Comment</a></td> -->
            <table class="table table-header">
                <thead>
                <tr>
                    <!-- <th>CommentID</th> -->
                    <th>Foto</th>
                    <th>Geruiker</th>
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
                        <td><a href="delete_comment.php?id=<?php echo $comment->CommentID; ?>"
                               class="btn btn-danger rounded-0"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>
