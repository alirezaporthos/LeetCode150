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
     * @return Integer
     */
    function countNodes($root)
    {
        if (is_null($root))
            return 0;

        return $this->bfs($root);
    }

    function bfs($root)
    {
        $queue[] = $root;
        $count = 0;

        for ($i = 0; $i < count($queue); $i++) {
            $node = $queue[$i];

            if ($node->left) {
                $queue[] = $node->left;
            }
            if ($node->right) {
                $queue[] = $node->right;
            }
            $count = $i;
        }

        return $count + 1;
    }
}
