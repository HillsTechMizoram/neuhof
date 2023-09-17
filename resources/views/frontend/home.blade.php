<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Neuhof</title>
    <link rel="shortcut icon" href="{{ asset('assets/img/logo.png') }}" type="image/x-icon">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('assets/css/frontpage.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/menu.css') }}">
    
    <style>
       .maingif {
    background-image: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.5),  rgba(0, 0, 0, 0.6),rgba(0, 0, 0, 0.8)),
    url(' {{ asset('assets/major1.gif') }}');
  background-size: cover;
  background-position: center;
  text-shadow: 0 0.05rem 0.1rem rgba(0, 0, 0, 0.5);
  box-shadow: inset 0 0 5rem rgba(0, 0, 0, 0.5);
  background-color:red;
  height:100%;
}
    </style>
</head>
<body style="background-color: #F3F4F4">
    @include('frontend.layouts.navbar')
    <section>
        
        {{-- <video width="100%" height="" autoplay loop>
            <source src="{{ asset('assets/major1.gif') }}">
        </video> --}}
        
        <div class="maingif" style=" "> 
            <div class="position-relative">

                <div class=" text-white" >
                    <p class="position-absolute start-50 translate-middle fs-2 text-center" style="font-family: ">
                        <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
                        
                        PERFORMING ARTS <br> <br>
                        <x class="fs-4">
                            Galatian 5:22-23 <br>
                            <i>
                                "But the fruit of the spirit is love, joy, peace, patience, kindness, goodness, faithfulness, gentleness, and self-control. Against such things, there is no law."

                            </i>
                        </x>
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
        <p class="pastpresentTitle mt-5">
            <br>
            <b>Our Community, Past and <br> Present</b>
        </p>
        <br>
        <div class="horizontalLine"></div>
    </section>

    <section class="container">
        <img src="{{ asset('assets/img/vector.png') }}" alt="" srcset="" class="mt-5 ">

        <div class="row">
            <div class="col-md pastpresentText">
                <p class="ms-3" style="font-size: 34px">
                    "Neuhof School is a trailblazer amongst its peers where students are provided not just quality
                     education but equal emphasis laid on all round development this is tought through participation
                      in co-curricular activities to help the students develop and learn social skills,
                     organizational skills, leadership and team work, creativity, time management and overall personality development. 
                       
                </p>
                
            </div>
            <div class="col-md">
                <img src="{{ asset('assets/img/team-1.jpg') }}" alt="" srcset="" width="600" height="" class="pastpresentpic">
            </div>
        </div>

        <div class="row">
            <div class="col-md">
                <p class="mt-5 ms-3 ">
                    <div class="row">
                    <br>
                        <div class="col fs-5" style="color: #D8C6B0;">
                            <a href="/community" style="text-decoration: none; color: #D8C6B0;">
                                <img src="{{ asset('assets/img/click2.png') }}" alt="" srcset="">
                            
                                Click here to read more of her quotes and get inspired
                            </a>

                        </div>
                    </div>
                </p>
            </div>
            <div class="col-md text-center mt-2">
                <p class=""> <b class="jeweltitle"> Jewel Fanai </b> <br> 
                <label class="jewelbody">
                    Chartered Accountant <br>
                Passed out Student from Neuhof English Medium School
                </label>
            </p>
            </div>
        </div>
    </section>

    <section class="container mt-5 mb-5 ">
        <div class="">
            <div class="row ">
                
                <div class="col-md d-flex justify-content-center mb-3">
                    <div class="studentCard position-relative" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3),  rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.7)), url('{{ asset('assets/img/team-2.jpg') }}');">
                        <div class="studentCardText  position-absolute" style="width: 220px;">
                            <p class="studentCardTitle buttom-40 ms-2 mt-1 mb-4">Jenny Lalthlamuani</p>
                            <p class="studentCardBody fs-5 buttom-30">
                                <img src="{{ asset('assets/img/click.png') }}" alt="" srcset="" class="me-2">

                                Learn more about Scholarship
                                </p>
                        </div>
                    </div>
                </div>
                <div class="col-md d-flex justify-content-center mb-3">
                    <div class="studentCard position-relative" style="background-image: linear-gradient(rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3),  rgba(0, 0, 0, 0.5),rgba(0, 0, 0, 0.7)), url('{{ asset('assets/img/team-1.jpg') }}');">
                        <div class="studentCardText  position-absolute" style="width: 110px;">
                            <p class="studentCardTitle buttom-40 ms-2 mt-1 mb-4">John Das</p>
                            <p class="studentCardBody fs-5 buttom-30">
                                <img src="{{ asset('assets/img/click.png') }}" alt="" srcset="" class="me-2">

                                Learn more about Scholarship
                                </p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

        <p class="mt-5 text-center fs-5">
            Not just them, but NEUHOF School has witnessed remarkable students who have achieved their goals and excelled in various fields. 
            From winning prestigious academic competitions to showcasing exceptional talent in sports, music, and arts, these students have 
            brought pride to the school and themselves. The supportive and nurturing environment at NEUHOF School, combined with the guidance
            of dedicated teachers, has played a pivotal role in unlocking the potential of these students and helping them reach great heights.
        </p>
    </section>
