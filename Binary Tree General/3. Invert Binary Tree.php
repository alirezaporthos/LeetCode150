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
     * @return TreeNode
     */
    function invertTree($root)
    {

        return $this->dfs($root);
    }

    function dfs($node)
    {
        if ($node === null) {
            return null;
        }

        $temp = $node->left;
        $node->left = $this->dfs($node->right);
        $node->right = $this->dfs($temp);

        return $node;
    }
    // function dfs($root)
    // {
    //     if (is_null($root)) {
    //         return null;
    //     }

    //     $temp = $root->left;
    //     $root->left = $root->right;
    //     $root->right = $temp;

    //     $this->dfs($root->left);
    //     $this->dfs($root->right);

    //     return $root;
    // }
}
