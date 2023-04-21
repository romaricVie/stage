<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}

    <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des employés({{$employes->count()}})</h5>
            <div class="row">
                 <div class="col-6">
                    <input type="text" name="employe" wire:model="query"  class="form-control" placeholder="Rechercher un employé">
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
             
               
             <!-- employe table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                       <th scope="col">#</th>
                       <th scope="col">Nom</th>
                       <th scope="col">Prenoms</th>
                       <th scope="col">Fonction</th>
                       <th scope="col">Contacts</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($employes as $employe)
                      <tr>
                        <th scope="row">{{$employe->id}}</th>
                        <td>
                          <a href="{{route('employes.show', ['employe' => $employe->id])}}">{{$employe->name}}</a>
                        </td>
                        <td>
                           <a href="{{route('employes.infos', ['employe' => $employe->id])}}">{{$employe->firstname}}</a> 
                        </td>
                        <td>{{$employe->fonction}}</td>
                        <td>{{$employe->contact}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
           {{$employes->links()}}
         </div>
      </div>
</div>
