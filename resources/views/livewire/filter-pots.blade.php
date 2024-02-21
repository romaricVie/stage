<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
     <div class="row">
            <div class="col-6">
                 <input wire:model="query" wire:keyup.debounce="filter" type="text" name="bien"  class="form-control" placeholder="Rechercher un bien">
            </div>
            <div class="col-6">
                  <select wire:model="categorie_id"  wire:change="filter"class="form-select">

                            <option value="">Choisir la categorie</option>
                             @foreach($categories as $categorie)
                               <option value="{{$categorie->id}}">{{$categorie->name}}</option>
                            @endforeach
                           
                      </select>
                   </div>
          </div>

</div>
