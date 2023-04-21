<div>
    {{-- In work, do what you enjoy. --}}


     <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des biens ({{$biens->count()}})</h5>
            <div class="row">
                 <div class="col-6">
                    <input type="text" name="bien" wire:model="query"  class="form-control" placeholder="Rechercher un bien">
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
                      <th scope="col">Date enregistrement</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($biens as $bien)
                      <tr>
                        <th scope="row">{{$bien->etiquette}}</th>
                        <td>{{$bien->name}}</td>
                        <td>{{$bien->created_at}}</td>
                        <td>
                           <a href="{{route('biens.show', ['bien' => $bien->id])}}"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a>
                       </td>
                      </tr>
                     @endforeach
                  </tbody>
          </table>
            {{ $biens->links() }}
         </div>
      </div>
</div>
