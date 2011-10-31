<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en" id="christinemcclure-com" class="t22 g978">

<head>

  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <!--
    Use device width on iPhone, no scaling; maximum-scale keeps things cool on orientation changes.
  -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />

  <title>Christine McClure</title>
  <link href='http://fonts.googleapis.com/css?family=Quattrocento+Sans' rel='stylesheet' type='text/css' /> <!-- paragraph Google font -->
  <link href='http://fonts.googleapis.com/css?family=Lato:700,900' rel='stylesheet' type='text/css' /> <!-- headings Google font -->
  <link rel="stylesheet" type="text/css" href="/css/reset.css" />
  <link rel="stylesheet" type="text/css" media="screen" href="/css/grid.css" /> 
  <link rel="stylesheet" type="text/css" media="screen" href="/css/screen.css" />
  <!--[if lte IE 7>
  <link rel="stylesheet" type="text/css" media="screen" href="/css/screen-ie.css" />
  <![endif]-->
  <link rel="stylesheet" type="text/css" media="print" href="/css/print.css" />

<!--REMOVE COMMENT TAGS TO USE FACEBOOK SHARE METADATA:-->

<!--
  <meta name="title" content="Match this with the content of the title tag above." /> 
  <meta name="description" content="A short description of this page." />
  <link rel="image_src" href="http://example.com/media/img/thumbnail.jpg" />
-->

<!--REMOVE COMMENT TAGS TO USE FAVICON LINKS:-->

  <!--For most browsers:-->
<!--
  <link rel="icon" href="http://example.com/favicon.png" type="image/png" />
-->
  <!--For Internet Explorer:-->
<!--
  <link rel="shortcut icon" href="http://example.com/favicon.ico" />
-->

  <!--Load the latest version of 1. jQuery library-->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
  <!--Load site-wide JavaScript-->
  <script type="text/javascript" src="/js/site.js"></script>

</head>

<body>

<div id="page">

  <?php include '/includes/header.php' ?>

  <div id="content">
      <h2> Photography <img src="/img/Xtemp.png" alt="photo of 1960s Rolliflex camera" /></h2>
      <p>I've been fascinated with photography ever since my childhood in the seventies, where I staged a photo shoot using a velour bathrobe as a backdrop, ceramic dog figurines as models, and my trusty little 110 plastic camera.</p>
        <div id="about" class="nav">
          <h3>About</h3>
          <h4><a href="/artist-biography.php">Exhibitions and Education</a></h4>
		    </div>
        <div id="galleries" class="nav">
          <h3>Galleries</h3>
          <p>View <a href="/fine-art.php">fine art</a>, <a href="/portraits.php">portraiture</a>, <a href="/events.php">event</a> and <a href="/travel.php">travel</a> photography</p>
        </div>
        <div id="pricing" class="nav">
          <h3>Pricing</h3>
          <h4>Event Photography</h4>
            <p>From children's birthday parties to book signings to corporate functions, you'll receive an accurate record of the occasion. Pricing is by a per-hour shooting fee, with a minimum agreed-upon amount. Additional shooting time can be arranged on the day of the event if necessary.</p>
             <p>After the event, you will receive a CD of web-quality images (600x400 pixels at 150ppi). Print-quality images can be ordered onlineat an additional cost.</p>
          <h4>Portraiture</h4>
            <p>Whether you want a professional portrait, a casual outdoor photo, or something inbetween, I can work with you to capture the image you want to present to the world. With travel lights and a tripod, I can transfer the image in your mind to reality.</p>
             <p>Pricing is based on a flat-rate sitting fee for one hour of shooting. Additional time can be purchased for location and wardrobe changes.</p>
             <p>After the event, you will receive a CD of web-quality images (600x400 pixels at 150ppi). Print-quality images can be ordered online at an additional cost.</p>
        </div>
        <div id="contact" class="nav">
          <h3>Contact</h3>
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

      <h2><img src="/img/Xtemp.png" alt="photo of librarian action figure" />Librarianship</h2>
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


  <?php include '/includes/footer.php' ?>

</div>


</body>

</html>
