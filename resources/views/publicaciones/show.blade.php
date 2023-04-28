@extends('layoutprincipal')

@section('dash')
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-141734189-9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-141734189-9');
</script>


<script>
    
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        document.documentElement.classList.add('v2fLMH8w3xgUEQcl63H9');
    } else {
        document.documentElement.classList.remove('v2fLMH8w3xgUEQcl63H9')
    }
</script>
  </head>
  <body class="jtAJHOc7mn7b4IKRO59D _1jTZ8KXRZul60S6czNi">
    


<!--inicio del nav-->
<nav class="_LPVUrp9Uina5fcERqWC taX5bm_AMmfFooXEd5Ny t6gkcSf0Bt4MLItXvDJ_ _Ybd3WwuTVljUT4vEaM3 EpUSgjHdM6oyMXUiK_8_ qUWbS_LTZujDB4XCd11V _1jTZ8KXRZul60S6czNi _fGhMnSfYmaGrv7DvZ00">
  <div class="i8v96MUlFwGv9qJUkAx7 _Cj_M6jt2eLjDgkBBNgI wekyMYEi8zByMSCgzHQ_ W3VHmE2jAiCd1MN9SdsH">
    <div class="YRrCJSr_j5nopfm4duUc sJNGKHxFYdN5Nzml5J2j Q_jg_EPdNf9eDMn1mLI2">
      <div class="YRrCJSr_j5nopfm4duUc _HgeI6Dx9I__pBEYsPz0 Q_jg_EPdNf9eDMn1mLI2">
        <button id="toggleSidebar" aria-expanded="true" aria-controls="sidebar" class="_SmdlCf6eUKB_V9S5IDj FJRldeiG2gFGZfuKgp88 R9nujHypnXyuHrBww9QK iyrgFoJBjXFzXLcq5BhU Y3FxyuXtj2gecrGXvLEI SA5DoMHfwOFtY4h_qzuM N3Gb8rTHzm26fWGpfaqP ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW OPrb_iG5WDy_7F05BDOX">
         <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h6a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path> </svg>
        </button> 

        <a href="https://www.ustabuca.edu.co/" class="YRrCJSr_j5nopfm4duUc YcuQRAYEep0W4L0BFDfG">
          <img src="https://upload.wikimedia.org/wikipedia/commons/a/a2/Logotipo_USTA_Colombia.gif" style="width:50px;height:50px" class="object-top h-20 w-96">
          <span class="_rCfAafI7lqYALljdSxM q1oXbofRCOhVhOSB8tiU yM_AorRf2jSON3pDsdrz BHrWGjM1Iab_fAz0_91H OyABRrnTV_kvHV7dJ0uE"> Vista Principal  </span>
        </a>
    </div>

        
    @auth
    <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
        <button id="toggleSidebarMobileSearch" type="button" 
        class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F F34pkf_DAj2DlPtfAEMV ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y OPrb_iG5WDy_7F05BDOX dMTOiA3mf3FTjlHu6DqW">
        <span class="_DVAfiyo21kM68EUVzEQ"></span>
        </button>          
        
        <form method="POST"action="{{route('logout')}}">
        @csrf
        
        <button type="submit" class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW OPrb_iG5WDy_7F05BDOX">
        Cerrar Sesión
        </button>
        <a  href="{{route('publicaciones.create')}}" class="FJRldeiG2gFGZfuKgp88 PeR2JZ9BZHYIH8Ea3F36 mveJTCIb2WII7J4sY22F ZnBoTVi7VOJdCLSSU62n _7KA5gD55t2lxf9Jkj20 XIIs8ZOri3wm8Wnj9N_y dMTOiA3mf3FTjlHu6DqW OPrb_iG5WDy_7F05BDOX">
        Crear publicación
        </a>
        </form>
        
        
    </div>
    @endauth
</nav>
    
     <!-- Fin del nav -->
<br>
<br>



<!-- Aquí inicia el show.blade  -->
    <div class="EWLTGduHCjFnjN6tLCXV Atl0coQVHTfJeIp5DBNr">
        <br>
        <br>
    <div class="_wYiJGbRZyFZeCc8y7Sf hD0sTTDgbxakubcHVW2X _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _YxZw_O8dWkTljptcO7z SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi" >
    <div class="grid md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-2 gap-6">
    <div class=" inset-x-0  text-align: center font-sans text-3xl "> 
    {{$post->titulo}}
    </div>
    </div>
    <!-- paginación -->   
    </div>
    
</div>

<div class= "container mx-auto flex">
<div class="md:w-1/2">
<img src="{{asset('uploads').'/'. $post->imagen}}" alt="Imagen del post {{$post->titulo}}">

<div class="p-4">
    0 me gusta


<div>
    <!--esto es posible por las relaciones de laravel
    Ojo con las reglas del modelo-->
    <p class= "font-bold "> {{$post->user->username}}
    </p>
    <p class= "font-sans"> {{$post->created_at->diffForHumans()}}
    </p>
    <br>
    <p class= "font-sans font-style: italic"> {{$post->descripcion}}
    <br>
    <br>
</div>
</div>
</div>

<div class="md:w-1/2 p-10">
<div class="shadow p-5 mb-5" > 
  <p class=" inset-x-0  text-center font-sans text-2xl ">Hola  {{auth()->user()->username}}</p>
  
  
  <form action="{{route("comentarios.store",['post' => $post, 'user'=> $user])}}" method="POST">
        @vite('resources/js/app.js')
        
        @csrf
        <div class="mb-6" >
        <h1 class="class="XJih04pKHf8Cekga6Hj3">
        ¡Deja un comentario! 
        </h1>
        
      </div>
          
          <!-- Comentario -->
          <div class="mb-6">
            <label for="comentario" class="mb-2 block uppercase text-gray-900 font-bold">
             Nuevo Comentario
            </label>
            <textarea
                          
              name="comentario"
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              id="comentario"
              placeholder="Agrega un comentario aquí">


            </textarea>
            </div>

            <!-- campo oculto en el cual almacenaremos la imagen -->
            <div class="mb-6">
              <!-- Ojo el name debe ser igual al que tenemos en la base de datos
                  hidden: tipo oculto
              -->
              <input
              name = "imagen" 
              type = "hidden"
              value = "{{old ('imagen')}}"


              >

            </div>
            <div class="text-center lg:text-left">
           
            <!-- Botón--> 
           <input 
           type="submit" 
           value="Publicar" 
           class="inline-block px-7 py-3 bg-blue-600 text-black font-medium text-sm leading-snug uppercase rounded shadow-md hover:bg--700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">
            
          </div>
        </form>

<div class = "shadow mb-5 max-h-96 overflow-y-scroll  mt-8">

  @if ($post->comentarios->count())

    @foreach ($post->comentarios as $comentario)

    <div class ="p-5">

      <a href= "{{route('accesoseguro', $comentario->user)}}" class="mb-1 block uppercase text-gray-900 font-bold">
      {{$comentario->user->username}}
      </a>

      <p>{{$comentario->comentario}}
      </p>

      <p class="text-sm">{{$comentario->created_at->diffForHumans()}}
      </p>

    </div>
    @endforeach
  @else
  
  <p class="p-10 text-center"> Aún no han comentado esta foto </p>
  @endif

</div>
</div>
   


</div>
</div>