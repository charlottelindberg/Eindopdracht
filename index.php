<?php
include("includes/header.php");
// include("includes/top-content.php") 
?>

<!-- begin jumbotron  -->
<div class="jumbotron text-center">
    <p></p>
    <h1>Vind <strong>jouw</strong> dier!</h1>
    <p>Momenteel zijn er <strong>709</strong> dieren beschikkbaar voor adoptie!</p>
    <p></p>
</div>
<!-- end jumbotron  -->

<!-- begin search bar  -->
<div class="container justify-content-center">
    <form action="#" method="post" novalidate="novalidate">
        <div class="row justify-content-md-center">
            <!-- <div class="col col-lg-2"> -->
            <div class="col-md-auto align-content-stretch flex-wrap">
                <button type="button" class="btn btn-secondary">Ik zoek: </button>
                <p></p>
            </div>
            <div class="col-md-auto align-content-stretch flex-wrap">
                <select class="form-control search-slt" id="dierFinderSearchDier">
                    <option>Kies een diersoort</option>
                    <option>Alle dieren</option>
                    <option>Honden</option>
                    <option>Katten</option>
                    <option>Konijnen</option>
                    <option>Vogels</option>
                    <option>Reptielen</option>
                </select>
            </div>
            <div class="col-md-auto align-content-stretch flex-wrap">
                <button type="button" class="btn btn-secondary"> in </button>
                <p></p>
            </div>
            <div class="col-md-auto align-content-stretch flex-wrap">
                <select class="form-control search-slt" id="dierFinderSearchRegio">
                    <option>Kies jouw regio</option>
                    <option>Alle regios</option>
                    <option>West Vlaanderen</option>
                    <option>Oost Vlaanderen</option>
                    <option>Vlaams-Brabant</option>
                </select>
            </div>

            <!-- <div class="col col-lg-2"> -->
            <div class="col-md-auto align-content-stretch flex-wrap">
                <button type="button" class="btn btn-secondary">Zoeken →</button>
                <p></p>
            </div>
        </div>
</div>
<p></p>
<!-- end search bar  -->

<!-- start hero carousel -->

<div class="pb-5 container mt-3">
    <div class="row">
        <div class="col-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleControls" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="1"></li>
                    <li data-target="#carouselExampleControls" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="http://placeimg.com/1920/500/animals" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="bg-dark text-white">Snowball
                                <p>Twee jaar oud</p>
                            </h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://placeimg.com/1920/500/animals" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="bg-dark text-white">Snowball
                                <p>Twee jaar oud</p>
                            </h5>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="http://placeimg.com/1920/500/animals" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5 class="bg-dark text-white">Snowball
                                <p>Twee jaar oud</p>
                            </h5>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
    <!-- <hr> -->
</div>

<!-- end hero carousel  -->


<!-- start recently added section  -->

<section class="bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-12">
                <h3 class="pt-3 text-center">
                    Recent toegevoegde dieren
                </h3>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <div class="text-center"> <img src="http://placeimg.com/100/100/animals"
                                alt="Thumbnail Image 1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center"> <img src="http://placeimg.com/100/100/animals"
                                alt="Thumbnail Image 1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center"> <img src="http://placeimg.com/100/100/animals"
                                alt="Thumbnail Image 1">
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <div class="text-center"> <img src="http://placeimg.com/100/100/animals"
                                alt="Thumbnail Image 1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center"> <img src="http://placeimg.com/100/100/animals"
                                alt="Thumbnail Image 1">
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center"> <img src="http://placeimg.com/100/100/animals"
                                alt="Thumbnail Image 1">
                        </div>
                    </div>
                </div>
                <hr>
            </div>

            <!-- end recently added section -->


            <!-- info tabs x3  -->

            <div class="col-md-6 col-12">
                <h3 class="pt-3 text-center">
                    Houden van huisdieren
                </h3>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                            role="tab" aria-controls="nav-home" aria-selected="true">Honden</a>
                        <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                            role="tab" aria-controls="nav-profile" aria-selected="false">Katten</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                            role="tab" aria-controls="nav-contact" aria-selected="false">Konijnen</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                            role="tab" aria-controls="nav-contact" aria-selected="false">Paarden</a>
                        <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                            role="tab" aria-controls="nav-contact" aria-selected="false">Vogels</a>
                        <!-- <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                            role="tab" aria-controls="nav-contact" aria-selected="false">Reptielen</a> -->
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <!-- <p class="text-center mt-2"><img src="images/3b536b.gif" alt=""></p> -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus maxime aut ea impedit
                            voluptates
                            aperiam dolor laborum officiis autem aspernatur! Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit. Delectus, alias, repudiandae sunt illo consequatur aperiam doloribus nesciunt ut
                            deserunt ipsa est
                            tempora nihil. Totam eveniet aperiam debitis fugit ipsa doloremque. Lorem ipsum dolor
                            sit amet,
                            consectetur adipisicing elit. Optio sequi dolorem suscipit assumenda molestiae
                            voluptatem qui
                            consequuntur magni? Deleniti, corporis.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <!-- <p class="text-center mt-2"><img src="images/3b536b.gif" alt=""></p> -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus maxime aut ea impedit
                            voluptates
                            aperiam dolor laborum officiis autem aspernatur! Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit. Delectus, alias, repudiandae sunt illo consequatur aperiam doloribus nesciunt ut
                            deserunt ipsa est
                            tempora nihil. Totam eveniet aperiam debitis fugit ipsa doloremque. Lorem ipsum dolor
                            sit amet,
                            consectetur adipisicing elit. Optio sequi dolorem suscipit assumenda molestiae
                            voluptatem qui
                            consequuntur magni? Deleniti, corporis.</p>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <!-- <p class="text-center mt-2"><img src="images/3b536b.gif" alt=""></p> -->
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minus maxime aut ea impedit
                            voluptates
                            aperiam dolor laborum officiis autem aspernatur! Lorem ipsum dolor sit amet, consectetur
                            adipisicing
                            elit. Delectus, alias, repudiandae sunt illo consequatur aperiam doloribus nesciunt ut
                            deserunt ipsa est
                            tempora nihil. Totam eveniet aperiam debitis fugit ipsa doloremque. Lorem ipsum dolor
                            sit amet,
                            consectetur adipisicing elit. Optio sequi dolorem suscipit assumenda molestiae
                            voluptatem qui
                            consequuntur magni? Deleniti, corporis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- info tabs x3  -->


<?php

// include("includes/bottom-content.php");
include("includes/footer.php");

?>