<div>
    {{-- In work, do what you enjoy. --}}

    <div class="card">
         <div class="card-body">
            <h5 class="card-title">Formulaire de recherche</h5>
             <!-- Bien Form -->
              <form 
                 method="POST"
                 class="row g-3" 
                 action="{{route('biens.search')}}" 
                 >

                 @csrf

                <div class="col-6">
                    <label for="inputCategorie" class="form-label">Categorie <span class="text-danger"> *</span></label>
                    <select

                           class="form-select form-select-sm" 
                           name="categorie_id"  id="inputCategorie" 
                           aria-label=".form-select-sm example"
                           required
                           wire:model.lazy="categorie"
                           >
                         <option value="">Choisir une categorie...</option>
                        @foreach($categories as $categorie)
                          <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                        @endforeach
                         
                  </select>
                </div> <!--End Categorie-->
                <div class="col-6">
                  <label for="inputScategorie" class="form-label">Sous categorie <span class="text-danger"> *</span></label>
                    <select 
                    
                       class="form-select form-select-sm" 
                       id="inputScategorie" 
                       aria-label=".form-select-sm example"
                       name="scategorie_id" 
                       required
                       wire:model.lazy="scategorie"
                       >
                         <option value="">Choisir une sous categorie...</option>
                         @foreach($scategories as  $scategorie)
                           <option value="{{$scategorie->id}}">{{$scategorie->name}}</option>
                         @endforeach
                  </select>
                </div> <!--End sous categorie -->

                <div class="col-6">
                    <label for="inputSscategorie" class="form-label">Sous sous categorie<span class="text-danger"> *</span></label>
                      <select 

                       class="form-select form-select-sm" 
                       id="inputSscategorie"
                       aria-label=".form-select-sm example"
                       required
                       name ="sscategorie_id"
                       >
                         <option value="">Choisir une sous sous categorie...</option>
                        @foreach($sscategories as $sscategorie)
                          <option value="{{$sscategorie->id}}">{{$sscategorie->name}}</option>
                        @endforeach
                         
                  </select>
                </div> <!-- Sous sous categorie -->
              
               
                <div class="">
                   <button type="submit" class="btn btn-success">Afficher</button>
                </div><!--End submit-->
              </form>
         </div>
      </div>
</div>
