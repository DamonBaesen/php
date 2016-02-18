<?php
 $posts = [
        ["profilePicture" =>  "https://s3.amazonaws.com/uifaces/faces/twitter/k/128.jpg" , 
         "name" => "Theresa W." , 
         "place" => "East River Park",
        "placeExtra" => "Brooklyn, NY",
        "picturePlace" => "http://photos.cntraveler.com/2015/11/24/56549f68659c4b48748655fc_benagil-sea-cave-algarve-portugal-cr-getty.jpg"],
        
     ["profilePicture" =>  "http://www.uni-regensburg.de/Fakultaeten/phil_Fak_II/Psychologie/Psy_II/beautycheck/english/durchschnittsgesichter/m(01-32)_gr.jpg" , 
         "name" => "Nina M." , 
         "place" => "Rubirosa",
        "placeExtra" => "New York, NY",
        "pricturePlace" => ""],
     
     ["profilePicture" =>  "http://pngimg.com/upload/face_PNG5660.png" , 
         "name" => "Sean B." , 
         "place" => "Blue Bottle Coffee",
        "placeExtra" => "South of Market, San Fransisco",
        "picturePlace" => ""],
     
     ["profilePicture" =>  "http://cdn.stylisheve.com/wp-content/uploads/2012/01/Men-Hairstyles-for-round-face_06.jpg" , 
         "name" => "Mike A." , 
         "place" => "Land's Workout",
        "placeExtra" => "San Fransisco",
        "picturePlace" => "http://photos.cntraveler.com/2015/11/24/56549cc7659c4b4874865506_mu-cang-chai-vietnam-cr-getty.jpg"],
    ];

?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>SWARM</title>
</head>
<body>

<style>
    
    body
    {
        font-family: Helvetica;
    }
    
    #profilePicture
    {
        border-radius = 10px;
    }
    article 
    {
        display: flex;
        margin-bottom: 30px;
    }
    
    article img
    {
        width: 60px;
    }
    
    article h3
    {
        margin-top: 0;
        padding-top: 0;
        margin-bottom: 0.4em;
    }
    
    article div
    {
        display: block;
    }
    
    #picturePlace
    {
    width: 200px;    
    }
    
    #place1
    {
        color: blue;
    }
    
    #place2
    {
        color: darkblue;        
    }
    
    </style>



<section class="timeline">
   <?php foreach ( $posts as $post ): ?>
    <article>
       <div>
       <img id="profilePicture" src=" <?php echo $post['profilePicture'] ?>" alt="">
       </div>
       
       <div>
        <h3><?php echo $post['name'] ?></h3>
        <div id="place1"> <?php echo $post['place'] ?></div>
        <div id="place2"> <?php echo $post['placeExtra'] ?></div>
        <img id="picturePlace" src="  <?php if(!empty($post["picturePlace"])  )
            {
                echo $post["picturePlace"] ;      
            }?>">
        </div>
        </div>
    </article>
    <?php endforeach ?>
       
    
   
</section>
    
    
    
    
    
</body>
</html>