package leetcode

import "slices"

// 15. 3Sum
func threeSum(nums []int) [][]int {
	size := len(nums)
	var res [][]int

	slices.Sort(nums)

	for i := 0; i < size-2; i++ {
		if nums[i] > 0 {
			break
		}
		if i > 0 && nums[i-1] == nums[i] {
			continue
		}

		low := i + 1
		high := size - 1
		for low < high {
			sum := nums[low] + nums[high] + nums[i]
			if sum < 0 {
				low++
			} else if sum > 0 {
				high--
			} else {
				res = append(res, []int{nums[i], nums[low], nums[high]})
				low++
				for nums[low] == nums[low-1] && low < high {
					low++
				}
			}
		}
	}

	return res
}
