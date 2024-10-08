position = 0
hash= ["_","_","_","_"]
Table ={0,0,0,0}
for i in range(0,4):
    hash[position] = position
Firstname = str(input("Please Enter the First name"))
Lastname = str(input("Please Enter the Last name"))
FullName = (Firstname),(Lastname)

position = ((ord(Lastname)[0])-64)*6 + ((ord(Firstname)[0])-64)%4
print(Table)

if hash[position]!="_":
    while hash[position]!="_":
        if position == 3:
            position=0
        else:
            position=position+1


hash[position] = FullName

def searchName():
    search = input("Who  you looking for?")
    name = search.split()
    Firstname=name[0]
    Lastname=name[1]
    Desired = ((ord(Lastname)[0])-64)*6 + ((ord(Firstname)[0])-64)%4
    while(hash[desired]!="_" or previous[desired]==1) and hash [desired]!= search:
        if desired == 31:
            desired = 0
        else:
            return(false)

def deleteName():
    pos = searchName()
   # if pos ==-1:
        
