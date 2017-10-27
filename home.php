<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>McGill Tech Fair</title>
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link href="css/bootstrap.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="js/bootstrap.js"></script>
	<script src="logic.js"></script>
	<link href="style.css" rel="stylesheet">

	<script>
		function movetolink(obj) {
			var scrollpos = $("#" + obj).position();
			var scrollpos1 = scrollpos.top+10;
			$("body").animate({scrollTop: scrollpos1}, "slow");
			if (screensize < 800) {
				$('.navbar-toggle').click();
			}
		}
	</script>
</head>
<body id="grad">
	<nav class="navbar navbar-default" style="margin-bottom: 0px">
		<div class="container-fluid">
			<div class="navbar-header">
				<a class="navbar-brand" href="home.html"><span><h3 id="brand">McGill TechFair</h3></span></a>
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
				data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</div>

		<!-- NAVBAR Medium+ SCREENS-->


		<div class="collapse navbar-collapse navbar-" id="bs-example-navbar-collapse-1">

			<!-- LEFT NAVBAR-->


			<ul class="nav navbar-nav">

				<li>
					<a class="hvr-underline-from-center" onclick="movetolink('about1')">
						<h5 style="padding-bottom: 5px; margin: 0px; color: white;">About</h5>
					</a>
				</li>

				<li>
					<a class="hvr-underline-from-center" onclick="movetolink('employers')">
						<h5 style="padding-bottom: 5px; margin: 0px; color: white;">Employers</h5>
					</a>
				</li>

				<li>
					<a class="hvr-underline-from-center" onclick="movetolink('students')">
						<h5 style="padding-bottom: 5px; margin: 0px; color: white;">Students</h5>
					</a>
				</li>
			</ul>

			<!-- RIGHT NAVBAR-->

			<ul class="nav navbar-nav navbar-right" style="margin-right: 20px;">

				<li>
					<a class="hvr-underline-from-center" target="_blank" href="https://engineering.myfuture.mcgill.ca/events/aa3e444cebeeec197243383fefc42f6d/overview">
						<h5 style="padding-bottom: 5px; margin: 0px; color: white;">myFuture</h5>
					</a>
				</li>

				<li>
					<a class="hvr-underline-from-center" onclick="movetolink('team')">
						<h5 style="padding-bottom: 5px; margin: 0px; color: white;">Team</h5>
					</a>
				</li>

				<li>
					<a class="hvr-underline-from-center" onclick="movetolink('contact')">
						<h5 style="padding-bottom: 5px; margin: 0px; color: white;">Contact</h5>
					</a>
				</li>

			</ul>



			<div class="clearfix"></div>


		</div>
	</div>
</nav>

<div class="w3-content w3-section" style="max-width:100%;">
	<img class="mySlides w3-animate-fading" src="ban2.jpg" style="width:100%; height:95vh; ">
	<img class="mySlides w3-animate-fading" src="ban1.jpg" style="width:100%; height:95vh; ">
</div>

<script>
	var myIndex = 0;
	carousel();

	function carousel() {
		var i;
		var x = document.getElementsByClassName("mySlides");
		for (i = 0; i < x.length; i++) {
			x[i].style.display = "none";
		}
		myIndex++;
		if (myIndex > x.length) {myIndex = 1}
			x[myIndex-1].style.display = "block";
		setTimeout(carousel, 9000);
	}
</script>


<!-- ABOUT -->


