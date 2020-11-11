<?php
/*ID: 612110237
Name: Guineng Cai 
*/
    printf("Input size: ");
    fscanf(STDIN, "%d", $n);
    
    for($j = 0; $j < $n; $j++) {
        for($i = 0; $i < $n; $i++) printf("%s", (
            $i == 0 || $j == 0 ||
            $i == ($n - 1) || $j == ($n - 1)
        )? "*" : " ");
        printf("\n");
    }
