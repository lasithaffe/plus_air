@extends('layout.layout')
 
@section('content')
<main>
		
	          <!-- breadcrumb-area -->
			  <section class="contact-img breadcrumb-area breadcrumb-bg">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="breadcrumb-content text-center">
                                <h2 class="title">Contact us</h2>
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="">Home</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Contact us</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- contact-area -->
            <section class="contact-area">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-10">
                            <div class="section-title text-center mb-40">
                                <span class="sub-title">Contact us now</span>
                                <h2 class="title">Plus Airfare Booking Portal</h2>
                            </div>
                            <div class="contact-form">
                                <form action="#" class="contact-form-plus">
                                    <div class="row colomn">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="fname">Travel Start Date:</label><br>
                                                <input type="date" placeholder="Travel Start Date *">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="fname">Travel End Date:</label><br>
                                                <input type="date" placeholder="Travel End Date *">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="fname">Requested Service:</label><br>
                                                <label class="containerCheckbox">Airfare
                                                    <input type="checkbox" class="checkmark" checked="checked">
                                                </label>
                                                  <label class="containerCheckbox">Hotel
                                                    <input type="checkbox" class="checkmark">
                                                  </label>
                                                  <label class="containerCheckbox">Rent a car
                                                    <input type="checkbox"class="checkmark">

                                                  </label>
                                                  <label class="containerCheckbox">Meet and Assist
                                                    <input type="checkbox"class="checkmark">
                                                  </label>
                                                  <label class="containerCheckbox">Meet and Assist
                                                    <input type="checkbox"class="checkmark">

                                                  </label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="fname">Journey Type:</label><br>
                                                <label class="containerRadio">
                                                    <input type="radio" name="optradio" checked>One-way
                                                  </label>
                                                  <label class="containerRadio">
                                                    <input type="radio" name="optradio">Roundtrip

                                                  </label>
                                                <label class="containerRadio">
                                                 <input type="radio" name="optradio">Multi City
                                                </label>
                                                <label class="containerRadio">
                                                    <input type="radio" name="optradio">Book with Airline Miles
                                                   </label>
                                            </div>

                                            </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="fname">Departure →:</label><br>
                                                @foreach($bookings as $booking)
                                                    <tr>
                                                        @if($time->availble_times == $booking->booking_time)
                                                            <td>{{$time->availble_times}}: not available</td>
                                                        @else
                                                            <tr><td>{{$time->availble_times}}</td>
                                                        @endif
                                                            </tr>
                                                @endforeach    
                                               
                                                        <input type="dropdown" placeholder="Colombo Srilanka CMB">
                                                        @endforeach
                                            </div>
                                            </div>
                                            <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="fname">Arrival →:</label><br>
                                                        <input type="dropdown" placeholder="Colombo Srilanka CMB">
                                            </div>
                                        </div>
                                        </div>
                                        <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="fname">Passenger Name(s)</label><br>
                                                <input type="text" placeholder="Name*">
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="fname">Trip Detail/ If any remarks</label><br>
                                                <input type="text" placeholder="Remarks *">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="fname">Contact Number (WhatsApp)</label><br>
                                                <input title="" Type="number" min-lenth="10" name="contactNumber" id="contactNumber">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-grp">
                                                <label for="fname">Email</label><br>
                                                <input title="" aria-invalid="true" tabindex="0" id="text_box_Email" data-client-id="text_box_Email" data-client-type="EMAIL" name="lnEOMD1" maxlength="4000" class="css-4bm1xl e1407lhe0" value="" aria-describedby="error_msg_Email">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div data-client-id="container_File Attachments: (Passports / Flight details)" data-client-type="file_upload" id="ATTACHMENT" class="css-1ylo82b ef83ajd0"><label for="file_upload_File Attachments: (Passports / Flight details)" data-client-id="label_File Attachments: (Passports / Flight details)" class="css-1xl1v40 ekxsfat0">File Attachments: (Passports / Flight details)</label><div class="css-vqlje4" tabindex="0" data-client-id="file_upload_dropzone" aria-disabled="false" style="position: relative;"><div class="css-hvudvc eo18oon8"><span class="css-1btvv3a eo18oon1"><span>Drag and drop files here or </span> <button tabindex="0" type="button" class="css-uro7iq eo18oon0"><span>browse files</span></button></span></div><input id="file_upload_File Attachments: (Passports / Flight details)" tabindex="0" type="file" multiple="" autocomplete="off" style="position: absolute; inset: 0px; opacity: 1e-05; pointer-events: none;"></div></div>
                                        </div>
                                            <div class="submit-btn text-center">
                                        <button type="submit" class="btn">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- contact-area-end -->
			<main>
    @endsection