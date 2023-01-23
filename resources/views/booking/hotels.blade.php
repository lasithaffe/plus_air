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
                                <h2 class="title">Hotels</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Booking Details</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- breadcrumb-area-end -->
    <!-- slider-area-end -->

<!-- breadcrumb-area-end -->
    <!-- flight-offer-area -->
    <!-- service-area -->
    <section class="service-area">
        <div class="container">
            <div class="row align-items-end mb-50">
                <div class="col-md-8">
                    <div class="section-title">
                        <h2 class="title">Hotel Deals</h2>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="service-nav"></div>
                </div>
            </div>
            <div class="row service-active">
                <div class="col-lg-4">
                    <div class="hotel-item service-item">
                        <div class="hotel-icon">
                      
                        <img src="assets/img/hotels-4.jpg" alt="">
                        <h2 class="title">Hilton Luxury Hotels *</h2>
                       <p> <i class="flaticon-star">#</i></p>
                        </div>
                       
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hotel-item service-item">
                        <div class="hotel-icon">
                            
                        
                            <img src="assets/img/hotels-1.jpg" alt="">
                            <h2 class="title">Dorchester Collection - Worldwide*</h2>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hotel-item service-item">
                        <div class="hotel-icon">
                       
                        <img src="assets/img/hotels-1.jpg" alt="">
                        <h2 class="title">IslandLuxe Hotels*</h2>
                        </div>
                        
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="hotel-item service-item">
                        <div class="hotel-icon">
                       
                        <img src="assets/img/hotels-1.jpg" alt="">
                        <h2 class="title">Reserve preferred seat!</h2>
                        
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
        <section class="book-hotels">
        <div class="container">
        <div class="book-hotel tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="bOOKing-tab-pane" role="tabpanel" aria-labelledby="bOOKing-tab" tabindex="0">
                                <div class="row">
                                    <div class="col-lg-12">
                                            <div class="content-top">
                                                <h2 class="text-center">Book Now</h2>
                                            </div>
                                            <form action="{{ route('booking') }}">
                                                <div class="booking-form">
                                                    <ul>
                                                        <li>
                                                            <div class="form-grp">
                                                                <input type="text" id="fromAirport" name="fromAirport" class="form-control" placeholder="Hotels" list="list-timezone" id="input-datalist">
                                                                <datalist id="list-timezone" id="fromAirport" name="fromAirport">
                                                                    <?php foreach ($hotel as $key) { ?>
                                                                        <option value="<?= $key->name ?>" id="<?= $key->id ?>"><?= $key->name ?></option>
                                                                    <?php } ?>
                                                                </datalist>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-grp date">
                                                                <ul>
                                                                    <li>
                                                                        <label for="shortBy">Check in</label>
                                                                        <input type="text" class="date" name="depart_date" id="depart_date" placeholder="Select Date">
                                                                    </li>
                                                                    <li>
                                                                        <label for="shortBy">Check out</label>
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
                                                <div class="booking-details-wrap"> 
                                                    <ul>
                                         <li><div class="row">
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
                                    </div>  
                            </div>
                            </div> </div>
        </section>
        <!-- fly-next-area-end -->
 <!-- blog-area -->
 <section class="fly-next-area">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="section-title text-center">
                            
                            <h2 class="title">Our Hotels Partner</h2>
                        </div>
                    </div>
                </div>
               
                <div class="row">
                <?php foreach ($hotel as $key) { 
                    ?>
                    <div class="col-xl-2 col-lg-2 col-md-4 col-sm-6 grid-item grid-sizer cat-two">
                        <div class="fly-next-item3 fly-next-item">
                            <div class="fly-next-v3 fly-next-thumb">
                                <div class="image-logo">
                                <img src="assets/img/hotels/<?= $key->img ?>" alt="">
                                </div>
                               
                                <p><?= $key->name ?></p>
                            </div>
                            
                        </div>
                    </div>
                    <?php } ?>
                </div>
        </section>
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
    
    <!-- service-area-end -->

    <!-- blog-area -->


</main>
        @endsection
 