<div class="container-fluid section1" style="padding-bottom: 20px; margin-bottom: 20px; min-height:100vh;">
	<div class="row" id="about1">
		<div class="container" style="padding-bottom: 20px; margin-bottom: 20px">

			<h1>About us</h1>

			<!-- CONTENT -->

			<!-- REPTITION  1 -->


			<div class="col-sm-12 boxText" style="padding: 50px">
				<p>Welcome to McGill University TechFair is a collaborative effort combining the resources and
					expertise of the Engineering Career Centre (ECC), the Engineering Student Society (EUS)
					and the Computer Science Student Society (CSUS). Created in the year 2000, the TechFair
					intends to connect McGill students in Engineering, Computer Science and Physical Sciences
					with the top employers in the field for the purpose of exploring career and/or internship opportunities.
				</p><p>Get involved! We are looking for bright Volunteers to help us run the event, click here to Volunteer
					: click <a href="#">here</a></p>

					<p class="float-left"> Note to Students (mandatory for entry):
						<ul>
							<div class="float-right">
								<li><b>Only</b> McGill students will be granted entry with their McGill ID card</li>
								<li>All bags and coats <b>MUST</b> be left at the designated Coat Check</li>
							</div>
						</ul>
						<div style="clear:both">
						</br>
						** For the full list of
						participating employers, log onto myFuture: Engineering Students: click <a href="#">here</a>. All other students:
						click <a href="#">here</a>.
					</div>
				</p>
			</div>

			<!-- CIRCLES -->


			<div class="about-grids" style="padding: 70px;">



<!--         <div class="col-sm-4">
            <div class="icons">
                <i class="glyphicon glyphicon-cloud" aria-hidden="true"></i>
            </div>
            <h4 class="iconD">Explore</h4>
        </div>
    -->
    <div class="col-sm-12">
    	<div class="icons" style="padding-top: 0px">
    		<a href="https://engineering.myfuture.mcgill.ca"><i class="glyphicon glyphicon-book" aria-hidden="true"></i></a>
    	</div>
    	<h5>Registere here at<br>myFuture</h5>
    </div>

<!--         <div class="col-sm-4">
            <div class="icons">
                <i class="glyphicon glyphicon-magnet" aria-hidden="true"></i>
            </div>
            <h4 class="iconD">Network</h4>
        </div>

        <div class="col-sm-4">
            <div class="icons">
                <i class="glyphicon glyphicon-heart" aria-hidden="true"></i>
            </div>
            <h4 class="iconD">Career</h4>
        </div>
    -->
</div>
</div>
</div>
</div>
<div class="container-fluid section2" style="min-height:100vh;" id="employers">
	<div class="row">
		<div class="container" style="padding-bottom: 0">
			<h1>Employers</h1>
			<div class=col-md-6>
				<div class="card">
					<div class="cardImage">
						<img src="card2.jpg" class="img img-responsive">
					</div>
					<div class="cardHead">
						<h3 style="color: white;">Why Should You Attend?</h3>
					</div>
					<div class="cardText text-justify">

						<p>
							Whether you have job openings today or will have in the
							future, McGill students and alumni want to know more about your organization and potential careers. Reduce
							your time, effort, and recruitment costs. Reach out to 1000+ students each McGill TechFair day from the
							<ul>
								<li> Faculty of Engineering (all departemnts)</li>
								<li> Faculty of Science (Atmospheric & Oceanic Sciences,Chemistry/Biochemistry, Earth & Planetary Sciences
								(Geology), Geography Mathematics and Statistics Physics)</li>
								<li>School of Computer Science (all programs)</li>
								<br>
							</ul>
							<b>Please Note</b>: Attendance is restricted to
							organizations representing the recruiting needs of the participating organization. Promotion of products
							and/or services for any other purpose is not permitted.
						</p>

					</div>
					<div class="cardAction">
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<div class="card">

					<div class="cardImage">
						<img src="card2.jpg" class="img img-responsive">
					</div>
					<div class="cardHead">
						<h3 style="color: white;">Terms and Conditions</h3>
					</div>	
					<div class="cardText text-justify" style="line-height: 1.5em;">

						Unless a separate agreement is made (special cases), the organization should agree to the following upon registration:
						<ul>
							<li>Assumes all costs as outlined in the registration package and on the invoice. In case of any discrepancy between the invoice and the prices advertised, the advertised price prevails.</li>
							<li>Agrees to pay its full billed amount within 30 days of receiving the invoice from McGill University Financial Services.</li>
							<li>Agrees that all logistical procedures (including location, price and hours of the event) are entirely at the discretion of the Committee.</li>
							<li><b>Cancellation Policy :</b>  A full refund of all fees will be authorized as long as the cancellation request is received by the <u>deadline, Thursday, August 24, 2017</u></li>
							<li>Should the event be cancelled by the members of the Committee, the amount paid by the Organization for the registration will be reimbursed in full.</li>
							If you accept these terms, we invite you to <a href="#">REGISTER HERE</a>.
						</ul>
					</div>
					<div class="cardAction">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="container">
