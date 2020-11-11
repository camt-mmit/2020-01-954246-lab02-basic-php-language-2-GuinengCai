<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    /**

     * This solution is a direct approach.

     * We want to print out the following shape:

     *     /\

     *     \/

     */

    printf("Input size: ");

    fscanf(STDIN, "%d", $n);

    // upper part /\

    for($j = 0; $j < $n; $j++) {

        // left part /

        for($i = $n - 1; $i >= 0; $i--) printf("%s", ($i == $j)? "*" : " ");

        // right part \

        for($i = 1; $i < $n; $i++) printf("%s", ($i == $j)? "*" : " ");

        printf("\n");

    }

    

    // lower part \/

    for($j = 1; $j < $n; $j++) {

        // left part \

        for($i = 0; $i < $n; $i++) printf("%s", ($i == $j)? "*" : " ");

        // right part /

        for($i = $n - 2; $i >= 0; $i--) printf("%s", ($i == $j)? "*" : " ");

        printf("\n");

    }

