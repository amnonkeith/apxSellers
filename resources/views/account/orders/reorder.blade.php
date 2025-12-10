<x-client-layout title="Reorder - AutoPartsX">
  <!-- Hero Section -->
  <div class="bg-slate-50 border-b border-slate-200 py-12">
    <div class="px-4 sm:px-6 lg:px-12">
      <div class="flex items-center space-x-4 mb-4">
        <a href="/orders" class="text-blue-600 hover:text-blue-700">
          <i class="fas fa-arrow-left text-xl"></i>
        </a>
        <h1 class="text-4xl font-bold text-slate-900">Reorder Items</h1>
      </div>
      <p class="text-xl text-slate-600">Review and reorder items from Order #12345</p>
    </div>
  </div>

  <!-- Reorder Content -->
  <div class="px-4 sm:px-6 lg:px-12 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Account Sidebar -->
      <div class="lg:col-span-1">
        <x-account-sidebar active="orders" />
      </div>

      <!-- Reorder Main Content -->
      <div class="lg:col-span-3 space-y-6">
        <!-- Original Order Info -->
        <div class="bg-blue-50 border border-blue-200 rounded-xl p-6">
          <div class="flex items-center space-x-3 mb-2">
            <i class="fas fa-info-circle text-blue-600"></i>
            <h2 class="text-lg font-bold text-blue-900">Original Order Information</h2>
          </div>
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-sm">
            <div>
              <p class="text-blue-700 font-semibold">Order Date</p>
              <p class="text-blue-900">December 5, 2024</p>
            </div>
            <div>
              <p class="text-blue-700 font-semibold">Original Total</p>
              <p class="text-blue-900">$458.98</p>
            </div>
            <div>
              <p class="text-blue-700 font-semibold">Items</p>
              <p class="text-blue-900">3 items</p>
            </div>
          </div>
        </div>

        <!-- Reorder Items -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <div class="flex items-center justify-between mb-6">
            <h2 class="text-2xl font-bold text-slate-900">Items to Reorder</h2>
            <button class="text-sm text-blue-600 hover:text-blue-700 font-semibold">
              <i class="fas fa-check-double mr-1"></i>Select All
            </button>
          </div>

          <div class="space-y-4">
            <!-- Item 1 -->
            <div class="flex items-center space-x-4 p-4 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors">
              <input type="checkbox" checked class="w-5 h-5 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
              <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=150&h=150&fit=crop" 
                   alt="Product" 
                   class="w-20 h-20 object-cover rounded-lg">
              <div class="flex-1">
                <h3 class="font-semibold text-slate-900 mb-1">OEM Brake Pads - Honda Civic 2018</h3>
                <p class="text-sm text-slate-600 mb-2">SKU: BP-HC-2018-001</p>
                <div class="flex items-center space-x-4 text-sm">
                  <span class="text-slate-600">Original Price: <span class="line-through text-slate-400">$89.99</span></span>
                  <span class="text-emerald-600 font-semibold">Current Price: $89.99</span>
                </div>
                <div class="mt-2 flex items-center space-x-2">
                  <span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full font-semibold">In Stock</span>
                </div>
              </div>
              <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                  <label class="text-sm text-slate-600">Qty:</label>
                  <div class="flex items-center border border-slate-300 rounded-lg">
                    <button class="px-3 py-1 text-slate-600 hover:bg-slate-100 transition-colors">
                      <i class="fas fa-minus text-xs"></i>
                    </button>
                    <input type="number" value="2" min="1" max="15" class="w-12 text-center border-0 focus:ring-0 text-sm font-semibold">
                    <button class="px-3 py-1 text-slate-600 hover:bg-slate-100 transition-colors">
                      <i class="fas fa-plus text-xs"></i>
                    </button>
                  </div>
                </div>
                <div class="text-right min-w-[100px]">
                  <p class="font-bold text-slate-900 text-lg">$179.98</p>
                  <button class="text-sm text-red-600 hover:text-red-700 mt-1">
                    <i class="fas fa-trash mr-1"></i>Remove
                  </button>
                </div>
              </div>
            </div>

            <!-- Item 2 -->
            <div class="flex items-center space-x-4 p-4 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors">
              <input type="checkbox" checked class="w-5 h-5 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
              <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=150&h=150&fit=crop" 
                   alt="Product" 
                   class="w-20 h-20 object-cover rounded-lg">
              <div class="flex-1">
                <h3 class="font-semibold text-slate-900 mb-1">LED Headlights - Toyota Camry 2020</h3>
                <p class="text-sm text-slate-600 mb-2">SKU: LED-TC-2020-001</p>
                <div class="flex items-center space-x-4 text-sm">
                  <span class="text-slate-600">Original Price: <span class="line-through text-slate-400">$245.00</span></span>
                  <span class="text-emerald-600 font-semibold">Current Price: $239.99</span>
                </div>
                <div class="mt-2 flex items-center space-x-2">
                  <span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full font-semibold">In Stock</span>
                  <span class="text-xs text-emerald-600">Save $5.01!</span>
                </div>
              </div>
              <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                  <label class="text-sm text-slate-600">Qty:</label>
                  <div class="flex items-center border border-slate-300 rounded-lg">
                    <button class="px-3 py-1 text-slate-600 hover:bg-slate-100 transition-colors">
                      <i class="fas fa-minus text-xs"></i>
                    </button>
                    <input type="number" value="1" min="1" max="2" class="w-12 text-center border-0 focus:ring-0 text-sm font-semibold">
                    <button class="px-3 py-1 text-slate-600 hover:bg-slate-100 transition-colors">
                      <i class="fas fa-plus text-xs"></i>
                    </button>
                  </div>
                </div>
                <div class="text-right min-w-[100px]">
                  <p class="font-bold text-slate-900 text-lg">$239.99</p>
                  <button class="text-sm text-red-600 hover:text-red-700 mt-1">
                    <i class="fas fa-trash mr-1"></i>Remove
                  </button>
                </div>
              </div>
            </div>

            <!-- Item 3 -->
            <div class="flex items-center space-x-4 p-4 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors">
              <input type="checkbox" checked class="w-5 h-5 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
              <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=150&h=150&fit=crop" 
                   alt="Product" 
                   class="w-20 h-20 object-cover rounded-lg">
              <div class="flex-1">
                <h3 class="font-semibold text-slate-900 mb-1">Brake Fluid - DOT 4 Premium</h3>
                <p class="text-sm text-slate-600 mb-2">SKU: BF-DOT4-001</p>
                <div class="flex items-center space-x-4 text-sm">
                  <span class="text-slate-600">Original Price: <span class="line-through text-slate-400">$18.99</span></span>
                  <span class="text-emerald-600 font-semibold">Current Price: $18.99</span>
                </div>
                <div class="mt-2 flex items-center space-x-2">
                  <span class="text-xs px-2 py-1 bg-emerald-100 text-emerald-700 rounded-full font-semibold">In Stock</span>
                </div>
              </div>
              <div class="flex items-center space-x-4">
                <div class="flex items-center space-x-2">
                  <label class="text-sm text-slate-600">Qty:</label>
                  <div class="flex items-center border border-slate-300 rounded-lg">
                    <button class="px-3 py-1 text-slate-600 hover:bg-slate-100 transition-colors">
                      <i class="fas fa-minus text-xs"></i>
                    </button>
                    <input type="number" value="1" min="1" max="25" class="w-12 text-center border-0 focus:ring-0 text-sm font-semibold">
                    <button class="px-3 py-1 text-slate-600 hover:bg-slate-100 transition-colors">
                      <i class="fas fa-plus text-xs"></i>
                    </button>
                  </div>
                </div>
                <div class="text-right min-w-[100px]">
                  <p class="font-bold text-slate-900 text-lg">$18.99</p>
                  <button class="text-sm text-red-600 hover:text-red-700 mt-1">
                    <i class="fas fa-trash mr-1"></i>Remove
                  </button>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Unavailable Items (if any) -->
        <div class="bg-yellow-50 border border-yellow-200 rounded-xl p-6 hidden">
          <div class="flex items-center space-x-3 mb-4">
            <i class="fas fa-exclamation-triangle text-yellow-600"></i>
            <h2 class="text-lg font-bold text-yellow-900">Unavailable Items</h2>
          </div>
          <p class="text-sm text-yellow-800 mb-4">Some items from your original order are no longer available:</p>
          <div class="space-y-2">
            <div class="flex items-center justify-between p-3 bg-white rounded-lg border border-yellow-200">
              <div>
                <p class="font-semibold text-slate-900">Product Name</p>
                <p class="text-sm text-slate-600">Currently out of stock</p>
              </div>
              <button class="text-sm text-blue-600 hover:text-blue-700 font-semibold">
                Notify Me
              </button>
            </div>
          </div>
        </div>

        <!-- Order Summary -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <h2 class="text-xl font-bold text-slate-900 mb-4">Order Summary</h2>
          <div class="space-y-3">
            <div class="flex items-center justify-between">
              <span class="text-slate-600">Subtotal (3 items)</span>
              <span class="font-semibold text-slate-900">$438.96</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-600">Shipping</span>
              <span class="font-semibold text-slate-900">$9.99</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-600">Tax</span>
              <span class="font-semibold text-slate-900">$4.49</span>
            </div>
            <div class="flex items-center justify-between text-sm">
              <span class="text-slate-600">Savings vs. Original Order</span>
              <span class="font-semibold text-emerald-600">-$5.01</span>
            </div>
            <hr class="border-slate-200">
            <div class="flex items-center justify-between">
              <span class="text-lg font-bold text-slate-900">Total</span>
              <span class="text-lg font-bold text-slate-900">$453.44</span>
            </div>
          </div>
        </div>

        <!-- Actions -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <div class="flex flex-col sm:flex-row items-stretch sm:items-center justify-between gap-4">
            <div>
              <h3 class="font-semibold text-slate-900 mb-1">Ready to reorder?</h3>
              <p class="text-sm text-slate-600">Add these items to your cart or proceed directly to checkout</p>
            </div>
            <div class="flex items-center space-x-3">
              <a href="/cart" class="px-6 py-3 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors font-semibold text-center">
                <i class="fas fa-shopping-cart mr-2"></i>Add to Cart
              </a>
              <a href="/checkout" class="px-6 py-3 bg-linear-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all font-semibold text-center">
                <i class="fas fa-credit-card mr-2"></i>Checkout Now
              </a>
            </div>
          </div>
        </div>

        <!-- Quick Actions -->
        <div class="bg-slate-50 rounded-xl border border-slate-200 p-6">
          <h3 class="font-semibold text-slate-900 mb-4">Quick Actions</h3>
          <div class="flex flex-wrap gap-3">
            <a href="/orders/12345" class="px-4 py-2 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors text-sm font-semibold">
              <i class="fas fa-file-alt mr-2"></i>View Original Order
            </a>
            <a href="/orders" class="px-4 py-2 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors text-sm font-semibold">
              <i class="fas fa-list mr-2"></i>Back to Orders
            </a>
            <a href="/products" class="px-4 py-2 bg-white border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors text-sm font-semibold">
              <i class="fas fa-shopping-bag mr-2"></i>Continue Shopping
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-client-layout>

