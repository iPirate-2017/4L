<!--NavBar -->
<header class="navbar navbar-inverse navbar-fixed-top" role="banner">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php"><img src="img/logo.png" alt="Basica"></a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                <li id="home" class="active"><a href="index.php">Accueil</a></li>
                <li id="about" class=""><a href="#equipe">L'équipe</a></li>
                <li id="sponsors" class=""><a href="#Sponsors">Sponsors</a></li>
                <li id="blog" class=""><a href="#lesNouvelles">Les nouvelles</a></li>
                <li id="contact" class=""><a href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</header>

<script type="text/javascript">

$('#about').click(function() { //Quand click sur about alors..
  $('.nav li').removeClass("active"); // Enleve la class active sur tout les li
  $('#about').addClass("active"); // Ajoute la class active sur about
  $("#V_Contenue").load("./views/view_about/about.php"); // Remplace le contenu de V_Contenue dans index
  });

$('#sponsors').click(function() {
  $('.nav li').removeClass("active"); // Enleve la class active sur tout les li
  $('#sponsors').addClass("active"); // Ajoute la class active sur sponsors
  $("#V_Contenue").load("./views/view_sponsors/sponsors.php"); // Remplace le contenu de V_Contenue dans index
});

$('#blog').click(function() {
  $('.nav li').removeClass("active"); // Enleve la class active sur tout les li
  $('#blog').addClass("active"); // Ajoute la class active sur sponsors
  $("#V_Contenue").load("./views/view_blog/blog.php"); // Remplace le contenu de V_Contenue dans index
});

$('#contact').click(function() {
  $('.nav li').removeClass("active"); // Enleve la class active sur tout les li
  $('#contact').addClass("active"); // Ajoute la class active sur contact
  $("#V_Contenue").load("./views/view_contact/contact.php"); // Remplace le contenu de V_Contenue dans index
});

</script>
