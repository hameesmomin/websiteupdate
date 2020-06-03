<!DOCTYPE html>


<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">


    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

    <!-- Styles -->
    <style>
        html{
            scroll-behavior:smooth;
        }
        body{
            position: absolute;
            width: 100%;
            height: 100%;
            left: 0;
            top: 0;
        }
        #one{
            position: absolute;
            width: 31%;
            height: 6%;
            left: 39%;
            top: 10%;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;
            line-height: 57px;
            /* identical to box height, or 157% */



            color: #FFFFFF;

        }

        #two{
            position: absolute;
            width: 38%;
            height: 4%;
            left: 31%;
            top: 17%;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: 300;
            font-size: 24px;
            line-height: 36px;
            /* identical to box height, or 150% */

            text-align: center;

            color: #FFFFFF;
        }
        #three{
            position: absolute;
            width: 61%;
            height: 4%;
            left: 19%;
            top: 21%;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: 300;
            font-size: 24px;
            line-height: 36px;
            /* identical to box height, or 150% */

            text-align: center;

            color: #FFFFFF;

        }
        #four{
            position: absolute;
            width: 31%;
            height: 2%;
            left: 37%;
            top: 31%;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: normal;
            font-size: 28px;
            line-height: 21px;
            /* identical to box height, or 89% */

            display: flex;
            align-items: center;
            text-align: center;

            color: #FFFFFF;

        }
        #five{
            position:absolute;
            height:25%;
            width:31%;
            left:35%;
            top:35%;


        }
        #six{
            position: absolute;
            width: 18%;
            height: 2%;
            left: 43%;
            top: 60%;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: normal;
            font-size: 24px;
            line-height: 16px;
            /* identical to box height, or 67% */



            color: #FFFFFF;
        }
        #seven{
            position: absolute;
            width: 2%;
            height: 3%;
            left: 21%;
            top: 65%;

            border: 2px solid #FFFFFF;
            box-sizing: border-box;
            border-radius: 27px;

            display: flex;
            align-items: center;
            text-align: center;

        }
        #eight{
            position: absolute;
            width: 21%;
            height: 5%;
            left: 26%;
            top: 65%;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: 300;
            font-size: 24px;
            line-height: 24px;
            /* or 100% */


            color: #FFFFFF;

        }
        #nine{
            position: absolute;
            width: 2%;
            height: 3%;
            left: 50%;
            top: 65%;

            border: 2px solid #FFFFFF;
            box-sizing: border-box;
            border-radius: 27px;

            display: flex;
            align-items: center;
            text-align: center;
        }
        #ten{
            position: absolute;
            width: 24%;
            height: 8%;
            left: 55%;
            top: 65%;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: 300;
            font-size: 24px;
            line-height: 24px;
            /* or 100% */


            color: #FFFFFF;
        }
        #eleven{
            height:18%;
            width:100%;
            top:82%;
            left:0;
            bottom:0;
            position:absolute;
        }
        #twelve{
            position: absolute;
            width: 3%;
            height: 3%;
            left: 49%;
            top: 77%;



        }
    </style>

    <body>
       <div id="scroll" class="flex-center position-ref full-height " style="width:100%; height:100%;min-width:auto; background: linear-gradient(180deg, #ED213A 0%, #93291E 47.4%, #263238 100%);">
           <div id="one">
               What is Lock&Stock? Why us?
           </div>
           <br>
           <div id="two">
               L&S was founded as a company for students, by students.
           </div>
           <br>
           <div id="three">
               Today we are the fastest growing student startup in the UAE and MENA region.
           </div>
           <br>
           <div id="four">
               We’ve been featured in major publications like
           </div>
           <br>
           <div id="five">
               <img src="{{url('/assets/sponsor.PNG')}}" alt="" style="width:100%;height:222px;">
           </div>
           <br>
           <div id="six">
               Our achievements; thus far
           </div>
           <br>
           <div id="seven">
               <p style="padding-left: 35%; padding-top:50%;color:#FFFFFF"> 1</p>
           </div>
           <br>
           <div id="eight">
               Arabian Business Future Stars Award 2019
           </div>
           <br>
           <div id="nine">
               <p style="padding-left: 35%; padding-top:50%;color:#FFFFFF">2</p>
           </div>
           <br>
           <div id="ten">
               Most Innovative Educational Incentive 2020 - MEA Markets UAE Business Awards
           </div>
           <br>
           <div id="eleven">
               <img src="{{url('/assets/waves.png ')}}" alt="" style="width:100%;height:100%">
           </div>
           <br>
           <div id="twelve">
               <button class="btn btn-primary" style="background-color:transparent;border:none; font-size:35px;"><b>V</b></button>
           </div>
       </div>


   </body>
</html>
