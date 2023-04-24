@extends('layouts.en')

@section('content')
<body style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('/image/cool-background.png');">
    <div class="card ml-auto mr-auto">
        <div class="card-front">
          <p class="title">Raimundas Dabrila</p>
          <p class="subtitle">Manager</p>
        </div>
        <div class="card-back text-center">
          <p>Reach us by using this email: </p>
          <p class="pl-2">raimundas.dabrila@akolegija.lt</p>
        </div>
      </div>
    </body>
    @endsection
    
    <style>
    .card {
        margin-top: 100px;
        display: flex;
        justify-content: center;
        align-items: center;
        color: #1b1b1b;
        width: 600px;
        height: 254px;
        position: relative;
        outline: 6px solid #f5f5f5;
        border-radius: 8px;
        line-height: 150%;
        padding: 16px;
        background: #bb6a08;
        background-blend-mode: multiply;
        background: linear-gradient(to top, #a21ebd, #ffcc33);
        transition: background-color 1s ease-in-out;
        overflow: hidden;
      }
      
      .card-front {
        bottom: 16px;
        left: 0;
        position: absolute;
        width: 100%;
        text-align: center;
        transition: transform 1s cubic-bezier(0.785, 0.135, 0.150, 0.860);
      }
      
      .card-back {
        display: flex;
        justify-content: center;
        align-items: center;
        transform: translateX(120%);
        transition: transform 1s cubic-bezier(0.785, 0.135, 0.150, 0.860);
      }
      
      
      /*Text*/
      .title {
        font-size: 1.3rem;
        font-weight: bold;
      }
      /*Text divider*/
      .title::after {
        content: "";
        display: block;
        width: 50%;
        border-radius: 50%;
        height: 2px;
        margin: 2px auto;
        background-color: #1b1b1b;
      }
      
      
      /*Hover*/
      .card:hover {
        background-color: #1b1b1b25;
      }
      
      .card:hover .card-front {
        transform: translateX(-100%);
      }
      
      .card:hover .card-back {
        transform: translateX(0);
      }
      </style>