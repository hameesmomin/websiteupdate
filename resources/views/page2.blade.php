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
            width: 31vw;
            height: 6vh;
            left: 38.5vw;
            top: 10vh;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: normal;
            font-size: 4vmin;
            line-height: 4.5vmin;
            /* identical to box height, or 157% */



            color: #FFFFFF;

        }

        #two{
            position: absolute;
            width: 38vw;
            height: 4vh;
            left: 32vw;
            top: 17vh;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: 300;
            font-size: 2vmin;
            line-height: 4vmin;
            /* identical to box height, or 150% */

            text-align: center;

            color: #FFFFFF;
        }
        #three{
            position: absolute;
            width: 61vw;
            height: 4vh;
            left: 20.5vw;
            top: 21vh;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: 300;
            font-size: 2vmin;
            line-height: 4vmin;
            /* identical to box height, or 150% */

            text-align: center;

            color: #FFFFFF;

        }
        #four{
            position: absolute;
            width: 31vw;
            height: 2vh;
            left: 36.5vw;
            top: 31vh;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: normal;
            font-size: 3vmin;
            line-height: 2vmin;
            /* identical to box height, or 89% */

            display: flex;
            align-items: center;
            text-align: center;

            color: #FFFFFF;

        }
        #five{
            position:absolute;
            height:25vh;
            width:31vw;
            left:37.5vw;
            top:35vh;


        }
        #six{
            position: absolute;
            width: 18vw;
            height: 2vh;
            left: 43vw;
            top: 62vh;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: normal;
            font-size: 2.3vmin;
            line-height: 2vmin;
            /* identical to box height, or 67% */



            color: #FFFFFF;
        }
        #seven{
            position: absolute;
            width: 2vw;
            height: 3vh;
            left: 21vw;
            top: 65vh;

            border: 0.2vmin solid #FFFFFF;
            box-sizing: border-box;
            border-radius: 50px;
            font-size:2vmin;

            display: flex;
            align-items: center;
            text-align: center;

        }
        #eight{
            position: absolute;
            width: 21vw;
            height: 5vh;
            left: 26vw;
            top: 65vh;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: 300;
            font-size: 2vmin;
            line-height: 2vmin;
            /* or 100% */


            color: #FFFFFF;

        }
        #nine{
            position: absolute;
            width: 2vw;
            height: 3vh;
            left: 50vw;
            top: 65vh;

            border: 0.2vmin solid #FFFFFF;
            box-sizing: border-box;
            border-radius: 4vmin;
            font-size:2vmin;

            display: flex;
            align-items: center;
            text-align: center;
        }
        #ten{
            position: absolute;
            width: 24vw;
            height: 8vh;
            left: 55vw;
            top: 65vh;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: 300;
            font-size: 2vmin;
            line-height: 2vmin;
            /* or 100% */


            color: #FFFFFF;
        }
        #eleven{
            height:18vh;
            width:100vw;
            top:82vh;
            left:0;
            bottom:0;
            position:absolute;
        }
        #twelve{
            position: absolute;
            width: 3vmin;
            height: 3vmin;
            left: 49%;
            top: 77%;



        }
        #thirteen{
            height:14vh;
            width:100vw;
            top:82vh;
            left:0;
            bottom:0;
            position:absolute;
        }
        #a{
            position: absolute;
            width: 38vw;
            height: 4vh;
            left: 32vw;
            top: 112vh;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: normal;
            font-size: 4vmin;
            line-height: 3vmin;
            /* identical to box height, or 95% */

            text-align: center;

            color: #FFFFFF;

        }

        #b{
            position: absolute;
            width: 22vw;
            height: 3vh;
            left: 40.5vw;
            top: 117vh;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: 300;
            font-size: 3vmin;
            line-height: 3vmin;
            /* identical to box height, or 107% */

            display: flex;
            align-items: center;
            text-align: center;

            color: #FFFFFF;
        }
        #c{
            left:39vw;
            top:124vh;
            width:24vw;
            height:35vh;
            position:absolute;
        }
        #d{
            position: absolute;
            width: 41vw;
            height: 3vh;
            left: 35.5vw;
            top: 163vh;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: 300;
            font-size: 3vmin;
            line-height: 3vmin;
            /* identical to box height, or 98% */

            display: flex;
            align-items: center;
            text-align: center;

            color: #FFFFFF;

        }
        #e{
            position: absolute;
            width: 37vw;
            height: 6vh;
            left: 36.5vw;
            top: 170vh;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: 500;
            font-size: 5vmin;
            line-height: 6vmin;
            /* identical to box height, or 131% */

            display: flex;
            align-items: center;
            text-align: center;

            color: #FDC830;

        }
        #f{
            position: absolute;
            width: 3vmin;
            height: 3vmin;
            left: 49vw;
            top: 177vh;
        }
        #g{

            height:18vh;
            width:100vw;
            top:182vh;
            left:0;
            bottom:0;
            position:absolute;
        }
        #h{
            position: absolute;
            width: 64.5vh;
            height: 6vh;
            left: 34vw;
            top: 210vh;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: 500;
            font-size: 7vmin;
            line-height: 5.6vmin;
            /* identical to box height, or 80% */

            text-align: center;

            color: #263238;
        }
        #i{
            height:18vh;
            width:100vw;
            top:182vh;
            left:0;
            bottom:0;
            position:absolute;
        }
        #j{
            position: absolute;
            width: 42vw;
            height: 0;
            left: 29vw;
            top: 217vh;

            border: 2px solid #263238;

        }
        #k{
            position: absolute;
            width: 40.6vw;
            height: 5.6vh;
            left: 32vw;
            top: 220vh;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: 300;
            font-size: 5.6vh;
            line-height: 5.6vh;
            /* identical to box height, or 100% */

            display: flex;
            align-items: center;
            text-align: center;

            color: #6B6B6B;

        }
        #l{
            position: absolute;
            width: 26vw;
            height: 32vh;
            left: 14vw;
            top: 236.5vh;

            background: #F5F5F5;
        }
        #m{
            position: absolute;
            width: 26vw;
            height: 32vh;
            left: 39vw;
            top: 236.5vh;

            background: #F5F5F5;
        }
        #n{
            position: absolute;
            width: 26vw;
            height: 32vh;
            left: 65.6vw;
            top: 236.5vh;

            background: #F5F5F5;
        }
        #o{
            position: absolute;
            width: 2.5vw;
            height: 4.6vh;
            left: 18.6vw;
            top: 270vh;

            border: 0.20vmin solid #6B6B6B;
            box-sizing: border-box;
            border-radius: 30px;

        }
        #p{
            position: absolute;
            width: 126px;
            height: 61px;
            left: 325px;
            top: ;

            font-family: Dubai, serif;
            font-style: normal;
            font-weight: normal;
            font-size: 36px;
            line-height: 61px;
            /* identical to box height */


            color: #ED213A;

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
               <img src="{{url('/assets/sponsor.PNG')}}" alt="" style="height:25vh;width:26vw;">
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
               <img src="{{url('/assets/waves.png ')}}" alt="" style="width:100vw;height:19vh;">
           </div>
           <br>
           <div id="twelve">
               <button class="btn btn-primary" style="background-color:transparent;border:none; font-size:35px;"><b>V</b></button>
           </div>
           <br>
           <div id="thirteen">
               <img src="{{url('/assets/Vector.png ')}}" alt="" style="width:100vw;height:12.5vh;top:7vh;z-index:2;position:absolute">
           </div>
       </div>
       <div class="flex-center position-ref full-height " style="width:100%; height:100%;min-width:auto; background: linear-gradient(180deg, #ED213A 0%, #93291E 47.4%, #263238 100%)">
           <div id="a">
               We understand how this game works.
           </div>
           <br>
           <div id="b">
               Frankly, because we’ve been there
           </div>
           <br>
           <div id="c">
               <img src="{{url('/assets/Group 1119.png ')}}" alt="" style="width:100%;height:100%">
           </div>
           <br>
           <div id="d">
               And those that take-off; don’t just fly - they soar
           </div>
           <br>
           <div id="e">
               We will put you in that 2%
           </div>
           <br>
           <div id="f">
               <button class="btn btn-primary" style="background-color:transparent;border:none; font-size:35px;"><b>V</b></button>
           </div>
           <br>
           <div id="g">
               <img src="{{url('/assets/waves.png ')}}" alt="" style="width:100vw;height:24.5vh;bottom:0;z-index:1">
           </div>
           <div id="i">
               <img src="{{url('/assets/Vector.png ')}}" alt="" style="width:100vw;height:12.5vh;top:13vh;z-index:2;position:absolute">
           </div>
       </div>
       <div class="flex-center position-ref full-height " style="width:100%; height:100%;" >
           <div id="h">
               HOW THIS WORKS
           </div>
           <br>
           <div id="j">

           </div>
           <br>
           <div id="k">
               You bring the heart and the brain
           </div>
           <br>
           <div id="l">
               <img src="{{url('/assets/Frame 54@2x.png ')}}" alt="" style="width:20vw;height:28vh;">
           </div>
           <br>
           <div id="m">
               <img src="{{url('/assets/Frame 55.png ')}}" alt="" style="width:20vw;height:28vh;">
           </div>
           <br>
           <div id="n">
               <img src="{{url('/assets/Frame 56@2x.png ')}}" alt="" style="width:14vw;height:28vh;">
           </div>
           <br>
           <div id="o">
               1
           </div>
           <br>
           <div id="p">

           </div>

       </div>
   </body>
</html>
