package leetcode

//167. Two Sum II - Input Array Is Sorted

func twoSum(numbers []int, target int) []int {
	myMap := make(map[int]int)

	for i, number := range numbers {
		if value, status := myMap[target-number]; status {
			return []int{value + 1, i + 1}
		}
		myMap[number] = i
		//if myMap[target-number] != 0 {
		//	return []int{m[target-n], i + 1}
		//}
		//myMap[number] = i
	}

	return nil
}
