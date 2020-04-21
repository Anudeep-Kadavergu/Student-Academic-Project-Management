n=int(input())
b="0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ"
while n>=1 and n<=3999:
    num = [1,4,5,9,10,40,50,90,100,400,500,900,1000]; 
    sym = ["I","IV","V","IX","X","XL","L","XC","C","CD","D","CM","M"]; 
    i=12;   
    a=[]
    k=n
    while(n>0): 
      div = int(n/num[i]); 
      n = n%num[i]; 
      while(div):
       a.append(sym[i]); 
       div-=1
      i-=1; 
    c=list("".join(a))
    h=b.index(max(c))+1
    sum=0;f=0;
    k=len(c)-1
    while(k>=0):
      w=b.index(c[k])
      sum=sum+w*pow(h,f)
      k-=1;f+=1;
    n=sum;
print(n)
      
      
