@extends('layouts.en')

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
<body class="background"  onload="showAlert()">
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
        <div class="pr-20 text-white">Initiator and leader</div>
           <img class="manImg pt-4" src="https://moksloakademija.lt/wp-content/uploads/2022/08/176677865_2934592523534036_3858279945893918816_n-226x300.jpg">
        <br>
        
        </div>
        <div class="flex flex-col justify-between p-4 leading-normal">
            <h5 class="mb-2 text-2xl font-bold tracking-tight text-white">Who are we?</h5>
            <p class="mb-3 font-normal text-gray-400">An organization that organizes and provides high-quality distance training. We are a professional, progressive, constantly growing and improving team, able to offer innovative training solutions. We have been providing information technology training services for more than 10 years, creating modern digital content and information technology solutions.</p>
        </div>
    </div>
    

</div>

<div class="">
    <div  class="block max-w-sm p-6 bg-white border border-gray-200 rounded-lg shadow hover:bg-gray-100 dark:bg-gray-800 dark:border-gray-700 dark:hover:bg-gray-700">
        <h5 class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white">The origins of our academy</h5>
        <div>
        <p class="font-normal text-gray-700 dark:text-gray-400">Distance learning became interesting during the study years, as a new alternative to traditional learning, it is a new and innovative field of science surrounded by modern information technologies.
        </p>
        <br>
        <p class="font-normal text-gray-700 dark:text-gray-400">
            More than a decade ago, the first trainings started, one training program was implemented - introduction to computers, which is familiarization with the computer environment, basic programs and specialized office programs.
        </p>
        <br>
        <p class="font-normal text-gray-700 dark:text-gray-400">

            The training program was improved and updated many times, and later a virtual training environment was installed, which significantly facilitated the training process, registration and payment systems.
        </p>
        <br>
        <p class="font-normal text-gray-700 dark:text-gray-400">in 2022 we have renewed again, this time we have a completely new online system, with registration and payment systems, blocks of detailed information. Also an updated virtual training environment, a safe and simple environment where the entire training process takes place. We have updated all training programs and laboratory work databases.
    
        </p>
        <br>
        <p class="font-bold text-gray-700 dark:text-gray-400">
            The successful path begins with us!
        </p>
        </div>
        </div>
        
    
        
    </div>
    

    </div>

    










<section class="flex justify-around pt-20 pb-40">
  <div class="card flex italic"></div>
    </section>
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
        content: '200+ Completed training. 3+ Professional teachers. 97% Trust in us';
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
        animation: animating 10s infinite ease-in-out;
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
