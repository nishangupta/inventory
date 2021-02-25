@extends('layouts.home')
@section('content')
<div class="page-wrapper">

  @include('inc.public.navbar')

  <div class="container my-2 py-2">
    <div class="row">
      <div class="col-sm-12 col-md-8">
        {{-- <h1>Asp</h1> --}}
        <div id="content" class="py-0">
          <br>
  
          <p class="my-4" style="font-size:2.5rem;line-height:2.8rem;color:#DB8621">We use professional expertise to deliver timely, quality and successful outcome.</p>
  
          <div class="">
            <p>The company is managed by a team of professionals who have graduated from universities in the UK and gained combined experience of more than 30 years in advisory and consulting roles in Australian and British corporations.
              <br>
              <br>
              We provide one of the best career counselling and dedicate significant time mapping student’s interest, passion and skill set to the courses on offer.
              <br>
              <br>
              
              We provide in-depth preparations and succeed in visa approvals in timely and accurate manner.
              <br>
              <br>
              
              We prepare students for the transition with detailed post visa services including resume preparation in destination country’s format, job search guidance, travel and accommodation assistance
              <br>
              <br>
              
              We have digital platform to ease and fast track your application process which you can start by selecting the destination country in the form showing up on your right-hand side.</p>
          </div>
        </div>

      </div>
      <div class="col-sm-12 col-md-4 pt-4" style="background-color:#1B4962, color:white;">
        <form action="">
          <div class="form-group">
            <label for="">Select country</label>
            <select name="country_id" class="form-control" id="mySelector" onchange="handleChange()">
              <option selected disabled>Select country</option>
              @foreach($countries as $country)
              <option value="{{$country->id}}">{{$country->name}}</option>
              @endforeach
            </select>
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          <div class="form-group">
            <input type="text" class="form-control" placeholder="Full name">
          </div>
          
        </form>
      </div>
    </div>
  </div>

  @include('inc.public.footer')
  
</div>
@endsection

@push('js')
<script>
  const countries = {!! json_encode($countries->toArray()) !!};
  console.log(countries)

  const content = document.getElementById('content')

  function handleChange(){
    const val = document.getElementById('mySelector').value;
    const country = countries.find((c)=>{
      return c.id == val
    })

    if(country.name.toLowerCase() !== 'others'){
      displayContent(country)
    }else{
      displayOthers(country)
    }
  }

  function displayContent(country){
    content.innerHTML=`
      <h1>${country.name}</h1>

      <img src="${country.cover}" class="img-fluid" alt="Country image">

      <br>
      <p class="my-4 text-dark" style="line-height:2rem,font-size:2.5rem">
        ${country.description}
      </p>
    `;     
  }

  function displayOthers(country){
    content.innerHTML=`
      <h1>${country.name}</h1>

      <div class="row">
        <div class="col-6 mb-2">
          <img src="/img/countries/france.png" class="img-fluid" alt="Country image">
          <span class="lead text-dark">France</span>
        </div>
        <div class="col-6 mb-2">
          <img src="/img/countries/germany.png" class="img-fluid" alt="Country image">
          <span class="lead text-dark">Germany</span>
        </div>
        <div class="col-6 mb-2">
          <img src="/img/countries/japan.png" class="img-fluid" alt="Country image">
          <span class="lead text-dark">Japan</span>
        </div>
        <div class="col-6 mb-2">
          <img src="/img/countries/netherland.png" class="img-fluid" alt="Country image">
            <span class="lead text-dark">Netherlands</span>
        </div>
        <div class="col-6 mb-2">
          <img src="/img/countries/singapore.png" class="img-fluid" alt="Country image">
          <span class="lead text-dark">Singapore</span>
        </div>
        <div class="col-6 mb-2">
          <img src="/img/countries/spain.png" class="img-fluid" alt="Country image">
          <span class="lead text-dark">Spain</span>
        </div>
      </div>
      <br>
    `;     
  }

</script>
@endpush