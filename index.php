<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>

        <style>

            body {
                background-color: darkblue;
                background-image: url("backg.png");
                background-attachment: fixed;

            }

            header {
                margin-top: 20px;
                margin-bottom: 20px;
            }

            h1 {
                text-align: center;
            }

            p {
                text-align: center;
            }

            div {
                text-align: center;
                margin-top: 40px;
                margin-left: auto;
                margin-right: auto;
                display: inline-block;
            }

            label {
                width: 100%;
                margin: 50px;
                font-size: 35px;
                font-family: Helvetica;
            }

            .slidecontainer {
                width: 100%; /* Width of the outside container */
            }

            div.outerbox {
                border-radius: 80px;
                text-align: center;
                background-image: linear-gradient(white, white, white, rgba(0,0,0,0));
                height: 600px;
                width: 50%;
                margin-left: 1%;
                /*height: 100%;*/


            }

            .slider {
                -webkit-appearance: none;  /* Override default CSS styles */
                appearance: none;
                width: 30%; /* Full-width */
                height: 15px; /* Specified height */
                background: #9BC6C1; /* dull mint background */
                outline: none; /* Remove outline */
                opacity: 1; /* Set transparency (for mouse-over effects on hover) */
                -webkit-transition: .2s; /* 0.2 seconds transition on hover */
                transition: opacity .2s;
                border-radius: 30px;
            }
            /* Mouse-over effects */
            .slider:hover {
                opacity: 0.7; /* Fully shown on mouse-over */
            }
            .slider::-webkit-slider-thumb {
                -webkit-appearance: none; /* Override default look */
                appearance: none;
                border-radius: 8px;
                width: 40px; /* Set a specific slider handle width */
                height: 20px; /* Slider handle height */
                background: #4890AA; /* dark teil background */
                cursor: pointer; /* Cursor on hover */

            }

            button {
                height: 70px;
                width: 300px;
                padding: 5px 5px 5px 20px;
                text-align: left;
                border-radius: 20px;
                font-size: 40px;
                font-family: Helvetica;
                font-weight: bold;
                color: white;
                display: block;
                margin-bottom: 20px;
                text-shadow: -2px 2px #332D2D;

            }
            
            input.input2button {
                height: 70px;
                width: 300px;
                padding: 5px 5px 5px 20px;
                text-align: left;
                border-radius: 20px;
                font-size: 40px;
                font-family: Helvetica;
                font-weight: bold;
                color: white;
                display: block;
                margin-bottom: 20px;
                text-shadow: -2px 2px #332D2D;

            }

            div.buttondiv {
                margin-bottom: 1%;
                margin-left: 25%;

            }



        </style>

    </head>
    <body>


        <header align="center" >
            <h1 style="font-family: Helvetica; font-size: 80px; color: white; text-shadow: 2px 8px #000000; margin-bottom: 5px;">FIGHTING ROBOTS</h1>
            <h2 style="font-family: Helvetica; font-size: 40px; color: white; text-shadow: 2px 4px #000000; margin-top:auto;" >Robotic Arm Ranges</h2>
        </header>


        <div class="outerbox" id="myForm">

            <div class="slidecontainer">
                <label>motor 1</label>
                <input type="range" min="0" max="180" value="90" class="slider" id="myRange1">
                <label>value: <span id="demo1"></span></label>

                <script>
                    var slider = document.getElementById("myRange1");
                    var output = document.getElementById("demo1");
                    output.innerHTML = slider.value;

                    slider.oninput = function () {
                        output.innerHTML = this.value;
                    }
                </script>
            </div>    



            <div class="slidecontainer">
                <label>motor 2</label>
                <input type="range" min="0" max="180" value="90" class="slider" id="myRange2">
                <label>value: <span id="demo2"></span></label>

                <script>
                    var slider = document.getElementById("myRange2");
                    var output2 = document.getElementById("demo2");
                    output2.innerHTML = slider.value;

                    slider.oninput = function () {
                        output2.innerHTML = this.value;
                    }
                </script>
            </div> 



            <div class="slidecontainer">   
                <label>motor 3</label>
                <input type="range" min="0" max="180" value="90" class="slider" id="myRange3">
                <label>value: <span id="demo3"></span></label>

                <script>
                    var slider = document.getElementById("myRange3");
                    var output3 = document.getElementById("demo3");
                    output3.innerHTML = slider.value;

                    slider.oninput = function () {
                        output3.innerHTML = this.value;
                    }
                </script>
            </div>



            <div class="slidecontainer">    
                <label>motor 4</label>
                <input type="range" min="0" max="180" value="90" class="slider" id="myRange4">
                <label>value: <span id="demo4"></span></label>

                <script>
                    var slider = document.getElementById("myRange4");
                    var output4 = document.getElementById("demo4");
                    output4.innerHTML = slider.value;

                    slider.oninput = function () {
                        output4.innerHTML = this.value;
                    }
                </script>
            </div>



            <div class="slidecontainer">
                <label>motor 5</label>
                <input type="range" min="0" max="180" value="90" class="slider" id="myRange5">
                <label>value: <span id="demo5"></span></label>

                <script>
                    var slider = document.getElementById("myRange5");
                    var output5 = document.getElementById("demo5");
                    output5.innerHTML = slider.value;

                    slider.oninput = function () {
                        output5.innerHTML = this.value;
                    }
                </script>
            </div>



            <div class="slidecontainer">
                <label>motor 6</label>
                <input type="range" min="0" max="180" value="90" class="slider" id="myRange6">
                <label>value: <span id="demo6"></span></label>

                <script>
                    var slider = document.getElementById("myRange6");
                    var output6 = document.getElementById("demo6");
                    output6.innerHTML = slider.value;

                    slider.oninput = function () {
                        output6.innerHTML = this.value;
                    }
                </script>
            </div>
        </div>


        <div class="buttondiv">

            <button style="background-image: linear-gradient(to right, #B8EDE7, #218D7F);">Start</button>

            <button style="background-image: linear-gradient(to right, #FF9D9D, #BC2424);">Stop</button>

            <button style="background-image: linear-gradient(to right, #B6E7FD, #0089C7);">Save</button>

            <input class="input2button" style="background-image: linear-gradient(to right, #D8D8D8, #747474);" id="reset" type="button" value="Reset">

            <script>
                
                var slider1 = document.getElementById("myRange1");
                var output1 = document.getElementById("demo1");
                output1.innerHTML = slider1.value;
                
                var slider2 = document.getElementById("myRange2");
                var output2 = document.getElementById("demo2");
                output2.innerHTML = slider2.value;
                
                var slider3 = document.getElementById("myRange3");
                var output3 = document.getElementById("demo3");
                output3.innerHTML = slider3.value;
                
                var slider4 = document.getElementById("myRange4");
                var output4 = document.getElementById("demo4");
                output4.innerHTML = slider4.value;
                
                var slider5 = document.getElementById("myRange5");
                var output5 = document.getElementById("demo5");
                output5.innerHTML = slider5.value;
                
                var slider6 = document.getElementById("myRange6");
                var output6 = document.getElementById("demo6");
                output6.innerHTML = slider6.value;

                document.getElementById('reset').onclick = function () {
                    
                    output1.innerHTML = 90;
                    document.getElementById('myRange1').value = 90;
                    
                    output2.innerHTML = 90;
                    document.getElementById('myRange2').value = 90;
                    
                    output3.innerHTML = 90;
                    document.getElementById('myRange3').value = 90;
                    
                    output4.innerHTML = 90;
                    document.getElementById('myRange4').value = 90;
                    
                    output5.innerHTML = 90;
                    document.getElementById('myRange5').value = 90;
                    
                    output6.innerHTML = 90;
                    document.getElementById('myRange6').value = 90;
                }

            </script>

        </div>

        
        
        <!--
        <?php
        // put your code here
        echo 'hello';
        ?>
        -->


    </body>
</html>
