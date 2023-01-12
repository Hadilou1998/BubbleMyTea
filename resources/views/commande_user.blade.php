<html>
    <head>
        <link href="{{ URL:: asset('css/app.css') }}" rel="stylesheet">
        <title>Commande</title>
    </head>

    <body>
        <header>
            <!-- div -->
        </header>

        <h1>Nos Commandes!</h1>

        @extends('index')

        @section('contenu')
            <div width="50%" float="left">
            <?php
                foreach($results as $res) {
                    echo '<tr><td>';
                        echo 'Recettes : ';
                        echo '<p>Nom : '.$res->rn.'</p>';
                        echo '<img src="images/'.$res->ti.'" alt=""/>';
                        echo '<p>Description : '.$res->rd.'</p>';
                        echo '<p>Prix : '.$res->rp.'</p>';
                        echo '<p>Perle :';
                        echo '<img src="images/'.$res->pi.'" alt=""/>';
                        echo $res->pn.'</p>';
                        echo '<p> Lait : '.$res->mn.'</p>';
                        echo '<p> Purée : '.$res->pun.'</p>';
                    echo '</tr> <td>'; 
                }
                ?>
                </div>
                <div width="50%" float="right">
                    <p>Panier</p>
                </div>
        @endsection 
    </body>
</html>


