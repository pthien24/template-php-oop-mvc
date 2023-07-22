<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo __web__root ?>/public/assets/client/css/style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <title><?php echo (!empty($page_title)?$page_title : 'website index') ?></title>
</head>
<body>
    <!-- //two way  use render or use require file -->
    <?php $this->render('blocks/header') ?> 
    <main class="flex-shrink-0 col-10 ">
  <div class="container">
  <?php $this->render($content,$sub_content) ?> 
    
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>

  <br>
  <br>
  <br>
  <br>
  <br>
</main>
    <?php $this->render('blocks/footer') ?> 
<script src="<?php echo __web__root ?>/public/assets/client/js/script.js"></script>
</body>
</html>