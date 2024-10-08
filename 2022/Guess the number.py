import random
numb = random.randint(1,100)
print("The computer has thought of a number between 1 and 100")
G = int(input("What do you think the number is?"))
while G != numb:
    if G > numb:
        G= int(input("Too high try again"))
    elif G < numb:
        G = int(input("Too low try again"))
print("Good job")
        
    
    
