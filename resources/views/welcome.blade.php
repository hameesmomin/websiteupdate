<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" xmlns:width="http://www.w3.org/1999/xhtml">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
        <script src="https://code.jquery.com/jquery-3.5.0.js"></script>

        <!-- Styles -->
        <style>
            html{
                scroll-behavior: smooth;
            }
            body {
                position: absolute;
                width:100%;
                height:100%;
                left: 0;
                top: 0;
                min-width: auto;

            }

            #one{
                position:absolute;
                width:26vw;
                height:5vh;
                top:4vh;
                left:5vw;




            }
            #two{
                position: absolute;
                width: 11vw;
                height: 2vh;
                left: 38vw;
                top: 5vh;

                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: normal;
                font-size: 2vmin;
                line-height: 3.5vmin;

                color: #FFFFFF;

            }
            #three{
                position: absolute;
                width: 13vw;
                height: 2vh;
                left: 52vw;
                top: 5vh;

                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: normal;
                font-size: 2vmin;
                line-height: 3.5vmin;

                color: #FFFFFF;

            }

            #four{
                position: absolute;
                width: 15vw;
                height: 2vh;
                left: 68vw;
                top: 5vh;

                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: normal;
                font-size: 2vmin;
                line-height: 3.5vmin;

                color: #FFFFFF;
            }

            #five{
                position: absolute;
                width:9vw;
                height: 2vh;
                left: 86vw;
                top: 5vh;

                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: normal;
                font-size: 2vmin;
                line-height: 3.5vmin;

                color: #FFFFFF;

            }
            #six{
                position: absolute;
                left: 7vw;
                height:13vh;
                width:48.5vw;

                top: 28vh;


                font-family: Montserrat, sans-serif;
                font-style: normal;
                font-weight: bold;
                font-size: 7vmin;
                line-height: 8.7vmin;

                color: #FFFFFF;
            }

            #seven{
                position: absolute;
                left: 15%;
                right: 57%;
                top: 45%;


                font-family: Montserrat, sans-serif;
                font-style: normal;
                font-weight: bold;
                font-size: 35px;
                line-height: 43px;

                color: #FFFFFF;
            }

            #eight{
                position: absolute;
                width:17vw;
                height:3vh;
                left: 68vw;
                top: 32vh;



                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: 300;
                font-size: 2vmin;
                line-height: 2vmin;
                /* or 100% */

                text-align: center;

                color: #FFFFFF;
            }

            #nine{
                position: absolute;
                width: 35vw;
                height: 3vh;
                left: 59vw;
                top: 36vh;


                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: normal;
                font-size: 2vmin;
                line-height: 2vmin;
                /* or 100% */

                text-align: center;

                color: #FFFFFF;
            }

            #ten{
                position: absolute;
                width: 38vw;
                height: 6vh;
                left: 63vw;
                top: 42vh;

                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: 300;
                font-size: 2vmin;
                line-height: 2vmin;
                /* or 100% */

                display: flex;
                align-items: center;
                text-align: center;

                color: #FFFFFF;
            }
            #eleven{
                position: absolute;
                width: 19vw;
                height: 2vh;
                left: 72vw;
                top: 49vh;


                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: normal;
                font-size: 2vmin;
                line-height: 2vmin;
                /* identical to box height, or 100% */

                display: flex;
                align-items: center;
                text-align: center;

                color: #FFFFFF;
            }

            #twelve{
                position: absolute;
                width: 18vw;
                height: 5vh;
                left: 68vw;
                top: 56vh;

                background: #FFFFFF;
                border-radius: 3vmin;
            }
            #thirteen{
                position:absolute;

                width:100vw;
                bottom:0;
                height:29vh;
                left:0;

            }


            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
            /* Extra small devices (phones, 600px and down) */
            @media only screen and (max-width: 600px) {
                .example {background: red;}
            }

            /* Small devices (portrait tablets and large phones, 600px and up) */
            @media only screen and (min-width: 600px) {
                .example {background: green;}
            }

            /* Medium devices (landscape tablets, 768px and up) */
            @media only screen and (min-width: 768px) {
                .example {background: blue;}
            }

            /* Large devices (laptops/desktops, 992px and up) */
            @media only screen and (min-width: 992px) {
                .example {background: orange;}
            }

            /* Extra large devices (large laptops and desktops, 1200px and up) */
            @media only screen and (min-width: 1200px) {
                .example {background: pink;}
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height w3-row " style="width:100%; height:100%;min-width:auto; background: linear-gradient(180deg, #ED213A 0%, #93291E 47.4%, #263238 100%);">

            <div id="one" >
               <img src="{{url('/assets/L&Shead.png')}}" alt="" style="height:5vh;width:26vw;">
            </div>
            <br>
            <div id="two" class="w3-mobile">

                <a href="" style="color:#FFFFFF">HOW IT WORKS</a>

            </div>
            <br>
            <div id="three" class="w3-mobile">
                <a href="" style="color:#FFFFFF">PARTNER WITH US</a>
            </div>
            <br>
            <div id="four" class="w3-mobile">
                <a href="" style="color:#FFFFFF">BRAND AMBASSADOR</a>
            </div>
            <br>
            <div id="five" class="w3-mobile">
                <a href="" style="color:#FFFFFF">CONTACT US</a>
            </div>

            <br>



            <div id="six">
                <img src="{{url('/assets/FClogo.png')}}" alt="" style="height:17vh;width:48.5vw;">
            </div>

            <br>
            <div id="eight" class="w3-mobile">
                At Lock&Stock, we believe
            </div>
            <br>
            <div id="nine"class="w3-mobile" >
                "Innovation has the potential to change society."
            </div>
            <br>
            <div id="ten" class="w3-mobile">
                This innovation will come from the people closest to technological change:
            </div>
            <br>
            <div id="eleven"class="w3-mobile" >
                Teenagers and Young Adults
            </div>
            <br>
            <div id="twelve" style=" display: flex;align-items: center;justify-content: center;" class="w3-mobile">
                <button data-anchor="#scroll" class="btn btn-outline-danger" onclick="window.location='{{ url("page2") }}'" style="height:5vh;width:18vw;border-radius:25vmin;font-size:2vmin;">I'm ready to lift-off! </button>
            </div>
            <br>
            <div id="thirteen">
                <img src="{{url('/assets/waves.png ')}}" alt="" style="width:100vw;bottom:0vh;height:29vh;">
            </div>

        </div>

        <script>

            $('[data-anchor]').click(function(e) {
                e.preventDefault();
                var goToAnchor = $(this).attr("data-anchor");
                $('html, body').animate({
                    scrollTop: $(goToAnchor).offset().top
                }, 1000);
            });

        </script>


    </body>
</html>
