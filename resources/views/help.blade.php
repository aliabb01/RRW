@extends('layouts.app')

@section('content')
<div class="help pb-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 class="text-center mt-5 mb-4">F.A.Q.</h2>
                <div class="col-lg-8">
                    <div class="accordion" id="accordion-tab-1">
                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-1">
                                <h5>
                                    <button class="btn btn-lg shadow-none" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-1-content-1" aria-expanded="false"
                                        aria-controls="accordion-tab-1-content-1"><span id="help1">How can I purchase a ticket?</span><span class="dropdown-toggle ml-3"></span></button>
                                </h5>
                            </div>

                            <div class="collapse" id="accordion-tab-1-content-1"
                                aria-labelledby="accordion-tab-1-heading-1" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>Tickets could be purchased from main page <a href="welcome">(here)</a> . There is a <b>form</b> that you will need to fill with suitable information and then click the button to search for tickets with specified data. </p>
                                    <p><b>Note that</b> clicking search button will <b>redirect</b> you to a seperate page. But that does not mean that you will have to go back and forth when searching for tickets. There is also a search form placed in search page so users can directly search from there when needed.</p>
                                </div>
                            </div>

                        </div>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-2">
                                <h5>
                                    <button class="btn btn-lg shadow-none" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-1-content-2" aria-expanded="false"
                                        aria-controls="accordion-tab-1-content-2"><span id="help2">Will my data be shared with third party sources?</span><span class="dropdown-toggle ml-3"></span></button>
                                </h5>
                            </div>

                            <div class="collapse" id="accordion-tab-1-content-2"
                                aria-labelledby="accordion-tab-1-heading-2" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>Your data will be shared with these third party sources:</p>
                                    <ol>
                                        <li class="mb-3">
                                            <b>Google, Facebook, Github or Twitter</b> (when signing in through any of these social medias).
                                        </li>

                                        <li class="mb-3">
                                            <b>Stripe</b> (when purchase happens). Its used so that we would be able to see your payment progress and cancellations in stripe.
                                        </li>
                                    </ol>
                                </div>
                            </div>

                        </div>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-3">
                                <h5>
                                    <button class="btn btn-lg shadow-none" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-1-content-3" aria-expanded="false"
                                        aria-controls="accordion-tab-1-content-3"><span id="help3">How can I work with ApollonRailway?</span><span class="dropdown-toggle ml-3"></span></button>
                                </h5>
                            </div>

                            <div class="collapse" id="accordion-tab-1-content-3"
                                aria-labelledby="accordion-tab-1-heading-3" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>As I have explained in my book 'Earth in the Balance', and the much more
                                        popular 'Harry Potter and the Balance of Earth', we need to defend our
                                        planet against pollution. Also dark wizards. Fry, you can't just sit
                                        here in the dark listening to classical music.</p>
                                    <p><strong>Example: </strong>Actually, that's still true. Well, let's just
                                        dump it in the sewer and say we delivered it.</p>
                                </div>
                            </div>

                        </div>

                        <div class="card">
                            <div class="card-header" id="accordion-tab-1-heading-4">
                                <h5>
                                    <button class="btn btn-lg shadow-none" type="button" data-toggle="collapse"
                                        data-target="#accordion-tab-1-content-4" aria-expanded="false"
                                        aria-controls="accordion-tab-1-content-4"><span id="help4">What destinations do your trains offer as a service?</span><span class="dropdown-toggle ml-3"></span></button>
                                </h5>
                            </div>

                            <div class="collapse" id="accordion-tab-1-content-4"
                                aria-labelledby="accordion-tab-1-heading-4" data-parent="#accordion-tab-1">
                                <div class="card-body">
                                    <p>Morbo can't understand his teleprompter because he forgot how you say
                                        that letter that's shaped like a man wearing a hat. Also Zoidberg. Can
                                        we have Bender Burgers again? Goodbye, cruel world. Goodbye, cruel lamp.
                                        Goodbye, cruel velvet drapes, lined with what would appear to be some
                                        sort of cruel muslin and the cute little pom-pom curtain pull cords.</p>
                                    <p><strong>Example: </strong>Cruel though they may be...</p>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <hr>
                <h5 class="mt-5 text-center">Ask more questions <a href="mailto:apollonrailway@gmail.com">here!</a></h5>
            </div>
        </div>

        <style>
            .help {
                background-color: var(--body-background);
            }
            .card{
                width: 600px;
            }

            #help1{
                color:var(--primary-skyblue);
            }

            #help2{
                color:var(--primary-skyblue);
            }

            #help3{
                color:var(--primary-skyblue);
            }

            #help4{
                color:var(--primary-skyblue);
            }

            #accordion-tab-1-heading-1:hover #help1{
                color:var(--primary-orange);      
            }

            #accordion-tab-1-heading-2:hover #help2{
                color:var(--primary-orange);                
            }

            #accordion-tab-1-heading-3:hover #help3{
                color:var(--primary-orange);                
            }

            #accordion-tab-1-heading-4:hover #help4{
                color:var(--primary-orange);                
            }

            .card-header{
                height:70px;
            }

            .card-header:hover{
                transition: 0.2s;
                border: 1px solid black;
                border-bottom: 2px solid black;
            }
        </style>
        @endsection