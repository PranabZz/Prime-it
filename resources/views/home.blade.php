<x-frontend.layout>
<!-- landing page ends -->

<!-- home_content -->
<div class="w-full container mx-auto py-16 h-full">
  <div class="lg:mx-24 sm:mx-12">
     <p class="lg:text-4xl home_text tracking-loose font-normal pt-4">"Processing Our Future"</p>
  </div>
</div>
<!-- home_content_ends -->

<!-- about -->
<section class="sm:py-20">
  <div class="container mx-auto">
    <div class="lg:mx-24 sm:mx-12">

      <div class="about_main flex lg:flex-row mb:flex-col justify-between">

        <div class="about_content lg:w-[45%]">

          <div class="about_header flex justify-evenly tracking-widest">

            <div class="header sm:w-[80%] pop_bold">
              <span class="font-semibold primary">We're a dynamic team of</span>
              <h2 class="font-extrabold py-4 sm:text-4xl mb:text-3xl">Innovative, <span class="primary">Tech</span> Enthusiastic People</h2>

              <div class="py-2">
              <div style="height:5px ;" class="bg-blue-800 w-[20%]"></div>
              <div style="height:5px ;" class="bg-blue-800 w-[10%] my-2"></div>
              </div>

            </div>

            <div class="header_gif sm:block mb:hidden">
              <img src="assets/images/home/robot 1 (Traced).svg" alt="">
            </div>

          </div>

          <div style="line-height: 30px;" class="text-xl pt-4 home_text  about_paragrph ">
            Prime IT club is a student-managed club at Prime led by creative and tech enthusiastic students. Established in 2004, the club organizes different workshops, seminars, training programs, etc.the club organizes different workshops <br>
            <button class="bg-blue-800 text-white py-2 px-6 rounded-3xl mt-8"><a class="text-lg" href="">Learn more</a></button>
          </div>

        </div>

        <div class="about_image mb:pt-16">
          <figure>
            <img src="assets/images/home/Hero Section Image.svg" alt="">
          </figure>
        </div>

      </div>

    </div>
  </div>
</section>
<!-- about ends -->

<!-- meet our team -->

