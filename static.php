<!DOCTYPE html>
<html lang="en">
  <head>
         <body>
               <?php
               function myfunction()
               {
                static $x=1;
                echo $x;
                $x++;
               }
               myfunction();
               echo"<br>";
               myfunction();
               echo"<br>";
               myfunction();
               echo"<br>";
               ?>
         </body>
  </head>
</html>