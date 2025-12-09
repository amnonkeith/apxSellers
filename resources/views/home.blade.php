<x-client-layout title="AutoPartsX - Quality Auto Parts Online">
  <!-- Hero Section (Jumia Style) -->
   <div id="heroBackground" class="bg-no-repeat bg-cover bg-center h-[76vh] transition-all duration-1000 ease-in-out" style="background-image: url('{{ asset('assets/Screenshot 2025-12-09 133748.png') }}');">
     <div class=" px-4 sm:px-6 lg:px-10 py-8">
       <div class="grid grid-cols-4 gap-4">
         <!-- Category Sidebar (Left) -->
         <div class="lg:col-span-1 hidden lg:block relative z-10">
           <aside class="bg-white/50 backdrop-blur-xs rounded-2xl shadow-xl border border-slate-200 overflow-hidden h-[510px] flex flex-col">
             <header class="bg-blue-600/90 flex items-center gap-3 px-4 py-2.5 rounded-t-2xl shadow-md min-h-[50px]">
               <span class="inline-flex items-center justify-center w-8 h-8 bg-white/10 rounded-lg">
                 <i class="fas fa-bars text-white text-lg"></i>
               </span>
               <h2 class="text-white font-bold text-base tracking-wide uppercase">Categories</h2>
             </header>
             <ul class="divide-y divide-slate-100 overflow-y-auto flex-1 px-0 scrollbar-thin scrollbar-thumb-blue-100 scrollbar-track-white/70">
               <li>
                 <a href="/products?category=brakes" class="flex items-center gap-3 px-4 py-2.5 transition group hover:bg-blue-50/80 focus:outline-none focus:bg-blue-50 rounded-none">
                   <span class="flex items-center justify-center w-9 h-9 bg-blue-50/70 rounded-lg transition group-hover:scale-110 flex-shrink-0">
                     <i class="fas fa-car-crash text-blue-700 text-base"></i>
                   </span>
                   <span class="flex-1 text-slate-900 text-[1rem] font-semibold group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-blue-600 group-hover:bg-clip-text group-hover:text-transparent group-hover:text-slate-500">Brakes</span>
                   <i class="fas fa-chevron-right text-blue-600/40 group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-blue-600 group-hover:bg-clip-text group-hover:text-transparent group-hover:text-slate-500 text-base"></i>
                 </a>
               </li>
               <li>
                 <a href="/products?category=engine" class="flex items-center gap-3 px-4 py-2.5 transition group hover:bg-blue-50/80 focus:outline-none focus:bg-blue-50 rounded-none">
                   <span class="flex items-center justify-center w-9 h-9 bg-blue-50/70 rounded-lg transition group-hover:scale-110 flex-shrink-0">
                     <i class="fas fa-cog text-blue-700 text-base"></i>
                   </span>
                   <span class="flex-1 text-slate-900 text-[1rem] font-semibold group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-blue-600 group-hover:bg-clip-text group-hover:text-transparent group-hover:text-slate-500">Engine</span>
                   <i class="fas fa-chevron-right text-blue-600/40 group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-blue-600 group-hover:bg-clip-text group-hover:text-transparent group-hover:text-slate-500 text-base"></i>
                 </a>
               </li>
               <li>
                 <a href="/products?category=electrical" class="flex items-center gap-3 px-4 py-2.5 transition group hover:bg-blue-50/80 focus:outline-none focus:bg-blue-50 rounded-none">
                   <span class="flex items-center justify-center w-9 h-9 bg-blue-50/70 rounded-lg transition group-hover:scale-110 flex-shrink-0">
                     <i class="fas fa-bolt text-blue-700 text-base"></i>
                   </span>
                   <span class="flex-1 text-slate-900 text-[1rem] font-semibold group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-blue-600 group-hover:bg-clip-text group-hover:text-transparent group-hover:text-slate-500">Electrical</span>
                   <i class="fas fa-chevron-right text-blue-600/40 group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-blue-600 group-hover:bg-clip-text group-hover:text-transparent group-hover:text-slate-500 text-base"></i>
                 </a>
               </li>
               <li>
                 <a href="/products?category=suspension" class="flex items-center gap-3 px-4 py-2.5 transition group hover:bg-blue-50/80 focus:outline-none focus:bg-blue-50 rounded-none">
                   <span class="flex items-center justify-center w-9 h-9 bg-blue-50/70 rounded-lg transition group-hover:scale-110 flex-shrink-0">
                     <i class="fas fa-compress-arrows-alt text-blue-700 text-base"></i>
                   </span>
                   <span class="flex-1 text-slate-900 text-[1rem] font-semibold group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-blue-600 group-hover:bg-clip-text group-hover:text-transparent group-hover:text-slate-500">Suspension</span>
                   <i class="fas fa-chevron-right text-blue-600/40 group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-blue-600 group-hover:bg-clip-text group-hover:text-transparent group-hover:text-slate-500 text-base"></i>
                 </a>
               </li>
               <li>
                 <a href="/products?category=wheels" class="flex items-center gap-3 px-4 py-2.5 transition group hover:bg-blue-50/80 focus:outline-none focus:bg-blue-50 rounded-none">
                   <span class="flex items-center justify-center w-9 h-9 bg-blue-50/70 rounded-lg transition group-hover:scale-110 flex-shrink-0">
                     <i class="fas fa-circle-notch text-blue-700 text-base"></i>
                   </span>
                   <span class="flex-1 text-slate-900 text-[1rem] font-semibold group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-blue-600 group-hover:bg-clip-text group-hover:text-transparent group-hover:text-slate-500">Wheels</span>
                   <i class="fas fa-chevron-right text-blue-600/40 group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-blue-600 group-hover:bg-clip-text group-hover:text-transparent group-hover:text-slate-500 text-base"></i>
                 </a>
               </li>
               <li>
                 <a href="/products?category=exhaust" class="flex items-center gap-3 px-4 py-2.5 transition group hover:bg-blue-50/80 focus:outline-none focus:bg-blue-50 rounded-none">
                   <span class="flex items-center justify-center w-9 h-9 bg-blue-50/70 rounded-lg transition group-hover:scale-110 flex-shrink-0">
                     <i class="fas fa-smoking text-blue-700 text-base"></i>
                   </span>
                   <span class="flex-1 text-slate-900 text-[1rem] font-semibold group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-blue-600 group-hover:bg-clip-text group-hover:text-transparent group-hover:text-slate-500">Exhaust</span>
                   <i class="fas fa-chevron-right text-blue-600/40 group-hover:text-emerald-600 text-base"></i>
                 </a>
               </li>
               <li>
                 <a href="/products?category=body" class="flex items-center gap-3 px-4 py-2.5 transition group hover:bg-blue-50/80 focus:outline-none focus:bg-blue-50 rounded-none">
                   <span class="flex items-center justify-center w-9 h-9 bg-blue-50/70 rounded-lg transition group-hover:scale-110 flex-shrink-0">
                     <i class="fas fa-car-side text-blue-700 text-base"></i>
                   </span>
                   <span class="flex-1 text-slate-900 text-[1rem] font-semibold group-hover:bg-gradient-to-r group-hover:from-blue-400 group-hover:to-blue-600 group-hover:bg-clip-text group-hover:text-transparent group-hover:text-slate-500">Body Parts</span>
                   <i class="fas fa-chevron-right text-blue-600/40 group-hover:text-emerald-600 text-base"></i>
                 </a>
               </li>
               <li>
                 <a href="/products" class="flex items-center gap-3 px-4 py-2.5 transition group hover:bg-blue-50/80 focus:outline-none focus:bg-blue-50 rounded-b-2xl">
                   <span class="flex items-center justify-center w-9 h-9 bg-blue-50/70 rounded-lg transition group-hover:scale-110 flex-shrink-0">
                     <i class="fas fa-th-large text-blue-700 text-base"></i>
                   </span>
                   <span class="flex-1 text-slate-900 text-[1rem] font-semibold group-hover:bg-gradient-to-r group-hover:from-blue-500 group-hover:to-blue-700 group-hover:bg-clip-text group-hover:text-transparent">View All</span>
                   <i class="fas fa-chevron-right text-blue-600/40 group-hover:text-emerald-600 text-base"></i>
                 </a>
               </li>
             </ul>
           </aside>
         </div>
   
         <!-- Main Banner Carousel (Right) -->
         <div class="col-span-3">
           <div class="relative bg-white rounded-lg shadow-sm border overflow-hidden">
             <!-- Carousel Container -->
             <div id="bannerCarousel" class="relative h-[400px] overflow-hidden">
               <!-- Slide 1 -->
               <div class="carousel-slide absolute inset-0 transition-transform duration-1000 ease-in-out transform translate-x-0" data-slide="0" data-bg-image="{{ asset('assets/Screenshot 2025-12-09 133748.png') }}">
                 <div class="relative h-full bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('assets/Screenshot 2025-12-09 133748.png') }}');">
                   <!-- Dark Overlay for Better Text Readability -->
                   <div class="absolute inset-0 bg-black/30"></div>
                   
                   <!-- Content -->
                   <div class="relative z-10 h-full flex items-center justify-center text-white p-8">
                     <div class="text-center max-w-2xl">
                       <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 drop-shadow-lg">Premium Auto Parts</h1>
                       <p class="text-lg md:text-xl mb-6 text-white/95 drop-shadow-md">Quality parts for every vehicle. Fast shipping, expert support.</p>
                       <a href="/products" class="inline-block bg-white text-emerald-600 hover:bg-emerald-50 px-8 py-3 rounded-lg font-semibold transition-colors shadow-lg hover:shadow-xl transform hover:scale-105">
                         Shop Now
                       </a>
                     </div>
                   </div>
                 </div>
               </div>
               
               <!-- Slide 2 -->
               <div class="carousel-slide absolute inset-0 transition-transform duration-1000 ease-in-out transform translate-x-full" data-slide="1" data-bg-image="{{ asset('assets/Screenshot 2025-12-06 191255.png') }}">
                 <div class="relative h-full bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('assets/Screenshot 2025-12-06 191255.png') }}');">
                   <!-- Dark Overlay for Better Text Readability -->
                   <div class="absolute inset-0 bg-black/30"></div>
                   
                   <!-- Content -->
                   <div class="relative z-10 h-full flex items-center justify-center text-white p-8">
                     <div class="text-center max-w-2xl">
                       <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 drop-shadow-lg">High-Performance Aftermarket Parts</h1>
                       <p class="text-lg md:text-xl mb-6 text-white/95 drop-shadow-md">Boost power, improve reliability, and upgrade your ride—shop top-grade components now.</p>
                       <a href="/products" class="inline-block bg-white text-emerald-600 hover:bg-emerald-50 px-8 py-3 rounded-lg font-semibold transition-colors shadow-lg hover:shadow-xl transform hover:scale-105">
                         Shop Now
                       </a>
                     </div>
                   </div>
                 </div>
               </div>
               
               <!-- Slide 3 -->
               <div class="carousel-slide absolute inset-0 transition-transform duration-1000 ease-in-out transform translate-x-full" data-slide="2" data-bg-image="{{ asset('assets/Screenshot 2025-12-09 135403.png') }}">
                 <div class="relative h-full bg-cover bg-center bg-no-repeat" style="background-image: url('{{ asset('assets/Screenshot 2025-12-09 135403.png') }}');">
                   <!-- Dark Overlay for Better Text Readability -->
                   <div class="absolute inset-0 bg-black/30"></div>
                   
                   <!-- Content -->
                   <div class="relative z-10 h-full flex items-center justify-center text-white p-8">
                     <div class="text-center max-w-2xl">
                       <h1 class="text-4xl md:text-5xl lg:text-6xl font-bold mb-4 drop-shadow-lg">Parts in Every Condition You Need</h1>
                       <p class="text-lg md:text-xl mb-6 text-white/95 drop-shadow-md">Brand-new, used, or rebuilt—premium aftermarket options for every budget and every build.</p>
                       <a href="/products" class="inline-block bg-white text-emerald-600 hover:bg-emerald-50 px-8 py-3 rounded-lg font-semibold transition-colors shadow-lg hover:shadow-xl transform hover:scale-105">
                         Shop Now
                       </a>
                     </div>
                   </div>
                 </div>
               </div>
               
               <!-- Carousel Navigation -->
               <button id="prevBtn" class="absolute left-4 top-1/2 transform -translate-y-1/2 z-20 bg-white/20 hover:bg-white/30 backdrop-blur-sm text-white p-3 rounded-full transition-colors shadow-lg hover:shadow-xl">
                 <i class="fas fa-chevron-left"></i>
               </button>
               <button id="nextBtn" class="absolute right-4 top-1/2 transform -translate-y-1/2 z-20 bg-white/20 hover:bg-white/30 backdrop-blur-sm text-white p-3 rounded-full transition-colors shadow-lg hover:shadow-xl">
                 <i class="fas fa-chevron-right"></i>
               </button>
               
               <!-- Carousel Indicators -->
               <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 z-20 flex space-x-2">
                 <button class="carousel-indicator w-3 h-3 bg-white rounded-full shadow-lg transition-all hover:scale-110 active" data-index="0"></button>
                 <button class="carousel-indicator w-3 h-3 bg-white/50 rounded-full shadow-lg transition-all hover:scale-110" data-index="1"></button>
                 <button class="carousel-indicator w-3 h-3 bg-white/50 rounded-full shadow-lg transition-all hover:scale-110" data-index="2"></button>
               </div>
             </div>
           </div>
         </div>
      </div>
    </div>
  </div>

  <!-- Today's Deals Section (Amazon Style) -->
  <div class="bg-white border-b border-slate-200">
    <div class="px-4 sm:px-6 lg:px-14 py-6">
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center space-x-3">
          <h2 class="text-2xl font-bold text-slate-900">Today's Deals</h2>
          <span class="px-3 py-1 bg-red-600 text-white text-xs font-bold rounded">Limited Time</span>
        </div>
        <a href="/products?deals=1" class="bg-gradient-to-r from-blue-500 to-blue-700 bg-clip-text text-transparent hover:from-blue-600 hover:to-blue-800 text-sm font-semibold">
          See all deals <i class="fas fa-chevron-right ml-1 text-xs"></i>
        </a>
      </div>
      <!-- Horizontal Scrolling Product Row -->
      <div class="overflow-x-auto pb-4 -mx-4 px-4">
        <div class="flex space-x-4" style="min-width: max-content;">
          <x-product-card 
            :id="1"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="OEM Brake Pads - Honda Civic"
            :price="89.99"
            :originalPrice="119.99"
            :discount="25"
            :stock="15"
            condition="New"
            category="Brakes"
            :isFavorite="false"
            :rating="4.5"
            :reviews="128"
            companyName="Bosch"
            companyLogo="https://logos-world.net/wp-content/uploads/2020/04/Bosch-Logo.png"
          />
          <x-product-card 
            :id="2"
            image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
            title="LED Headlights - Toyota"
            :price="245.00"
            :originalPrice="299.99"
            :discount="18"
            :stock="2"
            condition="Used"
            category="Electrical"
            :isFavorite="true"
            :rating="4.8"
            :reviews="89"
            companyName="Philips"
            companyLogo="https://logos-world.net/wp-content/uploads/2020/03/Philips-Logo.png"
          />
          <x-product-card 
            :id="4"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Oil Filter - Universal"
            :price="12.99"
            :originalPrice="16.99"
            :discount="24"
            :stock="45"
            condition="New"
            category="Engine"
            :isFavorite="false"
            :rating="4.6"
            :reviews="234"
            companyName="Fram"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/02/FRAM-Logo.png"
          />
          <x-product-card 
            :id="6"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Car Battery - 12V"
            :price="95.00"
            :originalPrice="125.00"
            :discount="24"
            :stock="12"
            condition="New"
            category="Electrical"
            :isFavorite="false"
            :rating="4.7"
            :reviews="156"
            companyName="ACDelco"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/03/ACDelco-Logo.png"
          />
          <x-product-card 
            :id="7"
            image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
            title="Air Filter - Premium"
            :price="24.99"
            :originalPrice="34.99"
            :discount="29"
            :stock="30"
            condition="New"
            category="Engine"
            :isFavorite="false"
            :rating="4.4"
            :reviews="92"
            companyName="K&N"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/08/K-N-Logo.png"
          />
          <x-product-card 
            :id="8"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Spark Plugs Set - 4 Pack"
            :price="35.99"
            :originalPrice="49.99"
            :discount="28"
            :stock="20"
            condition="New"
            category="Engine"
            :isFavorite="false"
            :rating="4.5"
            :reviews="178"
            companyName="NGK"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/08/NGK-Logo.png"
          />
        </div>
      </div>
    </div>
  </div>

  <!-- Best Sellers in Auto Parts (Amazon Style) -->
  <div class="bg-white">
    <div class="px-4 sm:px-6 lg:px-14 py-8">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-2xl font-bold text-slate-900">Best Sellers in Auto Parts</h2>
        <a href="/products?sort=bestsellers" class="bg-gradient-to-r from-blue-500 to-blue-700 bg-clip-text text-transparent hover:from-blue-600 hover:to-blue-800 text-sm font-semibold">
          View more <i class="fas fa-chevron-right ml-1 text-xs"></i>
        </a>
      </div>
      <!-- Horizontal Scrolling Product Row -->
      <div class="overflow-x-auto pb-4 -mx-4 px-4">
        <div class="flex space-x-4" style="min-width: max-content;">
          <x-product-card 
            :id="1"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="OEM Brake Pads - Honda Civic 2018"
            :price="89.99"
            :stock="15"
            condition="New"
            category="Brakes"
            :isFavorite="false"
            :rating="4.5"
            :reviews="128"
            companyName="Bosch"
            companyLogo="https://logos-world.net/wp-content/uploads/2020/04/Bosch-Logo.png"
          />
          <x-product-card 
            :id="2"
            image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
            title="LED Headlights - Toyota Camry"
            :price="245.00"
            :stock="2"
            condition="Used"
            category="Electrical"
            :isFavorite="true"
            :rating="4.8"
            :reviews="89"
            companyName="Philips"
            companyLogo="https://logos-world.net/wp-content/uploads/2020/03/Philips-Logo.png"
          />
          <x-product-card 
            :id="4"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Oil Filter - Universal Fit"
            :price="12.99"
            :stock="45"
            condition="New"
            category="Engine"
            :isFavorite="false"
            :rating="4.6"
            :reviews="234"
            companyName="Fram"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/02/FRAM-Logo.png"
          />
          <x-product-card 
            :id="6"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Car Battery - Universal 12V"
            :price="95.00"
            :stock="12"
            condition="New"
            category="Electrical"
            :isFavorite="false"
            :rating="4.7"
            :reviews="156"
            companyName="ACDelco"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/03/ACDelco-Logo.png"
          />
          <x-product-card 
            :id="5"
            image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
            title="Shock Absorbers - Premium"
            :price="180.00"
            :stock="8"
            condition="Used"
            category="Suspension"
            :isFavorite="true"
            :rating="4.4"
            :reviews="67"
            companyName="Monroe"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/08/Monroe-Logo.png"
          />
        </div>
      </div>
    </div>
  </div>

 

  <!-- New Arrivals (Amazon Style) -->
  <div class="bg-white">
    <div class="px-4 sm:px-6 lg:px-14 py-8">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-2xl font-bold text-slate-900">New Arrivals in Auto Parts</h2>
        <a href="/products?sort=newest" class="bg-gradient-to-r from-blue-500 to-blue-700 bg-clip-text text-transparent hover:from-blue-600 hover:to-blue-800 text-sm font-semibold">
          View more <i class="fas fa-chevron-right ml-1 text-xs"></i>
        </a>
      </div>
      <!-- Horizontal Scrolling Product Row -->
      <div class="overflow-x-auto pb-4 -mx-4 px-4">
        <div class="flex space-x-4" style="min-width: max-content;">
          <x-product-card 
            :id="9"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Brake Rotors - Premium Grade"
            :price="125.00"
            :stock="10"
            condition="New"
            category="Brakes"
            :isFavorite="false"
            :rating="4.3"
            :reviews="45"
            companyName="Brembo"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/08/Brembo-Logo.png"
          />
          <x-product-card 
            :id="10"
            image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
            title="Brake Fluid - DOT 4 Premium"
            :price="18.99"
            :stock="25"
            condition="New"
            category="Brakes"
            :isFavorite="false"
            :rating="4.5"
            :reviews="78"
            companyName="Castrol"
            companyLogo="https://logos-world.net/wp-content/uploads/2020/11/Castrol-Logo.png"
          />
          <x-product-card 
            :id="11"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Brake Calipers - Front Set"
            :price="199.99"
            :stock="5"
            condition="Refurbished"
            category="Brakes"
            :isFavorite="false"
            :rating="4.2"
            :reviews="34"
            companyName="Power Stop"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/08/Power-Stop-Logo.png"
          />
          <x-product-card 
            :id="12"
            image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
            title="Brake Lines - Stainless Steel"
            :price="45.99"
            :stock="15"
            condition="New"
            category="Brakes"
            :isFavorite="false"
            :rating="4.6"
            :reviews="56"
            companyName="Goodridge"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/08/Goodridge-Logo.png"
          />
          <x-product-card 
            :id="13"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Wiper Blades Set - All Weather"
            :price="28.99"
            :stock="20"
            condition="New"
            category="Body"
            :isFavorite="false"
            :rating="4.4"
            :reviews="112"
            companyName="Bosch"
            companyLogo="https://logos-world.net/wp-content/uploads/2020/04/Bosch-Logo.png"
          />
        </div>
      </div>
    </div>
  </div>

  <!-- Customers who viewed this item also viewed (Amazon Style) -->
  <div class="bg-slate-50">
    <div class="px-4 sm:px-6 lg:px-14 py-8">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-2xl font-bold text-slate-900">Customers who viewed this item also viewed</h2>
        <a href="/products" class="bg-gradient-to-r from-blue-500 to-blue-700 bg-clip-text text-transparent hover:from-blue-600 hover:to-blue-800 text-sm font-semibold">
          View more <i class="fas fa-chevron-right ml-1 text-xs"></i>
        </a>
      </div>
      <!-- Horizontal Scrolling Product Row -->
      <div class="overflow-x-auto pb-4 -mx-4 px-4">
        <div class="flex space-x-4" style="min-width: max-content;">
          <x-product-card 
            :id="1"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="OEM Brake Pads"
            :price="89.99"
            :stock="15"
            condition="New"
            category="Brakes"
            :isFavorite="false"
            :rating="4.5"
            :reviews="128"
            companyName="Bosch"
            companyLogo="https://logos-world.net/wp-content/uploads/2020/04/Bosch-Logo.png"
          />
          <x-product-card 
            :id="4"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Oil Filter"
            :price="12.99"
            :stock="45"
            condition="New"
            category="Engine"
            :isFavorite="false"
            :rating="4.6"
            :reviews="234"
            companyName="Fram"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/02/FRAM-Logo.png"
          />
          <x-product-card 
            :id="6"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Car Battery"
            :price="95.00"
            :stock="12"
            condition="New"
            category="Electrical"
            :isFavorite="false"
            :rating="4.7"
            :reviews="156"
            companyName="ACDelco"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/03/ACDelco-Logo.png"
          />
          <x-product-card 
            :id="7"
            image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
            title="Air Filter"
            :price="24.99"
            :stock="30"
            condition="New"
            category="Engine"
            :isFavorite="false"
            :rating="4.4"
            :reviews="92"
            companyName="K&N"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/08/K-N-Logo.png"
          />
          <x-product-card 
            :id="8"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Spark Plugs"
            :price="35.99"
            :stock="20"
            condition="New"
            category="Engine"
            :isFavorite="false"
            :rating="4.5"
            :reviews="178"
            companyName="NGK"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/08/NGK-Logo.png"
          />
        </div>
      </div>
    </div>
  </div>

  <!-- Frequently Bought Together (Amazon Style) -->
  <div class="bg-white">
    <div class="px-4 sm:px-6 lg:px-14 py-8">
      <h2 class="text-2xl font-bold text-slate-900 mb-6">Frequently Bought Together</h2>
      <div class="bg-slate-50 rounded-lg p-6 border border-slate-200">
        <div class="flex flex-col md:flex-row items-center space-y-4 md:space-y-0 md:space-x-6">
          <div class="flex-1 grid grid-cols-1 md:grid-cols-3 gap-4">
            <x-product-card 
              :id="1"
              image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
              title="OEM Brake Pads"
              :price="89.99"
              :stock="15"
              condition="New"
              category="Brakes"
              :isFavorite="false"
              :rating="4.5"
              :reviews="128"
              companyName="Bosch"
              companyLogo="https://logos-world.net/wp-content/uploads/2020/04/Bosch-Logo.png"
            />
            <div class="flex items-center justify-center text-2xl text-slate-400">+</div>
            <x-product-card 
              :id="4"
              image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
              title="Oil Filter"
              :price="12.99"
              :stock="45"
              condition="New"
              category="Engine"
              :isFavorite="false"
              :rating="4.6"
              :reviews="234"
              companyName="Fram"
              companyLogo="https://logos-world.net/wp-content/uploads/2021/02/FRAM-Logo.png"
            />
          </div>
          <div class="flex flex-col items-center space-y-2">
            <div class="text-center">
              <p class="text-sm text-slate-600">Total price:</p>
              <p class="text-2xl font-bold text-emerald-600">$102.98</p>
            </div>
            <button class="w-full bg-emerald-600 hover:bg-emerald-700 text-white px-6 py-3 rounded-lg font-semibold transition-colors">
              Add both to Cart
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Service Features (Amazon Style) -->
  <div class="bg-slate-50 border-t border-slate-200">
    <div class="px-4 sm:px-6 lg:px-14 py-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-lg border border-slate-200">
          <div class="flex items-center space-x-3 mb-2">
            <i class="fas fa-shipping-fast text-emerald-600 text-xl"></i>
            <h3 class="font-semibold text-slate-900">Free Shipping</h3>
          </div>
          <p class="text-sm text-slate-600">On orders over $50</p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200">
          <div class="flex items-center space-x-3 mb-2">
            <i class="fas fa-shield-alt text-blue-600 text-xl"></i>
            <h3 class="font-semibold text-slate-900">Quality Guaranteed</h3>
          </div>
          <p class="text-sm text-slate-600">Manufacturer warranty included</p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200">
          <div class="flex items-center space-x-3 mb-2">
            <i class="fas fa-headset text-purple-600 text-xl"></i>
            <h3 class="font-semibold text-slate-900">Expert Support</h3>
          </div>
          <p class="text-sm text-slate-600">24/7 customer service</p>
        </div>
        <div class="bg-white p-6 rounded-lg border border-slate-200">
          <div class="flex items-center space-x-3 mb-2">
            <i class="fas fa-undo text-orange-600 text-xl"></i>
            <h3 class="font-semibold text-slate-900">Easy Returns</h3>
          </div>
          <p class="text-sm text-slate-600">30-day return policy</p>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      const slides = document.querySelectorAll('.carousel-slide');
      const indicators = document.querySelectorAll('.carousel-indicator');
      const prevBtn = document.getElementById('prevBtn');
      const nextBtn = document.getElementById('nextBtn');
      let currentSlide = 0;
      let autoSlideInterval;

      // Function to show a specific slide
      function showSlide(index, direction = 'next') {
        const prevIndex = currentSlide;
        
        // Update hero background image immediately based on direction
        const targetSlide = slides[index];
        const bgImage = targetSlide.getAttribute('data-bg-image');
        const heroBackground = document.getElementById('heroBackground');
        if (heroBackground && bgImage) {
          heroBackground.style.backgroundImage = `url('${bgImage}')`;
        }
        
        // Animate slides with right-to-left sliding effect (always same direction)
        slides.forEach((slide, i) => {
          // Remove all transform classes
          slide.classList.remove('translate-x-0', 'translate-x-full', '-translate-x-full');
          
          if (i === index) {
            // Incoming slide: always come from right, animate to center
            slide.classList.add('translate-x-full');
            void slide.offsetHeight; // Force reflow to ensure transition works
            slide.classList.remove('translate-x-full');
            slide.classList.add('translate-x-0');
          } else if (i === prevIndex) {
            // Outgoing slide: always go to the left
            slide.classList.add('-translate-x-full');
          } else {
            // Other slides: keep off-screen
            if (i < index) {
              slide.classList.add('-translate-x-full');
            } else {
              slide.classList.add('translate-x-full');
            }
          }
        });

        // Update indicators
        indicators.forEach((indicator, i) => {
          if (i === index) {
            indicator.classList.remove('bg-white/50');
            indicator.classList.add('bg-white', 'active');
          } else {
            indicator.classList.remove('bg-white', 'active');
            indicator.classList.add('bg-white/50');
          }
        });

        currentSlide = index;
      }

      // Function to go to next slide
      function nextSlide() {
        const next = (currentSlide + 1) % slides.length;
        showSlide(next, 'next');
      }

      // Function to go to previous slide
      function prevSlide() {
        const prev = (currentSlide - 1 + slides.length) % slides.length;
        showSlide(prev, 'prev');
      }

      // Auto-advance slides every 6 seconds
      function startAutoSlide() {
        autoSlideInterval = setInterval(nextSlide, 8000);
      }

      // Stop auto-advance (useful when user interacts)
      function stopAutoSlide() {
        clearInterval(autoSlideInterval);
      }

      // Event listeners
      nextBtn.addEventListener('click', () => {
        nextSlide();
        stopAutoSlide();
        startAutoSlide(); // Restart auto-slide after manual navigation
      });

      prevBtn.addEventListener('click', () => {
        prevSlide();
        stopAutoSlide();
        startAutoSlide(); // Restart auto-slide after manual navigation
      });

      // Indicator click handlers
      indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
          showSlide(index);
          stopAutoSlide();
          startAutoSlide(); // Restart auto-slide after manual navigation
        });
      });

      // Start auto-slide on page load
      startAutoSlide();

      // Pause auto-slide on hover (optional)
      const carousel = document.getElementById('bannerCarousel');
      carousel.addEventListener('mouseenter', stopAutoSlide);
      carousel.addEventListener('mouseleave', startAutoSlide);
    });
  </script>
</x-client-layout>
