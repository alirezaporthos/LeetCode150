package leetcode

// 45. Jump Game II

func jump(nums []int) int {

	if len(nums) <= 1 {
		return 0
	}

	currentReach, jumps, position := nums[0], 1, 0

	for position+currentReach < len(nums)-1 {

		maxReach := 0
		maxReachIndex := 0

		// finding maxReach of each step
		for i := position + 1; i <= position+currentReach; i++ {

			if nums[i]+i > maxReach+maxReachIndex {
				maxReach = nums[i]
				maxReachIndex = i
			}
		}

		jumps++
		currentReach = maxReach
		position = maxReachIndex

	}

	return jumps

}
