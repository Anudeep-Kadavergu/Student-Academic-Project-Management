a = input().split(' ')
n=len(a)
d=int(input())
for i in range(d) :
    k=a[0]
    a[0:n-1]=a[1:n]
    a[n-1]=k
print(a)
