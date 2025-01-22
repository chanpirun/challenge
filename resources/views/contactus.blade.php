@include('layouts.header')
@extends('layouts.footer')

@section('contactus')

    <body>
        @if (session('authenticated'))
        <div class="sidebar">
            <div class="logo">
                <img src="image/logo.png" alt="logo" id="logo_img">
                <div class="logo_text">EcoTrack</div>
                <i class='bx bx-menu-alt-right' id="btn"></i>
            </div>

            <div class="nav_list">
                <ul>
                    <li>
                        <a href="airpollution">
                            <i class='bx bx-grid-alt'></i>
                            <span class="links_name">Dashboard</span>
                        </a>
                        <span class="tooltip">Air Quality</span>
                    </li>

                    <li>
                        <a href="waterpollution">
                            <i class='bx bx-bar-chart'></i>
                            <span class="links_name">Analytics</span>
                        </a>
                        <span class="tooltip">Water Pollution</span>
                    </li>

                    <li>
                        <a href="biodiversity">
                            <i class='bx bx-chat'></i>
                            <span class="links_name Messages">Messages</span>
                        </a>
                        <span class="tooltip">Biodiversity</span>
                    </li>



                    <li>
                        <a href="#">
                            <i class='bx bx-user'></i>
                            <span class="links_name">User</span>
                        </a>
                        <span class="tooltip">User</span>
                    </li>
                </ul>

                <div class="info">
                    <a href="#">
                        <img src="image/logo.png" alt="avatar" class="avatar">
                        <div class="table">
                            <div class="table_text">

                            </div>
                        </div>
                    </a>
                    <div class="tooltip">
                        <span class="name">EcoTrack</span>
                        <span class="country">ParagonIU</span>
                    </div>
                </div>

                <form  class="logout" action ="/logout" method="POST">
                    @csrf
                    <a href="#">
                        <i class='bx bx-log-out'></i>
                        <span class="links_name">Log out</span>
                    </a>
                    
                    <button class="tooltip" type="submit">Logout</button>
                </form>
               
            </div>
        </div>
        </div>
    @endif
        <section class="about" id="about">
            <style>
                .about {
                    background: url(../image/tutle.jpg) no-repeat;
                    background-position: center;
                    background-size: cover;
                }


                .overlay {
                    position: absolute;
                    top: 40%;
                    left: 70%;
                    transform: translate(-50%, -50%);
                    background: rgba(0, 0, 0, 0.5);
                    padding: 50px;
                    border-radius: 10px;
                }

                .overlay h2 {
                    color: #66cdaa;
                    font-size: 20px;
                }

                .overlay p {
                    color: #66cdaa;
                    font-size: 16px;

                }

                .overlay input,
                .overlay button {
                    display: block;
                    width: 100%;
                    padding: 10px;
                    margin: 10px 0;
                    border: none;
                    border-radius: 5px;
                }

                .overlay button {
                    background-color: #66cdaa;
                    color: white;
                    cursor: pointer;
                }
            </style>


            <div class="content" data-aos="fade-right">
                <h3>Our Environmental monitoring platform</h3>
                <p>At EcoTrack, we are dedicated to the monitoring and conservation of wildlife. Our platform serves as a
                    crucial tool for tracking environmental changes and protecting endangered species. If you have any
                    questions, observations, or need assistance with using our services, please don't hesitate to reach out.
                    Whether you prefer to connect via phone, email, or our social media channels, our team is here to offer
                    the best support and solutions. Share your insights or seek advice from our experts—together, we can
                    make a significant impact on preserving our natural world. Email us at EcoTrack@gmail.com. Let's work
                    together for a sustainable future.</p>
                <a href="#" class="btn">read more</a>
            </div>

            <form class="overlay" action="/contectus" method="post">
                @csrf
                <h2>Get the help you need.</h2>
                <p>Give us a few details and we'll offer the best solution. Connect by Phone, Email and more.</p>
                <input type="text" name='info' placeholder="Tell us what's happening">
                <button type="submit">Send Email</button>
            </form>

        </section>



        <script>
            const sidebar = document.querySelector(".sidebar");
            const btn = document.querySelector("#btn");
            logo_img.onclick = function() {
                sidebar.classList.add('open');
            }
            btn.onclick = function() {
                sidebar.classList.remove('open');
            }
        </script>









        <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

        <!-- custom js file links  -->
        <script src="{{ url('js/script.js') }}"></script>

        <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
        <script>
            AOS.init({
                delay: 400,
                duration: 800
            });
        </script>
    </body>
