<div>
    {{-- Success is as dangerous as failure. --}}

    <div class="card">
         <div class="card-body">
            <h5 class="card-title">Enregistrer une sous sous categorie</h5>
             <!-- Categorie Form -->
              <form  

                  class="row g-3"
                  method="POST"
                  action="{{route('sscategories.store')}}" 

                 >
                  @csrf
                  <div class="col-6">
                      <label for="inputCategorie" class="form-label">Categorie</label>
                      <select

                           name="categorie_id" 
                           class="form-select form-select-sm"
                           id="inputCategorie"
                           aria-label=".form-select-sm example"
                            wire:model.lazy="query"

                           >
                           <option value="" selected>Choisir une categorie</option>
                           @foreach($categories as $categorie)
                              <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                          @endforeach 
                    </select>

                  </div><!-- End categorie -->
                  <div class="col-6">
                      <label for="inputScategorie" class="form-label">Sous Categorie</label>
                      <select name="scategorie_id" class="form-select form-select-sm" id="inputScategorie" aria-label=".form-select-sm example">
                           <option selected>Choisir sous categorie</option>
                           @foreach($scategories as $scategorie)
                              <option value="{{$scategorie->id}}">{{$scategorie->name}}</option>
                          @endforeach
                    </select>
                  </div><!-- End sous categorie -->

                 <div class="col-6">
                    <label for="inputNanme5" class="form-label">Nom sous sous categorie</label>
                    <input type="text" name="name" class="form-control" id="inputNanme5" placeholder="Entrer sous categorie" required>
                </div> <!-- End sous categorie -->

                  <div class="">
                     <button type="submit" class="btn btn-success">J'enregistre une sous sous categorie</button>
                  </div><!-- End submit -->
              </form>
         </div>
      </div>
</div>
