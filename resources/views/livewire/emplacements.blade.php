<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

     <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des emplacements</h5>
               <div class="row">
                 <div class="col-6">
                    <input type="text" name="emplacement" wire:model="query"  class="form-control" placeholder="Rechercher un emplacement">
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
             <!-- emplacement table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#</th>
                      <th scope="col">Désignation emplacement</th>
                      <th scope="col">Entrepôt</th>
                      <th scope="col">Détail</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($emplacements as $emplacement)
                      <tr>
                        <th scope="row">{{$emplacement->id}}</th>
                        <td>{{$emplacement->name}}</td>
                        <td>{{$emplacement->entrepot->name}}</td>
                       <td>
                           <a href="{{route('emplacements.show', ['emplacement' => $emplacement->id])}}"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a>
                       </td> 
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
          {{ $emplacements->links() }}
      </div>

</div>
