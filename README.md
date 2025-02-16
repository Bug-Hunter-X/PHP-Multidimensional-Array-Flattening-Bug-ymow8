# PHP Multidimensional Array Flattening Bug
This repository demonstrates a potential bug in a PHP function designed to flatten a multi-dimensional array. The function uses recursion which can lead to stack overflow errors with very large or deeply nested input arrays.
The `bug.php` file contains the buggy code.  The `bugSolution.php` file offers a corrected, more robust solution that avoids recursion and uses iteration instead to handle potentially large or deeply nested arrays.
## Bug Description
The recursive approach, while elegant for smaller arrays, is not efficient or safe for large, deeply nested arrays. It can lead to exceeding the PHP recursion limit and result in a fatal error. 
## Solution Description
The solution uses an iterative approach, employing a loop and a stack to process nested arrays. This avoids recursion, making the function more robust and suitable for larger or deeply nested input arrays.  The iterative approach improves performance and reliability.