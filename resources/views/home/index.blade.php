@extends('layout.layout')

@section('content')

<!-- main-area -->
<main>
    <div class="video-container">
        <video autoplay muted loop>
            <source src="assets/video/low2.mp4" type="video/mp4" />
        </video>
        <div class="caption">
            <div class="container">
                <div class="row">
                    <div class="col-xl-12 col-lg-12">
                        <div class="slider-content">
                            <h2 class="title" data-animation="fadeInUp" data-delay=".2s">An <span>Airline</span> without <span>Aircraft.</span> </h2>
                            <p data-animation="fadeInUp" data-delay=".4s">Plus Airfare is our core service where we offer flights to clients while taking care of every aspect of the flight from the time they book with us till they reach their destination. Our dedicated team of professionals with
                                special access to information on airline operations is ready 24/7 to attend to any problem associated with the flights so that our clients can enjoy a hassle-free travel experience.</p>
                            <a href="" class="btn" data-animation="fadeInUp" data-delay=".6s">Sign in / Register</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <!-- slider-area-end -->

    <!-- booking-area -->
    <div class="booking-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="booking-tag">
                        <ul>
                            <li><a href="{{ route('booking') }}"><i class="flaticon-flight"></i>Flights</a></li>
                            <li><a href="{{ route('hotels') }}"><i class="flaticon-home"></i>Hotels</a></li>
                            <li><a href="{{ route('cruises') }}"><i class="flaticon-book1"></i>Cruises</a></li>
                            <li><a href="{{ route('car') }}"><i class="flaticon-taxi"></i>Car Rentals</a></li>
                            <li><a href="{{ route('insurance') }}"><i class="flaticon-book"></i>Insurance</a></li>
                        </ul>
                    </div>
                    <div class="booking-wrap">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="nav-link active" id="bOOKing-tab" data-bs-toggle="tab" data-bs-target="#bOOKing-tab-pane" type="button" role="tab" aria-controls="bOOKing-tab-pane" aria-selected="true"><i class="flaticon-flight"></i>air BOOKing</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="trips-tab" data-bs-toggle="tab" data-bs-target="#trips-tab-pane" type="button" role="tab" aria-controls="trips-tab-pane" aria-selected="false"><i class="flaticon-file"></i> ONEWAY</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="check-tab" data-bs-toggle="tab" data-bs-target="#check-tab-pane" type="button" role="tab" aria-controls="check-tab-pane" aria-selected="false"><i class="flaticon-tick"></i> ROUND TRIP</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="nav-link" id="flight-tab" data-bs-toggle="tab" data-bs-target="#flight-tab-pane" type="button" role="tab" aria-controls="flight-tab-pane" aria-selected="false"><i class="flaticon-clock"></i> MULTICITY</button>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="bOOKing-tab-pane" role="tabpanel" aria-labelledby="bOOKing-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tab-content-wrap">
                                            <div class="content-top">
                                                <ul>
                                                    <li>Flights</li>
                                                    <li><span>Just from $12</span>Plus airfair stopover</li>
                                                </ul>
                                            </div>
                                            <form action="{{ route('booking') }}">
                                                <div class="booking-form">
                                                    <ul>
                                                        <li>
                                                            <div class="form-grp">
                                                                <input type="text" id="fromAirport" name="fromAirport" class="form-control" placeholder="From" list="list-timezone" id="input-datalist">
                                                                <datalist id="list-timezone" id="fromAirport" name="fromAirport">
                                                                    <?php
                              foreach ($airports as $key ){
                              ?>
                                                                    <option value="<?=$key->code?>" id="<?=$key->code?>"><?=$key->code?> - <?=$key->cityName?></option>
                                                                    <?php } ?>
                                                                </datalist>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp">
                                                                <div class="form-grp">
                                                                    <input type="text" id="toAirport" name="toAirport" class="form-control" placeholder="To" list="list-timezone" id="input-datalist">
                                                                    <datalist id="list-timezone" id="toAirport" name="toAirport">
                                                                        <?php
                              foreach ($airports as $key ){
                              ?>
                                                                        <option value="<?=$key->code?>" id="<?=$key->code?>"><?=$key->code?> - <?=$key->cityName?></option>
                                                                        <?php } ?>
                                                                    </datalist>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp select">
                                                                <label for="shortBy">Trip</label>
                                                                <select id="shortBy" name="Tour_type" class="form-select" aria-label="Default select example">
                                                                    <option value="">Tour type</option>
                                                                    <option>Adventure Travel</option>
                                                                    <option>Family Tours</option>
                                                                    <option>Newest Item</option>
                                                                    <option>Nature & wildlife</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp date">
                                                                <ul>
                                                                    <li>
                                                                        <label for="shortBy">Depart</label>
                                                                        <input type="text" class="date" name="depart_date" id="depart_date" placeholder="Select Date">
                                                                    </li>
                                                                    <li>
                                                                        <label for="shortBy">Return</label>
                                                                        <input type="text" class="date" name="return_date" id="return_date" placeholder="Select Date">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp select">
                                                                <label for="text">Passenger/ Class</label>
                                                                <select id="shortBy" name="Passenger_type" class="form-select" aria-label="Default select example">
                                                                    <option value="">Passenger type</option>
                                                                    <option>Passenger 1</option>
                                                                    <option>Passenger 2</option>
                                                                    <option>Passenger 3</option>
                                                                    <option>Passenger 4</option>
                                                                </select>

                                                            </div>
                                                        </li>
                                                    </ul>



                                                </div>
                                                <div class="content-bottom">
                                                    <!-- <a href="" class="promo-code">+ Add Promo code</a> -->
                                                    <button type="submit" class="btn" value="Show Flights"> Submit <i class="flaticon-flight-1"></i></button>

                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="trips-tab-pane" role="tabpanel" aria-labelledby="trips-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tab-content-wrap">
                                            <div class="content-top">
                                                <ul>
                                                    <li>Flights</li>
                                                    <li><span>Just from $12</span>Geair Stopover</li>
                                                </ul>
                                            </div>
                                            <form action="{{ route('onewaybooking') }}">
                                                <div class="booking-form">
                                                    <ul>
                                                        <li>
                                                            <div class="form-grp">
                                                                <input type="text" id="fromAirport" name="fromAirport" class="form-control" placeholder="From" list="list-timezone" id="input-datalist">
                                                                <datalist id="list-timezone" id="fromAirport" name="fromAirport">
                                                                    <?php
                                                                    foreach ($airports as $key ){
                                                                    ?>
                                                                    <option value="<?=$key->code?>" id="<?=$key->code?>"><?=$key->code?> - <?=$key->cityName?></option>
                                                                    <?php } ?>
                                                                </datalist>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp">
                                                                <div class="form-grp">
                                                                    <input type="text" id="toAirport" name="toAirport" class="form-control" placeholder="To" list="list-timezone" id="input-datalist">
                                                                    <datalist id="list-timezone" id="toAirport" name="toAirport">
                                                                        <?php
                                                                    foreach ($airports as $key ){
                                                                    ?>
                                                                        <option value="<?=$key->code?>" id="<?=$key->code?>"><?=$key->code?> - <?=$key->cityName?></option>
                                                                        <?php } ?>
                                                                    </datalist>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp select">
                                                                <label for="shortBy">Trip</label>
                                                                <select id="shortBy" name="Tour_type" class="form-select" aria-label="Default select example">
                                                                    <option value="">Tour type</option>
                                                                    <option>Adventure Travel</option>
                                                                    <option>Family Tours</option>
                                                                    <option>Newest Item</option>
                                                                    <option>Nature & wildlife</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp date">
                                                                <ul>
                                                                    <li>
                                                                        <label for="shortBy">Depart</label>
                                                                        <input type="text" class="date" name="depart_date" id="depart_date" placeholder="Select Date">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp select">
                                                                <label for="text">Passenger/ Class</label>
                                                                <select id="shortBy" name="Passenger_type" class="form-select" aria-label="Default select example">
                                                                    <option value="">Passenger type</option>
                                                                    <option>Passenger 1</option>
                                                                    <option>Passenger 2</option>
                                                                    <option>Passenger 3</option>
                                                                    <option>Passenger 4</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="content-bottom">
                                                    <!-- <a href="" class="promo-code">+ Add Promo code</a> -->
                                                    <button type="submit" class="btn" value="Show Flights"> Submit <i class="flaticon-flight-1"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="check-tab-pane" role="tabpanel" aria-labelledby="check-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tab-content-wrap">
                                            <div class="content-top">
                                                <ul>
                                                    <li>Flights</li>
                                                    <li><span>Just from $12</span>Geair Stopover</li>
                                                </ul>
                                            </div>
                                            <form action="{{ route('booking') }}">
                                                <div class="booking-form">
                                                    <ul>
                                                        <li>
                                                            <div class="form-grp">
                                                                <input type="text" id="fromAirport" name="fromAirport" class="form-control" placeholder="From" list="list-timezone" id="input-datalist">
                                                                <datalist id="list-timezone" id="fromAirport" name="fromAirport">
                                                                    <?php
                              foreach ($airports as $key ){
                              ?>
                                                                    <option value="<?=$key->code?>" id="<?=$key->code?>"><?=$key->code?> - <?=$key->cityName?></option>
                                                                    <?php } ?>
                                                                </datalist>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp">
                                                                <div class="form-grp">
                                                                    <input type="text" id="toAirport" name="toAirport" class="form-control" placeholder="To" list="list-timezone" id="input-datalist">
                                                                    <datalist id="list-timezone" id="toAirport" name="toAirport">
                                                                        <?php
                              foreach ($airports as $key ){
                              ?>
                                                                        <option value="<?=$key->code?>" id="<?=$key->code?>"><?=$key->code?> - <?=$key->cityName?></option>
                                                                        <?php } ?>
                                                                    </datalist>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp select">
                                                                <label for="shortBy">Trip</label>
                                                                <select id="shortBy" name="Tour_type" class="form-select" aria-label="Default select example">
                                                                    <option value="">Tour type</option>
                                                                    <option>Adventure Travel</option>
                                                                    <option>Family Tours</option>
                                                                    <option>Newest Item</option>
                                                                    <option>Nature & wildlife</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp date">
                                                                <ul>
                                                                    <li>
                                                                        <label for="shortBy">Depart</label>
                                                                        <input type="text" class="date" name="depart_date" id="depart_date" placeholder="Select Date">
                                                                    </li>
                                                                    <li>
                                                                        <label for="shortBy">Return</label>
                                                                        <input type="text" class="date" name="return_date" id="return_date" placeholder="Select Date">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp select">
                                                                <label for="text">Passenger/ Class</label>
                                                                <select id="shortBy" name="Passenger_type" class="form-select" aria-label="Default select example">
                                                                    <option value="">Passenger type</option>
                                                                    <option>Passenger 1</option>
                                                                    <option>Passenger 2</option>
                                                                    <option>Passenger 3</option>
                                                                    <option>Passenger 4</option>
                                                                </select>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div class="content-bottom">
                                                    <!-- <a href="" class="promo-code">+ Add Promo code</a> -->
                                                    <button type="submit" class="btn" value="Show Flights"> Submit <i class="flaticon-flight-1"></i></button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="flight-tab-pane" role="tabpanel" aria-labelledby="flight-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="tab-content-wrap">
                                            <div class="content-top">
                                                <ul>
                                                    <li>Flights</li>
                                                    <li><span>Just from $12</span>Geair Stopover</li>
                                                </ul>
                                            </div>
                                            <form action="{{ route('booking') }}">
                                                <div class="booking-form" id="myForm">
                                                    <ul>
                                                        <li>
                                                            <div class="form-grp">
                                                                <input type="text" id="fromAirport" name="fromAirport" class="form-control" placeholder="From" list="list-timezone" id="input-datalist">
                                                                <datalist id="list-timezone" id="fromAirport" name="fromAirport">
                                                                    <?php
                                                                        foreach ($airports as $key ){
                                                                        ?>
                                                                    <option value="<?=$key->code?>" id="<?=$key->code?>"><?=$key->code?> - <?=$key->cityName?></option>
                                                                    <?php } ?>
                                                                </datalist>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp">
                                                                <div class="form-grp">
                                                                    <input type="text" id="toAirport" name="toAirport" class="form-control" placeholder="To" list="list-timezone" id="input-datalist">
                                                                    <datalist id="list-timezone" id="toAirport" name="toAirport">
                                                                        <?php
                                                                        foreach ($airports as $key ){
                                                                        ?>
                                                                        <option value="<?=$key->code?>" id="<?=$key->code?>"><?=$key->code?> - <?=$key->cityName?></option>
                                                                        <?php } ?>
                                                                    </datalist>
                                                                </div>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp date">
                                                                <ul>
                                                                    <li>
                                                                        <label for="shortBy">Depart</label>
                                                                        <input type="text" class="date" name="depart_date" id="depart_date" placeholder="Select Date">
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                        </li>
                                                        
                                                    </ul>
                                                </div>
                                                <button onclick="addInput()" type="button">Add Input</button>
                                                <div class="content-bottom">
                                                    <!-- <a href="" class="promo-code">+ Add Promo code</a> -->
                                                    <button type="submit" class="btn" value="Show Flights"> Submit <i class="flaticon-flight-1"></i></button>
                                                </div>
                                            </form>
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
    <!-- booking-area-end -->

    <!-- features-area -->
    <section class="features-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-3 col-lg-6 col-sm-10">
                    <div class="features-item">

                        <div class="features-content">
                            <h6 class="title">North America</h6>
                            <p>+1 312 242 1662</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-10">
                    <div class="features-item">

                        <div class="features-content">
                            <h6 class="title">Qatar</h6>
                            <p>+974 500 411 93</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-10">
                    <div class="features-item">

                        <div class="features-content">
                            <h6 class="title">Sri Lanka</h6>
                            <p>+94 774 48 48 48</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-6 col-sm-10">
                    <div class="features-item">

                        <div class="features-content">
                            <h6 class="title">Japan</h6>
                            <p>+1 773 714 1261</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- features-area-end -->

    <!-- flight-offer-area -->
    <section class="flight-offer-area">
        <div class="container">
            <div class="row align-items-center mb-35">
                <div class="col-md-8">
                    <div class="section-title">
                        <span class="sub-title">Offer Deals</span>
                        <h2 class="title">Flight Offer Deals</h2>
                    </div>
                </div>

            </div>
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="flight-offer-item">
                        <div class="flight-offer-thumb">
                            <img src="assets/img/plus-airfare (6).jpg" alt="">
                        </div>
                        <div class="flight-offer-content">
                            <h2 class="title">Dhaka to Dubai</h2>
                            <span>09 Jun 2022 - 16 Jun 2022</span>
                            <p>Economy from</p>
                            <h4 class="price">$ 980</h4>
                        </div>
                        <div class="overlay-content">
                            <h2 class="title">Dhaka to Dubai</h2>
                            <span>09 Jun 2022 - 16 Jun 2022</span>
                            <p>Economy from</p>
                            <h4 class="price">$ 980</h4>
                            <div class="content-bottom">
                                <a href="" class="btn">Booking Now</a>
                                <a href="" class="discover">Discover</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="flight-offer-item offer-item-two">
                                <div class="flight-offer-thumb">
                                    <img src="assets/img/plus-airfare (4).jpg" alt="">
                                </div>
                                <div class="flight-offer-content">
                                    <h2 class="title">New York to California</h2>
                                    <span>09 Jun 2022 - 16 Jun 2022</span>
                                    <p>Economy from</p>
                                    <h4 class="price">$ 290</h4>
                                </div>
                                <div class="overlay-content">
                                    <h2 class="title">New York to California</h2>
                                    <span>09 Jun 2022 - 16 Jun 2022</span>
                                    <p>Economy from</p>
                                    <h4 class="price">$ 290</h4>
                                    <div class="content-bottom">
                                        <a href="" class="btn">Booking Now</a>
                                        <a href="" class="discover">Discover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="flight-offer-item offer-item-two">
                                <div class="flight-offer-thumb">
                                    <img src="assets/img/plus-airfare (5).jpg" alt="">
                                </div>
                                <div class="flight-offer-content">
                                    <h2 class="title">Malaga to Finland</h2>
                                    <span>09 Jun 2022 - 16 Jun 2022</span>
                                    <p>Economy from</p>
                                    <h4 class="price">$ 792</h4>
                                </div>
                                <div class="overlay-content">
                                    <h2 class="title">Malaga to Finland</h2>
                                    <span>09 Jun 2022 - 16 Jun 2022</span>
                                    <p>Economy from</p>
                                    <h4 class="price">$ 792</h4>
                                    <div class="content-bottom">
                                        <a href="" class="btn">Booking Now</a>
                                        <a href="" class="discover">Discover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="flight-offer-item offer-item-two">
                                <div class="flight-offer-thumb">
                                    <img src="assets/img/plus-airfare (1).png" alt="">
                                </div>
                                <div class="flight-offer-content">
                                    <h2 class="title">Dubai to Maldives</h2>
                                    <span>09 Jun 2022 - 16 Jun 2022</span>
                                    <p>Economy from</p>
                                    <h4 class="price">$ 980</h4>
                                </div>
                                <div class="overlay-content">
                                    <h2 class="title">Dubai to Maldives</h2>
                                    <span>09 Jun 2022 - 16 Jun 2022</span>
                                    <p>Economy from</p>
                                    <h4 class="price">$ 980</h4>
                                    <div class="content-bottom">
                                        <a href="" class="btn">Booking Now</a>
                                        <a href="" class="discover">Discover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="flight-offer-item offer-item-two">
                                <div class="flight-offer-thumb">
                                    <img src="assets/img/plus-airfare (12).jpg" alt="">
                                </div>
                                <div class="flight-offer-content">
                                    <h2 class="title">Dubai to New York</h2>
                                    <span>09 Jun 2022 - 16 Jun 2022</span>
                                    <p>Economy from</p>
                                    <h4 class="price">$ 350</h4>
                                </div>
                                <div class="overlay-content">
                                    <h2 class="title">Dubai to New York</h2>
                                    <span>09 Jun 2022 - 16 Jun 2022</span>
                                    <p>Economy from</p>
                                    <h4 class="price">$ 350</h4>
                                    <div class="content-bottom">
                                        <a href="" class="btn">Booking Now</a>
                                        <a href="" class="discover">Discover</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- flight-offer-area-end -->

    <!-- destination-area -->

    <!-- destination-area-end -->
    <section class="backtag">
        <!-- fly-next-area -->
        <section class="fly-next-area">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <span class="sub-title">Flynext Package</span>
                            <h2 class="title">Your Great Destination</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-7">
                        <div class="fly-next-nav">
                            <button class="active" data-filter="*">Flights <i class="flaticon-flight"></i></button>
                            <button class="" data-filter=".cat-one">Car Rentals <i class="flaticon-car-1"></i></button>
                            <button class="" data-filter=".cat-two">Hotels <i class="flaticon-five-stars"></i></button>
                        </div>
                    </div>
                </div>
                <div class="row fly-next-active justify-content-center">
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href=""><img src="assets/img/plus-airfare (2).jpg" alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Dubai (DXB)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="" class="air-logo"><img src="assets/img/icon/fly_icon01.jpg" alt=""></a>
                                <div class="content-bottom">
                                    <p>Economy from</p>
                                    <h4 class="price">$195</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-one cat-two">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href=""><img src="assets/img/plus-airfare (10).jpg" alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Switzerland (SWL)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="" class="air-logo"><img src="assets/img/icon/fly_icon02.jpg" alt=""></a>
                                <div class="content-bottom">
                                    <p>Business Class</p>
                                    <h4 class="price">$800</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href=""><img src="assets/img/plus-airfare (7).jpg" alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Denmark (DEK)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="" class="air-logo"><img src="assets/img/icon/fly_icon03.jpg" alt=""></a>
                                <div class="content-bottom">
                                    <p>Economy from</p>
                                    <h4 class="price">$ 350</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-one">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href=""><img src="assets/img/plus-airfare (8).jpg" alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Jakarta (DXB)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="" class="air-logo"><img src="assets/img/icon/fly_icon01.jpg" alt=""></a>
                                <div class="content-bottom">
                                    <p>Business Class</p>
                                    <h4 class="price">$ 220</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href=""><img src="assets/img/plus-airfare (11).jpg" alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Dubai (DXB)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="" class="air-logo"><img src="assets/img/icon/fly_icon03.jpg" alt=""></a>
                                <div class="content-bottom">
                                    <p>Economy from</p>
                                    <h4 class="price">$195</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-one">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href=""><img src="assets/img/plus-airfare (9).jpg" alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Dubai (DXB)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="" class="air-logo"><img src="assets/img/icon/fly_icon02.jpg" alt=""></a>
                                <div class="content-bottom">
                                    <p>Business Class</p>
                                    <h4 class="price">$175</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two cat-one">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href=""><img src="assets/img/plus-airfare (3).jpg" alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Switzerland (SWL)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="" class="air-logo"><img src="assets/img/icon/fly_icon01.jpg" alt=""></a>
                                <div class="content-bottom">
                                    <p>Economy from</p>
                                    <h4 class="price">$195</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6 grid-item grid-sizer cat-two">
                        <div class="fly-next-item">
                            <div class="fly-next-thumb">
                                <a href=""><img src="assets/img/plus-airfare (1).jpg" alt=""></a>
                            </div>
                            <div class="fly-next-content">
                                <span>09 Jun 2022 - 16 Jun 2022</span>
                                <h4 class="title">Turkish (SWL)</h4>
                                <a href="#" class="exchange-btn"><i class="flaticon-exchange-1"></i></a>
                                <h4 class="title">New York (USA)</h4>
                                <a href="" class="air-logo"><img src="assets/img/icon/fly_icon02.jpg" alt=""></a>
                                <div class="content-bottom">
                                    <p>Business Class</p>
                                    <h4 class="price">$350</h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- fly-next-area-end -->
        <section>
            <div class="brand-area brand-bg">
                <div class="container">
                    <div class="row brand-active">
                        <div class="col-12">
                            <div class="brand-item">
                                <img src="assets/img/brand/brand_img01.png" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="brand-item">
                                <img src="assets/img/brand/brand_img02.png" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="brand-item">
                                <img src="assets/img/brand/brand_img03.png" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="brand-item">
                                <img src="assets/img/brand/brand_img04.png" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="brand-item">
                                <img src="assets/img/brand/brand_img05.png" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="brand-item">
                                <img src="assets/img/brand/brand_img06.png" alt="">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="brand-item">
                                <img src="assets/img/brand/brand_img03.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- brand-area-end -->

        </section>
        <!-- brand-area -->


        <!-- blog-area -->
        <section class="blog-area blog-bg">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            <span class="sub-title">our News Feeds</span>
                            <h2 class="title">Latest News Update</h2>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-53">
                        <div class="blog-item">
                            <div class="blog-thumb">
                                <a href=""><img src="assets/img/blog/blog-1.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                                        <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="">Depending on your departure point and destination flights</a></h2>
                            </div>
                        </div>
                    </div>
                    <div class="col-47">
                        <div class="blog-item small-item">
                            <div class="blog-thumb">
                                <a href=""><img src="assets/img/blog/blog_2.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                                        <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="">Happy International Country Flight Attendant Day</a></h2>
                            </div>
                        </div>
                        <div class="blog-item small-item">
                            <div class="blog-thumb">
                                <a href=""><img src="assets/img/blog/blog_1.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                                        <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="">The US is a Large Country and Climate Varies by Region</a></h2>
                            </div>
                        </div>
                        <div class="blog-item small-item">
                            <div class="blog-thumb">
                                <a href=""><img src="assets/img/blog/blog_3.jpg" alt=""></a>
                            </div>
                            <div class="blog-content">
                                <div class="blog-meta">
                                    <ul>
                                        <li><i class="fa-regular fa-user"></i> <a href="#">Emely Watson</a></li>
                                        <li><i class="fa-solid fa-calendar-days"></i> February 19, 2022</li>
                                    </ul>
                                </div>
                                <h2 class="title"><a href="">But There are Dozen of Low-cost Airlines Including</a></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </section>
    <!-- blog-area-end -->
    <!-- service-area -->
    <section class="service-area">
        <div class="container">
            <div class="row align-items-end mb-50">
                <div class="col-md-8">
                    <div class="section-title">
                        <span class="sub-title">Why Plus Airfare</span>
                        <h2 class="title">Our Services</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-nav"></div>
                </div>
            </div>
            <div class="row service-active">
                <div class="col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/Frame.png" alt="">
                        </div>
                        <div class="service-content">
                            <span>Service 01</span>
                            <h2 class="title">The leading online booking platform</h2>
                            <div class="service-list">
                                <ul>
                                    <li>Ability to provide the best travel options saving money <i class="flaticon-check-mark"></i></li>
                                    <li>Extensive product knowledge and ability to answer any questions may have. <i class="flaticon-check-mark"></i></li>
                                    <li>Guaranteed customer satisfaction and hassle-free travel <i class="flaticon-check-mark"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/Frame.png" alt="">
                        </div>
                        <div class="service-content">
                            <span>Service 02</span>
                            <h2 class="title">A Bridge between airlines and clients</h2>
                            <div class="service-list">
                                <ul>
                                    <li>Handling scheduling changes / flight Cancellations on your behalf <i class="flaticon-check-mark"></i></li>
                                    <li>Collective experience beyond compare <i class="flaticon-check-mark"></i></li>
                                    <li>A user-friendly platform <i class="flaticon-check-mark"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/Frame.jpg" alt="">
                        </div>
                        <div class="service-content">
                            <span>Service 03</span>
                            <h2 class="title">Enjoy stress-free travel</h2>
                            <div class="service-list">
                                <ul>
                                    <li>Travel insurance<i class="flaticon-check-mark"></i></li>
                                    <li>24x7 contact center<i class="flaticon-check-mark"></i></li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="service-item">
                        <div class="service-icon">
                            <img src="assets/img/Frame (1).png" alt="">
                        </div>
                        <div class="service-content">
                            <span>Service 02</span>
                            <h2 class="title">Reserve preferred seat!</h2>
                            <div class="service-list">
                                <ul>
                                    <li>What will it be, window or aisle? <i class="flaticon-check-mark"></i></li>
                                    <li>Select your preferred seat prior <i class="flaticon-check-mark"></i></li>
                                    <li>Reserved for you. <i class="flaticon-check-mark"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- service-area-end -->

    <!-- blog-area -->


</main>
<script>
  function addInput() {

    var input = document.createElement("input");
    input.type = "text";
    input.name = "inputName[]";
    document.getElementById("myForm").appendChild(input);
  }
</script>
<!-- main-area-end -->
@endsection