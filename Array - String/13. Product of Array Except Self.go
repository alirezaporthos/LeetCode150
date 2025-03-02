package leetcode

//238. Product of Array Except Self

func productExceptSelf(nums []int) []int {
	size := len(nums)

	var answer = make([]int, size)

	left := 1
	for i := 0; i < size; i++ {
		answer[i] = left
		left *= nums[i]
	}

	right := 1
	for i := size - 1; i >= 0; i-- {
		answer[i] *= right
		right *= nums[i]
	}

	return answer
}

// simple but fails because of time
// func productExceptSelf(nums []int) []int {
// 	size := len(nums)

// 	var answer []int
// 	var leftProduct = []int{}
// 	var rightProduct = []int{}

// 	left := 1
// 	for i := 0; i < size; i++ {
// 		leftProduct = append(leftProduct, left)
// 		left *= nums[i]
// 	}

// 	right := 1
// 	for i := size - 1; i >= 0; i-- {
// 		rightProduct = append([]int{right}, rightProduct...)
// 		right *= nums[i]
// 	}

// 	for i := 0; i < size; i++ {
// 		answer = append(answer, leftProduct[i]*rightProduct[i])
// 	}

// 	return answer
// }
