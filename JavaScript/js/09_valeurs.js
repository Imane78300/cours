var nb1= Number(prompt( "Enter nb1 : "));
var nb2= Number(prompt( "Enter nb2 : "));
var nb3= Number(prompt( "Enter nb3 : "));


	if (nb1 > nb2){
			nb1 = nb3 * 2;
		}else{
			nb1++;
			if(nb2 > nb3){
				nb1 = nb1 + nb3 *3;
			}else{
				nb1 = 0;
				nb3 = nb3 * 2 + nb2;
			}
		}
 
        console.log(nb1);
        document.write ("le nombre 1 vaut au final : " + nb1  + "<br>");
        
        console.log(nb2);
        document.write ("le nombre 2 vaut au final : " + nb2 + "<br>");

        console.log(nb3);
        document.write ("le nombre 3 vaut au final : " + nb3 + "<br>");


        //   4   4   4
        //  le nombre 1 vaut au final  : 0
        //  le nombre 2 vaut au final  : 4
        //  le nombre 3 vaut au final  : 12

        //  4   3   2 

        //  le nombre 1 vaut au final  : 4
        //  le nombre 2 vaut au final  : 3
        //  le nombre 3 vaut au final  : 2


        //   2   4   0 

        //  le nombre 1 vaut au final  : 3
        //  le nombre 2 vaut au final  : 4
        //  le nombre 3 vaut au final  : 0



       