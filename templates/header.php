<?php
include_once($_SERVER['DOCUMENT_ROOT'] . "/templates/nav.php");

include_once($_SERVER['DOCUMENT_ROOT'] . "/utils/functions.php");

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="Description" CONTENT="My name is Luis Willnat, I am french/german developper from Mulhouse, France. Studied in France, Germany and Ireland. Developer, coach and swimmer, I love tartiflette.">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-85600597-2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-85600597-2');
    </script>
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <link rel="icon" href="favicon.png" type="image/png">
    <link rel="icon" sizes="32x32" href="favicon-32.png" type="image/png">
    <link rel="icon" sizes="64x64" href="favicon-64.png" type="image/png">
    <link rel="icon" sizes="96x96" href="favicon-96.png" type="image/png">



    <style>
        html {
            font-family: sans-serif;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%
        }

        body {
            margin: 0
        }

        details,
        footer,
        nav {
            display: block
        }

        [hidden] {
            display: none
        }

        a {
            background-color: transparent
        }

        a:active,
        a:hover {
            outline: 0
        }

        b {
            font-weight: 700
        }

        h1 {
            font-size: 2em;
            margin: .67em 0
        }

        small {
            font-size: 80%
        }

        img {
            border: 0
        }

        code {
            font-family: monospace, monospace;
            font-size: 1em
        }

        button {
            color: inherit;
            font: inherit;
            margin: 0
        }

        button {
            overflow: visible
        }

        button {
            text-transform: none
        }

        button {
            -webkit-appearance: button;
            cursor: pointer
        }

        button[disabled] {
            cursor: default
        }

        button::-moz-focus-inner {
            border: 0;
            padding: 0
        }

        * {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        :after,
        :before {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box
        }

        html {
            font-size: 10px;
            -webkit-tap-highlight-color: transparent
        }

        body {
            font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
            font-size: 14px;
            line-height: 1.42857143;
            color: #333;
            background-color: #fff
        }

        button {
            font-family: inherit;
            font-size: inherit;
            line-height: inherit
        }

        a {
            color: #337ab7;
            text-decoration: none
        }

        a:focus,
        a:hover {
            color: #23527c;
            text-decoration: underline
        }

        a:focus {
            outline: 5px auto -webkit-focus-ring-color;
            outline-offset: -2px
        }

        img {
            vertical-align: middle
        }

        .img-responsive {
            display: block;
            max-width: 100%;
            height: auto
        }

        [role=button] {
            cursor: pointer
        }

        .container {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px
        }

        @media (min-width:768px) {
            .container {
                width: 750px
            }
        }

        @media (min-width:992px) {
            .container {
                width: 970px
            }
        }

        @media (min-width:1200px) {
            .container {
                width: 1170px
            }
        }

        .container-fluid {
            margin-right: auto;
            margin-left: auto;
            padding-left: 15px;
            padding-right: 15px
        }

        .row {
            margin-left: -15px;
            margin-right: -15px
        }

        .col-lg-1,
        .col-lg-10,
        .col-lg-11,
        .col-lg-12,
        .col-lg-2,
        .col-lg-3,
        .col-lg-4,
        .col-lg-5,
        .col-lg-6,
        .col-lg-7,
        .col-lg-8,
        .col-lg-9,
        .col-sm-1,
        .col-sm-10,
        .col-sm-11,
        .col-sm-12,
        .col-sm-2,
        .col-sm-3,
        .col-sm-4,
        .col-sm-5,
        .col-sm-6,
        .col-sm-7,
        .col-sm-8,
        .col-sm-9 {
            position: relative;
            min-height: 1px
        }

        @media (min-width:768px) {

            .col-sm-1,
            .col-sm-10,
            .col-sm-11,
            .col-sm-12,
            .col-sm-2,
            .col-sm-3,
            .col-sm-4,
            .col-sm-5,
            .col-sm-6,
            .col-sm-7,
            .col-sm-8,
            .col-sm-9 {
                float: left
            }

            .col-sm-12 {
                width: 100%
            }

            .col-sm-11 {
                width: 91.66666667%
            }

            .col-sm-10 {
                width: 83.33333333%
            }

            .col-sm-9 {
                width: 75%
            }

            .col-sm-8 {
                width: 66.66666667%
            }

            .col-sm-7 {
                width: 58.33333333%
            }

            .col-sm-6 {
                width: 50%
            }

            .col-sm-5 {
                width: 41.66666667%
            }

            .col-sm-4 {
                width: 33.33333333%
            }

            .col-sm-3 {
                width: 25%
            }

            .col-sm-2 {
                width: 16.66666667%
            }

            .col-sm-1 {
                width: 8.33333333%
            }
        }

        @media (min-width:1200px) {

            .col-lg-1,
            .col-lg-10,
            .col-lg-11,
            .col-lg-12,
            .col-lg-2,
            .col-lg-3,
            .col-lg-4,
            .col-lg-5,
            .col-lg-6,
            .col-lg-7,
            .col-lg-8,
            .col-lg-9 {
                float: left
            }

            .col-lg-12 {
                width: 100%
            }

            .col-lg-11 {
                width: 91.66666667%
            }

            .col-lg-10 {
                width: 83.33333333%
            }

            .col-lg-9 {
                width: 75%
            }

            .col-lg-8 {
                width: 66.66666667%
            }

            .col-lg-7 {
                width: 58.33333333%
            }

            .col-lg-6 {
                width: 50%
            }

            .col-lg-5 {
                width: 41.66666667%
            }

            .col-lg-4 {
                width: 33.33333333%
            }

            .col-lg-3 {
                width: 25%
            }

            .col-lg-2 {
                width: 16.66666667%
            }

            .col-lg-1 {
                width: 8.33333333%
            }
        }

        .container-fluid:after,
        .container-fluid:before,
        .container:after,
        .container:before,
        .row:after,
        .row:before {
            content: " ";
            display: table
        }

        .container-fluid:after,
        .container:after,
        .row:after {
            clear: both
        }

        body {
            padding-bottom: 80px;
            position: relative
        }

        .category {
            position: relative;
            height: 300px
        }

        .category--vi {
            background-image: linear-gradient(to right top, #051937, #004d7a, #008793, #00bf72, #a8eb12)
        }

        .category--philippines {
            background-image: linear-gradient(270deg, #dac700, #e3aa00, #ea8c00, #ee6900, #ee3e00)
        }

        .category--isfates {
            background-image: linear-gradient(180deg, #b900a1, #c600a5, #d300a9, #e100ad, #ee00b0)
        }

        .category--erasmus {
            background-image: linear-gradient(0deg, #13de00, #63e100, #8ce400, #aee700, #cbe900)
        }

        .category--foodsharing {
            background-image: linear-gradient(to right top, #00b950, #00ca49, #00dc3f, #00ed2d, #0f0)
        }

        .category--godot {
            background-image: linear-gradient(to right top, #00b950, #00ca49, #00dc3f, #00ed2d, #0f0)
        }

        .category--elife {
            background-image: linear-gradient(to right top,#26b7c1,#1ad6c7,#54c1d0,#47d6d6,#13bbbb);
        }

        .category--advisa {
            background: #b8a0ba;
            background: -moz-linear-gradient(top, #b8a0ba 40%, #a082a4 100%);
            background: -webkit-linear-gradient(top, #b8a0ba 40%, #a082a4 100%);
            background: linear-gradient(to bottom, #b8a0ba 40%, #a082a4 100%)
        }

        .category--grenoble {
            background: #bd211c;
            background: linear-gradient(114deg, rgba(189, 33, 28, 1) 0, rgba(255, 90, 8, 1) 30%, rgba(233, 50, 0, 1) 77%)
        }

        .category--master {
            background: rgba(179, 86, 120, 1);
            background: -moz-linear-gradient(left, rgba(179, 86, 120, 1) 0, rgba(169, 68, 105, 1) 24%, rgba(136, 12, 57, 1) 100%);
            background: -webkit-gradient(left top, right top, color-stop(0, rgba(179, 86, 120, 1)), color-stop(24%, rgba(169, 68, 105, 1)), color-stop(100%, rgba(136, 12, 57, 1)));
            background: -webkit-linear-gradient(left, rgba(179, 86, 120, 1) 0, rgba(169, 68, 105, 1) 24%, rgba(136, 12, 57, 1) 100%);
            background: -o-linear-gradient(left, rgba(179, 86, 120, 1) 0, rgba(169, 68, 105, 1) 24%, rgba(136, 12, 57, 1) 100%);
            background: -ms-linear-gradient(left, rgba(179, 86, 120, 1) 0, rgba(169, 68, 105, 1) 24%, rgba(136, 12, 57, 1) 100%);
            background: linear-gradient(to right, rgba(179, 86, 120, 1) 0, rgba(169, 68, 105, 1) 24%, rgba(136, 12, 57, 1) 100%)
        }

        .category--swimming {
            background: #2190f5;
            background: linear-gradient(0deg, rgba(33, 144, 245, 1) 20%, rgba(7, 97, 238, 1) 86%)
        }

        .overlay {
            width: 100%;
            height: 100%;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            position: absolute;
            -webkit-transition: background-color .2s ease;
            -o-transition: background-color .2s ease;
            transition: background-color .2s ease
        }

        .textImage {
            left: 50%;
            top: 45%;
            font-size: 30px;
            color: #fff;
            font-weight: 700;
            -webkit-transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            transform: translate(-50%, -50%);
            position: absolute;
            text-align: center;
            width: 100%
        }

        .textImageSubheadline {
            font-size: 20px
        }

        .category--isfates .textImageSubheadline,
        .category--master .textImageSubheadline,
        .category--philippines .textImageSubheadline {
            font-size: 20px
        }

        .category--isfates .textImage,
        .category--master .textImage,
        .category--philippines .textImage {
            font-size: 25px
        }

        .blogPost {
            text-align: left
        }

        .blog__content {
            margin-top: 20px;
            padding-left: 40px
        }

        .introHome {
            text-align: left;
            margin: 2% 0 1% 5%
        }

        .introHome .headline {
            font-size: 40px
        }

        .introHome p {
            font-size: 30px
        }

        .iconContainerText {
            display: inline
        }

        .images-philippines-container img {
            width: 100%
        }

        img {
            max-width: 100%;
            max-width: 400px
        }

        footer {
            position: absolute;
            bottom: 0;
            padding-left: 15px
        }

        footer h5 {
            color: #596266;
            font-size: 1.2rem
        }

        .topnav {
            overflow: hidden;
            background-color: #333;
            margin-bottom: 50px
        }

        .topnav a {
            float: left;
            display: block;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px
        }

        .active {
            background-color: #4caf50;
            color: #fff
        }

        .topnav .icon {
            display: none
        }

        .dropdown {
            float: left;
            overflow: hidden
        }

        .dropdown .dropbtn {
            font-size: 17px;
            border: none;
            outline: 0;
            color: #fff;
            padding: 14px 16px;
            background-color: inherit;
            font-family: inherit;
            margin: 0
        }

        .dropdown-content {
            display: none;
            position: absolute;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0 8px 16px 0 rgba(0, 0, 0, .2);
            z-index: 1
        }

        .dropdown-content a, .dropdown-content span {
            float: none;
            color: #000;
            padding: 12px 16px;
            text-decoration: none;
            display: block;
            text-align: left
        }

        .dropdown-content span {
            padding-bottom: 0;
        }

        .dropdown-content span ul {
            margin: 0;
        }

        .dropdown:hover .dropbtn,
        .topnav a:hover {
            background-color: #555;
            color: #fff
        }

        .dropdown-content a:hover {
            background-color: #ddd;
            color: #000
        }

        .dropdown:hover .dropdown-content {
            display: block
        }

        @media screen and (max-width:600px) {

            .dropdown .dropbtn,
            .topnav a:not(:first-child) {
                display: none
            }

            .topnav a.icon {
                float: right;
                display: block
            }
        }

        @media screen and (max-width:600px) {
            .topnav.responsive {
                position: relative
            }

            .topnav.responsive .icon {
                position: absolute;
                right: 0;
                top: 0
            }

            .topnav.responsive a {
                float: none;
                display: block;
                text-align: left
            }

            .topnav.responsive .dropdown {
                float: none
            }

            .topnav.responsive .dropdown-content {
                position: relative
            }

            .topnav.responsive .dropdown .dropbtn {
                display: block;
                width: 100%;
                text-align: left
            }
        }

        @media screen and (max-width:600px) {
            .blogPost {
                margin-top: 0
            }

            .blog__content {
                padding-left: 20px;
                padding-right: 20px
            }

            .images-philippines-container img {
                max-width: 100%
            }

            img {
                max-width: 100%
            }

            .topnav {
                margin-bottom: 0;
            }
        }
    </style>
    <title>Luis WILLNAT</title>
</head>

<body>