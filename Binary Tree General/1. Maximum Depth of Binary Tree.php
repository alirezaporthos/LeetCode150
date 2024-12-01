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
    function maxDepth($root)
    {

        return $this->iDfs($root);
    }
    function dfs($root)
    {
        if (empty($root)) {
            return 0;
        }
        return 1 + max($this->dfs($root->left), $this->dfs($root->right));
    }

    function bfs($root)
    {
        if (is_null($root)) {
            return 0;
        }

        $count = 0;
        $queue[] = $root;

        while ($queue) {
            foreach ($queue as $node) {
                array_shift($queue);
                if ($node->left) {
                    $queue[] = $node->left;
                }
                if ($node->right) {
                    $queue[] = $node->right;
                }
            }
            $count++;
        }

        return $count;
    }

    function iDfs($root)
    {
        if (empty($root)) {
            return 0;
        }
        $costLeft = 0;
        $costRight = 0;
        $cost = 0;
        $stack[] = [$root, 1];
        $res = 0;
        while ($stack) {
            [$node, $cost] = array_pop($stack);
            if ($node->left) {
                $stack[] = [$node->left, $cost + 1];
            }
            if ($node->right) {
                $stack[] = [$node->right, $cost + 1];
            }
        }
        return $res;
    }
}
