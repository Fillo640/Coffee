<x-layout>
    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <h1>contact us</h1>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
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
</x-layout>