<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lion King</title>

    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/frontpage.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/community.css') }}">
    
    <style>
       .maingif {
                    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6),  rgba(0, 0, 0, 0.8),rgba(0, 0, 0, 1)),url(' {{ asset('assets/img/book.jpg') }}');
                    background-size: cover;
                    background-position: center;
                    text-shadow: 0 0.05rem 0.1rem rgba(0, 0, 0, 0.5);
                    box-shadow: inset 0 0 5rem rgba(0, 0, 0, 0.5);
                    background-color:red;
                    height:65%;
                }
    </style>

</head>
<body>
    @include('frontend.layouts.navbar')

    <section>
        <div class="maingif" style=" "> 
            <div class="position-relative">

                <div class=" text-white" >
                    <p class="position-absolute start-50 translate-middle fs-2 text-center" >
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        
                         <label style="font-size: 77px;" class="mb-4">The Lion King</label> <br> 
                        <label class="" style="font-size: 32px;">
                            Home/Major Production/The Lion King
                        </label>
                    </p>
                    
                </div>
            </div>
                
        
        </div>
        <div class="d-flex justify-content-between ">
            <div class="flex-item">
              <p class="logo">
                <a href="/">
                
                    <img src=" {{ asset('assets/img/logotop.png') }}" alt="" srcset="" class="logo">
                </a>
              </p>
            </div>
            <div class="" onclick="openNav()" style="font-size:30px;cursor:pointer">  
                <div class="menu-btn">
                    <p class="menu" >
                        <img src=" {{ asset('assets/img/menu.png') }}" alt="" srcset="" class="" width="50" height="50" style="filter:invert(100%);">

                    </p>

                </div>            
            </div>
        </div>

    </section>

    <div class="container">
        <br><br><br>
        <p class="text-center mt-5" style="font-size: 32px;color: #8996A0;">Our very own</p>
        <p class="text-center" style="font-weight: 700;font-size: 77px;;">LION KING</p>

        <div class="row mt-5 mb-4">
            <div class="col-md-4 mt-5">
                <img src="{{ asset('assets/img/office2.jpg') }}" alt="" srcset="" style="width: 348px;height: 348px;">
            </div>
            <div class="col-md-4 mt-5">
                <img src="{{ asset('assets/img/office2.jpg') }}" alt="" srcset="" style="width: 348px;height: 348px;">

            </div>
            <div class="col-md-4 mt-5">
                <img src="{{ asset('assets/img/office2.jpg') }}" alt="" srcset="" style="width: 348px;height: 348px;">

            </div>

            <div class="col-md-4 mt-5">
                <img src="{{ asset('assets/img/office2.jpg') }}" alt="" srcset="" style="width: 348px;height: 348px;">

            </div>
            <div class="col-md-4 mt-5">
                <img src="{{ asset('assets/img/office2.jpg') }}" alt="" srcset="" style="width: 348px;height: 348px;">

            </div>
            <div class="col-md-4 mt-5">
                <img src="{{ asset('assets/img/office2.jpg') }}" alt="" srcset="" style="width: 348px;height: 348px;">

            </div>
        </div>
        <br>
        <img src="{{ asset('assets/img/galleryicon.png') }}" alt="" srcset="" class="d-flex justify-content-center mt-5" style="width: 48.33px;height: 48.33px; margin:auto;" >
        <p class="text-center mt-3" style="font-size:17px;">To view more Images please check out our  <br>
            <a href="/gallery"> Gallery</a> or Social Media Pages</p> <br><br><br>

        <div class="text-center">
            <i style="font-weight:300; font-size:32;">
                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas non lacus ut nulla rhoncus tristique.
                 Praesent vitae libero eget lorem consectetur scelerisque. Vestibulum lobortis, quam ac vehicula sodales,
                  neque neque bibendum risus, in porta leo elit quis risus. Donec vel orci finibus diam venenatis rhoncus et nec purus.
            </i> <br><br><br>
                <p style="font-size: 32px;">
                    Morbi mollis risus eget dapibus venenatis. Interdum et malesuada fames ac ante ipsum primis in faucibus.
                 Fusce luctus eros rutrum, pulvinar tortor a, cursus lacus. Vivamus ut dui a nulla fringilla porta. Quisque 
                 porta varius consectetur. Praesent accumsan odio at tortor posuere, sit amet rutrum lorem sagittis. Proin
                  vitae tincidunt urna, nec sollicitudin sapien. Aliquam est libero, elementum ut leo ut, facilisis molestie lacus.
                Praesent viverra dictum purus, quis consequat magna. Donec porta enim a elit ultrices, sit amet vulputate
                 ligula fermentum. Curabitur ut tellus faucibus, ullamcorper nunc nec, feugiat mi. Praesent ante leo, lacinia 
                 quis mollis quis, convallis venenatis sapien. Vivamus sagittis nisi est, in fermentum risus sollicitudin eget. 
                 Nam tempus id tortor eu interdum. Vivamus a nunc quis metus pellentesque consequat. Donec dignissim libero mauris,
                  ut volutpat massa congue nec. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec ut leo aliquam,
                   posuere dui a, blandit orci. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia 
                   curae; Nunc sed erat finibus sem porttitor pretium at eu diam. Nunc mollis risus arcu, vel cursus turpis ultrices et.
                Sed quam lectus, faucibus egestas augue eget, malesuada tincidunt nisi. Suspendisse non sagittis ex, cursus mattis 
                eros. Sed eu lorem sit amet quam tincidunt condimentum quis non tellus. Vestibulum ac nisi ex. Curabitur pulvinar 
                suscipit elit. In risus neque, interdum non erat at, dignissim laoreet magna. Mauris et ante ultrices tellus tincidunt
                 cursus a in tellus.
                </p>
                <br><br><br><br>
        </div>
    </div>

    <section  style="background-color: #0E0E0E; ">
        <br><br><br><br><br><br><br>
        <div class="container" >

            <div class="row d-flex justify-content-evenly text-center text-light mb-4 footermenu">
                <div class="col-sm-4">
                    <b class="text-light">Academics</b>
                    <p class="mt-3 text-secondary">Fee Structure</p>
                    <p class="text-secondary">Fee Payments - Online</p>
                    <p class="text-secondary">Others</p>
                </div>
                <div class="col-sm-4">
                    <b class="text-light">Archives</b>
                    <p class="mt-3 text-secondary">Co-Curricular Activities</p>
                </div>
                <div class="col-sm-4">
                    <b class="text-light">Gallery</b>
                    <p class="mt-3 text-secondary">Major Production</p>
                    <p class="text-secondary">Inter House Music Competition</p>
                    <p class="text-secondary">Others</p>
                </div>
            </div>

            
            <div class="d-flex justify-content-center"><img src="{{ asset('assets/img/logo_title_2.png') }}" alt="" srcset="" style="width: 150px; height: 150px;"></div>
            
            <div class="d-flex justify-content-between text-secondary"> 
                <p>© 2023 Neuhof English Medium School</p>
                <p>Facebook  Twitter</p>
            </div>

        </div>
        <br><br>
    </section>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

<script>
    function openNav() {
      document.getElementById("myNav").style.height = "100%";
    }
    
    function closeNav() {
      document.getElementById("myNav").style.height = "0%";
    }
    </script>
</html>