<!--
        <div class="col-md-4">
            <div class="boxImage card_image">
                <img src="card1.jpg" class="img img-responsive" style="height: 200px;">
            </div>
        </div> -->

        <div class="columns">
        	<ul class="price">
        		<li class="header">Basic</li>
        		<li class="grey">$600</li>
        		<li>Designated area of 8' deep by 10' wide. These dimensions cannot be exceeded.</li>
        		<li>Skirted table with white cloth and two chairs</li>
        		<li>One page company profile to appear in our Techfair Mobile APP</li>
        		<li>Coffee</li>
        		<li>Lunch for 3 (three) representatives.</li>
        		<li>The cost for food functions for each additional representative is $35. Number of representatives must be specified at registration</li>
        		<li>Internet, Electricity</li>

        		<li class="grey"><a href="#" class="button">Sign Up</a></li>
        	</ul>
        </div>

        <div class="columns">
        	<ul class="price">
        		<li class="header">Standard</li>
        		<li class="grey">$700</li>
        		<li>Designated area of 8' deep by 10' wide. These dimensions cannot be exceeded.</li>
        		<li>Skirted table with white cloth and two chairs</li>
        		<li>One page company profile to appear in our Techfair Mobile APP</li>
        		<li>Coffee</li>
        		<li>Lunch for 3 (three) representatives.</li>
        		<li>The cost for food functions for each additional representative is $35. Number of representatives must be specified at registration</li>
        		<li>Internet, Electricity</li>
        		<li><h4>PLUS</h4></li>
        		<li>Logo Printed on Poster</li>
        		<li>Logo featured on the TeN network</li>
        		<li class="grey"><a href="#" class="button">Sign Up</a></li>
        	</ul>
        </div>
        <div class="columns">
        	<ul class="price">
        		<li class="header">Premium</li>
        		<li class="grey">$800</li>
        		<li>Designated area of 8' deep by 10' wide. These dimensions cannot be exceeded.</li>
        		<li>Skirted table with white cloth and two chairs</li>
        		<li>One page company profile to appear in our Techfair Mobile APP</li>
        		<li>Coffee</li>
        		<li>Lunch for 3 (three) representatives.</li>
        		<li>The cost for food functions for each additional representative is $35. Number of representatives must be specified at registration</li>
        		<li>Internet, Electricity</li>
        		<li><h4>PLUS</h4></li>
        		<li><b>A reserved location - one of the most popular in the exhibition hall.</b></li>
        		<li>Logo Printed on Poster</li>
        		<li>Logo featured on the TeN network</li>
        		<li class="grey"><a href="#" class="button">Sign Up</a></li>
        	</ul>
        </div>
    </div>
