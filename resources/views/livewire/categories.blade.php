<div>
    {{-- Knowing others is intelligence; knowing yourself is true wisdom. --}}

 <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des categories</h5>
              <div class="row">
                  <div class="col-6">
                       <input type="text" name="categorie" wire:model="query"  class="form-control" placeholder="Rechercher une categorie">
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
                      <th scope="col">Nom</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($categories as $categorie)
                      <tr>
                        <th scope="row">{{$categorie->id}}</th>
                        <td>{{$categorie->name}}</td>
                        <td>
                           <a href="{{route('categories.show', [ 'categorie' => $categorie->id])}}"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a>
                       </td>
                      </tr>
                 @endforeach
                  </tbody>
          </table>

         </div>
          {{ $categories->links() }}
      </div>


</div>
