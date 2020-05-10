
@extends('layouts.app')

@section('content')
<div class="jubotron jumbotron-fluid ">
 
  <div class="jumbotron align-items-center">
    
  <div class="row align-items-center">
    <div class="col">
      
      <div class="col text-dark">
          <h1 class="display">Contact Us</h1>
          <div class="container">
            <div class="row align-items-center">
              <form class="form" action="/contact" method="POST">
                  <div class="col">
                    <div class="input-group">
                        <div class="input-group mb-3">
                         
                        <input type="text" name="username" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required>
                      </div>
                    </div>                 
                  <div class="input-group mb-3 ">
                    <input type="email" name="email" class="form-control" placeholder="name@email.com" aria-label="Recipient's username" aria-describedby="basic-addon2" required>
                     
                  </div>
                  <div class="form-group">
                    <label for="exampleFormControlTextarea1">Feedback</label>
                    <textarea class="form-control" name="message" id="exampleFormControlTextarea1" rows="3" required></textarea>
                  </div>
                  @csrf
                  <button type="submit" class="btn btn-primary">Submit</button>
              </div>
              </div>
            
            </div>
            </div>
          
  </div>
    </div>
  </div>

</form>
</div>
@endsection


 

  
 



 