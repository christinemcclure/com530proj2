<?php // this script creates the  email form

$contact_email="camcclure@gmail.com";
 
// Check for form submission:
if (isset($_POST['submitted'])) {

	function spam_scrubber($value) {
	
		// List of very bad values:
		$very_bad = array('to:', 'cc:', 'bcc:', 'content-type:', 'mime-version:', 'multipart-mixed:', 'content-transfer-encoding:');
		
		// If any of the very bad strings are in the submitted value, return an empty string:
		foreach ($very_bad as $v) {
			if (stripos($value, $v) !== false) return '';
		}
		
		// Replace any newline characters with spaces:
		$value = str_replace(array( "\r", "\n", "%0a", "%0d"), ' ', $value);
		
		// Return the value:
		return trim($value);
	
	} // End of spam_scrubber() function.
	
	// Clean the form data:
	$scrubbed = array_map('spam_scrubber', $_POST);

	// Minimal form validation:
	if  (  (!empty($scrubbed['name'])) && (!empty($scrubbed['email'])) ) {
	
		// Create the body:
		$body = "Name: {$scrubbed['name']} \n E-mail: {$scrubbed['email']} \n {$scrubbed['message']}";
		$body = wordwrap($body, 70);
	
		// Send the email:
		mail($contact_email, "Mail from ChristineMcClure.com", $body, "From: {$scrubbed['email']}");
		
		// Print a message:
		echo "<p>Thank you for your message; I will be in contact soon. Enjoy your day.</p>";
		
		// Clear $_POST (so that the form's not sticky):
		$_POST = array();
	
	} else {
		echo '<p class="red">Please include both your name and e-mail address.</p>';
	}
	
} // End of main isset() IF.
?>

<?php include './includes/html-head-stub.html'; ?>

  <title>Christine McClure</title>
</head>

<body>

