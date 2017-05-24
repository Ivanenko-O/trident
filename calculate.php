<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

    <meta http-equiv="content-type" content="text/html; charset=utf-8"/>
    <meta name="author" content=""/>

    <!-- Stylesheets
    ============================================= -->
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,400italic,600,700|Raleway:300,400,500,600,700|Crete+Round:400italic|Play+Fair:700"
          rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="css/bootstrap.css" type="text/css"/>
    <link rel="stylesheet" href="css/style.css" type="text/css"/>
    <link rel="stylesheet" href="css/dark.css" type="text/css"/>
    <link rel="stylesheet" href="css/font-icons.css" type="text/css"/>
    <link rel="stylesheet" href="css/animate.css" type="text/css"/>
    <link rel="stylesheet" href="css/magnific-popup.css" type="text/css"/>

    <link rel="stylesheet" href="css/responsive.css" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Trident SoftLab | Pricing</title>

</head>

<body class="stretched">

<!-- Document Wrapper -->
<div id="wrapper" class="clearfix">


    <?php include("partials/header.php") ?>

    <section id="slider" class="slider-parallax dark" style="background: url('/images/bg2-01.jpg'); background-size: cover;" data-height-lg="350" data-height-md="350"
             data-height-sm="250" data-height-xs="250"
             data-height-xxs="250">
        <div class="slider-parallax-inner">
            <div class="clearfix" style="margin: 0px 5rem">
                <div class="vertical-middle center">

                    <div class="heading-block nobottomborder center">
                        <h1>
                            Сalculate your team of software developers
                        </h1>
                    </div>

                </div>
            </div>
        </div>
    </section>

    <!-- Content -->
    <section id="content">

        <div class="content-wrap">

            <div class="container clearfix">

                <div class="row clearfix">
                    <div class="col-md-12 bottommargin-sm center">
                        <h3>Add all needed specialists and click <span>count price of team</span> to know a necessary
                            funding.</h3>
                    </div>

                    <div class="clear"></div>

                    <div class="container dark bgcolor bottommargin-sm col-padding">
                        <div class="col_three_fourth nobottommargin">
                            <div class="col-md-4">

                                <label>Level</label>
                                <!--<input id="input-13" class="rating" data-size="md" data-glyphicon="false"-->
                                <!--data-rating-class="fontawesome-icon">-->
                                <select id="spec_lvl" class="sm-form-control">
                                    <option>Junior</option>
                                    <option>Middle</option>
                                    <option>Senior</option>
                                </select><br/>

                            </div>

                            <div class="col-md-4">

                                <label for="calc-spec">Specialist</label>
                                <select id="calc-spec" class="sm-form-control">
                                    <option disabled>-- Select One --</option>
                                </select>

                            </div>


                            <div class="col-md-4">

                                <label>Amount of developers</label>
                                <div class="quantity clearfix ">
                                    <input type="button" value="-" class="minus" id="delete">
                                    <span class="qty">2</span>
                                    <input type="button" value="+" class="plus" id="add">
                                </div>
                            </div>
                        </div>

                        <div class="col_one_fourth col_last center nobottommargin">
                            <br><button id="button_choose" class="button button-3d button-large button-rounded button-dark tright">Add specialist <i class="icon-check"></i></button>
                        </div>

                    </div>


                    <div class="col-md-12 bottommargin-lg">
                        <div class="fancy-title title-dotted-border title-center">
                            <h3>Pricing: </h3>
                        </div>
                        <div id="calc-result"
                             class=" col_half heading-block fancy-title nobottomborder title-bottom-border">
                            <p>You chose next team:</p>
                            <p id="salary_value">  <h4 id="log"></h4> </p>
                            <p id="contin_count"></p>
                        </div>
                        <div class="col_half col_last center">
                            <h3 id="funding"></h3>
                            <button id="button_clear" class="button button-3d button-large button-rounded button-red">Clear</button>
                            <button id="button_count" class="button button-3d button-large button-rounded">Count price of team</button>
                        </div>

                    </div>

                </div>

            </div>


            <div class="promo promo-dark promo-flat promo-full bottommargin">
                <div class="container clearfix">
                    <h3>Call us <span>+38 050 47 371 76</span> or Email us at <span>info@tridentsoftlab.com</span>
                    </h3>
                    <a href="contact-us.php" class="button button-xlarge button-rounded">Get in touch</a>
                </div>
            </div>

            <div class="back">
                <div class="container">
                    <div class="row bottommargin">
                        <h3>We propose the monthly salaries for your team members hired and maintained by our
                            services.</h3>
                        <div class="heading-block col-md-12">
                            <span class="before-heading color">The pricing include:</span>
                            <h3>No Hidden fees!</h3>
                        </div>


                        <div class="col-md-6">
                            <ul class="skills sm">

                                <li data-percent="70">
                                    <div class="title">Employee salary</div>
                                    <div class="progress">
                                        <div class="progress-percent">
                                            <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                                                                       data-to="65"
                                                                                                       data-refresh-interval="30"
                                                                                                       data-speed="1100"></span>%
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-percent="40">
                                    <div class="title">Maintenance and service staff accounts</div>
                                    <div class="progress">
                                        <div class="progress-percent">
                                            <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                                                                       data-to="10"
                                                                                                       data-refresh-interval="30"
                                                                                                       data-speed="1100"></span>%
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-percent="15">
                                    <div class="title">Maintaining employment under the legislation of Ukrainian laws</div>
                                    <div class="progress">
                                        <div class="progress-percent">
                                            <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                                                                       data-to="3"
                                                                                                       data-refresh-interval="30"
                                                                                                       data-speed="1100"></span>%
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="skills sm">
                                <li data-percent="30">
                                    <div class="title"> Maintenance and service staff banking data</div>
                                    <div class="progress">
                                        <div class="progress-percent">
                                            <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                                                                       data-to="7"
                                                                                                       data-refresh-interval="30"
                                                                                                       data-speed="1100"></span>%
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-percent="38">
                                    <div class="title"> Employees tax support and maintenance</div>
                                    <div class="progress">
                                        <div class="progress-percent">
                                            <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                                                                       data-to="8"
                                                                                                       data-refresh-interval="30"
                                                                                                       data-speed="1100"></span>%
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li data-percent="30">
                                    <div class="title"> Account manager for the team which include:</div>
                                    <div class="progress">
                                        <div class="progress-percent">
                                            <div class="counter counter-inherit counter-instant"><span data-from="0"
                                                                                                       data-to="7"
                                                                                                       data-refresh-interval="30"
                                                                                                       data-speed="1100"></span>%
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>

                        </div>


                    </div>

                    <div class="row">
                        <h2 class="center">We are able to provide your team with the office space.

                        </h2>
                        <div class="col_one_third">
                            <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-crop i-alt"></i></a>
                                </div>
                                <h3>Eligible repairs for Ukrainian market
                                </h3>
                            </div>
                        </div>

                        <div class="col_one_third">
                            <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-tint i-alt"></i></a>
                                </div>
                                <h3>Monthly tariffs for heating, electricity, water are included.

                                </h3>
                            </div>
                        </div>

                        <div class="col_one_third col_last">
                            <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                                <div class="fbox-icon">
                                    <a href="#"><i class=" icon-eye i-alt"></i></a>
                                </div>
                                <h3>Office management is included (security, cleanup, repairs);
                                </h3>
                            </div>
                        </div>

                        <div class="clear"></div>

                        <div class="col_one_third ">
                            <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-ok i-alt"></i></a>
                                </div>

                                <h3>Meeting room for your collaborations;<span class="subtitle">Regular office desks with chairs;</span></h3>
                            </div>
                        </div>

                        <div class="col_one_third ">
                            <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-thumbs-up i-alt"></i></a>
                                </div>
                                <h3>Fully equipped kitchen (refrigerator, microwave, kettle);<span class="subtitle">Cookies, snacks, tea, coffee in any quantity for employees;</span>
                                </h3>
                            </div>
                        </div>

                        <div class="col_one_third  col_last">
                            <div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
                                <div class="fbox-icon">
                                    <a href="#"><i class="icon-text-width i-alt"></i></a>
                                </div>
                                <h3>10-12 square meters per employee;<span class="subtitle">Regular technical support;</span>
                                </h3>
                            </div>
                        </div>

                    </div>

                </div>
            </div>

    </section><!-- #content end -->

    <!-- Footer -->
    <?php include("partials/footer.php") ?>
    <!-- #footer end -->

</div><!-- #wrapper end -->

<!-- Go To Top -->

<div id="gotoTop" class="icon-angle-up"></div>


<!-- External JavaScripts -->
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/calculate.js"></script>
<script type="text/javascript" src="js/plugins.js"></script>

<!-- Footer Scripts -->
<script type="text/javascript" src="js/functions.js"></script>

</body>
</html>