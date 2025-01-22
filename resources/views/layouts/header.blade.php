 <!-- header section starts  -->
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



                 {{-- <li>
                     <a href="#">
                         <i class='bx bx-user'></i>
                         <span class="links_name">User</span>
                     </a>
                     <span class="tooltip">User</span>
                 </li> --}}
             </ul>

             <div class="info">
                 <a href="dashboard_page">
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

             <form class="logout" action ="/logout" method="POST">
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
 <header class="header">

     <a href="#" class="logo"> <i class="fas fa-ghost"></i> EcoTrack </a>
     <nav class="navbar">
         <a href="#home" class="active">home</a>
        
             <div class="dropdown">
                 <a href="#" class="dropbtn">what we do</a>
                 <div class="dropdown-content">
                     <a href="airpollution">Air Pollution</a>
                     <a href="waterpollution">Water Pollution</a>
                     <a href="noisepollution">Noise Pollution</a>
                     <a href="biodiversity">Biodiversity Pollution</a>
                 </div>

             </div>
         <a href="aboutus">about us</a>
         <a href="contactus">contact us</a>
     </nav>
     
     @if (!session('authenticated'))
         <div class="item">
             <button class="sign">
                 <a href="signup">Sign UP</a>
             </button>
             <button class="sign">
                 <a href="login">Sign IN</a>
             </button>
         </div>
     @endif



     <div class="icons">
         <div id="menu-btn" class="fas fa-bars"></div>
         <div id="search-btn" class="fas fa-search"></div>
         {{-- <a href="dashboard_page" class="fas fa-user"></a> --}}
     </div>

     <form action="" class="search-form">
         <input type="search" placeholder="search here..." id="input-box">
         <label for="input-box" class="fas fa-search"></label>
     </form>

 </header>
 <style>
     body {
         overflow-x: hidden;
         background: var(--black);
     }
 </style>
 <!-- header section ends -->
