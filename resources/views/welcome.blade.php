<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,height=device-height,initial-scale=1">


        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body {
                position: absolute;
                width:100%;
                height:100%;
                left: 0;
                top: 0;
                min-width: 800px;

            }

            #one{
                position:absolute;
                width:26%;
                height:5%;
                top:4%;
                left:5%;
                bottom:91%;
                right:69%;


            }
            #two{
                position: absolute;
                width: 11%;
                height: 2%;
                left: 38%;
                top: 5%;

                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: normal;
                font-size: 20px;
                line-height: 34px;

                color: #FFFFFF;

            }
            #three{
                position: absolute;
                width: 13%;
                height: 2%;
                left: 52%;
                top: 5%;

                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: normal;
                font-size: 20px;
                line-height: 34px;

                color: #FFFFFF;

            }

            #four{
                position: absolute;
                width: 15%;
                height: 2%;
                left: 68%;
                top: 5%;

                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: normal;
                font-size: 20px;
                line-height: 34px;

                color: #FFFFFF;
            }

            #five{
                position: absolute;
                width:9%;
                height: 2%;
                left: 86%;
                top: 5%;

                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: normal;
                font-size: 20px;
                line-height: 34px;

                color: #FFFFFF;

            }
            #six{
                position: absolute;
                left: 7%;
                right: 45%;
                top: 36%;
                bottom: 55%;

                font-family: Montserrat, sans-serif;
                font-style: normal;
                font-weight: bold;
                font-size: 71px;
                line-height: 86px;

                color: #FFFFFF;
            }

            #seven{
                position: absolute;
                left: 15%;
                right: 57%;
                top: 45%;
                bottom: 50%;

                font-family: Montserrat, sans-serif;
                font-style: normal;
                font-weight: bold;
                font-size: 35px;
                line-height: 43px;

                color: #FFFFFF;
            }

            #eight{
                position: absolute;
                width:17%;
                height:3%;
                left: 68%;
                top: 32%;
                right: 15%;
                bottom:65%;

                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: 300;
                font-size: 24px;
                line-height: 24px;
                /* or 100% */

                text-align: center;

                color: #FFFFFF;
            }

            #nine{
                position: absolute;
                width: 35%;
                height: 3%;
                left: 59%;
                top: 36%;
                bottom:61%;

                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: normal;
                font-size: 24px;
                line-height: 24px;
                /* or 100% */

                text-align: center;

                color: #FFFFFF;
            }

            #ten{
                position: absolute;
                width: 38%;
                height: 6%;
                left: 57%;
                top: 42%;

                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: 300;
                font-size: 24px;
                line-height: 24px;
                /* or 100% */

                display: flex;
                align-items: center;
                text-align: center;

                color: #FFFFFF;
            }
            #eleven{
                position: absolute;
                width: 19%;
                height: 2%;
                left: 70%;
                top: 49%;
                bottom:49%;

                font-family: Dubai, sans-serif;
                font-style: normal;
                font-weight: normal;
                font-size: 24px;
                line-height: 24px;
                /* identical to box height, or 100% */

                display: flex;
                align-items: center;
                text-align: center;

                color: #FFFFFF;
            }

            #twelve{
                position: absolute;
                width: 18%;
                height: 5%;
                left: 68%;
                top: 56%;

                background: #FFFFFF;
                border-radius: 30px;
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
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height collapse" style="width:100%; height:100%;min-width:1000px; background: linear-gradient(180deg, #ED213A 0%, #93291E 47.4%, #263238 100%);">
            <div id="one">
               <img src="/public/assets/L&Shead.png" alt="" style="height:49px;width:355px;">
            </div>
            <br>
            <div id="two">

                <a href="" style="color:#FFFFFF">HOW IT WORKS</a>

            </div>
            <br>
            <div id="three">
                <a href="" style="color:#FFFFFF">PARTNER WITH US</a>
            </div>
            <br>
            <div id="four">
                <a href="" style="color:#FFFFFF">BRAND AMBASSADOR</a>
            </div>
            <br>
            <div id="five">
                <a href="" style="color:#FFFFFF">CONTACT US</a>
            </div>
            <br>
            <section>
            <div class="navbar container">
            <div id="six">
                <img src="/public/assets/FClogo.png" alt="" style="width:100%;height:100%">
            </div>
            </div>
            </section>
            <br>
            <div id="seven" >
                BY LOCK&STOCK
            </div>
            <br>
            <div id="eight">
                At Lock&Stock, we believe
            </div>
            <br>
            <div id="nine">
                "Innovation has the potential to change society."
            </div>
            <br>
            <div id="ten">
                This innovation will come from the people closest to technological change:
            </div>
            <br>
            <div id="eleven">
                Teenagers and Young Adults
            </div>
            <br>
            <div id="twelve" style=" display: flex;align-items: center;justify-content: center;">
                <button class="btn btn-outline-danger" style="width:100%;height:100%;border-radius:25px;">I'm ready for lift-off!</button>
            </div>
        </div>

    </body>
</html>
