<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fee Structure</title>

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
                        
                         <label style="font-size: 77px;" class="mb-4">Fee Structure</label> <br> 
                        <label class="" style="font-size: 32px;">
                            Home/Fee Structure
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

    
    <section class=" ">
        <div class="container text-center ">
            <br><br><br>
            <p style="font-weight: 600; font-size: 28px;" class="">ADMISSION FEE </p> <br>
            <div class="row">
                <div class="col-sm">
                    <table border="3" class="table" style="color:white;">
                        <thead>
                            <tr>
                                <th colspan="3">OLD STUDENTS</th>
                            </tr>
                            <tr>
                                <th>CRITERIA</th>
                                <th>CLASS</th>
                                <th>AMOUNT PAYABLE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="4"><br><br> ADMISSION FEE</td>
                                <!-- <td colspan="">tset</td> -->
                            </tr>
                            <tr>
                                <td rowspan="">KG-I</td>
                                <td colspan="">4500/-</td>
                                <!-- <td colspan="">tset</td> -->
                            </tr>
                            <tr>
                                <td rowspan="">KG-II to Class VII</td>
                                <td colspan="">3500/-</td>
                                <!-- <td colspan="">tset</td> -->
                            </tr>
                            <tr>
                                <td rowspan="">Class IX - X</td>
                                <td colspan="">4000/-</td>
                                <!-- <td colspan="">tset</td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-sm">
                    <table border="3" class="table" style="color:white;">
                        <thead>
                            <tr>
                                <th colspan="3">New STUDENTS</th>
                            </tr>
                            <tr>
                                <th>CRITERIA</th>
                                <th>CLASS</th>
                                <th>AMOUNT PAYABLE</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td rowspan="4"><br><br> ADMISSION FEE</td>
                                <!-- <td colspan="">tset</td> -->
                            </tr>
                            <tr>
                                <td rowspan="">KG-I</td>
                                <td colspan="">4500/-</td>
                                <!-- <td colspan="">tset</td> -->
                            </tr>
                            <tr>
                                <td rowspan="">KG-II to Class VII</td>
                                <td colspan="">3500/-</td>
                                <!-- <td colspan="">tset</td> -->
                            </tr>
                            <tr>
                                <td rowspan="">Class IX - X</td>
                                <td colspan="">4000/-</td>
                                <!-- <td colspan="">tset</td> -->
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div> 
        </div>
        <br>
    </section>

    <section class="">
        <div class="container text-center">
            <br><br>
            <p style="font-weight: 600; font-size: 28px;" class="">HOSTEL ADMISSION & FEE </p> <br>
            <div class="row">
                <div class="col-sm">
                    <table border="3" class="table" style="color:whit;">
                        <thead>
                           
                            <tr>
                                <th>CRITERIA</th>
                                <th>Amount Payable</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    ADMISSION FEE
                                </td>
                                <td>
                                    1500/-
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    MONTHLY FEE
                                </td>
                                <td>
                                    8000/-
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <b>A sum of Rs.700/- must be deposited to the warden fr the student's pocket money and laundry service charge every month.</b>
                </div>
            </div> 
        </div>
        <br>
    </section>

    <section class="">
        <div class="container">
            <br><br>
            <p style="font-weight: 600; font-size: 28px;" class="text-center">TUITION FEE </p> <br>
            <p class="mb-3" style="font-weight: 600; font-size: 24px;">OPTION - 1 : Payable in 3 Installments</p>
            <table class="table text-center" border="3" style="color:white;">
                <thead>
                    <tr>
                        <th>CLASS</th>
                        <th>MONTH</th>
                        <th>ACTUAL AMOUNT</th>
                        <th>AMOUNT PAYABLE</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td rowspan="4"><br><br> KG-I to CLASS VII</td>
                        <td>APRIL -JULY</td>
                        <td>2,000x4 = 8000/-</td>
                        <td>7,800/-</td>
                    </tr>
                    <tr>
                        <td>AUGUST - NOVEMBER</td>
                        <td>2,000x4 = 8000/-</td>
                        <td>7,800/-</td>
                    </tr>
                    <tr>
                        <td>DECEMBER - MARCH</td>
                        <td>2,000x4 = 8000/-</td>
                        <td>7,800/-</td>
                    </tr>
                    <tr>
                        <td>TOTAL = </td>
                        <td>8,000x3 = 24,000/-</td>
                        <td>23,400/-</td>
                    </tr>
                    <tr>
                        <td rowspan="4"><br><br><br> CLASS - IX & CLASS X</td>
                        <td>APRIL -JULY</td>
                        <td>2,500x4 = 10000/-</td>
                        <td>9,800/-</td>
                    </tr>
                    <tr>
                        <td>AUGUST - NOVEMBER</td>
                        <td>2,500x4 = 10000/-</td>
                        <td>9,800/-</td>
                    </tr>
                    <tr>
                        <td>DECEMBER - MARCH</td>
                        <td>2,500x4 = 8000/-</td>
                        <td>9,800/-</td>
                    </tr>
                    <tr>
                        <td>TOTAL = </td>
                        <td>10,000x3 = 24,000/-</td>
                        <td>29,400/-</td>
                    </tr>
                </tbody>
            </table>
            <ul>
                <li><b>Thise who opt to pay through the Option-1 method have to clear their payments in the first two months.(E.g.: April tp July fee have to be paid by May)</b></li>
                <li><b>Failure to do this will result in payment of a fine of Rs.500/-</b></li>
            </ul>
            
            <h4 class="mb-3 mt-5" style="font-weight: 600; font-size: 24px;">OPTION - 2 : Payable in Monthly Installments</h4>
            <table class="table" border="3" style="color:white;">
            <thead>
                <tr>
                    <th>CLASS</th>
                    <th>MONTH</th>
                    <th>ACTUAL AMOUNT</th>
                    <th>AMOUNT PAYABLE</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> KG-I to CLASS VII</td>
                    <td>APRIL - MARCH (1 year)</td>
                    <td>2,000/- per month</td>
                    <td>24,000/- </td>
                </tr>
                <tr>
                    <td> CLASS X to CLASS XI</td>
                    <td>APRIL - MARCH (1 year)</td>
                    <td>2,500/- per month</td>
                    <td>30,000/- </td>
                </tr>
            </tbody>
        </table>
        <ul>
            <li><b>Those who opt to pay through the option-2 methods must clear the fees before the 15<sup>th</sup> of every month. If not paid on time, a fine of Rs.10 per day is charged and will be added to the monthly installment.</b></li>
        </ul>
        </div>
        <br>
    </section>

    <section class="">
        <br>
        <br>
        <div class="container">
            <br>
            <p style="font-weight: 600; font-size: 28px;" class=" text-center">EXAMINATION FEE & OTHERS </p>
            <ol>
                <li><b> Examination Fee : 400x3 = 1200(Must be paid before the start of examination)</b></li>
                <li><b> Medical :         150</b></li>
                <li><b> Vocational :      300(for CLASS-V and above)</b></li>
            </ol>
            * Medical and Vocational must be paid during the time of Admission.
            </div>
            <br>
            <br>
    </section>

    <section class="">
       <div class="container ">
        <br>
        <p style="font-weight: 600; font-size: 28px;" class="text-center">MODE OF PAYMENT & FEES</p>
        <ul>
            <li>An amount of Rs.200/- has to be paid for Admission form and School Prospectus.</li>
            <li>Admission fees are not refundable.</li>
            <li>Payment of fees in the school will not be accepted</li>
            <li>Admission, Monthly installment, Test & Examination fees must be paid at the bank as follows:</li>
            Account Number: 50200028351591 <br>
            Account Holder: Neuhof English Medium School <br>
            HDFC Bank, Chanmari
        </ul>
       </div>
       <br><br>
    </section>

    <section style="background-color: #0E0E0E">
        <div class="container">
            <br><br><br>
            <p style="font-weight: 600; font-size: 28px;" class="text-center text-light">IMPORTANT NOTE</p>
            <ul class="text-light">
                <li>April fee is not included in the admission fee.</li>
                <li>Admission fee is not refundable.</li>
                <li>If for any reason a student leaves the school, annual tuition fees must be cleared.</li>
                <li>Monthly Installments must be paid before the 15<sub>th</sub> of every month. If not paid on time, a late fee of Rs.10 per day
                 is charged and will be added to the monthly installment. Therefore, Parents are requested to pay the monthly installments on time.</li>
                 <li>Re-admission for old comers must be done within the given time. Failure to do so will result in the student losing their seat as it
                    will be given to the new admission candidates.
                 </li>
            </ul>
        </div>
   
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