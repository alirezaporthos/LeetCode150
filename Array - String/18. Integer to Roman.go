package leetcode

func intToRoman(num int) string {
	var res string = ""
	var syms = []string{"M", "CM", "D", "CD", "C", "XC", "L", "XL", "X", "IX", "V", "IV", "I"}
	var vals = []int{1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1}

	for i, val := range vals {

		count := num / val
		if count > 0 {
			for j := 1; j <= count; j++ {
				res += syms[i]
			}
			num = num % val
		}

	}
	return res
}
