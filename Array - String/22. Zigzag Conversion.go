package leetcode

func convert(s string, numRows int) string {
	if numRows == 1 || len(s) <= numRows {
		return s
	}

	rows := make([]string, numRows)

	currentRow := 0
	direction := 1

	for _, char := range s {
		rows[currentRow] += string(char)
		currentRow += direction

		if currentRow >= numRows-1 || currentRow <= 0 {
			direction *= -1
		}
	}

	var res string
	for _, row := range rows {
		res += row
	}

	return res
}
