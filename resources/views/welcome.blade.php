@extends('layouts.app')



@section('style')
<style type="text/css">
    .lead {
        font-size: 1.15rem;
        font-weight: 300;
    }
    .accordion .panel-title span {
        position: relative; 
        font: bold 25px Sans-Serif;
        color: #fb872b;
        display: inline-block !important;
    }
    .accordion .card-header a[aria-expanded="false"]:after {
        color: #fb872b;
    }
    .list-unstyled li {
        font-size: 1.2em;
        margin-bottom: 10px;
    }
    .client-review-stars .far.fa-star,.client-review-stars .fas.fa-star ,.client-review-stars .fas.fa-star-half-alt{
        color: #ffd300;
    }
</style>
@endsection


@section('content')
    <div class="w-100">

        <section class="content-section">

            <!-- Main Banner -->
            <section class="main-banner">

                <div class="container">

                    <div class="homepage-text col-lg-6 col-md-12 pt-5 ">

                        <h1 class="font-weight-800 mt-5 mt-lg-0">Automate Your Follow-up
Emails With A Drip Campaign.</h1>

                        <p class="mt-2">Marketing, sales, and service software that helps your business grow without compromise.
                            Because
                            “good for the business” should also mean “good for the customer.”</p>

                        <div class="hsg-page-header__ctas mt-2">

                            <button type="button"
                                class="btn badge-warning text-white btn-lg bg-orange">Subscribe</button>

                            <p class="hsg-microcopy mt-2">Get started with FREE tools, and upgrade as you grow.</p>

                        </div>

                    </div>

                </div>

            </section>

   
            <section class="border-bottom">

                <div class='container-fluid mx-auto mt-5 mb-5 col-12 ' style="text-align: center">

                    <div class="hd">Why People Believe in Us</div>

                    <p><small class="text-muted">Always render more and better service than <br />is expected of you, no

                            matter what your ask may be.</small></p>

                    <div class="row" style="justify-content: center">

                        <div class="card col-md-3 col-12">

                            <div class="card-content">

                                <div class="card-body"> <img class="img" src="https://i.imgur.com/S7FJza5.png" />

                                    <div class="shadow"></div>

                                    <div class="card-title"> We're Free </div>

                                    <div class="card-subtitle">

                                        <p> <small class="text-muted">We spent thousands of hours creating on algorithm

                                                that does this for you in seconds. We collect a small fee from the

                                                professional after they meet your</small> </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="card col-md-3 col-12 ml-2">

                            <div class="card-content">

                                <div class="card-body"> <img class="img" src="https://i.imgur.com/xUWJuHB.png" />

                                    <div class="card-title"> We're Unbiased </div>

                                    <div class="card-subtitle">

                                        <p> <small class="text-muted"> We don't accept ads from anyone. We use actual

                                                data to match you who the best person for each job </small> </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                        <div class="card col-md-3 col-12 ml-2">

                            <div class="card-content">

                                <div class="card-body"> <img class="img rck" src="https://i.imgur.com/rG3CGn3.png" />

                                    <div class="card-title"> We Guide you </div>

                                    <div class="card-subtitle">

                                        <p> <small class="text-muted">Buying or selling a home is often the largest

                                                transaction anyone does in their life. we guide you through the process

                                                so that you can be confident in reaching your dream outcome.</small>

                                        </p>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </section>

            <!-- Video section -->
            <section class="border-top border-bottom bg-light-orange mt-0 pb-5 pt-5">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-7">
                            <!-- 16:9 aspect ratio -->
                            <div class="embed-responsive embed-responsive-16by9">
                                <iframe class="embed-responsive-item"
                                    src="https://www.youtube.com/embed/CG90Edqd6Ps?rel=0&autoplay=0&wmode=transparent"></iframe>
                            </div>
                        </div>

                        <div class="col-lg-5 mt-3 mt-lg-0">
                            <h3 class="font-weight-600">How Does It Work?</h3>
                            <p>Let’s explore how TickleTrain is used with Thunderbird to follow-up on emails. After signing up for an account at Tickletrain.com, you’ll be provided with several pre-loaded Tickles that can be used on any email you choose. When composing or replying to an email in Thunderbird, just type its assigned email address in the BCC field before sending. One of those preloaded Tickles is called “universal.” TickleTrain uses a format like this for the BCC field of your email: universal+yourname@tickletrain.com. The “universal” Tickle tags emails for follow up in three days if you don’t get a reply. You’ll receive an email notification (called “Today’s Tickles”) where you can preview the follow up email TickleTrain composed for you and send it with a single click. <a href="#">read more</a></p>
                        </div>
                    </div>
                </div>
            </section>

           <!--  <section class="bg-light-orange border-bottom">

                <div class="container">

                    <div class="position-relative overflow-hidden p-3 p-md-5  text-center">

                        <div class="col-md-5 p-lg-5 mx-auto my-5">

                            <h1 class="display-4 font-weight-normal">Punny headline</h1>

                            <p class="lead font-weight-normal">And an even wittier subheading to boot. Jumpstart your

                                marketing efforts with this example based on Apple's marketing pages.</p>

                            <a class="btn btn-outline-secondary" href="#">Coming soon</a>

                        </div>

                        <div class="product-device shadow-sm d-none d-md-block"></div>

                        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>

                    </div>

                </div>

            </section> -->



            <section class="pt-5 mt-5">

                <div class="container">

                    <div class="row featurette mb-5">

                        <div class="col-md-7">

                            <h2 class="featurette-heading">If you use Gmail, you need TickleTrain. <span class="text-muted"></span></h2>

                            <p class="lead">TickleTrain’s Gmail plug-in offers the ultimate solution for following up on emails and managing sent mail. Some of its unique features include:</p>
                                <ul class="lead">
                                    <li> Deep integration with Gmail.</li>
                                    <li>Option to auto-cancel emails if a reply is received.</li>
                                    <li>Dedicated TickleTrain button and side bar.</li>
                                    <li>Powerful preview and management tools built-in.</li>
                                </ul>
                            <p class="lead">
                            TickleTrain allows Gmail users to take better control of their inbox and outbox. TickleTrain tracks emails you send and provides personalized follow-up if your email needs a reply. Best of all, the follow-up emails look like you personally typed them and are sent with a single click– a productivity boost is instant. It’s like having your own personal email assistant. If you are a Gmail user, don’t delay trying TickleTrain’s Chrome Extension.</p>

                        </div>

                        <div class="col-md-5">

                            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
                                alt="500x500" src="https://tickletrain.com/wp-content/themes/tickletrain/images/gmail_img.jpg" data-holder-rendered="true">

                        </div>

                    </div>

                    <hr />



                    <div class="row featurette mt-5">

                        <div class="col-md-5">

                            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto"
                                alt="500x500" src="{{asset('public/images/email-hosting.png')}}" data-holder-rendered="true">

                        </div>

                        <div class="col-md-7">

                            <h2 class="featurette-heading">Follow-up with leads automatically with TickleTrain. <span class="text-muted"></span></h2>

                            <p class="lead">For instance, you may create a Tickle to be used for a certain product you sell. When you get the lead, just send an email like normal and include your special Tickle BCC address in the BCC field.<br> This will set up a follow-up routine for you. The first email can be a “touching base” email to ask if they have any questions you can answer. You could also tell them that you will put some additional information together about the product and send that over. The following day, the “informational email” gets sent with some attachments and literature. Your next communication might come seven days later asking if they reviewed the literature you sent over. And so on. These small nudges and lead nurturing emails are easy to manage with complete control.</p>
                        </div>
                    </div>
                </div>
            </section>

            <section class="price-section bg-light-grey pb-4">

                <div class="container">

                    <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">

                        <h1 class="display-4 font-weight-600">Pricing</h1>

                        <p class="lead">Quickly build an effective pricing table for your potential customers with this Bootstrap example.</p>

                    </div>

                </div>

                <div class="container">

                    <div class="card-deck mb-3 text-center">

                        <div class="card mb-4 shadow-sm">

                            <div class="card-header bg-orange">

                                <h4 class="my-0 font-weight-600 text-white ">Free</h4>

                            </div>

                            <div class="card-body d-flex flex-column">

                                <h1 class="card-title pricing-card-title">free <small class="text-muted">/mo</small></h1>

                                <ul class="list-unstyled mt-3 mb-4">

                                    <li><b>1 User</b>  included</li>
                                    <li><b>10</b> Campaigns</li>
                                    <li><b>Unlimited</b> Tickles</li>
                                    <li><b>5 MB storage</b> for each Campaigns </li>
                                    <li>Gmail Chrome Extension</li>
                                    <li>Branding</li>

                                </ul>

                                <button type="button" class="mt-auto btn btn-lg btn-block btn-outline-orange">Sign up for free</button>

                            </div>

                        </div>

                        <div class="card mb-4 shadow-sm">

                            <div class="card-header bg-orange">

                                <h4 class="my-0 font-weight-600 text-white">Pro</h4>

                            </div>

                            <div class="card-body  d-flex flex-column">

                                <h1 class="card-title pricing-card-title">$5.95 <small class="text-muted">/ mo</small>

                                </h1>

                                <ul class="list-unstyled mt-3 mb-4">
                                    
                                    <li><b>2 Users</b> included</li>
                                    <li><b>50</b> Campaigns</li>
                                    <li><b>Unlimited</b> Tickles</li>
                                    <li><b>15 MB storage</b> for each Campaigns </li>
                                    <li>Gmail Chrome Extension info_plans</li>
                                    <li>Priority email support</li>
                                    <li>Help center access</li>
                                    <li>No Branding</li>

                                </ul>

                                <button type="button"
                                    class="btn btn-lg btn-block badge-warning text-white bg-orange mt-auto">Get started</button>

                            </div>

                        </div>

                        <div class="card mb-4 shadow-sm">

                            <div class="card-header bg-orange">

                                <h4 class="my-0 font-weight-600 text-white">Enterprise</h4>

                            </div>

                            <div class="card-body d-flex flex-column">

                                <h1 class="card-title pricing-card-title">$9.95 <small class="text-muted">/ mo</small>

                                </h1>

                                <ul class="list-unstyled mt-3 mb-4">

                                    <li><b>5 Users</b> included</li>
                                    <li><b>Unlimited</b> Campaigns</li>
                                    <li><b>Unlimited</b> Tickles</li>
                                    <li><b>25 MB storage</b> for each Campaigns </li>
                                    <li>Gmail Chrome Extension info_plans</li>
                                    <li>Priority email support</li>
                                    <li>Help center access</li>
                                    <li>No Branding</li>

                                </ul>

                                <button type="button"
                                    class="btn btn-lg btn-block badge-warning text-white bg-orange mt-auto">Contact

                                    us</button>

                            </div>

                        </div>

                    </div>

                </div>
            </section>


            <section class="bg-white pt-5 pb-5">

                <div class="container">

                    <h3 class="font-weight-600 font-size-36 mb-5 text-center">Frequently Asked Questions</h3>

                    <div class="accordion" id="accordion" role="tablist" aria-multiselectable="true">

                        <div class="border-0  mb-2">
                            <div class="card-header " role="tab" id="headingOne">

                                <h5 class="h6 panel-title mb-0">
                                    <a role="button" class="bg-transparent" data-toggle="collapse" data-target="#collapseOne"
                                        aria-expanded="true" aria-controls="collapseOne">
                                        <span class="d-none d-md-block">01</span>What does TickleTrain do? 
                                    </a>

                                </h5>

                            </div>

                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    It recognizes special email addresses in the BCC field of your emails. These “Tickles” trigger additional emails to be sent to your contact automatically.
                                </div>
                            </div>
                        </div>



                        <div class="border-0 mb-2">

                            <div class="card-header" role="tab" id="headingOne">

                                <h5 class="h6 panel-title mb-0">

                                    <a role="button" class="bg-transparent" data-toggle="collapse" data-target="#collapseTwo"
                                        aria-expanded="false" aria-controls="collapseTwo">

                                        <span class="d-none d-md-block">02</span>How can it help me?

                                    </a>

                                </h5>

                            </div>

                            <div id="collapseTwo" class="collapse hide" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                   Repetitive tasks get automated and sent mail gets tracked. Take the example of emailing an invoice. By using TickleTrain in the BCC field you’ll be reminded in 30 days about this email. If you have not gotten paid, click send and your prewritten follow-up email for “unpaid invoices” will be sent. If you received payment, just delete the follow-up. This is just one scenario. If an email is important, you should consider using TickleTrain on it.
                                </div>
                            </div>
                        </div>



                        <div class="border-0 mb-2">

                            <div class="card-header " role="tab" id="headingOne">

                                <h5 class="h6 panel-title mb-0">

                                    <a role="button" class="bg-transparent" data-toggle="collapse" data-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">

                                        <span class="d-none d-md-block">03</span> How does it work?

                                    </a>

                                </h5>

                            </div>

                            <div id="collapseThree" class="collapse hide" aria-labelledby="headingOne"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    You pre-write emails that can be used over and over again. This series of prewritten emails are stored as an email address. To trigger the prewritten emails, just insert the special email address in the BCC field of the email you are sending. The series of emails will then be sent to your contact depending on the schedule you set up on the TickleTrain website.
                                </div>
                            </div>
                        </div>



                        <div class="border-0 mb-2">

                            <div class="card-header " role="tab" id="headingfour">

                                <h5 class="h6 panel-title mb-0">

                                    <a role="button" class="bg-transparent" data-toggle="collapse" data-target="#collapseFour"
                                        aria-expanded="false" aria-controls="collapseFour">

                                        <span class="d-none d-md-block">04</span>What if I get a reply or want to stop TickleTrain emails?

                                    </a>

                                </h5>

                            </div>

                            <div id="collapseFour" class="collapse hide" aria-labelledby="headingfour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    Emails sent from TickleTrain default to “on hold.” In this case, the only way TickleTrain will send your email is if you approve it. You can also have them sent without any intervention. If you no longer need TickleTrain on that email, just delete the follow-up campaign from the email reminder TickleTrain sends you- or enable Reply Tracking and the campaign will automatically delete when you get a reply. It’s very simple to manage and you hardly ever need to leave your inbox to manage your Tickles.
                                </div>
                            </div>
                        </div>


                        <div class="border-0 mb-2">

                            <div class="card-header " role="tab" id="headingfour">

                                <h5 class="h6 panel-title mb-0">

                                    <a role="button" class="bg-transparent" data-toggle="collapse" data-target="#collapseFive"
                                        aria-expanded="false" aria-controls="collapseFour">

                                        <span class="d-none d-md-block">05</span>What are the differences in the plans?
                                    </a>

                                </h5>

                            </div>

                            <div id="collapseFive" class="collapse hide" aria-labelledby="headingfour"
                                data-parent="#accordionExample">
                                <div class="card-body">
                                    <p>The free plan includes all the features of the unlimited plan. The two differences are:</p>
                                    <ol>
                                    <li>The number of “campaigns” at any one time. This is how many contacts you can use TickleTrain on at any given time.</li>
                                    <li>The free plan includes a promotional message at the bottom of the emails. The message included reads: “TickleTrain.com – your free email assistant.” The unlimited plan has no branding.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>



                    </div>


                    <!-- slider Section -->
                    <div class="col-lg-10 offset-lg-1 pt-5 pb-5 text-light mt-5">
                   
                        <div id="client-testimonial-carousel" class="carousel slide min-height-200" data-ride="carousel">

                            <div class="carousel-inner" role="listbox">

                                <div class="carousel-item active text-center p-4">

                                    <blockquote class="blockquote text-center">

                                        <p class="mb-0"><i class="fa fa-quote-left"></i> Everybody is a genius. But if

                                            you judge a fish by its ability to climb a tree, it will live its whole life

                                            believing that it is stupid.

                                        </p>

                                        <div class="blockquote-footer mt-2">

                                            <img class="image-resposive rounded-circle ml-2 mr-2 profile-pic bg-white"
                                                src="https://www.shareicon.net/data/256x256/2017/02/24/879530_user_512x512.png" />

                                            Albert Einstein <cite title="Source Title">genius</cite></div>

                                        <!-- Client review stars -->

                                        <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->

                                        <p class="client-review-stars mt-2">

                                            <i class="fas fa-star"></i>

                                            <i class="fas fa-star"></i>

                                            <i class="fas fa-star"></i>

                                            <i class="fas fa-star-half-alt"></i>

                                            <i class="far fa-star"></i>

                                        </p>

                                    </blockquote>

                                </div>

                                <div class="carousel-item text-center p-4">

                                    <blockquote class="blockquote text-center">

                                        <p class="mb-0"><i class="fa fa-quote-left"></i> Imagination is more important

                                            than knowledge. Knowledge is limited. Imagination encircles the world.

                                        </p>

                                        <div class="blockquote-footer mt-2"><img
                                                class="image-resposive rounded-circle ml-2 mr-2 profile-pic bg-white"
                                                src="https://www.shareicon.net/data/256x256/2017/02/24/879530_user_512x512.png" />Albert

                                            Einstein <cite title="Source Title">genius</cite></div>

                                        <!-- Client review stars -->

                                        <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->

                                        <p class="client-review-stars mt-2">

                                            <i class="fas fa-star"></i>

                                            <i class="fas fa-star"></i>

                                            <i class="fas fa-star"></i>

                                            <i class="fas fa-star"></i>

                                            <i class="fas fa-star"></i>

                                        </p>

                                    </blockquote>

                                </div>

                                <div class="carousel-item text-center p-4">

                                    <blockquote class="blockquote text-center">

                                        <p class="mb-0"><i class="fa fa-quote-left"></i> A person who never made a

                                            mistake never tried anything new.

                                        </p>

                                        <div class="blockquote-footer mt-2"><img
                                                class="image-resposive rounded-circle ml-2 mr-2 profile-pic bg-white"
                                                src="https://www.shareicon.net/data/256x256/2017/02/24/879530_user_512x512.png" />Albert

                                            Einstein <cite title="Source Title">genius</cite></div>

                                        <!-- Client review stars -->

                                        <!-- "fas fa-star" for a full star, "far fa-star" for an empty star, "far fa-star-half-alt" for a half star. -->

                                        <p class="client-review-stars mt-2">

                                            <i class="fas fa-star"></i>

                                            <i class="fas fa-star"></i>

                                            <i class="fas fa-star"></i>

                                            <i class="fas fa-star"></i>

                                            <i class="fas fa-star"></i>

                                        </p>

                                    </blockquote>

                                </div>

                            </div>



                            <ol class="carousel-indicators">

                                <li data-target="#client-testimonial-carousel" data-slide-to="0" class="active bg-info">

                                </li>

                                <li data-target="#client-testimonial-carousel" data-slide-to="1" class="bg-info"></li>

                                <li data-target="#client-testimonial-carousel" data-slide-to="2" class="bg-info"></li>

                            </ol>

                        </div>
                    </div>
                    <!-- slider end -->

                </div>

            </section>

        </section>

    </div>
@endsection
