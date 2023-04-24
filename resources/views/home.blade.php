@extends('layouts.home')

@section('content')

<body style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('/image/particles.png');">
  <div class="flex justify-center text-white font-semibold pt-10">
    Palieskite korteles
  </div>
    <div class="flex space-x-5 justify-around pt-40">
<div class="card">
    <div class="card-info">
      <a href="{{route('lt.apiemus')}}" class="title">Apie mus</a>
    </div>
  </div>
  <div class="card">
    <div class="card-info">
      <a href class="title">Moduliai</a>
    </div>
  </div>
  <div class="card">
    <div class="card-info">
      <a href="{{route('lt.kontaktai')}}" class="title">Kontaktai</a>
    </div>
  </div>
    </div>
</body>
@endsection


<style>
    .card {
 --background: linear-gradient(to left, #f7ba2b 0%, #ea5358 100%);
 width: 190px;
 height: 254px;
 padding: 5px;
 border-radius: 1rem;
 overflow: visible;
 background: #f7ba2b;
 background: var(--background);
 position: relative;
 z-index: 1;
}

.card::after {
 position: absolute;
 content: "";
 top: 30px;
 left: 0;
 right: 0;
 z-index: -1;
 height: 100%;
 width: 100%;
 transform: scale(0.8);
 filter: blur(25px);
 background: #f7ba2b;
 background: var(--background);
 transition: opacity .5s;
}

.card-info {
 --color: #181818;
 background: var(--color);
 color: var(--color);
 display: flex;
 justify-content: center;
 align-items: center;
 width: 100%;
 height: 100%;
 overflow: visible;
 border-radius: .7rem;
}

.card .title {
 font-weight: bold;
 letter-spacing: .1em;
}

/*Hover*/
.card:hover::after {
 opacity: 0;
}

.card:hover .card-info {
 color: #f7ba2b;
 transition: color 1s;
}

</style>