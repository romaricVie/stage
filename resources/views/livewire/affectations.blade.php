<div>
    {{-- Nothing in the world is as soft and yielding as water. --}}

     <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des affectations</h5>
             
             <div class="row">
                 <div class="col-6">
                    <input type="text" name="affectation" wire:model="query"  class="form-control" placeholder="Entrer le motif">
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
               <!-- affectation table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                       <th scope="col">#</th>
                       <th scope="col">Nom employé</th>
                       <th scope="col">Nom du bien</th>
                       <th scope="col">Action</th>
                     
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($affectations as $affectation)
                      <tr>
                        <th scope="row">{{$affectation->id}}</th>
                        <td>{{$affectation->employe->name}}</td>
                        <td>(#{{$affectation->bien->id}}) {{$affectation->bien->name}}</td>
                        <td><a href="{{route('affectations.show', ['affectation' => $affectation->id])}}"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a></td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
          {{ $affectations->links() }}
      </div>
</div>
