<?php 

    /*
     * En vous servant de la base World :
     * 
     * 1. Créez une page qui affichera la liste de tous les pays enregistrés en base :
     *  - Nom
     *  - Continent
     *  - Population
     *  - Forme de gouvernement
     * 
     * 2. Faites en sorte que ces pays soient affichés triés par ordre de population décroissant.
     * 
     * Bonus :
     * 3. Utilisez une jointure (avec la clause WHERE) pour afficher également la capitale de chaque pays, ainsi que sa population
     * 
     * 4. Affichez en gras les pays les plus peuplés (plus de 100 millions d'habitants)
     */


    
     

    // Connexion à MySQL avec PDO
    
	$strConnection = 'mysql:host=localhost;dbname=world';
	$pdo = new PDO($strConnection, 'root', 'root');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
    /**
     *    Liste des pays enregister 
     */



    
        $query ="SELECT name,continent,Population,GovernmentForm FROM country ORDER BY Population DESC";
        $sql = $pdo->query($query);
        $result =$sql->fetchAll();
        
    
 ?>  

 <!DOCTYPE html>
 <!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
 <!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
 <!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
 <!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
     <head>
         <meta charset="utf-8">
         <meta http-equiv="X-UA-Compatible" content="IE=edge">
         <title></title>
         <meta name="description" content="">
         <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="../node_modules/bootstrap/dist/css/bootstrap.css">
     </head>
     <body>
         <!--[if lt IE 7]>
             <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
         <![endif]-->
           
           <div class="container">
               
                   <div class="row">
                               
                               <h1>Liste des populations</h1>
                                 <table class="table">
                                       <thead>
                                            <tr>
                                                 <th>name</th>
                                                 <th>continent</th>
                                                 <th>Population</th>
                                                 <th>GovernmentForm</th>
                                            </tr>
                                       </thead>
                                       <tbody>
                                       <?php      foreach($result as $data)  { ?>
                                           <tr>
                                                <td> <?php  echo  $data['name']; ?> </td>
                                                <td> <?php  echo  $data['continent']; ?> </td>
                                                <td> <?php  echo  $data['Population']; ?> </td>
                                                <td> <?php  echo  $data['GovernmentForm']; ?> </td>
                                           </tr>
                                        <?php }?>
                                       </tbody>
                                 </table>

                   </div>
                
           </div>
          
         
         <script src="" async defer></script>
     </body>
 </html>

 <?php 


     /*
    https://drive.google.com/open?id=0B2yTJoJ2FQP7UDF5UmpfYm4xb2s
    https://drive.google.com/open?id=0B2yTJoJ2FQP7VDFSZDZvVGpyaTQ

    Ou se placera la clé étrangère ?

    Créer la base, avec les attributs suivants pour chaque table :
    Page : http://pastebin.com/W2kiZEAJ
    Image : http://pastebin.com/0mZTnAVA

    Le nom de la base sera dev_blog

    (Conservez les noms et les valeurs par défaut, je vous
    enverrai des données pour remplir cette base)
*/



?>

                      