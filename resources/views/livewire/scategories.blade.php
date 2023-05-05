<div>
    {{-- Stop trying to control. --}}
    <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des sous categories</h5>

             <div class="row">
                  <div class="col-6">
                       <input type="text" name="scategorie" wire:model="query"  class="form-control" placeholder="Rechercher une sous categorie">
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
                      <th scope="col">Désignation sous categorie</th>
                      <th scope="col">Categorie</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($scategories as $scategorie)
                      <tr>
                        <th scope="row">{{$scategorie->id}}</th>
                        <td>{{$scategorie->name}}</td>
                        <td>{{$scategorie->categorie->name}}</td>
                         <td>
                           <a href="{{route('scategories.show', [ 'scategorie' => $scategorie->id])}}"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a>
                       </td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
           {{ $scategories->links() }}
      </div>
</div>
