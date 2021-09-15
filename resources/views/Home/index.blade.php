<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    {{-- Css --}}
    <link rel="stylesheet" href="css/style.css">
    
    {{-- Bootstrap 5.1.0 --}}
    <link rel="stylesheet" href="bootstrap-5.1.0/css/bootstrap.min.css">

    {{-- FontAwesome --}}
    <link rel="stylesheet" href="fontawesome/css/all.min.css">

    {{-- Owl Carousel --}}
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="OwlCarousel2-2.3.4/dist/assets/owl.theme.default.min.css">
    
    <title>{{ $title }}</title>

</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-light mb-5">
      <div class="container">
        <a class="navbar-brand" href="#">
            <svg xmlns="http://www.w3.org/2000/svg" width="127.001" height="51.811" viewBox="0 0 127.001 51.811">
                <g id="Group_2596" data-name="Group 2596" transform="translate(-97.999 -34)">
                  <g id="Group_3" data-name="Group 3" transform="translate(157.32 46.265)">
                    <text id="DESIGNER_S_BLOG" data-name="DESIGNER&apos;S BLOG" transform="translate(-8.32 34.735)" fill="#231f20" font-size="5" font-family="YuGothicUI-Light, Yu Gothic UI" font-weight="300" letter-spacing="0.5em"><tspan x="0" y="0">DESIGNER&apos;S BLOG</tspan></text>
                    <text id="Spirit" transform="translate(-8.32 23.735)" fill="#4e1234" font-size="33" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">Spirit</tspan></text>
                  </g>
                  <path id="Path_2" data-name="Path 2" d="M793.2,1008.208c-3.474-.508-6.62.612-9.689,2.1-3.966,1.921-7.954,3.8-11.949,5.658a1.49,1.49,0,0,1-1.218.076,4.716,4.716,0,0,1-1.733-1.751c-.825-2.131-.147-4.141.851-6.127.157.129.246.169.282.237,1.546,2.9,4.159,3.646,7.086,3.094a21.953,21.953,0,0,0,14.08-8.455,13,13,0,0,0,2.789-10.185,7.3,7.3,0,0,0-6.732-6.212,15.866,15.866,0,0,0-6.883.958q-16.311,5.669-21.214,22.277a16.952,16.952,0,0,0-.393,9c1.129,4.511,4.259,6.3,8,6.131a19.27,19.27,0,0,0,8.5-2.786c1.651-.919,3.3-1.832,4.987-2.692a16.152,16.152,0,0,1,6.738-2.144c2.732-.092,3.934,1.569,3.072,4.149a3.781,3.781,0,0,1-.443,1.045,43.572,43.572,0,0,1-3.485,4.583,56.3,56.3,0,0,1-12.687,9.578c-.894.516-1.81.994-2.716,1.489l.063.15a7.368,7.368,0,0,0,.736-.166c1.664-.55,3.354-1.034,4.98-1.68,6.717-2.67,12.923-6.159,17.861-11.572a17.081,17.081,0,0,0,4.619-8.9C799.384,1011.753,797.564,1008.846,793.2,1008.208Zm-17.7-7.574a20.994,20.994,0,0,1,9.673-5.083l.029-.006a1.6,1.6,0,0,1,1.55,2.537,12.472,12.472,0,0,1-1.907,2.065,27.644,27.644,0,0,1-7.094,4.427,2.194,2.194,0,0,1-1.3.117C773.99,1004.206,773.6,1002.274,775.5,1000.635Z" transform="translate(-660.042 -952.571)" fill="#ea1b48"/>
                </g>
            </svg>              
          </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Learn</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">About</a>
                </li>

                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Welcome back, {{ ucwords(auth()->user()->name) }}
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                          <li>
                              <form action="/logout" method="post">
                                  @csrf
                                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                              </form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item me-3">
                        <a class="nav-link btn btn-danger btn-login text-white py-1 px-4 mt-1 me-0" href="/login">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-outline-danger text-danger py-1 px-4 mt-1 me-0" href="/register">Sign up</a>
                    </li>
                @endauth
            </ul>
        </div>
      </div>
    </nav>

    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <h2 class="fw-normal">Blog/News Page</h2>
                <br>
                <p class="fw-light">Lorem Ipsum is Simply <br> Dummy Text of The <br> Printing And </p>
            </div>
            <div class="col-md-8">
                <div class="container text-center my-3">
                    <div class="row mx-auto my-auto justify-content-center">
                        <div class="owl-carousel owl-theme">
                            @foreach ($head as $key => $h)
                                <div class="item">
                                    <a href="{{ $h['url'] }}" target="__blank">
                                        <img src="{{ $h['urlToImage'] }}" class="img-fluid image-head">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-5">
            <div class="col-md-5">
                <div class="row">
                    <div class="col-md-2">
                        <a href="" class="fw-normal category active2"> Latest</a>
                    </div>
                    <div class="col-md-10">
                        <a href="#" class="fw-normal category"> Popular</a>
                    </div>
                </div>

                @foreach ($latest as $key => $late)
                    @if ($key < 4)
                        <div class="row mt-3">
                            <div class="col-md-3">
                                <img src="{{ $late['urlToImage'] }}" alt="" class="img-fluid">
                            </div>
                            <div class="col-md-7">
                                <p class="text-muted side-time">{{ $late['publishedAt'] }}</p>
                                <a href="{{ $late['url'] }}" target="__blank" class="text-decoration-none" style="color: black">
                                    <p class="side-desc">{{ $late['title'] }}</p>
                                </a>
                                <p class="side-author">{{ $late['author'] }}</p>
                                <span class="badge rounded-pill">Photo</span>&nbsp;&nbsp;<span class="badge rounded-pill">Photography</span>
                            </div>
                        </div>
                    @endif
                @endforeach

            </div>
            <div class="col-md-7">
                <div class="row">
                    <div class="author justify">
                        <div class="child">
                            <img src="image/pp.jpg" alt="" class="img-fluid post-picture rounded-circle" style="width:34px;">&nbsp;&nbsp; 
                        </div>
                        <div class="child mt-3">
                            <p class="post-by">By <span class="post-name">{{ $popular['author'] }}</span> {{ $popular['publishedAt'] }}&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span class="badge rounded-pill">Photo</span>&nbsp;&nbsp;<span class="badge rounded-pill">Photography</span></p>
                        </div>
                        <div class="child post-share">
                            <div class="dropdown">
                                <span class="badge badge-danger rounded-pill py-2 px-3 fw-normal" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false"> Share <i class="fas fa-angle-down ms-2"></i></span>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                    <li><a class="dropdown-item" href="#">Facebook</a></li>
                                    <li><a class="dropdown-item" href="#">WhatsApp</a></li>
                                    <li><a class="dropdown-item" href="#">Telegram</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row mt-4 mb-5">
                    <div class="post-body">

                        <p class="post-body-title">{{ $popular['title'] }}</p>
                        
                        <img src="{{ $popular['urlToImage'] }}" alt="" class="img-fluid mb-3" style="height: 300px; width: 100%; object-fit: cover; object-position: center;">

                        <p class="post-body-content">{{ $popular['content'] }}</p>

                    </div>
                </div>
            </div>
        </div>
        
        <hr>
        
        <div class="footer mt-5">
            <div class="row">
                <div class="col-md-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="127.001" height="51.811" viewBox="0 0 127.001 51.811">
                        <g id="Group_2596" data-name="Group 2596" transform="translate(-97.999 -34)">
                            <g id="Group_3" data-name="Group 3" transform="translate(157.32 46.265)">
                                <text id="DESIGNER_S_BLOG" data-name="DESIGNER&apos;S BLOG" transform="translate(-8.32 34.735)" fill="#231f20" font-size="5" font-family="YuGothicUI-Light, Yu Gothic UI" font-weight="300" letter-spacing="0.5em"><tspan x="0" y="0">DESIGNER&apos;S BLOG</tspan></text>
                                <text id="Spirit" transform="translate(-8.32 23.735)" fill="#4e1234" font-size="33" font-family="SegoeUI, Segoe UI"><tspan x="0" y="0">Spirit</tspan></text>
                            </g>
                            <path id="Path_2" data-name="Path 2" d="M793.2,1008.208c-3.474-.508-6.62.612-9.689,2.1-3.966,1.921-7.954,3.8-11.949,5.658a1.49,1.49,0,0,1-1.218.076,4.716,4.716,0,0,1-1.733-1.751c-.825-2.131-.147-4.141.851-6.127.157.129.246.169.282.237,1.546,2.9,4.159,3.646,7.086,3.094a21.953,21.953,0,0,0,14.08-8.455,13,13,0,0,0,2.789-10.185,7.3,7.3,0,0,0-6.732-6.212,15.866,15.866,0,0,0-6.883.958q-16.311,5.669-21.214,22.277a16.952,16.952,0,0,0-.393,9c1.129,4.511,4.259,6.3,8,6.131a19.27,19.27,0,0,0,8.5-2.786c1.651-.919,3.3-1.832,4.987-2.692a16.152,16.152,0,0,1,6.738-2.144c2.732-.092,3.934,1.569,3.072,4.149a3.781,3.781,0,0,1-.443,1.045,43.572,43.572,0,0,1-3.485,4.583,56.3,56.3,0,0,1-12.687,9.578c-.894.516-1.81.994-2.716,1.489l.063.15a7.368,7.368,0,0,0,.736-.166c1.664-.55,3.354-1.034,4.98-1.68,6.717-2.67,12.923-6.159,17.861-11.572a17.081,17.081,0,0,0,4.619-8.9C799.384,1011.753,797.564,1008.846,793.2,1008.208Zm-17.7-7.574a20.994,20.994,0,0,1,9.673-5.083l.029-.006a1.6,1.6,0,0,1,1.55,2.537,12.472,12.472,0,0,1-1.907,2.065,27.644,27.644,0,0,1-7.094,4.427,2.194,2.194,0,0,1-1.3.117C773.99,1004.206,773.6,1002.274,775.5,1000.635Z" transform="translate(-660.042 -952.571)" fill="#ea1b48"/>
                        </g>
                    </svg>
                    <p class="post-body-content mt-5">Aenean sed nibh a magna posuere tempor. Nunc faucibus pellentesque nunc in aliquet. Donec congue, nunc vel tempor congue, enim sapien lobortis ipsum, in volutpat sem</p>
                </div>
                <div class="col-md-3 ps-5">
                    <p class="footer-title">Quick Links</p>
                    <ul class="list-unstyled">
                        <li>Home</li>
                        <li>About Us</li>
                        <li>Testimonials</li>
                        <li>Requst Call Back</li>
                        <li>Contack Us</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="footer-title">Services</p>
                    <ul class="list-unstyled">
                        <li>Lectus frigilla</li>
                        <li>Ipsum fermentum</li>
                        <li>Consequat tempor</li>
                        <li>Lacus tristique metus</li>
                        <li>Power & Energy</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <p class="footer-title">Get In Touch</p>
                    <p style="font-size: 18px">(1800) 574 9687</p>
                    <p style="font-size: 16px">Mauris imperdiet orci dapibus, commodo libero nec, interdum</p>
                    <span class="fa-stack" style="vertical-align: top;">
                        <i class="far fa-circle fa-stack-2x"></i>
                        <i class="fas fa-phone fa-stack-1x"></i>
                    </span>
                    <span class="fa-stack" style="vertical-align: top;">
                        <i class="far fa-circle fa-stack-2x"></i>
                        <i class="fas fa-envelope fa-stack-1x"></i>
                    </span>
                    <span class="fa-stack" style="vertical-align: top;">
                        <i class="far fa-circle fa-stack-2x"></i>
                        <i class="fas fa-globe fa-stack-1x"></i>
                    </span>
                    <span class="fa-stack" style="vertical-align: top;">
                        <i class="far fa-circle fa-stack-2x"></i>
                        <i class="fab fa-facebook fa-stack-1x"></i>
                    </span>
                </div>
            </div>
        </div>

        <p class="copyright">&copy; Copyright Spirit2020. All right reserved.</p>
        
    </div>


    {{-- jquery --}}
    <script src="js/jquery-3.6.0.min.js"></script>

    {{-- Bootstrap 5.1.0 --}}
    <script src="bootstrap-5.1.0/js/bootstrap.bundle.min.js"></script>
    
    {{-- owl carousel --}}
    <script src="OwlCarousel2-2.3.4/dist/owl.carousel.min.js"></script>
    
    {{-- javascript --}}
    <script src="js/script.js"></script>

</body>
</html>