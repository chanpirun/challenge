@include('layouts.header')
@extends('layouts.footer')

@section('aboutus')
<body>
    
    <section class="about" id="about">
        <style>
            .about{
                background: url(../image/pic1.webp) no-repeat;
                background-position: center;
                background-size: cover;
            }
            </style>

        <div class="content" data-aos="fade-right">
            <h3>Our Environmental monitoring platform</h3>
            <p>Our mission at Eco Track is to foster a sustainable future for generations to come. With a steadfast commitment to environmental preservation, we strategics and implement Eco-conscious plans. From Destroying the environment in every way that human has done to promoting biodiversity, every action is driven by our dedication to harmonize business operations with nature's delicate balance.</p>
            <a href="#" class="btn">read more</a>
        </div>
    
    </section>










    <script>
        const sidebar = document.querySelector(".sidebar");
        const btn = document.querySelector("#btn");
        logo_img.onclick = function(){
            sidebar.classList.add('open');
        }
        btn.onclick = function(){
            sidebar.classList.remove('open');
        }
      </script>
    
    
    
    
    
    
    
    
    
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>
    
    <!-- custom js file links  -->
    <script src="{{url('js/script.js')}}"></script>
    
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
      AOS.init({
          delay:400,
          duration:800
      });
    </script>
    
  </body>