MyList = ["",""]
MyListPointer = ["1","2","3","4","5","6","-1"]
NextFree = 0
Start = -1
newName = 0
def AddItem(newItem):
    if len(MyList) == 7:
        print("Error, list if full")
    else:
        MyList(NextFree).name = newName
        if start == -1:
            temp == MyList[NextFree].Pointer
            MyList[NextFree].Pointer == -1
            start = NextFree
            NextFree = temp
        else:
            p = start
            if newName < myList[p].name:
                myList[NextFree].Pointer == start
                start == NextFree
            else:
                placeFound == False
                while MyList[p].pointer != -1 and placeFound == False:
                    if newName >= MyList[MyList[p].Pointer].name:
                        p = MyList[p].Pointer
                    else:
                        placefound = True
            temp = NextFree
            NextFree = node[NextFree].pointer
            node[temp].pointer = node[p].pointer
            node[p].pointer = temp
AddItem("Fred")
print(MyListPointer)
            
