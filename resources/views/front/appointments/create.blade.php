@extends('front.app')
@section('content')



  <div class="container">
    <nav
      style="--bs-breadcrumb-divider: '>'"
      aria-label="breadcrumb"
      class="fw-bold my-4 h4"
    >
      <ol class="breadcrumb justify-content-center">
        <li class="breadcrumb-item">
          <a class="text-decoration-none" href="../index.html">Home</a>
        </li>
        <li class="breadcrumb-item">
          <a class="text-decoration-none" href="{{url('doctor')}}">doctors</a>
        </li>
        <li class="breadcrumb-item active" aria-current="page">
            {{auth()->user()->name}}
        </li>
      </ol>
    </nav>
    <div class="d-flex flex-column gap-3 details-card doctor-details">
      <div class="details d-flex gap-2 align-items-center">
        <img
          src="{{asset('uploads/doctors/'.$user->image)}}"
          alt="doctor"
          class="img-fluid rounded-circle"
          height="150"
          width="150"
        />
        <div class="details-info d-flex flex-column gap-3">
          <h4 class="card-title fw-bold">{{$user->name}} </h4>
          <h6 class="card-title fw-bold">
           {{$user->major->name}}
          </h6>
        </div>
      </div>
      <hr />

      <form class="form" method="POST" action="{{route('appointments.store',$user->id)}}">

        <div class="mb-3">
            @csrf
            @include('front._partials.message')
          </div>
           <div class="form-items">

          <div class="mb-3">
            <label class="form-label required-label" for="name">Name</label>
            <input type="text" name="name" value="{{auth()->user()->name}}" class="form-control" id="name"  />
          </div>
       

          <div class="mb-3">
            <label class="form-label required-label" for="phone" >Phone</label >
            <input type="tel" name="phone" class="form-control" id="phone"  />
          </div>


          <div class="mb-3">
            <label class="form-label required-label" for="email" >Email</label >
            <input type="email" name="email" value="{{auth()->user()->email}}" class="form-control" id="email"  />
          </div>


        </div>
        <button type="submit" class="btn btn-primary">
          Confirm Booking
        </button>
      </form>
    </div>
  </div>
</div>

<script>
  const stars = document.querySelectorAll(".star");

  stars.forEach((star, index) => {
    star.addEventListener("click", () => {
      const isActive = star.classList.contains("active");
      if (isActive) {
        star.classList.remove("active");
      } else {
        star.classList.add("active");
      }
      for (let i = 0; i < index; i++) {
        stars[i].classList.add("active");
      }
      for (let i = index + 1; i < stars.length; i++) {
        stars[i].classList.remove("active");
      }
    });
  });
</script>

@endsection
