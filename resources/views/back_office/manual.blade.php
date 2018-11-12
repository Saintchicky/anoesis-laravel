@extends('admin')

@section('content')



<div class="title_page"><h1>Manuel du site</h1></div>

<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top">
              <a class="navbar-brand">Aide-Site</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                  
            <ul class="nav nav-tabs" id="myTab" role="tablist">
            {{-- ---------------------Menu TAB----------------------- --}}
            <li class="nav-item">
              <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">Accueil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="maitenance-tab" data-toggle="tab" href="#maitenance" role="tab" aria-controls="maitenance" aria-selected="false">Mode Maitenance</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="customer-tab" data-toggle="tab" href="#customer" role="tab" aria-controls="customer" aria-selected="false">Gestion Client</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="posts-tab" data-toggle="tab" href="#posts" role="tab" aria-controls="posts" aria-selected="false">Mes articles</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="manage-tab" data-toggle="tab" href="#manage" role="tab" aria-controls="manage" aria-selected="false">Gestion du site</a>         
            </li>
        {{-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Le site
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" id="manage-tab" data-toggle="tab" href="#manage" role="tab" aria-controls="manage" aria-selected="false">Gestion du site</a>
            <a class="dropdown-item" href="#a_propos">A propos</a>
            <a class="dropdown-item" href="#services">Les services</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#projets">Les projets</a>
            <a class="dropdown-item" href="#categorie">Création Catégorie</a>
            <a class="dropdown-item" href="#page">Création Page</a>
            <a class="dropdown-item" href="#description_page">Création Page description</a>
            <a class="dropdown-item" href="#carou">Création Page Carrousel et galerie photo</a>
            <a class="dropdown-item" href="#plans">Creation Plans</a>
            <a class="dropdown-item" href="#planches">Creation Planches</a>


          </div>
        </li> --}}

           
    
           
          </ul>
           {{-- ------------------Fin Menu Tab---------------------- --}}
                </div>
        </nav>






    <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <br>
            <br>
            <h2>Bienvenue dans le Back-office</h2>
            <br>
            <p>Pour faciliter la gestion du contenu et les prises de contact client, voici un mode d’emploi détaillé du site Web et du gestionnaire de suivi clientèle</p>
            <p>Le manuel d'utilisation se décompose dans l'ordre des options du menu de gestion du site :</p>
            <ul>
                <li>Mode Maintenance</li>
                <li>Gestion Client</li>
                <li>Mes articles</li>
                <li>Gestion du site</li>
            </ul>
        </div>
        <div class="tab-pane fade" id="maitenance" role="tabpanel" aria-labelledby="maitenance-tab">
            <br>
            <br>
            <h2>|| Le mode Maintenance ||</h2>
            <br>
            <div class="row">
                <div class="col-md-6">
                    <p>En cliquant sur « maintenance On » dans le menu du back-office, le mode maintenance est activé et le site est fermé aux visiteurs.
                            La page "site en construction" apparaît.</p>
                </div> 
                <div class="col-md-6">
                    <img class="img-fluid" src="{{asset("site/maintenance_on.png")}}" alt="maitenance">    
                </div>
            </div> 
            <br> 
            <div class="row">
                <div class="col-md-6">
                    <p>Pour l’utilsateur du back-office le site est accessible par le menu back-office->Voir le site</p>
                    <p>Dans l’url du site juste après atelier-opa.fr on peut voir /admin (ce qui veut dire qu’on est dans le mode maintenance)</p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid w-50" src="{{asset("site/voir_site.png")}}" alt="voir_site">
                </div>
            </div> 
            <br>
            <div class="row">
                <div class="col-md-6">
                    <p>Le bouton vert signale que nous sommes en maintenance</p>
                    <p>Pour désactiver le mode, il suffit de cliquer sur maintenance off</p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid w-50" src="{{asset("site/maitenance_button.png")}}" alt="maitenance_button">
                </div>
            </div>
            <br>
        </div>
        <div class="tab-pane fade" id="customer" role="tabpanel" aria-labelledby="customer-tab">
                <br>
                <br>
                <h2>|| Gestion Client ||</h2>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <h3>La Base de donnée Client</h3>
                        <br>
                        <p>Le formulaire de contact présent sur le site, envoie les données dans le serveur qui sont récupérées dans la section BDD Client du Back-office</p>
                        <p>Les colonnes peuvent se classer en cliquant sur les petites flèches en ordre croissant ou décroissant. <br>
                                Il y a un moteur de recherche pour accéder directement à la ligne du nom recherché. <br>
                                Enfin dans la colonne action, un bouton permet d'accéder à la fiche du client.</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset("site/bdd_client.png")}}" alt="bdd">
                    </div>
                </div>
                <hr>
                <br>
                <h2>Le profil Client</h2>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <p>Il y  a 3 onglets dans la fiche Client:</p>
                        <ol>
                            <li>L'onglet profil avec les informations du tableau précédent en fiche</li>
                            <li>L'onglet messages du questionnaire</li>
                            <li>L'onglet édition, qui permet de mettre à jour les informations et la priorité</li>
                            <br>
                            <p>
                                Sur le côté droit de la page on peut rédiger des notes personnalisées pour chaque profil.
                                <br>
                                Les notes sont modifiables et supprimables.
                            </p>
                        </ol>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset("site/profil_client.png")}}" alt="profil_client">
                    </div>
                    <br>
                    <div class="row">
                        <div class="col-md-6">
                            <p class="font-weight-bold">!!! La Suppression de la fiche client se fait dans l’onglet édition !!!</p>
                        </div>
                        <div class="col-md-6">
                            <img class="img-fluid w-50" src="{{asset("site/delete_custo.png")}}" alt="suppression_client">
                        </div>
                    </div>
                    <br>
                </div>
        </div>
        <div class="tab-pane fade" id="posts" role="tabpanel" aria-labelledby="posts-tab">
                <br>
                <br>
                <h2>|| Mes Articles ||</h2>
                <br>
            <div class="row">
                <div class="col-md-6">
                    <p>Pour accéder à la rédaction des articles et des témoignages : <br>
                            Menu du back-office-> Rédaction Post <br>
                            Se trouve le carrousel des témoignages <br>
                            Pour ajouter un post, cliquer sur « Ajouter un post »<br>
                    </p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid w-50" src="{{asset("site/ajouter_post.png")}}" alt="bouton_ajouter">
                </div>
            </div>
                <br>
                <hr>
                <br>
            <div class="row">
                <div class="col-md-6">
                    <p>Le post a un titre, un corps de texte et un fichier type photo ou image</p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{asset("site/post_sans_option.png")}}" alt="créer_post">
                </div>
            </div>
                <br>
                <hr>
                <br>
            <div class="row">
                <div class="col-md-6">
                    <p>La deuxième étape consiste à associer le post à une page si c’est un témoignage <br>
                            Puis de choisir où l’afficher : Dans le carrousel, en tant qu’article rédigé par 
                            l’utilisateur ou un article sur soi avec un lien pour envoyer le visiteur 
                            sur la provenance de celui-ci</p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{asset("site/post_ac_option.png")}}" alt="option_post">
                </div>
            </div>
                <br>
                <hr>
                <br>
            <div class="row">
                <div class="col-md-6">
                    <p>
                        Si c’est un "article sur moi", un champ apparaît pour entrer l’url de l’article externe au site. <br>
                        Il est inutile de taper http:// mais directement le site, par exemple : atelier-opa.fr
                    </p>
                </div>
                <div class="col-md-6">
                    <img class="img-fluid" src="{{asset("site/ac_lien_post.png")}}" alt="lien_post">
                </div>
            </div>
            </div>

            <div class="tab-pane fade" id="manage" role="tabpanel" aria-labelledby="manage-tab">
                    <br>
                    <br>
                    <h2>|| Gestion du site ||</h2>
                    <br>
                <div class="row">
                    <div class="col-md-6">
                        <h3 id="a_propos">A propos</h3>
                        <br>
                        <p>Aller dans le back-office puis menu->Création Profil</p>
                        <p>
                            <ol>
                                <li>Rédiger votre Texte</li>
                                <li>Ajouter votre photo profil</li>
                                <li>Valider</li>
                            </ol>
                        </p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset("site/profil_edition.jpg")}}" alt="profile">
                    </div>
                    <br>
                    <div class="col-md-6">
                        <p>Pour Modifier votre Profil:</p>
                        <ol>
                            <li>Cliquer sur Modifier</li>
                            <li>Choisir l’élément qu’on souhaite modifier « Le texte » ou « La photo »</li>
                        </ol>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset("site/modif_profil.jpg")}}" alt="profil_edition">
                    </div>
                    <br>
                    <div class="col-md-6">
                        <p>Pour Changer le texte :</p>
                        <ol>
                            <li>L’éditeur apparaît pour faire votre modification</li>
                            <li>Sauvegarder</li>

                        </ol>
                    </div>
                    <div class="col-md-6">
                        <p>Pour Changer la photo :</p>
                        <ol>
                            <li>Cliquer sur Parcourir</li>
                            <li>Choisissez la nouvelle photo</li>
                            <li>Sauvegarder</li>
                        </ol>
                    </div>
                    <div class="col-md-12">
                        <p>Vous pouvez supprimer le texte et la photo de profil avec le bouton supprimer</p>
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <h3 id="services">Les services</h3>
                        <br>
                        <p>Pour accéder à la création des services, il faut aller dans le back-office puis Menu->Création Services
                            <br>Il existe 4 sections pour détailler les types de services
                        </p>
                        <ol>
                            <li>L’utilisateur peut modifier les titres</li>
                            <li>Puis ajouter les types de services dans la colonne correspondante</li>
                        </ol>
                    
                   
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset("site/services_edition.jpg")}}" alt="services">
                    </div>
                    
                    <div class="col-md-6">
                        <br>
                            <p>
                                    Une fois les types de services ajoutés, on peut les modifier en cliquant sur le bouton modifier. <br>
                                    Note : il faut cliquer sur le bouton sauvegarde correspondant au service qu’on souhaite modifier 
                                    et sur le bouton supprimer pour enlever le service correspondant.
                                        
                            </p>
                            <p>Ex : Modifier-> Visite Show-room puis cliquer sur le bouton Sauvegarder en dessous du champ</p>
                    </div>
                    <div class="col-md-6">
                        <br>
                            <img class="img-fluid" src="{{asset("site/modif_services.jpg")}}" alt="modif_services">
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <h3 id="projets">Les projets</h3>
                        <br>
                        <h4 id="catégorie">Création de la Catégorie</h4>
                        <br>
                        <p>Dans Back-office, Menu-> Création Catégorie</p>
                        <p>Puis créer la catégorie</p>    
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset("site/cat_create.jpg")}}" alt="cat_create">
                    </div>
                    <br>
                    <div class="col-md-6">
                        <p>Pour modifier la catégorie</p>
                        <ol>
                            <li>Cliquer sur le bouton modifier dans la colonne Catégorie</li>
                            <li>Puis sauvegarder pour la catégorie correspondante</li>
                        </ol>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset("site/cat_modif.jpg")}}" alt="cat_modif">
                    </div>
                    <br>
                    <div class="col-md-6">
                        <p>La Catégorie possède une description :</p>
                        <p>1.	Cliquer sur le bouton édition pour aller sur la page édition de la description</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset("site/edit_cat.jpg")}}" alt="edit_cat.jpg">
                    </div>
                    <br>
                    <div class="col-md-6">
                        <p>2.	 Rédiger la description dans l’éditeur</p>
                        <p>3.	Sauvegarder</p>
                        <p>Vous avez un aperçu de la description de la page tel qu’il apparaîtra dans le site lorsque le visiteur cliquera sur la catégorie choisie.</p>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset("site/cat_description.jpg")}}" alt="cat_description.">
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="row">
                    <div class="col-md-6">
                            <h4 id="page">Création de la sous-catégorie ou Page Projet</h4>
                            <br>
                          <p>1.	Associer obligatoirement La catégorie à La Page projet grâce au menu déroulant</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset("site/association_cat.jpg")}}" alt="association_cat">
                    </div>
                    <br>
                    <div class="col-md-6">
                        <p>2.	Rédiger le titre</p>
                        <p>3.	Puis Cliquer sur Créer</p>
                        <p>Il y a un bouton pour filtrer par type de catégorie</p>
                    </div>
                    <br>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset("site/create_title_page.jpg")}}" alt="create_title_page">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <br>
                        <h4>Le contenu de la page</h4>
                        <br>
                        <p>Une fois le titre de la page projet créé, on peut travailler sur les différentes sections :</p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <img class="img-fluid" src="{{asset("site/tableau_section_page.jpg")}}" alt="tableau_section_page">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <ol>
                            <li>Les titres de pages sont modifiables comme ceux de la catégorie</li>
                            <li>La description de la page</li>
                            <li>Le carrousel qu’on retrouve à l’accueil, la galerie de photos dans les pages</li>
                            <li>Les plans d’architecte</li>
                            <li>Les planches</li>
                        </ol>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <img class="img-fluid" src="{{asset('site/modif_titre_page.jpg')}}" alt="modif_titre_page">
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <h4 id="description_page">La description de la page</h4>
                        <br>
                        <p>Pour ajouter la description de la page, nous retrouvons la même manipulation que dans l’édition de la description de la catégorie</p>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset('site/descript_page.jpg')}}" alt="descript_page">
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <h4 id="carou">Le carrousel et la galerie photo</h4>
                        <br>
                       <p> Dans cette section, on peut:</p>
                       <ol>
                           <li>Poster des photos jusqu’à 10 en même temps (en haut de la page)</li>
                           <li>Visionner les photos choisies à mettre dans le carrousel</li>
                           <li>Changer l’ordre des photos</li>
                       </ol>
                    </div>
                    <div class="col-md-6">
                        <img class="img-fluid" src="{{asset('site/photo_gal.jpg')}}" alt="photo_gal">
                    </div>
                    
                    <div class="col-md-6">
                        <br>
                        <p>En cliquant sur le bouton Slide pour l’édition une fenêtre apparaît pour l’édition</p>       
                    </div>
               
                    <div class="col-md-6">
                        <br>
                            <img class="img-fluid" src="{{asset('site/edit_gal.jpg')}}" alt="edit_gal">
                    </div>

                    <div class="col-md-6">
                        <br>
                        <p>On peut éditer un titre (limité à 191 caractères), un descriptif pour le carrousel (limité à 255 caractères), et une 
                            description pour les diapos dans les pages projet
                        </p>       
                    </div>
                    <div class="col-md-6">
                        <br>
                            <img class="img-fluid" src="{{asset('site/diapo_photo.jpg')}}" alt="diapo_photo">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <p>Il y a des options pour mettre en avant des photos dans le carrousel, sur la page home et la page catégorie
                                Exemple d’une photo mise en avant :
                        </p>
                        <p>On peut voir que la photo est bien mise en avant avec 
                                un "oui" pour le carrousel et un "oui" pour la page principale et catégorie, qui sont soulignés en vert pour mieux les repérer
                            </p>
                    </div>
    
                    <div class="col-md-6">
                        <br>
                        <img class="img-fluid" src="{{asset('site/photo_main.jpg')}}" alt="photo_main">
                    </div>
 
                    <div class="col-md-6">
                        <br>
                        <p>Les cases sont bien cochées pour la mise en avant.
                                Dès que l’on supprime une photo, cela supprime également tout son texte. On ne peut pas modifier la photo. 
                                Enfin on peut associer la photo à une autre page.

                        </p>
                    </div>
 
                    <div class="col-md-6">
                        <br>
                            <img class="img-fluid" src="{{asset('site/edit_photo_car.jpg')}}" alt="edit_photo_car">
                    </div>
                </div>
                <br>
                <hr>
                <br>
                <div class="row">
                    <div class="col-md-6">
                        <h4 id="plans">Les plans d'architecte</h4>
                        <br>
                        <p>Dans cette section, on peut:</p>
                        <ol>
                            <li>Créer le titre du plan</li>
                            <li>Associer un type de plan</li>
                            <li>Modifier ou Supprimer les plans</li>
                        </ol>
                        <br>
                        <p>Il faut créer un titre de plan pour associer un type de plan (gauche droite ou un plan)</p>
                    </div>
                    <div class="col-md-6">
                            <img class="img-fluid" src="{{asset('site/plan_crea.jpg')}}" alt="plan_crea">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <p>Ce qui emmène sur la page d’édition du type de plan que vous avez choisi. Exemple: Editer un plan</p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <img class="img-fluid" src="{{asset('site/edit_one_plan.jpg')}}" alt="edit_one_plan">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <p>Il faut associer le plan à une page, </p>
                        <p>puis entrer sa description et ajouter l’image du plan->Sauvegarder</p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <img class="img-fluid" src="{{asset('site/asso_plan_page.jpg')}}" alt="asso_plan_page">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <p>On a la même configuration avec Plan gauche et droite</p>
                        <p>
                            Il faut associer la page et bien mettre du contenu (légende, description, et photo du plan) 
                            dans plan gauche et droite sinon cela ne s’enregistrera pas.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <img class="img-fluid" src="{{asset('site/edit_gauche_droite_plan.png')}}" alt="edit_gauche_droite_plan">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <p>
                            Une fois le type de plan créé, nous retournons automatiquement dans Création Page. 
                            Il suffit de retrouver la page sur laquelle 
                            nous travaillons dans le tableau et de cliquer sur le bouton Edition dans section plan
                        </p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <img class="img-fluid" src="{{asset('site/bouton_edit_plan.jpg')}}" alt="bouton_edit_plan">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <p>La partie modification ressemble à celle du site sans les boutons d’action</p>
                        <p>
                            On peut voir le bouton pour Editer Titre qui permet de modifier le titre du plan
                            Le bouton qui supprime les plans et ses textes
                        </p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <img class="img-fluid" src="{{asset('site/modif_plan.jpg')}}" alt="modif_plan">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <p>
                                Et en dessous des images plans :<br>
                                Un bouton menu déroulant comme celui de la création du type de Plan.
                                
                        </p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <img class="img-fluid" src="{{asset('site/bouton_edit_planG.png')}}" alt="bouton_edit_planG">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <p>Avec ce menu, on peut éditer le texte et modifier l’image Plan</p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <img class="img-fluid" src="{{asset('site/dropdown_menuG.png')}}" alt="dropdown_menuG">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <p>En cliquant sur Editer Texte Gauche une fenêtre pour la modification apparaît</p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <img class="img-fluid" src="{{asset('site/window_modif_plan.png')}}" alt="window_modif_plan">
                    </div>
                    <div class="col-md-6">
                        <br>
                        <p>On retrouve les mêmes possibilités de modification avec le Plan droit et le plan autour du texte</p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <img class="img-fluid" src="{{asset('site/plan_centre.png')}}" alt="plan_centre">
                    </div>      
                </div>
                <br>
                <hr>
                <div class="row">
                    <div class="col-md-6">
                        <h4 id="planches">Les planches</h4>
                        <br>
                        <p>Pour utiliser cette section:</p>
                        <ol>
                            <li>Il faut d'abord glisser les fichiers images</li>
                            <li>Le fichier apparaît, ensuite on peut éditer celui de droite</li>
                        </ol>
                        <br>
                        <p>Puis en cliquant sur Éditer une fenêtre apparaît pour l’édition</p>
                    </div>
                    <div class="col-md-6">
                        <br>
                        <img class="img-fluid w-50" src="{{asset('site/edit_planches.png')}}" alt="edit_planches">
                    </div>
                </div>
            </div>
        </div>
       
    </div>
</div>


@endsection