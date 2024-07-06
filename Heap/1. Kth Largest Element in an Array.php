<?php
class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $k
     * @return Integer
     */
    public function findKthLargest($nums, $k)
    {
        $this->buildMaxHeap($nums);

        for ($i = 1; $i < $k; $i++) {
            $lastElement = end($nums);
            $nums[0] = array_pop($nums);
            $this->siftDown($nums, 0, count($nums));
        }
        return $nums[0];
    }

    private function buildMaxHeap(array &$array): void
    {
        $length = count($array);
        for ($i = floor($length / 2); $i >= 0; $i--) {
            $this->siftDown($array, $i, $length);
        }
    }

    private function siftDown(array &$array, int $index, int $length): void
    {
        $leftChildIndex = $index * 2 + 1;
        $rightChildIndex = $index * 2 + 2;
        $maxIndex = $index;

        if ($leftChildIndex < $length && $array[$leftChildIndex] > $array[$maxIndex]) {
            $maxIndex = $leftChildIndex;
        }
        if ($rightChildIndex < $length && $array[$rightChildIndex] > $array[$maxIndex]) {
            $maxIndex = $rightChildIndex;
        }

        if ($maxIndex !== $index) {
            [$array[$index], $array[$maxIndex]] = [$array[$maxIndex], $array[$index]];
            $this->siftDown($array, $maxIndex, $length);
        }
    }
}
