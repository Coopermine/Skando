<meta http-equiv="content-type" content="text/html;charset=utf-8" />
<?php
require 'fbconfig.php';   // Include fbconfig.php file

?>
<!doctype html>

<html xmlns:fb="http://www.facebook.com/2008/fbml">

<head>
 <link href="css/bootstrap.min.css" rel="stylesheet"> 
</head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<body>


  <div class="panel panel-primary">
    <div class="panel-heading"><center>Skando</center></div>
    <div class="panel-body">


      <?php if ($user): ?>      <!--  After user login  -->


      <div class="container">
        <div class="hero-unit">
          <h1>Olá <?php echo $fbfullname; ?></h1>
        </div>
        <div class="span4">
         <ul class="nav nav-list">
          <li class="nav-header"></li>
          <li><img src="https://graph.facebook.com/<?php echo $user; ?>/picture"></li>
          <li class="nav-header">Facebook ID</li>
          <li><?php echo  $fbid; ?></li>
          <li class="nav-header">Email</li>
          <li><?php echo $femail; ?></li>
          <li class="nav-header">Nome completo</li>
          <li><?php echo $fbfullname; ?></li>
          <div><a href="<?php echo $logoutUrl; ?>">Logout</a></div>
        </ul></div></div>
      <?php else: ?>     <!-- Before login --> 
      <center>
        <div class="container">
          <center>
            <img src="wireless.png" class="img-responsive" alt="Skando">
          </center>
          <div>
            <a href="<?php echo $loginUrl; ?>">
              <button type="button" class="btn btn-default btn-lg" id="liberar" data-loading-text="Processando...">
                <span class="glyphicon glyphicon-map-marker"></span> ACESSAR A INTERNET
              </button>
            </center>
          </a>
        </div></center>
        <center><center>
          <div>
            <a href="<?php echo "comofunciona.php"; ?>">
              <button type="button" class="btn btn-default btn-lg" id="liberar2" data-loading-text="Processando...">
                <span class="glyphicon glyphicon-question-sign"></span> COMO FUNCIONA?
              </button>
            </center>
          </a>
          <br><br><br>
        </div></center>

        <br><br><br>
      </center>
      <br><br><br>

    <?php endif ?>
  </div>
</div>
</div>
</body>
</html>