<br>
<br>
<br>

    <section style="background-color: #0E0E0E;" >
        <div class="container position-relative">
            <br>

            <div class="row">
                <div class="col-md founderTitle mt-5 mb-3">
                    
                    Founder's Message
                </div>
                <div class="col"></div>
            </div>

            <div class="row ">
                <div class="col-md">
                    <img src="{{ asset('assets/img/team-2.jpg') }}" alt="" srcset="" class="founderpic" style="">
                    <p class="founderText mt-4" style="font-size: 22px;">
                        <b>Mrs Malthanzuali (L)</b> <br>
                            Founder of Neuhof English Medium School <br>
                            Ex. Principal of Neuhof (1984 - 2006) <br>
                    </p>
                </div>
                <div class="col-md founderText" style="font-size: 21px;">
                    <div class="ms-5">
                        <b> Introduction </b> <br>
                    The School, Neuhof, meaning 'New Farm' was established in 1984 by me and my late husband, financially and physically backed up by our parents Mr. Ch. Saprawnga and Mrs. Lalkungi.  <br><br>
                    <b>The Beginning</b> <br>
                    In the first year 1984, classes were from Nursery to Class-V. In 1985, Class-VI was opened and in the following year Class-VII. With God's blessings, we had enough students to meet the needs of the School. <br><br>
                    <b>The Dream and Passion</b> <br>
                    It was our dream to establish a school where even the poor section of the society could afford to send their children. The fees were low and the uniforms were simple. I think we had achieved our goal. <br><br>
                    <b>The First Principle</b> <br>
                    My husband, Ch. Lalrosanga was the first Principal but with his death in 1998, I had to continue to take up the position as the Principal. Due to my ill health, I could not continue to look after the school. <br><br>
                    <b>The Commitment</b> <br>
                    In 2007, the school was handed over to Sir Andrew Lalremkima, and I have never once regretted this decision. He has consistently done his best in upholding the standards of the school. <br><br>
                    <b>The Contentment</b> <br>
                    I want to congratulate Sir Andrew for being awarded his school the Best School (East India Zone) by the 9th International English Language Competition, 2019-2020.Bravo! Keep on shining Sir Andrew and the students of Neuhof. <br><br>
                    </div>
                </div>
            </div>
            <div class="">
                <img src="{{ asset('assets/img/vector.png') }}" alt="" srcset="" class="mt-5 position-absolute founderquotevector" style="
                left: 4%;
                top: 85%;
                ">


            </div>
            <div class="text-center">

                <p class="founderQuote" class="">Your dedication and hard work today will pave the way for a brighter tomorrow.</p>
            </div>
            <br>
            
        </div>
    </section>

