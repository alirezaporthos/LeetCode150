package leetcode

// 11. Container With Most Water

func maxArea(height []int) int {
	size := len(height)
	a := 0
	b := size - 1
	w := b - a
	res := min(height[a], height[b]) * w

	for a < b {
		if height[a] < height[b] {
			a++
		} else {
			b--
		}

		w--

		area := min(height[a], height[b]) * w
		if res < area {
			res = area
		}
	}

	return res
}

func min(a, b int) int {
	if a <= b {
		return a
	}
	return b
}
