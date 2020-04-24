
@extends('layouts.app-main')
@section('title')
    Contact Us
@endsection
@section('content')



    <!-- Inner-intro -->
    <section class="sa-page-title text-left">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact Us</h1>
                </div>
                <div class="col-md-12">
                    <nav class="breadcrumb">
                        <ul>
                            <li class="breadcrumb-item"><a href="{{'/'}}">Home</a></li>
                            <li class="breadcrumb-item active">Contact Us</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- /Inner-intro -->



<!-- Contact-Us -->
<section class="section-padding">
    <div class="container">


        <div class="contact_wrap">



            <div class="row">
                <div class="col-md-6 secondary-bg">
                    <div class="contact_info">
                        <div class="box_heading">
                            <h4><span>Request a</span> Free Consultation</h4>
                        </div>
                        <p>Masajja Hill, 5 Km Off Entebbe Road, <br> Kampala, Uganda</p>
                        <p>Call us: <span> +256780142003</span></p>
                        <p>Mail us: <span>info@thewellofdivineministry.com</span></p>


                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form_wrap">
                        <form>
                            <div class="form-group">
                                <input type="text" class="form-control" name="Name">
                                <span class="focus-input" data-placeholder="Your Name (required)"></span>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email">
                                <span class="focus-input" data-placeholder="Your Email (required)"></span>
                            </div>
                            <div class="form-group">
                                <textarea name="message" cols="45" rows="3" class="form-control"></textarea>
                                <span class="focus-input" data-placeholder="Your Message"></span>
                            </div>
                            <div class="form-group">
                                <input class="btn btn-primary" value="Submit" type="submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /Contact-Us -->
@endsection
