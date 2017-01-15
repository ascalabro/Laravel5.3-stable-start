@extends('layouts.app')

@section('content')

    <!-- Header -->
    <a name="about"></a>
    <div class="intro-header">
        <div class="row">
            <div class="col-lg-12">
                <div class="vid-bg">
                    <video loop muted autoplay poster="../img/Browsing/Snapshots/Browsing.jpg" class="fullscreen-bg__video">
                        <source src="../img/Browsing/WEBM/Browsing.web" type="video/webm">
                        <source src="../img/Browsing/MP4/Browsing.mp4" type="video/mp4">
                        {{--<source src="video/big_buck_bunny.ogv" type="video/ogg">--}}
                    </video>
                </div>
                <div class="intro-message">
                    <h1>Get the information you need <i class="fa fa-connectdevelop"></i></h1>
                    <h3>Seeing the data your business needs in order to succeed, shouldn't be hard. </h3>
                    <hr class="divider-md">
                    <a href="https://twitter.com/SBootstrap" class="btn btn-success btn-action">Get started</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /.intro-header -->

    <!-- Page Content -->

    <a  name="services"></a>
    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">What is Standard Promo App?<br>First, a special thanks</h2>
                    <p class="lead"> <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a> for providing the photographs that you see in this template. Visit their website to become a member.</p>
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/ipad.png" alt="">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-section-a -->

    <div class="content-section-b">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-lg-offset-1 col-sm-push-6  col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">How does it work?<br>a question...</h2>
                    <p class="lead">Turn your 2D designs into high quality, 3D product shots in seconds using free Photoshop actions by <a target="_blank" href="http://www.psdcovers.com/">PSDCovers</a>! Visit their website to download some of their awesome, free photoshop actions!</p>
                </div>
                <div class="col-lg-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/dog.png" alt="">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-section-b -->

    <div class="content-section-a">
        <div class="container">
            <div class="row">
                <div class="col-lg-5 col-sm-6">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">How do I get started?</h2>
                    <p class="lead">We know there are a ton of devices on the planet and guess what, we've thought of every one of you!</p>
                    {{ link_to('#', 'Find out how to get started', ['class' => 'btn btn-primary btn-action', 'target' => '_blank'], $secure = null) }}
                </div>
                <div class="col-lg-5 col-lg-offset-2 col-sm-6">
                    <img class="img-responsive" src="img/phones.png" alt="">
                </div>
            </div>
        </div>
        <!-- /.container -->
    </div>
    <!-- /.content-section-a -->

    <a name="download"></a>


@stop