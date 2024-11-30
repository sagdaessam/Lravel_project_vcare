@extends('front.app')
@section('content')

<div class="container">

   <div class="row">
     <div class="col-6 mx-auto">
        <form action="{{route('auth.do.login')}}" method="post" class="my-5 border p-3" enctype="multipart/form-data">
            @csrf
            @include('front._partials.message')

            <div class="mb-3">
                <h1 class="text-center my-3 p-2"> Welcome  Back</h1>
            </div>

            <div class="mb-3">
                <label for="">Email </label>
                <input type="text" name="email" id="" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">Password </label>
                <input type="password" name="password" id="" class="form-control">
            </div>


            <div class="mb-3">
                <input type="submit" value="save" class="form-control btn btn-primary">
            </div>
        </form>
     </div>
   </div>

</div>

@endsection
{{-- @extends('front.app')
@section('content')

<div class="container">
    <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb" class="fw-bold my-4 h4">
        <ol class="breadcrumb justify-content-center">
            <li class="breadcrumb-item"><a class="text-decoration-none" href="{{url('/')}}">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">login</li>
        </ol>
    </nav>
    <div class="d-flex flex-column gap-3 account-form  mx-auto mt-5">
        <form class="form" action="{{route('auth.do.login')}}" method="post">
            @csrf
            @include('front._partials.message')

            <div class="mb-3">
                <label class="form-label required-label" for="email">Email</label>
                <input type="email" class="form-control" id="email" >
            </div>
            <div class="mb-3">
                <label class="form-label required-label" for="password">password</label>
                <input type="password" class="form-control" id="password" >
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
        <div class="d-flex justify-content-center gap-2 flex-column flex-lg-row flex-md-row flex-sm-column">
            <span>don't have an account?</span><a class="link" href="{{url('register')}}">create account</a>
        </div>
    </div>

</div>
</div>

@endsection --}}
