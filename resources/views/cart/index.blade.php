<x-client-layout title="Shopping Cart - AutoPartsX">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="text-3xl font-bold text-slate-900 mb-6">Shopping Cart</h1>

    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Filters and Search Sidebar (Left) -->
      <div class="lg:col-span-1">
        <div class="bg-white rounded-xl border border-slate-200 p-6 sticky top-24 space-y-6">
          <!-- Search -->
          <div>
            <label class="block text-sm font-semibold text-slate-700 mb-2">
              <i class="fas fa-search mr-2 text-blue-600"></i>Search Cart
            </label>
            <input type="text" placeholder="Search items..." 
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
                <span class="text-sm text-slate-700">Electrical</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">Engine</span>
              </label>
              <label class="flex items-center cursor-pointer hover:text-blue-600">
                <input type="checkbox" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <span class="text-sm text-slate-700">Suspension</span>
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

      <!-- Cart Items -->
      <div class="lg:col-span-2 space-y-4">
        <!-- Cart Item -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <div class="flex items-start space-x-4">
            <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=150&h=150&fit=crop" 
                 alt="Product" 
                 class="w-24 h-24 object-cover rounded-lg">
            <div class="flex-1">
              <div class="flex items-start justify-between">
                <div>
                  <h3 class="font-semibold text-slate-900 mb-1">OEM Brake Pads - Honda Civic 2018</h3>
                  <p class="text-sm text-slate-500 mb-2">Part Number: BP-HC-2018-OEM</p>
                  <span class="text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-1 rounded">Brakes</span>
                </div>
                <button class="text-red-500 hover:text-red-700">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
              <div class="flex items-center justify-between mt-4">
                <div class="flex items-center border border-slate-300 rounded-lg">
                  <button class="px-3 py-1 text-slate-600 hover:bg-slate-50">
                    <i class="fas fa-minus text-xs"></i>
                  </button>
                  <input type="number" value="2" min="1" class="w-16 px-3 py-1 text-center border-0 focus:ring-0">
                  <button class="px-3 py-1 text-slate-600 hover:bg-slate-50">
                    <i class="fas fa-plus text-xs"></i>
                  </button>
                </div>
                <div class="text-right">
                  <p class="text-2xl font-bold text-emerald-600">$179.98</p>
                  <p class="text-sm text-slate-500">$89.99 each</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Cart Item 2 -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <div class="flex items-start space-x-4">
            <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=150&h=150&fit=crop" 
                 alt="Product" 
                 class="w-24 h-24 object-cover rounded-lg">
            <div class="flex-1">
              <div class="flex items-start justify-between">
                <div>
                  <h3 class="font-semibold text-slate-900 mb-1">LED Headlights - Toyota Camry 2020</h3>
                  <p class="text-sm text-slate-500 mb-2">Part Number: LED-TC-2020</p>
                  <span class="text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-1 rounded">Electrical</span>
                </div>
                <button class="text-red-500 hover:text-red-700">
                  <i class="fas fa-trash"></i>
                </button>
              </div>
              <div class="flex items-center justify-between mt-4">
                <div class="flex items-center border border-slate-300 rounded-lg">
                  <button class="px-3 py-1 text-slate-600 hover:bg-slate-50">
                    <i class="fas fa-minus text-xs"></i>
                  </button>
                  <input type="number" value="1" min="1" class="w-16 px-3 py-1 text-center border-0 focus:ring-0">
                  <button class="px-3 py-1 text-slate-600 hover:bg-slate-50">
                    <i class="fas fa-plus text-xs"></i>
                  </button>
                </div>
                <div class="text-right">
                  <p class="text-2xl font-bold text-emerald-600">$245.00</p>
                  <p class="text-sm text-slate-500">$245.00 each</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Continue Shopping -->
        <div class="flex items-center justify-between">
          <a href="/products" class="text-emerald-600 hover:text-emerald-700 font-semibold">
            <i class="fas fa-arrow-left mr-2"></i>Continue Shopping
          </a>
        </div>
      </div>

      <!-- Order Summary -->
      <div class="lg:col-span-1">
        <div class="bg-white rounded-xl border border-slate-200 p-6 w-92 sticky top-24">
          <h2 class="text-xl font-bold text-slate-900 mb-6">Order Summary</h2>
          
          <div class="space-y-4 mb-6">
            <div class="flex justify-between text-slate-700">
              <span>Subtotal</span>
              <span>$424.98</span>
            </div>
            <div class="flex justify-between text-slate-700">
              <span>Shipping</span>
              <span class="text-emerald-600">Free</span>
            </div>
            <div class="flex justify-between text-slate-700">
              <span>Tax</span>
              <span>$34.00</span>
            </div>
            <hr class="border-slate-200">
            <div class="flex justify-between text-xl font-bold text-slate-900">
              <span>Total</span>
              <span class="text-emerald-600">$458.98</span>
            </div>
          </div>

          <a href="/checkout" class="block w-full bg-gradient-to-r from-emerald-500 to-emerald-600 text-white px-6 py-4 rounded-lg font-semibold hover:from-emerald-600 hover:to-emerald-700 transition-all transform hover:scale-105 shadow-lg hover:shadow-xl text-center mb-4">
            <i class="fas fa-lock mr-2"></i>Proceed to Checkout
          </a>

          <div class="text-center text-sm text-slate-500">
            <i class="fas fa-shield-alt mr-1"></i>Secure checkout
          </div>

          <!-- Promo Code -->
          <div class="mt-6 pt-6 border-t border-slate-200">
            <label class="block text-sm font-semibold text-slate-700 mb-2">Promo Code</label>
            <div class="flex space-x-2">
              <input type="text" placeholder="Enter code" 
                     class="flex-1 px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
              <button class="px-4 py-2 bg-slate-200 text-slate-700 rounded-lg hover:bg-slate-300 transition-colors font-semibold">
                Apply
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-client-layout>

