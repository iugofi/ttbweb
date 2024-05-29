<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>kullu</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@400;700&display=swap');

        :root {
            --main-color: #8DD4FF;
            --main-color-op: #8DD4FF64;
        }

        @keyframes rotation {
            0% {
                transform: rotateY(0deg);
            }

            100% {
                transform: rotateY(360deg);
            }
        }

        @keyframes move {

            0%,
            100% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-6px);
            }
        }

        @keyframes cursor-move {

            10%,
            100% {
                transform: translate(0px, 0px);
            }

            25%,
            35% {
                transform: translate(-250px, -100px);
            }

            50%,
            60% {
                transform: translate(-680px, 60px);
            }

            75%,
            85% {
                transform: translate(-400px, 320px);
            }
        }

        html,
        body,
        .container {
            margin: 0;
            padding: 0;
            height: 100vh;
        }

        body {
            background: #000;
        }

        h1 {
            margin: 0;
            padding: 2px 8px;
            font-family: 'Chakra Petch', monospace;
            font-size: 16px;
            font-weight: bold;
            color: var(--main-color);
        }

        p {
            margin: 0;
            padding: 0 24px;
            font-family: 'Chakra Petch', monospace;
            font-family: 16px;
            /*   color:#98F888; */
            color: var(--main-color);
            width: 315px;
        }

        span {
            font-weight: bold;
            transition: 0.2s ease-in-out;
        }

        a {
            margin: 0;
            padding: 0;
            width: 16px;
            justify-self: center;
            align-self: center;
            text-decoration: none;
            transform: translatey(2px);
        }

        svg {
            color: var(--main-color);
        }

        .social:nth-child(2) {
            transform: translate(3px, 2px);
        }

        .screen-container:before {
            margin: 0;
            padding: 0;
            content: "";
            display: grid;
            position: absolute;
            inset: 0;
            height: 100%;
            width: 100%;
            background-image: url(https://as1.ftcdn.net/v2/jpg/05/49/29/70/1000_F_549297047_fxiIUIxD1AM6Iaw3GjQQ9ZBRrHJQm21q.jpg);
            background-size: 20%;
            opacity: 4%;
        }

        .container {
            display: grid;
            align-items: center;
            justify-content: center;
            transform-style: preserve-3d;
        }

        .screen-container {
            display: grid;
            align-items: center;
            justify-content: center;
            height: 480px;
            width: 800px;
            background-image: url(https://i.gyazo.com/687bd077ff3de4fc6a6ba5e20da3e629.png);
            box-shadow: 0 0 128px var(--main-color-op);
        }

        .main-window-container {
            display: grid;
            height: 352px;
            width: 576px;
            background: #0006;
            border: 2px solid var(--main-color);
            backdrop-filter: blur(8px);
            transform: translate(0, 9px);
        }

        .top-window {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            height: 24px;
            width: 576px;
            background: #0006;
            border-bottom: 2px solid var(--main-color);
        }

        .cat {
            display: grid;
            height: 26px;
            z-index: 2;
            width: 27px;
            transform: translate(174px, 30px);
        }

        .sleep-cat {
            display: grid;
            z-index: 2;
            height: 21px;
            width: 25px;
            transform: translate(44px, 221px);
        }

        .top-buttons {
            display: grid;
            height: 16px;
            width: 56px;
            transform: translate(229px, 4px);
        }

        .links {
            text-decoration: none;
            color: var(--main-color);
            font-weight: bold;
            transition: 0.2s ease-in-out;
            cursor: pointer;
        }

        .links:hover {
            filter: drop-shadow(0px 0px 4px var(--main-color));
            transition: 0.2s ease-in-out;
        }

        .first-p {
            transform: translate(0px, 28px);
        }

        .second-p {
            width: 355px;
            transform: translate(84px, -45px);
        }

        .logo {
            margin: 0;
            padding: 0;
            width: 174px;
            height: 96px;
            perspective: 400px;
            transform: translate(387px, -72px);
        }

        .rotate {
            transition: 0.2s ease-in-out;
        }

        .rotate:hover {
            scale: 1.1;
            filter: drop-shadow(0 0 8px var(--main-color));
            animation: rotation 4s linear infinite reverse;
            transition: 0.2s ease-in-out;
        }

        .cursor {
            display: grid;
            z-index: 20;
            height: 24px;
            width: 24px;
            transform: translate(614px, -289px);
        }

        .cursor-svg {
            transition: 0.2s ease-in-out;
            animation: cursor-move 6s ease-in-out infinite 6s;
        }

        .cursor-svg:hover {
            filter: drop-shadow(0 0 4px var(--main-color));
            transition: 0.2s ease-in-out;
        }

        .social-container {
            display: grid;
            grid-template-columns: repeat(4, 48px);
            justify-content: center;
            transform: translate(0px, -2px);
        }

        .icon {
            transition: 0.2s ease-in-out;
        }

        .icon:hover {
            transform: scale(2) rotate(-5deg);
            filter: drop-shadow(0px 0px 4px var(--main-color));
            transition: 0.2s ease-in-out;
        }

        .clippy {
            display: grid;
            z-index: 2;
            height: 96px;
            width: 56px;
            transform: translate(600px, -228px);
        }

        .clippy-svg {
            transition: 0.2s ease-in-out;
            animation: move 1s ease-in-out infinite;
        }

        .clippy-svg:hover {
            transform: scale(1.2) translateY(-12px) rotate(2deg);
            filter: drop-shadow(0px 0px 16px var(--main-color));
            transition: 0.2s ease-in-out;
        }

        .left-window-container {
            margin: 0;
            padding: 0;
            display: grid;
            grid-template-rows: repeat(2, 26px);
            height: 128px;
            width: 160px;
            justify-content: center;
            align-items: center;
            transform: translate(496px, -226px);
            background: red;
        }

        .left-window-container:after {
            content: "";
            display: grid;
            z-index: -1;
            height: 128px;
            width: 160px;
            background: linear-gradient(#000 0% 18%, var(--main-color)19% 20%, #000 20% 100%);
            border: 2px solid var(--main-color);
            transform: translate(-16px, -38px);
        }

        .main-left-window {
            display: grid;
            height: 128px;
            width: 160px;
            background: #000;
            border: 2px solid var(--main-color);
            transform: translateY(24px);
        }

        .top-left-window {
            display: grid;
            z-index: 2;
            height: 23px;
            width: 160px;
            background: #0006;
            border-bottom: 2px solid var(--main-color);
            transform: translate(2px, -3px);
        }

        .world {
            display: grid;
            height: 83px;
            width: 128px;
            justify-self: center;
            transform: translate(4px, 30px);
        }

        .world-svg {
            transition: 0.2s ease-in-out;
        }

        .world-svg:hover {
            filter: drop-shadow(0 0 16px var(--main-color));
            transition: 0.2s ease-in-out;
        }

        .top-left-buttons {
            display: grid;
            height: 16px;
            width: 56px;
            transform: translate(101px, 4px);
        }

        .right-window-container {
            margin: 0;
            padding: 0;
            display: grid;
            justify-content: center;
            align-items: center;
            height: 80px;
            width: 112px;
            background: #000;
            border: 2px solid var(--main-color);
        }

        .top-right-window {
            display: grid;
            align-items: center;
            justify-content: end;
            height: 24px;
            width: 112px;
            border-bottom: 2px solid var(--main-color);
            transform: translate(0px, 0px);
        }

        .top-right-buttons {
            display: grid;
            height: 16px;
            width: 56px;
            transform: translate(-4px);
        }

        .main-right-window {
            display: grid;
            align-items: center;
            justify-content: center;
            height: 56px;
            width: 112px;
        }

        .eyes {
            display: grid;
            z-index: 20;
            height: 44px;
            width: 54px;
            transform: translate(0px, -1px);
        }

        .eye {
            transition: 0.2s ease-in-out;
        }

        .eye:hover {
            filter: drop-shadow(0px 0px 16px var(--main-color));
            transition: 0.2s ease-in-out;
        }

        .windows-container {
            display: grid;
            align-items: center;
            justify-content: end;
            height: 112px;
            width: 145px;
            transform: translate(-54px, -383px);
        }

        .square {
            display: grid;
            z-index: -1;
            height: 80px;
            width: 112px;
            background: linear-gradient(#000 0% 18%, var(--main-color)19% 21%, #000 21% 100%);
            border: 2px solid var(--main-color);
            transform: translate(-29px, -56px);
        }

        .square:after {
            content: "";
            display: grid;
            z-index: -1;
            height: 80px;
            width: 112px;
            background: linear-gradient(#000 0% 18%, var(--main-color)19% 21%, #000 21% 100%);
            border: 2px solid var(--main-color);
            transform: translate(12px, -16px);
        }

        .counter-km {
            display: grid;
            height: 32px;
            width: 39px;
            transform: translate(515px, -36px);
        }

        .km {
            transition: 0.2s ease-in-out;
        }

        .km:hover {
            transform: scale(1.2);
            filter: drop-shadow(0px 0px 16px var(--main-color));
            transition: 0.2s ease-in-out;
        }
    </style>
   
</head>

<body>


    <p id="demo"></p>

    <button id="kullubtn">Danger</button>

    <script>
        document.addEventListener('DOMContentLoaded',()=>{
            const buttonkul=document.getElementById('kullubtn');

            buttonkul.addEventListener('click',()=>{
                let text = "";
                for (let i = 0; i < 100; i++) {
                text += + i +" Kulvinder ki chut me lavda "  + "<br>";
                }
                
                document.getElementById("demo").innerHTML = text;
            });
        });
   
    </script>
</body>

</html>
