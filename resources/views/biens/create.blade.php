@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Biens</h1>
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
            <h5 class="card-title">Enregistrer un bien</h5>
             <!-- Bien Form -->
              <form 
              
                 method="POST"
                 action="" 
                 enctype="multipart/form-data"
                 class="row g-3" 
                 name="enregistrement_biens"
                 >

                 @csrf

                <span class="text-center fs-3">Categorie</span>
                <div class="col-6">
                    <label for="inputCategorie" class="form-label">Categorie</label>
                    <select class="form-select form-select-sm" id="inputCategorie" aria-label=".form-select-sm example">
                         <option selected>Choisir une categorie</option>
                         <option value="1">Informatique</option>
                         <option value="2">Electromenager</option>
                         <option value="3">Vehicule</option>
                  </select>
                </div> <!--End Categorie-->
                <div class="col-6">
                  <label for="inputScategorie" class="form-label">Sous categorie</label>
                   <select 
                       class="form-select form-select-sm" 
                       id="inputScategorie" 
                       aria-label=".form-select-sm example"
                       name="scategorie" 
                       OnChange ="enregistre_ordinateur();"
                       >
                         <option selected>Choisir une sous categorie</option>
                         <option value="1">Ordinateur</option>
                         <option value="2">Electromenager</option>
                         <option value="3">Telephone</option>
                  </select>
                </div> <!--End sous categorie -->

                <div class="col-6">
                    <label for="inputSscategorie" class="form-label">Sous sous categorie</label>
                     <select class="form-select form-select-sm" id="inputSscategorie" aria-label=".form-select-sm example">
                         <option selected>Choisir une sous sous categorie</option>
                         <option value="1">Ordinateur bureau</option>
                         <option value="2">PC</option>
                         <option value="3">Mobile</option>
                  </select>
                </div> <!-- Sous sous categorie -->
                <div class="col-6">
                    <label for="inputName" class="form-label">Nom</label>
                    <input type="text" class="form-control" id="inputName" placeholder="Entrer le nom" required>
                </div>  <!--End nom -->

                <span class="text-center fs-3">Date achat</span>
                <div class="col-4">
                    <label for="inputDay" class="form-label">Jour</label>
                    <input type="text" class="form-control" id="inputDay" placeholder="Entrer le jour" required>
                </div>    
                 <div class="col-4">
                    <label for="inputMonth" class="form-label">Mois</label>
                    <input type="text" class="form-control" id="inputMonth" placeholder="Entrer le mois" required>
                </div>  
                <div class="col-4">
                    <label for="inputYear" class="form-label">Année</label>
                    <input type="text" class="form-control" id="inputYear" placeholder="Entrer annee" required>
                </div>
                <!--End date -->  

                <div class="col-6">
                    <label for="inputPrice" class="form-label">Prix</label>
                    <input type="text" class="form-control" id="inputPrice" placeholder="Entrer le montant" required>
                </div><!--End prix -->   

                <div class="col-6">
                    <label for="inputMark" class="form-label">Marque</label>
                    <input type="text" class="form-control" id="inputMark" placeholder="Entrer la Marque" required>
                </div>  <!--End Marque --> 
                <!-- PC -->
               <span id="form_ordinateur" style="visibility:hidden">
                  <div class="row pc g-3">
                   <span class="text-center fs-3">Ordinateur</span>
                      <div class="col-6">
                        <label for="inputDd" class="form-label">Disque dur</label>
                        <input type="text" class="form-control" id="inputDd" placeholder="Entrer la couleur" required>
                    </div>  

                    <div class="col-6">
                        <label for="inputRam" class="form-label">RAM</label>
                        <input type="text" class="form-control" id="inputRam" placeholder="Entrer la ram" required>
                    </div> 
                     <div class="col-6">
                        <label for="inputProcesseur" class="form-label">Processeur</label>
                        <input type="text" class="form-control" id="inputProcesseur" placeholder="Entrer la categorie" required>
                    </div> 
                    <div class="col-6">
                        <label for="inputGeneration" class="form-label">Generation</label>
                        <input type="text" class="form-control" id="inputGeneration" placeholder="Entrer la categorie" required>
                    </div> 
                </div> 
               </span><!--End pc-->
               
                <div class="col-6">
                    <label for="inputImmatriculation" class="form-label">Immatriculation</label>
                    <input type="text" class="form-control" id="inputImmatriculation" placeholder="Entrer la Marque" required>
                </div><!--End immatriculation-->
                <div class="col-6">
                    <label for="inputPuissance" class="form-label">Puissance</label>
                    <input type="text" class="form-control" id="inputPuissance" placeholder="Entrer puissance" required>
                </div> <!--End puissant-->
                <div class="col-6">
                    <label for="inputMatiere" class="form-label">Matière</label>
                    <input type="text" class="form-control" id="inputMatiere" placeholder="Entrer matière" required>
                </div> <!--End matiere-->
                <div class="col-6 form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                      <label for="floatingTextarea">Autres</label>
                </div><!--End autre--> 

                <div class="col-6">
                   <label for="" class="form-label">Disponibilité du bien</label>
                     <div class="form-check">
                         <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                         <label class="form-check-label" for="flexRadioDefault1">
                         occupe
                        </label>
                      </div>
                      <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                         <label class="form-check-label" for="flexRadioDefault2">
                         libre
                        </label>
                     </div>
                    <div class="form-check">
                          <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                         <label class="form-check-label" for="flexRadioDefault3">
                         Hors service
                        </label>
                   </div>
                </div><!--End etat -->
                <span class="text-center fs-3">Image du bien</span>
                <div class="col-6 input-group mb-3">
                    <input class="form-control" type="file" id="formFile">
                </div><!--End image-->
                <span class="text-center fs-3">Localisation</span>
                <div class="col-6">
                  <label for="inputEntrepot" class="form-label">Entrepot</label>
                  <select class="form-select form-select-sm" id="inputEntrepot" aria-label=".form-select-sm example">
                         <option selected>Choisir un entrepot</option>
                         <option value="1">Voodoo</option>
                         <option value="2">CHU</option>
                         <option value="3">Abidjan Mall</option>
                  </select>
                </div><!--End entrepot-->
                <div class="col-6">
                    <label for="inputEmplacement" class="form-label">Emplacement</label>
                    <select class="form-select form-select-sm" id="inputEmplacement" aria-label=".form-select-sm example">
                         <option selected>Choisir un emplacement</option>
                         <option value="1">Emplacement 1</option>
                         <option value="2">Emplacement 2</option>
                         <option value="3">Emplacement 3</option>
                  </select>
                </div><!--End emplacement-->
                <div class="col-6">
                    <label for="inputEspace" class="form-label">Espace</label>
                    <select class="form-select form-select-sm" id="inputEspace" aria-label=".form-select-sm example">
                         <option selected>Choisir un espace</option>
                         <option value="1">Espace 01</option>
                         <option value="2">Espace 02</option>
                         <option value="3">Espace 03</option>
                  </select>
                </div><!--End espace-->

                 <div class="col-6">
                    <label for="inputEntite" class="form-label">Entité</label>
                    <select class="form-select form-select-sm" id="inputEntite" aria-label=".form-select-sm example">
                         <option selected>Choisir une entité</option>
                         <option value="1">Entité 1</option>
                         <option value="2">Entité 2</option>
                         <option value="3">Entité 2</option>
                  </select>
                </div><!--End espace-->
<!-- 
                <span class="text-center fs-3">Affectation</span>
                 <div class="col-6">
                    <label for="inputAffectation" class="form-label">Affecté à:</label>
                    <select class="form-select form-select-sm" id="inputAffectation" aria-label=".form-select-sm example">
                         <option selected>Choisir un employé</option>
                         <option value="1">Employé 1</option>
                         <option value="2">Employé 2</option>
                         <option value="3">Employé 3</option>
                  </select>
                </div> --><!--End affectation-->
                <div class="">
                   <button type="submit" class="btn btn-success">J'enregistre un bien</button>
                </div><!--End submit-->
              </form>
         </div>
      </div>
    </section>
<script language="JavaScript">
 
            function enregistre_ordinateur() {
            if (document.enregistrement_biens.scategorie.selectedIndex == 1)
            document.getElementById('form_ordinateur').style.visibility = 'visible';
            else
            document.getElementById('form_ordinateur').style.visibility = 'hidden';
            }
</script>
</main><!-- End #main -->
@endsection