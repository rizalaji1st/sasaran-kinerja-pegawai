<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <style>
        .carousel-item {
            height: 100vh;
            min-height: 350px;
            background: no-repeat center center scroll;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }

        section {
            padding-top: 5rem;
            padding-bottom: 5rem;
        }

        .lnr {
            display: inline-block;
            fill: currentColor;
            width: 1em;
            height: 1em;
            vertical-align: -0.05em;
            stroke-width: 1;
        }

        .services-icon {
            margin-bottom: 20px;
            font-size: 30px;
        }

        bgc2,
        .vLine,
        .hLine {
            background-color: #0F52BA;
        }

        .quote-icon {
            font-size: 40px;
            margin-bottom: 20px;
        }

        .services-icon {
            font-size: 60px;
            margin-left: 2rem;
        }
    </style>

    <title>SKP UNS</title>
</head>

<body>
    <h1>Hello, world!</h1>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">SKP Universitas Sebelas Maret</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    <li class="nav-item">
                        @if (Route::has('login'))
                        @auth
                        @else
                        <a class="nav-link" href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>
                        @endauth
                        @endif
                    </li>
                    <li class="nav-item">
                        @if (Route::has('login'))
                        @auth
                        @else

                        @if (Route::has('register'))
                        <a class="nav-link" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                        @endif
                        @endauth
                        @endif
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <!-- Slide Two - Set the background image for this slide in the line below -->
                <div class="carousel-item active" style="background-image: url('https://portalika.id/wp-content/uploads/2019/04/WhatsApp-Image-2019-04-29-at-14.58.07.jpeg')">
                </div>
                <!-- Slide Three - Set the background image for this slide in the line below -->
                <div class="carousel-item" style="background-image: url('https://c.pxhere.com/images/3c/fd/32338c767402cb2ecf93651b1099-1447111.jpg!d')">
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </header>

    <!-- Page Content -->
    <section class="py-5 text-center">
        <div class="container">
            <h2 class="text-center">Cara Penilaian Prestasi Kinerja Pegawai</h2>
            <p class="text-muted mb-5 text-center">Terdapat Tiga Aspek Dalam Penilaian Kinerja Pegawai</p>
            <div class="row">
                <div class="col-sm-6 col-lg-4 mb-3">
                    <svg class="lnr text-primary services-icon">
                        <use xlink:href="#lnr-magic-wand"></use>
                    </svg>
                    <h6>SKP</h6>
                    <p class="text-muted">Penilaian SKP dilakukan dengan cara membandingkan antara realisasi kerja dengan target dari aspek kuantitas, kualitas, waktu dan/atau biaya.</p>
                </div>
                <div class="col-sm-6 col-lg-4 mb-3">
                    <svg class="lnr text-primary services-icon">
                        <use xlink:href="#lnr-heart"></use>
                    </svg>
                    <h6>Perilaku Kerja</h6>
                    <p class="text-muted">Penilaian perilaku kerja dilakukan dengan cara pengamatan sesuai dengan kriteria yang telah ditetapkan.</p>
                </div>
                <div class="col-sm-6 col-lg-4 mb-3">
                    <svg class="lnr text-primary services-icon">
                        <use xlink:href="#lnr-paperclip"></use>
                    </svg>
                    <h6>Prestasi Kerja</h6>
                    <p class="text-muted">Penilaian prestasi kerja dilakukan dengan cara menggabungkan 60% Penilaian SKP dan 40% Penilaian Perilaku Kerja</p>
                </div>
            </div>
        </div>
    </section>

    </div>
    <!-- /.container -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://cdn.linearicons.com/free/1.0.0/svgembedder.min.js"></script>

</body>

</html>