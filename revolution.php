<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
  <link href="http://thoughtsvisualized.blogspot.ca/favicon.ico" rel="icon" type="image/x-icon">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Chloe Silver Design</title>
  <meta name="author" content="Chloe Silver" />
  <meta name="description" content="Chloe Silver's Design Portfolio" />
  <meta name="keywords"  content="design,portfolio,creative,freelance,toronto,animate,code,illustration,installation,craft,print,web" />
  <meta name="Resource-type" content="Document" />
  <meta name=viewport
  content="width=device-width, initial-scale=1.0, minimum-scale=0.5 maximum-scale=1.0">

  <link rel="stylesheet" href="../css/stylesheet.css" type="text/css" charset="utf-8" />
  <link rel="stylesheet" href="../css/content.css" type="text/css" charset="utf-8" />
  <link rel="stylesheet" type="text/css" href="../css/styles.css" />

  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script><script src="http://code.jquery.com/jquery-latest.min.js"></script>
  <script type="text/javascript" src="../js/head.js"></script>

</head>
<body>
  
  <?php include("header.html"); ?>

  <section class="spread">

    <img src="../img/revo/revo1.jpg" class="splash">

    <div class="infopage">
          
      <div class="content" id="content"><p>

      <div class="title2"><span class="letter">Q: </span>How can we raise awareness of gender equality at U of T?</div><br>

      <div class="title2"><span class="letter">A: </span>R[evol]ution</div><div class="deck">branding for an on-campus event</div>This project consists of a poster and Facebook group treatment created in conjunction with the University of Toronto, Scarborough campus. The brand itself was promoted through both printed and digital media to spread word across University of Toronto's campuses and the greater Toronto area.</p>
      <p>The Women's Centre at the University of Toronto, Scarborough campus approached me with a branding project for their annual campaign to promote gender equality. I am always willing to help out fellow students, especially for projects which I believe to be of social importance.</p>
      <p><span class="bold">The goals of the campaign were to raise awareness of the crucial importance of gender equality and the understanding that everyone must be accepted for who they are, regardless of how they view their own personal gender.</span></p></div>

      <div class="subhead">The final poster</div><center><img src="../img/revo/revopost.png" class="imgs smaller"></center>

      
      <div class="subhead">The facebook treatment</div><img src="../img/revo/revofb.jpg" class="imgs">

      
      <div class="subhead">Snapshots from the event</div><img src="../img/revo/revosnaps.png" class="imgs">

      <center><div class="content"><p><br>To learn more about the UTSC Women's Centre, <a href="https://www.facebook.com/UTSCWTCentre?ref=br_tf">click here.</a></p></div></center>
    </div><br><br><br>

    <hr>
    <table border="0" align="center" width="100%"><tr>
      <td colspan="2">
        <
      </td>
      <td></td>
      <td align="left" width="50%"><a href="../beef" class="link">
        <div class="next">previous project</div>
        WHAT'S YOUR BEEF</a>
      </td></a>
      <td align="right" width="50%"><a href="../parkey" class="link">
        <div class="next">next project</div>
        PARKEY</a>
      </td><td></td>
      <td colspan="2">
        >
      </td>
    </tr></table>
    <hr>

  </section>


  <?php include("footer.html"); ?>

<script type='text/javascript'>//<![CDATA[ 

  jQuery(function($) {
      $(document).ready(function() {
          var colors = ["red", "green", "blue"],
              css = colors[Math.floor(Math.random() * colors.length)];
          $("body").addClass(css);
      });
  });
          
  //]]>  

</script>

</body>

<script>
    $(function() {
  $('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top
        }, 1000);
        return false;
      }
    }
  });
});
    // google analytics stuff
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-66538906-1', 'auto');
  ga('send', 'pageview');
  ga(‘set’, ‘&uid’, {{USER_ID}}); // Set the user ID using signed-in user_id.
    </script>

</html>