<x-client-layout title="Limited Deals - AutoPartsX">
  <!-- Hero Section -->
  <div class="bg-gradient-to-r from-rose-600 via-rose-500 to-amber-400 text-white py-16 relative">
    <div class="px-4 sm:px-6 lg:px-12">
      <div class="mb-5 flex gap-4 items-center">
        <span class="inline-block text-xs font-semibold bg-yellow-400 text-rose-700 px-4 py-1 rounded-full shadow-lg tracking-wide uppercase letter-spacing-[.08em]">
          <i class="fas fa-bolt mr-1 text-rose-700 animate-pulse"></i> Flash Deal
        </span>
        <div class="flex justify-center items-stretch gap-6">
          <div class="flex items-center bg-yellow-200/20 shadow-lg rounded-xl px-6 py-3 font-mono text-xl font-semibold tracking-wide space-x-3 backdrop-blur-sm border border-yellow-200/30">
            <i class="fas fa-bolt text-amber-400 animate-pulse"></i>
            <span class="text-yellow-50"><span class="tabular-nums">03</span><span class="mx-0.5 font-normal">:</span><span class="tabular-nums">59</span><span class="mx-0.5 font-normal">:</span><span class="tabular-nums">12</span></span>
            <span class="ml-2 inline-block bg-rose-500 text-white text-xs px-2 py-0.5 rounded-full font-bold tracking-wide">LEFT</span>
          </div>
        </div>
      </div>
      <div class="flex justify-between items-center mt-8 relative">
        <div>
          <h1 class="text-5xl md:text-6xl font-extrabold mb-3 drop-shadow-lg text-white">Limited Time Auto Parts Sale</h1>
          <p class="text-lg md:text-xl text-rose-50 font-medium mb-8 ">Save big on select auto parts. <span class="font-semibold underline decoration-yellow-300 underline-offset-4">Hurry</span>—these deals won't last!</p>
        </div>
      </div>
      <div class="max-w-xl absolute right-0 top-5 hidden md:block">
        <img src="{{ asset('assets/car-accessories-with-copy-space.png') }}" alt="Car accessories with copy space" class="w-full h-72">
      </div>
    </div>
  </div>

  <!-- Limited Deals Content -->
  <div class="px-4 sm:px-6 lg:px-12 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Filters and Search Sidebar (Left) -->
      <div class="lg:col-span-1">
        <div class="bg-white rounded-xl border border-slate-200 p-6 sticky top-24 space-y-6">
          <!-- Search -->
          <div>
            <label class="block text-sm font-semibold text-slate-700 mb-2">
              <i class="fas fa-search mr-2 text-blue-600"></i>Search Deals
            </label>
            <input type="text" placeholder="Search deals..." 
                   class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
          </div>

          <!-- Filter by Category -->
          <div>
            <h3 class="text-sm font-semibold text-slate-900 mb-3 flex items-center">
              <i class="fas fa-filter mr-2 text-blue-600"></i>Category
            </h3>
            <div class="space-y-2">
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">All Categories</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">Brakes</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">Engine</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">Electrical</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">Suspension</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">Wheels & Tires</span>
              </label>
            </div>
          </div>

          <!-- Filter by Condition -->
          <div>
            <h3 class="text-sm font-semibold text-slate-900 mb-3 flex items-center">
              <i class="fas fa-tag mr-2 text-blue-600"></i>Condition
            </h3>
            <div class="space-y-2">
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">All Conditions</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">New</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">Used</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">Refurbished</span>
              </label>
            </div>
          </div>

          <!-- Filter by Price -->
          <div>
            <h3 class="text-sm font-semibold text-slate-900 mb-3 flex items-center">
              <i class="fas fa-dollar-sign mr-2 text-blue-600"></i>Price Range
            </h3>
            <div class="space-y-2">
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">All Prices</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">Under $50</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">$50 - $100</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">$100 - $200</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">$200+</span>
              </label>
            </div>
          </div>

          <!-- Filter by Discount -->
          <div>
            <h3 class="text-sm font-semibold text-slate-900 mb-3 flex items-center">
              <i class="fas fa-percent mr-2 text-blue-600"></i>Discount
            </h3>
            <div class="space-y-2">
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">All Discounts</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">10% - 20%</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">20% - 30%</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">30%+</span>
              </label>
            </div>
          </div>

          <!-- Clear Filters -->
          <button class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all font-semibold text-sm">
            <i class="fas fa-redo mr-2"></i>Clear Filters
          </button>
        </div>
      </div>

      <!-- Deals Grid (Right) -->
      <div class="lg:col-span-3">
        <!-- Deal of the Day Section -->
        <div class="bg-white rounded-xl border-2 border-orange-400 shadow-lg mb-6 p-6">
          <div class="flex items-center justify-between mb-4">
            <div class="flex items-center space-x-2">
              <h2 class="text-2xl font-bold text-slate-900">Deal of the Day</h2>
              <span class="px-3 py-1 bg-orange-500 text-white text-xs font-bold rounded">Limited Time</span>
            </div>
            <div class="text-sm text-slate-600">
              <span class="font-semibold text-orange-600">Ends in:</span>
              <span class="ml-2 font-mono font-bold text-orange-600">03:59:12</span>
            </div>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <div class="relative">
              <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=400&fit=crop" 
                   alt="Deal of the Day" 
                   class="w-full h-64 object-cover rounded-lg">
              <span class="absolute top-4 left-4 bg-red-600 text-white px-3 py-1 rounded-full text-sm font-bold">
                -25% OFF
              </span>
            </div>
            <div class="flex flex-col justify-between">
              <div>
                <h3 class="text-xl font-bold text-slate-900 mb-2">OEM Brake Pads - Honda Civic 2018</h3>
                <div class="flex items-center space-x-2 mb-3">
                  <span class="text-2xl font-bold text-emerald-600">$89.99</span>
                  <span class="text-lg text-slate-500 line-through">$119.99</span>
                  <span class="text-sm font-semibold text-red-600">Save $30.00</span>
                </div>
                <div class="flex items-center space-x-1 mb-4">
                  <div class="flex text-yellow-400">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                  </div>
                  <span class="text-sm text-slate-600">(128)</span>
                </div>
                <p class="text-sm text-slate-600 mb-4">Premium quality brake pads with excellent stopping power. Perfect fit for Honda Civic 2018 models.</p>
                <div class="mb-4">
                  <div class="flex justify-between text-xs text-slate-600 mb-1">
                    <span>Claimed: 45%</span>
                    <span>Limited stock</span>
                  </div>
                  <div class="w-full bg-slate-200 rounded-full h-2">
                    <div class="bg-orange-500 h-2 rounded-full" style="width: 45%"></div>
                  </div>
                </div>
              </div>
              <button class="w-full bg-gradient-to-r from-orange-500 to-orange-600 hover:from-orange-600 hover:to-orange-700 text-white px-6 py-3 rounded-lg font-semibold transition-all shadow-lg hover:shadow-xl">
                <i class="fas fa-shopping-cart mr-2"></i>Claim Deal
              </button>
            </div>
          </div>
        </div>

        <!-- Lightning Deals Section -->
        <div class="bg-white rounded-xl border border-slate-200 shadow-sm mb-6 p-6">
          <div class="mb-4">
            <div class="flex items-center space-x-2">
              <i class="fas fa-bolt text-yellow-500 text-xl"></i>
              <h2 class="text-2xl font-bold text-slate-900">Lightning Deals</h2>
            </div>
           
          </div>
          <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-4">
            <!-- Lightning Deal 1 -->
            <div class="border border-slate-200 rounded-lg p-4 hover:shadow-md transition-shadow">
              <div class="relative mb-3">
                <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=300&h=200&fit=crop" 
                     alt="Lightning Deal" 
                     class="w-full h-40 object-cover rounded">
                <span class="absolute top-2 left-2 bg-red-600 text-white px-2 py-1 rounded text-xs font-bold">
                  -18%
                </span>
                <div class="absolute bottom-2 right-2 bg-black/70 text-white px-2 py-1 rounded text-xs font-mono">
                  02:15:30
                </div>
              </div>
              <h4 class="font-semibold text-slate-900 mb-2 text-sm line-clamp-2">LED Headlights - Toyota Camry</h4>
              <div class="flex items-center space-x-2 mb-2">
                <span class="text-lg font-bold text-emerald-600">$245.00</span>
                <span class="text-sm text-slate-500 line-through">$299.99</span>
              </div>
              <div class="w-full bg-slate-200 rounded-full h-1.5 mb-2">
                <div class="bg-orange-500 h-1.5 rounded-full" style="width: 67%"></div>
              </div>
              <button class="w-full bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded text-sm font-semibold transition-colors">
                Claim Deal
              </button>
            </div>
            <!-- Lightning Deal 2 -->
            <div class="border border-slate-200 rounded-lg p-4 hover:shadow-md transition-shadow">
              <div class="relative mb-3">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=300&h=200&fit=crop" 
                     alt="Lightning Deal" 
                     class="w-full h-40 object-cover rounded">
                <span class="absolute top-2 left-2 bg-red-600 text-white px-2 py-1 rounded text-xs font-bold">
                  -24%
                </span>
                <div class="absolute bottom-2 right-2 bg-black/70 text-white px-2 py-1 rounded text-xs font-mono">
                  01:45:22
                </div>
              </div>
              <h4 class="font-semibold text-slate-900 mb-2 text-sm line-clamp-2">Oil Filter - Universal Fit</h4>
              <div class="flex items-center space-x-2 mb-2">
                <span class="text-lg font-bold text-emerald-600">$12.99</span>
                <span class="text-sm text-slate-500 line-through">$16.99</span>
              </div>
              <div class="w-full bg-slate-200 rounded-full h-1.5 mb-2">
                <div class="bg-orange-500 h-1.5 rounded-full" style="width: 82%"></div>
              </div>
              <button class="w-full bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded text-sm font-semibold transition-colors">
                Claim Deal
              </button>
            </div>
            <!-- Lightning Deal 3 -->
            <div class="border border-slate-200 rounded-lg p-4 hover:shadow-md transition-shadow">
              <div class="relative mb-3">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=300&h=200&fit=crop" 
                     alt="Lightning Deal" 
                     class="w-full h-40 object-cover rounded">
                <span class="absolute top-2 left-2 bg-red-600 text-white px-2 py-1 rounded text-xs font-bold">
                  -24%
                </span>
                <div class="absolute bottom-2 right-2 bg-black/70 text-white px-2 py-1 rounded text-xs font-mono">
                  04:30:15
                </div>
              </div>
              <h4 class="font-semibold text-slate-900 mb-2 text-sm line-clamp-2">Car Battery - Universal 12V</h4>
              <div class="flex items-center space-x-2 mb-2">
                <span class="text-lg font-bold text-emerald-600">$95.00</span>
                <span class="text-sm text-slate-500 line-through">$125.00</span>
              </div>
              <div class="w-full bg-slate-200 rounded-full h-1.5 mb-2">
                <div class="bg-orange-500 h-1.5 rounded-full" style="width: 35%"></div>
              </div>
              <button class="w-full bg-orange-500 hover:bg-orange-600 text-white px-4 py-2 rounded text-sm font-semibold transition-colors">
                Claim Deal
              </button>
            </div>
          </div>
        </div>

        <!-- All Deals Section -->
        <div class="mb-6 flex items-center justify-between">
          <h2 class="text-2xl font-bold text-slate-900">All Deals</h2>
          <div class="flex items-center space-x-2">
            <span class="text-sm text-slate-600">Sort by:</span>
            <select class="px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
              <option>Best Deals</option>
              <option>Price: Low to High</option>
              <option>Price: High to Low</option>
              <option>Discount: Highest</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Product Cards with Deals -->
      <x-product-card 
        :id="1"
        image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
        title="OEM Brake Pads - Honda Civic 2018"
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
        title="LED Headlights - Toyota Camry 2020"
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
        title="Oil Filter - Universal Fit"
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
        title="Car Battery - Universal 12V"
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

      <x-product-card 
        :id="9"
        image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
        title="Brake Rotors - Premium Grade"
        :price="125.00"
        :originalPrice="165.00"
        :discount="24"
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
        :originalPrice="24.99"
        :discount="24"
        :stock="25"
        condition="New"
        category="Brakes"
        :isFavorite="false"
        :rating="4.5"
        :reviews="78"
        companyName="Castrol"
        companyLogo="https://logos-world.net/wp-content/uploads/2020/11/Castrol-Logo.png"
      />
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
      <div class="flex items-center space-x-2">
        <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button class="px-4 py-2 bg-gradient-to-r from-blue-500 to-blue-600 text-white rounded-lg">1</button>
        <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">2</button>
        <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">3</button>
        <span class="px-4 py-2 text-slate-500">...</span>
        <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">10</button>
        <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">
          <i class="fas fa-chevron-right"></i>
        </button>
      </div>
        </div>
      </div>
    </div>
  </div>
</x-client-layout>

