<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    {{-- <!-- Fonts --> --}}
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    {{-- <!-- Styles --> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
    crossorigin="anonymous">
    {{-- google font --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;500&display=swap" rel="stylesheet">
    {{-- fonteawsom --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" 
    integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
        a{
            text-decoration: none;
            color: black;
        }
    </style>
</head>
<body>
    {{-- nav bar  --}}
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top shadow p-3 mb-5 bg-body rounded">
        <div class="container">
            <a class="navbar-brand" href="#"><b>DigitalBC</b></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                </ul>
                <div class="d-flex">
                    @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a class="btn btn-success" href="{{ url('/cards') }}" class="">Home</a>
                        @else
                            <a class="btn " style="background-color: #432c7e; color: white;" href="{{ route('login') }}" class="">Log in</a>
    
                            @if (Route::has('register'))
                                <a class="btn btn-secondary" href="{{ route('register') }}" class="">Register</a>
                            @endif
                        @endauth
                    </div>
                    @endif
                </div>
            </div>
            
        </div>
    </nav>

    {{-- hero div --}}
    <div class="container mb-5">
        <div class="row row mt-5">
            <div class="col-md-6 p-5">
                <div class="row">
                    <div class="col-md-12">
                        <h1 style="font-family: 'Roboto', sans-serif;">First digital business card in Algeria</h1>                        
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>DigitalBC is a free digital business card and contact manager app designed to help you grow your network.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <a href="#"><img class="img-fluid" src="{{asset('assets/img/app_store.png')}}" alt="app_store" srcset=""></a>
                        
                    </div>
                    <div class="col-md-6">
                        <a href="#"><img class="img-fluid" src="{{asset('assets/img/google_play_badge.png')}}" alt="google_play_badge" srcset=""></a> 
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="{{asset('assets/img/hero.png')}}" alt="hero" srcset="">                
            </div>
        </div>
    </div>
    {{-- more info part --}}
    <div class="container-fluid text-center mt-5" style="color: #432c7e;background-color: #ece1ff;">
        <div class="row justify-content-md-center">
            <div class="col-xs-12 col-md-4 col-xl-3 p-5">
                <div class="row">
                    <i class="fa-solid fa-clipboard-check fa-8x"></i>
                </div>
                <div class="row">
                    <strong class="mt-3">Easily create digital business cards</strong>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-xl-3 p-5">
                <div class="row">
                    <i class="fa-solid fa-bolt-lightning fa-8x"></i>
                </div>
                <div class="row">
                    <strong class="mt-3">Share your cards with anyone</strong>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-xl-3 p-5">
                <div class="row">
                    <i class="fa-solid fa-address-book fa-8x"></i>
                </div>
                <div class="row">
                    <strong class="mt-3">Manage your contacts seamlessly</strong>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-xl-3 p-5">
                <div class="row">
                    <i class="fa-solid fa-address-card fa-8x"></i>
                </div>
                <div class="row">
                    <strong class="mt-3">Turn paper cards into digital contacts</strong>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer -->
    <footer class="text-center text-lg-start bg-white text-muted">
        <!-- Section: Social media -->
        <section class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom">
        <!-- Left -->
        <div class="me-5 d-none d-lg-block">
            <span>Get connected with us on social networks:</span>
        </div>
        <!-- Left -->
    
        <!-- Right -->
        <div>
            <a href="" class="me-4 link-grayish">
            <i class="fab fa-facebook-f"></i>
            </a>
            <a href="" class="me-4 link-grayish">
            <i class="fab fa-twitter"></i>
            </a>
            <a href="" class="me-4 link-grayish">
            <i class="fab fa-google"></i>
            </a>
            <a href="" class="me-4 link-grayish">
            <i class="fab fa-instagram"></i>
            </a>
            <a href="" class="me-4 link-grayish">
            <i class="fab fa-linkedin"></i>
            </a>
            <a href="" class="me-4 link-grayish">
            <i class="fab fa-github"></i>
            </a>
        </div>
        <!-- Right -->
        </section>
        <!-- Section: Social media -->
    
        <!-- Section: Links  -->
        <section class="">
        <div class="container text-center text-md-start mt-5">
            <!-- Grid row -->
            <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                <!-- Content -->
                <h6 class="text-uppercase fw-bold mb-4">
                <i class="fas fa-gem me-3 text-grayish"></i>DigitalBC
                </h6>
                <p>
                Here you can use rows and columns to organize your footer content. Lorem ipsum
                dolor sit amet, consectetur adipisicing elit.
                </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                Products
                </h6>
                <p>
                <a href="#!" class="text-reset">Angular</a>
                </p>
                <p>
                <a href="#!" class="text-reset">React</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Vue</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Laravel</a>
                </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">
                Useful links
                </h6>
                <p>
                <a href="#!" class="text-reset">Pricing</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Settings</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Orders</a>
                </p>
                <p>
                <a href="#!" class="text-reset">Help</a>
                </p>
            </div>
            <!-- Grid column -->
    
            <!-- Grid column -->
            <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                <!-- Links -->
                <h6 class="text-uppercase fw-bold mb-4">Contact</h6>
                <p><i class="fas fa-home me-3 text-grayish"></i> New York, NY 10012, US</p>
                <p>
                <i class="fas fa-envelope me-3 text-grayish"></i>
                index@example.com
                </p>
                <p><i class="fas fa-phone me-3 text-grayish"></i> + 01 234 567 88</p>
                <p><i class="fas fa-print me-3 text-grayish"></i> + 01 234 567 89</p>
            </div>
            <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
        </section>
        <!-- Section: Links  -->
    
        <!-- Copyright -->
        <div class="text-center p-4" style="background-color: rgba(0, 0, 0, 0.025);">
        © 2022 Copyright:
        <a class="text-reset fw-bold" href="https://indexcommunication.com/">IndexCommunication.com</a>
        </div>
        <!-- Copyright -->
    </footer>
    <!-- Footer -->




    {{-- bootstrap 5 js --}}
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" 
    crossorigin="anonymous"></script>
</body>
</html>