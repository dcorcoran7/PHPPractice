<!DOCTYPE html>

<html>
    <head>
        <title>
            HW1 Q1
        </title>
    </head>

    <body>
        <?php
            $number = 2;
            
            While($number <= 50) {   //Loop through numbers between 1 and 50
                $counter = 0;
                For ($denominator = 1; $denominator <= $number; $denominator++) {  //Loop where the current number $i is divided by any number between 1 and $i
                    
                    $mod = ($number % $denominator);
                    if ($mod == 0) {
                        $counter += 1;
                    }

                }

                if ($counter <= 2) {
                    echo $number;
                    echo "<br>";
                }

                $number += 1;

            }
        ?>
    </body>
</html>