<x-layout>
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif 


    <div class="container">
        <div class="row  pglogin align-items-center justify-content-center">
            <div class="col-12 col-md-6 p-5 text-center shadow">
                <h1 class="pglogin2" >Accedi</h1>
            </div>
        </div>
    
        <div class="row  pglogin align-items-center justify-content-center">
            <div class="col-12 col-md-6 p-5 text-center shadow">
                <form action="{{route('login')}}" method="POST">
                    @csrf
                
    
                <div class="mb-3">
                    <label for="exampleUsermail" class="form-label pglogin">Email utente</label>
                    <input type="email" name="email" class="form-control form-control-lg" id="exampleUsermail" value="{{old('email')}}">
                </div>
    
                <div class="mb-3">
                    <label for="exampleUserpass" class="form-label pglogin">Password utente</label>
                    <input type="password" name="password" class="form-control form-control-lg" id="exampleUserpass">
                </div>
    
                
                
                
                <button type="submit"class="btn btn-secondary btn-lg">Accedi</button>
                
                
               
                
            </form>
            <i class="fas fa-sign-in-alt fa-10x my-5 iconerl"></i>
            </div>
        </div>
      
      
    </div>
    
    
    
    
    
    
    
    
    
    
    
    </x-layout>