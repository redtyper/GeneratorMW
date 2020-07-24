<!DOCTYPE html>
<html lang="pl">
  
<head>
  <!-- Required meta tags always come first -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Mistrzowie wyzwania 222</title>

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.11.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="assets/css/mdb.css" rel="stylesheet">
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/flags.css" rel="stylesheet">
 </head>

<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">
        <div id="navbarSupportedContent-7">
          <a class="navbar-brand" href="#">
            <img src="assets/images/logo.png">
          </a>
        </div>
        <div class="collapse navbar-collapse">
          <h4>Mistrzowie wyzwania 222</h4>
        </div>
      </div>
    </nav>
  </header>
    <!--Intro Section-->
    <section class="view intro-2">
      <div class="h-100 d-flex justify-content-center align-items-center">
        <div class="container">
          <div class="row">
            <div class="col-xl-5 col-lg-6 col-md-10 col-sm-12 mx-auto mt-5">
              <h2 style="text-align: center;">Witamy na stronie<br>Mistrzowie wyzwania 222</h2>
              <hr>
              <!--Form with header-->
              <div class="card wow fadeIn" data-wow-delay="0.3s">
                <div class="card-body">
                 <div class="text-center">
                    <span class="text-form">Podaj hasło dostępu, żeby wygenerować nagrodę</span>
                  </div>
                    <form id="retURL">
                      <div class="form-group">
                        <img src="assets/images/key.png" class="icon-key">
                        <input type="password" id="pswd" class="form-control" placeholder="Wpisz hasło"/>
                        <input type="button"  id="retURL" class="btn oranges btn-sm" onclick="checkPswd();" value="Zatwierdź" />
                      </div>
                    </form>
                  </div>
              </div>
            </div>
          </div>
          <div class="text-center footer">
            <ul class="lang-list">
              <li class="lang-list-single"><a href="login-pl.html"><span class="flag flag-pl" ></span></a></li>
              <li class="lang-list-single"><a href="login-us.html"><span class="flag flag-us" ></span></a></li>
              <li class="lang-list-single"><a href="login-de.html"><span class="flag flag-de" ></span></a></li>
              <li class="lang-list-single"><a href="login-fr.html"><span class="flag flag-fr" ></span></a></li>
          </ul>
            <h4>Wyjątkowe czasy, wyjątkowe wyniki, wyjątkowi Mistrzowie!</h4>
          </div>
        </div>
      </div>
    </section>

   
  <!--Main Navigation-->

  
  <!--  SCRIPTS  -->
  <script type="text/javascript" src="assets/js/jquery.min.js"></script>
  <script type="text/javascript">
    function checkPswd() {
      var password = $('#pswd').val();
        if (password == 'PL') {
          window.location.assign("https://itdevweb.pl/generator/client-page-pl.php")
        } else if (password == 'EN') {
          window.location.assign("https://itdevweb.pl/generator/client-page-en.php")
          } else if (password == 'FR') {
            window.location.assign("https://itdevweb.pl/generator/client-page-fr.php")
          } else if (password == 'DE') {
            window.location.assign("https://itdevweb.pl/generator/client-page-de.php")
          } else toastr["error"]("Nieprawidłowe hasło!");
        }
</script>

  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="assets/js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="assets/js/mdb.min.js"></script>
  <script>
    new WOW().init();

  </script>
</body>

</html>
