<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            body{
                position: absolute;
                width: 375px;
                height: 812px;
                left: 0;
                top: 0;

                background-image:linear-gradient(to bottom, #ed213a 0%, #263238 100%);
            }
            #one{
                position: absolute;
                font-family: Montserrat, serif;
                left: 57px;
                right: 30px;
                top: 138px;
                bottom: 635px;
                height: 39px;
                width:275px;


                font-style: normal;
                font-weight: bold;
                font-size: 32px;
                line-height: 39px;
                font-palette: dark;
                /* identical to box height */
            }

            #two{
                position: absolute;
                left: 120px;
                right: 113px;
                top: 177px;
                bottom: 616px;
                height:19px;
                width:142px;

                font-family: Montserrat, serif;
                font-style: normal;
                font-weight: bold;
                font-size: 16px;
                line-height: 19px;
            }

            #three{
                position: absolute;
                width: 187px;
                height: 18px;
                left: 96px;
                top: 304px;
                bottom:490px;
                right:92px;

                font-family: Dubai, serif;
                font-style: normal;
                font-weight: 300;
                font-size: 18px;
                line-height: 18px;
                /* identical to box height, or 100% */

                text-align: center;
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
        <div class="flex-center position-ref full-height">
            <div id="one">
               FOUNDERS CLUB
            </div>
            <br>
            <div id="two">

                BY LOCK&STOCK

            </div>
            <br>
            <div id="three">
                At Lock&Stock, we believe
            </div>
            <br>
            <div id="four">

            </div>
            <br>
        </div>
    </body>
</html>
