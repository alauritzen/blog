<!DOCTYPE html>
<html>
<head>
    <title>Resume</title>
    <meta charset="utf-8">
    <!-- Add meta below per W3 schools, to ensure proper rendering and touch zooming; www.w3schools.com/bootstrap/bootstrap_get_started.asp -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
<!-- My stylesheet -->
<link rel="stylesheet" href="css/resume_style.css">
<!-- Font Awesome stylesheet -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.1/css/font-awesome.min.css">

</head>

<body>

    <!-- Collapsible navbar -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
        <!-- Left-side contact info and toggle button -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#collapsing_navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <ul class="list-unstyled personal">
                    <li><h1>Alan Lauritzen</h1></li>
                    <li><h2>San Antonio, TX</h2></li>
                    <ul class="list-unstyled icons">
                        <li><a href="mailto:alaurit@gmail.com"><i class="fa fa-paper-plane" aria-hidden="true"></i></a></li>
                        <li><a href="http://github.com/alauritzen" target="_blank"><i class="fa fa-github" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/in/alan-lauritzen-02a078104" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                        <li><a href="#" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                    </ul>
                </ul>
            </div>

        <!-- Right-side links that will be toggled -->
            <div class="collapse navbar-collapse" id="collapsing_navbar">          
                <ul class="nav navbar-nav navbar-right links">
                    <li><a href="#about_me">About me</a></li>
                    <li><a href="#work_history">Work history</a></li>
                    <li><a href={{ action('HomeController@showPortfolio') }}>Portfolio</a></li>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div>
    </nav> <!-- End nav bar -->

    <div class="container">
        <!-- about me -->
        <div class="row about_me">
            <!-- Summary of qualifications -->
            <div class="col-md-8 summary">
                <a id="about_me"></a>
                <h3>Summary of Qualifications</h3>
                <p>Customer-focused, result-oriented leader with experience in a fast-paced work environment. Thoughtful decision-maker experienced in balancing varied priorities. Tactful communicator, detail-oriented, self-motivated, versatile, hardworking, adaptable and resourceful.</p>
                    <!-- Nest education here col-md-12 -->
                    <div class="row education">
                        <div class="col-md-12">
                            <h3>Education</h3>
                            <p class="codeup"><a href="http://codeup.com" target="_blank">Codeup</a> San Antonio, Full-Stack Bootcamp, 2016.<p>
                            <p>University of Texas at Austin, B.A. History, 2009.</p>
                        </div>
                    </div> <!--End education -->
            </div>

            <!-- Technologies -->
            <div class="col-md-4 technologies">
                <h3>Technologies</h3>
                <!-- in table form -->
                <table class="table table-striped">
                    <tr>
                        <td>HTML</td>
                        <td><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span></li></td>
                    </tr>
                    <tr>
                        <td>CSS</td>
                        <td><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></td>
                    <tr>
                        <td>Javascript</td>
                        <td><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-  empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span></td>
                    </tr>
                    <tr>
                        <td>jQuery</td>
                        <td><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-  empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span></td>
                    </tr>
                    <tr>
                        <td>PHP</td>
                        <td><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span></td>
                    </tr>
                    <tr>
                        <td>Laravel</td>
                        <td><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span></td>
                    </tr>
                    <tr>
                        <td>MySQL</td>
                        <td><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span><span class="glyphicon glyphicon-star-empty"></span></td>
                    </tr>
                </table>
            </div> <!-- End technologies -->
        </div> <!--End about me section -->


        <!-- Begin jumbotron -->
    </div>
    <div class="container-fluid">
        <div id="carousel_locations" class="carousel slide" data-ride="carousel">
          <!-- Indicators -->
          <ol class="carousel-indicators">
            <li data-target="#carousel_locations" data-slide-to="0" class="active"></li>
            <li data-target="#carousel_locations" data-slide-to="1"></li>
            <li data-target="#carousel_locations" data-slide-to="2"></li>
            <li data-target="#carousel_locations" data-slide-to="3"></li>
          </ol>

          <!-- Wrapper for slides -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <img src="img/bluebonnets.jpeg" alt="bluebonnets">
              <div class="carousel-caption">
                Texas native
              </div>
            </div>
            <div class="item">
              <img src="img/coop.jpg" alt="University Coop">
              <div class="carousel-caption">
                Worked 13 years at the University Coop
              </div>
            </div>
            <div class="item">
              <img src="img/UT_Austin.jpg" alt="University of Texas at Austin">
              <div class="carousel-caption">
                Completed History degree at UT Austin
              </div>
            </div>
            <div class="item">
              <img src="img/mission.jpg" alt="Mission in San Antonio">
              <div class="carousel-caption">
                Moved to San Antonio in late 2014
              </div>
            </div>
          </div>

          <!-- Controls -->
          <a class="left carousel-control" href="#carousel_locations" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="right carousel-control" href="#carousel_locations" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div>
    <div class="container">
        <!-- End jumbotron -->

        <!-- Work history begins -->
        <a id="work_history"></a>
        <div class="row work_history">
            <div class="col-md-12">
                <h3>Work history</h3>
            </div>
            <!-- Begin Hillyard -->
            <div class="col-md-4 hillyard">
                <h4>Hillyard</h4>
                <p>Texas sales/warehousing branch; San Antonio, TX<br>
                Janitorial/chemical supplier<br>
                Last position: Purchaser/machine service coordinator/customer service</p>
                <button data-toggle="collapse" data-target="#hillyard_duties">Duties</button>
                <div id="hillyard_duties" class="collapse">
                    <dl>
                        <dt>Purchaser/ machine service coordinator/customer service representative</dt>
                        <dd>Dec 2015-Feb 2016</dd>
                        <dt>Customer service representative/machine service coordinator</dt>
                        <dd>Aug 2015-Dec 2015</dd>
                        <dt>Warehouse laborer/customer service representative</dt>
                        <dd>Apr 2015-Aug 2015</dd>
                    </dl>
                    <ul class="job_description">
                        <li>Adapted quickly to SAP, taking on advanced roles in the branch’s operations.</li>
                        <li>First point of contact for up to 40-60 calls a day.</li>
                        <li>Assist customers and account managers by entering orders and quotes, creating returns and coordinating return shipments, tracking deliveries, providing order confirmations and account statements, processing credit card payments, and communicating with machine service companies to schedule repair calls.</li>
                        <li>Pull and palletize product in the warehouse using an electric order picker, pack and ship small orders using UPS Worldship.</li>
                    </ul>
                </div>
            </div>
            <!-- End Hillyard -->

            <!-- Begin Walmart -->
            <div class="col-md-4 walmart">
                <h4>Walmart</h4>
                <p>Distribution center; New Braunfels, TX<br>
                Last position: Unloader</p>
                <button data-toggle="collapse" data-target="#walmart_duties">Duties</button>
                <div id="walmart_duties" class="collapse">
                    <dl>
                        <dt>Unloader</dt>
                        <dd>Jan 2015-April 2015</dd>
                    </dl>
                    <ul class="job_description">
                        <li>Unload trailers using a stand-up forklift or stand-up clamp. Label freight to identify its stocking location in the warehouse.</li>
                    </ul>
                </div>
            </div>
            <!-- End Walmart -->

            <!-- Begin Coop -->
            <div class="col-md-4 hillyard">
                <h4>University Cooperative Society</h4>
                <p>University bookstore; Austin, TX<br>
                Last position: Floor manager</p>
                <button data-toggle="collapse" data-target="#coop_duties">Duties</button>
                <div id="coop_duties" class="collapse">
                    <dl>
                        <dt>Floor manager</dt>
                        <dd>June 2013-Dec 2014</dd>
                        <dt>Shipping &amp; receiving clerk/supervisor</dt>
                        <dd>Oct 2002-June 2013</dd>
                        <dt>Temporary stock clerk</dt>
                        <dd>2001-2002</dd>
                    </dl>
                    <ul class="job_description">
                        <li>Proposed successful floor reorganization from class-based to alphabetical by author’s last name. This had little impact on customers’ shopping experience but greatly increased efficiency and accuracy for employees. Helped web order fulfillment improve their turnaround during peak days by 25% from the year before.</li>
                        <li>Used Excel and Word to redesign shelf tags for textbooks. Reduced generation time from 3-4 hours to 30-45 minutes. Incorporated rental pricing, which had not been available on the tags generated by our textbook software, and also improved accuracy and visibility.</li>
                        <li>Initiated sales of non-returnable overstock on Amazon.com and Half.com markets using Indaba software. This has allowed us to salvage over $290,000 since December 2011, and reduce inventory by over 13,700 books.</li>
                        <li>Hire, train, schedule, and evaluate up to 10+ seasonal and permanent employees during buyback and rush periods.</li>
                        <li>Direct workflow and supervise seasonal and permanent stock clerks to process upwards of $5 million of textbooks each semester over a 4-6 week period.</li>
                        <li>Use sales histories of textbooks to determine quantity and timing of incremental and final returns to vendors each semester.</li>
                        <li>Help customers find course materials and assist them in understanding various purchase options.</li>
                    </ul>
                </div>
            </div>

            <!-- End Coop -->




        </div>
        <!-- Work history ends -->



    </div>

<!-- jQuery snippet -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
</body>
</html>