<x-layout>
    <x-navbar>
    </x-navbar>
        {{-- header --}}
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <img src="./media/header.png" alt="cup of coffee" srcset="" class="imgheader">
                   

                </div>
            </div>
        </div>
        {{-- section1 --}}
        <div class="container-fluid">
            <div class="row ">
                <div class="col-12 col-md-6 d-flex align-items-center justify-content-center flex-column">
                    <h2 class="my-5">Our history:</h2>
                    <h6>We were born in 1234 in new york from a small family business, we have grown a lot to what we are today 20 employees around the world. Come and meet us. </h6>
                </div>
                <div class="col-12 col-md-6">
                    <img src="./media/Nice to meet you.png" alt="" class="imgsotheader">
                </div>
            </div>
        </div>
        {{-- section2 --}}
        <div class="container-fluid my-5">
            <div class="row">
                <div class="col-12 col-md-6 order-md-first">
                    <img src="./media/Boston.png" alt="" srcset="" class="imgboston " >
                </div>
                <div class="col-12 col-md-6 my-5 d-flex align-items-center justify-content-center flex-column ">
                    <h2 class="my-5">Our stores:</h2>
                    <h6>You can find our stores in many cities including New York, Boston, Miami, Los Angeles, Washington. We are working to open new stores in Europe to expand our business.</h6>
                </div>
            </div>
        </div>
        {{-- section3 --}}
        <div class="container-fluid">
            <div class="row my-5 text-center">
                <h2 class="text-center my-5">The founders of our agency: </h2>
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
        <div class="container-fluid">
            <div class="row text-center my-5"> 
                <h2 class="text-center my-5">An example of our product:</h2>
                <div class="col-12 col-md-4 my-5">
                    <div class="card" >
                        <img src="./media/illy.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Illy coffee</h5>
                          <p class="card-text">The best coffee in the world you can find it in our store</p>
                          <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-md-4 my-5">
                    <div class="card" >
                        <img src="./media/lavazza.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Lavazza coffeee</h5>
                          <p class="card-text">The best coffee in the world you can find it in our store</p>
                          <a href="#" class="btn btn-dark">Go somewhere</a>
                        </div>
                      </div>
                </div>
                <div class="col-12 col-md-4 my-5 ">
                    <div class="card" >
                        <img src="./media/nespresso.png" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Nespresso coffee</h5>
                          <p class="card-text">The best coffee in the world you can find it in our store</p>
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
                <div class="col 12 col-md-8">
                    <div class="mb-3">
                        {{-- <form method="POST" action="{{route('invio-contatto')}}">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputName" class="form-label">Name and surname</label>
                                <input type="text" name='userName' class="form-control" id="exampleInputName" aria-describedby="NameHelp">
                                
                              </div>
                            <div class="mb-3">
                              <label for="exampleInputEmail" class="form-label">Email adress</label>
                              <input type="email" name='userMail' class="form-control" id="exampleInputEmail" aria-describedby="emailHelp">
                              
                            </div>
                            <div class="mb-3">
                              <label for="exampleInputMessage" class="form-label">Message</label>
                             <textarea name="userMessage" id=""cols="30" rows="5" class="form-control"></textarea>
                              
                            </div>
                            
                            <button type="submit" class="btn btn-primary" id="butsub">Submit</button>
                        </form> --}}
                </div>
                <div class="col-12 col-md-4 d-flex align-items-center justify-content-center">
                    <i class="fas fa-mug-hot fa-10x"></i>
                </div>
            </div>
        </div>
</x-layout>