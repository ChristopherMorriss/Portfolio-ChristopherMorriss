<!DOCTYPE html>
<?php $title="Coding Examples" ?>
<html>
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link href="css/normalize.css" rel="stylesheet">
      <link href="css/styles.css" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.googleapis.com">
      <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
      <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
      <title>$title</title>
   </head>
   <body>
      <?php include "php/sticky-menu.php" ?>
      <main>
         <?php include "php/banner.php" ?>
        <!-- Main Content Of Page -->
        <div id="code-examples">
         <img src="img/html-snippet.png" alt="snippet of html code">
         <h1>HTML</h1>
         <p>This piece of code generates the banner and also contains the header which appears on devices with a small width.</p>
         <p>I used HTML for this because it is content and HTML is used to add content to a webpage.</p>
      
         <img src="img/css-snippet.png" alt="snippet of css code">
         <h1>CSS</h1>
         <p>This piece of code adds an image as the background and allows the banner to fill the whole of the page.</p>
         <p>I used CSS for this because CSS allows me to improve the layout the banner.</p>
         <p>It also allows me to set an image as a background, something which HTML does not allow me to do.</p>
         
         <img src="img/java-snippet-2.png" alt="snippet of js code">
         <h1>JavaScript</h1>
         <p>This piece of code is used to delete all collections from my JS Array Project. It is functionally the same as refreshing the page</p>
         <p>I used JavaScript because I needed a way to modify the objects created dynamically during the running of the code.</p>
         <p>JavaScript allows me to use arrays to store values, which I can use for comparisons.</p>
   
        </div>
      </main>
   <script src="js/jquery-3.7.1.min.js"></script>
   <script src="js/main.js"></script>   
   </body>
</html>
