<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Online Payment</title>

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
                        
                         <label style="font-size: 77px;" class="mb-4">Fee Payment Online  </label> <br> 
                        <label class="" style="font-size: 32px;">
                            Home/Fee Payment Online  
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

    <section class="container">
        <p style="font-size: 52px;" class="text-center mt-5 mb-3">Fee Payment Online</p>
        <div class="horizontalLine"></div>
        <p class="text-center mt-5 mb-5" style="font-size: 32px;"> Monthly Fees can be paid Online by the following</p>

        <img src="{{ asset('assets/img/qfix.png') }}" alt="" srcset="" class="d-flex justify-content-center" style="margin:auto;width: 79px;height: 40px;">

        <p class="text-center mt-5" style="font-size: 32px;">Press on the below link</p>
        <p class="text-center mt-3" style="font-size: 32px;">
            <a href="https://user.eduqfix.com/login" style="font-size: 32px">PAY FEES ONLINE</a>
            <a href="https://eduqfix.com" style="font-size: 32px">(https://www.eduqfix.com/)</a>
        </p>
        <br>
        <p style="font-size:32px;" class="mt-5 text-center">Or</p>
        <p style="font-size:32px;" class="mt-3 text-center">Download the App from</p>
        <img src="{{ asset('assets/img/appstore.png') }}" alt="" srcset="" class="d-flex justify-content-center mt-3" style="margin:auto;width: 400px;height: 247px;">
        <br><br><br><br><br>
        <img src="{{ asset('assets/img/question.png') }}" alt="" srcset="" class="d-flex justify-content-center mt-5" style="margin:auto;width: 67px;height: 67px;">


        <p style="font-size:32px;" class="mt-3 text-center">if you need help please click on this</p>
        <p class="text-center" style="margin-bottom: 550px">

            <a href="https://eduqfix.com/userGuide.html" style="font-size: 32px" >User Guide for fees payment</a>
        </p>


    </section>

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

<a href="http://"></a>