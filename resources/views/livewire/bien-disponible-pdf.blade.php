<div>
   


     <div class="card">
         <div class="card-body">
            <h1 class="card-title">Liste des biens disponibles</h1>
             <!-- Bien table -->
              <table class="table table-hover">
                  <thead>
                    <tr>
                      <th scope="col">#Identification</th>
                      <th scope="col">Désignation</th>
                      <th scope="col">Disponibilité</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($bien as $dispo)
                      <tr>
                        <th scope="row">{{$dispo->etiquette}}</th>
                        <td>{{$dispo->name}}</td>
                        <td>{{$dispo->disponibilite}}</td>
                      </tr>
                     @endforeach
                  </tbody>
          </table>
         </div>
      </div>
</div>
