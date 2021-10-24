@extends('layouts.layout')

@section('cards')

<div class="container">

    <div class="row">

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <div class="img-container">
                <img  src="../assets/img/coming-soon.jpg" class="img-fluid"  alt=""/>
                <div class="img-overlay">
                    <a href="/database" id="img-overlay-txt"><span><h5 class="text-center img-overlay-txt"><strong>Database</strong></h5></span></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <div class="img-container">
                <img  src="../assets/img/coming-soon.jpg" class="img-fluid"  alt=""/>
                <div class="img-overlay">
                    <a href="/discrete-math" id="img-overlay-txt"><span><h5 class="text-center img-overlay-txt"><strong>Discrete Math</strong></h5></span></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <div class="img-container">
                <img  src="../assets/img/coming-soon.jpg" class="img-fluid"  alt=""/>
                <div class="img-overlay">
                    <a href="/software-eng" id="img-overlay-txt"><span><h5 class="text-center img-overlay-txt"><strong>Software Engineering</strong></h5></span></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <div class="img-container">
                <img  src="../assets/img/coming-soon.jpg" class="img-fluid"  alt=""/>
                <div class="img-overlay">
                    <a href="#" id="img-overlay-txt"><span><h5 class="text-center img-overlay-txt"><strong>Coming Soon</strong></h5></span></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <div class="img-container">
                <img  src="../assets/img/coming-soon.jpg" class="img-fluid"  alt=""/>
                <div class="img-overlay">
                    <a href="#" id="img-overlay-txt"><span><h5 class="text-center img-overlay-txt"><strong>Coming Soon</strong></h5></span></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <div class="img-container">
                <img  src="../assets/img/coming-soon.jpg" class="img-fluid"  alt=""/>
                <div class="img-overlay">
                    <a href="#" id="img-overlay-txt"><span><h5 class="text-center img-overlay-txt"><strong>Coming Soon</strong></h5></span></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <div class="img-container">
                <img  src="../assets/img/coming-soon.jpg" class="img-fluid"  alt=""/>
                <div class="img-overlay">
                    <a href="#" id="img-overlay-txt"><span><h5 class="text-center img-overlay-txt"><strong>Coming Soon</strong></h5></span></a>
                </div>
            </div>
        </div>

        <div class="col-lg-3 col-md-4 col-xs-6 thumb">
            <div class="img-container">
                <img  src="../assets/img/coming-soon.jpg" class="img-fluid"  alt=""/>
                <div class="img-overlay">
                    <a href="#" id="img-overlay-txt"><span><h5 class="text-center img-overlay-txt"><strong>Coming Soon</strong></h5></span></a>
                </div>
            </div>
        </div>

    </div>

</div>

@endsection

@section('contact')

    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="contact-text">
                    <h1>Contact Us</h1>
                    <span class="span1">We'd love to hear your thoughts!</span>
                    <h2>Email</h2>
                    <span class="span2">studie2succeed@gmail.com</span>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="contact-form">
                    <form method="POST" action="mailto:studie2succeed@gmail.com">
                        <div class="row">
                            <div class="col-lg-6">
                                <input type="text" name="name" id="name" placeholder="Name" required>
                            </div>
                            <div class="col-lg-6">
                                <input type="email" name="email" id="email" placeholder="Email" required>
                            </div>
                            <div class="col-lg-12">
                                <input type="text" name="subject" id="subject" placeholder="Subject" required>
                            </div>
                            <div class="col-lg-12">
                                <textarea name="message" id="message" placeholder="Type your message here..." required></textarea>
                            </div>
                            <div class="col-lg-6">
                                <button type="submit" class="btn btn-primary" id="form-submit-button">Send Message</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
