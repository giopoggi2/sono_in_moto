<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="refresh" content="10">
   <title>Vroom vroom</title>
   <?php
   if (isset($_REQUEST["toggle"])) {
      $valore = $_REQUEST["toggle"];
      $punt = fopen("toggle.txt", "w");
      fwrite($punt, $valore);
   }
   $punt = fopen("toggle.txt", "r");
   $interphp = fread($punt, 5);
   fclose($punt);
   ?>
   <script>
      var interruttore = <?php echo json_encode($interphp); ?>;

      function scarica() {
         if (interruttore == "true") {
            window.open('./on.zip').focus();
         } else {
            window.open('./off.zip').focus();
         }
      }
   </script>
   <link rel="stylesheet" href="style.css">
</head>

<body>
   <span id="titolo">
      <svg xmlns="http://www.w3.org/2000/svg">
         <filter id="motion-blur-filter" filterUnits="userSpaceOnUse">
            <feGaussianBlur stdDeviation="100 0"></feGaussianBlur>
         </filter>
      </svg>
      <span filter-content="S">Vrooom</span>
      <form action="" method="post">
         <input type='radio' name='toggle' value='true'><label for="on">ON</label>
         <input type='radio' name='toggle' value='false'><label for="off">OFF</label>
         <input type="submit" value="TOGGLE" class="button" role="button" onclick="toggle()">
      </form>
      <button class="button" role="button" onclick="scarica()">SCARICA</button>
   </span>
</body>



</html>