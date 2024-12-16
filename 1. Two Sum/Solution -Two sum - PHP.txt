<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer[]
     */
    public function twoSum($nums, $target) {
        // Create an empty array to store the number and its index
        $numMap = array();
        
        // Loop through the array of numbers
        foreach ($nums as $index => $num) {
            // Calculate the complement
            $complement = $target - $num;
            
            // If the complement is in the array, return the indices
            if (isset($numMap[$complement])) {
                return array($numMap[$complement], $index);
            }
            
            // Store the current number and its index in the map
            $numMap[$num] = $index;
        }
        
        // Return an empty array if no solution is found (though this shouldn't happen)
        return array();
    }
}

// Example usage
$solution = new Solution();
$nums = [2, 7, 11, 15];
$target = 9;
print_r($solution->twoSum($nums, $target)); // Output: Array ( [0] => 0 [1] => 1 )

?>
