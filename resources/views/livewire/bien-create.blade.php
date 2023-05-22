<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}


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

                <span class="text-center fs-3">Catégorisation</span>

                <div class="col-6">
                    <label for="inputCategorie" class="form-label">Categorie <span class="text-danger"> *</span></label>
                    <select

                           class="form-select form-select-sm @error('categorie_id') is-invalid @enderror" 
                           name="categorie_id"  
                           id="inputCategorie" 
                           aria-label=".form-select-sm example"
                           required
                           wire:model.lazy="categorie"
                           >

                          @error('categorie_id')
                                  <div class="alert alert-danger">{{ $message }}</div>
                          @enderror   
                         <option value="">Choisir une categorie...</option>
                        @foreach($categories as $categorie)
                          <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                        @endforeach
                         
                  </select>
                </div> <!--End Categorie-->
                <div class="col-6">
                  <label for="inputScategorie" class="form-label">Sous categorie <span class="text-danger"> *</span></label>
                   <select 

                       class="form-select form-select-sm @error('scategorie_id') is-invalid @enderror " 
                       id="inputScategorie" 
                       aria-label=".form-select-sm example"
                       name="scategorie_id" 
                       wire:model.lazy="scategorie"

                       >
                         @error('scategorie_id')
                                  <div class="alert alert-danger">{{ $message }}</div>
                          @enderror
                         <option value="">Choisir une sous categorie...</option>
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
                         <option value="">Choisir une sous sous categorie...</option>
                        @foreach($sscategories as $sscategorie)
                          <option value="{{$sscategorie->id}}">{{$sscategorie->name}}</option>
                        @endforeach
                         
                  </select>
                </div> <!-- Sous sous categorie -->
              
                <span class="text-center fs-3">Caractéristique</span>
                 <div class="col-6">
                    <label for="inputName" class="form-label">Désignation <span class="text-danger"> *</span></label>
                    <input 
                           type="text" 
                           name="name" 
                           class="form-control @error('name') is-invalid @enderror" 
                           id="inputName" 
                           placeholder="Entrer la designation"
                           :value="old('name')" 
                           required 
                           >

                    @error('name')
                             <div class="alert alert-danger">{{ $message }}</div>
                    @enderror   
                </div>  <!--End nom -->
                <div class="col-6">
                    <label for="inputCode" class="form-label">Code</label>
                    <input type="text" name="code" class="form-control" id="inputCode" placeholder="Entrer le code" :value="old('code')" >
                </div>  <!--End code -->

                 <div class="col-6">
                    <label for="inputColor" class="form-label">Couleur</label>
                    <input type="text" name="couleur" class="form-control" id="inputColor" placeholder="Entrer la couleur" :value="old('couleur')" >
                </div>  <!--End Couleur -->
                  <div class="col-6">
                    <label for="inputMatiere" class="form-label">Matière</label>
                    <input type="text" name="matiere" class="form-control" id="inputMatiere" placeholder="Entrer matière" :value="old('matiere')">
                </div> <!--End matiere-->
                <div class="col-6">
                    <label for="inputPoids" class="form-label">Poids</label>
                    <input type="text" name="poids" class="form-control" id="inputPoids" placeholder="Entrer le poids" :value="old('poids')">
                </div> <!--End matiere-->


                <div class="col-6">
                    <label for="inputbattants" class="form-label">Nombre de battants</label>
                    <input type="text" name="nbre_battant" class="form-control" id="inputbattants" placeholder="Entrer le Nombre" :value="old('nbre_battant')">
                </div>  <!--End battants -->


                <div class="col-4">
                    <label for="inputLongeur" class="form-label">Longeur</label>
                    <input type="text" name="longueur" class="form-control" id="inputLongeur" placeholder="Entrer longueur" :value="old('longueur')">
                </div>  <!--End longeur -->   
                 <div class="col-4">
                    <label for="inputLargeur" class="form-label">Largeur</label>
                    <input type="text" name="largeur" class="form-control" id="inputLargeur" placeholder="Entrer largeur" :value="old('largeur')">
                </div>   <!--End Largeur -->
                <div class="col-4">
                    <label for="inputHauteur"  class="form-label">Hauteur</label>
                    <input type="text" name="hauteur" class="form-control" id="inputHauteur" placeholder="Entrer hauteur" :value="old('hauteur')">
                </div> <!--End Hauteur -->  

                <div class="col-6">
                    <label for="inputMark" class="form-label">Marque</label>
                    <input type="text" name="marque" class="form-control" id="inputMark" placeholder="Entrer la Marque" :value="old('marque')">
                </div>  <!--End Marque --> 

                 <div class="col-6">
                    <label for="inputPrice" class="form-label">Prix</label>
                    <input type="text" name="price" class="form-control" id="inputPrice" placeholder="Entrer le montant" :value="old('price')">
                </div><!--End prix --> 
              
                     <!-- PC -->
               <span id="form_ordinateur">
                  <div class="row pc g-3">
                   <span class="text-center fs-3">Caractéristique Ordinateur</span>
                      <div class="col-6">
                        <label for="inputDd" class="form-label">Disque dur</label>
                        <input type="text" name="disque_dur" class="form-control" id="inputDd" placeholder="Entrer la couleur" :value="old('disque_dur')">
                      </div>   <!--End disque dur -->

                    <div class="col-6">
                        <label for="inputRam" class="form-label">RAM</label>
                        <input type="text" name="ram" class="form-control" id="inputRam" placeholder="Entrer la ram" :value="old('ram')" >
                    </div>  <!--End Ram -->
                     <div class="col-6">
                        <label for="inputProcesseur" class="form-label">Processeur</label>
                        <input type="text" name="processeur" class="form-control" id="inputProcesseur" placeholder="Entrer le Processeur" :value="old('processeur')">
                    </div>  <!--End processeur -->
                    <div class="col-6">
                        <label for="inputGeneration" class="form-label">Generation</label>
                        <input type="text" name="generation" class="form-control" id="inputGeneration" placeholder="Entrer la generation" :value="old('generation')">
                    </div>  <!--End generation -->
                </div> 
               </span><!--End pc-->
               
                 <span class="text-center fs-3">Caractéristique Vehicule</span>
                <div class="col-6">
                    <label for="inputImmatriculation" class="form-label">Immatriculation</label>
                    <input type="text" name="immatriculation" class="form-control" id="inputImmatriculation" placeholder="Entrer l'immatriculation">
                </div><!--End immatriculation-->
                <div class="col-6">
                    <label for="inputPuissance" class="form-label">Puissance</label>
                    <input type="text" name="puissance" class="form-control" id="inputPuissance" placeholder="Entrer puissance">
                </div> <!--End puissant-->

                <div class="col-6">
                    <label for="inputPlace" class="form-label">Places assises</label>
                    <input type="text" name="place" class="form-control" id="inputPlace" placeholder="Entrer place">
                </div><!--End place-->

                 <div class="col-6">
                    <label for="inputEnergie" class="form-label">Energie</label>
                    <input type="text" name="energie" class="form-control" id="inputEnergie" placeholder="Entrer Energie">
                </div><!--End place-->

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

                <span class="text-center fs-3">Fournisseur</span>
                <div class="col-6">
                    <label for="fournisseur_name" class="form-label">Nom fournisseur</label>
                    <input type="text" name="fournisseur_name" class="form-control" id="fournisseur_name" placeholder="Entrer le nom">
                </div>  <!--End Marque --> 
                <div class="col-6">
                    <label for="fournisseur_tel" class="form-label">Téléphone fournisseur</label>
                    <input type="text" name="fournisseur_tel" class="form-control" id="fournisseur_tel" placeholder="Entrer le numero">
                </div>  <!--End Marque --> 
                    <span class="text-center fs-3">Type de bien</span>
                       <div class="col-6">
                       <div class="form-check">
                           <input class="form-check-input" type="radio" name="type_bien" value="bien_materiel" id="Radiobien_materiel">
                           <label class="form-check-label" for="Radiobien_materiel">
                           Bien matériel
                          </label>
                      </div>
                      <div class="form-check">
                            <input class="form-check-input" type="radio" name="type_bien" value="bien_immateriel" id="flexRadioBien">
                            <label class="form-check-label" for="flexRadioBien">
                           Bien immatériel
                          </label>
                     </div>
                </div> <!--End type de bien --> 
                  <div class="col-6">
                          <label for="expiration" class="form-label">Date d'expiration</label>
                          <input type="date" name="expiration" class="form-control" id="expiration" placeholder="jj/mm/aaaa">
                 </div>

                    <span class="text-center fs-3">Type de quantité</span>
                   <div class="col-6">
                       <div class="form-check">
                           <input class="form-check-input" type="radio" name="type_qty" value="bien_unique" id="flexRadio01">
                           <label class="form-check-label" for="flexRadio01">
                           Bien unique
                          </label>
                      </div>
                      <div class="form-check">
                            <input class="form-check-input" type="radio" name="type_qty" value="groupe_bien" id="flexRadio02">
                            <label class="form-check-label" for="flexRadio02">
                           Groupe de bien
                          </label>
                     </div>
                </div>
                <div class="col-4">
                          <label for="inputqty" class="form-label">Quantité</label>
                          <input type="text" name="quantite" class="form-control" id="inputqty" placeholder="Entrer la quantité">
                 </div><!--End qty --> 
                
              

                   <span class="text-center fs-3">Etat du bien</span>
                 <div class="col-6">
                       <div class="form-check">
                           <input class="form-check-input" type="radio" name="etat" value="bon" id="flexRadioDefault01">
                           <label class="form-check-label" for="flexRadioDefault01">
                           Bon
                          </label>
                        </div>
                      <div class="form-check">
                            <input class="form-check-input" type="radio" name="etat" value="hors_service" id="flexRadioDefault3">
                           <label class="form-check-label" for="flexRadioDefault3">
                           Hors service
                          </label>
                     </div>
                </div><!--End disponibilite -->
                <span class="text-center fs-3">Ajouter une image</span>
                <div class="col-6 input-group mb-3">
                     <input

                         class="form-control" 
                         name="image" 
                         type="file" 
                         id="formFile"
                         accept="image/*"

                         >
                     <label class="input-group-text" for="formFile">Image</label>
                </div><!--End image-->

                 <span class="text-center fs-3">Autres informations</span>
                  <div class="col-12 form-floating">
                    <textarea class="form-control" name="autres" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                      <label for="floatingTextarea">Autres infos</label>
                </div><!--End autre--> 

                <span class="text-center fs-3">Localisation</span>
                <div class="col-6">
                  <label for="inputEntrepot" class="form-label">Entrepôt</label>
                  <select 

                      class="form-select form-select-sm" 
                      id="inputEntrepot"
                      aria-label=".form-select-sm example"
                      name="entrepot_id"
                      required 
                      wire:model.lazy="entrepot" 
                      >
                         <option  value="">Choisir un entrepôt...</option>
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
                        wire:model.lazy="emplacement" 

                        >
                         <option  value="">Choisir un emplacement...</option>
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
                         <option  value="">Choisir un espace...</option>
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
                         <option  value="">Choisir une entité...</option>
                         @foreach($entites as $entite)
                            <option value="{{$entite->id}}">{{$entite->name}}</option>
                         @endforeach
                  </select>
                </div><!--End entite-->
                  <span class="text-center fs-3">Affectation</span>
                   <div class="col-6">
                    <label for="inputEmploye" class="form-label">Employé</label>
                    <select 

                      class="form-select form-select-sm" 
                      id="inputEmploye" 
                      aria-label=".form-select-sm example"
                      name="employe_id" 
                      
                      >
                         <option  value="">Choisir une employé...</option>
                         @foreach($employes as $employe)
                            <option value="{{$employe->id}}">{{$employe->name.' '.$employe->firstname}}</option>
                         @endforeach
                  </select>
                </div>
                <div class="">
                   <button type="submit" class="btn btn-success">J'enregistre un bien</button>
                </div><!--End submit-->
              </form>
         </div>
      </div>
</div>
 
