<div>
    {{-- In work, do what you enjoy. --}}


     <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des biens ({{$biens->count()}})</h5>
           <!--  <div class="row">
                 <div class="col-6">
                    <input type="text" name="bien" wire:model="query"  class="form-control" placeholder="Rechercher un bien">
               </div>-->

            </div> 
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#Identifiant</th>
                      <th scope="col">Code</th>
                      <th scope="col">Désignation</th>
                      <th scope="col">Etat</th>
                      <th scope="col">Disponibilité</th>
                      <th scope="col">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($biens as $bien)
                      <tr>
                        <th scope="row"><span class="badge rounded-pill text-bg-primary">{{$bien->etiquette}}</span></th>
                         <td>{{$bien->code ?? 'Non defini'}}</td>
                         <td>{{$bien->name}}</td>
                        <td>
                            <span class="badge rounded-pill text-bg-<?= $bien->etat== 'bon' ? 'info' : 'danger'?>">{{$bien->etat}}</span>
                        </td>
                         <td><span class="badge rounded-pill text-bg-<?= $bien->disponibilite== 'occupe' ? 'warning' : 'success'?>">{{$bien->disponibilite}}</span></td>
                        <td>
                           <a href="{{route('biens.show', ['bien' => $bien->id])}}"><button type="button" class="btn btn-outline-success btn-sm"><i class="bi bi-eye"></i> Voir details</button></a>
                       </td>
                      </tr>
                     @endforeach
                  </tbody>
          </table>
         </div>
      </div>
</div>
