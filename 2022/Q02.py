# -------------------------------------------------------------------
# Global variables
# -------------------------------------------------------------------
# ===>  Change the identifier x to a more meaningful name
Choice = ""
# -------------------------------------------------------------------
# Main program
# -------------------------------------------------------------------
# ===> Display a suitable question to the user
print("Would you like me to sing?")
# ===> Accept the user's input (no validation required)
Choice = input("Choose 'y' for yes and 'n' for no")

if ( Choice == 'y'):
    # ===> Add a comment to explain the effect of the last -1 in this call
    # Counting backwards by using steps as -1
    for num in range(5, -1, -1):
        print (num, "green bottles sitting on the wall")
        
print ("Goodbye")
