<?php

/*ID: 612110237
Name: Guineng Cai 
*/
    /**
     * This is the simple one.
     */
    printf("Input size : ");
    fscanf(STDIN, "%d", $n);

    for($j = 0; $j < $n; $j++) {
        for($i = 0; $i < $n; $i++) {
            if($i <= $j) {
                printf("*");
            } else {
                printf(" ");
            }
        }
        printf("\n");
    }

