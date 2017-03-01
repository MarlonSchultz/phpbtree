# Recursive Code Katas in PHP concerning Binary Trees

Create BTree in index.php via factory from array:


Use Tool to check your trees:
https://www.cs.usfca.edu/~galles/visualization/BST.html

Kata Tasks to be solved recursively:

a) Count the number of nodes in a tree.

b) Change the value of each node to its depth.

c) Echo the tree inorder.

Help:
Algorithm Inorder(tree)
   1. Traverse the left subtree, i.e., call Inorder(left-subtree)
   2. Visit the root.
   3. Traverse the right subtree, i.e., call Inorder(right-subtree)

d) Echo the tree in preorder: Use brackets around each tree. example from index.php would be : [10[5[3]][15]]

e) Echo the tree in preorder using a char to illustrate the depth.
    ie:
    10  
    _5  
    __3  
    _15  


f) Create a tree recursively. If the starting value is even then create two subtrees with half the value of the parent. 
  If the starting value is odd, then the left child needs to greater by 1 comapred to the right node.
  There are no children for the value 1.

ie: startingvalue 7:
7  
_4  
__2  
___1  
___1
__2  
___1  
___1  
_3  
__2  
___1   
___1  
__1

g) Count the number of nodes with a specific value

i) Write a function that checks if each node value is the sum of its children (if existing)

j) Schreibe eine Funktion, die die Binärdarstellung einer Zahl ausgibt (zeichenweise mit write).

to lazy to furthermore translate for now

k) Schreibe eine Funktion, die in einem Baum jedem Knoten seine Höhe zuweist. Das ist die Höhe des größten Unterbaums plus 1.
Der Baum aus Abbildung 6.5 im Skript soll so aussehen:
4  
 3  
  1  
  2  
   1  
 1  

l) Schreibe eine Funktion, die die Höhe eines Baumes ermittelt, ohne die Knoten zu verändern.

m) Ermittele in einem Baum dasjenige Blatt, welches der Wurzel am nächsten ist. Bei mehreren gleichrangigen Blättern zieh das am weitesten links stehende vor.

n) Schreibe eine Funktion, die aus einem Baum eine Liste aller Blätter einer bestimmten Tiefe zurückgibt.

o) Schreibe eine Funktion, die für eine gegebene Stellung in einem Nim-Spiel (https://de.wikipedia.org/wiki/Nim-Spiel) angibt, ob es einen Gewinnzug gibt. Dazu sollen alle möglichen Züge durchprobiert werden, wobei rekursiv ermittelt wird, ob der Gegner dann einen Gewinnzug hat.

p) http://www.saar.de/~awa/jrekursion.html


Bonusaufgabe:
q) Zu einem gegebenen Baum, zähle die Anzahl der geraden und der ungeraden Werte auf dem Pfad von der Wurzel zu jedem Blatt. Lege zu jedem Blatt zwei Unterknoten an, links mit Anzahl der ungerade, rechts mit der Anzahl der geraden Werte. Wende diese Prozedur mehrmals nacheinander auf dem einelementigen Baum mit dem Wert 0 an.
