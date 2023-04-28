@extends('layoutprincipal')


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
        
        </form>
        
        
    </div>
    @endauth
</nav>

<div class="xCPtuxM4_gihvpPwv9bX Nu4HUn5EQpnNJ1itNkrd RZmKBZs1E1eXw8vkE6jY mlwbuv_bMkMhzTA3msA3 sIk4Wc5VFaQpncPF5Sx4 AWLGIryfLKwkSeUZd4O6">
    <div class="EWLTGduHCjFnjN6tLCXV hD0sTTDgbxakubcHVW2X QzGxlDe4W0Kn6V1Dkd6r">

<div class="xCPtuxM4_gihvpPwv9bX Nu4HUn5EQpnNJ1itNkrd RZmKBZs1E1eXw8vkE6jY mlwbuv_bMkMhzTA3msA3 sIk4Wc5VFaQpncPF5Sx4 AWLGIryfLKwkSeUZd4O6">
    <div class="EWLTGduHCjFnjN6tLCXV hD0sTTDgbxakubcHVW2X QzGxlDe4W0Kn6V1Dkd6r">
        <nav class="YRrCJSr_j5nopfm4duUc Td37IMFwOi4Zt3Vhv3cT" aria-label="Breadcrumb">
            <ol class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 R0X5VtiZIoV7IjvrxBJ_ hPWJir4VhLurUkdR8iyI">
              <li class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2">
                <a href="#" class="_k0lTW0vvzboctTxDi2R Q_jg_EPdNf9eDMn1mLI2 rYHHksRBEMl_guI3q0UQ ZnBoTVi7VOJdCLSSU62n EJIoL6514Ry8r7nh011L dMTOiA3mf3FTjlHu6DqW">
                  <svg class="ADSeKHR1DvUUA48Chci_ rxe6apEJoEk8r75xaVNG T1qzIiYBzxDgBnL9ISMF" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                  
                </a>
              </li>
              <li>
                <div class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2">
                  <svg class="YIUegm7fh_CpJbivTu6B MnxxlQlR1H0xJuMEE8Yr _JmTNv5EiHqK2A1jcQSf" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                  <span class="c2LzVf9SsdSEMBrRjNwS c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe _JmTNv5EiHqK2A1jcQSf EbR_B0tHyczsKYnc0ktU qIT6vrYn0Fr1U3wlPXaS XIIs8ZOri3wm8Wnj9N_y" aria-current="page">Perfil</span>
                </div>
              </li>
            </ol>
        </nav>     
        
    
    </div>
<!-- Right Content -->
    <div class="EWLTGduHCjFnjN6tLCXV Atl0coQVHTfJeIp5DBNr">
        
          <div class="md:flex ">
        <div class="md:w-1/2 px-10">

            <form action= "{{route('imagenes.store')}}" method="POST" id="dropzone" class="dropzone border-dashed border-2 w-full h-96 rounded flex flex-col 
            justify-center items-center">
            @csrf
            </form>
        </div>
        <br>
        <div class="md:w-1/2 px-10">
        
        <form action="{{route("publicaciones.store")}}" method="POST">
        @vite('resources/js/app.js')
        
        @csrf
        <div class="mb-6" >
        <h1 class="class="XJih04pKHf8Cekga6Hj3">
        ¡Crea una nueva publicación {{auth()->user()->username}}!
        </h1><br>
        
      </div>
          <!-- Nombre input -->
          <div class="mb-6">
            <label for="titulo" class="mb-2 block uppercase text-gray-900 font-bold">
             titulo
            </label>
            <input
              type="text"
              name="titulo"
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              id="exampleFormControlInput2"
              placeholder="Nombre de la publicación"
            />
            
          </div>
          
          
          <!-- descripción -->
          <div class="mb-6">
            <label for="descripción" class="mb-2 block uppercase text-gray-900 font-bold">
             Descripción
            </label>
            <textarea
                          
              name="descripcion"
              class="form-control block w-full px-4 py-2 text-xl font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
              id="exampleFormControlInput2"
              placeholder="Descripción de la publicación">


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
        </div>
    </div>
    
    </div>

    
  
 

