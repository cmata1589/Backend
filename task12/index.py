try:
	n = int(input('Enter a number : '))
	reversed = int(str(n)[::-1])
	print(reversed)
except ValueError:
	print('Given input is not a number.')