<div>
    {{-- The best athlete wants his opponent at his best. --}}
     <div class="card">
         <div class="card-body">
            <h1 class="card-title">Liste des biens affectés à {{$employe->name." ".$employe->firstname}}</h1>
             <!-- Bien table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                       <th scope="col">#Indentifiant</th>
                       <th scope="col">Désignation</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($employe->affectations as $affectation)
                      <tr>
                        <th scope="row">{{$affectation->bien->etiquette}}</th>
                        <td>{{$affectation->bien->name}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
         </div>
      </div>
  

</div>
