<!DOCTYPE HTML>
<html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>CSS3_colour5</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" type="text/css" href="css/style.css" />
  <!-- modernizr enables HTML5 elements and feature detects -->
  <script type="text/javascript" src="js/modernizr-1.5.min.js"></script>
</head>

<body>
  <div id="main">
     <header>
    <div><img src="images\liqae1.png"  width=200 height=100 align=right id="lg"></img></div>
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.html"><span class="logo_colour">LIQAE</span></a></h1>
          <h2>Pour le développement & connection humains</h2>
	
        </div>
      </div>
      <nav>
     <div id="menu_container">
          <ul class="sf-menu" id="nav">
            <li><a href="index.html">Acueil</a></li>
            <li><a href="examples.html">Activit&eacute;s</a></li>
            <li><a href="page.html">Forum</a></li>
            <li><a href="another_page.html"></a></li>
            <li><a href="#">Programme</a>
              <ul id="mise1">
                <li><a href="#">Activit&eacute de semaine courante </a></li>
                <li><a href="#">Activit&eacute programmer</a>
                  <ul>
                    <li><a href="#">Pour les semaines de moi courant</a></li>
                    <li><a href="#">Pour le moi prochain </a></li>
                  </ul>
                </li>
                <li><a href="#">Activit&eacute encient </a></li>
              </ul>
            </li>
            <li><a href="contact.php">Contacter-nous</a></li>
          </ul>
        </div>
      </nav>
    </header>
    <div id="site_content">
      <div id="sidebar_container">
        <div class="sidebar">
          <h3 class="hh3">Aujourd'hui matin</h3>
          <h4 id="hh4">R&eacute;union </h4>
          <h5>10h du matin </h5>
          <p>Liqae va rencontrer une réunion a partir de 10h avec son groupe de developpement et connection ...<br /><a href="#">Lire la suite</a></p>
        </div>
        <div class="sidebar">
          <h3 class="hh3">Aujourd'hui après midi</h3>
           <h5> A partir de 14h</h5>
          <p>Liqae va organiser une atelier pour l'échange des idées avec  son groupe de developpement et connection ...<br /><a href="#">Lire la suite</a></p>
        </div>
        <div class="sidebar">
          <h3>Aujourd'hui soir</h3>
          <ul class="hh3">
           <h5> A partir de 19h</h5>
          <p>Liqae va preparer une petite soiré pour présenter les nouveaux participents dans le groupe de developpement et connection ...<br /><a href="#">Lire la suite</a></p>
        </div>
      </div>
      <div class="content">
        <h1>Pour le contact </h1>
        <p>Salut, pour nous contacter veulliez remplir ce formulaire </p>
        <form id="contact" action="contact.php" method="post">
          <div class="form_settings">
            <p><span>Nom </span><input class="contact" type="text" name="your_name" value="" /></p>
             <p><span>Pr&eacute;nom</span><input class="contact" type="text" name="your_name" value="" /></p>

            <p><span>Adresse Email</span><input class="contact" type="text" name="" /></p>
            <p><span>Message </span><textarea class="contact textarea" rows="5" cols="50" name="your_message"></textarea></p>
            <p style="padding-top: 15px"><span>&nbsp;</span><input class="submit" type="submit" name="contact_submitted" value="Envoyer" /></p>
          </div>
        </form>
      </div>
    </div>
    <footer>
      <p id="mise">Liqae 26/03/2016</p>
    </footer>
  </div>
  <p>&nbsp;</p>
  <!-- javascript at the bottom for fast page loading -->
  <script type="text/javascript" src="js/jquery.js"></script>
  <script type="text/javascript" src="js/jquery.easing-sooper.js"></script>
  <script type="text/javascript" src="js/jquery.sooperfish.js"></script>
  <script type="text/javascript">
    $(document).ready(function() {
      $('ul.sf-menu').sooperfish();
    });
  </script>
</body>
</html>
