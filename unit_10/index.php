<!DOCTYPE html>
<html lang="en">
	<head>
			<meta name="viewport" content="width=device-width, initial-scale=1.0">
			<title>POPCO Organics</title>
			<link rel="stylesheet" type="text/css" href="css/style.css">
			<!--[if lt IE 9]>
            <script src="bower_components/html5shiv/dist/html5shiv.js"></script>
        <![endif]-->
        	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	</head>
	<body>
		<div id="wrapper">
			<header class="clearfix">
				<img src="images/popco_logo_v1_box.png" alt="The POPCO Logo" title="POPCO Logo">
				<nav>					          
					<a href="#cta">Order</a>
					<a href="#contact">Contact</a>
					<a href="#why_care">Products</a>
					<a href="#locals">About</a>
					<a href="#three_column">Support</a>
				</nav>
			</header>
			<main class="clearfix">
				<div id="hero">
					<section id="intro" class="clearfix">
						<h1 id="mh">Organic Fruit and Vegetable Boxes</h1>
						<h1 id="mh1">Organic Fruit & Veg Boxes</h1>
						<h2>Pacific Palms - Forster Tuncurry NSW</h2>
						<h3 id="slogan">Affordable, fresh and clean food for happy, healthy families</h3>
					</section>
				</div>
				<div class="two_column clearfix">
					<section id="cta">
						<h3>How To Order</h3>
						<p>Join the POPCO community and we will be in touch with you about the next delivery of fresh organic produce.</p>
						<form action="thankyou.php" method="post">
						  	<input type="text" name="first" placeholder="First Name" required>
						  	<input type="text" name="last" placeholder="Last Name" required>
							<input type="email" name="email" placeholder="Email" required>
						  	<input type="tel" name="telephone" placeholder="Telephone" required>
							<input type="text" name="street" placeholder="Street Address" required>
							<input type="text" name="suburb" placeholder="Suburb" required>
							<input type="submit" name="submit" value="Submit Contact Information">
						</form>
					</section>
					<section id="why_care">
						<h2>The POPCO Offer</h2>
						<ul>
							<li>Get an assorted box of seasonal fruit and vegetables for only $75.</li>
							<li>Boxes are available for collection from the Pacific Palms Community Centre, The Lakes Way, Elizabeth Beach, between 3.30-6pm every fortnight.</li>
							<li>Box collection dates for start of 2018 are: 13 Feb; 27 Feb; 13 Mar; 27 Mar; 10 Apr; 24 Apr.</li>
							<li>Each box will usually contains some regulars like lettuce, carrots, zucchini, potatoes, apples and bananas along with a good portion of seasonal favourites.</li>
							<li>We estimate that our box is up to 40% cheaper than standard retail prices because we benefit from the same wholesale prices that shops do.</li>
						</ul>
					</section>
				</div>
				<blockquote id="rationale">
					<q><span>The biggest study</span> into organic food has found that it is more nutritious than ordinary produce and may help to lengthen people's lives. The evidence from the £12m [$20m AUD] four-year project will end years of debate and is likely to overturn government advice that eating organic food is no more than a lifestyle choice.</q>
					<cite><a id="timesquote" href="https://www.thetimes.co.uk/article/official-organic-really-is-better-fhlj576rmcp" target="_blank">The Sunday Times, 28 Oct 2007</a></cite>
				</blockquote>
				<div id="about_us" class="clearfix">
					<img id="wide" src="images/top_family_IMG_7645.jpg" alt="About Us Photo" title="About Us Photo">
					<img id="step" src="images/top_family_step1_IMG_7645.jpg" alt="About Us Photo" title="About Us Photo">
					<article id="locals">
						<h2>We Are Locals</h2>
						<p>POPCO is a community based cooperative, owned and controlled by it's members and established on goodwill and trust. We aim to supply organic produce in the Pacific Palms, NSW area at the cheapest possible price and the highest quality.</p>
						<p>While the weekly operations are coordinated by a small team, all members have equal say towards any significant management, operation or financial decisions as the arise.</p>
					</article>
					<blockquote class="testimonial">
						<q>I find that the boxes are a great way to enjoy chemical free nutritious meals, save money off my grocery bill while also supporting organic producers. I couldn't be happier with this service.</q>
						<cite>Jane Doe, Local Resident</cite>
					</blockquote>
				</div>
				<div id="three_column" class="clearfix">
					<article id="suppliers">
						<h2>Suppliers</h2>	
						<p>Our main current supplier is <a href="http://www.backtoeden.com.au/">Back To Eden</a> located in Sydney, NSW. Back to Eden is an independent Certified Organic wholesaler supplying Australian produce and grocery lines to independent retailers and small businesses throughout Australia.</p>
						<p>POPCO is also always looking for local organic suppliers that can offer our members fresh and affordable produce. If you are a local producer and would like to supply POPCO, please get in touch.</p>
					</article>
					<article id="partners">
						<h2>Partners</h2>
						<p>POPCO is looking for local businesses with complementary products to our organic fruit and vegetable boxes. If you provide the community with positive products that support the health of residents and the environment then POPCO might be a sales avenue for you.</p>
					</article>
					<article id="sponsors">
						<h2>Sponsors</h2>
						<p>Would you like to join the POPCO team by becoming a Sponsor? By sponsoring POPCO on an annual basis you are able to expose your brand to our community focused, ethical, and health orientated members. If this type of audience fits with your product and brand please be in touch. Sponsors play an important role in helping POPCO to keep boxes affordable and bountiful.</p>
					</article>
				</div>
			</main>
			<footer>
				<h3 id="contact"> Contact POPCO</h3>
				<p>0400 000 000</p>
				<a href="mailto:popco.books@gmail.com">popco.books@gmail.com</a>
			</footer>
		</div>
		<script>
		// Select all links with hashes
		$('a[href*="#"]')
		  // Remove links that don't actually link to anything
		  .not('[href="#"]')
		  .not('[href="#0"]')
		  .click(function(event) {
		    // On-page links
		    if (
		      location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') 
		      && 
		      location.hostname == this.hostname
		    ) {
		      // Figure out element to scroll to
		      var target = $(this.hash);
		      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
		      // Does a scroll target exist?
		      if (target.length) {
		        // Only prevent default if animation is actually gonna happen
		        event.preventDefault();
		        $('html, body').animate({
		          scrollTop: target.offset().top
		        }, 1000, function() {
		          // Callback after animation
		          // Must change focus!
		          var $target = $(target);
		          //$target.focus();
		          if ($target.is(":focus")) { // Checking if the target was focused
		            return false;
		          } else {
		            $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
		            //$target.focus(); // Set focus again
		          };
		        });
		      }
		    }
		  });
      </script>
	</body>
</html>
