<!doctype html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <title>Hello, world!</title>
    </head>

    <body>
        <!-- Navbar -->

         <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
              <a class="navbar-brand" href="#">Start Bootstrap</a>
              <button
                class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive"
                aria-expanded="false"
                aria-label="Toggle navigation"
              >
                <i class="fas fa-bars"></i>
              </button>
              <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                  <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                </ul>
              </div>
            </div>
          </nav> 

        <header class="masthead bg-primary text-white text-center">
            <div class="container d-flex align-items-center flex-column">
              <img class="masthead-avatar mb-5" src="img/avataaars.svg" alt="..." />
              <h1 class="masthead-heading text-uppercase mb-0">Start Bootstrap</h1>
              <!-- Icon -->
              <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- teks-->
              <p class="masthead-subheading font-weight-light mb-0">Graphic Artist - Web Designer - Illustrator</p>
            </div>
          </header>

        <!-- Portfolio -->
        <section class="page-section portfolio" id="portfolio">
            <div class="container">
              <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Portfolio</h2>
                        <div class="divider-custom">
                            <div class="divider-custom-line"></div>
                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                            <div class="divider-custom-line"></div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Portfolio Section-->
            <section class="page-section portfolio" id="portfolio">
                <div class="container">
                    <div class="row justify-content-center">

                        <!-- Portfolio Item 1-->
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid rounded" src="img/cabin.png" alt="..." />
                            </div>
                            <!-- modal portfolio1-->
                            <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" aria-labelledby="portfolioModal1" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body text-center pb-5">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Log Cabin</h2>
                                                        <!-- icon -->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                                        <img class="img-fluid rounded mb-5" src="img/cabin.png" alt="..."> 
                                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                                        <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                                            <i class="fas fa-times fa-fw"></i>
                                                            Close Window
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                                                    
                        <!-- Portfolio Item 2-->
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item mx-auto"  data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid rounded" src="img/cake.png" alt="..." />
                            </div>

                            <!-- modal portfolio2-->
                            <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" aria-labelledby="portfolioModal2" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body text-center pb-5">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                                        <!-- Portfolio Modal - Image-->
                                                        <img class="img-fluid rounded mb-5" src="img/cake.png" alt="..." />
                                                        <!-- Portfolio Modal - Text-->
                                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                                        <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                                            <i class="fas fa-times fa-fw"></i>
                                                            Close Window
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Item 3-->
                        <div class="col-md-6 col-lg-4 mb-5">
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid rounded" src="img/circus.png" alt="..." />
                            </div>
                            <!-- modal portfolio3-->
                            <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" aria-labelledby="portfolioModal3" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body text-center pb-5">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                                        <!-- Portfolio Modal - Image-->
                                                        <img class="img-fluid rounded mb-5" src="img/circus.png" alt="..." />
                                                        <!-- Portfolio Modal - Text-->
                                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                                        <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                                            <i class="fas fa-times fa-fw"></i>
                                                            Close Window
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Item 4-->
                        <div class="col-md-6 col-lg-4 mb-5 mb-lg-0">
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal4">
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid rounded" src="img/game.png" alt="..." />
                            </div>
                            <!-- modal portfolio4-->
                            <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" aria-labelledby="portfolioModal4" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body text-center pb-5">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                                        <!-- Portfolio Modal - Image-->
                                                        <img class="img-fluid rounded mb-5" src="img/game.png" alt="..." />
                                                        <!-- Portfolio Modal - Text-->
                                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                                        <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                                            <i class="fas fa-times fa-fw"></i>
                                                            Close Window
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Portfolio Item 5-->
                        <div class="col-md-6 col-lg-4 mb-5 mb-md-0">
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal5">
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid rounded" src="img/safe.png" alt="..." />
                            </div>
                            <!-- modal portfolio5-->
                            <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" aria-labelledby="portfolioModal5" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body text-center pb-5">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                                        <!-- Portfolio Modal - Image-->
                                                        <img class="img-fluid rounded mb-5" src="img/safe.png" alt="..." />
                                                        <!-- Portfolio Modal - Text-->
                                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                                        <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                                            <i class="fas fa-times fa-fw"></i>
                                                            Close Window
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Portfolio Item 6-->
                        <div class="col-md-6 col-lg-4">
                            <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal6">
                                <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                                    <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                                </div>
                                <img class="img-fluid rounded" src="img/submarine.png" alt="..." />
                            </div>
                            <!-- modal portfolio6-->
                            <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" aria-labelledby="portfolioModal6" aria-hidden="true">
                                <div class="modal-dialog modal-xl">
                                    <div class="modal-content">
                                        <div class="modal-header border-0"><button class="btn-close" type="button" data-bs-dismiss="modal" aria-label="Close"></button></div>
                                        <div class="modal-body text-center pb-5">
                                            <div class="container">
                                                <div class="row justify-content-center">
                                                    <div class="col-lg-8">
                                                        <!-- Portfolio Modal - Title-->
                                                        <h2 class="portfolio-modal-title text-secondary text-uppercase mb-0">Tasty Cake</h2>
                                                        <!-- Icon Divider-->
                                                        <div class="divider-custom">
                                                            <div class="divider-custom-line"></div>
                                                            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                                                            <div class="divider-custom-line"></div>
                                                        </div>
                                                        <!-- Portfolio Modal - Image-->
                                                        <img class="img-fluid rounded mb-5" src="img/submarine.png" alt="..." />
                                                        <!-- Portfolio Modal - Text-->
                                                        <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia neque assumenda ipsam nihil, molestias magnam, recusandae quos quis inventore quisquam velit asperiores, vitae? Reprehenderit soluta, eos quod consequuntur itaque. Nam.</p>
                                                        <button class="btn btn-primary" href="#!" data-bs-dismiss="modal">
                                                            <i class="fas fa-times fa-fw"></i>
                                                            Close Window
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </section>
        <!-- akhir portfolio -->

         <!-- About -->
         <section class="page-section bg-primary text-white mb-0" id="about">
            <div class="container">
              <!-- About Section Heading-->
              <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
              <!-- Icon Divider-->
              <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
              </div>
              <!-- About Section Content-->
              <div class="row">
                <div class="col-lg-4 ms-auto">
                  <p class="lead">
                    Freelancer is a free bootstrap theme created by Start Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as well as optional SASS stylesheets for easy customization.
                  </p>
                </div>
                <div class="col-lg-4 me-auto"><p class="lead">You can create your own custom avatar for the masthead, change the icon in the dividers, and add your email address to the contact form to make it fully functional!</p></div>
              </div>
              <!-- About Section Button-->
              <div class="text-center mt-4">
                <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                  <i class="fas fa-download me-2"></i>
                  Free Download!
                </a>
              </div>
            </div>
          </section>
        <!-- Akhir about -->

        <!-- Contact -->
        <section class="page-section" id="contact" data-sb-form-api-token="API_TOKEN">
            <div class="container">
              <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>
              <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
                <div class="divider-custom-line"></div>
              </div>
                <!-- form -->
                <div class="row justify-content-center">
                    <div class="col-lg-8 col-xl-7">
                            <!-- Nama-->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="name" type="text" placeholder="Enter your name..." data-sb-validations="required" />
                            <label for="name">Full name</label>
                            <div class="invalid-feedback" data-sb-feedback="name:required">A name is required.</div>
                        </div>
                            <!-- akhir nama -->

                            <!-- email -->
                        <div class="form-floating mb-3">
                            <input class="form-control" id="email" type="email" placeholder="name@example.com" data-sb-validations="required,email" />
                            <label for="email">Email address</label>
                            <div class="invalid-feedback" data-sb-feedback="email:required">An email is required.</div>
                            <div class="invalid-feedback" data-sb-feedback="email:email">Email is not valid.</div>
                        </div>
                            <!-- akhir email -->

                            <!-- nomer -->
                        <div class="form-floating mb-3">
                        <input class="form-control" id="phone" type="tel" placeholder="(123) 456-7890" data-sb-validations="required" />
                        <label for="phone">Phone number</label>
                        <div class="invalid-feedback" data-sb-feedback="phone:required">A phone number is required.</div>
                    </div>
                            <!-- akhir nomer -->

                            <!-- pesan -->
                    <div class="form-floating mb-3">
                        <textarea class="form-control" id="message" type="text" placeholder="Enter your message here..." style="height: 10rem" data-sb-validations="required"></textarea>
                        <label for="message">Message</label>
                        <div class="invalid-feedback" data-sb-feedback="message:required">A message is required.</div>
                    </div>
                            <!-- akhir pesan -->
                            <button class="btn btn-primary btn-xl disabled" id="submitButton" type="submit">Send</button>
                    </div>
                </div>            
            </div>
        </section>
        <!-- Akhir Contact -->

        <!-- footer -->
        <footer class="footer text-center p-4" style="background-color:  rgb(15, 51, 71);">
            <div class="container">
                <div class="row">
                    <!-- Footer Location-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Location</h4>
                        <p class="lead mb-0">
                            2215 John Daniel Drive
                            <br />
                            Clark, MO 65243
                        </p>
                    </div>
                    <!-- Footer Social Icons-->
                    <div class="col-lg-4 mb-5 mb-lg-0">
                        <h4 class="text-uppercase mb-4">Around the Web</h4>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-facebook-f"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-twitter"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-linkedin-in"></i></a>
                        <a class="btn btn-outline-light btn-social mx-1" href="#!"><i class="fab fa-fw fa-dribbble"></i></a>
                    </div>
                    <!-- Footer About Text-->
                    <div class="col-lg-4">
                        <h4 class="text-uppercase mb-4">About Freelancer</h4>
                        <p class="lead mb-0">
                            Freelance is a free to use, MIT licensed Bootstrap theme created by
                            <a href="http://startbootstrap.com" style="color: aqua;">Start Bootstrap</a>
                        </p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Copyright Section-->
        <div class="copyright py-4 text-center text-white" style="background-color: rgb(10, 44, 88);">
            <div class="container"><small>Copyright &copy; Your Website 2021</small></div>
        </div>
        <!-- akhirfooter -->


        <!-- modal -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </body>
</html>