<?php
/**
* Layout template file for Whoops's pretty error output.
*/
?>
<!DOCTYPE html><?php echo $preface; ?>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="robots" content="noindex,nofollow"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <title><?php echo $tpl->escape($page_title) ?></title>
    <link rel="shortcut icon" type="image/png" href="https://img.icons8.com/color/512/error.png"/>
    <style><?php echo $stylesheet ?></style>
  </head>
  <body>

    <div class="Whoops container">
      <div class="stack-container">

        <?php $tpl->render($panel_left_outer) ?>

        <?php $tpl->render($panel_details_outer) ?>

      </div>
    </div>

    <script><?php echo $prettify ?></script>
    <script><?php echo $zepto ?></script>
    <script><?php echo $clipboard ?></script>
    <script><?php echo $javascript ?></script>
  </body>
</html>
