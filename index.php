<?php
  include 'inc/functions.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Random Quotes</title>
  <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/styles.css">
</head>
<script>
    /**
    * called to reload the page every 10 seconds
    */
    setTimeout(() => {
      window.location.reload()
    }, 10000);
</script>
<style>
.tag{
  position:relative;
  padding:5px 10px 5px 10px;
  border:1px solid #fff;
  margin-top:20px;
}
</style>
    <?php
      $render_quote = printQuote();
      echo "
        <body style='background-color:".$render_quote['background']." !important'>
          <div class='container'>
            <div id='quote-box'>
              <p class='quote'>
              ".$render_quote['quotes']."
              </p>
              <p>".$render_quote['tag']."</p>
              <p class='source'> ".$render_quote['source']." <span class='citation'>".$render_quote['citation']."</span><span class='year'>".$render_quote['year'] ."</span></p>
            </div>
              <button id='loadQuote' onclick='window.location.reload(true)'>Show another quote</button>
          </div>
        </body>";
    ?>
</html>