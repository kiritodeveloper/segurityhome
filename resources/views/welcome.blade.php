<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Vendor styles -->
        <link rel="stylesheet" href="vendors/bower_components/material-design-iconic-font/dist/css/material-design-iconic-font.min.css">
        <link rel="stylesheet" href="vendors/bower_components/animate.css/animate.min.css">
        <link rel="stylesheet" href="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.css">

        <!-- App styles -->
        <link rel="stylesheet" href="css/app.min.css">
    </head>

    <body data-sa-theme="1">
        <main class="main">
            <div class="page-loader">
                <div class="page-loader__spinner">
                    <svg viewBox="25 25 50 50">
                        <circle cx="50" cy="50" r="20" fill="none" stroke-width="2" stroke-miterlimit="10" />
                    </svg>
                </div>
            </div>
@include('layouts.nav')

            <section class="content">
                <div class="content__inner">
                    <header class="content__title">
                        <h1>Super Admin 2.0 Blog</h1>
                        <small>Duis mollisest non commodo luctus nisierat porttito</small>
                    </header>

                    <div class="row">
                        <div class="col-lg-8 col-md-7">
                            <div class="card">
                                <img class="card-img-top" src="demo/img/blog/1.jpg" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">Curabitur blandit tempus porttitor</h4>
                                    <h6 class="card-subtitle">by Sam Andersion on 17th July 2017</h6>

                                    <p class="card-text">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

                                    <a href="blog-detail.html" class="card-link">Read More...</a>
                                </div>
                            </div>

                            <div class="card">
                                <img class="card-img-top" src="demo/img/blog/2.jpg" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">Maecenas sed diam eget risus varius blandit</h4>
                                    <h6 class="card-subtitle">by Dave Rubin on 15th July 2017</h6>

                                    <p class="card-text">Donec sed odio dui. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Maecenas sed diam eget risus varius blandit sit amet non magna. Sed posuere consectetur est at lobortis. Nulla vitae elit libero, a pharetra augue. Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</p>

                                    <a href="blog-detail.html" class="card-link">Read More...</a>
                                </div>
                            </div>

                            <div class="card">
                                <img class="card-img-top" src="demo/img/blog/3.jpg" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">Donec id elit non mi porta gravida at eget metus</h4>
                                    <h6 class="card-subtitle">by Malinda Hollaway on 10th July 2017</h6>

                                    <p class="card-text">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Donec id elit non mi porta gravida at eget metus. Donec ullamcorper nulla non metus auctor fringilla. Maecenas faucibus mollis interdum. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Nulla vitae elit libero, a pharetra augue. Aenean lacinia bibendum nulla sed consectetur.</p>

                                    <a href="blog-detail.html" class="card-link">Read More...</a>
                                </div>
                            </div>

                            <div class="card">
                                <img class="card-img-top" src="demo/img/blog/4.jpg" alt="">

                                <div class="card-body">
                                    <h4 class="card-title">Maecenas faucibus mollis interdum</h4>
                                    <h6 class="card-subtitle">by Nate Davis on 5th July 2017</h6>

                                    <p class="card-text">
                                        Cras justo odio, dapibus ac facilisis in, egestas eget quam. Maecenas faucibus mollis interdum. Vestibulum id ligula porta felis euismod semper. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>

                                    <a href="blog-detail.html" class="card-link">Read More...</a>
                                </div>
                            </div>

                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Curabitur blandit tempus porttitor</h4>
                                    <h6 class="card-subtitle">by Sam Andersion on 4th July 2017</h6>

                                    <p class="card-text">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor. Aenean eu leo quam. Pellentesque ornare sem lacinia quam venenatis vestibulum. Nulla vitae elit libero, a pharetra augue. Sed posuere consectetur est at lobortis. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</p>

                                    <a href="blog-detail.html" class="card-link">Read More...</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 col-md-5 hidden-md-down">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Popular Posts</h4>
                                    <h6 class="card-subtitle">Venenatis portauam Inceptos ameteiam</h6>
                                </div>

                                <div class="listview listview--hover">
                                    <a class="listview__item">
                                        <img src="demo/img/profile-pics/1.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading text-truncate">Lorem ipsum dolor sit amet, consectetur adipiscing</div>
                                            <p>by Jane Neimor on 1st July 2017</p>
                                        </div>
                                    </a>

                                    <a class="listview__item">
                                        <img src="demo/img/profile-pics/2.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading text-truncate">Nam quis dolor dapibus, viverra leo eu, egestas nisi</div>
                                            <p>by Nate Davis on 5th July 2017</p>
                                        </div>
                                    </a>

                                    <a class="listview__item">
                                        <img src="demo/img/profile-pics/3.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading text-truncate">Fusce ullamcorper urna et sodales imperdiet</div>
                                            <p>by Malinda Hollaway on 10th July 2017</p>
                                        </div>
                                    </a>

                                    <a class="listview__item">
                                        <img src="demo/img/profile-pics/4.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading text-truncate">Cras pellentesque orci in libero scelerisque commodo</div>
                                            <p>by Dave Rubin on 15th July 2017</p>
                                        </div>
                                    </a>

                                    <a class="listview__item">
                                        <img src="demo/img/profile-pics/5.jpg" class="listview__img" alt="">

                                        <div class="listview__content">
                                            <div class="listview__heading text-truncate">Sed suscipit sem non lectus imperdiet ornare</div>
                                            <p>by Sam Andersion on 17th July 2017

                                            </p>
                                        </div>
                                    </a>

                                    <div class="m-4"></div>
                                </div>
                            </div>

                            <div class="card">
                                <img class="card-img-top" src="demo/img/widgets/note.jpg" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">Pellentesque Ligula Fringilla</h4>
                                    <h6 class="card-subtitle">by Malinda Hollaway on 19th June 2015 at 09:10 AM</h6>

                                    <p>Donec ullamcorper nulla non metus auctor fringilla. Cras justo odio, dapibus ac facilisis in, egestas eget quam. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Vestibulum id ligula porta felis euismod semper. Nulla vitae elit libero, a pharetra.</p>
                                    <a href="" class="view-more text-left">View Article...</a>
                                </div>
                            </div>

                            <div class="card tags">
                                <div class="card-body">
                                    <h4 class="card-title">Categories</h4>
                                    <h6 class="card-subtitle">Sed posuere consectetur est at lobortis</h6>

                                    <div class="tags__body">
                                        <a href="">#Sollicitudin</a>
                                        <a href="">#Ultricies</a>
                                        <a href="">#Elit</a>
                                        <a href="">#Crastortor</a>
                                        <a href="">#Condimentum</a>
                                        <a href="">#Egestas</a>
                                        <a href="">#Loremipsum</a>
                                        <a href="">#Ridiculus</a>
                                        <a href="">#Renaissance</a>
                                        <a href="">#Curabitur</a>
                                        <a href="">#Tristiqueeubibendum</a>
                                        <a href="">#Phase</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <footer class="footer hidden-xs-down">
                    <p>© Super Admin Responsive. All rights reserved.</p>

                    <ul class="nav footer__nav">
                        <a class="nav-link" href="">Homepage</a>

                        <a class="nav-link" href="">Company</a>

                        <a class="nav-link" href="">Support</a>

                        <a class="nav-link" href="">News</a>

                        <a class="nav-link" href="">Contacts</a>
                    </ul>
                </footer>
                </div>
            </section>
        </main>

        <script src="vendors/bower_components/jquery/dist/jquery.min.js"></script>
        <script src="vendors/bower_components/popper.js/dist/umd/popper.min.js"></script>
        <script src="vendors/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
        <script src="vendors/bower_components/jquery.scrollbar/jquery.scrollbar.min.js"></script>
        <script src="vendors/bower_components/jquery-scrollLock/jquery-scrollLock.min.js"></script>

        <!-- App functions and actions -->
        <script src="js/app.min.js"></script>
    </body>
</html>