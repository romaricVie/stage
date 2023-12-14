<div>
    {{-- Be like water. --}}

     <div class="card">
         <div class="card-body">
            <h5 class="card-title">Enregistrer un mouvement</h5>
             <!-- Categorie Form -->
              <form  
                    class="row g-3"
                    method="POST"
                    action="{{route('deplacements.store')}}" 

                  >
                   @csrf
                <!-- End Employe -->

                  <div class="col-6">
                      <label for="inputBien" class="form-label">Biens <span> *</span></label>
                      <select  

                          name="bien_id"
                          required
                          class="form-select form-select-sm @error('bien_id') is-invalid @enderror"
                          id="inputBien"
                          aria-label=".form-select-sm example">

                          @error('bien_id')
                                  <div class="alert alert-danger">{{ $message }}</div>
                          @enderror 
                           <option value="">Choisir un biens</option>
                            @foreach($biens as $bien)
                              <option value="{{$bien->id}}">(#{{$bien->etiquette}}) {{$bien->name}}</option>
                           @endforeach
                    </select>
                  </div> 
                  <!-- End Employe -->
                   <span class="text-center fs-3"> Nouvelle localisation</span>
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
                        required
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
                      required

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
                      required
                      >
                         <option  value="">Choisir une entité...</option>
                         @foreach($entites as $entite)
                            <option value="{{$entite->id}}">{{$entite->name}}</option>
                         @endforeach
                  </select>
                </div>
                
                <div class="col-6">
                    <label for="inputNanme4" class="form-label">Motif de deplacement</label>
                    <input 
                         type="text"
                         name="motif_deplacement"
                         class="form-control @error('motif_deplacement') is-invalid @enderror" 
                         id="inputNanme4"
                         placeholder="Entrer le motif" required>

                         @error('motif_deplacement')
                                  <div class="alert alert-danger">{{ $message }}</div>
                          @enderror 
                   
                </div><!-- End motif -->
                 <div class="col-6 form-floating">
                    <textarea 
                      required
                      name="description"
                      class="form-control @error('description') is-invalid @enderror"
                      placeholder="Leave a comment here"
                      id="floatingTextarea"></textarea> 

                      @error('description')
                                  <div class="alert alert-danger">{{ $message }}</div>
                          @enderror 
                  <label for="floatingTextarea">Description</label>
                </div><!--End description --> 

                  <div class="">
                     <button type="submit" class="btn btn-success">Enregistrer un mouvement</button>
                  </div><!-- End submit -->
              </form>
         </div>
      </div>

</div>