<div id="page">

  <?php include './includes/header.php' ?>

  <div id="content">
    <div id="photo">
		  <img src="/img/boqueteForest.jpg" alt="Macro photo of plant from Boquete, Panama forest." />
      <img class="hideMobile" src="/img/rolliflex.gif" alt="photo of 1960s Rolliflex camera" />
			<h2>Photography</h2>
      <p>I've been fascinated with photography ever since my childhood in the seventies, where I staged a photo shoot using a velour bathrobe as a backdrop, ceramic dog figurines as models, and my trusty little 110 plastic camera.</p>
          
          <h3 id="openGalleries">
            <span class="headingblock">Galleries:</span> <span class="subheading headingblock">View past work</span>
          </h3>
          <div id="galleries" class="clear"> 
          	<h4><a href="/fine-art.php">Fine Art:<span class="subheading">Images from the Portals exhibition.</span></a></h4>  
          	<h4><a href="/portraits.php">Portraiture:<span class="subheading">Headshots and other stagings.</span></a></h4>
          	<h4><a href="/events.php">Events:<span class="subheading">Candid shots from group events.</span></a></h4>
						<h4> <a href="/travel.php">Travel:<span class="subheading">Favorite images from my travels.</span></a></h4>  
        
          </div>

          <div id="openPricing">
            <h3><span class="headingblock">Pricing:</span> <span class="subheading headingblock">How things are done</span></h3>
          </div>
          <div id="pricing" class="clear"> 
          <h4>Event Photography</h4>
            <p>From children's birthday parties to book signings to corporate functions, you'll receive an accurate record of the occasion. Pricing is by a per-hour shooting fee, with a minimum agreed-upon amount. Additional shooting time can be arranged on the day of the event if necessary.</p>
             <p>After the event, you will receive a CD of web-quality images (600x400 pixels at 150ppi). Print-quality images can be ordered onlineat an additional cost.</p>
          <h4>Portraiture</h4>
            <p>Whether you want a professional portrait, a casual outdoor photo, or something inbetween, I can work with you to capture the image you want to present to the world. With travel lights and a tripod, I can transfer the image in your mind to reality.</p>
             <p>Pricing is based on a flat-rate sitting fee for one hour of shooting. Additional time can be purchased for location and wardrobe changes.</p>
             <p>After the event, you will receive a CD of web-quality images (600x400 pixels at 150ppi). Print-quality images can be ordered online at an additional cost.</p>
          </div>

          <h3 id="openAbout">
						<span class="headingblock">About:</span> <span class="subheading headingblock">Exhibitions/Education</span>
          </h3>
          <div id="about" class="clear">          
	          <h4>Exhibitions</h4>
            	<p class="showtitle" id="portals"><strong>Portals:</strong> Looptopia, Chicago IL. May 2007</p>
              <?php include './includes/about-portals.html' ?>
              <p><a href="fine-art.php">View Gallery</a></p>
            	<p class="showtitle"><strong>Retrospective</strong> Gallery 302, Chicago IL. August 2004</p>
              <p>This exhibit showcased my favorite digital and silver gelatin prints, including the new piece "Persephone's Garden."</p>
            	<p class="showtitle"><strong>Untitled:</strong> Around the Coyote Festival, Chicago IL. September 2003</p>
              <p>Assorted silver gelatin prints</p>
            	<p class="showtitle"><strong>180 Minutes:</strong> Residency Program Exhibition, Vital Projects gallery, Chicago IL. February 2003</p>
              <?php include './includes/about-180minutes.html' ?>
            	<p class="showtitle"><strong>Untitled:</strong> Around the Coyote Festival, Chicago IL. August 2002</p>
              <p>Assorted silver gelatin prints</p>
  	        <h4>Education</h4>
							<h5>Residency Program, Vital Projects Studio, Chicago, IL:</h5>
							<p>A three month residency designed for advanced photographers who wanted to explore creating a cohesive body of work for exhibition. 2002-2003</p>
							<h5>Courses:</h5>
              	<p>Basic exposure and printing, advanced printing, color printing, digital imaging, portraiture lighting. 1994 - present</p>
					</div>
          

          <div id="openContact">
            <h3><span class="headingblock">Contact:</span> <span class="subheading headingblock">Book or order prints</span></h3>
          </div>
          <div id="contact" class="clear"> 
            <h4>Need to order prints?</h4> 
            <p>You can do that <a href="http://christinemcclure.smugmug.com/">online at Smugmug</a>, where they use a professional photo lab for expert color correction.</p>
            <h4>Or, send me a message:</h4> 
            
            
<!-- begin E-mail reference form -->
<p>&nbsp;</p>
<form action="index.php" method="post">
  <p>Name*
    <input name="name" type="text" id="name" />
  </p>
  <p>E-mail address 
    <input name="email" type="text" id="email" />
  </p>
  <p>Message<br />
  <textarea name="message" cols="30" rows="5" id="message">
<?php if (isset($_POST['question'])) echo $_POST['question']; ?>
	      </textarea>
    </p>
  <p>
    <input type="submit" name="submit" value="Send!" />
    <input type="hidden" name="submitted" value="TRUE" />
  </p>
</form>

    
        </div>
	</div>
  <div id="library">
		<h2>Librarianship</h2>
      <img  class="hideMobile" src="/img/librarian.gif" alt="photo of librarian action figure" />
        <p>I'm currently the Digital Services Librarian at a private university in Chicago, where I design and develop websites and make all of our various technologies talk to each other. My goal is to provide a rich online experience for students that doesn't take a library degree to navigate.</p>
        <h3><span class="subheading headingblock">Experience/Skills</span><span class="headingblock">:Resume</span></h3>
     
        <div id="resume" class="nav">
          <p>Work experience, skills, the usual stuff</p>
          <h4>Resume</h4>
        </div>
        <div id="portfolio" class="nav">
          <p>Graphic design and website examples</p>
          <h4>Design Portfolio</h4>
        </div>
        <div id="lab" class="nav">
          <p>See what experiments are cooking in the lab</p>
          <h4>The Lab</h4>
        </div>
        <div id="contactLib" class="nav">
          <p>How to find me. Let's talk.</p>
          <h4>Contact</h4>
        </div>
		</div>
  </div>


  <?php include '/includes/footer.php' ?>

</div>


</body>

</html>
