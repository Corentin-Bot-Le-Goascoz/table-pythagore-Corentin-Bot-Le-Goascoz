<html>
    <head>
        <meta charset="utf-8">
        <title>table de pythagore</title>
    </head>
    <body>
        <h1>
            Corentin Bot-Le Goascoz
        </h1>
        <p>Le tableau de bee-thagore :)</p>
        <table>
             <?php
                for ($i = 0; $i < 11; $i++) 
                {
                    #variable pour alterner les couleurs (et faire une abeille :))
                    $case = true;
                    echo '<tr>';
                    for ($y = 0; $y < 11; $y++) 
                    {
                        $case = !$case;
                        $valeur = $i * $y;  
                        
                        #pour marquer X dans la diagonale
                        if ($i == $y)
                        {
                            $valeur = 'X';
                        }

                        #pour avoir la ligne 1-2-3-4-5-6-7-8-9-10 en vertical
                        if ($y == 0)
                        {
                            $valeur = $i;
                        }  

                        #pour avoir la ligne 1-2-3-4-5-6-7-8-9-10 en horizontal
                        if ($i == 0)
                        {
                            $valeur = $y;
                        }  

                        #choix de la couleur de la case
                        if ($case)
                        {
                            #jaune
                            $couleur = 'D3D000';
                        }
                        else
                        {
                            #noir
                            $couleur = '000000';
                        }
                        echo '<td style=\'padding: 10px; border: 1px solid black; border-collapse: collapse; color: white; background-color:'.$couleur.'\'>'.$valeur.'</td>';
                    }
                    echo '</tr>';
                }
        ?>
        </table>
       



    </body>
</html>
