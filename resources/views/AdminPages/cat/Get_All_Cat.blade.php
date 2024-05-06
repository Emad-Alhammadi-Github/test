@extends('AdminPages.Admin')

@section('content')
    <div style="position: relative">
        <table id="TB_Cat">
            <thead>
                <tr>
                    <td>ID</td>
                    <td>NAME</td>
                    <td>EVENT</td>

                </tr>
            </thead>
            <tbody>
                    @foreach ($data as $i)
                    <tr class="row_cat">
                        <td>{{$i->id}}</td>
                        <td>{{$i->cat_name}}</td>
                        <td>
                            <button onclick="ShowDelete({{$i->id}})" style="border: none;background-color: transparent;display: inline-block;">
                                <img src={{ asset('img/del.png') }} alt="" style="margin-right: 15px">
                            </button>

                            <div id="delete_massage">
                                <img id="img_alert" src={{ asset('img/alert.png') }} alt="">
                                <h2>Aleart</h2>
                                <p style="width: 70%;text-align: center;font-size: 16px">When you Delete this Catogry .all Items Associated with this Section will be Delete</p>
                                
                                <div id="btn_delete_cansel">


                                
                                    <form style="display: inline " action={{ route('cat.destroy',$i->id) }} method="post" >
                                        @csrf
                                        @method('delete')
                                        <button id="btn_cat_d" type="submit">
                                            Delete
                                        </button>
                                    </form>
                        
                                        <button id="btn_cat_c" onclick="Cansel()">
                                            Cansel
                                        </button>
                                </div>
                            
                            </div>
                            <a href={{ route('cat.edit', $i->id) }}><img src={{ asset('img/edi.png') }} alt=""></a>
                            {{-- <a href={{ route('cat.edit', $i->id) }}>ؤيلقلل</a> --}}

                    
                    </td>
                    </tr>
                    @endforeach
                </tbody>
        </table>
        
    </div>

  
    <script src={{ asset('js/jsadmin/Delete_cat.js') }}></script>
@endsection


    