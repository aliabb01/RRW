<footer class="footer-distributed">

    <div class="footer-left">


        <span class="text-light footer-brand-name">Apollon Railway</span><br><br>
        <small class="text-light footer-brand-small">{{ __('msg.travel-made-easier')}}</small>
        <p class="footer-links">
            <a href="#" class="link-1">Home</a>
            <a href="#">Blog</a>
            <a href="#">Pricing</a>
            <a href="#">About</a>
            <a href="#">Faq</a>
            <a href="#">Contact</a>
        </p>


    </div>

    <div class="footer-center">

        <div class="address-div">
            <a title="HeadQuarters"
                href="https://www.google.com/maps/place/Kauno+technologijos+universitetas,+Informaciniu+technologiju+diegimo+centras/@54.9038668,23.9572548,19z/data=!3m1!4b1!4m5!3m4!1s0x0:0xfb8cbf149e4e0966!8m2!3d54.903866!4d23.957802"><i
                    class="fa fa-map-marker map-ico"></i></a>
            <p class="address"><span>Griciupio g.9</span> Kaunas, Lithuania</p>
        </div>

        <div class="phone-div">
            <i class="fas fa-phone-alt phone-ico"></i>
            <p class="phone">+1.555.555.5555</p>
        </div>

        <div class="mail-div">
            <i class="fas fa-envelope mail-ico"></i>
            <p class="mail"><a id="company-link-footer" data-toggle="tooltip" data-placement="top" title="Click to write!" data-delay='{"show":"500", "hide":"200"}' href="mailto:apollonrailway@gmail.com">apollonrailway@gmail.com</a></p>
        </div>

    </div>

    <div class="footer-right">

        <p class="footer-company-about">
            <span class="text-light">{{ __('msg.about-the-company')}}</span>
            <b> Apollon Railway</b> is a company originating from Kaunas, Lithuania
        </p>



    </div>
    <hr class="bg-light">

    <div class="row" style="margin-bottom:0px;">
        <div class="col-md-3">
            <div class="c-callout c-callout-info" style="background-color:#FAFBFC;">
                <small class="text-muted"><b>New Clients</b></small><br>
                <strong class="h4">9,123</strong>
            </div>
        </div>
        <!--/.col-->
        
        <div class="col-md-3">
            <div class="c-callout c-callout-warning b-t-1 b-r-1 b-b-1" style="background-color:#FAFBFC;">
                <small class="text-muted"><b>Pageviews</b></small><br>
                <strong class="h4">78,623</strong>
            </div>
        </div>
                
        <div class="col-md-3">
            <div class="c-callout c-callout-danger b-t-1 b-r-1 b-b-1" style="background-color:#FAFBFC;">
                <small class="text-muted"><b>Total User Count</b></small><br>
                <strong class="h4">15,000</strong>
            </div>
        </div>
    
        <div class="col-md-3">
            <div class="c-callout c-callout-success b-t-1 b-r-1 b-b-1" style="background-color:#FAFBFC;">
                <small class="text-muted"><b>Average Daily Visits</b></small><br>
                <strong class="h4">1,000</strong>
            </div>
        </div>
    </div>

    <hr class="bg-light line-before-last">
    

    <div class="text-right get-in-touch footer-icons">
        <span class="text-light" style="font-size:18px">{{ __('msg.get-in-touch')}} :</span>
    </div>
    <div class="footer-icons text-center">
        <a class="footer-lnkdn" href="#" title="LinkedIn"><i class="fab fa-linkedin-in"></i></a>
        <a class="footer-git" href="#" title="GitHub"><i class="fab fa-github"></i></a>
        <a class="footer-twit" href="#" title="Twitter"><i class="fab fa-twitter"></i></a>
        <a class="footer-face" href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
    </div>



    <div class="footer-left text-light">
        <span class="madeby">{{ __('msg.made-by-using-laravel')}} <a href="https://laravel.com/"><i
                    class="fab fa-2x fa-laravel laravel-ico" title="Laravel"></i></a></span>
    </div>


    <a class="test-links" href="/404">Test 404</a>
    <a class="test-links" href="/500">Test 500</a>
    <a class="test-links" href="/down">Maintenance Mode</a>


    <!-- <a href="" onclick="{{Artisan::call('up')}}">Production Mode</a> -->
