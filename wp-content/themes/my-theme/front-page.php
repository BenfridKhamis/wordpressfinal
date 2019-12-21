<?php get_header(); ?>
<div class="container">

<?php
if ( have_posts() ) {
  while ( have_posts() ) {
    /**
     * La méthode the_post() permet de charger le post courant
     * Un post est un type de contenu, par exemple une actualité ou une page
     **/
      $banner_background_image = get_field('banner_background_image');
      $conference_image = get_field('conference_image');
      $actus_img = get_field('atcus_img');
      $actus_img2 = get_field('atcus_img2');
      $actus_img3 = get_field('atcus_img3');
      $actus_img4 = get_field('atcus_img4');
      $actus_img4 = get_field('atcus_img4');
      $programe_image = get_field('programe_image');
    the_post(); 

    /**
     * La méthode the_content() affiche le contenu du post en cours
     * Il s'agit du contenu que vous avez renseigné dans le back-office
     * Il existe d'autres méthodes, par exemple pour afficher le Titre du contenu, on peut utiliser la méthode the_title()
     */
    the_content();
?>
      
<section class="section1" style="img: url(<?php echo $banner_background_image['url']; ?>)">
    <div>
     

        <p>Les rencontres de la fondation le 03 décembre à Bruxelles</p>
        <h1> CHAINE ALIMENTAIRE VEGETALE ET DURABLE </h1>
        <h1> UNE QUESTION D'EQUILIBRE !</h1>
        <button>S'INSCRIRE AUX RENCONTRES</button>
    </div>
</section>
    
    
<section class="section2">
    <div>
        <h1>LA CONFERENCE</h1>
        <p>Les rencontres de la fondation s'intitulent Chaine alimentaire végétale et durabilité; 
            une question d'équilibre.Elles se tiendront le 3 décembre prochain à Bruxelles et ont pour 
            objectif de décrypter la transition nutritionnelle.</p>
        
    </div>
</section>


<section class="section3" style="img: url(<?php echo $conference_image['url']; ?>)"></section>


<section class="section4" style="img: url(<?php echo $programe_image['url']; ?>)">
    <div>

        <h1>Au programme</h1>
        <div id="grid">
            <div id="menue1">
                <h2>LES VEGETAUX DANS LA CHAINE ALIMENTAIRE</h2>
                
               
                <p>8:30 Introduction par Christophe Fondation</p>
          <p>9:00 Wim de Vries Wageningen University</p>
         <p> 9:45 Benjamin Alles Paris XIII University </p>
         <p> 10:15 Armando Perez Cueto Copenhagen University</p>
         <p> 10:45 Cofee break</p>
    
            </div>
            <div id="menue2">
                <h2>LES ACTIVITES DE LA FONDATION</h2>
                <p> 11:15 Jacynthe Lafrenière, Lauréate du Prix de recherche</p>
                <p> 11:35 Le projet EPICALIM de la Fondation</p>
                <p> 12:00 Cérémonie du Prix de recherche</p>
                <p> 12:30 Lunch</p>
            
            </div>
        </div>
        <button>S'INSCRIRE AUX RENCONTRES</button>
    </div>
</section>


<section class="section5">
    <div>
        <h1>Les orateurs</h1>
        <p class="p">Lorem ipsum calidae</p>
        <div class="portrait">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/portrait.jpg">
        
        </div>
    </div>
</section>
    
<section class="section6">
    <div>
        <h1>Information Pratiques</h1>
        <div class="divimg">
            <div class="rect">
                <div class="img img2">
                <svg xmlns="http://www.w3.org/2000/svg" width="56" height="75" viewBox="0 0 56 75">
                    <path fill="none" fill-rule="evenodd" stroke="#FFF" stroke-width="3.5" d="M28 2c14.36 0 26 11.54 26 25.775 0 9.49-8.667 24.33-26 44.521-17.333-20.19-26-35.03-26-44.52C2 13.54 13.64 2 28 2zm0 11.556c-7.446 0-13.481 6.035-13.481 13.481S20.554 40.519 28 40.519s13.481-6.036 13.481-13.482S35.446 13.556 28 13.556z"/>
                    </svg>
                    <p> Square Brussels Mont des Arts 1000 Bruxelles Belgique</p>
                </div>
                <hr>
                <div class="img">
                    <svg xmlns="http://www.w3.org/2000/svg" width="62" height="62" viewBox="0 0 62 62">
                    <path fill="#FFF" fill-rule="evenodd" d="M30.765.405c4.177 0 8.178.832 11.993 2.46 7.642 3.258 13.162 8.769 16.41 16.343a29.912 29.912 0 0 1 2.46 11.962c0 4.177-.825 8.182-2.46 11.994-3.251 7.574-8.772 13.12-16.41 16.378a30.271 30.271 0 0 1-11.993 2.456c-4.18 0-8.15-.821-11.962-2.456-7.575-3.25-13.12-8.79-16.378-16.378C.797 39.363 0 35.347 0 31.17c0-4.18.797-8.16 2.425-11.962C5.682 11.62 11.228 6.116 18.803 2.865A29.973 29.973 0 0 1 30.765.405zm0 3.707c-4.886 0-9.404 1.215-13.545 3.64-4.145 2.425-7.459 5.72-9.873 9.873-2.405 4.135-3.605 8.66-3.605 13.545 0 3.671.691 7.217 2.123 10.544 1.432 3.346 3.352 6.252 5.76 8.662 2.411 2.408 5.29 4.31 8.627 5.761 3.335 1.45 6.841 2.158 10.513 2.158 4.886 0 9.43-1.22 13.577-3.64 4.176-2.432 7.49-5.724 9.908-9.873 2.432-4.174 3.636-8.726 3.636-13.612 0-4.886-1.21-9.403-3.636-13.545-2.429-4.145-5.735-7.44-9.908-9.873-4.15-2.418-8.691-3.64-13.577-3.64zM30.879 12c1.057 0 1.98.843 1.98 1.89v17.466l9.57 9.507c.737.73.786 1.854 0 2.631-.68.675-1.948.675-2.632 0L29.58 33.414c-.41-.407-.58-.913-.513-1.521 0-.098-.067-.235-.067-.267V13.89c0-1.047.886-1.89 1.88-1.89z"/>
                    </svg>
                    <p>Le 03.12.2019 de 8h30 à 12h30</p>
                </div>
                <hr>
                <div class="img">
                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="61" viewBox="0 0 31 61">
    <path fill="#FFF" fill-rule="evenodd" d="M30.184 2.985v16.93c0 .9-2.794 3.1-4.662 4.474v4.99a2.451 2.451 0 0 1 1.659 2.312v26.496c0 1.354-1.1 2.454-2.454 2.454h-1.719a2.453 2.453 0 0 1-2.451-2.454V31.691a2.45 2.45 0 0 1 1.655-2.312v-4.94c-1.982-1.363-5.029-3.611-5.029-4.525V2.985c0-1.357.657-2.454 2.121-2.454h.878v17.658c0 .423.534.762 1.193.762.66 0 1.196-.34 1.196-.762V.531h2.21v17.658c0 .423.536.762 1.195.762s1.196-.34 1.196-.762V.531h.36c1.466 0 2.652 1.097 2.652 2.454zM6.529.64S0 4.907 0 16.205v2.235c0 11.152 2.451 16.064 4.094 18.908v21.806c0 .999.811 1.81 1.813 1.81H7.18c.999 0 1.814-.811 1.814-1.81V36.282c.028-.158.047-.323.047-.49V3.146c0-1.386-.542-3.304-2.511-2.508z"/>
</svg>
                    <p>Healty Walking Dinner</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section7">
    <div>
        <h1>vidéos</h1>
        <div class="grid">
            <div class="vi1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/video.jpg">" width="100%" height="500" frameborder="0" allowfullscreen></iframe> 
            
           
            </div>
        </div>
    </div>
</section>


<section class="section8">
    <div>
        <h1>ACTUS</h1>
        <div class="grid">
            <div class="rect1">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image1.png">
                <p><b>Ville & Agriculture: rapprochement ou distantion? </b> <p>
                <p class="p">Cette année, les 11e Rencontres Louis Bonduelle se dérouleront le 12 juin.</p>
                <center><button class="b">Lire la suite</button></center>
                <p class="p2">4 Octobre 2019</p>
            </div>
            <div class="rect2">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image2.png">
                <p><b>Un rôle dans la transition vers des comportements durables</b></p>
                <p class="p">Les activités de la Fondation Louis Bonduelle visent à sensibiliser ses différents publics...</p>
                <center><button class="b">Lire la suite</button></center>
                <p class="p2" style="margin-top:40px;">4 Octobre 2019</p>
            </div>
            <div class="rect3">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image3.png">
                <p><b>Quand la lutte contre le gaspillage alimentaire sert la lutte contre la faim</b></p>
                <p class="p">En Outaouais, des organismes anti-gaspillage ...</p>
                <center><button class="b">Lire la suite</button></center>
                <p class="p2" style="margin-top:40px;">4 Octobre 2019</p>
            </div>
            <div class="rect4">
            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image4.png">
                <p><b>Légumineuse et légume: quelles différences?</b></p>
                <p class="p">Qu'est ce qu'une légumineuse? Quels sont leurs atouts ...
                </p>
                <center><button class="b">Lire la suite</button></center>
                <p class="p2" style="margin-top:70px;">4 Octobre 2019</p>
            </div>
        </div>
    </div>
</section>


<section class="section9">
    <div>
    <img src="<?php echo get_template_directory_uri(); ?>/assets/img/image5.png">
    </div>
</section>
    

<?php
  }
}
?>

</div>

<?php get_footer(); ?>