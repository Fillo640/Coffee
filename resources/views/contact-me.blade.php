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
    <div class=formcontact>

    
    <div class="container-fluid text-white">
        <div class="row">
            <div class="col-12">
                <h1>Contact us</h1>
            </div>
        </div>
    </div>

    <div class="container text-white">
        <div class="row">
            <div class="col-12 col-md-4">
                <form method="POST" action="{{route('invio.contatto')}}">
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
                    
                    <button type="submit" class="btn btn-dark" id="butsub">Submit</button>
                </form>
            </div>
        </div>
    </div>
    </div>
</x-layout>