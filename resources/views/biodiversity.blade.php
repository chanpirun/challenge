@include('layouts.header')
@extends('layouts.footer')

@section('airpollution')

<body>
 
    
    <section class="home" id="home">

        <div class="swiper home-slider">
    
            <div class="swiper-wrapper">
    
                <div class="swiper-slide box" style="background: url(image/home-slider-7.png);">
                   
                </div>

            </section>
            <div class="container">
                <h1>A Call to Action</h1>
                <p>Biodiversity drives the well-being and resilience of Earth’s natural systems and the species that depend upon them. Protected areas – accounting for 15% of terrestrial and 8% of marine ecosystems globally – serve as the foundation of biodiversity conservation. However, to be effective, protected areas must also be well managed and sufficiently resourced. Unfortunately, most protected areas today lack critical capacity to meet their conservation objectives.</p>
                <p>While SMART has made significant strides in improving the management of protected areas, threats to biodiversity and habitats continue to escalate and protected area managers are faced with constantly changing needs and priorities. It is therefore essential that the SMART Partnership intensify its efforts to make its suite of technologies and support services as practical, effective and adaptable as possible, promote the use of SMART around the world, strengthen the capacity of practitioners to employ it, and build a global community of SMART users and stakeholders. Software alone will not solve the biodiversity crisis, but the combination of our cutting edge technology, well-trained staff, relevant data, and a global network of conservation practitioners offers a proven, uniquely powerful solution to ensure the survival of the earth’s biodiversity for generations to come.</p>
                <p>We invite you to join us on this journey.</p>
                <div class="button-container">
                    <button><a href="contactus">Join Us</a></button>
                </div>
            </div>
            <style>
              
        body{
        overflow-x: hidden;
        background: var(--white);
        }

        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            text-align: center;
        }
        .container h1 {
            color: #d4a12a;
            font-size: 36px;
            margin-bottom: 10px;
        }
        .container h1::after {
            content: "";
            display: block;
            width: 50px;
            height: 3px;
            background-color: #d4a12a;
            margin: 10px auto 20px;
        }
        .container p {
            font-size: 18px;
            line-height: 1.6;
            margin-bottom: 20px;
            text-align: left;
        }
        .container .button-container {
            text-align: center;
            margin-top: 20px;
        }
        .container .button-container button {
            background-color: #d4a12a;
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 18px;
            border-radius: 5px;
            cursor: pointer;
        }
        .container .button-container button:hover {
            background-color: #b58927;
        }
                </style>
        <section class="air" id="air">

            <div class="content" data-aos="fade-left">
                <h3>Air Pollution</h3>
                <p>As of 2024, Cambodia faces significant water pollution challenges, impacting the health of its people and ecosystems. Areas most affectted by water polution are the Mekong River and Tonle Sap Lake. Industrial and agricultural runoff, inadequate sanitation, and hydropower development contribute to contamination of rivers and lakes, increasing the risk of waterborne diseases and ecosystem degradation. Illegal logging and climate change exacerbate these issues, leading to soil erosion, sedimentation, and altered hydrological patterns. Efforts by organizations like aim to address these challenges through initiatives promoting access to safe water and sanitation, implementing sustainable water management practices, and empowering communities to improve their water resources' quality and resilience. By investing in infrastructure, promoting awareness, and fostering partnerships..</p>
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
