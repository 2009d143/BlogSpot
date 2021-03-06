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
                    </div>
                </li>
                <!-- Dropdown -->
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Postpage</a>
                    <div class="dropdown-menu dropdown-primary" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../postpage/v-1.html">V1</a>
                        <a class="dropdown-item" href="../postpage/v-2.html">V2</a>
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
    <div class="container-fluid">
        <!-- Magazine -->
        <div class="row mt-2">
            <!-- Main news -->
            <div class="col-xl-8 col-md-12">
                <!--Section: Magazine posts-->
                <section class="section extra-margins listing-section mt-2">
                    <h4 class="font-weight-bold"><strong>LATESTS NEWS</strong></h4>
                    <hr class="red title-hr">
                    <!--Carousel Wrapper-->
                    <div id="carousel-example-2" class="carousel slide carousel-fade my-4 z-depth-1" data-ride="carousel">
                        <!--Indicators-->
                        <ol class="carousel-indicators">
                            @php ($row = 0)
                            @foreach($LandingContent['landing_posts_main_img'] as $posted_date => $arrTitleMainImg)
                                @foreach($arrTitleMainImg as $title => $mainimg)
                                    <li data-target="#carousel-example-2" data-slide-to="{{$row}}" @if($row==0) class="active" @endif></li>
                                    @php ($row++)
                                @endforeach
                            @endforeach
                        </ol>
                        <!--/.Indicators-->
                        <!--Slides-->
                        <div class="carousel-inner" role="listbox">
                            @php ($row = 0)
                            @foreach($LandingContent['landing_posts_main_img'] as $posted_date => $arrTitleMainImg)
                            @foreach($arrTitleMainImg as $title => $mainimg)
                                <div @if($row==0) class="carousel-item active" @endif @if($row>0) class="carousel-item" @endif>
                                    <div class="view rgba-black-slight">
                                        <img class="d-block w-100 rounded" src="./img/galeryImages/{{$mainimg}}" alt="Third slide">
                                        <div class="mask rgba-black-light"></div>
                                    </div>

                                    <div class="carousel-caption">
                                        <h3 class="h3-responsive font-weight-bold">{{$title}}</h3>
                                        <p>{{$LandingContent["landing_posts"][$posted_date][$title]}}</p>
                                    </div>
                                </div>
                            @php ($row++)
                            @endforeach
                            @endforeach
                        </div>
                    <!--/.Slides-->
                    <!--Controls-->
                    <a class="carousel-control-prev" href="#carousel-example-2" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carousel-example-2" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                    </a>
                    <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
            <!--Section: Top news-->
            <section>
                <h4 class="font-weight-bold mt-5"><strong>TOP NEWS</strong></h4>
                <hr class="red title-hr">
                <!--Grid row-->
                @php ($row = 1)
                @foreach($LandingContent['landing_posts_main_img'] as $posted_date => $arrTitleMainImg)
                    @foreach($arrTitleMainImg as $title => $mainimg)
                        @if($row%2==1)
                            <div class="row mb-4">
                        @endif
                                <!--Grid column-->  
                                <div class="col-md-6 text-left mt-3">
                                    <!--Card-->
                                    <div class="card">
                                        <!--Card image-->
                                        <div class="view overlay">
                                            <img src="./img/galeryImages/{{$mainimg}}" class="card-img-top" alt="Sample image">
                                            <a>
                                                <div class="mask rgba-white-slight"></div>
                                            </a>
                                        </div>
                                        <!--/.Card image-->
                                        <!--Card content-->
                                        <div class="card-body">
                                            <!--Title-->
                                            <h4 class="card-title"><strong>{{$title}}</strong></h4>
                                            <hr>
                                            <!--Text-->
                                            <p class="card-text mb-3">{{$LandingContent["landing_posts"][$posted_date][$title]}}</p>
                                            <p class="font-small font-weight-bold dark-grey-text mb-1"><i class="far fa-clock-o"></i> {{$posted_date}}</p>
                                            <p class="font-small grey-text mb-0">{{$LandingContent["author"][$posted_date][$title]}}</p>
                                            <p class="text-right mb-0 font-small font-weight-bold"><a href='postpage/{{$LandingContent["postpageLink"][$posted_date][$title]}}'>Read more <i class="fas fa-angle-right"></i></a></p>
                                        </div>
                                        <!--/.Card content-->
                                    </div>
                                    <!--/.Card-->
                                </div>
                                <!--Grid column-->
                                
                        @if($row%2==0)
                            </div>
                        @endif
                    @php ($row++)
                    @endforeach
                @endforeach
                <!--/Grid row-->
            </section>
            <!--Section:  Top news-->
            <h4 class="font-weight-bold mt-5"><strong>SPORT</strong></h4>
            <hr class="red title-hr">
            <!--Carousel Wrapper-->
            <div id="carousel-example-3" class="carousel slide carousel-fade my-4 z-depth-1" data-ride="carousel">
                <!--Indicators-->
                <ol class="carousel-indicators">
                    @php ($row = 0)
                    @foreach($LandingContent['category_based_contents']['sport'] as $posted_date => $arrTitleMainImg)
                        @foreach($arrTitleMainImg as $title => $mainimg)
                            <li data-target="#carousel-example-2" data-slide-to="{{$row}}" @if($row==0) class="active" @endif></li>
                            @php ($row++)
                        @endforeach
                    @endforeach
                </ol>
                <!--/.Indicators-->
                <!--Slides-->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <div class="view">
                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(81).jpg" alt="First slide">
                            <div class="mask rgba-black-light"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive font-weight-bold">Title of the news</h3>
                            <p>First text</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(80).jpg" alt="Second slide">
                            <div class="mask rgba-black-light"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive font-weight-bold">Title of the news</h3>
                            <p>Secondary text</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <!--Mask color-->
                        <div class="view">
                            <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Slides/img%20(39).jpg" alt="Third slide">
                            <div class="mask rgba-black-light"></div>
                        </div>
                        <div class="carousel-caption">
                            <h3 class="h3-responsive font-weight-bold">Title of the news</h3>
                            <p>Third text</p>
                        </div>
                    </div>
                </div>
                <!--/.Slides-->
                <!--Controls-->
                <a class="carousel-control-prev" href="#carousel-example-3" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carousel-example-3" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                <!--/.Controls-->
            </div>
            <!--/.Carousel Wrapper-->
            <!--Grid row-->
            <div class="row mb-4">
                <!--Grid column-->
                <div class="col-md-4 my-3">
                    <!--Card-->
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Sport/6-col/img%20(1).jpg" class="card-img-top"
                                alt="Sample image">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title"><strong>Card title</strong></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <p class="font-small font-weight-bold dark-grey-text mb-1"><i class="far fa-clock-o"></i>
                                27/08/2017
                            </p>
                            <p class="font-small grey-text mb-0">Anna Smith</p>
                            <p class="text-right mb-0 font-small font-weight-bold"><a>Read more <i class="fas fa-angle-right"></i></a></p>
                        </div>
                        <!--/.Card content-->
                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-4 text-left mt-3">
                    <!--Card-->
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Sport/6-col/img%20(2).jpg" class="card-img-top"
                                alt="Sample image">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title"><strong>Card title</strong></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk
                                of the card's
                                content.
                            </p>
                            <p class="font-small font-weight-bold dark-grey-text mb-1"><i class="far fa-clock-o"></i>
                                27/08/2017
                            </p>
                            <p class="font-small grey-text mb-0">Anna Smith</p>
                            <p class="text-right mb-0 font-small font-weight-bold"><a>Read more <i class="fas fa-angle-right"></i></a></p>
                        </div>
                        <!--/.Card content-->
                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-4 text-left mt-3">
                    <!--Card-->
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Horizontal/Sport/6-col/img%20(3).jpg" class="card-img-top"
                                alt="Sample image">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title"><strong>Card title</strong></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk
                                of the card's
                                content.
                            </p>
                            <p class="font-small font-weight-bold dark-grey-text mb-1"><i class="far fa-clock-o"></i>
                                27/08/2017
                            </p>
                            <p class="font-small grey-text mb-0">Anna Smith</p>
                            <p class="text-right mb-0 font-small font-weight-bold"><a>Read more <i class="fas fa-angle-right"></i></a></p>
                        </div>
                        <!--/.Card content-->
                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->
            </div>
            <!--/Grid row-->
            <h4 class="font-weight-bold mt-5"><strong>LIFESTYLE</strong></h4>
            <hr class="red title-hr">
            <!--Grid row-->
            <div class="row single-post mb-4">
                <!--Grid column-->
                <div class="col-md-6 text-left mt-3">
                    <!--Card-->
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/1.jpg" class="card-img-top" alt="Sample image">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title"><strong>Card title</strong></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk
                                of the card's
                                content.
                            </p>
                            <p class="font-small font-weight-bold dark-grey-text mb-1"><i class="far fa-clock-o"></i>
                                27/08/2017
                            </p>
                            <p class="font-small grey-text mb-0">Anna Smith</p>
                            <p class="text-right mb-0 font-small font-weight-bold"><a>Read more <i class="fas fa-angle-right"></i></a></p>
                        </div>
                        <!--/.Card content-->
                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->
                <!--Grid column-->
                <div class="col-md-6 text-left mt-3">
                    <!--Card-->
                    <div class="card">
                        <!--Card image-->
                        <div class="view overlay">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/4.jpg" class="card-img-top" alt="sample image">
                            <a>
                                <div class="mask rgba-white-slight"></div>
                            </a>
                        </div>
                        <!--/.Card image-->
                        <!--Card content-->
                        <div class="card-body">
                            <!--Title-->
                            <h4 class="card-title"><strong>Card title</strong></h4>
                            <hr>
                            <!--Text-->
                            <p class="card-text mb-3">Some quick example text to build on the card title and make up the bulk
                                of the card's
                                content.
                            </p>
                            <p class="font-small font-weight-bold dark-grey-text mb-1"><i class="far fa-clock-o"></i>
                                27/08/2017
                            </p>
                            <p class="font-small grey-text mb-0">Anna Smith</p>
                            <p class="text-right mb-0 font-small font-weight-bold"><a>Read more <i class="fas fa-angle-right"></i></a></p>
                        </div>
                        <!--/.Card content-->
                    </div>
                    <!--/.Card-->
                </div>
                <!--Grid column-->
            </div>
            <!--/Grid row-->
            </section>
            <!--/Section: Magazine posts-->
            <!--Pagination dark-->
            <nav>
                <ul class="pagination pg-dark flex-center pt-4">
                    <!--Arrow left-->
                    <li class="page-item">
                        <a class="page-link" aria-label="Previous">
                        <span aria-hidden="true">&laquo;</span>
                        <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <!--Numbers-->
                    <li class="page-item active"><a class="page-link">1</a></li>
                    <li class="page-item"><a class="page-link">2</a></li>
                    <li class="page-item"><a class="page-link">3</a></li>
                    <li class="page-item"><a class="page-link">4</a></li>
                    <li class="page-item"><a class="page-link">5</a></li>
                    <!--Arrow right-->
                    <li class="page-item">
                        <a class="page-link" aria-label="Next">
                        <span aria-hidden="true">&raquo;</span>
                        <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
            <!--/Pagination dark grey-->
        </div>
        <!--/ Main news -->
        <!-- Sidebar -->
        <div class="col-xl-4 col-md-12 widget-column mt-0">
            <!-- Section: Categories -->
            <section class="section mb-5">
                <h4 class="font-weight-bold mt-2"><strong>CATEGORIES</strong></h4>
                <hr class="red title-hr">
                <ul class="list-group z-depth-1 mt-4">
                    @foreach($LandingContent['categories_and_count'] as $category => $count)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <a class="">
                            <p class="mb-0">{{$category}}</p>
                        </a>
                        <span class="badge teal badge-pill">{{$count}}</span>
                    </li>
                    @endforeach
                </ul>
            </section>
            <!-- Section: Categories -->
            <h4 class="font-weight-bold"><strong>RECOMMEND POSTS</strong></h4>
            <hr class="red title-hr mb-4">
            <!-- Section: News widget -->
            <section class="section widget-content mt-5">
                <!-- Nav tabs -->
                <ul class="nav md-tabs tabs-3 nav-justified widget-tabs mdb-color lighten-3" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link active px-0" data-toggle="tab" href="#panel1" role="tab">RECOMMEND</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel2" role="tab">RECENT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" data-toggle="tab" href="#panel3" role="tab">TOP REVIEWS</a>
                    </li>
                </ul>
                <!-- Tab panels -->
                <div class="tab-content widget-tabs-content ml-2">
                    <!-- Panel 1 -->
                    <div class="tab-pane fade in show active" id="panel1" role="tabpanel">
                        <div class="single-post">
                            <!-- First row -->
                            <div class="row">
                                <!-- Image -->
                                <div class="col-4">
                                    <div class="view overlay z-depth-1">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/laptop-sm.jpg" class="img-fluid" alt="sample image">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
                                <!--/ Image -->
                                <!-- Excerpt -->
                                <div class="col-8">
                                    <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                                    <div class="post-data">
                                        <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 15/09/2017</p>
                                    </div>
                                </div>
                                <!--/ Excerpt -->
                            </div>
                            <!--/ First row -->
                        </div>
                        <div class="single-post">
                            <!-- Second row -->
                            <div class="row">
                                <!-- Image -->
                                <div class="col-4">
                                    <div class="view overlay z-depth-1">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/img%20(43).jpg" class="img-fluid" alt="sample image">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
                                <!--/ Image -->
                                <!-- Excerpt -->
                                <div class="col-8">
                                    <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                                    <div class="post-data">
                                        <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 15/09/2017</p>
                                    </div>
                                </div>
                                <!--/ Excerpt -->
                            </div>
                            <!--/ Second row -->
                        </div>
                        <div class="single-post">
                            <!-- Third row -->
                            <div class="row">
                                <!-- Image -->
                                <div class="col-4">
                                    <div class="view overlay z-depth-1">
                                        <img src="https://mdbootstrap.com/img/Photos/Others/img%20(39).jpg" class="img-fluid" alt="sample image">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
                                <!--/ Image -->
                                <!-- Excerpt -->
                                <div class="col-8">
                                    <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                                    <div class="post-data">
                                        <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 15/09/2017</p>
                                    </div>
                                </div>
                                <!--/ Excerpt -->
                            </div>
                            <!--/ Third row -->
                        </div>
                    </div>
                    <!--/ Panel 1 -->
                    <!-- Panel 2 -->
                    <div class="tab-pane fade" id="panel2" role="tabpanel">
                        <div class="single-post">
                            <!-- First row -->
                            <div class="row">
                                <!-- Image -->
                                <div class="col-4">
                                    <div class="view overlay z-depth-1">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(85).jpg" class="img-fluid"
                                            alt="sample image">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
                                <!--/ Image -->
                                <!-- Excerpt -->
                                <div class="col-8">
                                    <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                                    <div class="post-data">
                                        <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 15/09/2017</p>
                                    </div>
                                </div>
                                <!--/ Excerpt -->
                            </div>
                            <!--/ First row -->
                        </div>
                        <div class="single-post">
                            <!-- Second row -->
                            <div class="row">
                                <!-- Image -->
                                <div class="col-4">
                                    <div class="view overlay z-depth-1">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(43).jpg" class="img-fluid"
                                            alt="sample image">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
                                <!--/ Image -->
                                <!-- Excerpt -->
                                <div class="col-8">
                                    <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                                    <div class="post-data">
                                        <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 15/09/2017</p>
                                    </div>
                                </div>
                                <!--/ Excerpt -->
                            </div>
                            <!--/ Second row -->
                        </div>
                        <div class="single-post">
                            <!-- Third row -->
                            <div class="row">
                                <!-- Image -->
                                <div class="col-4">
                                    <div class="view overlay z-depth-1">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Work/4-col/img%20(30).jpg" class="img-fluid"
                                            alt="sample image">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
                                <!--/ Image -->
                                <!-- Excerpt -->
                                <div class="col-8">
                                    <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                                    <div class="post-data">
                                        <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 15/09/2017</p>
                                    </div>
                                </div>
                                <!--/ Excerpt -->
                            </div>
                            <!--/ Third row -->
                        </div>
                    </div>
                    <!--/ Panel 2 -->
                    <!-- Panel 3 -->
                    <div class="tab-pane fade" id="panel3" role="tabpanel">
                        <div class="single-post">
                            <!-- First row -->
                            <div class="row">
                                <!-- Image -->
                                <div class="col-4">
                                    <div class="view overlay z-depth-1">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(64).jpg" class="img-fluid"
                                            alt="sample image">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
                                <!--/ Image -->
                                <!-- Excerpt -->
                                <div class="col-8">
                                    <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                                    <div class="post-data">
                                        <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 15/09/2017</p>
                                    </div>
                                </div>
                                <!--/ Excerpt -->
                            </div>
                            <!--/ First row -->
                        </div>
                        <div class="single-post">
                            <!-- Second row -->
                            <div class="row">
                                <!-- Image -->
                                <div class="col-4">
                                    <div class="view overlay z-depth-1">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(76).jpg" class="img-fluid"
                                            alt="sample image">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
                                <!--/ Image -->
                                <!-- Excerpt -->
                                <div class="col-8">
                                    <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                                    <div class="post-data">
                                        <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 15/09/2017</p>
                                    </div>
                                </div>
                                <!--/ Excerpt -->
                            </div>
                            <!--/ Second row -->
                        </div>
                        <div class="single-post">
                            <!-- Third row -->
                            <div class="row">
                                <!-- Image -->
                                <div class="col-4">
                                    <div class="view overlay z-depth-1">
                                        <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(75).jpg" class="img-fluid"
                                            alt="sample image">
                                        <a>
                                            <div class="mask rgba-white-slight"></div>
                                        </a>
                                    </div>
                                </div>
                                <!--/ Image -->
                                <!-- Excerpt -->
                                <div class="col-8">
                                    <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                                    <div class="post-data">
                                        <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 15/09/2017</p>
                                    </div>
                                </div>
                                <!--/ Excerpt -->
                            </div>
                            <!--/ Third row -->
                        </div>
                    </div>
                    <!--/ Panel 3 -->
                </div>
                <!--/ Tab panels -->
            </section>
            <!--/ Section: News widget -->
            <!-- Section: Newsletter -->
            <section class="section mt-5">
                <h4 class="font-weight-bold"><strong>NEWSLETTER</strong></h4>
                <hr class="red title-hr mb-4">
                <!-- Newsletter -->
                <div class="card z-depth-1 widget-spacing mt-0">
                    <div class="card-body">
                        <!-- Header -->
                        <div class="text-center">
                            <h4>Subscribe:</h4>
                            <hr class="mt-2">
                        </div>
                        <!-- Body -->
                        <p class="font-small text-center">We'll write rarely, but only the best content.</p>
                        <!-- Body -->
                        <div class="md-form">
                            <i class="fas fa-user prefix grey-text"></i>
                            <input type="text" id="form3" class="form-control">
                            <label for="form3">Your name</label>
                        </div>
                        <div class="md-form">
                            <i class="fas fa-envelope prefix grey-text"></i>
                            <input type="text" id="form2" class="form-control">
                            <label for="form2">Your email</label>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary">Send</button>
                        </div>
                    </div>
                </div>
            </section>
            <!--/ Section: Newsletter -->
            <!-- Section: Gallery -->
            <section class="section sidebar-imgs mb-5">
                <h4 class="font-weight-bold"><strong>GALLERY</strong></h4>
                <hr class="red title-hr">
                <!--Grid row-->
                <div class="row">
                    <div class="col-md-12">
                        <div id="mdb-lightbox-ui"></div>
                        <div class="mdb-lightbox">
                            <figure class="col-md-4 px-1 py-1">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(10).jpg" data-size="1600x1067">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(10).jpg" class="img-fluid" alt="sample image">
                                </a>
                            </figure>
                            <figure class="col-md-4 px-1 py-1">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(98).jpg" data-size="1600x1067">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(98).jpg" class="img-fluid" alt="sample image" />
                                </a>
                            </figure>
                            <figure class="col-md-4 px-1 py-1">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(131).jpg" data-size="1600x1067">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(131).jpg" class="img-fluid" alt="sample image" />
                                </a>
                            </figure>
                            <figure class="col-md-4 px-1 py-1">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/City/12-col/img%20(4).jpg" data-size="1600x1067">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(4).jpg" class="img-fluid" alt="sample image" />
                                </a>
                            </figure>
                            <figure class="col-md-4 px-1 py-1">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/City/12-col/img%20(51).jpg" data-size="1600x1067">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(51).jpg" class="img-fluid" alt="sample image" />
                                </a>
                            </figure>
                            <figure class="col-md-4 px-1 py-1">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(128).jpg" data-size="1600x1067">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(128).jpg" class="img-fluid" alt="sample image" />
                                </a>
                            </figure>
                            <figure class="col-md-4 px-1 py-1">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(49).jpg" data-size="1600x1067">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(49).jpg" class="img-fluid" alt="sample image" />
                                </a>
                            </figure>
                            <figure class="col-md-4 px-1 py-1">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/Nature/12-col/img%20(115).jpg" data-size="1600x1067">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/Nature/4-col/img%20(115).jpg" class="img-fluid" alt="sample image" />
                                </a>
                            </figure>
                            <figure class="col-md-4 px-1 py-1">
                                <a href="https://mdbootstrap.com/img/Photos/Horizontal/People/12-col/img%20(15).jpg" data-size="1600x1067">
                                <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(15).jpg" class="img-fluid" alt="sample image" />
                                </a>
                            </figure>
                        </div>
                    </div>
                </div>
                <!--Grid row-->
            </section>
            <!--/ Section: Gallery -->
            <!-- Section: Featured posts -->
            <section class="section widget-content">
                <!-- Heading -->
                <h4 class="font-weight-bold pt-2"><strong>FEATURED POSTS</strong></h4>
                <hr class="red title-hr mb-4">
                <!--/ Card -->
                <div class="card card-body pb-0">
                    <div class="single-post">
                        <!-- Grid row -->
                        <div class="row">
                            <div class="col-4">
                                <!-- Image -->
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(121).jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <!-- Excerpt -->
                            <div class="col-8">
                                <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                                <div class="post-data">
                                    <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 18/08/2017</p>
                                </div>
                            </div>
                            <!--/ Excerpt -->
                        </div>
                        <!--/ Grid row -->
                    </div>
                    <div class="single-post">
                        <!-- Grid row -->
                        <div class="row">
                            <!-- Image -->
                            <div class="col-4">
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/City/4-col/img%20(30).jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <!--/ Image -->
                            <!-- Excerpt -->
                            <div class="col-8">
                                <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                                <div class="post-data">
                                    <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 21/08/2017</p>
                                </div>
                            </div>
                            <!--/ Excerpt -->
                        </div>
                        <!--/ Grid row -->
                    </div>
                    <div class="single-post">
                        <!-- Grid row -->
                        <div class="row">
                            <!-- Image -->
                            <div class="col-4">
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(118).jpg" class="img-fluid z-depth-1 rounded-0" alt="sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <!--/ Image -->
                            <!-- Excerpt -->
                            <div class="col-8">
                                <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                                <div class="post-data">
                                    <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 27/08/2017</p>
                                </div>
                            </div>
                            <!--/ Excerpt -->
                        </div>
                        <!--/ Grid row -->
                    </div>
                    <div class="single-post">
                        <!-- Grid row -->
                        <div class="row">
                            <!-- Image -->
                            <div class="col-4">
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(116).jpg" class="img-fluid z-depth-1 rounded-0"
                                        alt="sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <!--/ Image -->
                            <!-- Excerpt -->
                            <div class="col-8">
                                <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                                <div class="post-data">
                                    <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 27/08/2017</p>
                                </div>
                            </div>
                            <!--/ Excerpt -->
                        </div>
                        <!--/ Grid row -->
                    </div>
                    <div class="single-post">
                        <!-- Grid row -->
                        <div class="row">
                            <!-- Image -->
                            <div class="col-4">
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(124).jpg" class="img-fluid z-depth-1 rounded-0"
                                        alt="sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <!--/ Image -->
                            <!-- Excerpt -->
                            <div class="col-8">
                                <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                                <div class="post-data">
                                    <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 15/09/2017</p>
                                </div>
                            </div>
                            <!--/ Excerpt -->
                        </div>
                        <!--/ Grid row -->
                    </div>
                    <div class="single-post mb-0">
                        <!-- Grid row -->
                        <div class="row">
                            <!-- Image -->
                            <div class="col-4">
                                <div class="view overlay">
                                    <img src="https://mdbootstrap.com/img/Photos/Horizontal/People/4-col/img%20(85).jpg" class="img-fluid z-depth-1 rounded-0"
                                        alt="sample image">
                                    <a>
                                        <div class="mask rgba-white-slight"></div>
                                    </a>
                                </div>
                            </div>
                            <!--/ Image -->
                            <!-- Excerpt -->
                            <div class="col-8">
                                <h6 class="mt-0 mb-3"><a><strong>This is title of the news</strong></a></h6>
                                <div class="post-data">
                                    <p class="font-small grey-text mb-0"><i class="far fa-clock-o"></i> 21/08/2018</p>
                                </div>
                            </div>
                            <!--/ Excerpt -->
                        </div>
                        <!--/ Grid row -->
                    </div>
                </div>
            </section>
            <!--/ Section: Featured posts -->
        </div>
        <!--/ Sidebar -->
    </div>
    <!--/ Magazine -->
    </div>
