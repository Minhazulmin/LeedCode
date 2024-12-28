<?php

class Solution {

    /**
     * @param Integer $x
     * @return Boolean
     */
    public function isPalindrome($x) {
        // Negative numbers are not palindromes
        if ($x < 0) {
            return false;
        }
        
        // Convert the number to a string
        $str = strval($x);
        
        // Reverse the string
        $reversed = strrev($str);
        
        // Check if the original string and reversed string are the same
        return $str === $reversed;
    }
}

// Example usage
$solution = new Solution();
$x1 = 121;
$x2 = -121;
$x3 = 10;

echo $solution->isPalindrome($x1) ? 'true' : 'false'; // Output: true
echo "\n";
echo $solution->isPalindrome($x2) ? 'true' : 'false'; // Output: false
echo "\n";
echo $solution->isPalindrome($x3) ? 'true' : 'false'; // Output: false

?>
