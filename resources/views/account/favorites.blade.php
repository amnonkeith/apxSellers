<x-client-layout title="My Favorites - AutoPartsX">
  <!-- Hero Section -->
  <div class="bg-slate-50 border-b border-slate-200 py-12">
    <div class="px-4 sm:px-6 lg:px-12">
      <h1 class="text-4xl font-bold mb-4 text-slate-900">My Favorites</h1>
      <p class="text-xl text-slate-600">Your saved favorite products</p>
    </div>
  </div>

  <!-- Favorites Content -->
  <div class="px-4 sm:px-6 lg:px-12 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Account Sidebar -->
      <div class="lg:col-span-1">
        <x-account-sidebar active="favorites" />
      </div>

      <!-- Favorites Main Content -->
      <div class="lg:col-span-3">
        <!-- Header -->
        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
          <div class="flex items-center justify-between">
            <div>
              <h2 class="text-2xl font-bold text-slate-900">Saved Items</h2>
              <p class="text-sm text-slate-600 mt-1">8 items in your favorites</p>
            </div>
            <div class="flex items-center space-x-2">
              <span class="text-sm text-slate-600">Sort by:</span>
              <select class="px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                <option>Recently Added</option>
                <option>Price: Low to High</option>
                <option>Price: High to Low</option>
                <option>Name: A to Z</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Favorites Grid -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
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

          <x-product-card 
            :id="1"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="OEM Brake Pads - Honda Civic 2018"
            :price="89.99"
            :stock="15"
            condition="New"
            category="Brakes"
            :isFavorite="true"
            :rating="4.5"
            :reviews="128"
            companyName="Bosch"
            companyLogo="https://logos-world.net/wp-content/uploads/2020/04/Bosch-Logo.png"
          />

          <x-product-card 
            :id="6"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Car Battery - Universal 12V"
            :price="95.00"
            :stock="12"
            condition="New"
            category="Electrical"
            :isFavorite="true"
            :rating="4.7"
            :reviews="156"
            companyName="ACDelco"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/03/ACDelco-Logo.png"
          />

          <x-product-card 
            :id="8"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Spark Plugs Set - 4 Pack"
            :price="35.99"
            :stock="20"
            condition="New"
            category="Engine"
            :isFavorite="true"
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
            :stock="10"
            condition="New"
            category="Brakes"
            :isFavorite="true"
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
            :isFavorite="true"
            :rating="4.5"
            :reviews="78"
            companyName="Castrol"
            companyLogo="https://logos-world.net/wp-content/uploads/2020/11/Castrol-Logo.png"
          />

          <x-product-card 
            :id="4"
            image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
            title="Oil Filter - Universal Fit"
            :price="12.99"
            :stock="45"
            condition="New"
            category="Engine"
            :isFavorite="true"
            :rating="4.6"
            :reviews="234"
            companyName="Fram"
            companyLogo="https://logos-world.net/wp-content/uploads/2021/02/FRAM-Logo.png"
          />
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
          <div class="flex items-center space-x-2">
            <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">
              <i class="fas fa-chevron-left"></i>
            </button>
            <button class="px-4 py-2 bg-linear-to-r from-blue-500 to-blue-600 text-white rounded-lg">1</button>
            <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">2</button>
            <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-client-layout>

