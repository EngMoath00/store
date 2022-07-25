   <style>
       .about-section {
           padding: 50px;
           text-align: center;
           background-color: #474e5d;
           color: white;
       }

   </style>

   <br>
   <div class="about-section">
       <h1>About Us Page</h1>
       <p>Some text about who we are and what we do.</p>
       <p>{{ $informations->about_us }}</p>
   </div>

   <br>
   <br>
   <br><br>
   <div class="row text-center mb-5">
       <div class="col-md-3">
           <div class="contact-box">
               <i class="far fa-envelope fa-3x"></i>
               <h3>Email Address</h3>
               <p>
                   <a href="mailto:contactus@bakkah.net.sa" class="email">{{ $informations->email }}</a>
               </p>
           </div>
       </div>
       <div class="col-md-3">
           <div class="contact-box">
               <i class="fas fa-map-marker-alt fa-3x"></i>
               <h3>Our Address</h3>
               <div class="adr">
                   <div class="street-address">
                       {{ $informations->location }}
                   </div>
                   {{-- <span class="locality">Al Narjis</span>,
                    <span class="region">Riyadh</span>,
                    <span class="postal-code">13327</span>
                    <span class="country-name">Saudi Arabia</span> --}}
               </div>
           </div>
       </div>

       <div class="col-md-3">
           <div class="contact-box">
               <i class="fas fa-fax fa-3x"></i>
               <h3>Phone </h3>
               <p class="tel">
                   {{ $informations->phone }}<br /><br />
               </p>
           </div>
       </div>
       <div class="col-md-3">
           <div class="contact-box">
               <i class="far fa-calendar-alt fa-3x"></i>
               <h3>Our social media</h3>
               <p><a href="{{ $informations->facebook }}">facebook</a>
                   <br><a href="{{ $informations->instagram }}">instagram
                   </a>
               </p>
           </div>
       </div>
   </div>
