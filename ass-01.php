<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    while(true) { // The infinite loop

        printf("%s", <<<EOT



1. calculate price

2. compare 2-numbers

3. exit



Input menu number: 

EOT

        );

        fscanf(STDIN, "%d", $choice);

        if($choice == 3) break;



        if($choice == 1) {

            printf("Input Number (price %%discount): ");

            fscanf(STDIN, "%d %d", $price, $perdiscount);

            printf("price %d, discount %.2f and net price %.2f\n",

                $price, $discount = $price * $perdiscount / 100, $price - $discount);

        } else if($choice == 2) {

            printf("Input Number (a b): ");

            fscanf(STDIN, "%d %d", $a, $b);

            printf("%d %s %d\n",

                $a,

                ($a > $b)? "greater than" : (($a < $b)? "less than" : "equal to"),

                $b);

        } else {

            printf("Invalid menu number!!!\n");

        }

    }

