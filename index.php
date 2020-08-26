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

    <!-- begin search bar  -->

    <div class="container">
        <form action="#" method="post" novalidate="novalidate">
            <div class="row justify-content-md-center">
                <!-- <div class="col col-lg-2"> -->
                <div class="col-md-auto">
                    <select class="form-control search-slt" id="dierFinderSearchRegio">
                        <option>Kies jouw regio</option>
                        <option>Alle regios</option>
                        <option>West Vlaanderen</option>
                        <option>Oost Vlaanderen</option>
                        <option>Vlaams-Brabant</option>
                    </select>
                </div>
                <div class="col-md-auto">
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
                <!-- <div class="col col-lg-2"> -->
                <div class="col-md-auto">
                    <button type="button" class="btn btn-primary">Zoeken</button>
                    <p></p>
                </div>
            </div>
    </div>
    <p></p>


    <!-- end search bar  -->
    <!-- end jumbotron -->


    <hr>

    <!-- start recently added section  -->

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h3>Recent toegevoegde dieren</h3>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <div class="text-center"> <img src="http://placekitten.com/72/72" alt="Thumbnail Image 1">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center"> <img src="http://placekitten.com/72/72" alt="Thumbnail Image 1">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center"> <img src="http://placekitten.com/72/72" alt="Thumbnail Image 1">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <div class="text-center"> <img src="http://placekitten.com/72/72" alt="Thumbnail Image 1">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center"> <img src="http://placekitten.com/72/72" alt="Thumbnail Image 1">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center"> <img src="http://placekitten.com/72/72" alt="Thumbnail Image 1">
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-4">
                            <div class="text-center"> <img src="http://placekitten.com/72/72" alt="Thumbnail Image 1">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center"> <img src="http://placekitten.com/72/72" alt="Thumbnail Image 1">
                            </div>
                        </div>
                        <div class="col-4">
                            <div class="text-center"> <img src="http://placekitten.com/72/72" alt="Thumbnail Image 1">
                            </div>
                        </div>
                    </div>
                    <hr>
                </div>

                <!-- end recently added section -->


                <!-- info tabs x3  -->

                <div class="col-md-6 col-12">
                    <h3>Over het houden van huisdieren</h3>
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
                            <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                role="tab" aria-controls="nav-contact" aria-selected="false">Reptielen</a>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
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

    <hr>

    <?php

    // include("includes/bottom-content.php");
    include("includes/footer.php");

    ?>