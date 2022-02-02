<!DOCTYPE html>
<html>
<head>
	<link
	rel="stylesheet"
	href=
"https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
	/>
	<link
	rel="stylesheet"
	href=
"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
	/>
	<!-- <link rel="stylesheet" href="style.css" />
 -->
 <style>
    #last{
    width: 100%;
    height: auto;
    justify-content: center;
    background-color: #35589A;
    }
    .full{
    width: 80%;
    display: inline-block;
    margin:2%;
    margin-left: 10%;
    text-align: center;
    background-color: black;
    color: white;
    border:15px solid #000;
    border-radius: 5px;
    margin-bottom: 8%;
    margin-top: 8%;
    }
    .full h3{
    font-size: 2rem;
    display:block;
    margin: 2%;
    margin-bottom: 0;
    }
    .lt{
    padding: 2%;
    margin: 2%;
    }
    .rt{
    padding: 2%;
    margin: 2%;
    }
    .lt textarea{
    width: 94%;
    margin-left: 2.8%;
    }
    button{
    margin: 2%;
    }
    .btn-primary{
    background-color: black;
    border: 2px solid white;
    border-radius: 5%;
    }
    .list-item{
    margin-bottom: 2%;
    list-style-type: none;
    }
    .list-item span{
    margin-left: 10px;
    font-size: 1.4rem;
    }
    .list-item a{
    color: white;
    display: inline-block;
    }
    .list-item a:hover{
    text-decoration: underline;
    }
    .form-control{
    background-color: black;
    }
        
    @media screen and (min-width: 770px){
    .full{
        width: 70%;
        margin-left: 15%;
    }
    .lt textarea{
    width: 95%;
    margin-left: 2.4%;
    }
    }
        
    @media screen and (min-width: 1100px){
    .full{
        width: 65%;
        margin-left: 17%;
        margin-top: 5%;
    }
    .lt{
        width: 55%;
        display: inline-block;
        float: left;
        margin-right: 0;
    }
    .rt{
        width: 35%;
        display: inline-block;
        margin-left: 0;
    }
    .list-item{
    margin-bottom: 10%;
    }
    .contact-list{
        margin-top: 22%;
        padding-right: 8%;
    }
    .fa-envelope, .gmail{
        display: inline-block;
        width: auto;
    }
    }
    
</style>
</head>
<body>
    <!-- ====nav bar starts=== -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: white;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" style="font-size:1.25rem">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="home.php"><b>Home</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php"><b>Test</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><b>Contact Us</b></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="logout.php"><b>Logout</b></a>
                    </li>
                    <!-- <li class="nav-item">
                                                            <a class="nav-link disabled">Results</a>
                                                  </li> -->
                </ul>

            </div>
        </div>
        <div class="greet" id="greet" style="font-weight: 700;font-size: 1.5rem;float:right;padding-right:1rem;">
            Welcome!</div>
    </nav>
    <!-- ====Nav Bar ends==== -->
	<section id="last">
	<!-- heading -->
	<div class="full">
		<h3>Drop a Message</h3>

		<div class="lt">

		<!-- form starting -->
		<form class="form-horizontal"
				method="post" action="contact.php">
			<div class="form-group">
			<div class="col-sm-12">
				<!-- name -->
				<input
				type="text"
				class="form-control"
				id="name"
				placeholder="NAME"
				name="name"
				value=""
				/>
			</div>
			</div>

			<div class="form-group">
			<div class="col-sm-12">
				<!-- email -->
				<input
				type="email"
				class="form-control"
				id="email"
				placeholder="EMAIL"
				name="email"
				value=""
				/>
			</div>
			</div>

			<!-- message -->
			<textarea
			class="form-control"
			rows="10"
			placeholder="MESSAGE"
			name="message">
			</textarea>

			<button
			class="btn btn-primary send-button"
			id="submit"
			type="submit"
			value="SEND">
			<i class="fa fa-paper-plane"></i>
			<span class="send-text">SEND</span>
			</button>
		</form>
		<!-- end of form -->
		</div>

		<!-- Contact information -->
		<div class="rt">
		<ul class="contact-list">
			<li class="list-item">
			<i class="fa fa-map-marker fa-1x">
				<span class="contact-text place">
				Shivajinagar,Pune
				</span>
			</i>
			</li>

			<li class="list-item">
			<i class="fa fa-envelope fa-1x">
				<span class="contact-text gmail">
				<a href="mailto:chinmayeenk4702@gmail.com" title="Send me an email">
					prayaas@gmail.com</a>
				</span>
			</i>
			</li>

			<li class="list-item">
			<i class="fa fa-phone fa-1x">
				<span class="contact-text phone">
				(033) 12345678
				</span>
			</i>
			</li>
		</ul>
		</div>
	</div>
	</section>
</body>
</html>
</body>
</html>