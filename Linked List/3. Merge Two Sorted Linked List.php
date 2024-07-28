<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */
class Solution
{

    /**
     * @param ListNode $list1
     * @param ListNode $list2
     * @return ListNode
     */
    function mergeTwoLists($list1, $list2)
    {
        if (is_null($list1)) return $list2;
        if (is_null($list2)) return $list1;

        if ($list1->val < $list2->val) {
            $list1 = $this->mergeTwoLists($list1, $list2);
            return $list1;
        }
        $list2 = $this->mergeTwoLists($list2, $list2);
        return $list2;
        //check this out later
        //     $newLinkedList = new ListNode();

        //     while ($list1 and $list2) {
        //         if ($list1->val < $list2->val) {
        //             $newLinkedList->val = $list1->val;
        //             $newLinkedList->next = $list1->next;
        //             $newLinkedList = $newLinkedList->next;

        //             $list1 = $list1->next;
        //         } else {
        //             $newLinkedList->val = $list2->val;
        //             $newLinkedList->next = $list2->next;
        //             $newLinkedList = $newLinkedList->next;
        //             $list2 = $list2->next;
        //         }
        //     }

        //     $newLinkedList->next = $list1 ?? $list2;

        //     return $newLinkedList->next;
    }
}
