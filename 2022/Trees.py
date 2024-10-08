class Tree:
 
    def __init__(self, data, left=None, right=None):
 
        self.left = left
        self.right = right
        self.data = data
 
    def PrintPreTree(self):
        print(self.data)
        if self.left:
            self.left.PrintPreTree()
        if self.right:
            self.right.PrintPreTree()
    def PrintInTree(self):
        if self.left:
            self.left.PrintInTree()
        print(self.data)
        if self.right:
            self.right.PrintInTree()
    def PrintPostTree(self):
        if self.left:
            self.left.PrintPostTree()
        if self.right:
            self.right.PrintPostTree()
        print(self.data)

    def add(self, data):
# Compare the new value with the parent node
        if self.data:
            if data < self.data:
                if self.left is None:  #i.e a leaf node
                    self.left = Tree(data)
                else:
                    self.left.add(data)
            elif data > self.data:
                if self.right is None: #i.e a leaf node
                    self.right = Tree(data)
                else:
                    self.right.add(data)
        else:
            self.data = data

Rootnode=input("What is the root node?")
root  = Tree(Rootnode)

for i in range (0,4):
    NewNode= input("What is the node to add?")
    root.add(NewNode)
print("Here is the PRE order traversal")
root.PrintPreTree()
print("Here is the IN order traversal")
root.PrintInTree()
print("Here is the POST order traversal")
root.PrintPostTree()
