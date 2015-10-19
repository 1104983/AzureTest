
<!DOCTYPE html>
<html>
    <head>
	</head>
	<body>
        <p>
          <?php
            echo "Aberdeen Specs, Mugs, and Sausage Rolls";
            echo "<br> </br>";

          //$myage = 20;
         // $myname = "Jim Feeley";

           // if ($myage > 21 ){
           // print $myname . "-" . "You are able to buy specs, mugs and sr";
            //}

            /*else if($myage >18 && $myage <21){
            print $myname . "-" ."You are able to buy specs, and mugs.";
            }

            else if ($myage >16 && $myage <18){
          print $myname . "-" ."You can buy specs";
          }
          else {print "You can buy nothing";} */

          $wantedgoods = "Jimfeeley";

          switch ($wantedgoods) {
              case "mugs";
                  echo "You have to be 18 to buy mugs";
                  break;
              case "specs";
                  echo "You have to be 16 to buy specs";
                  break;
              case "sr";
                  echo "You have to be 21 to buy sausage rolls";
                  break;
              default;
                 echo "You cant buy anything cov";
          }


          ?>
</p>
</body>
</html>
