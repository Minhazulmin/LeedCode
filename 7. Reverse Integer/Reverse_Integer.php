class Solution {

/**
* @param Integer $x
* @return Integer
*/
function reverse($x) {
// Define the 32-bit signed integer limits
$INT_MIN = -pow( 2, 31 ); // -2^31
$INT_MAX = pow( 2, 31 ) - 1; // 2^31 - 1

$sign = $x < 0 ? -1 : 1; // Get the sign of the number $x=abs( $x ); // Work with the absolute value of x $reversed=0;
    while ( $x> 0 ) {
    $digit = $x % 10; // Extract the last digit
    $x = intdiv( $x, 10 ); // Remove the last digit from x

    // Check for overflow before updating the reversed number
    if ( $reversed > intdiv( $INT_MAX, 10 ) ||
    ( $reversed == intdiv( $INT_MAX, 10 ) && $digit > $INT_MAX % 10 ) ) {
    return 0;
    }

    $reversed = $reversed * 10 + $digit; // Append the digit
    }

    return $sign * $reversed; // Apply the original sign
    }
    }
    // Example usage
    $solution = new Solution();
    echo $solution->reverse( 123 ); // Output: 321
    echo $solution->reverse( -123 ); // Output: -321
    echo $solution->reverse( 120 ); // Output: 21