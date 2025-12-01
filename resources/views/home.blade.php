<x-client-layout title="AutoPartsX - Quality Auto Parts Online">
  <!-- Hero Section (Jumia Style) -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-4">
    <div class="grid grid-cols-4 gap-4">
      <!-- Category Sidebar (Left) -->
      <div class="lg:col-span-1 hidden lg:block">
        <div class="bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
          <div class="bg-blue-600 px-4 py-3">
            <h3 class="text-white font-semibold text-sm flex items-center">
              <i class="fas fa-bars mr-2"></i>Categories
            </h3>
          </div>
          <div class="divide-y divide-slate-100">
            <a href="/products?category=brakes" class="flex items-center justify-between px-4 py-3 hover:bg-slate-50 transition-colors group">
              <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-red-100 rounded flex items-center justify-center">
                  <i class="fas fa-car-crash text-red-600 text-sm"></i>
                </div>
                <span class="text-sm text-slate-700 group-hover:text-emerald-600 font-medium">Brakes</span>
              </div>
              <i class="fas fa-chevron-right text-xs text-slate-400 group-hover:text-emerald-600"></i>
            </a>
            <a href="/products?category=engine" class="flex items-center justify-between px-4 py-3 hover:bg-slate-50 transition-colors group">
              <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-orange-100 rounded flex items-center justify-center">
                  <i class="fas fa-cog text-orange-600 text-sm"></i>
                </div>
                <span class="text-sm text-slate-700 group-hover:text-emerald-600 font-medium">Engine</span>
              </div>
              <i class="fas fa-chevron-right text-xs text-slate-400 group-hover:text-emerald-600"></i>
            </a>
            <a href="/products?category=electrical" class="flex items-center justify-between px-4 py-3 hover:bg-slate-50 transition-colors group">
              <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-yellow-100 rounded flex items-center justify-center">
                  <i class="fas fa-bolt text-yellow-600 text-sm"></i>
                </div>
                <span class="text-sm text-slate-700 group-hover:text-emerald-600 font-medium">Electrical</span>
              </div>
              <i class="fas fa-chevron-right text-xs text-slate-400 group-hover:text-emerald-600"></i>
            </a>
            <a href="/products?category=suspension" class="flex items-center justify-between px-4 py-3 hover:bg-slate-50 transition-colors group">
              <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-blue-100 rounded flex items-center justify-center">
                  <i class="fas fa-compress-arrows-alt text-blue-600 text-sm"></i>
                </div>
                <span class="text-sm text-slate-700 group-hover:text-emerald-600 font-medium">Suspension</span>
              </div>
              <i class="fas fa-chevron-right text-xs text-slate-400 group-hover:text-emerald-600"></i>
            </a>
            <a href="/products?category=wheels" class="flex items-center justify-between px-4 py-3 hover:bg-slate-50 transition-colors group">
              <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-slate-100 rounded flex items-center justify-center">
                  <i class="fas fa-circle-notch text-slate-600 text-sm"></i>
                </div>
                <span class="text-sm text-slate-700 group-hover:text-emerald-600 font-medium">Wheels</span>
              </div>
              <i class="fas fa-chevron-right text-xs text-slate-400 group-hover:text-emerald-600"></i>
            </a>
            <a href="/products?category=exhaust" class="flex items-center justify-between px-4 py-3 hover:bg-slate-50 transition-colors group">
              <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-gray-100 rounded flex items-center justify-center">
                  <i class="fas fa-smoking text-gray-600 text-sm"></i>
                </div>
                <span class="text-sm text-slate-700 group-hover:text-emerald-600 font-medium">Exhaust</span>
              </div>
              <i class="fas fa-chevron-right text-xs text-slate-400 group-hover:text-emerald-600"></i>
            </a>
            <a href="/products?category=body" class="flex items-center justify-between px-4 py-3 hover:bg-slate-50 transition-colors group">
              <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-indigo-100 rounded flex items-center justify-center">
                  <i class="fas fa-car-side text-indigo-600 text-sm"></i>
                </div>
                <span class="text-sm text-slate-700 group-hover:text-emerald-600 font-medium">Body Parts</span>
              </div>
              <i class="fas fa-chevron-right text-xs text-slate-400 group-hover:text-emerald-600"></i>
            </a>
            <a href="/products" class="flex items-center justify-between px-4 py-3 hover:bg-slate-50 transition-colors group">
              <div class="flex items-center space-x-3">
                <div class="w-8 h-8 bg-emerald-100 rounded flex items-center justify-center">
                  <i class="fas fa-th-large text-emerald-600 text-sm"></i>
                </div>
                <span class="text-sm text-slate-700 group-hover:text-emerald-600 font-medium">View All</span>
              </div>
              <i class="fas fa-chevron-right text-xs text-slate-400 group-hover:text-emerald-600"></i>
            </a>
          </div>
        </div>
      </div>

      <!-- Main Banner Carousel (Right) -->
      <div class="col-span-3">
        <div class="grid grid-cols-3 gap-4">
          <!-- Main Carousel Banner -->
          <div class="col-span-3 relative bg-white rounded-lg shadow-sm border border-slate-200 overflow-hidden">
            <div class="relative h-[400px] bg-gradient-to-r from-emerald-600 via-blue-600 to-indigo-600">
              <div class="absolute inset-0 flex items-center justify-center text-white p-8">
                <div class="text-center">
                  <h1 class="text-4xl md:text-5xl font-bold mb-4">Premium Auto Parts</h1>
                  <p class="text-xl mb-6 text-white/90">Quality parts for every vehicle. Fast shipping, expert support.</p>
                  <a href="/products" class="inline-block bg-white text-emerald-600 hover:bg-emerald-50 px-8 py-3 rounded-lg font-semibold transition-colors shadow-lg">
                    Shop Now
                  </a>
                </div>
              </div>
              <!-- Carousel Navigation -->
              <button class="absolute left-4 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 backdrop-blur-sm text-white p-2 rounded-full transition-colors">
                <i class="fas fa-chevron-left"></i>
              </button>
              <button class="absolute right-4 top-1/2 transform -translate-y-1/2 bg-white/20 hover:bg-white/30 backdrop-blur-sm text-white p-2 rounded-full transition-colors">
                <i class="fas fa-chevron-right"></i>
              </button>
              <!-- Carousel Indicators -->
              <div class="absolute bottom-4 left-1/2 transform -translate-x-1/2 flex space-x-2">
                <button class="w-2 h-2 bg-white rounded-full"></button>
                <button class="w-2 h-2 bg-white/50 rounded-full"></button>
                <button class="w-2 h-2 bg-white/50 rounded-full"></button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Today's Deals Section (Amazon Style) -->
  <div class="bg-white border-b border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-6">
      <div class="flex items-center justify-between mb-4">
        <div class="flex items-center space-x-3">
          <h2 class="text-2xl font-bold text-slate-900">Today's Deals</h2>
          <span class="px-3 py-1 bg-red-600 text-white text-xs font-bold rounded">Limited Time</span>
        </div>
        <a href="/products?deals=1" class="text-emerald-600 hover:text-emerald-700 text-sm font-semibold">
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-2xl font-bold text-slate-900">Best Sellers in Auto Parts</h2>
        <a href="/products?sort=bestsellers" class="text-emerald-600 hover:text-emerald-700 text-sm font-semibold">
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-2xl font-bold text-slate-900">New Arrivals in Auto Parts</h2>
        <a href="/products?sort=newest" class="text-emerald-600 hover:text-emerald-700 text-sm font-semibold">
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
      <div class="flex items-center justify-between mb-4">
        <h2 class="text-2xl font-bold text-slate-900">Customers who viewed this item also viewed</h2>
        <a href="/products" class="text-emerald-600 hover:text-emerald-700 text-sm font-semibold">
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
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
</x-client-layout>