</div>
<div class="container-fluid section1" id="students">
	<div class="row">
		<div class="container" style="padding-bottom: 0">
			<h1>Students</h1>

			<div class="col-md-6">
				<div class="card">
					<div class="cardImage">
						<img src="card2.jpg" class="img img-responsive" style="width: 100%; linear-gradient(rgba(0, 0, 0, 0.5);">
					</div>
					<div class="cardHead">
						<h3 style="color: white;">Why Should You Attend?</h3>
					</div>
					<div class="cardText">
						The McGill University Engineering and Technology Career Fair provides an excellent occasion for you,
						McGill students and recent graduates, to network with industry representatives and find out about
						jobs and internships.
						<br>
						By visiting company booths, you can:
						<br>
						<ul>
							<li>Network with potential employers</li>
							<li>Investigate and research career options</li>
							<li>Obtain information from employers on :
								<ul>
									<li>Career opportunities</li>
									<li>Education requirements</li>
									<li>Industry growth</li>
									<li>Industry trends</li>
									<li>Skills and qualifications</li>
								</ul>
							</li>
						</ul>

						<!-- REPTITION  1 -->

						<span><em>The McGill Techfair is open to current McGill students and alumni only. To enter the TechFair venue,
							you need to show:
							A valid McGill student ID card, or
							A photo ID and McGill student number (for alumni without a McGill ID card).
						Access is free for students and alumni.</em></span>
					</div>
					<div class="cardAction">
					</div>
				</div>
			</div>

			<!-- REPTITION  1 AGAIN , ALL PARAGRAPH REPEATED, CONSIDER DELETING ... -->


			<div class="col-md-6">
				<div class="card">
					<div class="cardImage">
						<img src="card2.jpg" class="img img-responsive" style="width: 100%;">
					</div>
					<div class="cardHead">
						<h3 style="color: #FFFFFF;">Volunteers</h3>
					</div>
					<div class="cardText">
						<span><em>We are seeking volunteers for Fall 2017 TechFair, register below.</em></span>
						<h3>Quick Links</h3>
						Click here to register as a volunteer.
						Make sure to include your name, year, email (separated by commas), and check all time slots that you are
						available.
						Important notes:
						Only McGill students and alumni are eligible to attend or volunteer.
						You will need to show a valid McGill student ID card or a photo ID with McGill student number to be given
						access to the venue
						No food, drinks, coats or backpacks are allowed at the Techfair venue.
						Volunteer meeting is onTBC. This meeting is mandatory and all students are required to attend it!
					</div>
					<div class="cardAction">
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="container">
			<div class="col-md-4">
				<div class="boxImage">
					<img src="card1.jpg" class="img img-responsive" style="height: 200px;">
				</div>
			</div>
			<div class="col-md-8">
				<div class="boxText">
					<h3>Preparing for the TechFair</h3>
					There are a lot of things that you can do to prepare for meeting a potential employer. Here are a few
					suggestions.

					<em>Before you go to the TechFair make sure that you:</em>
					<ul>
						<li>Download the Techfair Mobile APP to research the employers that will be participating or view
							employer profiles through myFuture.
						</li>
						<li>Decide on employers that you want to target when at the TechFair</li>
						<li>Decide on employers that you want to target when at the TechFair</li>

						<li>Prepare a list of questions to ask the employers  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;     &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp;  &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp;&nbsp;
							<a data-toggle="modal" href="#myModal1">Read more...</a></li>

						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid section2" id="team">
		<div class="row" >
			<div class="container">
				<h1>Team</h1>
				<div class="col-md-2">
					<div class="conti">
						<img src="team.png" class="img img-responsive">
						<div class="overlay">
							<div class="text">Parth Khanna</div>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="conti">
						<img src="team.png" class="img img-responsive">
						<div class="overlay">
							<div class="text">Parth Khanna</div>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="conti">
						<img src="team.png" class="img img-responsive">
						<div class="overlay">
							<div class="text">Parth Khanna</div>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="conti">
						<img src="team.png" class="img img-responsive">
						<div class="overlay">
							<div class="text">Parth Khanna</div>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="conti">
						<img src="team.png" class="img img-responsive">
						<div class="overlay">
							<div class="text">Parth Khanna</div>
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<div class="conti">
						<img src="team.png" class="img img-responsive">
						<div class="overlay">
							<div class="text">Parth Khanna</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="container-fluid" id="contact" style="background-color: #a8f0ed; padding-bottom: 20px; margin-bottom: 20px">
		<div class="row">
			<div class="container"  style="padding-bottom: 10px; margin-bottom: 10px">
				<div class="col-md-6">
					<h2>Contact us</h2><br>
                    <!-- <div class="form-group">
                        Name:
                        <input type="text" placeholder="Enter name here" class="form-control">
                        Email ID:
                        <input type="text" placeholder="Enter email id here" class="form-control">
                        Message:
                        <textarea type="text" placeholder="Enter message here" class="form-control" style="height: 150px;"></textarea><br>
                        <input type="button" value="Send" class="btn btn-success">
                    </div> -->
                <form action="https://formspree.io/parth.khanna@mail.mcgill.ca"
                    method="POST">
                    <input type="text" name="name">
                    <input type="email" name="_replyto">
                    <input type="submit" value="Send">
                </form>
            </div>
            <div class="embed-responsive embed-responsive-16by9 col-md-6 map" style="padding: 200px">
            	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2796.2220051709483!2d-73.5773791!3d45.5056094!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4cc91a47bf4ad25d%3A0x8bac16f1d6983cdd!2sF.+D.+Adams+Building!5e0!3m2!1sen!2sin!4v1497338696411" frameborder="0" style="border:0; padding: 30px; height: 450px;" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="about-grids">
    	<div class="col-sm-6">
    		<div class="icons" style="padding-top: 0px">
    			<i class="glyphicon glyphicon-phone" aria-hidden="true"></i>
    		</div>
    		<h5>Tel: (514) 398-6884 <br> Fax: (514) 398-2169</h5>
    	</div>
    	<div class="col-sm-6">
    		<div class="icons" style="padding-top: 0px">
    			<a href="http://www.mcgill.ca/careers4engineers/"><i class="glyphicon glyphicon-link" aria-hidden="true"></i></a>
    		</div>
    		<h5>Our Website at <br>Careers4Engineers</h5>
    	</div>
    </div>
