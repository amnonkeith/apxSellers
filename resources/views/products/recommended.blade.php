<x-client-layout title="Recommended Products - AutoPartsX">
  <!-- Hero Section -->
  <div class="bg-slate-50 border-b border-slate-200 py-12">
    <div class="px-4 sm:px-6 lg:px-12">
      <h1 class="text-4xl font-bold mb-4 text-slate-900">Recommended for You</h1>
      <p class="text-xl text-slate-600">Products other customers viewed and purchased</p>
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
          <button class="w-full bg-gradient-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all font-semibold text-sm">
            <i class="fas fa-redo mr-2"></i>Clear Filters
          </button>
        </div>
      </div>

      <!-- Products Grid (Right) -->
      <div class="lg:col-span-3">
        <!-- Products Header -->
        <div class="mb-6 flex items-center justify-between">
          <h2 class="text-2xl font-bold text-slate-900">Recommended Products</h2>
          <div class="flex items-center space-x-2">
            <span class="text-sm text-slate-600">Sort by:</span>
            <select class="px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
              <option>Most Viewed</option>
              <option>Price: Low to High</option>
              <option>Price: High to Low</option>
              <option>Highest Rated</option>
            </select>
          </div>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
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

          <x-product-card 
            :id="2"
            image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
            title="LED Headlights"
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
            :id="5"
            image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
            title="Shock Absorbers"
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

          <x-product-card 
            :id="9"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Brake Rotors"
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
            title="Brake Fluid"
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

