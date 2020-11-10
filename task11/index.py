

a = [12 , -4 , 5 , 48 , -8]
n = len(a)

def findTriplets(a, n): 
  
    found = True
    for i in range(0, n-2): 
      
        for j in range(i+1, n-1): 
          
            for k in range(j+1, n): 
              
                if (a[i] + a[j] + a[k] == 0): 
                    print(a[i], a[j], a[k]) 
                    found = True
      
              
    # If no triplet with 0 sum found in array 
    if (found == False): 
        print(" not exist ") 



findTriplets(a, n)