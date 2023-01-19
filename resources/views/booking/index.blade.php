@extends('layout.layout')
 
@section('content')



        <!-- main-area -->
        <main>

            <!-- breadcrumb-area -->
            <section class="breadcrumb-area breadcrumb-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="breadcrumb-content text-center">
                                <h2 class="title">Booking Details</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Booking Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->

   
            <!-- booking-details-area -->
            <section class="booking-details-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-73">
                            <div class="primary-contact">
                                <i class="fa-regular fa-user"></i>
                                <h2 class="title">Booking information</h2>
                            </div>
                            <div class="booking-details-wrap">
                                <form action="#">
                                        <div class="icon">
                                            <i class="flaticon-flight" > Flights</i>
                                        </div>
                                       <div class="row"> 
                                       <div class="col-md-6 col-lg-6 ">
                                            <div class="row-color">
                                                <h4>From </h4>
                                                <p><?=$fromAirport->cityName?>  | <?=$fromAirport->countryName?> </p>
                                                <h5><?=$fromAirport->code?> - <?=$fromAirport->name?></h5>
                                            </div>
                                            </div>
                                            <div class="col-md-6 col-lg-6">
                                            <div class="row-color">
                                                <h4> To</h4>
                                                <p><?=$toAirport->cityName?> | <?=$toAirport->countryName?></p>
                                                <h5><?=$toAirport->code?>- <?=$toAirport->name?></h5>
                                            </div>
                                            </div>
                                       </div>
                                       <hr>
                                      
                                        <div class="row"> 
                                       <div class="col-md-6 col-lg-6 ">
                                                <p> <i class="flaticon-calendar" > Depart</i> : <?=$data['depart_date']?>  </p>
                                                 </div>
                                             <div class="col-md-6 col-lg-6">
                                                      <p><i class="flaticon-calendar" > Return</i> : <?=$data['return_date']?>  </p>
                                            </div>
                                        </div>
                                        <div class="row"> 
                                       <div class="col-md-6 col-lg-6 ">
                                                <p> <i class="flaticon-five-stars" > Tour Type</i> : <?=$data['Tour_type']?>  </p>
                                                 </div>
                                             <div class="col-md-6 col-lg-6">
                                                      <p><i class="flaticon-add-user" > Passenger /Class</i> : <?=$data['Passenger_type']?>  </p>
                                            </div>
                                        </div>
                                        <hr>
                                        <div>Contact information</div>  
                                    <ul>
                                    
                                        <li>
                                        <div class="row"> 
                                      
                                        </div>
                                            <div class="form-grp">
                                                <div class="icon">
                                                    <i class="flaticon-user-1"></i>
                                                </div>
                                                <div class="form">
                                                    <select id="title" name="select" class="form-select" aria-label="Default select example">
                                                        <option value="">Mr.</option>
                                                        <option>Mrs.</option>
                                                        <option>Others..</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-grp">
                                                <input type="text" placeholder="Give Name">
                                            </div>
                                        </li>
                                        <li>
                                            <div class="form-grp">
                                                <input type="text" placeholder="Sur Name *">
                                            </div>
                                        </li>
                                    </ul>
                                    
                                    <div class="row">
                                        <div class="col-md-6">
                                        <div class="form-grp">
                                                <div class="icon">
                                                    <i class="flaticon-arroba"></i>
                                                </div>
                                                <div class="form">
                                                    <label for="email">Your Email</label>
                                                    <input type="email" id="email" placeholder="youinfo@gmail.com">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <div class="icon">
                                                    <i class="flaticon-telephone-call"></i>
                                                </div>
                                                <div class="form">
                                                    <input type="number" placeholder="Mobile Number *">
                                                </div>
                                            </div>
                                        </div>
                                       
                                   
                                    </div>
                                   <input class="btn" type="submit" value="Send Inquiry">
                                   
                                </form>
                            </div>
                        </div>
                        <div class="col-27">
                            <aside class="booking-sidebar">
                                <h2 class="main-title">Booking Info</h2>
                                <div class="widget">
                                    <ul class="flight-info">
                                        <li><img src="assets/img/icon/sidebar_flight_icon.jpg" alt=""> <p>12:0 (DEK) <span>Dubai</span></p></li>
                                        <li><p>16:30 (DEK) <span>istanbul</span></p></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h2 class="widget-title">Select Discount Option</h2>
                                    <form action="#" class="discount-form">
                                        <i class="flaticon-coupon"></i>
                                        <input type="text" placeholder="Enter Code">
                                        <button type="submit"><i class="flaticon-tick-1"></i></button>
                                    </form>
                                </div>
                                <div class="widget">
                                    <h2 class="widget-title">Your Preferred Bank</h2>
                                    <ul class="preferred-bank-wrap">
                                        <li><a href="#"><img src="assets/img/images/bank_logo01.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/images/bank_logo02.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/images/bank_logo03.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/images/bank_logo04.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/images/bank_logo05.png" alt=""></a></li>
                                        <li><a href="#"><img src="assets/img/images/bank_logo06.png" alt=""></a></li>
                                    </ul>
                                </div>
                                <div class="widget">
                                    <h2 class="widget-title">Your price summary</h2>
                                    <div class="price-summary-top">
                                        <ul>
                                            <li>Details</li>
                                            <li>Amount</li>
                                        </ul>
                                    </div>
                                    <div class="price-summary-detail">
                                        <ul>
                                            <li>Adult x 1 <span>$1,056</span></li>
                                            <li>Tax x 1 <span>$35</span></li>
                                            <li>Total Airfare: <span>$1,091</span></li>
                                            <li>Discount<span>- $110</span></li>
                                            <li>Total Payable<span>$981.00</span></li>
                                        </ul>
                                        <a href="#" class="btn">Pay now</a>
                                    </div>
                                </div>
                            </aside>
                        </div>
                    </div>
                </div>
            </section>
            <!-- booking-details-area-end -->

        </main>
        <!-- main-area-end -->
        @endsection
 