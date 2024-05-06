@extends('AdminPages.Admin')

@section('content')
    <div id="dev_cat">
       <form  method="post" action={{ route('cat.updata',$data[0]->id) }}>
        @csrf
        @method('put')
        <label for="">Updata Catogries</label><br>
        <input required type="text" placeholder="Add New Catogries..." name="name_cat" value={{$data[0]->cat_name}}><br>
        <button type="submit" id="btn_add_cat">Updata</button>
       </form>
    </div>
@endsection