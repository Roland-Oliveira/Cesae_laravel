@extends('layouts.main')

@section('title')
    <title>Login</title>
@endsection


@section('content')




    <div class="container">

            <div class="row d-flex justify-content-center ">
                    <div class="col-md-6 my-5 bg-dark-subtle ">
                        <form method="POST" action="{{ route('login')}}">
                            @csrf

                            <div class="mb-3">
                             <label for="exampleInputEmail1" class="form-label">Email address</label>
                             <input type="email" name="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp">
                             <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
                           </div>
                           <div class="mb-3">
                             <label for="exampleInputPassword1" class="form-label">Password</label>
                             <input type="password" name="password" class="form-control"  id="exampleInputPassword1">
                           </div>

                           <button type="submit" class="btn btn-danger my-2">Submit</button>
                         </form>

                    </div>


            </div>




    </div>



  @endsection
