<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    /**

     * This solution is same as as ass-03.php except

     * it uses reverse index order (from $n - 1 to 0).

     */

    printf("Input size: ");

    fscanf(STDIN, "%d", $n);

    

    for($j = 0; $j < $n; $j++) {

        for($i = $n - 1; $i >= 0; $i--) printf("%s", ($i <= $j)? "*" : " ");

        printf("\n");

    }

