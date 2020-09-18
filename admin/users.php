<?php include("includes/header.php");

if(!$session->is_signed_in()){
    redirect('login.php');
}
$gebruikers = User::find_all();
?>

<?php include("includes/sidebar.php"); ?>

<?php include("includes/content-top.php");?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Gebruikers - Overzicht</h2>
            <td><a href="add_user.php" class="btn btn-primary rounded-0"><i class="fas fa-user-plus"></i> Gebruiker Toevoegen</a></td>
            <table class="table table-header">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Foto</th>
                    <th>Username</th>
                    <th>Naam</th>
                    <th>Adres</th>
                    <th>Wijzig?</th>
                    <th>Verwijderen?</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($gebruikers as $user): ?>
                    <tr>
                        <td><?php echo $user->GebruikerID; ?></td>
                        <td><img src="<?php echo $user->image_path_and_placeholder(); ?>" height="40" width="40" alt=""></td>

                        <td><?php echo $user->Username; ?></td>
                        <td><?php echo $user->Naam; ?></td>
                        <td><?php echo $user->Adres; ?></td>
                        <td><a href="edit_user.php?id=<?php echo $user->GebruikerID; ?>"
                               class="btn btn-danger rounded-0"><i class="fas fa-edit"></i></a></td>
                        <td><a href="delete_user.php?id=<?php echo $user->GebruikerID; ?>"
                               class="btn btn-danger rounded-0"><i class="fas fa-trash-alt"></i></a></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>
