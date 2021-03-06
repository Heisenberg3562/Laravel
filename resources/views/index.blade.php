<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Home - Web4Hub</title>
    <meta name="description" content="Event Management made easy ...">
    <link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,700,700i,600,600i">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/styles.min.css') }}">
	<link rel="stylesheet" href="https://anijs.github.io/lib/anicollection/anicollection.css" />
</head>

<body>
@include('navigation')
    <main class="page landing-page">
        <section class="clean-block clean-hero" style="background-image:url({{ asset('assets/img/tech/image6.jpg') }});color:rgba(9, 162, 255, 0.1);">
            <div class="text">
                <h2><br><strong>Create amazing virtual events right now</strong><br></h2>
                <p><strong>Easy-to-use, powerful online event management</strong><br></p><a class="btn btn-outline-light btn-lg" type="button" href="{{ url('/events/all') }}">SEE ALL</a></div>
        </section>
        <section class="clean-block clean-info dark" data-anijs="if: scroll, on: window, do: rollIn animated, before: $scrollReveal repeat">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info"><strong>Web4Hub for meeting and event professionals</strong><br></h2>
                    <p><br>Navigate every aspect of the event process <br>Increase attendance and engagement<br>Powerful reporting, strategic integrations<br><br></p>
                </div>
                <div class="row align-items-center">
                    <div class="col-md-6"><img class="img-thumbnail" src="{{ asset('assets/img/scenery/image5.jpg') }}"></div>
                    <div class="col-md-6">
                        <h3><br><strong>Event Creation and handling everything from start to finish</strong><br><br></h3>
                        <div class="getting-started-info">
                            <p>Our event management system simplifies the entire event planning&nbsp;process. Starting with&nbsp;sourcing your venue and ending with dashboards and reports after your event. We have everything covered.<br></p>
                        </div><a class="btn btn-outline-primary btn-lg" type="button" href="{{ url('/events/create') }}">Create Now</a></div>
                </div>
            </div>
        </section>
		<section class="clean-block features" data-anijs="if: scroll, on: window, do: rotateIn animated, before: $scrollReveal repeat">
            <div class="container">
                <div class="block-heading">
                    <h2 class="text-info">Features</h2>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-5 feature-box"><i class="icon-star icon"></i>
                        <h4>Manage your event in one place</h4>
                        <p>The Web4hub platform saves you time by automating many of your manual event management tasks.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-pencil icon"></i>
                        <h4>Increase attendance</h4>
                        <p>Jumpstart your attendance with fully-branded multi-channel marketing campaigns.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-screen-smartphone icon"></i>
                        <h4>Ensure your success</h4>
                        <p>With powerful reporting, strategic integrations, and award-winnings, 24/7 customer service.</p>
                    </div>
                    <div class="col-md-5 feature-box"><i class="icon-refresh icon"></i>
                        <h4>Registration</h4>
                        <p>Our event planning software lets you set up dynamic, online registration that's easy to use, easy to monitor.</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
@include('footer')

</body>

</html>
