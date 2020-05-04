<?php require('config/config.php'); ?>

<!DOCTYPE html>
<html lang="da">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ringsted Skomager</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo ROOT_URL; ?>styles/lg-stylesheet.css">
  <!-- Font awesome -->
	<link rel="stylesheet" href="https://kit-pro.fontawesome.com/releases/v5.11.2/css/pro.min.css">
</head>
<body>



<?php include('inc/nav.php'); ?>

<div class="container-fluid" style="padding: 0;">
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/cover.jpg" class="d-block w-100" alt="..." style="height: 600px;">
      <div class="carousel-caption d-none d-md-block">
        <h2 style="font-size: 3.5em;">SKOMAGEREN MED OVER 10 ÅRS ERFARING</h2>
        <a href="">Klik her</a>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/cover.jpg" class="d-block w-100" alt="..." style="height: 600px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Second slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="img/cover.jpg" class="d-block w-100" alt="..." style="height: 600px;">
      <div class="carousel-caption d-none d-md-block">
        <h5>Third slide label</h5>
        <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" data-slide="prev">
    <i class="fal fa-chevron-left" style="font-size: 3em;"></i>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" data-slide="next">
    <i class="fal fa-chevron-right" style="font-size: 3em;"></i>
  </a>
</div>
</div>
<div class="container">
  <div class="elfsight-app-d7c92cac-7a06-4544-a871-944e9b3cc6c6"></div>
</div>

<div class="container-fluid p-5" style="background-color: indianred;">
  <div class="container d-flex justify-content-center">
    <div class="col-md-4 mx-5" style="color: #fff;">
      <h4 class="text-center">Hej</h4>
    </div>
    <div class="col-md-4 mx-5" style="color: #fff;">
      <h4 class="text-center">Hej</h4>
    </div>
    <div class="col-md-4 mx-5" style="color: #fff;">
      <h4 class="text-center">Hej</h4>
    </div>
  </div>
</div>

<?php include('inc/footer.php'); ?>

<?php include('inc/JS_mandatory.php'); ?>
<script>
$(function(){
  $('a.nav-link').each(function() {
    if ($(this).prop('href') == window.location.href) {
      $(this).addClass('active');
    }
  });
});
</script>
<script src="https://apps.elfsight.com/p/platform.js" defer></script>
</body>
</html>