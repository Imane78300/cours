<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon site web</title>
</head>
<body>
    <h1 id="titre">Mon site internet</h1>
    <script>
        
        let i = 0;

        function change() {  
            let titre = document.getElementById('titre'); 
            let color = ["red", "blue", "grey", "green"]; 
            
            setInterval(function () {
                
                titre.style.color = color[i];
                i++;

                if(i>color.length){
                i=0;
                }
            }, 1000); 

            
        }

        change();
        
    </script>
    

</body>
</html>