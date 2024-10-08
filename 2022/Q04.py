# -------------------------------------------------------------------
# Global variables
# -------------------------------------------------------------------
year = 0            # Do not move this line
strYear = ""        # Do not move this line

# -------------------------------------------------------------------
# Main program
# -------------------------------------------------------------------

# Put the lines into the correct order to solve the problem.
# A user types in a year group.  The program indicates which stage
# of education the year group belongs to.  The program loops until
# the user enters 0.
# Example:
# Input                 Output
# -----------------------------------------
# 0                     Exits program
# 1, 2, 3, 4, 5, 6      Primary
# 7, 8, 9, 10, 11       Secondary
# 12, 13                College
strYear = input("Enter year group (1 to 13, 0 to exit)")
year = int(strYear)
while (year != 0):
    if (year < 1):
        print ("Year too small")
    elif (year > 13):
        print ("Year too big")
    elif (year < 7):
        print ("Primary")
    elif (year < 12):
        print ("Secondary")

    else:
        print ("College")
    strYear = input("Enter year group (1 to 13, 0 to exit)")
    year = int(strYear)
