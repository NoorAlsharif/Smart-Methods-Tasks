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
        <title>Fighting Robots</title>

        <style>
            body {
                background-color: darkblue;
                background-image: url("backg.png");
                background-attachment: fixed;
                height: 100%;
            }

            header {
                margin-top: 20px;
                margin-bottom: 20px;
            }

        </style>

        <style>
            /*
            * {
                box-sizing: border-box;
                margin: 0;
                padding: 0;
                align-items: center;
                justify-content: center;
            }
            */

            .flex-container {
                display: flex;
                flex-wrap: wrap;
                height: 100%;
                
                flex: 100%;

                padding: 10px 10px 10px 10px;
                align-items: center;
                justify-content: center;
            }

            @media screen and (max-width: 600px) {
                input.input2button{
                    height: 50px;
                    width: 100px;
                    margin: 1px;
                    padding: 1px 1px 1px 1px;
                    font-size: 15px;
                }
                
                input.input2buttonStop{
                    height: 50px;
                    width: 90px;
                    margin: 1px;
                    padding: 1px 1px 1px 1px;
                    font-size: 15px;
                }
            }
            
        </style>

        <style>

            /* Action Buttons */

            .input2button {
                /*display: block;*/

                height: 70px;
                width: 300px;

                /*margin-bottom: 20px;*/
                margin: 20px;

                padding: 5px 5px 5px 5px;
                text-align: center;

                border-radius: 20px;

                font-size: 40px;
                font-family: Helvetica;
                font-weight: bold;
                color: white;

                text-shadow: -2px 2px #332D2D;
            }

            .input2buttonStop {
                /*display: block;*/

                height: 70px;
                width: 200px;

                /*margin-bottom: 20px;*/
                margin: 20px;

                padding: 5px 5px 5px 5px;
                text-align: center;

                border-radius: 20px;

                font-size: 40px;
                font-family: Helvetica;
                font-weight: bold;
                color: white;

                text-shadow: -2px 2px #332D2D;
            }

            .vertical-center {
                /*margin: 20%;*/
                position: absolute;
                top: 50%;
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);

                width: 100%;
                margin-left: auto;
                margin-right: auto;
            }

        </style>

    </head>

    <body>

        <!-- Interface Header -->
        <header align="center" >
            <h1 style="font-family: Helvetica; font-size: 80px; color: white; text-shadow: 2px 8px #000000; margin-bottom: 5px;">FIGHTING ROBOTS</h1>
            <h2 style="font-family: Helvetica; font-size: 40px; color: white; text-shadow: 2px 4px #000000; margin-top: auto; margin-bottom: 5px;" >Robotic Base Movement</h2>
        </header>
        



        <div class="flex-container">

            <div style="text-align:center;">
                <input class="input2button" style="background-image: linear-gradient(#5B328D, #CA9DFF);" id="reset" type="button" value="Forward">
                <br/>
                <input class="input2button" style="background-image: linear-gradient(to left, #CA9DFF, #5B328D);" id="reset" type="button" value="Left">
                <input class="input2buttonStop" style="background-image: radial-gradient(#BC2424, #BC2424, #FF9D9D);" id="reset" type="button" value="Stop">
                <input class="input2button" style="background-image: linear-gradient(to right, #CA9DFF, #5B328D);" id="reset" type="button" value="Right">
                <br/>
                <input class="input2button" style="background-image: linear-gradient(#CA9DFF, #5B328D);" id="reset" type="button" value="Backward">
            </div>

        </div>


        <script>
            window.watsonAssistantChatOptions = {
                integrationID: "96347d02-c18a-4a6e-8d41-959101df0558", // The ID of this integration.
                region: "eu-gb", // The region your integration is hosted in.
                serviceInstanceID: "73efeafb-e7f0-4025-ab92-e6d3d54705e6", // The ID of your service instance.
                onLoad: function(instance) { instance.render(); }
            };
            setTimeout(function(){
                const t=document.createElement('script');
                t.src="https://web-chat.global.assistant.watson.appdomain.cloud/loadWatsonAssistantChat.js";
                document.head.appendChild(t);
            });
        </script>


    </body>
</html>
