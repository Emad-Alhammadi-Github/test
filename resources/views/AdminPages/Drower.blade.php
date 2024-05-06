<div id="Drower">
    <h1 id="drower-titel">Laravel</h1>
    <hr>

    {{-- Items --}}
    <h4 id="Titel_manger">Items Manger</h4>
    <hr>
    <a class="btn_Drower" onclick="Chose_Btn(0)" href={{route('items.index')}}>
        <img src={{ asset("img/Items.png") }} alt="E" >
        <h3>Get All Items</h3>
    </a>
    <a class="btn_Drower" onclick="Chose_Btn(1)" href={{route('items.create')}}>
        <img src={{ asset('img/add.png') }} alt="E"  >
        <h3>Add New Item</h3>
    </a>

    {{-- Cat --}}
    <h4 id="Titel_manger">Catogry Manger</h4>
    <hr>
    <a class="btn_Drower" onclick="Chose_Btn(2)" href={{ route('cat.index')}}>
        <img src={{ asset('img/cat.png') }} alt="E" ti>
        <h3> Get All Catogries</h3>
    </a>
     <a class="btn_Drower" onclick="Chose_Btn(3)" href={{ route('cat.create') }}>
        <img src={{ asset('img/apps.png') }} alt="E" ti>
        <h3>Add New Catogries</h3>
    </a>
    <br>


    {{-- Users --}}
    <h4 id="Titel_manger">Users Manger</h4>
    <hr>
    <a class="btn_Drower" onclick="Chose_Btn(4)" href={{ route('userall.showall') }}>
        <img src={{ asset('img/users.png') }} alt="E" ti>
        <h3>Users</h3>
    </a>

    {{-- Log Out --}}
    <br>
    <br>
    <br>
    <a id="btn_Drower_logout">
        <img src={{ asset('img/lo.png') }} alt="E" ti>
        <h3>Log Out</h3>
    </a>
    <script src={{ asset('js/jsadmin/Button_Drower.js') }}></script>
</div>