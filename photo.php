<?php
include ("includes/header.php");
require_once ("admin/includes/init.php");

// if(empty($_GET['id'])){
//     redirect('index.php');
// }

$foto = Photo::find_by_id($_GET['id'], 'FotoID');
// var_dump('FotoID');

if(isset($_POST['submit'])){
    $Gebruiker = trim($_POST['Gebruiker']);
    $Bericht = trim($_POST['Bericht']);

    $new_comment = Comment::create_comment($foto->FotoID, $Gebruiker, $Bericht);

    if($new_comment && $new_comment->save()){
        redirect("photo.php?id={$foto->FotoID}");
    }else{
        $message = "There are some problems saving";
    }
}else{
    $Gebruiker = "";
    $Bericht = "";
}

$comments = Comment::find_the_comment($foto->FotoID);
?>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Post Content Column -->
        <div class="col-lg-8">

            <!-- Title -->
            <h1 class="mt-4"><?php echo $foto->title; ?></h1>
            <!-- Gebruiker -->
            <p class="lead">
                by
                <a href="#">Start Bootstrap</a>
            </p>
            <hr>
            <!-- Date/Time -->
            <p>Posted on January 1, 2019 at 12:00 PM</p>
            <hr>
            <!-- Preview Image -->
            <img class="img-fluid rounded" src="<?php echo 'admin'.DS.$foto->picture_path(); ?>" width="300" height="300" alt="">
            <hr>
            <!-- Post Content -->
            <p>
                <?php echo $foto->description; ?>
            </p>
            <hr>

            <!-- Comments Form -->
            <div class="card my-4">
                <h5 class="card-header">Leave a Comment:</h5>
                <div class="card-Bericht">
                    <form method="post">
                        <div class="form-group">
                            <label for="Gebruiker">Gebruiker</label>
                            <input type="text" name="Gebruiker" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" name="Bericht" rows="3"></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>

            <?php foreach ($comments as $comment): ?>
            <!-- Single Comment -->
            <div class="media mb-4">
                <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt="">
                <div class="media-Bericht">
                    <h5 class="mt-0"><?php echo $comment->Gebruiker; ?> on photo <?php echo $comment->FotoID; ?></h5>
                    <p><?php echo $comment->Bericht; ?></p>
                </div>
            </div>
            <?php endforeach; ?>

        </div>

        <!-- Sidebar Widgets Column -->
        <div class="col-md-4">

            <!-- Search Widget -->
            <div class="card my-4">
                <h5 class="card-header">Search</h5>
                <div class="card-Bericht">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                <button class="btn btn-secondary" type="button">Go!</button>
              </span>
                    </div>
                </div>
            </div>

            <!-- Categories Widget -->
            <div class="card my-4">
                <h5 class="card-header">Categories</h5>
                <div class="card-Bericht">
                    <div class="row">
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">Web Design</a>
                                </li>
                                <li>
                                    <a href="#">HTML</a>
                                </li>
                                <li>
                                    <a href="#">Freebies</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6">
                            <ul class="list-unstyled mb-0">
                                <li>
                                    <a href="#">JavaScript</a>
                                </li>
                                <li>
                                    <a href="#">CSS</a>
                                </li>
                                <li>
                                    <a href="#">Tutorials</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Side Widget -->
            <div class="card my-4">
                <h5 class="card-header">Side Widget</h5>
                <div class="card-Bericht">
                    You can put anything you want inside of these side widgets. They are easy to use, and feature the new Bootstrap 4 card containers!
                </div>
            </div>

        </div>

    </div>
    <!-- /.row -->

</div>
<!-- /.container -->

<?php include('includes/footer.php') ?>

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>


</html>