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
<!-- eind jumbotron  -->

<!-- begin search bar - dieren -->
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
<!-- eind search bar - dieren  -->

<!-- begin hero carousel -->
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
</div>
<!-- eind hero carousel  -->


<!-- begin recently added sectie  -->
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
<!-- eind recently added sectie -->


<!-- begin dieren info - tabs  -->
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
                        <p>
                        <ul>
                        <li>Heb je de ruimte en de tijd om een hond dagelijks vrij buiten te laten bewegen?</li>
                        <li>Ga je graag wandelen, ook als het regent of koud is?</li>  
                        <li>Wil je dagelijks de uitwerpselen opruimen en/of de hond zindelijk maken?</li> 
                        <li>Ben je bereid om per maand 85 euro kosten (per jaar 700 - 1300 euro) te betalen ?</li>
                        <li>Wil je de komende 10 – 20 jaar voor de hond zorgen?</li>
                        <li>Heb je een oplossing voor de hond als je op vakantie gaat of een lange dag weg ben?</li>
                        <li>Kan je er tegen dat de hond veel vuil maakt of soms iets stuk maakt?</li>
                        <li>Heb je genoeg ruimte binnen en/of is de tuin hoog genoeg omheind?</li>
                        </ul>
                        Als je op één van deze vragen nee  antwoordt, dan is de adoptie van een hond misschien toch geen goed idee.
                        </p>
                        
                    </div>
                    <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                        <!-- <p class="text-center mt-2"><img src="images/3b536b.gif" alt=""></p> -->
                        <p>
                        Voorkom probleemgedrag en schade aan de meubels door je huis katvriendelijk in te richten. Van alle benodigdheden heb je er één meer nodig dan het aantal katten in huis. Voor één kat zijn er dus twee kattenbakken nodig, voor twee katten drie kattenbakken enzovoort.
                        <p>
                        Zet alle kattenspullen verspreid in huis neer. Zet bijvoorbeeld niet alle kattenbakken bij elkaar in de berging. Zo voorkom je dat één kat de toegang naar de kattenbakken voor de andere katten kan blokkeren door voor de deur te gaan zitten.
                        </p>
                        Het voer en het drinken mogen niet in de buurt van de kattenbak staan. Dit kan er toe   leiden dat de kat zijn behoefte op ongewenste plaatsen in huis doet. Zorg ook dat het voer en het drinken niet naast mekaar staan: laat er minstens 1,5 meter tussen. Katten houden er niet van om te drinken in de buurt van hun eten. Daardoor drinken ze soms te weinig, wat de kans op blaasproblemen verhoogt.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                        <!-- <p class="text-center mt-2"><img src="images/3b536b.gif" alt=""></p> -->
                        <p>
                        In tegenstelling tot wat vaak wordt gedacht, zijn konijnen <strong> geen goede huisdieren voor kinderen</strong>. De meeste konijnen vinden oppakken en knuffelen niet leuk. Ze kunnen dan krabben en bijten en zelfs hun eigen rug breken als ze spartelen bij het optillen. 
                        <p>
                        Door veel tijd aan het konijn te besteden en er rustig mee om te gaan, kan het wel tam worden en leren dat aaien prettig kan zijn. Konijnen kunnen ook allerlei trucjes leren en er wordt zelfs aan konijnen-agility gedaan. Konijnen zijn dus vooral leuke huisdieren voor mensen die er ofwel veel mee willen bezig zijn, ofwel er vooral willen naar kijken.</p>
                        </p>
                        <p>
                        Konijnen hebben veel ruimte nodig. Combineer een hok of kooi met een grote (buiten)ren en richt deze in met veel verstopplekjes en verschillende niveaus.
                        </p>
                        <p>
                        Een konijn is een groepsdier. <strong> Hou er minstens twee</strong>. De combinatie van een vrouwelijk konijn en een gecastreerd mannelijk konijn gaat het best. Twee mannetjes of twee vrouwtjes samen geeft meestal ruzie. 
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- einde dieren info - tabs  -->


<?php

// include("includes/bottom-content.php");
include("includes/footer.php");

?>