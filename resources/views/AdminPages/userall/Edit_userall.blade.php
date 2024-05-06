@extends('AdminPages.Admin')

@section('content')
    <div id="dev_cat">
       <form  method="post" action={{ route('userall.updata',$data[0]->id) }}>
        @csrf
        @method('put')
        <label for="">Updata User</label><br>
        <label id="label_add_item" for="">Name User</label>
        <input id="input_add_item" type="text" name="name" placeholder="Name User" value={{$data[0]->name}}>
        <label id="label_add_item" for="">Email User</label>
        <input id="input_add_item" type="text" name="email" placeholder="Email User" value={{$data[0]->email}}><br>
        <button type="submit" id="btn_add_cat">Updata</button>
       </form>
    </div>
@endsection