{{-- {{dd($asdf)}} --}}


    {{-- @for ($i=0; $i < $qwer; $i++)
        <div>
        <p>{{$az[$i]['id'];}}</p>
        <br>
        <p>{{$az[$i]['item_id'];}}</p>
    </div>
      
      @endfor --}}
   
      @foreach ($product as $i)
      <div>
        <p>{{$i[0]->id}}</p>
        <br>
        <p>{{$i[0]->item_name}}</p>
    </div>
      @endforeach

