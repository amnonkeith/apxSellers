<x-client-layout title="Products - AutoPartsX">
  <!-- Hero Section -->
  <div class="bg-linear-to-r from-blue-100 via-blue-50 to-emerald-50 border-b border-blue-200/70 h-[35vh] py-12 flex flex-col justify-center relative shadow-lg">
    <div class="px-4 sm:px-6 lg:px-14 relative z-10">
      <h1 class="text-4xl md:text-5xl font-extrabold mb-4 text-blue-900 drop-shadow-sm tracking-tight">
        <i class="fas fa-layer-group text-blue-400 mr-3 animate-pulse"></i>
        All Products
      </h1>
      <p class="text-xl md:text-2xl text-blue-700/80 font-medium/90">
        <span>Browse our complete catalog of auto parts</span>
      </p>
    </div>
    <div class="absolute right-0 inset-y-0 w-80 md:w-92 h-52 md:h-56  pointer-events-none select-none z-0 object-cover">
      <img src="{{ asset('assets/products.png') }}" alt="All products assortment" class="w-full h-full object-cover scale-110 drop-shadow-xl">
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
          <h2 class="text-2xl font-bold text-slate-900">All Products</h2>
          <div class="flex items-center space-x-2">
            <span class="text-sm text-slate-600">Sort by:</span>
            <select class="px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
              <option>Price: Low to High</option>
              <option>Price: High to Low</option>
              <option>Newest First</option>
              <option>Most Popular</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
      <!-- Product Cards -->
      <x-product-card 
        :id="1"
        image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
        title="OEM Brake Pads - Honda Civic 2018"
        :price="89.99"
        :stock="15"
        condition="New"
        category="Brakes"
        :isFavorite="false"
      />

      <x-product-card 
        :id="2"
        image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
        title="LED Headlights - Toyota Camry 2020"
        :price="245.00"
        :stock="2"
        condition="Used"
        category="Electrical"
        :isFavorite="true"
      />

      <x-product-card 
        :id="3"
        image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
        title="Alloy Wheels - Ford Mustang 2019"
        :price="450.00"
        :stock="0"
        condition="Refurbished"
        category="Wheels & Tires"
        :isFavorite="false"
      />

      <x-product-card 
        :id="4"
        image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
        title="Oil Filter - Honda Civic 2018-2022"
        :price="12.99"
        :stock="45"
        condition="New"
        category="Engine"
        :isFavorite="false"
      />

      <x-product-card 
        :id="5"
        image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
        title="Shock Absorbers - Toyota Camry 2019"
        :price="180.00"
        :stock="8"
        condition="Used - Good"
        category="Suspension"
        :isFavorite="true"
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
      />

      <x-product-card 
        :id="7"
        image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
        title="Air Filter - Universal Fit"
        :price="24.99"
        :stock="30"
        condition="New"
        category="Engine"
        :isFavorite="false"
      />

      <x-product-card 
        :id="8"
        image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
        title="Spark Plugs Set - 4 Pack"
        :price="35.99"
        :stock="20"
        condition="New"
        category="Engine"
        :isFavorite="false"
      />
        </div>

        <!-- Pagination -->
    <div class="mt-12 flex justify-center">
      <div class="flex items-center space-x-2">
        <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">
          <i class="fas fa-chevron-left"></i>
        </button>
        <button class="px-4 py-2 bg-emerald-600 text-white rounded-lg">1</button>
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
</x-client-layout>

