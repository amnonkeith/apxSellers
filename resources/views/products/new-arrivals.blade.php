<x-client-layout title="New Arrivals - AutoPartsX">
  <!-- Hero Section -->
  <div class="bg-linear-to-r from-blue-100 via-blue-200 to-cyan-100 border-b h-[35vh] flex flex-col justify-center border-blue-200 py-14 relative shadow-sm">
    <div class="px-4 sm:px-6 lg:px-14 relative z-10">
      <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-blue-900 drop-shadow-sm tracking-tight flex items-center">
        <i class="fas fa-badge text-cyan-400 mr-3 animate-bounce"></i>
        New Arrivals in Auto Parts
      </h1>
      <p class="text-xl md:text-2xl text-blue-700 font-medium">Discover the latest additions to our catalog</p>
    </div>
    <div class="absolute right-0 top-2 w-72  md:w-96 h-40 md:h-52 opacity-90 pointer-events-none select-none z-0">
      <img src="{{ asset('assets/arrival.png') }}" alt="New arrivals banner" class="w-full h-full object-contain scale-110 drop-shadow-xl">
    </div>
  </div>

  <!-- Filters and Search -->
  <div class="px-4 sm:px-6 lg:px-12 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Filters and Search Sidebar (Left) -->
      <div class="lg:col-span-1">
        <div class="bg-white rounded-xl border border-slate-200 p-6 sticky top-24 space-y-6">
          <!-- Search -->
          <div>
            <label class="block text-sm font-semibold text-slate-700 mb-2">
              <i class="fas fa-search mr-2 text-blue-600"></i>Search Products
            </label>
            <input type="text" placeholder="Search products..." 
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

          <!-- Clear Filters -->
          <button class="w-full bg-linear-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all font-semibold text-sm">
            <i class="fas fa-redo mr-2"></i>Clear Filters
          </button>
        </div>
      </div>

      <!-- Products Grid (Right) -->
      <div class="lg:col-span-3">
        <!-- Products Header -->
        <div class="mb-6 flex items-center justify-between">
          <h2 class="text-2xl font-bold text-slate-900">New Arrivals</h2>
          <div class="flex items-center space-x-2">
            <span class="text-sm text-slate-600">Sort by:</span>
            <select class="px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
              <option>Newest First</option>
              <option>Price: Low to High</option>
              <option>Price: High to Low</option>
              <option>Highest Rated</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
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

          <x-product-card 
            :id="14"
            image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
            title="Transmission Fluid - Premium"
            :price="32.99"
            :stock="18"
            condition="New"
            category="Engine"
            :isFavorite="false"
            :rating="4.5"
            :reviews="89"
            companyName="Valvoline"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/08/Valvoline-Logo.png"
          />

          <x-product-card 
            :id="15"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Radiator Cap - Universal"
            :price="8.99"
            :stock="40"
            condition="New"
            category="Engine"
            :isFavorite="false"
            :rating="4.3"
            :reviews="67"
            companyName="Stant"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/08/Stant-Logo.png"
          />

          <x-product-card 
            :id="16"
            image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
            title="Fuel Filter - Premium"
            :price="19.99"
            :stock="22"
            condition="New"
            category="Engine"
            :isFavorite="false"
            :rating="4.4"
            :reviews="101"
            companyName="Wix"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/08/Wix-Logo.png"
          />

          <x-product-card 
            :id="17"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Timing Belt - Premium"
            :price="65.99"
            :stock="14"
            condition="New"
            category="Engine"
            :isFavorite="false"
            :rating="4.6"
            :reviews="134"
            companyName="Gates"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/08/Gates-Logo.png"
          />
        </div>

        <!-- Pagination -->
        <div class="mt-12 flex justify-center">
          <div class="flex items-center space-x-2">
            <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">
              <i class="fas fa-chevron-left"></i>
            </button>
            <button class="px-4 py-2 bg-linear-to-r from-blue-500 to-blue-600 text-white rounded-lg">1</button>
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

