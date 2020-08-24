<?php
include("includes/header.php");
// include("includes/top-content.php")
?>


<div class="jumbotron text-center">
    <p></p>
    <h1>Vind <strong>jouw</strong> dier!</h1>
    <p>Momenteel zijn er <strong>709</strong> dieren beschikkbaar voor adoptie!</p>
    <p></p>

    <!-- begin search hero  -->

    <!--Blue select-->
    <select class="mdb-select md-form colorful-select dropdown-primary" searchable="Search here..">
        <option value="1">Option 1</option>
        <option value="2">Option 2</option>
        <option value="3">Option 3</option>
        <option value="4">Option 4</option>
        <option value="5">Option 5</option>
    </select>

    <label class="mdb-main-label">Example label</label>

    <select class="mdb-select" searchable="Search here..">
        <option value="1" disabled selected>Choose your option</option>
        <option value="2" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-1.jpg" class="rounded-circle">
            example
            1</option>
        <option value="3" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-2.jpg" class="rounded-circle">
            example
            2</option>
        <option value="4" data-icon="https://mdbootstrap.com/img/Photos/Avatars/avatar-3.jpg" class="rounded-circle">
            example
            1</option>
    </select>

    <!-- end search hero  -->


</div>

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
                        <div class="text-center"> <img src="images/72X72.gif" alt="Thumbnail Image 1"> </div>
                    </div>
                    <div class="col-4">
                        <div class="text-center"> <img src="images/72X72.gif" alt="Thumbnail Image 1"></div>
                    </div>
                    <div class="col-4">
                        <div class="text-center"> <img src="images/72X72.gif" alt="Thumbnail Image 1"></div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <div class="text-center"> <img src="images/72X72.gif" alt="Thumbnail Image 1"></div>
                    </div>
                    <div class="col-4">
                        <div class="text-center"> <img src="images/72X72.gif" alt="Thumbnail Image 1"></div>
                    </div>
                    <div class="col-4">
                        <div class="text-center"> <img src="images/72X72.gif" alt="Thumbnail Image 1"></div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-4">
                        <div class="text-center"> <img src="images/72X72.gif" alt="Thumbnail Image 1"></div>
                    </div>
                    <div class="col-4">
                        <div class="text-center"> <img src="images/72X72.gif" alt="Thumbnail Image 1"></div>
                    </div>
                    <div class="col-4">
                        <div class="text-center"> <img src="images/72X72.gif" alt="Thumbnail Image 1"></div>
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
                    </div>
                </nav>
                <div class="tab-content" id="nav-tabContent">
                    <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                        <p class="text-center mt-2"><img src="images/3b536b.gif" alt=""></p>
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
                        <p class="text-center mt-2"><img src="images/3b536b.gif" alt=""></p>
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
                        <p class="text-center mt-2"><img src="images/3b536b.gif" alt=""></p>
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

<!-- begin about us  -->

<div class="container">
    <div class="row">
        <div class="col-md-8 col-12">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <h3>About Us</h3>
                    <hr>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, consequatur neque
                        exercitationem
                        distinctio esse! Cupiditate doloribus a consequatur iusto illum eos facere vel iste iure
                        maxime. Velit,
                        rem, sunt obcaecati eveniet id nemo molestiae. In.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Atque, consequatur neque
                        exercitationem
                        distinctio esse! Cupiditate doloribus a consequatur iusto illum eos facere vel iste iure
                        maxime. Velit,
                        rem, sunt obcaecati eveniet id nemo molestiae. In.</p>
                </div>

                <!-- end about us  -->


                <!-- begin latest news  -->

                <div class="col-lg-6 col-12">
                    <h3>Latest News</h3>
                    <hr>
                    <div>
                        <div class="media">
                            <div class="media-body">
                                <h4 class="mt-0 mb-1">Heading 1</h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, quod temporibus
                                veniam deserunt
                                deleniti accusamus voluptatibus at illo sunt quisquam.
                            </div>
                            <a href="#"><img class="ml-3" src="images/75X.gif" alt="placeholder image"></a>
                        </div>
                        <div class="media">
                            <div class="media-body">
                                <h4 class="mt-0 mb-1">Heading 2</h4>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo, iure nemo earum quae
                                aliquid animi
                                eligendi rerum rem porro facilis.
                            </div>
                            <a href="#"><img class="ml-3" src="images/75X.gif" alt="placeholder image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end latest news  -->


        <!-- begin contact us  -->

        <div class="col-md-4 col-12 mt-md-0 mt-2">
            <h3>Contact Us</h3>
            <hr>
            <address>
                <strong>MyStoreFront, Inc.</strong><br>
                Indian Treasure Link<br>
                Quitman, WA, 99110-0219<br>
                <abbr title="Phone">P:</abbr> (123) 456-7890
            </address>
            <address>
                <strong>Full Name</strong><br>
                <a href="mailto:#">first.last@example.com</a>
            </address>
        </div>
    </div>
</div>

<!-- end contact us  -->

<?php include("includes/footer.php") ?>