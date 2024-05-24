<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Chanchal</title>
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
    <div class="container">
        <div class="screen-container">
            <div class="cat"><svg width="27" height="26" viewBox="0 0 27 26" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M15 0H16V1H15V0Z" fill="currentColor" />
                    <path d="M14 2V1H15V2H14Z" fill="currentColor" />
                    <path d="M13 4V2H14V4H13Z" fill="currentColor" />
                    <path d="M10 4H11V5H12V4H13V6H10V4Z" fill="currentColor" />
                    <path d="M9 2H10V4H9V2Z" fill="currentColor" />
                    <path d="M8 1H9V2H8V1Z" fill="currentColor" />
                    <path d="M7 1V0H8V1H7Z" fill="currentColor" />
                    <path d="M6 3V1H7V3H6Z" fill="currentColor" />
                    <path d="M5 5V3H6V5H5Z" fill="currentColor" />
                    <path d="M5 12H4V5H5V12Z" fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M6 12H5V13H6V14H7V15H9V16H8V17H7V18H6V20H5V19H3V20H2V21H1V24H0V26H11V25H12V26H26V25H27V24H26V23H22V21H21V20H20V19H18V20H17V18H16V17H15V16H14V15H16V14H17V13H18V12H19V5H18V3H17V1H16V3H17V5H18V12H17V11H14V12H17V13H16V14H13V16H14V17H15V18H16V21H15V25H13V24H12V20H11V24H10V25H8V21H7V18H8V17H9V16H10V14H7V13H6V12ZM21 24V25H16V22H17V21H18V20H20V21H21V23H19V24H21ZM23 24V25H26V24H23ZM2 21V23H4V24H2V25H7V22H6V21H5V20H3V21H2Z"
                        fill="currentColor" />
                    <path d="M6 12V11H9V12H6Z" fill="currentColor" />
                    <path d="M12 11H11V12H12V11Z" fill="currentColor" />
                    <path d="M8 7H9V10H8V7Z" fill="currentColor" />
                    <path d="M15 7H14V10H15V7Z" fill="currentColor" />
                </svg>
            </div>
            <div class="sleep-cat"><svg width="25" height="21" viewBox="0 0 25 21" fill="none"
                    xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 0H2V1H6V2H4V4H2V5H8V4H5V3H6V2H7V1H8V0Z" fill="currentColor" />
                    <path d="M18 3H19V4H18V3Z" fill="currentColor" />
                    <path d="M17 5H18V4H17V5Z" fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M13 9V10H15V8H16V6H17V5H14V4H15V3H16V2H12V3H14V4H13V5H12V6H11V5H10V6H9V7H8V8H5V9H3V10H2V12H1V13H0V18H1V19H2V20H7V21H15V20H17V21H24V20H25V15H24V12H23V9H22V8H21V7H20V4H19V9H20V10H21V16H20V17H18V18H17V17H16V18H9V17H8V14H7V10H8V8H9V7H10V6H11V8H12V9H13ZM13 9V8H14V9H13ZM7 10H6V14H7V17H8V18H9V19H14V20H8V19H2V18H1V13H2V12H3V10H5V9H7V10ZM20 18V17H21V18H20ZM22 16V17H21V16H22ZM23 16H22V13H23V16ZM23 16H24V19H23V20H21V19H22V18H23V16ZM20 18H18V20H20V18ZM21 9H22V10H21V9ZM21 9H20V8H21V9ZM12 6V7H15V6H12Z"
                        fill="currentColor" />
                    <path d="M18 15H17V16H18V15Z" fill="currentColor" />
                    <path d="M19 14H18V15H19V14Z" fill="currentColor" />
                    <path d="M19 14H20V13H19V14Z" fill="currentColor" />
                    <path d="M14 16H15V17H14V16Z" fill="currentColor" />
                    <path d="M12 15H14V16H12V15Z" fill="currentColor" />
                    <path d="M12 15H9V14H12V15Z" fill="currentColor" />
                </svg>
            </div>
            <div class="main-window-container">
                <div class="top-window">
                    <div class="title">
                        <a href="https://codepen.io/challenges/2023/november/" class="links" target="blank">
                            <h1>Warning</h1>
                        </a>
                    </div>
                    <div class="top-buttons">
                        <svg width="56" height="16" viewBox="0 0 56 16" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M52 5.00195L51 4.00195L48 7.00195L45 4.00195L44 5.00195L47 8.00195L44 11.002L45 12.002L48 9.00195L51 12.002L52 11.002L49 8.00195L52 5.00195Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M40 0H56V16H40V0ZM41 1V15H55V1H41Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H16V16H0V0ZM1 1V15H15V1H1Z"
                                fill="currentColor" />
                            <path d="M3.5 11.5H12.5V12.5H3.5V11.5Z" fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20 0H36V16H20V0ZM21 1V15H35V1H21Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M31 5.00195H25V11.002H31V5.00195ZM24 4.00195V12.002H32V4.00195H24Z"
                                fill="currentColor" />
                        </svg>

                    </div>

                </div>
                <div class="main-window">
                    <p class="first-p">Hi, <span>BlurSoul</span> here, I am a <a
                            href="https://www.behance.net/BlurSoul_" class="links" target="blank">Graphic Designer.</a>
                        I love to experiment and learn anything, not long ago I didn't have much idea about web
                        development.</p>
                   
                    <div class="counter-km">
                        <svg class="km" width="39" height="32" viewBox="0 0 39 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M17.6495 5.07837V0.658216C17.6495 0.286726 17.3471 -0.0159927 16.9759 0.000655386C12.3165 0.209591 8.85723 2.54264 7.31638 4.06286C7.06277 4.31308 7.08385 4.71837 7.34113 4.96482L10.4269 7.9208C10.6982 8.18071 11.1285 8.16544 11.4175 7.92537C13.0206 6.59371 15.5002 5.97556 17.0289 5.76929C17.3781 5.72218 17.6495 5.43058 17.6495 5.07837Z"
                                fill="currentColor" />
                            <path
                                d="M5.24867 17.6424H0.732263C0.333048 17.6424 0.021015 17.2953 0.0733197 16.8997C0.77592 11.5854 2.81894 8.56516 4.09518 7.39656C4.33365 7.1782 4.69332 7.21381 4.922 7.44239L8.05139 10.5705C8.32856 10.8476 8.30853 11.3013 8.05292 11.5983C6.75146 13.1108 6.14437 15.5177 5.94008 17.022C5.89269 17.371 5.60102 17.6424 5.24867 17.6424Z"
                                fill="currentColor" />
                            <path
                                d="M0.658528 21.1738H4.92815C5.27386 21.1738 5.5621 21.4347 5.61448 21.7763C5.86619 23.4178 6.57485 26.0607 7.99208 27.5587C8.27167 27.8542 8.31489 28.329 8.03311 28.6224L4.98544 31.7958C4.73135 32.0604 4.31131 32.0731 4.06298 31.8031C2.54198 30.1494 0.209236 26.5191 0.000649125 21.847C-0.0159199 21.4759 0.28689 21.1738 0.658528 21.1738Z"
                                fill="currentColor" />
                            <path
                                d="M38.3415 21.1738H34.0719C33.7261 21.1738 33.4379 21.4347 33.3855 21.7763C33.1338 23.4178 32.4252 26.0607 31.0079 27.5587C30.7283 27.8542 30.6851 28.329 30.9669 28.6224L34.0146 31.7958C34.2687 32.0604 34.6887 32.0731 34.937 31.8031C36.458 30.1494 38.7908 26.5191 38.9994 21.847C39.0159 21.4759 38.7131 21.1738 38.3415 21.1738Z"
                                fill="currentColor" />
                            <path
                                d="M38.2677 17.6424H33.7513C33.399 17.6424 33.1073 17.371 33.0599 17.022C32.8556 15.5177 32.2485 13.1108 30.9471 11.5983C30.6915 11.3013 30.6714 10.8476 30.9486 10.5705L34.078 7.44239C34.3067 7.21381 34.6663 7.1782 34.9048 7.39656C36.1811 8.56516 38.2241 11.5854 38.9267 16.8997C38.979 17.2953 38.667 17.6424 38.2677 17.6424Z"
                                fill="currentColor" />
                            <path
                                d="M21.3505 0.658216V5.07837C21.3505 5.43058 21.6219 5.72218 21.9711 5.76929C23.4998 5.97556 25.9794 6.59371 27.5825 7.92537C27.8715 8.16544 28.3018 8.18071 28.5731 7.9208L31.6589 4.96482C31.9161 4.71837 31.9372 4.31308 31.6836 4.06286C30.1428 2.54264 26.6836 0.209591 22.0242 0.000655386C21.6529 -0.0159927 21.3505 0.286726 21.3505 0.658216Z"
                                fill="currentColor" />
                            <path class="needle"
                                d="M23.5484 20.6584C23.0378 22.5069 21.3434 23.8644 19.3318 23.8644C16.9161 23.8644 14.9579 21.9069 14.9579 19.4922C14.9579 17.0775 16.9161 15.12 19.3318 15.12C20.2963 15.12 21.188 15.4321 21.9112 15.9608H28.2478L23.5484 20.6584Z"
                                fill="currentColor" />
                        </svg>
                    </div>
            
                    <div class="social-container">
                        <a href="https://twitter.com/blursoul_" target="blank" class="social"><svg class="icon"
                                width="20" height="16" viewBox="0 0 20 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M19.6894 1.88235C18.9647 2.21176 18.1835 2.42824 17.3741 2.53176C18.2024 2.03294 18.8424 1.24235 19.1435 0.291765C18.3624 0.762353 17.4965 1.09176 16.5835 1.28C15.84 0.470588 14.7953 0 13.6094 0C11.3976 0 9.59059 1.80706 9.59059 4.03765C9.59059 4.35765 9.62823 4.66824 9.69412 4.96C6.34353 4.79059 3.36 3.18118 1.37412 0.743529C1.02588 1.33647 0.828235 2.03294 0.828235 2.76706C0.828235 4.16941 1.53412 5.41176 2.62588 6.11765C1.95765 6.11765 1.33647 5.92941 0.790588 5.64706V5.67529C0.790588 7.63294 2.18353 9.27059 4.02824 9.63765C3.43598 9.79973 2.81421 9.82228 2.21176 9.70353C2.46739 10.5059 2.96803 11.2079 3.64331 11.711C4.31858 12.2141 5.13454 12.4929 5.97647 12.5082C4.5493 13.6381 2.78023 14.2488 0.96 14.24C0.64 14.24 0.32 14.2212 0 14.1835C1.78824 15.3318 3.91529 16 6.19294 16C13.6094 16 17.6847 9.84471 17.6847 4.50824C17.6847 4.32941 17.6847 4.16 17.6753 3.98118C18.4659 3.41647 19.1435 2.70118 19.6894 1.88235Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                        <a href="https://www.figma.com/@blursoul" target="blank" class="social"><svg class="icon"
                                width="11" height="16" viewBox="0 0 11 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M2.98686 0H5.57948V5.18531H2.98689C-0.432174 5.05165 -0.466705 0.140375 2.98686 0ZM2.98686 10.5924H5.57948V5.40709H2.98689C-0.466674 5.54747 -0.432173 10.4587 2.98686 10.5924ZM8.39395 0H5.80126V5.18531H8.39395C11.859 4.99987 11.8158 0.105844 8.39395 0ZM5.57948 13.4069V10.8142H2.98689C0.871201 10.8142 -0.466674 13.2947 1.00473 15.0763C2.40761 16.8422 5.57951 15.9618 5.57951 13.4069H5.57948ZM10.9919 7.99975C10.9919 6.00725 8.82007 4.75522 7.09204 5.75147C5.36401 6.74772 5.36398 9.25181 7.09204 10.2481C8.8201 11.2443 10.9919 9.99225 10.9919 7.99975Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                        <a href="https://codepen.io/BlurSoulx" target="blank" class="social"><svg class="icon"
                                width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M15.6886 4.99072L8.37604 0.115743C8.12644 -0.0380092 7.86 -0.0391521 7.60834 0.115743L0.295807 4.99072C0.108378 5.11568 -0.0078125 5.33899 -0.0078125 5.56215V10.4371C-0.0078125 10.6604 0.108378 10.8835 0.295807 11.0084L7.60834 15.8842C7.85779 16.0379 8.12438 16.0393 8.37604 15.8842L15.6886 11.0084C15.876 10.8835 15.9922 10.6604 15.9922 10.4372V5.56215C15.9922 5.33899 15.876 5.11568 15.6886 4.99072ZM8.67981 1.97281L14.0636 5.56215L11.6617 7.16932L8.67973 5.17808V1.97297L8.67981 1.97281ZM7.30464 1.97281V5.17815L4.3224 7.16924L1.92064 5.56215L7.30464 1.97281ZM1.3672 6.84772L3.0904 7.99957L1.3672 9.15149V6.84772ZM7.30464 14.0265L1.92064 10.4371L4.3224 8.82997L7.30464 10.8211V14.0265ZM7.99219 9.62456L5.56369 7.99957L7.99219 6.37457L10.4207 7.99957L7.99219 9.62456ZM8.67973 14.0265V10.8211L11.6617 8.82997L14.0636 10.4371L8.67973 14.0265ZM14.6173 9.15149L12.894 7.99957L14.6173 6.84787V9.15149Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                        <a href="https://www.behance.net/BlurSoul_" target="blank" class="social "><svg
                                class="icon" width="17" height="16" viewBox="0 0 17 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M6.0518 5.03779H3.46426L3.46556 7.02502H5.89137C6.31184 7.02502 6.68186 6.89046 6.68186 5.96413C6.68186 5.03779 6.0518 5.03779 6.0518 5.03779Z"
                                    fill="currentColor" />
                                <path
                                    d="M3.46556 10.7743H5.93665C6.30796 10.764 6.99366 10.6476 6.99107 9.61902C6.99107 8.38347 6.05309 8.39641 6.05309 8.39641H3.46556V10.7743Z"
                                    fill="currentColor" />
                                <path
                                    d="M11.1221 8.39641H14.046C14.046 8.39641 14.0641 7.02502 12.6888 7.02502C11.3135 7.02502 11.1221 8.39641 11.1221 8.39641Z"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M2.57413 0H14.8002C15.8427 0 16.6878 0.845109 16.6878 1.8876V14.1124C16.6878 15.1549 15.8427 16 14.8002 16H2.57413C1.53163 16 0.686523 15.1549 0.686523 14.1124V1.8876C0.686523 0.845109 1.53163 0 2.57413 0ZM8.57464 5.8257C8.57464 7.41832 7.21618 7.51923 7.21618 7.51923C9.00676 7.51923 8.88255 9.72899 8.88255 9.72899C8.88255 12.4459 6.05568 12.3566 6.05568 12.3566H1.424V3.45552H6.05568C7.46329 3.45552 8.57464 4.23307 8.57464 5.8257ZM9.23446 9.14032C9.23446 9.14032 9.23058 5.7209 12.6539 5.7209C16.257 5.7209 15.7563 9.5815 15.7563 9.5815H11.1441C11.1441 11.2388 12.7108 11.134 12.7108 11.134C14.1857 11.134 14.1339 10.1766 14.1339 10.1766H15.6994C15.6994 12.7163 12.6539 12.5429 12.6539 12.5429C8.99899 12.5429 9.23446 9.14032 9.23446 9.14032ZM14.4108 3.98079H10.7391V5.07661H14.4108V3.98079Z"
                                    fill="currentColor" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
            <div class="cursor"><svg class="cursor-svg" width="24" height="24" viewBox="0 0 24 24"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M18.8057 24C18.6686 24.0008 18.5327 23.9745 18.4058 23.9227C18.2788 23.8709 18.1634 23.7946 18.066 23.6982L11.6797 17.3079L8.21047 22.5117C8.09999 22.6807 7.94268 22.814 7.7577 22.8953C7.57272 22.9767 7.36806 23.0025 7.16866 22.9696C6.97334 22.9406 6.79032 22.8567 6.64091 22.7277C6.49151 22.5987 6.38187 22.4299 6.32479 22.2411L0.0738999 1.42576C-0.000399633 1.23934 -0.0191717 1.03543 0.0198443 0.8386C0.0588603 0.641767 0.154001 0.460397 0.29381 0.31633C0.433618 0.172263 0.612134 0.071642 0.807861 0.0265821C1.00359 -0.0184778 1.20818 -0.00605488 1.397 0.0623551L22.2333 6.30695C22.4223 6.36398 22.5912 6.47351 22.7204 6.62276C22.8495 6.77202 22.9335 6.95486 22.9626 7.14998C22.9954 7.34918 22.9696 7.55363 22.8882 7.73842C22.8068 7.92322 22.6734 8.08037 22.5042 8.19074L17.2951 11.6565L23.6918 18.0364C23.7895 18.1331 23.867 18.2483 23.9199 18.3751C23.9728 18.5019 24 18.6379 24 18.7753C24 18.9127 23.9728 19.0488 23.9199 19.1756C23.867 19.3024 23.7895 19.4175 23.6918 19.5143L19.5246 23.6773C19.3365 23.8748 19.0784 23.9906 18.8057 24ZM18.8057 21.4917L21.504 18.7962L14.0446 11.3547L19.5142 7.71199L2.64718 2.65386L7.7104 19.5039L11.3568 14.0398L18.8057 21.4917Z"
                        fill="currentColor" />
                </svg>
            </div>
            <div class="clippy"><svg class="clippy-svg" width="56" height="96" viewBox="0 0 56 96"
                    fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M22.4568 3.28636C25.7484 0.671406 29.9112 -0.867574 34.3852 0.523319C34.5964 0.588927 34.8058 0.662033 35.0132 0.740763C35.1754 0.802622 35.3357 0.86823 35.495 0.937588C35.8759 1.10255 36.2512 1.29 36.6199 1.50369L36.9508 1.70052C41.2702 4.37546 42.7166 8.88742 42.9221 13.4144C43.0862 17.0547 42.4677 20.9556 41.7171 24.4609C46.0723 25.7787 49.2414 29.8033 49.2414 34.5627C49.2414 40.3925 44.4864 45.12 38.6207 45.12C38.5264 45.12 38.4321 45.1163 38.3388 45.1163C38.2143 51.5927 38.599 57.5818 38.996 61.119L38.9997 61.1584L39.0082 61.2259C39.144 62.4518 39.2694 63.5578 39.3477 64.5738C39.5061 66.6282 39.5061 68.5796 38.748 70.2685C37.9362 72.0793 36.4228 73.2547 34.3522 74.1526L34.1853 74.2257L34.0071 74.265C30.8428 74.9773 28.1603 74.0813 26.0907 72.1712C24.1134 70.3435 22.7575 67.663 21.8373 64.7968C19.9921 59.0496 19.6479 51.7708 20.2796 46.4434C20.3296 46.0254 20.5106 45.6561 20.7775 45.3693C21.1037 45.0188 21.5572 44.792 22.0542 44.7545C22.1748 44.7451 22.2984 44.747 22.4238 44.762C23.4826 44.8876 24.2407 45.8417 24.1153 46.8933C23.5335 51.797 23.872 58.5078 25.5164 63.629C26.3424 66.199 27.4343 68.171 28.7194 69.3575C29.8745 70.4241 31.2209 70.9059 32.9794 70.5572C34.422 69.9049 34.9547 69.2994 35.2206 68.7052C35.3809 68.3472 35.4875 67.9067 35.5365 67.3162C35.5884 66.692 35.5761 65.9009 35.4969 64.8681C35.4479 64.2345 35.3753 63.5315 35.2904 62.7592L35.1735 61.7132C34.7662 58.0917 34.357 51.2872 34.5135 44.3008C30.6872 42.7037 28 38.9453 28 34.5627C28 28.9879 32.3486 24.4197 37.8588 24.0317C38.6198 20.5488 39.2138 16.8822 39.0639 13.5868C38.8866 9.67847 37.6948 6.68299 34.9085 4.95843C34.356 4.61539 33.7997 4.36421 33.2321 4.188C30.377 3.29948 27.5286 4.17113 24.8677 6.28559C23.3393 7.4984 21.9419 9.07675 20.753 10.8182C19.8591 12.1266 19.0831 13.5287 18.4599 14.9384C18.1393 15.6619 17.8206 16.4117 17.5066 17.1915C17.3407 17.6039 17.1756 18.0238 17.0116 18.4512C19.581 20.3782 21.2414 23.4393 21.2414 26.8847C21.2414 32.1521 17.3595 36.5197 12.283 37.3126C11.4353 43.8585 11.2798 51.1016 12.2745 58.8359L12.2811 58.8846L12.2849 58.9315C12.7262 64.6244 14.4677 73.1366 18.1902 80.1379C21.9155 87.1448 27.5012 92.2192 35.2914 92.1386C38.4029 92.3279 40.2623 91.2763 41.5455 89.5124C42.9438 87.5891 43.7755 84.6461 44.2233 80.8971C44.4327 79.1444 44.5524 77.2793 44.6222 75.3447C44.6561 74.4019 44.6778 73.4421 44.6929 72.4711C44.7061 71.607 44.7146 70.7334 44.7202 69.8524L44.7287 67.9835C44.7363 66.2665 44.7438 64.5381 44.7778 62.8417C44.7947 61.9869 44.8192 61.1415 44.8532 60.3092C44.8975 59.2408 44.9588 58.1948 45.0436 57.1825C45.07 56.8639 45.0993 56.5471 45.1313 56.234C45.7169 50.5017 47.8195 45.4031 53.0346 42.1152C53.9351 41.5472 55.1278 41.8115 55.6992 42.7075C56.2706 43.6016 56.0038 44.7882 55.1033 45.3562C51.2243 47.8024 49.4865 51.604 48.9736 56.6221C48.6247 60.0374 48.6078 63.9664 48.5908 68.0735L48.588 68.679C48.5766 71.1646 48.5597 73.7045 48.4541 76.1752C48.3777 77.9503 48.2561 79.6918 48.0581 81.3488C47.5894 85.2722 46.6664 89.0231 44.675 91.7599C42.5799 94.6429 39.4363 96.2175 35.1254 95.9757C25.2883 96.0451 18.805 89.5086 14.776 81.9318C10.7461 74.3531 8.91312 65.3161 8.43791 59.2764C7.4243 51.3622 7.56196 43.9409 8.40302 37.2114C3.60183 36.1973 0 31.959 0 26.8847C0 21.0549 4.75498 16.3274 10.6207 16.3274C11.6324 16.3274 12.6121 16.468 13.5389 16.7304C13.9925 15.5626 14.4573 14.4472 14.925 13.39C16.5665 9.68597 19.1831 5.88632 22.4568 3.28636ZM12.5517 33.603C16.2846 33.603 19.3103 30.5944 19.3103 26.8847C19.3103 23.175 16.2846 20.1664 12.5517 20.1664C8.81883 20.1664 5.7931 23.175 5.7931 26.8847C5.7931 30.5944 8.81883 33.603 12.5517 33.603ZM44.4138 34.5627C44.4138 38.2724 41.1721 41.281 37.1724 41.281C33.1727 41.281 29.931 38.2724 29.931 34.5627C29.931 30.853 33.1727 27.8444 37.1724 27.8444C41.1721 27.8444 44.4138 30.853 44.4138 34.5627Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M21.2088 12.3117C17.7224 11.04 15.1175 11.555 13.8419 12.186C12.4098 12.8945 10.671 12.3147 9.95824 10.8911C9.24551 9.46746 9.82873 7.73905 11.2609 7.03057C14.0815 5.63526 18.3523 5.13577 23.2044 6.90559C24.7062 7.45338 25.4769 9.10763 24.9259 10.6005C24.3748 12.0933 22.7106 12.8594 21.2088 12.3117Z"
                        fill="currentColor" />
                    <path fill-rule="evenodd" clip-rule="evenodd"
                        d="M44.5665 22.2458C42.0407 19.373 39.4395 18.7832 37.9743 18.8785C36.378 18.9824 34.9993 17.7803 34.8948 16.1935C34.7903 14.6067 35.9997 13.2362 37.596 13.1323C40.9928 12.9113 45.3046 14.3346 48.9285 18.4563C49.9812 19.6536 49.8582 21.4726 48.6536 22.519C47.4491 23.5654 45.6192 23.4431 44.5665 22.2458Z"
                        fill="currentColor" />
                </svg>
            </div>
            <div class="left-window-container">
                <div class="top-left-window">
                    <div class="top-left-buttons">
                        <svg width="56" height="16" viewBox="0 0 56 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M52 5.00195L51 4.00195L48 7.00195L45 4.00195L44 5.00195L47 8.00195L44 11.002L45 12.002L48 9.00195L51 12.002L52 11.002L49 8.00195L52 5.00195Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M40 0H56V16H40V0ZM41 1V15H55V1H41Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H16V16H0V0ZM1 1V15H15V1H1Z"
                                fill="currentColor" />
                            <path d="M3.5 11.5H12.5V12.5H3.5V11.5Z" fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20 0H36V16H20V0ZM21 1V15H35V1H21Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M31 5.00195H25V11.002H31V5.00195ZM24 4.00195V12.002H32V4.00195H24Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                </div>
                <div class="main-left-window">
                    <div class="world"><svg class="world-svg" width="128" height="83" viewBox="0 0 128 83"
                            fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M103 0C103 6.62741 108.373 12 115 12C108.373 12 103 17.3726 103 24C103 17.3726 97.6272 12 91 12C97.6272 12 103 6.62741 103 0Z"
                                fill="currentColor" />
                            <path
                                d="M122 21C122 24.3137 124.686 27 128 27C124.686 27 122 29.6863 122 33C122 29.6863 119.314 27 116 27C119.314 27 122 24.3137 122 21Z"
                                fill="currentColor" />
                            <path fill-rule="evenodd" clip-rule="evenodd"
                                d="M58.3033 19C73.773 19 88.3333 22.2665 99.2993 28.2003C110.463 34.2364 116.61 42.3332 116.61 51C116.61 59.6668 110.463 67.7636 99.2993 73.7997C88.3333 79.7335 73.773 83 58.3033 83C42.8335 83 28.2769 79.7335 17.3109 73.7997C6.14685 67.7636 0 59.6668 0 51C0 42.3332 6.14685 34.2364 17.3109 28.2003C28.2696 22.2665 42.8335 19 58.3033 19ZM41.5858 22.3726C19.0275 26.1213 2.52301 37.2411 2.04285 50.4008H20.2816C20.5491 38.1022 29.1731 27.4949 41.5858 22.3726ZM51.3821 21.7142C35.056 24.3619 22.6471 36.1819 22.3135 50.4008H40.5559C40.6366 42.2528 42.4117 34.5944 45.5731 28.7885C47.2516 25.71 49.222 23.3289 51.3821 21.7142ZM20.278 51.2229H2.03552C2.22986 64.5629 18.8439 75.8605 41.6305 79.6349C29.0801 74.4793 20.3807 63.6897 20.278 51.2229ZM40.5522 51.2229H22.3061C22.4345 65.6225 34.9262 77.6253 51.4009 80.2889C49.2407 78.6849 47.2565 76.288 45.5731 73.2042C42.364 67.2996 40.5816 59.5097 40.5522 51.2229ZM42.5694 51.2229C42.6318 67.2411 49.4461 80.2779 57.8815 80.6871L57.8851 59.4439C56.4731 54.0071 54.8998 52.6223 49.083 51.2229H42.5694ZM50.4987 50.4117C55.1711 49.111 56.5942 47.5252 57.8815 42.5561V21.3129C49.5048 21.7184 42.7381 34.5616 42.5731 50.4117H50.4987ZM96.3102 50.4117H114.564C114.091 37.2325 97.5572 26.1067 74.9614 22.3652C87.4017 27.4732 96.0425 38.0984 96.3102 50.4117ZM76.0359 50.4117H94.2857C93.963 36.1765 81.541 24.3528 65.1946 21.7111C67.3511 23.3188 69.339 25.712 71.0187 28.7995C74.2021 34.6054 75.9552 42.2638 76.0359 50.4117ZM74.0224 50.3971C73.8574 34.5469 67.0908 21.7038 58.7103 21.2982V42.5414C59.9977 47.5106 61.4244 49.0964 66.0968 50.3971H74.0224ZM67.5125 51.2083C61.6957 52.6077 60.1224 53.9925 58.7103 59.4293V80.6725C67.1531 80.2633 73.9637 67.2265 74.0261 51.2083H67.5125ZM76.0579 51.2083C76.025 59.4951 74.2462 67.2923 71.0333 73.1895V73.2042C69.3463 76.288 67.3768 78.6629 65.1946 80.2743C81.6656 77.6106 94.1573 65.6079 94.2857 51.2083H76.0579ZM96.3322 51.2083C96.2479 63.675 87.5374 74.4647 74.976 79.6202V79.6349C97.7662 75.8605 114.391 64.5629 114.575 51.2083H96.3322Z"
                                fill="currentColor" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="windows-container">
                <div class="right-window-container">
                    <div class="top-right-window">
                        <div class="top-right-buttons">
                            <svg width="56" height="16" viewBox="0 0 56 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    d="M52 5.00195L51 4.00195L48 7.00195L45 4.00195L44 5.00195L47 8.00195L44 11.002L45 12.002L48 9.00195L51 12.002L52 11.002L49 8.00195L52 5.00195Z"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M40 0H56V16H40V0ZM41 1V15H55V1H41Z"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M0 0H16V16H0V0ZM1 1V15H15V1H1Z"
                                    fill="currentColor" />
                                <path d="M3.5 11.5H12.5V12.5H3.5V11.5Z" fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M20 0H36V16H20V0ZM21 1V15H35V1H21Z"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M31 5.00195H25V11.002H31V5.00195ZM24 4.00195V12.002H32V4.00195H24Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                    <div class="main-right-window">
                        <div class="eyes"><svg class="eye" width="54" height="44" viewBox="0 0 54 44"
                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M41.1788 44C34.0978 44 28.3575 34.1503 28.3575 22C28.3575 9.84974 34.0978 0 41.1788 0C48.2597 0 54 9.84974 54 22C54 34.1503 48.2597 44 41.1788 44ZM41.1788 39.3192C35.5973 39.3192 31.0726 31.5651 31.0726 22C31.0726 12.4349 35.5973 4.68085 41.1788 4.68085C46.7602 4.68085 51.2849 12.4349 51.2849 22C51.2849 31.5651 46.7602 39.3192 41.1788 39.3192Z"
                                    fill="currentColor" />
                                <path
                                    d="M43.1397 27.617C43.1397 29.599 44.1527 31.2057 45.4022 31.2057C46.6518 31.2057 47.6648 29.599 47.6648 27.617C47.6648 25.6351 46.6518 24.0284 45.4022 24.0284C44.1527 24.0284 43.1397 25.6351 43.1397 27.617Z"
                                    fill="currentColor" />
                                <path fill-rule="evenodd" clip-rule="evenodd"
                                    d="M12.8212 44C5.74026 44 4.17233e-07 34.1503 4.17233e-07 22C4.17233e-07 9.84974 5.74026 0 12.8212 0C19.9022 0 25.6425 9.84974 25.6425 22C25.6425 34.1503 19.9022 44 12.8212 44ZM12.8212 39.3192C7.23976 39.3192 2.71508 31.5651 2.71508 22C2.71508 12.4349 7.23976 4.68085 12.8212 4.68085C18.4027 4.68085 22.9274 12.4349 22.9274 22C22.9274 31.5651 18.4027 39.3192 12.8212 39.3192Z"
                                    fill="currentColor" />
                                <path
                                    d="M15.6872 26.0251C15.6872 28.0071 16.7001 29.6138 17.9497 29.6138C19.1993 29.6138 20.2123 28.0071 20.2123 26.0251C20.2123 24.0432 19.1993 22.4365 17.9497 22.4365C16.7001 22.4365 15.6872 24.0432 15.6872 26.0251Z"
                                    fill="currentColor" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="square"></div>
            </div>
        </div>
    </div>
</body>

</html>
