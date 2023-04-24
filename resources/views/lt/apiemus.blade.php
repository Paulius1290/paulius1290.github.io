@extends('layouts.app')

@section('content')
<script>
    function showAlert() {
        if(localStorage.getItem("firstTime")==null){
            alert ("Choose your language! / Pasirinkite savo kalbą!");
   localStorage.setItem("firstTime","done");
}
}

   </script> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>

    <body class="background" src="" onload="showAlert()" style="background-position: center; background-repeat: no-repeat; background-size: cover; background-image: url('/image/shapes.png');">
    {{-- <div class="flex">
        <div class="w-full"><img src="/image/shapes.png" class="w-full h-[350px]"></div>
    </div> --}}
    <section class="gallery pt-8">
        <div style="background-image: url('/image/r.jpg');"></div>
        <div style="background-image: url('/image/code.jpg');"></div>
        <div style="background-image: url('/image/st.jpg');"></div>
        <div style="background-image: url('/image/studying.jpg');"></div>
        <div style="background-image: url('/image/papers.jpg');"></div>
    </section>

    <div class="pt-10 space-x-6 flex">
       <div class="flex flex-col items-center border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 border-gray-700 bg-gray-800 hover:bg-gray-700">
        <div class="hover-text pb-[400px] ">
        <div class="hover-text pr-20 pl-4 text-5xl font-bold text-white align-top">
        <div class="hover-text pr-20  text-5xl font-bold text-white align-top">Raimundas</div>
        <div class="hover-text pr-20 text-white">Iniciatorius ir vadovas</div>
           <img class="manImg pt-4" src="https://moksloakademija.lt/wp-content/uploads/2022/08/176677865_2934592523534036_3858279945893918816_n-226x300.jpg">
        <br>
        
        </div>
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Kas mes esame?</h5>
            <p class="mb-3 font-normal text-gray-400">Kokybiškus nuotolinius mokymus organizuojanti ir teikianti organizacija. Esame profesionali, žingeidi, nuolatos auganti ir tobulėjanti komanda, galinti pasiūlyti inovatyvius mokymų sprendimus. Jau daugiau kaip 10 metų teikiame informacinių technologijų mokymų paslaugas, kuriame šiuolaikišką skaitmeninį turinį ir informacinius technologinius sprendimus.</p>
        </div>
    </div>
    

</div>

<div class="">
    <div  class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">Mūsų akademijos ištakos</h5>
        <div>
        <p class="font-normal text-gray-700 dark:text-gray-400">Nuotoliniai mokymai pradėjo dominti, dar studijų metais, kaip nauja alternatyva tradiciniam mokymuisi, tai nauja ir inovatyvi mokslo sritis, apipinta moderniųjų informacinių technologijų.
        </p>
        <br>
        <p class="font-normal text-gray-700 dark:text-gray-400">Prieš daugiau kaip dešimtmetį pradėti pirmieji mokymai, buvo realizuojama viena mokymo programa - kompiuterių įvadas, tai pažintis su kompiuterio aplinka, pagrindinėmis programoms ir specializuotomis biuro programomis.
        </p>
        <br>
        <p class="font-normal text-gray-700 dark:text-gray-400">Mokymų programa daugybę kartų buvo tobulinta, atnaujinta, vėliau įdiegta virtuali mokymo aplinka, ženkliai palengvinusi mokymo procesą, registracijos bei apmokėjimo sistemos.
        </p>
        <br>
        <p class="font-normal text-gray-700 dark:text-gray-400">2022 m. atsinaujinome dar kartą, šį kartą turime visiškai naują internetinę sistemą, su registracijos ir apmokėjimo sistemomis, išsamios informacijos blokais. Taip pat atnaujintą virtualią mokymo aplinką, saugią ir paprastą aplinką, kurioje vyksta visas mokymo procesas. Turime atnaujintas visas mokymo programas ir laboratorinių darbų bazes.
    
        </p>
        <br>
        <p class="font-bold text-gray-700 dark:text-gray-400">Sėkmingas kelias prasideda su mumis!
        </p>
        </div>
        </div>


        
    
        
    </div>
    

    </div>

    










<section class="flex justify-around pt-20 pb-40">
  <div class="card flex italic"></div>
    </section>

            <!-- Messenger Pokalbių papildinys Code -->
    <div id="fb-root"></div>

    <!-- Your Pokalbių papildinys code -->
    <div id="fb-customer-chat" class="fb-customerchat">
    </div>

    <script>
      var chatbox = document.getElementById('fb-customer-chat');
      chatbox.setAttribute("page_id", "113157411759259");
      chatbox.setAttribute("attribution", "biz_inbox");
    </script>

    <!-- Your SDK code -->
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          xfbml            : true,
          version          : 'v16.0'
        });
      };

      (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/en_US/sdk/xfbml.customerchat.js';
        fjs.parentNode.insertBefore(js, fjs);
      }(document, 'script', 'facebook-jssdk'));
    </script>
</body>




<style>


.container {
    display: inline-block;
  }
  .manImg {
    display: none;
  }
  .hover-text:hover ~ .manImg {
    display: block;  
  }
    

    .card{
        display:grid;
        place-items: center;
        position: relative;
        height: 100px;
        width: 1300px;
        background-color: #191919;
        border-radius: 10px;
        overflow: hidden;
    }
    .card::before{
        content: '';
        width: 1300px;
        height: 100px;
        left:20px;
        top: -140px;
        position: absolute;
        background: linear-gradient(#bd3817, #0b07f3);
        animation: animate 5s linear infinite;
    }
    @keyframes animate{
        0%{transform: rotate(0deg);}
        100%{transform: rotate(360deg);}
    }

    .card::after{
        content: '200+ Baigę mokymus. 3+ Profesionalūs dėstytojai. 97% Mumis pasitiki';
        position: absolute;
        background-color: #191919;
        inset: 3px;
        border-radius: 5px;
        color: white;
        font-size: 40px;
        font-family: "Times New Roman", Times, serif;
        font-weight: bold;
        text-align: center;
    }

    .text{
        display:hidden;
    }
    .text:hover{

        display:none;
    }

    .gallery{
        display:flex;
        height: 20rem;
        gap: 1rem;
    }
    .gallery > div{
        flex: 1;
        border-radius: 1rem;
        background-position: center;
        background-repeat: no-repeat;
        background-size: auto 100%;
        transition: all .8s cubic-bezier(.25, .4, .45, 1.4);
    }
    .gallery > div:hover{
        flex:5;
    }
    .background{
        background: linear-gradient(90deg, #ffffff, #b6b4b4);
        background-size: 400% 400%;
        animation: animating 25s infinite ease-in-out;
    }

    @keyframes animating {
        0% {
        background-position: 0 50%;
    }
    50% {
        background-position: 100% 50%;
    }
    100% {
        background-position: 0 50%;
    }
    }

    


    </style>

</html>
@endsection
