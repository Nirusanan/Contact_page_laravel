
@extends('layout')
@section('content')
    
        <section>
            <div class="container">
                <div class="contactInfo">
                    <div>
                        <h2>Contact Info</h2>
                        <ul class="info">
                            <li>
                                <span><img src="{{ asset('imgage/location.png') }}"></span>
                                <span>Science World<br>
                                    Jaffna.<br>
                                    Srilanka</span>
                            </li>
                            <li>
                                <span><img src="{{ asset('imgage/mail.png') }}"></span>
                                <span>scienceworld@gmail.com</span>
                            </li>
                            <li>
                                <span><img src="{{ asset('imgage/call.png') }}"></span>
                                <span>077-619-0013</span>
                            </li>
                        </ul>
                    </div>
                    <ul class="sci">
                        <li><a href="#"><img src="{{ asset('imgage/1.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('imgage/2.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('imgage/3.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('imgage/4.png') }}"></a></li>
                        <li><a href="#"><img src="{{ asset('imgage/5.png') }}"></a></li>
                    </ul>
                </div>
                <div class="contactForm">
                <form method="POST" action="contact">
                    @csrf
                    <h2>Send a Message</h2>
                    <div class="formBox">
                        <div class="inputBox w50">
                            <input id="fname" type="text" name="firstName" required>
                            <span>First Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input id="lname" type="text" name="lastName" required>
                            <span>Last Name</span>
                        </div>
                        <div class="inputBox w50">
                            <input id="email" type="email" name="email" required>
                            <span>Email Address</span>
                        </div>
                        <div class="inputBox w50">
                            <input id="pno" type="text" name="phone" required>
                            <span>Mobile Number</span>
                        </div>
                        <div class="inputBox w100">
                            <textarea name="message" required></textarea>
                            <span>Write Your Message Here....</span>
                        </div>
                        <div class="inputBox w100">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </section>

    
@endsection
