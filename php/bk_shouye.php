<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <!--<link href="../css/bk_all.css" rel="stylesheet" type="text/css"/>-->
        <script src="../js/jquery-3.2.1.min.js" type="text/javascript"></script>
        <script src="../js/mousewheel.js" type="text/javascript"></script>
        <style>
            *{
                margin: 0;
                padding: 0;
            }
            html,body{
                height:100%;
            }
            .bgbox{
                width: 100%;
                height: 100%;
                margin: 0 auto;
                position: relative;
                transform-style: preserve-3d;
                transform-origin : 0% 50%;
                animation-fillMode : forwards;
            }
            @keyframes bgbox1{
                0%{
                    transform: rotateX(0deg);
                }
		100%{
                    transform: rotateX(-90deg); 
                }
            }
            @keyframes bgbox2{
                0%{
                    transform: rotateX(-90deg);
                }
		100%{
                    transform: rotateX(-180deg); 
                }
            }
            @keyframes bgbox3{
                0%{
                    transform: rotateX(-180deg); 
                }
		100%{
                    transform: rotateX(-270deg); 
                }
            }
            @keyframes bgbox4{
                0%{
                    transform: rotateX(-270deg); 
                }
		100%{
                    transform: rotateX(-360deg); 
                }
            }
            @keyframes bgbox8{
                0%{
                    transform: rotateX(0deg);
                }
		100%{
                    transform: rotateX(90deg); 
                }
            }
            @keyframes bgbox7{
                0%{
                    transform: rotateX(90deg);
                }
		100%{
                    transform: rotateX(180deg); 
                }
            }
            @keyframes bgbox6{
                0%{
                    transform: rotateX(180deg); 
                }
		100%{
                    transform: rotateX(270deg); 
                }
            }
            @keyframes bgbox5{
                0%{
                    transform: rotateX(270deg); 
                }
		100%{
                    transform: rotateX(360deg); 
                }
            }
            .bgbox_in{
                width: 100%;
                height: 100%;
                position: absolute;
                top: 0;
                left: 0;
                opacity: 1;
                font-size: 100px;
                text-align: center;
                line-height: 330px;
                color: #fff;
            }
            .in1{
                background: url('../img/bghua6.jpg');
                background-size: cover;
                background-position: 0 100%;
            }
            .in2{
                background: url('../img/bghua7.jpg');
                background-size: cover;
                background-position: 0 100%;
                transform-origin: 100% 0;
            }
            .in3{
                background: url('../img/bghua3.jpg');
                background-size: cover;
                background-position: 0 100%;
                transform-origin: 0 50%;
            }
            .in4{
                background: url('../img/bghua8.jpg');
                background-size: cover;
                background-position: 0 100%;
                transform-origin: 0 100%;
            }
        </style>
    </head>
    <body>
        <div class="bgbox">
            <div class="bgbox_in in1"></div>
            <div class="bgbox_in in2"></div>
            <div class="bgbox_in in3"></div>
            <div class="bgbox_in in4"></div>
        </div>
        
        <!--<script src="../js/sxqBOKE.js" type="text/javascript"></script>-->
        <script>
            var bgbox = document.querySelector('.bgbox');
            var bgbox_in = document.querySelectorAll('.bgbox_in');
            var num = 1;
            var bool = true;
            var height = -document.body.clientHeight/2;
            bgbox.style.height = height+"px";
            bgbox_in[0].style.transform = "translateZ(" + -height + "px)";
            bgbox_in[1].style.transform = "translateZ(" + height + "px) rotateX(90deg)";
            bgbox_in[2].style.transform = "translateZ(" + height + "px) rotateX(180deg)";
            bgbox_in[3].style.transform = "translateZ(" + height + "px) rotateX(-90deg)";
            mouseWheel(window,function(){
                num--;
                if(num<=0){
                    num=4
                }
                switch(num){
                    case 1:
                        bgbox.style.animation = "bgbox5 1s linear";
                        bgbox.style.animationFillMode = "forwards";
                    break;
                    case 2:
                        bgbox.style.animation = "bgbox6 1s linear";
                        bgbox.style.animationFillMode = "forwards";
                    break;
                    case 3:
                        bgbox.style.animation = "bgbox7 1s linear";
                        bgbox.style.animationFillMode = "forwards";
                        break;
                        case 4:
                            bgbox.style.animation = "bgbox8 1s linear";
                            bgbox.style.animationFillMode = "forwards";
                        break;
                    }
                    console.log("up"+num);
                },function(){
                    if(num>4){
                        num=1
                    }
                    switch(num){
                        case 1:
                            bgbox.style.animation = "bgbox1 1s linear";
                            bgbox.style.animationFillMode = "forwards";
                        break;
                        case 2:
                            bgbox.style.animation = "bgbox2 1s linear";
                            bgbox.style.animationFillMode = "forwards";
                        break;
                        case 3:
                            bgbox.style.animation = "bgbox3 1s linear";
                            bgbox.style.animationFillMode = "forwards";
                        break;
                        case 4:
                            bgbox.style.animation = "bgbox4 1s linear";
                            bgbox.style.animationFillMode = "forwards";
                        break;
                    }
                    num++;
                    console.log("down"+num);
                })
        </script>
    </body>
</html>