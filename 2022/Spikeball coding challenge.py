from collections import namedtuple
statsdetails = namedtuple('stats', 'name played won lost goalsfor against points')
stats = [["Reading Reds",0,0,0,0,0,0],["Bradford Blues",0,0,0,0,0,0],
         ["York Yellows",0,0,0,0,0,0],["Wimbourne Whites",0,0,0,0,0,0],
         ["Brighton Blacks",0,0,0,0,0,0],["Grimsby Greens",0,0,0,0,0,0],
         ["Plymouth Pinks",0,0,0,0,0,0],["Orpington Oranges",0,0,0,0,0,0]]

teams = []
shortteam=["reds", "blues", "yellows", "whites", "blacks", "greens", "pinks", "oranges"]

def addresult():
    home = input("Please enter the nickname of the home team: ")
    away = input("Please enter the nickname of the away team: ")
    if home.lower() in shortteam and away.lower() in shortteam:
        homescore = int(input("Please enter the goals score by the home team: "))
        awayscore = int(input("Please enter the goals score by the away team: "))
        homeind = shortteam.index(home)
        awayind = shortteam.index(away)
        #print(homeind)
        stats[homeind][1] = stats[homeind][1]+1
        stats[awayind][1] = stats[awayind][1]+1
        stats[homeind][4] = stats[homeind][4]+homescore
        stats[homeind][5] = stats[homeind][5]+awayscore
        stats[awayind][4] = stats[awayind][4]+awayscore
        stats[homeind][5] = stats[homeind][5]+homescore

        if homescore > awayscore:
            stats[homeind][2] =stats[homeind][2]+1
            stats[awayind][3] =stats[awayind][3]+1
            stats[homeind][6] =stats[homeind][6]+3
        else:
            stats[homeind][3] =stats[homeind][3]+1
            stats[awayind][2] =stats[awayind][2]+1
            stats[homeind][6] =stats[awayind][6]+3
            
    else:
        print("incorrect name entered, result not provided")

def showtable():
    print("-"*80)
    title = ["Team Name","PL","W","L","AG","PTS"]
    layout = "(:<20)(:^4)(:^4)(:^4)(:^4)(:^4)(:^4)"
    print(layout.format(title[0],title[1],title[2],title[3],title[4],title[5],title[6]))
    stats.sort(keys = "pts", reverse =True)
    for i in range (8):
        print(layout.format(stats[i][0], stats[i][1], stats[i][2], stats[i][3], stats[i][4], stats[i][5], stats[i][6]))

for i in range(8):
    teams.append(stats[i][0])
    team = stats[i][0]
    nickname = team.split(" ")
    shortteam.append(nickname[1])

inplay = True
while inplay == True:
    print()
    print("Menu Options")
    print("1 - Add a result")
    print("2 - Show table")
    print("3 - Exit")

    choice = input("Please enter your choice: ")
    
    if choice == "1":
        addresult()
    elif choice == "2":
        showtable()
    else:
        inplay == False
