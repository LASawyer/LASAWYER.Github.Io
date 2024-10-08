import random
Total = 0
while DiceA = 5
rnd = random.randint(1,6)
dice1 = rnd
rnd = random.randint(1,6)
dice2 = rnd
rnd = random.randint(1,6)
dice3 = rnd
rnd = random.randint(1,6)
dice4 = rnd
rnd = random.randint(1,6)
dice5 = rnd
print(dice1, dice2, dice3, dice4, dice5)
Total = Total + int(input("Which dice do you want to keep?"))
DiceA = DiceA - 1
if dice1 == dice2 == dice3 == dice4 == dice5 == 6:
    print("You win")
if Total > 5:
    print("You win")
if Total == 30:
    print("All Sixes, you win")
