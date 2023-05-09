<div>
    {{-- Success is as dangerous as failure. --}}

     <!-- employe table -->
              <table class="table table-hover ">
                  <thead>
                    <tr>
                       <th scope="col">#</th>
                       <th scope="col">Nom et prenom</th>
                       <th scope="col">Fonction</th>
                       <th scope="col">Contacts</th>
                      
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($employes as $employe)
                      <tr>
                        <th scope="row">{{$employe->id}}</th>
                        <td>{{$employe->name."  ".$employe->firstname}}</td>
                         <td>{{$employe->fonction}}</td>
                         <td>{{$employe->contact}}</td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
</div>
