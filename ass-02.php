<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    printf("Input size: ");
    fscanf(STDIN, "%d", $n);

    for($i = 1; $i <= 12; $i++) {
        for($j = 2; $j <= $n; $j++) {
            printf("%5d", $i * $j);
        }
        printf("\n");
    }
