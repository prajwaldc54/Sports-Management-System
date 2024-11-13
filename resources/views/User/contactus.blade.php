@extends('include.indexpage')
@section('maincontent')
    <div id="contact">
    <div class="container">
        <div class="contact-header" align="center"><h3 class="font-bold ">Contact Us</h3>
            <img src="{{asset('social_media/message.png')}}" alt="First slide" width="70px" height="70px">
            <h4>Get in<span class="content-header"> Touch with us</span></h4>

        </div>
        <div id="full-contact">
        <div class="contact-form">

        <form  method="Post" action="/addmessage"  enctype="multipart/form-data" >
            @csrf
            <div class="col-lg-11 form-line">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" placeholder="Your Name" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="text" name="email" placeholder=" youremail@gmail.com" class="form-control" required>
                </div>

                <div class="form-group">
                    <label for="subject">Subject</label>
                    <input type="text" name="subject" placeholder="Subject (Optional but helpful)" class="form-control" required>
                </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message"  placeholder="Message" rows="5"  class="form-control"></textarea>
                    </div>
                <div class="contactbutton">
                    <button type="submit" class="btn btn-default" ><i class="fa fa-paper-plane" aria-hidden="true"></i>Sendmessage</button>
                </div>
                </div>




        </form>
        </div>
        <div class="contact-profile">

            <div class="box">
                <div class="col-lg-11">
                    <i class="fa fa-map-marker icon"></i>
                    <span><label>Kathmandu/ Nepal</label></span>
                </div>
            </div>

            <div class="box">
                <div class="col-lg-11">
                    <i class="fa fa-phone icon"></i>
                    <span><label>+977 9849249288</label></span>
                </div>
            </div>

            {{--div class="col-sm-12 col-md-6 col-lg-3 my-5"--}}
            <div class="box">
            <div class="col-lg-11">
                <i class="fa fa-globe-americas icon"></i>
                <span><label>sportshop10@gmail.com</label></span>
            </div>
            </div>
            <div id="social">
                <a href="#" class="social-icon"><img src="{{asset('social_media/facebook.png')}}" alt="First slide" width="70px" height="70px"></a>
                <a href="#" class="social-icon"><img src="{{asset('social_media/instagram.png')}}" alt="First slide" width="70px" height="70px"></a>
                <a href="#" class="social-icon"><img src="{{asset('social_media/twitter.png')}}" alt="First slide" width="70px" height="70px"></a>
                <a href="#" class="social-icon"><img src="{{asset('social_media/youtube.png')}}" alt="First slide" width="70px" height="70px"></a>
            </div>
        </div>

        </div>
    </div>
    </div>


    @endsection
