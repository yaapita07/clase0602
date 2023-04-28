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
<div class="xCPtuxM4_gihvpPwv9bX Nu4HUn5EQpnNJ1itNkrd RZmKBZs1E1eXw8vkE6jY mlwbuv_bMkMhzTA3msA3 sIk4Wc5VFaQpncPF5Sx4 AWLGIryfLKwkSeUZd4O6">
    <div class="EWLTGduHCjFnjN6tLCXV hD0sTTDgbxakubcHVW2X QzGxlDe4W0Kn6V1Dkd6r">
@auth
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
        <h1 class="vyo_A8gnQD1QWDPglr3h yM_AorRf2jSON3pDsdrz __9sbu0yrzdhGIkLWNXl NdexIDe6BTJXjtSnppoV OyABRrnTV_kvHV7dJ0uE">
            Bienvenido {{$user->name}}</h1>
    @endauth
    </div>
<!-- Right Content -->
    <div class="EWLTGduHCjFnjN6tLCXV Atl0coQVHTfJeIp5DBNr">
        <div class="_wYiJGbRZyFZeCc8y7Sf hD0sTTDgbxakubcHVW2X _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _YxZw_O8dWkTljptcO7z SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi">
        
        
            <div class="rvdRhGyExrNYTA6euxsF xu6Xcz2CnxX04u4eQAne SQf297smyJVNzzOO3iQL LvH1cgobxEYMRPVAp8WW">
            <img class="TR_P65x9ie7j6uxFo_Cs XO0Hd72IH1CH2AVjcbWM v2F5G_Fm6X1wxdNJdQlJ mveJTCIb2WII7J4sY22F" src=" https://scontent.fbga1-4.fna.fbcdn.net/v/t1.18169-9/11811508_10153102490492689_7583511417595295929_n.jpg?_nc_cat=106&ccb=1-7&_nc_sid=174925&_nc_eui2=AeF6aPZBNKmF1p4kmeSeqfDSg8UK2_qVl76DxQrb-pWXvmsqZDYn7hTJKvEjm93Qb8w&_nc_ohc=6YbsYphPwNQAX_oJyjY&_nc_ht=scontent.fbga1-4.fna&oh=00_AfAufb76i-WhxZzCl-lm33dZRzkE4lVFN8tF--3iYBO0-A&oe=6465C11B" alt="Usuario Logueado">
            <div>


                <h2 class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj OyABRrnTV_kvHV7dJ0uE">{{$user->username}}</h2>
                <ul class="gC_jEY75u_oxfOOKnLpH wezTbYJgxYJp5ZDqX67N">
                    
                    
                    <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                        <svg class="fhCwost7CSNRc2WSHLFW E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path><path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path></svg>
                        Front-end Developer
                    </li>
                    <li class="YRrCJSr_j5nopfm4duUc Q_jg_EPdNf9eDMn1mLI2 c8dCx6gnV43hTOLV6ks5 _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                        <svg class="fhCwost7CSNRc2WSHLFW E9GV5sZJIbfO_GEQ_moc _o2IXcpM0qnG3JPReKus __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M5.05 4.05a7 7 0 119.9 9.9L10 18.9l-4.95-4.95a7 7 0 010-9.9zM10 11a2 2 0 100-4 2 2 0 000 4z" clip-rule="evenodd"></path></svg>
                        Universidad Santo Tomás - Bucaramanga
                    </li>
                    <p class="vyo_A8gnQD1QWDPglr3h IOPhczRgtphv6NdNBDjj OyABRrnTV_kvHV7dJ0uE"></p>
                </ul>
            </div>
        </div>
        <div class="rvdRhGyExrNYTA6euxsF xu6Xcz2CnxX04u4eQAne seNju9ak6k60nJPVDVyn">
            
            <div class="HD0QRNT3lUqWQhXP5VK8">
                <address class="c8dCx6gnV43hTOLV6ks5 yo0GKAXAsUDIWsazc10y _43MO1gcdi2Y0RJW1uHL PeR2JZ9BZHYIH8Ea3F36 XIIs8ZOri3wm8Wnj9N_y">
                    <div class="XJih04pKHf8Cekga6Hj3">
                        correo Electrónico
                        
                    </div> {{$user->email}}
                    
                    
                    <p class="XJih04pKHf8Cekga6Hj3">
                        0 Siguiendo
                    </p>
                    <p class="TR_P65x9ie7j6uxFo_Cs c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        0 Seguidores
                    </p>
                    <br>
                    <p class="TR_P65x9ie7j6uxFo_Cs c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        0 Publicaciones
                    </p>
                    <p class="XJih04pKHf8Cekga6Hj3"></p>
                    
                    <div class="XJih04pKHf8Cekga6Hj3">
                        Dirección 
                    </div>
                    <div class="TR_P65x9ie7j6uxFo_Cs c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        Calle 13 #34-56, <br>Colombia
                    </div>
                    <div class="XJih04pKHf8Cekga6Hj3">
                        Celular
                    </div>
                    <div class="TR_P65x9ie7j6uxFo_Cs c8dCx6gnV43hTOLV6ks5 ezMFUVl744lvw6ht0lFe __9sbu0yrzdhGIkLWNXl OyABRrnTV_kvHV7dJ0uE">
                        +57 3175391507
                    </div>
                </address>
            </div>
            
        </div>

        </div>
    </div>

<!-- Mostrar fotitos  -->
    <div class="EWLTGduHCjFnjN6tLCXV Atl0coQVHTfJeIp5DBNr">
        <div class="_wYiJGbRZyFZeCc8y7Sf hD0sTTDgbxakubcHVW2X _Ybd3WwuTVljUT4vEaM3 mveJTCIb2WII7J4sY22F mngKhi_Rv06PF57lblDI _YxZw_O8dWkTljptcO7z SWDELhWFjL8JxEtm91_o _1jTZ8KXRZul60S6czNi" >
    <div class="grid md:grid-cols-2 lg:grid-cols-2 xl:grid-cols-3 gap-6">

        @foreach($posts as $post)
        
        
        <div >
            <!-- al $post ser un objeto, se mapea con el post que tenemos en la ruta del archivi
                web.php -- pasamos la publicación y el ID trayendo el objeto! !-->
        <a href = "{{route('publicaciones.show',['post' => $post, 'user'=> $user])}}">
            
            <img src="{{asset('uploads').'/'. $post->imagen}}" alt="Imagen del post {{$post->titulo}}">
       
            </a>

        </div>
        @endforeach
    </div>
    <!-- paginación -->
    <div>
    {{$posts->links('pagination::tailwind')}}
    </div>     
        
    </div>
     </div>


    








   


         