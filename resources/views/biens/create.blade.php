@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Formulaire d'enregistrement</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Biens</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

     <section class="section dashboard">
      <div class="card">
         <div class="card-body">
            <h5 class="card-title">Formulaire d'enregistrement de bien</h5>
             <!-- Bien Form -->
              <form 
              
                 method="POST"
                 enctype="multipart/form-data"
                 class="row g-3" 
                 name="enregistrement_biens"
                 action="{{route('biens.store')}}" 

                 >

                 @csrf

                <span class="text-center fs-3">Categorie</span>
                <div class="col-6">
                    <label for="inputCategorie" class="form-label">Categorie</label>
                    <select class="form-select form-select-sm" name="categorie_id"  id="inputCategorie" aria-label=".form-select-sm example">
                         <option selected>Choisir une categorie...</option>
                        @foreach($categories as $categorie)
                          <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                        @endforeach
                         
                  </select>
                </div> <!--End Categorie-->
                <div class="col-6">
                  <label for="inputScategorie" class="form-label">Sous categorie</label>
                   <select 
                       class="form-select form-select-sm" 
                       id="inputScategorie" 
                       aria-label=".form-select-sm example"
                       name="scategorie_id" 
                       OnChange ="enregistre_ordinateur();"
                       >
                         <option selected>Choisir une sous categorie...</option>
                         @foreach($scategories as  $scategorie)
                           <option value="{{$scategorie->id}}">{{$scategorie->name}}</option>
                         @endforeach
                  </select>
                </div> <!--End sous categorie -->

                <div class="col-6">
                    <label for="inputSscategorie" class="form-label">Sous sous categorie</label>
                     <select 

                       class="form-select form-select-sm" 
                       id="inputSscategorie"
                       aria-label=".form-select-sm example"
                       name ="sscategorie_id"

                       >
                         <option selected>Choisir une sous sous categorie...</option>
                        @foreach($sscategories as $sscategorie)
                          <option value="{{$sscategorie->id}}">{{$sscategorie->name}}</option>
                        @endforeach
                         
                  </select>
                </div> <!-- Sous sous categorie -->
                <div class="col-6">
                    <label for="inputName" class="form-label">Nom</label>
                    <input type="text" name="name" class="form-control" id="inputName" placeholder="Entrer le nom" required>
                </div>  <!--End nom -->
                <div class="col-6">
                    <label for="inputColor" class="form-label">Couleur</label>
                    <input type="text" name="couleur" class="form-control" id="inputColor" placeholder="Entrer la couleur" >
                </div>  <!--End Couleur -->
                <div class="col-6">
                    <label for="inputbattants" class="form-label">Nombre de battants</label>
                    <input type="text" name="nbre_battant" class="form-control" id="inputbattants" placeholder="Entrer le Nombre">
                </div>  <!--End battants -->
                <span class="text-center fs-3">Taille</span>
                <div class="col-4">
                    <label for="inputLongeur" class="form-label">Longeur</label>
                    <input type="text" name="longueur" class="form-control" id="inputLongeur" placeholder="Entrer longueur">
                </div>  <!--End longeur -->   
                 <div class="col-4">
                    <label for="inputLargeur" class="form-label">Largeur</label>
                    <input type="text" name="largeur" class="form-control" id="inputLargeur" placeholder="Entrer largeur">
                </div>   <!--End Largeur -->
                <div class="col-4">
                    <label for="inputHauteur"  class="form-label">Hauteur</label>
                    <input type="text" name="hauteur" class="form-control" id="inputHauteur" placeholder="Entrer hauteur">
                </div> <!--End Hauteur -->
                 <!--End taille -->
                <span class="text-center fs-3">Date achat</span>
                <div class="col-4">
                    <label for="inputDay" class="form-label">Jour</label>
                    <input type="text" name="day" class="form-control" id="inputDay" placeholder="Entrer le jour">
                </div>    <!--End Jour --> 
                 <div class="col-4">
                    <label for="inputMonth" class="form-label">Mois</label>
                    <input type="text" name="month" class="form-control" id="inputMonth" placeholder="Entrer le mois">
                </div> <!--End Mois -->  
                <div class="col-4">
                    <label for="inputYear" class="form-label">Année</label>
                    <input type="text" name="year" class="form-control" id="inputYear" placeholder="Entrer annee">
                </div>  <!--End Annee -->
                <!--End date -->  

                <div class="col-6">
                    <label for="inputPrice" class="form-label">Prix</label>
                    <input type="text" name="price" class="form-control" id="inputPrice" placeholder="Entrer le montant">
                </div><!--End prix -->   

                <div class="col-6">
                    <label for="inputMark" class="form-label">Marque</label>
                    <input type="text" name="marque" class="form-control" id="inputMark" placeholder="Entrer la Marque">
                </div>  <!--End Marque --> 
                <!-- PC -->
               <span id="form_ordinateur" style="visibility:hidden">
                  <div class="row pc g-3">
                   <span class="text-center fs-3">Ordinateur</span>
                      <div class="col-6">
                        <label for="inputDd" class="form-label">Disque dur</label>
                        <input type="text" name="disque_dur" class="form-control" id="inputDd" placeholder="Entrer la couleur" >
                      </div>   <!--End disque dur -->

                    <div class="col-6">
                        <label for="inputRam" class="form-label">RAM</label>
                        <input type="text" name="ram" class="form-control" id="inputRam" placeholder="Entrer la ram" >
                    </div>  <!--End Ram -->
                     <div class="col-6">
                        <label for="inputProcesseur" class="form-label">Processeur</label>
                        <input type="text" name="processeur" class="form-control" id="inputProcesseur" placeholder="Entrer le Processeur">
                    </div>  <!--End processeur -->
                    <div class="col-6">
                        <label for="inputGeneration" class="form-label">Generation</label>
                        <input type="text" name="generation" class="form-control" id="inputGeneration" placeholder="Entrer la generation">
                    </div>  <!--End generation -->
                </div> 
               </span><!--End pc-->
               
                <div class="col-6">
                    <label for="inputImmatriculation" class="form-label">Immatriculation</label>
                    <input type="text" name="immatriculation" class="form-control" id="inputImmatriculation" placeholder="Entrer l'immatriculation">
                </div><!--End immatriculation-->
                <div class="col-6">
                    <label for="inputPuissance" class="form-label">Puissance</label>
                    <input type="text" name="puissance" class="form-control" id="inputPuissance" placeholder="Entrer puissance">
                </div> <!--End puissant-->
                <div class="col-6">
                    <label for="inputMatiere" class="form-label">Matière</label>
                    <input type="text" name="matiere" class="form-control" id="inputMatiere" placeholder="Entrer matière">
                </div> <!--End matiere-->
                <div class="col-6">
                    <label for="inputPoids" class="form-label">Poids</label>
                    <input type="text" name="poids" class="form-control" id="inputPoids" placeholder="Entrer le poids">
                </div> <!--End matiere-->
                <div class="col-12 form-floating">
                    <textarea class="form-control" name="autres" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                      <label for="floatingTextarea">Autres</label>
                </div><!--End autre--> 

                 <div class="col-6">
                     <label for="" class="form-label">Etat du biens</label>
                       <div class="form-check">
                           <input class="form-check-input" type="radio" name="etat" value="bon" id="flexRadioDefault01">
                           <label class="form-check-label" for="flexRadioDefault01">
                           bon
                          </label>
                        </div>
                      <div class="form-check">
                            <input class="form-check-input" type="radio" name="etat" value="hors_service" id="flexRadioDefault3">
                           <label class="form-check-label" for="flexRadioDefault3">
                           hors service
                          </label>
                     </div>
                </div> <!-- End etat-->
                <div class="col-6">
                   <label for="" class="form-label">Disponibilité du biens</label>
                     <div class="form-check">
                         <input class="form-check-input" type="radio" name="disponibilite" value="occupe" id="flexRadioDefault1">
                         <label class="form-check-label" for="flexRadioDefault1">
                         occupe
                        </label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="disponibilite" value="libre" id="flexRadioDefault2">
                         <label class="form-check-label" for="flexRadioDefault2">
                         libre
                        </label>
                     </div>
                </div><!--End disponibilite -->
                <span class="text-center fs-3">Image du biens</span>
                <div class="col-6 input-group mb-3">
                    <input class="form-control" name="image" type="file" id="formFile">
                </div><!--End image-->
                <span class="text-center fs-3">Localisation</span>
                <div class="col-6">
                  <label for="inputEntrepot" class="form-label">Entrepôt</label>
                  <select 

                      class="form-select form-select-sm" 
                      id="inputEntrepot"
                      aria-label=".form-select-sm example"
                      name="entrepot_id"
                      required 
                      >
                         <option selected>Choisir un entrepôt...</option>
                         @foreach($entrepots as $entrepot)
                            <option value="{{$entrepot->id}}">{{$entrepot->name}}</option>
                         @endforeach
                  </select>
                </div><!--End entrepot-->
                <div class="col-6">
                    <label for="inputEmplacement" class="form-label">Emplacement</label>
                    <select 

                        class="form-select form-select-sm"
                        id="inputEmplacement" 
                        aria-label=".form-select-sm example"
                        name="emplacement_id" 

                        >
                         <option selected>Choisir un emplacement...</option>
                         @foreach($emplacements as $emplacement)
                            <option value="{{$emplacement->id}}">{{$emplacement->name}}</option>
                         @endforeach
                  </select>
                </div><!--End emplacement-->
                <div class="col-6">
                    <label for="inputEspace" class="form-label">Espace</label>
                    <select 
                      class="form-select form-select-sm" 
                      id="inputEspace" 
                      aria-label=".form-select-sm example"
                      name="espace_id" 

                      >
                         <option selected>Choisir un espace...</option>
                        @foreach($espaces as $espace)
                          <option value="{{$espace->id}}">{{$espace->name}}</option>
                       @endforeach
                  </select>
                </div><!--End espace-->

                 <div class="col-6">
                    <label for="inputEntite" class="form-label">Entité</label>
                    <select 

                      class="form-select form-select-sm" 
                      id="inputEntite" 
                      aria-label=".form-select-sm example"
                      name="entite_id" 

                      >
                         <option selected>Choisir une entité...</option>
                         @foreach($entites as $entite)
                            <option value="{{$entite->id}}">{{$entite->name}}</option>
                         @endforeach
                  </select>
                </div><!--End entite-->
                <div class="">
                   <button type="submit" class="btn btn-success">J'enregistre un bien</button>
                </div><!--End submit-->
              </form>
         </div>
      </div>
    </section>
<script language="JavaScript">
 
            function enregistre_ordinateur() {
            if (document.enregistrement_biens.scategorie_id.selectedIndex == 1)
            document.getElementById('form_ordinateur').style.visibility = 'visible';
            else
            document.getElementById('form_ordinateur').style.visibility = 'hidden';
            }
</script>
</main><!-- End #main -->
@endsection