<br>

    <section class="container mb-5">
        <p class="pastpresentTitle mt-5 ">
            <br>
            <b>MAJOR HOUSE PRODUCTION</b>
        </p>
        <br>
        <div class="horizontalLine"></div>
    </section>

    <section class="container mb-5 " style=""> 
        <div class="row">
            <div class="col-md d-flex justify-content-center mb-3">
                <div class=" position-relative " style="background-color: #E3E5E5;width: 389.98px; height: 600px; ">
                    <img src="{{ asset('assets/img/office1.jpg') }}" alt="" srcset="" class="ms-4 mt-4" style="width: 335.98px; height: 190px;">
                    <br><br><br>
                    <div class="ms-4 me-4">
                        <h3>Our own The Lion King</h3>
                        Mamma Mia is a heartwarming musical with ABBA hits, comedic moments, and a feel-good story about a young woman's quest to discover her father's identity before her wedding. A must-watch for musical fans!
                    </div>
                    <div class="majorCardText  position-absolute ms-4" style="">
                        <p class="majorCardBody fs-5 buttom-30">
                            <a href="/lion" style="text-decoration: none; color: #000000;">
                                <img src="{{ asset('assets/img/click2.png') }}" alt="" srcset="" class="me-2">
                                Read more about our very own 'The Lion King'
                            </a>
                        </p>
                    </div>  
                </div>
            </div>
            <div class="col-md d-flex justify-content-center mb-3">
                <div class=" position-relative " style="background-color: #E3E5E5;width: 389.98px; height: 600px; ">
                    <img src="{{ asset('assets/img/office1.jpg') }}" alt="" srcset="" class="ms-4 mt-4" style="width: 335.98px; height: 190px;">
                    <br><br><br>
                    <div class="ms-4 me-4">
                        <h3>Our own Mama Mia</h3>
                        Mamma Mia is a heartwarming musical with ABBA hits, comedic moments, and a feel-good story about a young woman's quest to discover her father's identity before her wedding. A must-watch for musical fans!
                    </div>
                    <div class="majorCardText  position-absolute ms-4" style="">
                        <p class="majorCardBody fs-5 buttom-30">
                            <a href="/mamamia" style="text-decoration: none; color: #000000;">
                                <img src="{{ asset('assets/img/click2.png') }}" alt="" srcset="" class="me-2">
                                Read more about our very own 'Mama Mia'
                            </a>
                            </p>
                    </div>  
                </div>
            </div>
            <div class="col-md d-flex justify-content-center mb-3">
                <div class=" position-relative " style="background-color: #E3E5E5;width: 389.98px; height: 600px; ">
                    <img src="{{ asset('assets/img/office1.jpg') }}" alt="" srcset="" class="ms-4 mt-4" style="width: 335.98px; height: 190px;">
                    <br><br><br>
                    <div class="ms-4 me-4">
                        <h3>Our own The Greatest Showman</h3>
                        Mamma Mia is a heartwarming musical with ABBA hits, comedic moments, and a feel-good story about a young woman's quest to discover her father's identity before her wedding. A must-watch for musical fans!
                    </div>
                    <div class="majorCardText  position-absolute ms-4" style="">
                        <p class="majorCardBody fs-5 buttom-30">
                            <a href="/showman" style="text-decoration: none; color: #000000;">
                                <img src="{{ asset('assets/img/click2.png') }}" alt="" srcset="" class="me-2">
                                Read more about our very own 'The Greatest Showman'
                            </a>
                            </p>
                    </div>  
                </div>
            </div>
        </div>
    </section>
        

   <section class="container" style=" padding-top:100px;">
    <div class="row ">
        <div class="col-md-6 smartclassTitle">Exploring our classrooms and Education</div>
        <div class="col-md-6 text-end smartclassLabel mt-3">Smart classrooms enhance learning by integrating technology and interactive tools, creating an engaging educational environment for students. <br> 
            <div class="mt-3"></div> 
            <img src="{{ asset('assets/img/click2.png') }}" alt="" srcset="" class="me-2">
            <label class="smartclassLearnMore ">Learn more about the program </label>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-7">
            <img src="{{ asset('assets/img/office1.jpg') }}" alt="" srcset="" class="smartclassImage mt-4" style="">
            <p class="smartclassExplore mt-4">ELEMENTARY</p>
            <p class="smartclassTitle">The need for Smart classes with the latest technology</p>
        </div>
        <div class="col-lg-5">
                <div class=" d-flex justify-content-between ms-4" >
                    <p class="mt-3 "><label for="" class="smartclassExplore"> CLASSROOM </label> <br>  <label class="smartclassExploreBody mt-2">Smart classes with the latest <br> technology</label> </p>
                    <img src="{{ asset('assets/img/office1.jpg') }}" alt="" srcset="" class=" mt-3" style="width: 124px; height: 92.91px;"> 
                    
            
                </div>
        <div class="smallhorizontalLine ms-4"></div>
                <div class=" d-flex justify-content-between ms-4" >
                    <p class="mt-1 "><label for="" class="smartclassExplore"> PLAYGROUND </label> <br> <label class="smartclassExploreBody mt-2">Play and have fun around the <br> school campus</label> </p>
                    <img src="{{ asset('assets/img/office1.jpg') }}" alt="" srcset="" class=" mt-3" style="width: 124px; height: 92.91px;"> 
                    
            
                </div>
        <div class="smallhorizontalLine ms-4"></div>
                <div class=" d-flex justify-content-between ms-4" >
                    <p class="mt-1 "><label for="" class="smartclassExplore"> DANCE ROOM </label> <br> <label class="smartclassExploreBody mt-2">Our very own dancing <br> room</label> </p>
                    <img src="{{ asset('assets/img/office1.jpg') }}" alt="" srcset="" class=" mt-3" style="width: 124px; height: 92.91px;"> 
                    
            
                </div>
        <div class="smallhorizontalLine ms-4"></div>
                <div class=" d-flex justify-content-between ms-4" >
                    <p class="mt-1 "><label for="" class="smartclassExplore"> MUSIC ROOM </label> <br> <label class="smartclassExploreBody mt-2">As they say music is <br> the Universal Language</label> </p>
                    <img src="{{ asset('assets/img/office1.jpg') }}" alt="" srcset="" class=" mt-3" style="width: 124px; height: 92.91px;"> 
                    
            
                </div>
        <div class="smallhorizontalLine ms-4"></div>
                <div class=" d-flex justify-content-between ms-4" >
                    <p class="mt-1 "><label for="" class="smartclassExplore"> CLUBS </label> <br> <label class="smartclassExploreBody mt-2">School provides different <br> clubs for various activities</label> </p>
                    <img src="{{ asset('assets/img/office1.jpg') }}" alt="" srcset="" class=" mt-3" style="width: 124px; height: 92.91px;"> 
                    
            
                </div>
        <div class="smallhorizontalLine ms-4"></div>

        </div>
    </div>
    <p class="smartclassExploreBody">Elementary classes in Neuhof English Medium School is offering smart classes that utilize <br> modern technology to enhance the learning experience.</p>
   </section>
   <br><br><br><br><br><br><br>

    <section style="background-image: url('{{ asset("assets/img/aboutusbg.png") }}'); height:1080px; width:auto; background-repeat:no-repeat;" class="position-relative">
        <div class="position-absolute top-50 start-50 translate-middle text-light text-center">
            <div style="" class="aboutusbody">
                <h1 style="font-size: 58px;" class="mb-4">About Us</h1>
                <p style="font-size: 17px;" class="mb-5">NEUHOF English Medium School offers smart education and innovative teaching methods, fostering all-round development of students. With interactive digital boards and e-learning platforms, the school provides an engaging learning environment. Alongside academics, NEUHOF School emphasizes co-curricular activities and character development, promoting talents, teamwork, and values such as integrity and social responsibility.</p>
                <p style="font-weight: 500;font-size: 17px;"> 
                    <a href="/gallery" style="text-decoration: none; color: white;">
                        <img src="{{ asset('assets/img/gallery.png') }}" alt="" srcset="" class="me-3"> View Gallery
                    </a>
                </p>
            </div>
        </div>
        
    </section>

    <section  style="background-color: #0E0E0E; ">
        <br><br><br><br><br><br><br>
        <div class="container" >

            <div class="row d-flex justify-content-evenly text-center text-light mb-4 footermenu" >
                <div class="col-xl-4">
                    <b class="text-light">Academics</b>
                    <a href="/feestructure" style="text-decoration: none;">
                        <p class="mt-3 text-secondary">Fee Structure</p>
                    </a>
                    <a href="/payment" style="text-decoration: none;">
                        <p class="mt-3 text-secondary">Fee Payments - Online</p>
                    </a>
                    <a href="/" style="text-decoration: none;">
                        <p class="mt-3 text-secondary">Others</p>
                    </a>
                </div>
                <div class="col-xl-4">
                    <b class="text-light">Archives</b>
                    <a href="/cocurricular" style="text-decoration: none;">
                        <p class="mt-3 text-secondary">Co-Curricular Activities</p>
                    </a>
                </div>
                <div class="col-xl-4">
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

    <script>
        function openNav() {
          document.getElementById("myNav").style.height = "100%";
        }
        
        function closeNav() {
          document.getElementById("myNav").style.height = "0%";
        }
    </script>
</body>
</html>

