dic = {
    "URL" : "Uniform Ressource Locator"
}
acronym["TCP"] = "Transmissiion Control Protocol"

for term, value in acronym.item():
    print(term,value)

newterm=input("Enter a new acronym : ")
newdef=input("What is the full name for "+ str(newterm) + ": ")
acronym[newterm]+newdef
print("-" * 23)
