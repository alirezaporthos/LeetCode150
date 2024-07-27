<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val) { $this->val = $val; }
 * }
 */

class Solution
{
    /**
     * @param ListNode $head
     * @return Boolean
     */
    function hasCycle($head)
    {

        //floyd cycle finding, o(n) time complexity and o(1) space complexity *
        $slow = $fast = $head;

        while ($fast !== null && $fast->next == null) {
            if ($fast === $slow)
                return true;

            $fast = $fast->next->next;
            $slow = $slow->next;
        }
        return false;
        //ILlegal offset, also o(n) space complexity
        // $map = [];
        // while ($head->next) {
        //     if (isset($map[$head->next])) {
        //         return true;
        //     }
        //     $map[$head->next] = $head->value;
        //     $head = $head->next;
        // }
    }
}
