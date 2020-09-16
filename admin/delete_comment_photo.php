<?php
include("includes/header.php");
if(!$session->is_signed_in()){
    redirect('login.php');
}
if(empty($_GET['id'])){
    redirect('comments.php');
}
$comment = Comment::find_by_id($_GET['id'], 'FotoID'); 
// onduidelijk of dit fotoid of commentid moet zijn

if($comment){
    $comment->delete();
    redirect('comments_photo.php?id={$comment->photo_id}');
}else{
    redirect('comments_photo.php?id={$comment->photo_id}');
}
include("includes/sidebar.php");
include("includes/content-top.php");
?>
<h1>Welkom op de delete comment pagina</h1>
<?php include("includes/footer.php");?>