</footer>
<div class="bg-light copyright-div text-center">
    <small class="text-dark copyright"> &copy; 2020, <a style="font-weight:800; color:#003166;" title="Apollon"
            href="welcome">ApollonRailway</a> | {{ __('msg.all-rights-reserved')}} </small>
</div>

<style>
    
    @import url(//db.onlinewebfonts.com/c/dc6734899329fcbdd770b32dc47059d8?family=Sofia+Pro+Light);

    @font-face {
        font-family: "Sofia Pro Light";
        src: url("//db.onlinewebfonts.com/t/dc6734899329fcbdd770b32dc47059d8.eot");
        src: url("//db.onlinewebfonts.com/t/dc6734899329fcbdd770b32dc47059d8.eot?#iefix") format("embedded-opentype"), url("//db.onlinewebfonts.com/t/dc6734899329fcbdd770b32dc47059d8.woff2") format("woff2"), url("//db.onlinewebfonts.com/t/dc6734899329fcbdd770b32dc47059d8.woff") format("woff"), url("//db.onlinewebfonts.com/t/dc6734899329fcbdd770b32dc47059d8.ttf") format("truetype"), url("//db.onlinewebfonts.com/t/dc6734899329fcbdd770b32dc47059d8.svg#Sofia Pro Light") format("svg");
    }

    .c-callout{
        padding-bottom: 5px;
        filter:contrast(90%);
    }

    .c-callout:hover{
        filter:contrast(120%);
    }

    .test-links{        
        font: bold 16px sans-serif;
    }

    .footer-distributed {
        background: var(--menu-nav);
        box-shadow: 0 1px 1px 0 rgba(0, 0, 0, 0.12);
        box-sizing: border-box;
        width: 100%;
        text-align: left;
        padding: 55px 50px;
    }

    .footer-distributed .footer-left,
    .footer-distributed .footer-center,
    .footer-distributed .footer-right {
        display: inline-block;
        vertical-align: top;
        font: bold 16px sans-serif;
    }

    /* Footer left */

    .footer-distributed .footer-left {
        width: 40%;
    }

    /* The company logo */

    .footer-distributed h3 {
        color: #ffffff;
        font: normal 36px 'Open Sans', cursive;
        margin: 0;
    }

    .footer-distributed h3 span {
        color: lightseagreen;
    }

    /* Footer links */

    .footer-distributed .footer-links {
        color: #ffffff;
        margin: 20px 0 12px;
        padding: 0;
    }

    .footer-distributed .footer-links a {
        display: inline-block;
        line-height: 1.8;
        font-weight: 400;
        text-decoration: none;
        color: inherit;
    }

    .footer-distributed .footer-company-name {
        color: #222;
        font-size: 14px;
        font-weight: normal;
        margin: 0;
    }

    /* Footer Center */

    .footer-distributed .footer-center {
        width: 32%;
    }

    .footer-distributed .footer-center i {
        color: #ffffff;
        font-size: 25px;
        width: 38px;
        height: 38px;
        border-radius: 25%;
        text-align: center;
        line-height: 42px;
        margin: 10px 15px;
        vertical-align: middle;
    }

    .footer-distributed .footer-center i.fa-envelope {
        font-size: 17px;
        line-height: 38px;
    }

    .footer-distributed .footer-center p {
        display: inline-block;
        color: #ffffff;
        font-weight: 400;
        vertical-align: middle;
        margin: 0;
    }

    .footer-distributed .footer-center p span {
        display: block;
        font-weight: normal;
        font-size: 14px;
        line-height: 2;
    }

    .footer-distributed .footer-center p a {
        color: lightseagreen;
        text-decoration: none;
        ;
    }

    .footer-distributed .footer-links a:before {
        content: "|";
        font-weight: 300;
        font-size: 20px;
        left: 0;
        color: #fff;
        display: inline-block;
        padding-right: 5px;
    }

    .footer-distributed .footer-links .link-1:before {
        content: none;
    }

    /* Footer Right */

    .footer-distributed .footer-right {
        width: 20%;
    }

    .footer-distributed .footer-company-about {
        line-height: 20px;
        color: #92999f;
        font-size: 13px;
        font-weight: normal;
        margin: 0;
    }

    .footer-distributed .footer-company-about span {
        display: block;
        color: #ffffff;
        font-size: 14px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .footer-distributed .footer-icons {
        margin-top: 25px;

    }

    .footer-distributed .footer-icons a {
        border-radius: 100%;
        width: 35px;
        height: 35px;
        cursor: pointer;
        float: right;
        font-size: 30px;
        text-align: center;
        line-height: 35px;
        margin-right: 15px;
    }

    .footer-brand-name {
        font-family: "Sofia Pro Light";
        font-size: 32px;
        margin-bottom: 50px;
        margin-right: 5%;
    }

    .footer-brand-small {
        font-family: "Sofia Pro Light";
        font-size: 15px;
        margin-left: 7%;
    }

    .madeby {
        font-family: "Sofia Pro Light";
        font-size: 20px;
    }

    .footer-logo {
        margin-left: 22%;
    }

    .get-in-touch {
        margin-right: 3%;
    }

    .footer-face {
        color: white;
        filter: contrast(80%);
    }

    .footer-face:hover {
        color: #4267B2;
        filter: contrast(125%);
    }

    .footer-twit {
        color: white;
        filter: contrast(80%);
    }

    .footer-twit:hover {
        color: #1DA1F2;
        filter: contrast(125%);
    }

    .footer-git {
        color: white;
        filter: contrast(80%);
    }

    .footer-git:hover {
        color: #6cc644;
        filter: contrast(125%);
    }

    .footer-lnkdn {
        color: white;
        filter: contrast(80%);
    }

    .footer-lnkdn:hover {
        color: #2867B2;
        filter: contrast(125%);
    }

    .address-div .map-ico {
        transition: 0.5s;
    }

    .address-div:hover .map-ico {
        background-color: aqua;
        color: red;
        transition: 0.5s;
        -webkit-box-shadow: 1px 7px 34px 8px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 1px 7px 34px 8px rgba(0, 0, 0, 0.75);
        box-shadow: 1px 7px 34px 8px rgba(0, 0, 0, 0.75);
    }

    .phone-div .phone-ico {
        transition: 0.5s;
    }

    .phone-div:hover .phone-ico {
        background-color: aqua;
        color: #41A317;
        transition: 0.5s;
        -webkit-box-shadow: 1px 7px 34px 8px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 1px 7px 34px 8px rgba(0, 0, 0, 0.75);
        box-shadow: 1px 7px 34px 8px rgba(0, 0, 0, 0.75);
    }

    .mail-div .mail-ico {
        transition: 0.5s;
    }

    .mail-div:hover .mail-ico {
        background-color: aqua;
        color: red;
        transition: 0.5s;
        -webkit-box-shadow: 1px 7px 34px 8px rgba(0, 0, 0, 0.75);
        -moz-box-shadow: 1px 7px 34px 8px rgba(0, 0, 0, 0.75);
        box-shadow: 1px 7px 34px 8px rgba(0, 0, 0, 0.75);
    }

    .map-ico {
        background-color: #33383b;
    }

    .phone-ico {
        background-color: #33383b;
    }

    .mail-ico {
        background-color: #33383b;
    }

    .address:hover {
        /*filter:drop-shadow(0px 9px 10px gray);*/
    }

    .mail:hover {
        filter: contrast(300%);
    }

    .laravel-ico {
        color: #f55247;
        filter: brightness(80%);
        margin-left: 5px;
    }

    .laravel-ico:hover {
        filter: brightness(105%);
    }


    .copyright {
        font-family: "Sofia Pro Light";
        font-size: 18px;
    }

    .copyright-div {
        width: 100%;
        height: 30px;
    }

    /* If you don't want the footer to be responsive, remove these media queries */

    @media (max-width: 880px) {

        .footer-distributed {
            font: bold 14px sans-serif;
        }

        .footer-distributed .footer-left,
        .footer-distributed .footer-center,
        .footer-distributed .footer-right {
            display: block;
            width: 100%;
            margin-bottom: 40px;
            text-align: center;
        }

        .footer-distributed .footer-center i {
            margin-left: 0;
        }

    }

    @media only screen and (max-width:762px) {
        /* Medium devices (landscape tablets, 768px and up) */        
        .line-before-last{
            margin-top:50%;
        }

        .img-logo {
            width: 75%;
        }
    }
</style>

<script>
</script>