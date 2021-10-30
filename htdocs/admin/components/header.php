<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Header</title>
  <style>
    td,th {
      font-family: Arial, Helvetica, sans-serif;
      font-size: 12px;
    }

    /* Start Chat Button */
    @import url('https://fonts.googleapis.com/css?family=Montserrat:600&display=swap');
    .chat-btn{
        margin: 0;
        padding: 0;
        display: flex;
        height: 100vh;
        align-items: center;
        justify-content: center;
        background:#fff;
    }
    .chat-span{
        position: relative;
        display: inline-flex;
        width: 180px;
        height: 55px;
        margin: 0 15px;
        perspective: 1000px;
    }
    span a{
        font-size: 19px;
        letter-spacing: 1px;
        transform-style: preserve-3d;
        transform: translateZ(-25px);
        transition: transform .25s;
        font-family: 'Montserrat', sans-serif;

    }
    span a:before,
    span a:after{
        position: absolute;
        height: 55px;
        width: 180px;
        display: flex;
        align-items: center;
        justify-content: center;
        border: 5px solid black;
        box-sizing: border-box;
        border-radius: 5px;
    }
    span a:before{
        content: "Online Chat Helpdesk";
    }
    span a:after{
        content: "ENTER";
    }
    span a:before{
        color: #fff;
        background: #000;
        transform: rotateY(0deg) translateZ(25px);
    }
    span a:after{
        color: #000;
        transform: rotateX(90deg) translateZ(25px);
    }
    span a:hover{
        transform: translateZ(-25px) rotateX(-90deg);
    }

    /* End Chat Button*/
  </style>
</head>
<body style="margin: 0 0 0 0;">

<div style="background-color:white; display: block; margin: 0; width: 100%; position: absolute; top: 0; border-bottom: 1px solid #000;">
    <div style="float: left; margin: 0.3% 2% 0.1% 1%;">
        <img src="/admin/img/picture.png" width="101" height="100" />
    </div>
    <div style="transform: translate(0%, 22%);">
        <div style="float: right; margin: 0.3% 2% 0.1% 1%;">
            <chat-btn>
                <span class="chat-span"><a href="/chat/index.php"></a></span>
            </chat-btn>
        </div>
        <h2 style="display: inline-block; margin: 0; padding: 0; color: #3366FF;">Quality Monitoring Framework for Govt. ITI running under PPP</h2><br />
        <p style="margin: 0; padding: 0; font-size: 10px;">Department of Technical Education, Training &amp; Skill Development<br />
            Directorate of Industrial Training<br />
            Govt. of West Bengal
        </p>
    </div>
</div>