
let wyspy = [["1","1","0","0","0"], ["1","1","0","0","0"], ["0","0","1","0","0"],["0","0","0","1","1"]];
   
function grid(){

        let wynik = 0;
      
        for(let i=0; i< wyspy.length; i++){
            for(let j=0; j< wyspy[i].length; j++){
                if(wyspy[i][j]==1){
                    wynik++;

                }else{
                    continue;
                }

            }

        }
 return wynik;
}
function numIslands(){
    let count = 0;
        
    for(let i=0; i< wyspy.length; i++){
        for(let j=0; j< wyspy[i].length; j++){
            if(wyspy[i][j]=="1"){
                count++;
                wyspy[i][j] = "2";
                neigh(i,j);
                console.log(wyspy);
            }
        }
    }
return count;

}
function neigh(i, j){
                
         if(j>0 && wyspy[i][j-1]=="1"){
            wyspy[i][j-1] = "2";
            neigh(i, j-1);
        }

        if(j<wyspy[0].length && wyspy[i][j+1]=="1"){
            wyspy[i][j+1] = "2";
            neigh(i, j+1);
        }
        if(i<wyspy.length-1 && wyspy[i+1][j]=="1"){
            wyspy[i+1][j] = "2";
            neigh(i+1,j);
        }
        if(i>0 && wyspy[i-1][j]=="1"){
            wyspy[i-1][j] = "2";
            neigh(i-1, j);
        }
        console.log(wyspy);
 }
        



let out = numIslands();
console.log(out);