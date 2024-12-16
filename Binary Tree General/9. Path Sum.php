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
     * @param TreeNode $root
     * @param Integer $targetSum
     * @return Boolean
     */
    function hasPathSum($root, $targetSum)
    {

        return $this->dfs($root, $targetSum);
    }

    function dfs($root, $targetSum, $sum = 0)
    {
        if (is_null($root)) {
            return false;
        }

        $sum += $root->val;
        if (is_null($root->left) and is_null($root->right)) {
            if ($sum === $targetSum) {
                return true;
            }
        }


        return $this->dfs($root->right, $targetSum, $sum)
            or
            $this->dfs($root->left, $targetSum, $sum);
    }
}
