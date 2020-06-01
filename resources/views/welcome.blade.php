<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
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
                color: #FFFFFF;
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
                color: #FFFFFF;
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
                color: #FFFFFF;
            }

            #four{
                position: absolute;
                width: 299px;
                height: 32px;
                left:41px;
                top: 329px;
                right:35px;
                bottom:451px;

                font-family: Dubai, serif;
                font-style: normal;
                font-weight: normal;
                font-size: 18px;
                line-height: 18px;
                /* or 100% */

                text-align: center;
                color: #FFFFFF;

            }

            #five{
                position: absolute;
                width: 208px;
                height: 18px;
                left: 85px;
                top: 456px;
                right: 82px;
                bottom: 338px;

                font-family: Dubai, serif;
                font-style: normal;
                font-weight: normal;
                font-size: 18px;
                line-height: 18px;
                /* identical to box height, or 100% */

                display: flex;
                align-items: center;
                text-align: center;
                color: #FFFFFF;

            }

            #six{
                position: absolute;
                width: 264px;
                height: 48px;
                left: 56px;
                top: 615px;
                bottom:149px;
                right:55px;
                display: flex;
                align-items: center;
                justify-content: center;



                background: #FFFFFF;
                border-radius: 30px;
            }

            #even{
                position: absolute;
                width: 329px;
                height: 84px;
                left: 23px;
                top: 379px;
                bottom:350px;
                right:23px;

                font-family: Dubai, serif;
                font-style: normal;
                font-weight: 300;
                font-size: 18px;
                line-height: 18px;
                /* or 100% */

                display: flex;
                align-items: center;
                text-align: center;

                color: #FFFFFF;
            }

            #seven{
                position: absolute;
                width: 375px;
                height: 51px;
                left: 0;
                top: 737px;
                bottom:24px;

                background: linear-gradient(180deg, #F37335 0%, #FDC830 100%);
            }
            #eight{
                position: absolute;
                width: 375px;
                height: 40px;
                left: 0;
                top: 772px;
                background: rgba(243, 115, 53, 0.9);
                transform: matrix(-1, 0, 0, 1, 0, 0);
                

                background: #FFFFFF;
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
        <div class="flex-center position-ref full-height" style="width:375px; height:812px; background: linear-gradient(180deg, #ED213A 0%, #93291E 47.4%, #263238 100%);">
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
                Innovation has the potential to change society
            </div>
            <br>
            <div id="even">
                This innovation will come from the people closest to technological change:
            </div>
            <br>
            <div id="five">
                Teenagers and Young Adults
            </div>
            <br>
            <div id="six" >
                <button class=" btn btn-outline-danger rounded-pill" style="height:48px; width:264px;border-radius: 25px; "> I'm ready for lift-off! </button>
            </div>
            <br>
            <div id="seven">
            </div>
            <br>
            <div id="eight">
            </div>
        </div>
    </body>
</html>
