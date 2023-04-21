<div>
    {{-- If you look to others for fulfillment, you will never truly be fulfilled. --}}

    <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des espaces</h5>
              <div class="row">
                 <div class="col-6">
                    <input type="text" name="espace" wire:model="query"  class="form-control" placeholder="Rechercher un espace">
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
             <!-- espace table -->
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Nom</th>
                      <th scope="col">Entrepôt</th>
                      <th scope="col">Emplacement</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($espaces as $espace)
                      <tr>
                        <th scope="row">{{$espace->id}}</th>
                        <td>{{$espace->name}}</td>
                        <td>{{$espace->entrepot->name}}</td>
                        <td>{{$espace->emplacement->name}}</td>
                        <td>
                           <a href="{{route('espaces.show', ['espace' => $espace->id])}}"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a>
                       </td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
           {{ $espaces->links() }}
      </div>
</div>
