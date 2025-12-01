<x-client-layout title="Products - AutoPartsX">
  <!-- Hero Section -->
  <div class="bg-gradient-to-r from-emerald-600 to-blue-600 text-white py-16">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
      <h1 class="text-4xl font-bold mb-4">Shop Auto Parts</h1>
      <p class="text-xl text-emerald-100">Find the perfect parts for your vehicle</p>
    </div>
  </div>

  <!-- Filters and Search -->
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <div class="bg-white rounded-xl shadow-sm border border-slate-200 p-6 mb-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-4">
        <div>
          <label class="block text-sm font-semibold text-slate-700 mb-2">Category</label>
          <select class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
            <option>All Categories</option>
            <option>Brakes</option>
            <option>Engine</option>
            <option>Electrical</option>
            <option>Suspension</option>
            <option>Wheels & Tires</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-semibold text-slate-700 mb-2">Condition</label>
          <select class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
            <option>All Conditions</option>
            <option>New</option>
            <option>Used</option>
            <option>Refurbished</option>
          </select>
        </div>
        <div>
          <label class="block text-sm font-semibold text-slate-700 mb-2">Price Range</label>
          <select class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
            <option>All Prices</option>
            <option>Under $50</option>
            <option>$50 - $100</option>
            <option>$100 - $200</option>
            <option>$200+</option>
          </select>
        </div>
        <div class="flex items-end">
          <button class="w-full bg-emerald-600 text-white px-6 py-2 rounded-lg hover:bg-emerald-700 transition-colors font-semibold">
            <i class="fas fa-filter mr-2"></i>Apply Filters
          </button>
        </div>
      </div>
    </div>

    <!-- Products Grid -->
    <div class="mb-6 flex items-center justify-between">
      <h2 class="text-2xl font-bold text-slate-900">All Products</h2>
      <div class="flex items-center space-x-2">
        <span class="text-sm text-slate-600">Sort by:</span>
        <select class="px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
          <option>Price: Low to High</option>
          <option>Price: High to Low</option>
          <option>Newest First</option>
          <option>Most Popular</option>
        </select>
      </div>
    </div>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
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
</x-client-layout>

