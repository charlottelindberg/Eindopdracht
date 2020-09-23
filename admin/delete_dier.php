<?php
include("includes/header.php");
if(!$session->is_signed_in()){
    redirect('login.php');
}
if(empty($_GET['id'])){
    redirect('../../Eindopdracht/admin/dieren.php');
}
$photo = Photo::find_by_id($_GET['id'], 'FotoID');
if($photo){
    $photo->delete_photo();
    redirect('../../Eindopdracht/admin/dieren.php');
}else{
    redirect('../../Eindopdracht/admin/dieren.php');
}
include("includes/sidebar.php");
include("includes/content-top.php");
?>
<h1>Welkom op de delete dier pagina</h1>
<?php include("includes/footer.php");?>