<section class="py-24">
  <div class="container mx-auto">
    <div class="lg:mx-24 sm:mx-12">
      <div class="main_div">
        
        <center class="header">
        <h2 class="font-semibold primary sm:text-4xl mb:text-3xl">Meet Our Team</h2>
        <p class="home_text text-xl">Get to Know our team members</p>
        </center>        
        
      </div>
    </div>

    <div class="swiper mySwiper mt-16">
      <div class="lg:ml-48 swiper-wrapper">
        @foreach ($member as $members)    
        <div  class="rounded-3xl py-4 swiper-slide team_card">
         <div class="team_image py-8">
          <figure class="">
            <img  class="rounded-full" src="assets/images/ellipse3.jpg" alt="">                  
          </figure>
         </div>
         <div class="py-2 team_detail">
          <h3 class="home_text primary font-medium text-2xl">{{$members->name}}</h3>
          <p class="poppins">{{$members->designation}}</p>
          <p class="py-6 poppins font-medium">{!!$members->testimonial!!}</p>
         </div>
         <div class="team_socials">
          <div class="w-[40%] mx-auto flex justify-around">
            <a href="#"><i class="ri-facebook-circle-fill ri-2x"></i></a>
            <a href="#"><i class="ri-instagram-line ri-2x"></i></a>
            <a href="#"><i class="ri-linkedin-box-fill ri-2x"></i></i></a>
        </div>
         </div>               
        </div>
        @endforeach

        <div  class="rounded-3xl py-4 swiper-slide team_card">
          <div class="team_image py-8">
           <figure class="">
             <img  class="rounded-full" src="assets/images/ellipse3.jpg" alt="">                  
           </figure>
          </div>
          <div class="py-2 team_detail">
           <h3 class="home_text primary font-medium text-2xl">Bessie Cooper</h3>
           <p class="poppins">Executive Member</p>
           <p class="py-6 poppins font-medium">Hi! I am an executive member</p>
          </div>
          <div class="team_socials">
           <div class="w-[40%] mx-auto flex justify-around">
             <a href="#"><i class="ri-facebook-circle-fill ri-2x"></i></a>
             <a href="#"><i class="ri-instagram-line ri-2x"></i></a>
             <a href="#"><i class="ri-linkedin-box-fill ri-2x"></i></i></a>
         </div>
          </div>               
         </div>
        
         <div  class="rounded-3xl py-4 swiper-slide team_card">
          <div class="team_image py-8">
           <figure class="">
             <img  class="rounded-full" src="assets/images/ellipse3.jpg" alt="">                  
           </figure>
          </div>
          <div class="py-2 team_detail">
           <h3 class="home_text primary font-medium text-2xl">Bessie Cooper</h3>
           <p class="poppins">Executive Member</p>
           <p class="py-6 poppins font-medium">Hi! I am an executive member</p>
          </div>
          <div class="team_socials">
           <div class="w-[40%] mx-auto flex justify-around">
             <a href="#"><i class="ri-facebook-circle-fill ri-2x"></i></a>
             <a href="#"><i class="ri-instagram-line ri-2x"></i></a>
             <a href="#"><i class="ri-linkedin-box-fill ri-2x"></i></i></a>
         </div>
          </div>               
         </div>

         <div  class="rounded-3xl py-4 swiper-slide team_card">
          <div class="team_image py-8">
           <figure class="">
             <img  class="rounded-full" src="assets/images/ellipse3.jpg" alt="">                  
           </figure>
          </div>
          <div class="py-2 team_detail">
           <h3 class="home_text primary font-medium text-2xl">Bessie Cooper</h3>
           <p class="poppins">Executive Member</p>
           <p class="py-6 poppins font-medium">Hi! I am an executive member</p>
          </div>
          <div class="team_socials">
           <div class="w-[40%] mx-auto flex justify-around">
             <a href="#"><i class="ri-facebook-circle-fill ri-2x"></i></a>
             <a href="#"><i class="ri-instagram-line ri-2x"></i></a>
             <a href="#"><i class="ri-linkedin-box-fill ri-2x"></i></i></a>
         </div>
          </div>               
         </div>

         <div  class="rounded-3xl py-4 swiper-slide team_card">
          <div class="team_image py-8">
           <figure class="">
             <img  class="rounded-full" src="assets/images/ellipse3.jpg" alt="">                  
           </figure>
          </div>
          <div class="py-2 team_detail">
           <h3 class="home_text primary font-medium text-2xl">Bessie Cooper</h3>
           <p class="poppins">Executive Member</p>
           <p class="py-6 poppins font-medium">Hi! I am an executive member</p>
          </div>
          <div class="team_socials">
           <div class="w-[40%] mx-auto flex justify-around">
             <a href="#"><i class="ri-facebook-circle-fill ri-2x"></i></a>
             <a href="#"><i class="ri-instagram-line ri-2x"></i></a>
             <a href="#"><i class="ri-linkedin-box-fill ri-2x"></i></i></a>
         </div>
          </div>               
         </div>
       
      </div>           
    </div>

    <div class="swiper-pagination"></div>

  </div>
</section>

<!-- meet our team ends -->


<!-- flowbite java script -->
<script src="/assets/js/app.js"></script>
<script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>

var swiper = new Swiper(".mySwiper", {
        slidesPerView: 4,
        spaceBetween: 30,
        centeredSlides: false,
        grabCursor: true,
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },

        breakpoints: {
          320: {
            slidesPerView: 1,
            spaceBetween: 30,
          },
          640: {
            slidesPerView: 2,
            spaceBetween: 30,
          },
          768: {
            slidesPerView: 3,
            spaceBetween: 30,
          },
          1024: {
            slidesPerView: 4,
            spaceBetween: 30,
          },
        },
        
      });

</script>
</body>
</html>
</x-frontend.layout>