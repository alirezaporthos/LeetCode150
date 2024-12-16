<?php

/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution
{

    /**
     * @param Integer[] $nums
     * @return TreeNode
     */
    function sortedArrayToBST($nums)
    {
        return $this->createTree($nums, 0, count($nums) - 1);
    }

    function createTree($nums, $low, $high)
    {
        if ($low > $high) {
            return null;
        }

        $mid = floor(($low + $high) / 2);

        $node = new TreeNode($nums[$mid]);
        $node->left = $this->createTree($nums, $low, $mid - 1);
        $node->right = $this->createTree($nums, $mid + 1, $high);

        return $node;
    }
}
