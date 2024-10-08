from random import randint
Fruit = ['Cherry', 'Bell', 'Lemon', 'Orange', 'Star', 'Skull']
Bank = 100
play = input("Welcome to the casino! Type anything to play! ")
while Bank > 20:    
    Bank -= 20
    selectRandom = [Fruit[randint(1,5)]],[Fruit[randint(1,5)]],[Fruit[randint(1,5)]]
    print(selectRandom)
    if all(selectRandom) == True:
        if selectRandom[0] != [Fruit[randint(5,5)]] and selectRandom[0] == selectRandom[1] != [Fruit[randint(5,5)]] and selectRandom[0] == selectRandom[1] != selectRandom[2] or selectRandom[0] != [Fruit[randint(5,5)]] and selectRandom[0] == selectRandom[2] != [Fruit[randint(5,5)]] and selectRandom[0] == selectRandom[2] != selectRandom[1] or selectRandom[1] != [Fruit[randint(5,5)]] and selectRandom[1] == selectRandom[2] != [Fruit[randint(5,5)]] and selectRandom[1] == selectRandom[2]!= selectRandom[0]:
            Bank += 50
            print("Win! Your balance is now ",Bank)
        if selectRandom[0] == selectRandom[1] == selectRandom[2] != [Fruit[randint(5,5)]]:
            Bank += 100
            print("Three in a row!,Your balance is now ",Bank)
        if selectRandom[0] == selectRandom[1] == selectRandom[2] == [Fruit[randint(5,5)]]:
            Bank -= Bank
            print("Big loss! Your balance is now ",Bank)
        if selectRandom[0] == [Fruit[randint(5,5)]] == selectRandom[1] == [Fruit[randint(5,5)]] and selectRandom[2] != [Fruit[randint(5,5)]] or selectRandom[0] == [Fruit[randint(5,5)]] == selectRandom[2] == [Fruit[randint(5,5)]] and selectRandom[1] != [Fruit[randint(5,5)]] or selectRandom[1] == [Fruit[randint(5,5)]] == selectRandom[2] == [Fruit[randint(5,5)]] and selectRandom[0] != [Fruit[randint(5,5)]]:
            Bank -= 100
            print("Two Skulls! Your balance is now ",Bank)
        if selectRandom[0] != selectRandom[1] != selectRandom[2] != selectRandom[0]:
            Bank = Bank
            print("No luck, Your balance is now ",Bank)

        leave = str(input("Do you want to play again (Y, N): ")).upper()
    if leave == "N":
        print("You've cashed out with",Bank)
        break
    if leave == "Y":
        Bank == Bank
    else:
        print("Value doesn't equal Y or N")
        break
if Bank <= 20:
        print("No more money")

