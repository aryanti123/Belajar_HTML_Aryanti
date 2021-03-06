<?php
	include_once 'db_connection.php';
	$result = mysqli_query($link,"SELECT * FROM produk");
?>

<!DOCTYPE>
<html>
	<head>
        <style>
    
    /* Navbar */
            .nav-bckgrd ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            overflow: hidden;
            background-color: rgb(54, 48, 48);
		    }
		
	        .nav-kiri li {
            float: left;
		    }
		
	        .nav-font li a {
            display : block;
        	color : white;
        	padding : 18px 20px;
        	text-align : center;
	        text-decoration : none;
	        font-family : Helvetica;
	        font-size : 18px
		    }
		
	        .nav-hover li a:hover:{
	        background-color : #111;
            color: white;
	        }
	
	        .active2{
	        background-color : #04AA6D
	        }
	
	        .nav-kanan .class{
	        float : right;
	        }

	        .carousel-inner{
	        image-orientation: 90deg;
	        border-image: repeat;
	        border-image-width: 100%;
	        }

    /* Card */
            .wrapper {
            display: flex;
            flex-wrap: wrap;
            gap: 30px;
            padding: 30px 30px;
            justify-content: center;
            }

            .wrapper>.card-wrapper {
            width: 200px;
            padding: 20px 30px;
            box-shadow: 0px 2px 6px 1px #53a089;
            text-align: center;
            border-radius: 20px;
            }

            .wrapper>.card-wrapper>img {
            width: 70px;
            border-radius: 100%;
            }

            .wrapper>.card-wrapper>button {
            border: none;
            background: none;
            outline: none;
            background: rgb(41, 37, 37);
            color: white;
            padding: 10px 20px;
            border-radius: 10px;
            margin-top: 20px;
            }
			
	/* Tabel Produk */
			
			.produk-container{
			width: 100%;
			margin: 0 auto;
			}
						
			div.main{
			width: 100%;
			padding: 10px 50px 30px;
			font-family: raleway;
			float: left;
			margin-top: 15px;
			}
			
			.produk-container h2{
			background-color: #f28d8d;
			padding: 30px 30px;
			margin: -10px -50px;
			text-align: center;
			color: #fff;
			}
			
			.produk-container hr{
			margin: 10px -50px;
			border: 0;
			border-top: 1px solid #ccc;
			margin-bottom: 25px;
			}
			
			table {
			margin: 0px;
			font-family: arial, sans-serif;
			border-collapse: collapse;
			width: 100%;
			}
			
			.produk-container td, th {
			border: 1px solid #dddddd;
			text-align: center;
			padding: 8px;
			}

						
    /* Footer */
            .footer-bckgrd {
				margin: 0px 0px;
				padding-top: 40px;
				padding-bottom: 20px;
				padding-left: 80px;
				padding-right: 30px;
				color:#f0f9ff;
				background-color:#000000;
				bottom: 0;
			    width:100%;
			}

			.footer-bckgrd h1{
				margin-top:20px;
				padding: 0;
				font-weight:bold;
				font-size:35px;
				font-family: oswald;
				line-height: 200%;
				color: white;
			}

			.footer-bckgrd h4 {
				margin-top:40px;
				font-weight:bold;
				font-size:15px;
				font-family: 'Nunito', sans-serif;
				color: silver;
				line-height: 200%;
			}

			.footer-bckgrd h3 {
				margin-top:30px;
				border-bottom: solid silver;
				border-width: 1px;
				font-family: 'Nunito', sans-serif;
				font-size: 18px;
				color: silver;
				line-height: 250%;
				text-align: center;
			}

			.footer-bckgrd ul {
				margin: 0px;
				padding: 0px;
				list-style:none;
				font-size:14px;
				font-family: 'Nunito', sans-serif;
				margin-bottom:0;
				line-height: 200%;
			}

			.footer-bckgrd ul a{
				padding: 0;
				text-decoration:none;
				color: rgb(122, 120, 120);
				line-height: 200%;
				font-family: 'Nunito', sans-serif;
				font-weight:bold;
			}

			.footer-bckgrd ul a:hover {
				opacity:0.8;
			}

			.footer-bckgrd .item.text {
				padding: 0;
				font-size: 14px;
				font-family: 'Nunito', sans-serif;
				color: rgb(122, 120, 120);
				line-height: 120%;
				font-weight:bold;
			}

			.footer-bckgrd .copyright {
				text-align:left;
				padding-top:50px;
				font-size:14px;
				margin-bottom:0;
				color: rgb(122, 120, 120);
				font-family: 'Nunito', sans-serif;
				font-weight: bold;
			}

			.footer-bckgrd .right{
				padding-left:20%;
				padding-right: 12%;
			}

			.silver{
				color: silver;
				line-height: 100%;
			}

        </style>
        
        <title>All in one</title>
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </head>
    
    <body>

        <!-- Bagian Navbar-->

            <nav class="nav-bckgrd nav-kiri nav-font nav-hover">
                <div>

                    <ul>
                        <li><a class="active2" href="#">Home</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Contact</a></li>
                        <li class="class"><a href="@about">About</a></li>
                    </ul>

                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                          <div class="carousel-item active">
                            <img src="img/1.jpg" class="d-block w-100 h-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/2.jpg" class="d-block w-100 h-100" alt="...">
                          </div>
                          <div class="carousel-item">
                            <img src="img/3.jpg" class="d-block w-100 h-100" alt="...">
                          </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                          <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                          <span class="carousel-control-next-icon" aria-hidden="true"></span>
                          <span class="sr-only">Next</span>
                        </a>
                        
                      </div>
                  
                </div>
            </nav>

        <!-- Bagian Card -->
            
            <div class="container">
                <div class="wrapper">
                    <div class="card-wrapper">
                        <img src="img_3/1.jpg" alt="">
                        <h3>First</h3>
                        <span>CEO</span> <br>
                        <button>Contact</button>
                    </div>
                    <div class="card-wrapper">
                        <img src="img_3/2.jpg" alt="">
                        <h3>Second</h3>
                        <span>DIRECTUR</span> <br>
                        <button>Contact</button>
                    </div>
                    <div class="card-wrapper">
                        <img src="img_3/3.jpg" alt="">
                        <h3>Third</h3>
                        <span>MANAGER</span> <br>
                        <button>Contact</button>
                    </div>
    
                </div>
            </div>
			
		<!-- Bagian Tabel Produk -->
		
		<div class="produk-container">
			<div class="main">
						
		<?php
		if (mysqli_num_rows($result) > 0) {
		?>
			<h2> Tabel Produk </h2><hr/>
		<table> 
			<tr>
				<td>Name</td>
				<td>Quantity</td>
				<td>Price</td>
				<td>Description</td>
			</tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
			<tr>
				<td><?php echo $row["nama"]; ?>
				<td><?php echo $row["quantity"]; ?></td>
				<td><?php echo $row["price"]; ?></td>
				<td><?php echo $row["description"]; ?></td>
			</tr>
			<?php
			$i++;
			}
			?>
		</table>
		<?php
		}
		else{
			echo "No result found";
		}
		?>

		</br>
		</br>
		
        <!-- Bagian Footer -->
            
            <div class="footer-bckgrd">
			    <footer>
				    <div class="row">
    					<div class="col-md-3 item text">
	    					<h1>ENVOY</h1>
		    				<p>We create possibilities</p> 
	    					<p>for the connected world.</p>
	    					<p class="silver">Be Bold.</p>
		    			</div>
	    				<div class="col-md-4">
	    					<div class="row">
	    						<div class="col-5 item text">
	    							<h4>Explore</h4>
	    							<ul>
	    								<li><a href="#">Home</a></li>
	    								<li><a href="#">About</a></li>
	    								<li><a href="#">Capabilities</a></li>
    									<li><a href="#">Careers</a></li>
    								</ul>
    							</div>
    							<div class="col-7 item text">
    								<h4>Visit</h4>
    								<p>Envoy So. California</p> 
    								<p>34 Tesla, Ste 100</p>
    								<p>Irvine, Ca, USA 92618</p>
    								<h4>New Business</h4>
    								<P>engage@wearenvoy.com</P>
    								<p>949.333.3106</p>
    							</div>
    						</div>
    					</div>
    					<div class="col-md-5">
    						<div class="row">
	    						<div class="col-3 item text">
	    							<h4>Follow</h4>
	    							<ul>
	    								<li><a href="#">Instagram</a></li>
	    								<li><a href="#">Twitter</a></li>
    									<li><a href="#">LinkedIn</a></li>
    								</ul>
    							</div>
    							<div class="col-3 item text">
    								<h4>Legal</h4>
    								<ul>
    									<li><a href="#">Term</a></li>
    									<li><a href="#">Privacy</a></li>
      								</ul>
    							</div>
        							<div class="col-6 item right">
	    							<h3>Next: About</h3>
	    						</div>
     						</div>
	    				</div>
    				</div>
    				<div class="row">
    					<div class="col-md-10 item text">
       						<p class="copyright">?? 2020 Envoy. All Rights Reserved.</p>
	    				</div>
    				</div>
    			</footer>
    		</div>
                

    </body>


</html>