<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>The title</title>
    <link href="style.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
  </head>
  <body id="body">
    <div class="form">
    <input name="pre/custom" type="radio" id="premade">
    <label for="premade">Pre-made</label> <br>
    <input name="pre/custom" type="radio" id="custom">
    <label for="custom">Custom</label>
    <form method="POST" action="index.php">
      <br>Country: <input type="text" name="country" placeholder="LV" class="country" required><br>
      State: <input type="text" name="state" placeholder="Zemgale" class="state" required><br>
      City: <input type="text" name="city" placeholder="Jelgava" class="city" required><br>
      Organization: <input type="text" name="org" placeholder="Jelgavas Tehnikums" class="org" required ><br>
      Departament: <input type="text" name="dep" placeholder="IT" class="dep" required><br>
      Common name: <input type="text" name="cname" placeholder="www.jelgavastehnikums.lv" class="cname" required ><br>
      Email: <input type="text" name="email" placeholder="tavs@epasts.lv" class="email" required ><br> <br>
      <!-- <input type="checkbox" name="encrypt" id="encrypt" class="encrypt"> 
      <label for="encrypt">Encrypt</label><br> <br> -->
      <input type="submit" name="submit" class="submit"></input><br>
      
    </form>
  </div>
  <script src="script.js"></script>
    <?php
    include 'action.php';
    ?>
  </body>
</html>

