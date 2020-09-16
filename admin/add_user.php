<?php include("includes/header.php");

if(!$session->is_signed_in()){
    redirect('login.php');
}

    $user = new User();
    if(isset($_POST['submit'])){
        if($user){
            $user->Username = $_POST['Username'];
            $user->Password = $_POST['Password'];
            $user->Naam = $_POST['Naam'];
            $user->Adres = $_POST['Adres'];
            $user->Status = $_POST['Status'];
            $user->set_file($_FILES['file']);
            $user->save_user_and_image();

        }
    }
?>

<?php include("includes/sidebar.php"); ?>

<?php include("includes/content-top.php");?>

<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <h2>Welkom op de 'User Toevoegen' pagina</h2>
            <form action="add_user.php" method="post" enctype="multipart/form-data">
                <div class="col-md-8">
                    <div class="form-group">
                        <label for="Username">Username</label>
                        <input type="text" name="Username" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="Password" name="Password" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Naam">Naam</label>
                        <input type="text" name="Naam" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Adres">Adres</label>
                        <input type="text" name="Adres" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="Adres">Status</label>
                        <select name="Status" class="form-control">
                            <option selected>Kies een status</option>
                            <option value="1">Dierenasiel</option>
                            <option value="2">Opvangcentra</option>
                            <option value="3">Particuleer</option>
                            <option value="4">Dierenarts</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="file">User image</label>
                        <input type="file" name="file" class="form-control">
                    </div>
                    <input type="submit" name="submit" value="Add User" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
</div>

<?php include("includes/footer.php");?>