</main>
<!--/ Main layout -->
<!-- Footer -->
<footer class="page-footer stylish-color-dark mt-4 pt-4">
    <!--Footer Links-->
    <div class="container-fluid">
        <!-- Footer links -->
        <div class="row text-center text-md-left mt-3 pb-3">
            <!--Grid column-->
            <div class="col-md-3 col-lg-3 col-xl-3 mr-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
                <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit amet,
                    consectetur
                    adipisicing elit.
                </p>
            </div>
            <!--/.Grid column-->
            <hr class="w-100 clearfix d-md-none">
            <!--Grid column-->
            <div class="col-md-2 col-lg-2 col-xl-2 mr-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                <p>
                    <a href="#!">MDBootstrap</a>
                </p>
                <p>
                    <a href="#!">MDWordPress</a>
                </p>
                <p>
                    <a href="#!">BrandFlow</a>
                </p>
                <p>
                    <a href="#!">Bootstrap Angular</a>
                </p>
            </div>
            <!--/.Grid column-->
            <hr class="w-100 clearfix d-md-none">
            <!--Grid column-->
            <div class="col-md-3 col-lg-2 col-xl-2 mr-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                <p>
                    <a href="#!">Your Account</a>
                </p>
                <p>
                    <a href="#!">Become an Affiliate</a>
                </p>
                <p>
                    <a href="#!">Shipping Rates</a>
                </p>
                <p>
                    <a href="#!">Help</a>
                </p>
                <p>
                    <a href="{{ route('login') }}">Administrator</a>
                </p>
            </div>
            <!--/.Third column-->
            <hr class="w-100 clearfix d-md-none">
            <!--Grid column-->
            <div class="col-md-4 col-lg-3 col-xl-3 mr-auto mt-3">
                <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                <p>
                    <i class="fas fa-home mr-3"></i> New York, NY 10012, US
                </p>
                <p>
                    <i class="fas fa-envelope mr-3"></i> info@example.com
                </p>
                <p>
                    <i class="fas fa-phone mr-3"></i> + 01 234 567 88
                </p>
                <p>
                    <i class="fas fa-print mr-3"></i> + 01 234 567 89
                </p>
            </div>
            <!--/.Grid column-->
        </div>
        <!-- Footer links -->
        <hr>
        <div class="row py-3 d-flex align-items-center">
            <!--Grid column-->
            <div class="col-md-7 col-lg-8">
                <!--Copyright-->
                <p class="text-center text-md-left grey-text">
                    ?? 2019 Copyright: <a href="https://mdbootstrap.com/docs/b4/jquery/templates/blog/" target="_blank"> MDBootstrap.com
                    </a>
                </p>
                <!--/.Copyright-->
            </div>
            <!--Grid column-->
            <!--Grid column-->
            <div class="col-md-5 col-lg-4 ml-lg-0">
                <!--Social buttons-->
                <div class="social-section text-center mr-auto text-md-left">
                    <ul class="list-unstyled list-inline">
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight">
                            <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight">
                            <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight">
                            <i class="fab fa-google-plus-g"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="btn-floating btn-sm rgba-white-slight">
                            <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <!--/.Social buttons-->
            </div>
            <!--Grid column-->
        </div>
    </div>
</footer>
<!-- Footer -->
@include('footer')