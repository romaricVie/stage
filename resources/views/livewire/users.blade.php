<div>
    {{-- Care about people's approval and you will be their prisoner. --}}

    <div class="card">
         <div class="card-body">
            <h5 class="card-title">Liste des utilisateurs({{$users->count()}})</h5>
            <div class="row">
                 <div class="col-6">
                    <input type="text" name="utilisateur" wire:model="query"  class="form-control" placeholder="Rechercher un utilisateur">
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
                       <th scope="col">Nom et prenom</th>
                       <th scope="col">Email</th>
                        <th scope="col">Role</th>
                       <th scope="col">Actions</th>
                    </tr>
                  </thead>
                  <tbody>
                    @foreach($users as $user)
                      <tr>
                        <th scope="row">{{$user->id}}</th>
                         <td><a href="{{route('admin.show',$user)}}">{{$user->name."  ".$user->firstname}}</a></td>
                         <td>{{$user->email}}</td>
                         <td><span class="badge text-bg-success">{{implode(',',$user->roles()->get()->pluck('name')->toArray())}}</span> </td>
                        <td>
                           <!--Gates edit-users--->
                      
                            <a href="{{route('admin.edit',$user)}}"><button class="btn btn-primary"><i class="bi bi-pencil-square"></i> Editer</button></a>
                      
                       <!--Gates delete-users--->
                      
                          <form 
                           action="{{route('admin.destroy',$user)}}"
                           method="POST"
                           class="d-inline"
                           onsubmit ="return confirm('Etre vous sur de vouloir supprimer cet utilisateur?');"
                          >
                            @csrf
                            @method('DELETE')
                            <a href="#"><button class="btn btn-danger"><i class="bi bi-trash"></i> Supprimer</button></a>
                       </form>
                        </td>
                      </tr>
                    @endforeach
                  </tbody>
          </table>
           {{$users->links()}}
         </div>
      </div>
</div>
