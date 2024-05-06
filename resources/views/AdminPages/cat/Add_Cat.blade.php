@extends('AdminPages.Admin')

@section('content')
    <div id="dev_cat">
       <form  method="post" action={{ route('cat.store') }}>
        @csrf
        <label for="">Add New Catogries</label><br>
        <input  type="text" placeholder="Add New Catogries..." name="name_cat"><br>
        <button type="submit" id="btn_add_cat">Add Catogries</button>
       </form>
    </div>
@endsection