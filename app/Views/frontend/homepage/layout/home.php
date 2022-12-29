<!DOCTYPE html>
<html lang="vi-VN">
  <head>
    <?php echo view(route('frontend.homepage.common.head')) ?>
  </head>
  <body class="homepage">
    
    <?php echo view(route('frontend.homepage.common.header')) ?>


    <?php echo view((isset($template)) ? $template : '') ?>
      
    <?php echo view(route('frontend.homepage.common.footer')) ?>
    
    <?php echo view(route('frontend.homepage.common.script')) ?>

  </body>
</html>