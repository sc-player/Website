<!--DOCTYPE html -->
<?php
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
?>
<html>
  <head>
    <link rel="stylesheet" type="text/css" href="main.css">
  </head>
  <body>
    <div class="title floating">
      <div class="alignLeft">
        <a href="techtree/techtree.html">Technology Tree</a>
      </div>
      <div class="center">
        <h1>Instructions</h1>
      </div>
      <div class="alignRight">
        <a href="techtree/techtree.html">Technology Tree</a>
      </div>
    </div>
    <div class="instructionsTOC">
      
    </div>
    <div id="instructions">
      <?php 
        $titles = fgetcsv(fopen("instructions/titles.csv", "r"));
        foreach ($titles as $file){
          echo '<h3>' . $file . '</h3>';
          echo '<hr class="enhanced">';
          echo '<div class="instrContent">';
          echo file_get_contents("instructions/" . $file . ".html");
          echo '</div>';
        }
      ?>
    </div>
  </body>
</html>
