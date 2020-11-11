<?php
/*ID: 612110237
Name: Guineng Cai 
*/
	/**

	 * This solution uses modulo operator (%) to solve both

	 * top-left -> bottom-right (\) and top-right -> bottom-left (/)

	 * direction.

	 */

	printf("Input size: ");

	fscanf(STDIN, "%d", $n);

	$length = (2 * $n) - 1;

	for($j = 0; $j < $length; $j++) {

		for($i = 0; $i < $length; $i++) {

			printf("%s", (

				($n == 1) ||                                 // to prevent mod by 0 error

				(($i - $j + 1 - $n) % (2 * $n - 2) == 0) ||  // for top-left -> bottom-right (\)

				(($i + $j + 1 - $n) % (2 * $n - 2) == 0)     // for top-right -> bottom-left (/)

			)? "*" : " ");

		}

		printf("\n");

	}

