<?php include './includes/html-head-stub.html'; ?>

  <title>Christine McClure</title>
</head>

<body>

<div id="page">

  <?php include './includes/header.php' ?>

  <div id="content">
    <div id="photo">
		  <img src="/img/boqueteForest.jpg" alt="Macro photo of plant from Boquete, Panama forest." />
      <img id="camera" src="/img/rolliflex.gif" alt="photo of 1960s Rolliflex camera" />
      <p>I've been fascinated with photography ever since my childhood in the seventies, where I staged a photo shoot using a velour bathrobe as a backdrop, ceramic dog figurines as models, and my trusty little 110 plastic camera.</p>
          
          <div id="openAbout">
						<h2><span class="headingblock">About:</span> <span class="subheading headingblock">Exhibitions/Education</span></h2>
          </div>
          <div id="about" class="clear">          
	          <h3>Exhibitions</h3>
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
  	        <h3>Education</h3>
							<h4>Residency Program, Vital Projects Studio, Chicago, IL:</h4>
							<p>A three month residency designed for advanced photographers who wanted to explore creating a cohesive body of work for exhibition. 2002-2003</p>
							<h4>Courses:</h4>
              	<p>Basic exposure and printing, advanced printing, color printing, digital imaging, portraiture lighting. 1994 - present</p>
					</div>
          
          <div id="openGalleries">
            <h2><span class="headingblock">Galleries:</span> <span class="subheading headingblock">View past work</span></h2>
          </div>
          <div id="galleries" class="clear"> 
          	<h3><a href="/fine-art.php">Fine Art</a></h3>  
          	<h3><a href="/portraits.php">Portraiture</a></h3>
          	<h3><a href="/events.php">Events</a></h3>
						<h3> <a href="/travel.php">Travel</a></h3>  
        
          </div>

          <div id="openPricing">
            <h2><span class="headingblock">Pricing:</span> <span class="subheading headingblock">How things are done</span></h2>
          </div>
          <div id="pricing" class="clear"> 
          <h3>Event Photography</h3>
            <p>From children's birthday parties to book signings to corporate functions, you'll receive an accurate record of the occasion. Pricing is by a per-hour shooting fee, with a minimum agreed-upon amount. Additional shooting time can be arranged on the day of the event if necessary.</p>
             <p>After the event, you will receive a CD of web-quality images (600x400 pixels at 150ppi). Print-quality images can be ordered onlineat an additional cost.</p>
          <h3>Portraiture</h3>
            <p>Whether you want a professional portrait, a casual outdoor photo, or something inbetween, I can work with you to capture the image you want to present to the world. With travel lights and a tripod, I can transfer the image in your mind to reality.</p>
             <p>Pricing is based on a flat-rate sitting fee for one hour of shooting. Additional time can be purchased for location and wardrobe changes.</p>
             <p>After the event, you will receive a CD of web-quality images (600x400 pixels at 150ppi). Print-quality images can be ordered online at an additional cost.</p>
          </div>

          <div id="openContact">
            <h2><span class="headingblock">Contact:</span> <span class="subheading headingblock">Book or order prints</span></h2>
          </div>
          <div id="contact" class="clear"> 
            <p>Need to order prints? You can do that <a href="http://christinemcclure.smugmug.com/">online at Smugmug</a>, where they use a professional photo lab for expert color correction.</p>
          <div class="contact">
            <form method="post" action="contact.php" id="contactForm">
            </form>
            <label for="name">Name</label>
            <input type="text" id="name" name="name"/>
            <input type="submit" /> 
            <input class="button" type="submit" name="submit" value="Send" id="submitButton" />
            <input type="hidden" name="submitted" value="TRUE" />
          </div>
        </div>
	</div>
  <div id="library">
      <img src="/img/librarian.gif" alt="photo of librarian action figure" />
        <p>I'm currently the Digital Services Librarian at a private university in Chicago, where I design and develop websites and make all of our various technologies talk to each other. My goal is to provide a rich online experience for students that doesn't take a library degree to navigate.</p>
        <div id="resume" class="nav">
          <p>Work experience, skills, the usual stuff</p>
          <h3>Resume</h3>
        </div>
        <div id="portfolio" class="nav">
          <p>Graphic design and website examples</p>
          <h3>Design Portfolio</h3>
        </div>
        <div id="lab" class="nav">
          <p>See what experiments are cooking in the lab</p>
          <h3>The Lab</h3>
        </div>
        <div id="contactLib" class="nav">
          <p>How to find me. Let's talk.</p>
          <h3>Contact</h3>
        </div>
		</div>
  </div>


  <?php include '/includes/footer.php' ?>

</div>


</body>

</html>
