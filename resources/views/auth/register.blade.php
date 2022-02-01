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
    <div class="row align-items-center justify-content-center ">
        <div class="col-12 col-md-8 p-5 text-center shadow">
            <h1 class="pglogin2">Registrati</h1>
        </div>
    </div>
  
    
    <div class="row align-items-center justify-content-center">
        <div class="col-12 p-5 col-md-8 pglogin text-center shadow">
            <form action="{{route('register')}}" method="POST">
                @csrf
            <div class="mb-3">
                <label for="exampleUsername" class="form-label pglogin">Nome utente</label>
                <input type="text"name="name" class="form-control form-control-lg" id="exampleUsername" value="{{old('name')}}">
            </div>

            <div class="mb-3">
                <label for="exampleUsermail" class="form-label pglogin ">Email utente</label>
                <input type="email" name="email" class="form-control form-control-lg" id="exampleUsermail" value="{{old('email')}}">
            </div>

            <div class="mb-3">
                <label for="exampleUserpass" class="form-label pglogin">Password utente</label>
                <input type="password" name="password" class="form-control form-control-lg" id="exampleUserpass">
            </div>

            
            <div class="mb-3">
                <label for="exampleUserpassconf" class="form-label pglogin">Conferma Password utente</label>
                <input type="password" name="password_confirmation" class="form-control form-control-lg" id="exampleUserpassconf">
            </div>
            
            <button type="submit" class="btn btn-secondary btn-lg">Registrami!</button>
            
            
        </form>
        <i class="fas fa-address-book fa-10x my-5 iconerl"></i>
        </div>
    </div>
  
  
</div>











</x-layout>













