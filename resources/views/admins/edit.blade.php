@extends('templates/master')
@section('content')

<main id="main" class="main">

    <div class="pagetitle">
      <h1>Administration</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="{{route('admin.index')}}">Home</a></li>
          <li class="breadcrumb-item active">Biens</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->
    @if(session('success'))
                <script type="text/javascript">
                    swal("Félicitations!","{!! session('success') !!}","success",{
                        button:"OK"
                    })
               </script>
           @endif

    <section class="section dashboard">
       <div class="card">
         <div class="card-body">
            <h5 class="card-title">Editer le role de({{$user->email}})</h5>
            
              <div>
                    <form method="POST" action="{{route('admin.update',$user)}}" class="pl-3">
                      @csrf
                      @method('PATCH')
                      
                      @foreach($roles as $role)
                        <div class="form-group">
                          <!-- Name est un tableaux de role -->
                          <input 
                            type="radio" 
                            class="w-4 h-4" 
                            name="roles[]" 
                            value="{{$role->id}}" 
                            id="{{$role->id}}" @if($user->roles->pluck('id')->contains($role->id)) checked @endif
                          >
                          <label for="{{$role->id}}" class="">{{$role->name}}</label>
                        </div>
                      @endforeach

                      <button type="submit" class="btn btn-success mt-3">Modifier le rôle</button>

                     </form>
                  </div>
         </div>
      </div>
       
    </section>

</main><!-- End #main -->
@endsection