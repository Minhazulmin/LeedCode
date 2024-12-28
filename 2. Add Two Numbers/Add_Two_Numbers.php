<?php

// Check if the class ListNode already exists
if ( !class_exists( 'ListNode' ) ) {
    /**
     * Definition for a singly-linked list.
     */
    class ListNode {
        public $val  = 0;
        public $next = null;
        function __construct( $val = 0, $next = null ) {
            $this->val  = $val;
            $this->next = $next;
        }
    }
}

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    function addTwoNumbers( $l1, $l2 ) {
        $dummyHead = new ListNode(); // Dummy head for the result linked list
        $current   = $dummyHead;
        $carry     = 0; // Initialize carry to 0

        while ( $l1 !== null || $l2 !== null || $carry !== 0 ) {
            $sum = $carry; // Start with the carry from the previous addition

            if ( $l1 !== null ) {
                $sum += $l1->val; // Add value from the first list
                $l1 = $l1->next; // Move to the next node in l1
            }

            if ( $l2 !== null ) {
                $sum += $l2->val; // Add value from the second list
                $l2 = $l2->next; // Move to the next node in l2
            }

            $carry         = intdiv( $sum, 10 ); // Calculate the new carry
            $current->next = new ListNode( $sum % 10 ); // Create a new node with the remainder
            $current       = $current->next; // Move to the next node in the result list
        }

        return $dummyHead->next; // Return the next node of the dummy head
    }

    // Helper function to create a linked list from an array
    function createLinkedList( $arr ) {
        $dummyHead = new ListNode();
        $current   = $dummyHead;

        foreach ( $arr as $num ) {
            $current->next = new ListNode( $num );
            $current       = $current->next;
        }

        return $dummyHead->next;
    }

    // Helper function to convert a linked list to an array (for testing purposes)
    function linkedListToArray( $head ) {
        $result = [];
        while ( $head !== null ) {
            $result[] = $head->val;
            $head     = $head->next;
        }
        return $result;
    }

}

// Example usage
$sloution = new Solution();
$l1       = $sloution->createLinkedList( [2, 4, 3] ); // Represents the number 342
$l2       = $sloution->createLinkedList( [5, 6, 4] ); // Represents the number 465
$result   = $sloution->addTwoNumbers( $l1, $l2 );
echo json_encode( $sloution->linkedListToArray( $result ) ); // Output: [7, 0, 8] (Represents the number 807)