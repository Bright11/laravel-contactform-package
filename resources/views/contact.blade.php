<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>

   <link rel="stylesheet" type="text/css" href="{{ asset("bright/contactstyle.css") }}"/>
   <script src="https://unpkg.com/htmx.org@1.9.12" integrity="sha384-ujb1lZYygJmzgSwoxRggbCHcjc0rB2XoQrxeTUQyRjrOnlCoYta87iKBWq3EsdM2" crossorigin="anonymous"></script>
</head>
<body >

<section class="bright_section">
   <div class="bright_form_div">
    <div class="bright-contactform_container">
        <div class="bright-contat-sidebar">
            <div class="bright_info_details">
                <h1>{{config('bright_config.company_name')}}</h1>
                <h3>Phone Number</h3>
                <a href="">{{config('bright_config.phbne_number')}}</a>
                <h1>Location</h1>
                <p>{{config('bright_config.location')}}</p>
            </div>
            <img src="{{asset("bright/bright_img/emvelope.jpg")}}" alt="">
        </div>
        <div class="brightform_div">
         @session('success')
         <div class="bright_success">
            <p>{{ session("success") }}</p>
          </div>
         @endsession
         @session('erro')
         <div class="bright_success">
         <p>{{ session("error") }}</p>
         </div>
         @endsession
            <form  class="bright-form" method="POST">
                @csrf

            <div class="brigt-form-icon">
                <input type="text" name="name" placeholder="Name">

                <div class="bright_icon">
                    <img src="{{asset("bright/bright_img/user.png")}}" alt="">
                </div>
            </div>
            @error('name')
            <div class="bright_error">{{ $message }}</div>
        @enderror
            <div class="brigt-form-icon">
                <input type="text" name="email" placeholder="Email">
                <div class="bright_icon">
                <img src="{{asset("bright/bright_img/mail.png")}}" alt="">
                </div>
            </div>
            @error('email')
            <div class="bright_error">{{ $message }}</div>
        @enderror
            <div class="brigt-form-icon">
                <input type="text" name="subject" placeholder="Subject">

                <div class="bright_icon">
                    <img src="{{asset("bright/bright_img/books-stack-of-three.png")}}" alt="">
                </div>
            </div>
            @error('subject')
            <div class="bright_error">{{ $message }}</div>
        @enderror
            <div class="brigt-form-icon">
                <textarea name="message" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            @error('message')
            <div class="bright_error">{{ $message }}</div>
        @enderror
                <button class="bright_form_btn" hx-post="/brightsendmail" hx-target="body">
                  Send
                  </button>
            </form>
        </div>
    </div>
   </div>
</section>

</body>
</html>