</div>
<footer class="container-fluid foot">
	<p id="copyright">Copyright &copy; McGill Tech Fair</p>
</footer>

<div class="gotop" onclick="movetolink('grad')"><span class="glyphicon glyphicon-eject"></span></div>

<div >
	<a target="_blank" href="https://www.facebook.com/mcgilltechfair/"><img src="fb.png" class="fb"></a>
</div>


<div class="textontop">
	<h3>Welcome to </h3>
	<h1>McGill Tech Fair</h1>

</div>
<div class="modal fade" id="myModal1" role="dialog" style="top:30px;">
	<div class="modal-dialog" style="width: 70%;">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Preparing for the TechFair</h4>
			</div>
			<div class="modal-body">

				There are a lot of things that you can do to prepare for meeting a potential employer. Here are a few
				suggestions.

				<em>Before you go to the TechFair make sure that you:</em>
				<ul>
					<li>Visit the Engineering Career Centre for assistance in preparing for theTech Fair (You can also
						download our TechFair Tips handout). Students from other faculties can visit their respective career
						centres (full list available at http://www.mcgill.ca/caps/other-centres/).
					</li>
					<li>Download the Techfair Mobile APP to research the employers that will be participating or view
						employer profiles through myFuture.
					</li>
					<li>Decide on employers that you want to target when at the TechFair</li>
					<li>Prepare a list of questions to ask the employers</li>
				</ul>
				<em>When you go to the TechFair make sure that you:</em>
				<ul>
					<li>Dress and conduct yourself professionally</li>
					<li>Exude enthusiasm and self-confidence</li>
					<li>Stay positive</li>
				</ul>
				<em>Take advantage of this opportunity to obtain first-hand information about careers which interest you.
				Consider asking the following questions:</em>
				<ul>
					<li>What types of jobs does your company/organization have for university and college graduates?</li>
					<li>What academic background (major, program, courses) will be most helpful to me in preparing to enter
						this field?
					</li>
					<li>What kind of work experience, either part-time or internship, will be helpful to me?</li>
					<li>Are there internship opportunities in this field?</li>
					<li>What are typical entry-level positions in this field? What duties and responsibilities do these
						positions entail?
					</li>
					<li>How important is having "relevant" work experience when being considered for employment?</li>

				</li>
				<li>What advice do you have for a university or college graduate entering this field?</li>
			</ul>

			<em>You can also attend one of our TechFair Tips workshops – for schedule of all workshops, log on to
			myFuture and select Events/Workshops.</em>



		</div>
		<div class="modal-footer">
			<button type="button" class="btn btn-default" style="background-color: #BE4157" data-dismiss="modal">Close</button>
		</div>
	</div>

</div>
</div>
</body>
</html>
<!-- -->
