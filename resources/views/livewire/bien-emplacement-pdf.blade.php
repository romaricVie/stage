<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
       <div class="card">
         <div class="card-body">
            <h1 class="card-title">Liste des biens de l'emplacement {{$emplacement->name}}</h1>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                      <th scope="col">#Identifiant</th>
                      <th scope="col">Désignation</th>
                      <th scope="col">Etat</th>
                      <th scope="col">Disponibilité</th>
                      <th scope="col">Categorie</th>
                    </tr>
                  </thead>
                  <tbody>
                     @foreach($emplacement->biens as $bien)
                      <tr>
                        <th scope="row">{{$bien->etiquette}}</th>
                        <td>{{$bien->name}}</td>
                        <td>{{$bien->etat}}</td>
                        <td>{{$bien->disponibilite}}</td>
                        <td>{{$bien->categorie->name}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
      </div>
</div>
