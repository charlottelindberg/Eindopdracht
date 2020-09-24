<?php
include("includes/header.php");

$sql = "SELECT * FROM `foto` ";
$sql .= "ORDER BY `FotoID` DESC ";
$sql .= "LIMIT 9;";

$photos = Photo::find_this_query($sql);

// aantal dieren in databank 
$berekening = "SELECT COUNT(dierenID) AS TOTAL FROM dieren WHERE Geadopteerd = 1;";
$antaalDieren = $database->query($berekening);
if ($antaalDieren->num_rows > 0) {
    $rij = $antaalDieren->fetch_assoc();
    $totalAnimals = $rij['TOTAL'];
} else {

}

?>


<!-- begin search sectie  -->
<div class="col-lg col-12 mt-3 mb-3">
    <div class="row mx-0">
        <div class="col-12 card bg-light mx-auto">
            <h1 class="text-center pt-3">Vind <strong>jouw</strong> dier!</h1>

            <!-- insert php code ipv static nummer -->
            <p class="text-center">Momenteel zijn er <strong><?php echo $totalAnimals ;?></strong> dieren beschikkbaar voor adoptie</p>


            <hr>
            <form class="card-body text-center">
                <div class="form-group row">
                    <label for="zoekProvincies" class="col-form-label">Kies jouw regio</label>
                    <select class="form-control" name="zoekProvincies" id="zoekProvincies">
                        <option value="alleProvincies">Alle provincies</option>
                        <option value="westv">West-Vlaanderen</option>
                        <option value="oostv">Oost-Vlaanderen</option>
                        <option value="vbrabant">Vlaams Brabant</option>
                    </select>
                </div>
                <div class="form-group row">
                    <label for="zoekDierSoorten" class="col-form-label">Kies jouw diersoort</label>
                    <select class="form-control" name="zoekDierSoorten" id="zoekDierSoorten">
                        <option value="alleDieren">Alle diersoorten</option>
                        <option value="honden">Honden</option>
                        <option value="katten">Katten</option>
                        <option value="konijnen">Konijnen</option>
                        <option value="paarden">Paarden</option>
                        <option value="vogels">Vogels</option>
                        <option value="knaagdieren">Knaagdieren</option>
                        <option value="reptielen">Reptielen</option>
                        <option value="andereDieren">Andere diersoorten</option>
                    </select>
                </div>
                <p class="text-center"><a href="dier-zoeken.php" class="btn btn-secondary btn-block" role="button">Search </a></p>
            </form>
        </div>
    </div>
    <!-- end search sectie  -->



    <!-- begin recently added sectie  -->
    <section class="bg-light card mb-3 mt-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-12">
                    <h3 class="pt-3 text-center">
                        Recent toegevoegde dieren
                    </h3>
                    <hr>

                    <div class="row">
                        <?php foreach ($photos as $photo) : ?>
                            <div class="col-4">
                                <a href="photo.php?id=<?php echo $photo->FotoID; ?>">
                                    <img src="<?php echo 'admin' . DS . $photo->picture_path(); ?>" alt="" class="img-fluid img-thumbnail mx-auto d-block">
                                </a>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <!-- end recently added sectie -->


            <!-- begin dieren info - tabs  -->
            <div class="col-md-6 col-12">
                <h3 class="pt-3 text-center">
                    Zorgen voor huisdieren
                </h3>
                <hr>
                <nav>
                    <div class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">Honden</a>
                        <a class="nav-item nav-link" id="nav-katten-tab" data-toggle="tab" href="#nav-katten" role="tab" aria-controls="nav-katten" aria-selected="false">Katten</a>
                        <a class="nav-item nav-link" id="nav-konijnen-tab" data-toggle="tab" href="#nav-konijnen" role="tab" aria-controls="nav-konijnen" aria-selected="false">Konijnen</a>
                        <a class="nav-item nav-link" id="nav-kippen-tab" data-toggle="tab" href="#nav-kippen" role="tab" aria-controls="nav-kippen" aria-selected="false">Kippen</a>
                        <a class="nav-item nav-link" id="nav-paarden-tab" data-toggle="tab" href="#nav-paarden" role="tab" aria-controls="nav-paarden" aria-selected="false">Paarden</a>
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p>
                            De hond moet voldoende ruimte hebben om te lopen, te spelen en om zijn behoefte te doen.
                            De huisvesting moet veilig zijn en de hond beschermen tegen koude en hitte. Een droge en
                            comfortabele slaapplaats is verplicht.
                        </p>
                        <p>
                            Een hond is een sociaal dier. Als je één hond hebt, zorg dan voor bekende en bevriende
                            honden als vaste speel- en wandelpartners. Als je een hond een lange tijd alleen laat,
                            dan kan hij ten prooi vallen aan stress en verveling.
                        </p>
                        <p>
                            Honden hebben als ontspanning afwisselende activiteiten nodig. Ze moeten kunnen
                            snuffelen, lopen, graven, zwemmen en onderzoeken. Laat de hond dagelijks uit aan een
                            comfortabel tuig en een lange leiband. Laat de hond loslopen waar het mogelijk en
                            toegelaten is, bijvoorbeeld op een hondenweide.
                        </p>

                    </div>
                    <div class="tab-pane fade" id="nav-katten" role="tabpanel" aria-labelledby="nav-katten-tab">
                        <p>
                            Voorkom probleemgedrag en schade aan de meubels door je huis katvriendelijk in te
                            richten. Van alle benodigdheden heb je er één meer nodig dan het aantal katten in huis.
                            Voor één kat zijn er dus twee kattenbakken nodig, voor twee katten drie kattenbakken
                            enzovoort.
                            <p>
                                Zet alle kattenspullen verspreid in huis neer. Zet bijvoorbeeld niet alle kattenbakken
                                bij elkaar in de berging. Zo voorkom je dat één kat de toegang naar de kattenbakken voor
                                de andere katten kan blokkeren door voor de deur te gaan zitten.
                            </p>
                            Het voer en het drinken mogen niet in de buurt van de kattenbak staan. Dit kan er toe leiden
                            dat de kat zijn behoefte op ongewenste plaatsen in huis doet. Zorg ook dat het voer en het
                            drinken niet naast mekaar staan: laat er minstens 1,5 meter tussen. Katten houden er niet
                            van om te drinken in de buurt van hun eten. Daardoor drinken ze soms te weinig, wat de kans
                            op blaasproblemen verhoogt.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="nav-konijnen" role="tabpanel" aria-labelledby="nav-konijnen-tab">
                        <p>
                            In tegenstelling tot wat vaak wordt gedacht, zijn konijnen <strong> geen goede
                                huisdieren voor kinderen</strong>. De meeste konijnen vinden oppakken en knuffelen
                            niet leuk. Ze kunnen dan krabben en bijten en <em> zelfs hun eigen rug breken</em> als
                            ze spartelen bij het optillen.
                            <p>
                                Door veel tijd aan het konijn te besteden en er rustig mee om te gaan, kan het wel tam
                                worden en leren dat aaien prettig kan zijn. Konijnen kunnen ook allerlei trucjes leren
                                en er wordt zelfs aan konijnen-agility gedaan. <em> Konijnen zijn dus vooral leuke
                                    huisdieren voor mensen die er ofwel veel mee willen bezig zijn, ofwel er vooral
                                    willen naar kijken.</em></p>
                        </p>
                        <p>
                            Konijnen hebben veel ruimte nodig. Combineer een hok of kooi met een grote (buiten)ren
                            en richt deze in met veel verstopplekjes en verschillende niveaus.
                        </p>
                        <p>
                            Een konijn is een groepsdier. <strong> Hou er minstens twee</strong>. De combinatie van
                            een vrouwelijk konijn en een gecastreerd mannelijk konijn gaat het best. Twee mannetjes
                            of twee vrouwtjes samen geeft meestal ruzie.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="nav-kippen" role="tabpanel" aria-labelledby="nav-kippen-tab">
                        <p>
                            Kippen bestaan in veel maten, kleuren en temperamenten. Er zijn rassen die vooral
                            geschikt zijn om veel eieren te leggen en andere worden vooral gehouden voor het vlees
                            of voor de sierwaarde. Naast echte raskippen worden er ook veel kruisingen gekweekt, de
                            hybriden. Deze hybriden geven een veel grotere opbrengst van eieren of vlees dan de
                            zuivere rassen en worden daarom veel in de industrie gebruikt. Ook de meeste legkippen
                            die je in de dierenwinkel kan kopen, zijn hybriden. Ze leven doorgaans echter minder
                            lang en zijn minder sterk dan de zuivere raskippen.
                        </p>
                        <p>
                            Om de kippen te vervoeren, kan je een speciaal kippenkrat gebruiken of een stevige
                            kartonnen doos met luchtgaten. Zo kunnen de kippen veilig en rustig vervoerd worden. Zet
                            de doos goed vast in de auto, zodat deze niet aan het schuiven gaat. Kippen geraken snel
                            oververhit. Transporteer ze dus niet op warme dagen en zorg voor voldoende ventilatie.
                        </p>
                        <p>
                            Richt het hok en de ren in voordat je de kippen koopt. Zet de kippen bij aankomst in het
                            binnenhok en laat hen zelf de weg naar buiten ontdekken. Geef in het begin hetzelfde
                            voer als de vorige eigenaar en wen ze geleidelijk aan nieuw voer.
                        </p>
                    </div>
                    <div class="tab-pane fade" id="nav-paarden" role="tabpanel" aria-labelledby="nav-paarden-tab">
                        <p>
                            Paarden zijn kuddedieren die bij voorkeur in een kleine kudde leven. Andere dieren,
                            zoals geiten of ezels, kunnen ook op dezelfde weide staan, maar ze vervangen het
                            gezelschap van een ander paard niet.</p>
                        <p>
                            Als je zelf maar één paard kan houden, zorg er dan voor dat het dier andere paarden kan
                            zien of probeer met andere paardeneigenaars af te spreken om de dieren samen te zetten.
                        </p>
                        <p>
                            Als je een nieuw paard in de groep brengt, dan hou je het eerst een aantal weken apart
                            in een aangrenzende weide. Zo leren de dieren elkaar eerst kennen zonder dat ze een
                            bedreiging vormen voor elkaar. Als de dieren gezond zijn en ze elkaar goed kennen en
                            verdragen, dan kan je ze voor het eerst samen zetten. Voorkom agressie over voeder door
                            op meerdere plaatsen hooi en water aan te bieden.
                        </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
</section>
</div>
<!-- end dieren info - tabs  -->


<?php
include("includes/footer.php");
?>