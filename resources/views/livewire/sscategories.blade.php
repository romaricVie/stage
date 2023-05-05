<div>
    {{-- A good traveler has no fixed plans and is not intent upon arriving. --}}

     <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des sous sous categories</h5>
            <div class="row">
                  <div class="col-6">
                       <input type="text" name="sscategorie" wire:model="query"  class="form-control" placeholder="Rechercher une sous sous categorie">
                   </div> <!-- End search -->
                    <div class="col-6">
                         Afficher
                        <select wire:model.lazy="perPage" id="Per-page" class="">
                               @for($i=5; $i <= 25; $i += 5)
                                    <option value="{{$i}}">{{$i}}</option>
                              @endfor
                         </select>
                          par page
                  </div>
            </div>
             <!-- Bien table -->
             <table class="table table-hover ">
                      <thead>
                        <tr>
                           <th scope="col">#</th>
                           <th scope="col">Désignation sous sous categorie</th>
                           <th scope="col">sous categorie</th>
                           <th scope="col">Categorie</th>
                            <th scope="col">Action</th>
                        </tr>
                      </thead>
                      <tbody>
                       @foreach($sscategories as $sscategorie)
                          <tr>
                            <th scope="row">{{$sscategorie->id}}</th>
                            <td>{{$sscategorie->name}}</td>
                            <td>{{$sscategorie->scategorie->name}}</td>
                            <td>{{$sscategorie->categorie->name}}</td>
                            <td>
                               <a href="{{route('sscategories.show', ['sscategorie' => $sscategorie->id])}}"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a>
                           </td>
                          </tr>
                       @endforeach
                      </tbody>
              </table>
         </div>
          {{ $sscategories->links() }}
      </div>
</div>
