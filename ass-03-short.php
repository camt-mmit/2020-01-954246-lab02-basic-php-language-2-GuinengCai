<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    /**
     * This make your code shorter than ass-03.php
     * by using ternary operator.
     */
    printf("Input size : ");
    fscanf(STDIN, "%d", $n);

    for($j = 0; $j < $n; $j++) {
        for($i = 0; $i < $n; $i++) {
            printf("%s", ($i <= $j)? "*" : " ");
        }
        printf("\n");
    }
