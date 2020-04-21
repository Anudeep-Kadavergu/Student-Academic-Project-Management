n=int(input())
t=int(input())
a=[];b={};c=[];d=[];
for i in range(n):
    b[i]=0
    a.append(list(map(int,input().split())))
    c=[]
    for j in range(1,t+1,2):
        sum=0
        for k in range(j+1):
            sum=sum+a[i][k]*a[i][t]
        c.append(sum)
    d.append(c)
for i in range(len(d[0])):
    max1=-1
    for j in range(len(d)):
      if max1<d[j][i]:
         max1=d[j][i]
    for k in range(len(d)):
      if max1==d[k][i]:
       b[k]+=1
max1=-1;w=-1;
for i in range(n):
    if max1 <b[i]:
        w=i;
        max1=b[i]
print(w+1)
