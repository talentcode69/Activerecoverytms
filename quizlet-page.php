<?php
/*
Template Name: Quizlet Page
*/  ?>
    <?php get_header('inner'); ?>
<script src='https://www.google.com/recaptcha/api.js'></script>

        <script type="text/javascript">

        jQuery(document).ready(function(){
          try {
             jQuery("#gacid-value-stored").val(document.cookie.match(/_ga=(.+?);/)[1].split('.').slice(-2).join("."));
          } catch(err) {
             console.log(err);
          }
        });
        </script>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700' rel='stylesheet' type='text/css'>
        <style>
            .carousel-caption {
                height: 80%;
                width: 66%;
                margin: auto;
                background-color: lightblue;
                margin-bottom: 71px;
                opacity: .96;
                padding: 4px;
            }

            .carousel-caption li {
                text-align: left;
                font-size: 16px;
                list-style-type: none;
            }

            input {
                float: left;
            }

            label {
                font-size: 16px;
            }

            #nextQuestion {
                color: #28a745;
                margin-left: 50px;
                margin-right: 30px;
                background-color: transparent;
                background-image: none;
                border-color: #28a745;
            }

            #nextQuestion:hover {
                color: #fff;
                background-color: #28a745;
                border-color: #28a745;
            }

            #previousQuestion {
                color: #007bff;
                background-color: transparent;
                background-image: none;
                border-color: #007bff;
            }

            #previousQuestion:hover {
                color: #fff;
                background-color: #007bff;
                border-color: #007bff;
            }

            .carousel-fade .carousel-inner .item {
                -webkit-transition-property: opacity;
                -o-transition-property: opacity;
                transition-property: opacity;
            }

            .carousel-fade .carousel-inner .item,
            .carousel-fade .carousel-inner .active.left,
            .carousel-fade .carousel-inner .active.right {
                opacity: 0;
            }

            .carousel-fade .carousel-inner .active,
            .carousel-fade .carousel-inner .next.left,
            .carousel-fade .carousel-inner .prev.right {
                opacity: 1;
            }

            .carousel-fade .carousel-inner .next,
            .carousel-fade .carousel-inner .prev,
            .carousel-fade .carousel-inner .active.left,
            .carousel-fade .carousel-inner .active.right {}

            .carousel-fade .carousel-control {
                z-index: 2;
            }
            /* carousel fullscreen */

            .carousel-fullscreen .carousel-inner .item {
                height: 100vh;
                min-height: 600px;
                background-position: center center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            /* carousel fullscreen - vertically centered caption*/

            .carousel-fullscreen .carousel-caption {
                top: 50%;
                bottom: auto;
                -webkit-transform: translate(0, -50%);
                -ms-transform: translate(0, -50%);
                transform: translate(0, -50%);
            }
            /* overlay for better readibility of the caption  */

            .overlay {
                position: absolute;
                width: 100%;
                height: 100%;
                background: #000;
                opacity: 0.3;
                -webkit-transition: all 0.2s ease-out;
                -o-transition: all 0.2s ease-out;
                transition: all 0.2s ease-out;
            }
            /* demo typography */

            h1,
            h2,
            h3,
            h4 {
                font-weight: 700;
            }

            .super-heading {
                font-size: 70px;
            }

            .super-paragraph {
                font-size: 30px;
                font-weight: 300;
            }

            .carousel-caption .super-paragraph a,
            .carousel-caption .super-paragraph a:hover {
                color: #fff;
            }

            #carousel-example-generic {
                margin: 40px 0;
            }

            .demo-content {
                padding-top: 50px;
                padding-bottom: 50px;
            }

            .title {
                width: 65%;
                padding: 10px;
                text-align: center;
                margin: auto;
                background-color: #1371db;
                color: white;
                -webkit-box-shadow: 0px 0px 19px #ccc;
                box-shadow: 0px 0px 19px #ccc;
                font-family: 'Josefin Sans', sans-serif !important;
                position: relative;
                top: 25px;
            }

            .background-image-overlay-1 {
                background: url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-1-e1528825571568.jpg") no-repeat center center;
                background: -webkit-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-1-e1528825571568.jpg") no-repeat center center;
                background: -o-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-1-e1528825571568.jpg") no-repeat center center;
                background: linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-1-e1528825571568.jpg") no-repeat center center;
                background-size: cover;
                height: 440px;
            }

            .background-image-overlay-2 {
                background: -webkit-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-2-e1528825563648.jpg") no-repeat center center;
                background: -o-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-2-e1528825563648.jpg") no-repeat center center;
                background: linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-2-e1528825563648.jpg") no-repeat center center;
                background-size: cover;
                height: 440px;
            }

            .background-image-overlay-3 {
                background: -webkit-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-3-e1528825554325.jpg") no-repeat center center;
                background: -o-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-3-e1528825554325.jpg") no-repeat center center;
                background: linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-3-e1528825554325.jpg") no-repeat center center;
                background-size: cover;
                height: 440px;
            }

            .background-image-overlay-4 {
                background: -webkit-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-4-e1528825546658.jpg") no-repeat center center;
                background: -o-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-4-e1528825546658.jpg") no-repeat center center;
                background: linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-4-e1528825546658.jpg") no-repeat center center;
                background-size: cover;
                height: 440px;
            }

            .background-image-overlay-5 {
                background: -webkit-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-5-e1528825540523.jpg") no-repeat center center;
                background: -o-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-5-e1528825540523.jpg") no-repeat center center;
                background: linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-5-e1528825540523.jpg") no-repeat center center;
                background-size: cover;
                height: 440px;
            }

            .background-image-overlay-6 {
                background: -webkit-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-6-e1528825532536.jpg") no-repeat center center;
                background: -o-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-6-e1528825532536.jpg") no-repeat center center;
                background: linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-6-e1528825532536.jpg") no-repeat center center;
                background-size: cover;
                height: 440px;
            }

            .background-image-overlay-7 {
                background: -webkit-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-7-e1528825525382.jpg") no-repeat center center;
                background: -o-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-7-e1528825525382.jpg") no-repeat center center;
                background: linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-7-e1528825525382.jpg") no-repeat center center;
                background-size: cover;
                height: 440px;
            }

            .background-image-overlay-8 {
                background: -webkit-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-8-e1528825514321.jpg") no-repeat center center;
                background: -o-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-8-e1528825514321.jpg") no-repeat center center;
                background: linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-8-e1528825514321.jpg") no-repeat center center;
                background-size: cover;
                height: 440px;
            }

            .background-image-overlay-9 {
                background: -webkit-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-9-e1528825501791.jpg") no-repeat center center;
                background: -o-linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-9-e1528825501791.jpg") no-repeat center center;
                background: linear-gradient( rgba(0, 0, 0, 0.68), rgba(0, 0, 0, 0.68)), url("https://activerecoverytms.com/wp-content/uploads/2018/06/photo-9-e1528825501791.jpg") no-repeat center center;
                background-size: cover;
                height: 440px;
            }

            .wpcf7-submit {
                width: 100%;
                font-size: 16px;
            }

            .wpcf7-textarea {
                display: none;
            }

            .wpcf7-form {
                padding: 24px;
                text-align: left;
                font-size: 19px;
                margin-top: 5px;
            }

            .right,
            .left {}

            .number-styling {
                font-size: 35px;
                padding: 15px;
            }

            .question-styling {
                padding: 15px;
                font-size: 26px;
            }

            .btn-gray {
                background-color: #6c757d !important;
                color: white;
            }

            .btn-gray:hover {
                color: white;
            }
            /* special styling for radio boxes */

            .radio {
                margin-top: 0;
                margin-bottom: 0;
            }

            .radio-container {
                display: block;
                position: relative;
                padding-left: 35px;
                margin-bottom: 12px;
                cursor: pointer;
                font-size: 22px;
                -webkit-user-select: none;
                -moz-user-select: none;
                -ms-user-select: none;
                user-select: none;
            }
            /* Hide the browser's default radio button */

            .radio-container input {
                position: absolute;
                opacity: 0;
                cursor: pointer;
            }
            /* Create a custom radio button */

            .new-radio-button {
                position: absolute;
                top: 0px;
                left: 0;
                height: 22px;
                width: 22px;
                background-color: #eee;
                border-radius: 50%;
            }
            /* On mouse-over, add a grey background color */

            .radio-container:hover input ~ .new-radio-button {
                background-color: #ccc;
            }
            /* When the radio button is checked, add a blue background */

            .radio-container input:checked ~ .new-radio-button {
                background-color: #2196F3;
            }
            /* Create the indicator (the dot/circle - hidden when not checked) */

            .new-radio-button:after {
                content: "";
                position: absolute;
                display: none;
            }
            /* Show the indicator (dot/circle) when checked */

            .radio-container input:checked ~ .new-radio-button:after {
                display: block;
            }
            /* Style the indicator (dot/circle) */

            .radio-container .new-radio-button:after {
                top: 4px;
                left: 4px;
                width: 14px;
                height: 14px;
                border-radius: 50%;
                background: white;
            }

            .carousel-direction-styling-prev {
                color: white;
                padding: 5px 15px 0 5px;
                overflow-wrap: normal !important;
                font-weight: bolder;
                font-family: 'Roboto', sans-serif;
            }

            .carousel-direction-styling-next {
                color: white;
                padding: 5px 0 15px 5px;
                overflow-wrap: normal !important;
                font-weight: bolder;
                font-family: 'Roboto', sans-serif;
            }

            .carousel-direction-styling-next:hover {
                color: #E0E0E0;
            }

            .carousel-direction-styling-prev:hover {
                color: #E0E0E0;
            }

            .carousel-direction-positioning {
                padding-top: 10%;
                padding-bottom: 5%;
                text-align: center;
            }

            .bg-secondary-blue {
                background-color: #1371db;
                color: white;
            }

            .request-contact-button {
                padding: 15px;
                border-radius: 30px;
                color: #fff;
                background: -webkit-linear-gradient(#f1b54e, #cc791c)!important;
                background: -o-linear-gradient(#f1b54e, #cc791c)!important;
                background: linear-gradient(#f1b54e, #cc791c)!important;
                font-family: 'futura_bdcn_btbold';
                font-size: 15px;
                letter-spacing: 1px;
                text-transform: uppercase;
            }


            .carousel-inner .row {
                margin: 0;
            }

            .carousel-inner .row .col-md-6 {
                padding-top: 25px;
            }

            [data-slide] {
                cursor: pointer;
            }

            .headline-results {
                font-size: 50px;
                color: #fff;
                text-transform: uppercase;
                margin: 0;
                font-weight: 700;
                width: 100%;
                line-height: 1 !important;
            }

            @media screen and (min-width: 1175px) {
                .set-width {
                    min-width: 1175px;
                    max-width: 1175px;
                }
            }

            .wpcf7-form-control.wpcf7-submit.btn.btn-primary {
                width: 35%;
                display: inline;
                padding: 15px;
                border-radius: 30px;
                color: #fff;
                background: -webkit-linear-gradient(#f1b54e, #cc791c)!important;
                font-family: 'futura_bdcn_btbold';
                font-size: 15px;
                letter-spacing: 1px;
                text-transform: uppercase;
                position: absolute;
                left: 50%;
                transform: translate(-50%, -50%);
                min-width: 150px;
            }

            .wpcf7-form-control.wpcf7-submit.btn.btn-primary:hover {
                text-decoration: none;
            }

            #question1,
            #question2,
            #question3,
            #question4,
            #question5,
            #question6,
            #question7,
            #question8,
            #question9,
            #question10 {
                padding-top: 90px;
                padding-bottom: 90px;
                padding-left: 15px;
            }

            .list-unstyled {
                padding: 0;
                list-style: none;
                margin-top: -10px;
            }

            .padding-top-elements {
                padding-top: 20px;
            }

            .form-group.your-email {
                padding-top: 30px;
                padding-bottom: 40px;
            }

            .disabled-button {
                color: lightgray;
                cursor: default !important;
                pointer-events: none;
            }

            .sent {
                padding-top: 5px;
                margin: auto;
                display: none;
                color: #fff !important;
            }

            .sent p {
                color: white;
            }

            .sentCookie {
                text-align: center;
                margin-top: 5px;
                color: #fff !important;
            }

            #required-field {
                padding-bottom: 15px;
            }
            .page-title h1 {
                font-size: 50px;
                color: rgb(255, 255, 255);
                text-transform: uppercase;
                font-weight: 700;
                width: 100%;
                text-align: center;
                margin: 0px;
                margin-top: -20px;
                line-height: 1 !important;
            }
            #your-number {
                margin-bottom: 25px;
            }
        </style>
        <div class="container" style="position: relative;">
            <div class="row">
                <div class="page-title">
                    <h1><?php the_field('blue_bar_title');?></h1>
                </div>

                <div class="page-content">
                    <h2 style="margin-left:1em;" id="h2-lastTwoWeeksHeading">Over the last two weeks, how often have you experienced any of the following?</h2>

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-interval="false">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">

                                <div class="row item active bg-secondary-blue">
                                    <div class="col-md-6 size">
                                        <span class="number-styling">1</span>
                                        <h2 class="question-styling">How often have you had little interest in or pleasure from doing things?</h2>
                                    </div>

                                    <div class="col-md-6 background-image-overlay-1">
                                        <form id="question1">
                                            <ul class="list-unstyled answer-styling">

                                                <li>
                                                    <label class="radio-container">
                                                        Not at All
                                                        <input id="question01-1" type="radio" value="0" name="question01">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Several Days
                                                        <input id="question01-2" type="radio" value="1" name="question01">&nbsp;&nbsp;
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">More Than Half the Days
                                                        <input id="question01-3" type="radio" value="2" name="question01">&nbsp;&nbsp;
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Nearly Every Day
                                                        <span data-slide="next" href="#carousel-example-generic"></span>
                                                        <input id="question01-4" type="radio" value="3" name="question01">

                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>
                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div class="row item bg-secondary-blue set-width">
                                    <div class="col-md-6">
                                        <span class="number-styling">2</span>
                                        <h2 class="question-styling">How often have you felt down, depressed or hopeless?</h2>

                                    </div>
                                    <div class="col-md-6 background-image-overlay-2">

                                        <form id="question2">
                                            <ul class="list-unstyled answer-styling">

                                                <li>
                                                    <label class="radio-container">Not at All
                                                        <input id="question02-1" type="radio" value="0" name="question02">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Several Days
                                                        <input id="question02-2" type="radio" value="1" name="question02">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">More Than Half the Days
                                                        <input id="question02-3" type="radio" value="2" name="question02">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Nearly Every Day
                                                        <input id="question02-4" type="radio" value="3" name="question02">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div class="row item bg-secondary-blue set-width">
                                    <div class="col-md-6 ">
                                        <span class="number-styling">3</span>
                                        <h2 class="question-styling">How often have you had trouble falling or staying asleep, or been sleeping too much? </h2>

                                    </div>
                                    <div class="col-md-6 background-image-overlay-3">
                                        <form id="question3">
                                            <ul class="list-unstyled answer-styling">

                                                <li>
                                                    <label class="radio-container">Not at All
                                                        <input id="question03-1" type="radio" value="0" name="question03">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Several Days
                                                        <input id="question03-2" type="radio" value="1" name="question03">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">More Than Half the Days
                                                        <input id="question03-3" type="radio" value="2" name="question03">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Nearly Every Day
                                                        <input id="question03-4" type="radio" value="3" name="question03">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                            </ul>
                                        </form>

                                    </div>
                                </div>
                                <div class="row item bg-secondary-blue set-width">
                                    <div class="col-md-6">
                                        <span class="number-styling">4</span>
                                        <h2 class="question-styling">How often have you felt tired or had little energy?</h2>

                                    </div>
                                    <div class="col-md-6 background-image-overlay-4">

                                        <form id="question4">
                                            <ul class="list-unstyled answer-styling">

                                                <li>
                                                    <label class="radio-container">Not at All
                                                        <input id="question04-1" type="radio" value="0" name="question04">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Several Days
                                                        <input id="question04-2" type="radio" value="1" name="question04">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">More Than Half the Days
                                                        <input id="question04-3" type="radio" value="2" name="question04">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Nearly Every Day
                                                        <input id="question04-4" type="radio" value="3" name="question04">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                            </ul>
                                        </form>

                                    </div>
                                </div>
                                <div class="row item bg-secondary-blue set-width">
                                    <div class="col-md-6">
                                        <span class="number-styling">5</span>
                                        <h2 class="question-styling">How often have you experienced poor appetite, or been overeating?</h2>

                                    </div>

                                    <div class="col-md-6 background-image-overlay-5">

                                        <form id="question5">
                                            <ul class="list-unstyled answer-styling">

                                                <li>
                                                    <label class="radio-container">Not at All
                                                        <input id="question05-1" type="radio" value="0" name="question05">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Several Days
                                                        <input id="question05-2" type="radio" value="1" name="question05">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">More Than Half the Days
                                                        <input id="question05-3" type="radio" value="2" name="question05">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Nearly Every Day
                                                        <input id="question05-4" type="radio" value="3" name="question05">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                            </ul>
                                        </form>

                                    </div>
                                </div>
                                <div class="row item bg-secondary-blue set-width">
                                    <div class="col-md-6">
                                        <span class="number-styling">6</span>
                                        <h2 class="question-styling">How often have you felt bad about yourself-- that you are a failure or have let yourself or your family down?</h2>

                                    </div>

                                    <div class="col-md-6 background-image-overlay-6">

                                        <form id="question6">
                                            <ul class="list-unstyled answer-styling">

                                                <li>
                                                    <label class="radio-container">Not at All
                                                        <input id="question06-1" type="radio" value="0" name="question06">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Several Days
                                                        <input id="question06-2" type="radio" value="1" name="question06">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">More Than Half the Days
                                                        <input id="question06-3" type="radio" value="2" name="question06">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Nearly Every Day
                                                        <input id="question06-4" type="radio" value="3" name="question06">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                            </ul>
                                        </form>

                                    </div>
                                </div>
                                <div class="row item bg-secondary-blue set-width">
                                    <div class="col-md-6">
                                        <span class="number-styling">7</span>
                                        <h3 class="question-styling">How often have you had trouble concentrating on things, such as reading or watching TV?</h3>

                                    </div>

                                    <div class="col-md-6 background-image-overlay-5">

                                        <form id="question7">
                                            <ul class="list-unstyled answer-styling">

                                                <li>
                                                    <label class="radio-container">Not at All
                                                        <input id="question07-1" type="radio" value="0" name="question07">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Several Days
                                                        <input id="question07-2" type="radio" value="1" name="question07">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">More Than Half the Days
                                                        <input id="question07-3" type="radio" value="2" name="question07">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Nearly Every Day
                                                        <input id="question07-4" type="radio" value="3" name="question07">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                            </ul>
                                        </form>
                                    </div>
                                </div>
                                <div class="row item bg-secondary-blue set-width">
                                    <div class="col-md-6">
                                        <span class="number-styling">8</span>
                                        <h3 class="question-styling">How often have you felt you were moving or speaking so slowly that other people could have noticed? Or the opposite: being so fidgety or restless that you have been moving around a lot more than usual?</h3>

                                    </div>

                                    <div class="col-md-6 background-image-overlay-8">

                                        <form id="question8">
                                            <ul class="list-unstyled answer-styling">

                                                <li>
                                                    <label class="radio-container">Not at All
                                                        <input id="question08-1" type="radio" value="0" name="question08">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Several Days
                                                        <input id="question08-2" type="radio" value="1" name="question08">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">More Than Half the Days
                                                        <input id="question08-3" type="radio" value="2" name="question08">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Nearly Every Day
                                                        <input id="question08-4" type="radio" value="3" name="question08">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                            </ul>
                                        </form>

                                    </div>
                                </div>
                                <div class="row item bg-secondary-blue set-width">
                                    <div class="col-md-6">
                                        <span class="number-styling">9</span>
                                        <h3 class="question-styling">Thoughts that you would be better off dead or of hurting yourself in some way?</h3>

                                    </div>

                                    <div class="col-md-6 background-image-overlay-9">

                                        <form id="question9">
                                            <ul class="list-unstyled answer-styling">

                                                <li>
                                                    <label class="radio-container">Not at All
                                                        <input id="question09-1" type="radio" value="0" name="question09">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Several Days
                                                        <input id="question09-2" type="radio" value="1" name="question09">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">More Than Half the Days
                                                        <input id="question09-3" type="radio" value="2" name="question09">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                                <li>
                                                    <label class="radio-container">Nearly Every Day
                                                        <input id="question09-4" type="radio" value="3" name="question09">
                                                        <span class="new-radio-button"></span>
                                                    </label>
                                                </li>

                                            </ul>
                                        </form>

                                    </div>
                                </div>
                                <div id="add-margin-top" class="row item bg-secondary-blue set-width" style="min-height: 440px;">
                                    <div class="col-lg-6 col-lg-offset-3" style="padding-top: 35px;">
                                        <div id="quizlet-information">
                                            <h3 class="headline-results" style="color: #fff; text-align: center;">
                                                Get Your Results
                                            </h3>
                                            <form id="quizlet-form-information">
                                                <div class="form-group" style="margin-bottom: 45px; margin-top: 25px;">
                                                    <label for="leadName">Your Name</label>
                                                    <input type="text" id="leadName" name="quizlet-your-name" title="Name" class="form-control">
                                                </div>
                                                <div class="form-group" style="margin-bottom: 45px;">
                                                    <label for="leadEmail">Your Email</label>
                                                    <input type="text" id="leadEmail" name="quizlet-your-email" title="Email" class="form-control">
                                                    <input type="hidden" name="quizlet-information">
                                                </div>
                                                <div class="form-group" style="margin-bottom: 45px;">
                                                    <label for="leadPhone">Your Phone</label>
                                                    <input type="text" id="leadPhone" name="quizlet-your-phone" title="Phone" class="form-control">
                                                </div>
                                                <div class="form-group">
                                                    <label for="medication">Have you tried any prescription medication to treat your depression?</label>

                                                    <p style="color: white;">
                                                        Yes
                                                        <input type="radio" id="medication" name="medication" title="medication" value="Yes">
                                                    </p>

                                                    <p style="color: white;">
                                                        No
                                                        <input type="radio" name="medication" title="medication" value="No" checked>
                                                    </p>
                                                </div>
                                                <div style="text-align: center; padding-bottom: 25px;">
                                                    <button class="quizlet-form-button">Get Results</button>
                                                </div>
                                            </form>
                                        </div>
                                        <div id="results" style="text-align: center;">
                                            <div>
                                                <h3 class="headline-results" id="resultsDisplay" style="padding-top: 10px; color: #fff; line-height: 1 !important; display: none;">

                                                </h3>
                                                <p style="padding-top: 35px; color: #fff; display: none;" id="resultsExplanation">

                                                </p>
                                            </div>
                                            <div id="resultsRequestInformation" style="display: none; margin-top: 35px;">
                                                <button class="request-contact-button" type="button" >Request Consultation</button>
                                            </div>
                                            <div class="sent">
                                                <p>
                                                    Your request has been sent!
                                                </p>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                            <div class="col-md-12">
                                <div id="carousel-cookie" class="carousel slide" data-interval="false">

                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        <div id="show-on-cookie" class="row item bg-secondary-blue set-width" style="min-height: 440px;">
                                            <div class="col-lg-6 col-lg-offset-3" style="padding-top: 35px;">
                                                <div id="" style="text-align: center;">
                                                    <h3 class="headline-results" id="resultsDisplayCookie" style="color: #fff; line-height: 1 !important;">

                                                    </h3>
                                                    <p style="color: #fff; padding-top: 35px; " id="resultsExplanationCookie">

                                                    </p>
                                                </div>
                                                <div style="text-align: center; margin-top: 35px;">
                                                    <button class="request-contact-button disabled-button" type="button" id="request-consulation-button-cookie">Request Consultation</button>
                                                    <p class="sentCookie">
                                                        You have previously send a request.
                                                    </p>
                                                    <div>
                                                        <p class="sent">
                                                            Your request has been sent!
                                                        </p>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        <div>
                            <p>
                                All content is for informational purposes only and is not intended to be a substitute for professional medical advice, diagnosis, or treatment. Always seek the advice of your physician or other qualified health provider with any questions you may have regarding a medical condition. If you think you may have a medical emergency, call your doctor or 911 immediately.
                            </p>
                        </div>

                        <h2 class="padding-top-elements">About This Quiz</h2>

                        <p class="padding-top-elements">
                            The Patient Health Questionnaire (PHQ-9) is a self-assessment tool for depression. It has nine parts: one for each of the diagnostic criteria for depression, according to the DSM-IV. PHQ-9 results are scored based on the frequency of depressive symptoms, from 0 (“not at all”) to 3 (“nearly every day”). Clinically, the PHQ-9 is used to monitor the severity of a patient’s depression and/or a patient’s response to treatment.
                        </p>
                        <h2 class="padding-top-elements">About Active Recovery TMS</h2>
                        <p class="padding-top-elements">
                            Transcranial magnetic stimulation (TMS) was approved by the Food and Drug Administration in 2008 as an electromagnetic treatment for depression. Particularly useful in cases of severe depression that have not responded to antidepressant drugs, TMS boasts “significant remission (32.6%) and response (38.4%) rates.” Active Recovery TMS has been treating patients in the Portland area since January 2017.
                        </p>

                        <p class="c6 padding-top-elements"><span class="c4">Identifying the symptoms and understanding the severity of depression has never been more important. For the past four decades, doctors have used the </span><span class="c7">PHQ-9 depression screening tool</span><span class="c4">, a carefully constructed questionnaire, to better understand each patient’s individual condition. But </span><span class="c7">what is PHQ-9 an acronym for?</span><span class="c4"> And how does it help treat depression? The </span><span class="c7">PHQ-9</span><span class="c4"> falls under the broader testing tool known as the “Patient Health Questionnaire,” (PHQ). Among various indicators of depression, the</span><span class="c4"><a class="c3" href="https://www.ncbi.nlm.nih.gov/pmc/articles/PMC1495268/"> </a></span><span class="c1"> PHQ-9 asks patients</span><span class="c4"> to rate their symptoms on a scale from 0-3, “not at all” to “nearly every day.” The tallied score indicates the severity of the patient’s depression.</span></p>
                        <p class="c6 padding-top-elements"><span class="c4">In studies both in the United States and worldwide,</span><span class="c4"><a class="c3" href="http://www.activerecoverytms.com/"> </a></span><span class="c1"><a class="c3" href="http://www.activerecoverytms.com/">transcranial magnetic stimulation</a></span><span class="c4"> (TMS) is an effective treatment for depression, per the </span><span class="c7">PHQ-9</span><span class="c4"> scale.</span></p>

                        <h2 id="h.30j0zll" class="c0 padding-top-elements"><span class="c5 c2">The PHQ-9 Assesses the Severity of Depression </span></h2>
                        <p class="c6 padding-top-elements"><span class="c4">With the frequency of depression diagnoses in the United States—</span><span class="c4"><a class="c3" href="https://www.aafp.org/afp/2012/0115/p139.html"> </a></span><span class="c1"><a class="c3" href="https://www.aafp.org/afp/2012/0115/p139.html">up to 9 percent</a></span><span class="c4"> of people who seek any form of medical treatment in the US exhibit signs of depression — questionnaires like the </span><span class="c7">PHQ 9 depression screening too</span><span class="c4">l are instrumental in identifying mental illness.</span></p>
                        <p class="c6 padding-top-elements"><span class="c4">The Patient Health Questionnaire was</span><span class="c4"><a class="c3" href="http://www.phqscreeners.com/select-screener/31"> </a></span><span class="c1"><a class="c3" href="http://www.phqscreeners.com/select-screener/31">developed in the 1990s</a></span><span class="c4"> out of the PRIME-MD (Primary Care Evaluation of Mental Disorders) diagnostic tool, through the work of Robert L. Spitzer, MD, Janet B.W. Williams, DSW, and Kurt Kroenke, MD, and a team at Columbia University. The test analyzed the symptoms of 12 mental disorders.</span></p>
                        <p class="c6 padding-top-elements"><span class="c4">Based on the criteria for</span><span class="c4"><a class="c3" href="https://doi.org/10.1177/0034355213515305"> </a></span><span class="c1"><a class="c3" href="https://doi.org/10.1177/0034355213515305">major depressive disorder</a></span><span class="c4">, as specified in the </span><span class="c11">Diagnostic and Statistical Manual of Mental Disorders</span><span class="c4">, the nine areas of the </span><span class="c7">PHQ-9</span><span class="c4"> pinpoint progress during depression treatment. Excepting minor revisions since its creation, the </span><span class="c7">PHQ-9</span><span class="c4"> has remained true to the DSM and is still a trusted system for indicating future diagnoses.</span></p>
                        <p class="c6 padding-top-elements"><span class="c4">According to the</span><span class="c4"><a class="c3" href="http://www.apa.org/pi/about/publications/caregivers/practice-settings/assessment/tools/patient-health.aspx"> </a></span><span class="c1"><a class="c3" href="http://www.apa.org/pi/about/publications/caregivers/practice-settings/assessment/tools/patient-health.aspx">American Psychological Association</a></span><span class="c4">, studies consisting of 580 interviews with patients determined that those with higher </span><span class="c7">PHQ-9</span><span class="c4"> scores — scores of 10 or higher — were 7 to 13.6 times more likely to receive a depression diagnosis. If a patient scored below a 4 on the scale, the likelihood of having depression was less than 1 in 25.</span></p>

                        <h2 id="h.1fob9te" class="c0 padding-top-elements"><span class="c5 c2">The PHQ-9 Shows TMS Is an Effective Depression Treatment</span></h2>
                        <p class="c6 padding-top-elements"><span class="c4">The </span><span class="c7">PHQ-9</span><span class="c4"> is an important tool for tracking the progress of depression symptoms during and after TMS, a highly effective and non-invasive treatment for major depressive disorder. A 2012 study at Brown University found an impressive 58% of patients participating in a TMS trial reported a significant decrease in depression symptoms, and 37% showed signs of remission by the end of therapy.</span></p>
                        <p class="c6 padding-top-elements"><span class="c4">Additional TMS studies over the past two decades have coincided with these results, including a</span><span class="c4"><a class="c3" href="https://www.ncbi.nlm.nih.gov/pubmed/23895940"> </a></span><span class="c1"><a class="c3" href="https://www.ncbi.nlm.nih.gov/pubmed/23895940">Rush University</a></span><span class="c4"> study in 2013 that noted a significant decrease in depressive symptoms in patients, reporting that “TMS is effective in the acute treatment of [major depressive disorder].”</span></p>
                        <p class="c6 padding-top-elements"><span class="c4">Outside the US, a study that spanned Israel, Europe, Canada and the US in 2009 included a successful 16-week TMS trial with significant remission and response rates as well. The </span><span class="c1"><a class="c3" href="https://activerecoverytms.com/blog/test/phq9/">PHQ-9</a></span><span class="c4"> continues to provide a concrete method for uniformly marking patient progress across all viable treatments.</span></p>
                        <p id="h.3znysh7" class="c6 padding-top-elements"><span class="c4">TMS can alleviate depressive symptoms and even send the illness into remission for many patients, making it a compelling treatment for those seeking a non-medication treatment option for major depressive disorder.</span></p>

                    </div>
                </div>

            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->

        <span id="my_email_ajax_nonce" data-nonce="<?php echo wp_create_nonce( 'my_email_ajax_nonce' ); ?>"></span>
        <input type="hidden" id="gacid-value-stored">
        <?php get_footer(); ?>

            <script src="https://code.jquery.com/jquery-1.12.0.min.js">
            </script>

            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <script>


                function grab_data_from_cookie(stringToMatch){
                    var cookieData = document.cookie.split(";");

                    for(var i = 0; i < cookieData.length; i++){
                        if(cookieData[i].includes(stringToMatch)){
                            return cookieData[i].split("=")[1].trim();
                        }
                    }
                    return "There was an error.";
                }


                $('.radio-container').click(function() {
                    $("#carousel-example-generic").carousel('next');
                });

                $("#question9").click(function(){
                    $("#h2-lastTwoWeeksHeading").css("visibility", "hidden");
                })

                $('.quizlet-form-button').click(function(e) {
                    var grab_username = document.getElementsByName("quizlet-your-name")[0].value;
                    var grab_email = document.getElementsByName("quizlet-your-email")[0].value;
                    var grab_phone = document.getElementsByName("quizlet-your-phone")[0].value;

                    var grab_medication = document.getElementsByName("medication");
                    var grab_medication_value;


                    for(var grab_radio_value = 0; grab_radio_value < grab_medication.length; grab_radio_value++){
                        if(grab_medication[grab_radio_value].checked){
                            grab_medication_value = grab_medication[grab_radio_value].value;
                        }
                    }

                    e.preventDefault();

                    if(grab_username === "" || grab_email === "" || grab_phone === "" || grab_medication_value === "" || grab_medication_value === undefined || grab_email.includes("@") !== true){
                        $(".quizlet-form-button").html("Error. Try again!");
                        dataLayer.push({
                            'event': 'formSubmission',
                            'formSubmissionID': 'quizlet-form-information',
                            'validation': false
                        });

                    }  else {

                    $(".quizlet-form-button").html()
                    grab_medication = "medication=" + grab_medication_value;
                    grab_username = "name=" + grab_username;
                    grab_email = "email=" + grab_email;
                    grab_phone = "phone=" + grab_phone;
                    document.cookie = grab_username;
                    document.cookie = grab_email;
                    document.cookie = grab_phone;
                    document.cookie = grab_medication;

                    dataLayer.push({
                        'event': 'formSubmission',
                        'formSubmissionID': 'quizlet-form-information',
                        'validation': true
                    });


                    var score = parseInt($('input[name=question01]:checked', '#question1').val()) + parseInt($('input[name=question02]:checked', '#question2').val()) + parseInt($('input[name=question03]:checked', '#question3').val()) + parseInt($('input[name=question04]:checked', '#question4').val()) + parseInt($('input[name=question05]:checked', '#question5').val()) + parseInt($('input[name=question06]:checked', '#question6').val()) + parseInt($('input[name=question07]:checked', '#question7').val()) + parseInt($('input[name=question08]:checked', '#question8').val()) + parseInt($('input[name=question09]:checked', '#question9').val());

                    var results = "PHQ9 Answers: Question 1: " + parseInt($('input[name=question01]:checked', '#question1').val()) + " Question 2:" + parseInt($('input[name=question02]:checked', '#question2').val()) + " Question 3: " + parseInt($('input[name=question03]:checked', '#question3').val()) + " Question 4: " + parseInt($('input[name=question04]:checked', '#question4').val()) + " Question 5: " + parseInt($('input[name=question05]:checked', '#question5').val()) + " Question 6: " + parseInt($('input[name=question06]:checked', '#question6').val()) + " Question 7: " + parseInt($('input[name=question07]:checked', '#question7').val()) + " Question 8: " + parseInt($('input[name=question08]:checked', '#question8').val()) + " Question 9: " + parseInt($('input[name=question09]:checked', '#question9').val());

                    $('#quizData').val(score);

                        var explanation = "";
                        document.cookie = "score=" + score;

                        if (score < 5) {
                            explanation = "The results of your quiz indicate that you may be experiencing a few depressive symptoms. If you have concerns about your mental health, speak with a professional at Active Recovery TMS today to explore your options. ";
                            document.cookie = "explanation=" + explanation;
                            $("#messageresults").val(explanation);
                            $('#quizlet-information').hide();
                            $('#h2-lastTwoWeeksHeading').css("visibility", "hidden");
                            $('.carousel-direction-positioning').hide();
                            $('#resultsRequestInformation').show();

                        } else if (score > 4 && score < 10) {
                            explanation = "The results of your quiz indicate that you may be experiencing a mild amount of depressive symptoms. Symptoms of mild depression may look like disturbances in sleeping or eating patterns. Speak with a professional at Active Recovery TMS today to see if TMS could be right for you. ";
                            document.cookie = "explanation=" + explanation;
                            $("#messageresults").val(explanation);
                            $('#quizlet-information').hide();
                            $('#h2-lastTwoWeeksHeading').css("visibility", "hidden");
                            $('.carousel-direction-positioning').hide();
                            $('#resultsRequestInformation').show();

                        } else if (score > 9 && score < 15) {
                            explanation = "The results of your quiz indicate that you may be experiencing a moderate amount of depressive symptoms. Symptoms of moderate depression may manifest themselves as feelings of deep sadness, possibly as a response to a difficult event or situation. Talk to a professional at Active Recovery TMS today to find out if you could be helped by TMS.";
                            document.cookie = "explanation=" + explanation;
                            $("#messageresults").val(explanation);
                            $('#quizlet-information').hide();
                            $('#h2-lastTwoWeeksHeading').css("visibility", "hidden");
                            $('.carousel-direction-positioning').hide();
                            $('#resultsRequestInformation').show();

                        } else if (score > 14 && score < 20) {
                            explanation = "The results of your quiz indicate that you may be experiencing a moderately severe amount of depressive symptoms. Moderately severe depression symptoms include disinterest in things once enjoyed or lack of energy for everyday responsibilities and obligations. Talk to a professional at Active Recovery TMS today to schedule your free consultation.";
                            document.cookie = "explanation=" + explanation;
                            $("#messageresults").val(explanation);
                            $('#quizlet-information').hide();
                            $('#h2-lastTwoWeeksHeading').css("visibility", "hidden");
                            $('.carousel-direction-positioning').hide();
                            $('#resultsRequestInformation').show();

                        } else if (score > 19) {
                            explanation = "The results of your quiz indicate that you may be experiencing a severe amount of depressive symptoms. Common symptoms of severe depression can include obsessive negative thoughts and feelings of hopelessness. Speak with someone at Active Recovery TMS today to schedule your free consultation.";
                            document.cookie = "explanation=" + explanation;
                            $("#messageresults").val(explanation);
                            $('#quizlet-information').hide();
                            $('#h2-lastTwoWeeksHeading').css("visibility", "hidden");
                            $('.carousel-direction-positioning').hide();
                            $('#resultsRequestInformation').show();

                        }

                        $('#resultsDisplay').show().html("Your score is " + score + " out of 27. ");
                        $('#resultsExplanation').show().html(explanation);

                        var myemail = grab_data_from_cookie("email");
                        var generate_date = new Date();
                        var data = {
                            action: 'mail_before_submit',
                            Email: grab_data_from_cookie("email"),
                            Name: grab_data_from_cookie("name"),
                            Phone: grab_data_from_cookie("phone"),
                            Score : grab_data_from_cookie("score"),
                            Medication: grab_data_from_cookie("medication"),
                            "PHQ9 Score": grab_data_from_cookie("score"),
                            "PHQ9 Range": grab_data_from_cookie("explanation"),
                            "Prescription Medication": grab_data_from_cookie("medication"),
                            "Requested Consultation" : "N",
                            "UTM Source" : grab_utm_value_by_parameter("utm_source"),
                            "UTM Medium" : grab_utm_value_by_parameter("utm_medium"),
                            "UTM Campaign" : grab_utm_value_by_parameter("utm_campaign"),
                            "UTM Term" : grab_utm_value_by_parameter("utm_term"),
                            "UTM Content" : grab_utm_value_by_parameter("utm_content"),
                            "Google Analytics": jQuery("#gacid-value-stored").val(),
                            "Status" : "0 RECEIVED",
                            Month: generate_date.getFullYear().toString() + "0" + (generate_date.getMonth() + 1),
                            Time: generate_date.toLocaleTimeString(),
                        };

                        jQuery.post(window.location.origin + "/wp-admin/admin-ajax.php", data, function(response) {

                        });

                        var google_url = "https://script.google.com/macros/s/AKfycbybaIWGWqobIdE0swHzCxFLACUJ2ONdXpl_dhTUkdxwRCdsh1I/exec";

                        jQuery.post(google_url, data, function(response){

                        })

                    }
                }

                );

                $(".request-contact-button").one("click", function(e) {
                    document.cookie = "didClick=True";


                    var myemail = grab_data_from_cookie("email");
                    var generate_date = new Date();
                    var data = {
                        action: 'request_consultation',
                        Email: grab_data_from_cookie("email"),
                        Name: grab_data_from_cookie("name"),
                        Phone: grab_data_from_cookie("phone"),
                        Score : grab_data_from_cookie("score"),
                        Medication: grab_data_from_cookie("medication"),
                        "PHQ9 Score": grab_data_from_cookie("score"),
                        "PHQ9 Range": grab_data_from_cookie("explanation"),
                        "Prescription Medication": grab_data_from_cookie("medication"),
                        "UTM Source" : grab_utm_value_by_parameter("utm_source"),
                				"UTM Medium" : grab_utm_value_by_parameter("utm_medium"),
                				"UTM Campaign" : grab_utm_value_by_parameter("utm_campaign"),
                				"UTM Term" : grab_utm_value_by_parameter("utm_term"),
                				"UTM Content" : grab_utm_value_by_parameter("utm_content"),
                        "Requested Consultation" : "Y",
                        "Google Analytics": jQuery("#gacid-value-stored").val(),
                        "Status" : "0 RECEIVED",
                        Referrer: jQuery("[name=http_referrer]").val(),
                        Month: generate_date.getFullYear().toString() + "0" + (generate_date.getMonth() + 1),
                        Time: generate_date.toLocaleTimeString(),
                    };
                    jQuery.post(window.location.origin + "/wp-admin/admin-ajax.php", data, function(response) {

                    });

                    var google_url = "https://script.google.com/macros/s/AKfycbybaIWGWqobIdE0swHzCxFLACUJ2ONdXpl_dhTUkdxwRCdsh1I/exec";

                    jQuery.post(google_url, data, function(response){

                    })


                    $(".request-contact-button").addClass("disabled-button");
                    $(".sent").show();
                })

                if (document.cookie.indexOf("didClick") !== -1) {

                    $("#h2-lastTwoWeeksHeading").css("visibility", "hidden");
                    $("#show-on-cookie").addClass("active");
                    $("#show-on-cookie").css("margin-bottom", "40px");
                    $("#carousel-example-generic").hide();

                    var explanation = grab_data_from_cookie("explanation");

                    $("#resultsExplanationCookie").html(explanation);
                    $("#resultsExplanationCookie").show();
                    var score = grab_data_from_cookie("score");
                    $("#resultsDisplayCookie").html("Your score is " + score + " out of 27.");

                } else if(document.cookie.indexOf("didClick") === -1 && document.cookie.indexOf("score") !== -1) {

                    $("#h2-lastTwoWeeksHeading").css("visibility", "hidden");
                    $("#show-on-cookie").addClass("active");
                    $("#carousel-example-generic").hide();
                    $("#show-on-cookie").css("margin-bottom", "40px");

                    var explanation = grab_data_from_cookie("explanation");

                    $("#resultsExplanationCookie").html(explanation);
                    $("#resultsExplanationCookie").show();

                    var score = grab_data_from_cookie("score");

                    $("#resultsDisplayCookie").html("Your score is " + score + " out of 27.");
                    $(".request-contact-button").removeClass("disabled-button");
                    $(".sentCookie").hide();
                }
            </script>
