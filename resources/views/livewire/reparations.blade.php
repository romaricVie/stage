<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}


    <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des reparations effectuées</h5>

             <div class="row">
                 <div class="col-6">
                    <input type="text" name="etiquette" wire:model="query"  class="form-control" placeholder="Entrer etiquette">
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
                       <th scope="col">#Identifiant</th>
                       <th scope="col">Code</th>
                       <th scope="col">Maintenancier</th>
                       <th scope="col">Prix</th>
                       <th scope="col">Designation</th>
                       <th scope="col">Etat</th>
                       <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($reparations as $reparation)
                      <tr>
                        <th scope="row">{{$reparation->bien->etiquette}}</th>
                        <td>{{$reparation->bien->code}}</td>
                        <td>{{$reparation->maintenancier}}</td>
                        <td>{{$reparation->price}}</td>
                        <td><a href="{{route('biens.show',['bien'=>$reparation->bien->id])}}">{{$reparation->bien->name}}</a></td>
                        <td> 
                            <span class="badge rounded-pill text-bg-<?= $reparation->etat== 'bon' ? 'info' : 'danger'?>">{{$reparation->etat}}</span>
                        </td>
                        <td> <a href="{{route('reparations.show',['reparation'=> $reparation->id])}}"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a></td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
          {{ $reparations->links() }}
      </div>
</div>
