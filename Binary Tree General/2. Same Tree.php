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
     * @param TreeNode $p
     * @param TreeNode $q
     * @return Boolean
     */
    function isSameTree($p, $q)
    {
        return $this->dfs($p, $q);
    }

    function dfs($rootA, $rootB)
    {
        if (is_null($rootA) and is_null($rootB)) {
            return true;
        }

        if (
            ($rootA->val !== $rootB->val)
            or
            (is_null($rootA) or is_null($rootB))
        ) {
            return false;
        }

        return ($this->dfs($rootA->left, $rootB->left)) and ($this->dfs($rootA->right, $rootB->right));
    }
}
