<x-layout>
  
        {{-- header --}}
        <header >
            
            <div class="container-fluid ">
                <div class="row align-items-center header ">
                    <div class="col-12 imgheader">
                        @Auth
                        <h1 class="tit text-white ">{{__('ui.headertit')}} {{Auth::user()->name}} </h1>
                        @else
                        <h1 class="tit text-white ">{{__('ui.headertit')}} </h1>
                        @endAuth
                        
                    </div>
                </div>
            </div>
        </header>
        {{-- section1 --}}
        <div class="container-fluid my-1 ">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-2 text-center colsec1p">
                    <h2>{{__('ui.section1title')}}</h2>
                    <h6>{{__('ui.section1_paragraph')}} </h6>
                </div>
                <div class="col-12 col-md-10 colsec1">
                    <img src="./media/you.png" alt="" class="imgsotheader">
                </div>
            </div>
        </div>
        {{-- section2 --}}
        <div class="container-fluid ">
            <div class="row justify-content-center align-items-center">
                <div class="col-12 col-md-10  colsec1  ">
                    <img src="./media/Boston.png" alt="" srcset="" class="imgboston " >
                </div>
                <div class="col-12 col-md-2 my-5 colsec1p text-center ">
                    <h2 >{{__('ui.section2title')}}</h2>
                    <h6>{{__('ui.section2paragraph')}}</h6>
                </div>
            </div>
        </div>
        {{-- section3 --}}
        <div class="container-fluid">
            <div class="row my-3 text-center">
                <h2 class="text-center my-5">{{__('ui.section3title')}} </h2>
                <div class="col-12 col-md-4 my-5 text-center">
                    <h3>Mario Rossi</h3>
                    <img src="./media/persona1.jfif" alt="" class="img-fluid"srcset="">
                    <h4>Co-founder Coffeidea</h4>
                </div>
                <div class="col-12 col-md-4 my-5">
                    <h2>Gianluca Rossi</h2>
                    <img src="./media/persona2.jfif" alt=""class="img-fluid" id="imm2" srcset=""> 
                    <h3>Founder and CEO</h3>
                </div>
                <div class="col-12 col-md-4 my-5">
                    <h3>Maria Rossi</h3>
                    <img src="./media/persona 3.jfif" class="img-fluid" id="imm3"alt="" srcset="">
                    <h4>Co-founder Coffeidea</h4>

                </div>
            </div>
        </div>
        {{-- section4 --}}
        <div class="container-fluid">
            <div class="row text-center my-5"> 
                <h2 class="text-center my-5">{{__('ui.section4title')}}</h2>
                <div class="col-12 col-md-4 my-5">
                    <div class="card" >
                        <img src="./media/illy.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{__('ui.section4firstcardtitle')}}</h5>
                          <p class="card-text">{{__('ui.section4firstcardescription')}}</p>
                          <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-md-4 my-5">
                    <div class="card" >
                        <img src="./media/lavazza.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{__('ui.section4secondcardtitle')}}</h5>
                          <p class="card-text">{{__('ui.section4secondcardescription')}}</p>
                          <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-md-4 my-5 ">
                    <div class="card" >
                        <img src="./media/nespresso.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">{{__('ui.section4thirdcardtitle')}}</h5>
                          <p class="card-text">{{__('ui.section4thirdcardescription')}}</p>
                          <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                      </div>
                </div>
            </div>
        </div>
        {{-- section4 --}}
        <div class="container-fluid">
            <div class="row">
                <h2>Wanna join to our team? Contact us:</h2>
                <div class="col 12 ">
                    <i class="fas fa-mug-hot fa-10x"></i>
                   <a type="submit"href="{{route('contattami')}}">{{__('ui.navbar_workwithus')}}</a>       
                
                </div>
            </div>
        </div>
        {{-- section5  --}}
        <div class="container-fluid my-3">
            <div class="row text-center">
                <div class="col-12 col-md-4 cartambulanza my-2">
                    <i class="fas fa-ambulance fa-4x"></i>
                    <h4>Croce rossa</h4>
                    <p>Sosteniamo da sempre la croce rossa con donazioni periodiche sono i nostri eroi</p>
                </div> 
                <div class="col-12 col-md-4  cartasedia my-2">
                    <i class="fab fa-accessible-icon fa-4x"></i>
                    <h4>Disabilità</h4>
                    <p>Siamo da sempre un azienda attenta alle persone con Disabilità siamo tutti uguali</p>
                </div> 
                <div class="col-12 col-md-4 cartamb my-2">
                    <i class="fas fa-apple-alt fa-4x"></i>
                    <h4>Ambiente</h4>
                    <p>Siamo da sempre attenti all'ambiente la terra è la nostra casa ed è nostro dovere tenerla pulita</p>
                </div> 

            </div>
        </div>        
</x-layout>