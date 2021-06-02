@include('header')

    <!-- Navigation -->
    <header>
    <!--Navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark stylish-color-dark">
            <!-- Navbar brand -->
            <a class="navbar-brand" href="#">Navbar</a>
            <!-- Collapse button -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <!-- Collapsible content -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Links -->
                <ul class="navbar-nav mr-auto">
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Homepages</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../homepage/v-1.html">V1</a>
                            <a class="dropdown-item" href="../homepage/v-2.html">V2</a>
                            <a class="dropdown-item" href="../homepage/v-3.html">V3</a>
                            <a class="dropdown-item" href="../homepage/v-4.html">V4</a>
                            <a class="dropdown-item" href="../homepage/v-5.html">V5</a>
                        </div>
                    </li>
                    <!-- Dropdown -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Postpage</a>
                        <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                            <a class="dropdown-item" href="../postpage/v-1.html">V1</a>
                            <a class="dropdown-item" href="../postpage/v-2.html">V2</a>
                            <a class="dropdown-item" href="../postpage/v-3.html">V3</a>
                            <a class="dropdown-item" href="../postpage/v-4.html">V4</a>
                            <a class="dropdown-item" href="../postpage/v-5.html">V5</a>
                        </div>
                    </li>
                </ul>
                <!-- Links -->
                <!-- Search form -->
                <form class="form-inline">
                    <div class="md-form my-0">
                        <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
                    </div>
                </form>
            </div>
            <!-- Collapsible content -->
        </nav>
        <!--/.Navbar-->
    </header>
    <!--/ Navigation -->

    <!-- Main layout -->
    <main>
        <div class="container">
            <!--Grid row-->
            <div class="row">
                <!--Grid column-->
                <div class="col-md-8 mb-4">
                    <!--Featured Image-->
                    <div class="card mb-4 fadeIn">
                        <img src="https://mdbootstrap.com/img/Photos/Slides/img%20(144).jpg" class="img-fluid" alt="">
                    </div>
                    <!--/.Featured Image-->
                    


                    <!--Card-->
                    <div class="card mb-4 fadeIn">
                        <!--Card content-->
                        <div class="card-body">
                            <p class="h5 my-4">{{$PostPageContent["Title"]}}</p>
                            <blockquote class="blockquote">
                                <p class="mb-0"><i>{{$PostPageContent["Quotes_1"]}}</i></p>
                                <footer class="blockquote-footer">Someone famous in
                                    <cite title="Source Title">Source Title</cite>
                                </footer>
                            </blockquote>

                            <p>{{$PostPageContent["Paragraph_1"]}}</p>

                            <p>{{$PostPageContent["Paragraph_2"]}}</p>

                            <p>{{$PostPageContent["Paragraph_3"]}}</p>

                            <p>{{$PostPageContent["Paragraph_4"]}}</p>
                        </div>
                    </div>
                    <!--/.Card-->

                    

                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-4 mb-4">

                    <!--Card: Jumbotron-->
                    <div class="card blue-gradient mb-4 fadeIn">

                        <!-- Content -->
                        <div class="card-body text-white text-center">

                            <h4 class="mb-4">
                                <strong>Learn Bootstrap 4 with MDB</strong>
                            </h4>
                            <p>
                                <strong>Best & free guide of responsive web design</strong>
                            </p>
                            <p class="mb-4">
                                <strong>The most comprehensive tutorial for the Bootstrap 4. Loved by over 500 000 users. Video
                                    and written versions available. Create your own, stunning website.</strong>
                            </p>
                            <a target="_blank" href="https://mdbootstrap.com/education/bootstrap/" class="btn btn-outline-white btn-md">Start free tutorial
                                <i class="fas fa-graduation-cap ml-2"></i>
                            </a>

                        </div>
                        <!-- Content -->
                    </div>
                    <!--Card: Jumbotron-->

                    <!--Card : Dynamic content wrapper-->
                    <div class="card mb-4 text-center fadeIn">

                        <div class="card-header">Do you want to get informed about new articles?</div>

                        <!--Card content-->
                        <div class="card-body">

                            <!-- Default form login -->
                            <form>

                                <!-- Default input email -->
                                <label for="defaultFormEmailEx" class="grey-text">Your email</label>
                                <input type="email" id="defaultFormLoginEmailEx" class="form-control">

                                <br>

                                <!-- Default input password -->
                                <label for="defaultFormNameEx" class="grey-text">Your name</label>
                                <input type="text" id="defaultFormNameEx" class="form-control">

                                <div class="text-center mt-4">
                                    <button class="btn btn-info btn-md" type="submit">Sign up</button>
                                </div>
                            </form>
                            <!-- Default form login -->

                        </div>

                    </div>
                    <!--/.Card : Dynamic content wrapper-->

                    <!--Card-->
                    <div class="card mb-4 fadeIn">

                        <div class="card-header">Related articles</div>

                        <!--Card content-->
                        <div class="card-body">

                            <ul class="list-unstyled">
                                <li class="media">
                                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder7.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <a href="">
                                            <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                                        </a>
                                        Cras sit amet nibh libero, in gravida nulla (...)
                                    </div>
                                </li>
                                <li class="media my-4">
                                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder6.jpg" alt="An image">
                                    <div class="media-body">
                                        <a href="">
                                            <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                                        </a>
                                        Cras sit amet nibh libero, in gravida nulla (...)
                                    </div>
                                </li>
                                <li class="media">
                                    <img class="d-flex mr-3" src="https://mdbootstrap.com/img/Photos/Others/placeholder5.jpg" alt="Generic placeholder image">
                                    <div class="media-body">
                                        <a href="">
                                            <h5 class="mt-0 mb-1 font-weight-bold">List-based media object</h5>
                                        </a>
                                        Cras sit amet nibh libero, in gravida nulla (...)
                                    </div>
                                </li>
                            </ul>

                        </div>

                    </div>
                    <!--/.Card-->

                </div>
                <!--Grid column-->
            </div>
            <!--Grid row-->
        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer text-center font-small mdb-color darken-2 mt-4 fadeIn">

        <!--Call to action-->
        <div class="pt-4">
            <a class="btn btn-outline-white" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" target="_blank" role="button">Download MDB
                <i class="fas fa-download ml-2"></i>
            </a>
            <a class="btn btn-outline-white" href="https://mdbootstrap.com/education/bootstrap/" target="_blank" role="button">Start free tutorial
                <i class="fas fa-graduation-cap ml-2"></i>
            </a>
        </div>
        <!--/.Call to action-->

        <hr class="my-4">

        <!-- Social icons -->
        <div class="pb-4">
            <a href="https://www.facebook.com/mdbootstrap" target="_blank">
                <i class="fab fa-facebook-f mr-3"></i>
            </a>

            <a href="https://twitter.com/MDBootstrap" target="_blank">
                <i class="fab fa-twitter mr-3"></i>
            </a>

            <a href="https://www.youtube.com/watch?v=7MUISDJ5ZZ4" target="_blank">
                <i class="fab fa-youtube mr-3"></i>
            </a>

            <a href="https://plus.google.com/u/0/b/107863090883699620484" target="_blank">
                <i class="fab fa-google-plus-g mr-3"></i>
            </a>

            <a href="https://dribbble.com/mdbootstrap" target="_blank">
                <i class="fab fa-dribbble mr-3"></i>
            </a>

            <a href="https://pinterest.com/mdbootstrap" target="_blank">
                <i class="fab fa-pinterest mr-3"></i>
            </a>

            <a href="https://github.com/mdbootstrap/bootstrap-material-design" target="_blank">
                <i class="fab fa-github mr-3"></i>
            </a>

            <a href="http://codepen.io/mdbootstrap/" target="_blank">
                <i class="fab fa-codepen mr-3"></i>
            </a>
        </div>
    </footer>
    <!-- Social icons -->
    <!--/ Main layout -->

@include('footer')