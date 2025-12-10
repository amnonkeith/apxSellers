<x-client-layout title="My Orders - AutoPartsX">
  <!-- Hero Section -->
  <div class="bg-slate-50 border-b border-slate-200 py-12">
    <div class="px-4 sm:px-6 lg:px-12">
      <h1 class="text-4xl font-bold mb-4 text-slate-900">My Orders</h1>
      <p class="text-xl text-slate-600">Track and manage your orders</p>
    </div>
  </div>

  <!-- Orders Content -->
  <div class="px-4 sm:px-6 lg:px-12 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Account Sidebar -->
      <div class="lg:col-span-1">
        <x-account-sidebar active="orders" />
      </div>

      <!-- Orders Main Content -->
      <div class="lg:col-span-3">
        <!-- Filter Tabs -->
        <x-orders-filter-tabs active="all" />

        <!-- Orders List -->
        <div class="space-y-4">
          <!-- Order 1 -->
          <div class="bg-white rounded-xl border border-slate-200 p-6">
            <div class="flex items-start justify-between mb-4">
              <div>
                <div class="flex items-center space-x-3 mb-2">
                  <p class="font-bold text-slate-900">Order #12345</p>
                  <span class="px-3 py-1 bg-emerald-100 text-emerald-700 text-xs font-semibold rounded-full">Delivered</span>
                </div>
                <p class="text-sm text-slate-600">Placed on December 5, 2024</p>
              </div>
              <div class="text-right">
                <p class="font-bold text-slate-900 text-lg">$458.98</p>
                <p class="text-sm text-slate-600">3 items</p>
              </div>
            </div>
            
            <div class="border-t border-slate-200 pt-4 space-y-3">
              <div class="flex items-center space-x-4">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" 
                     alt="Product" 
                     class="w-20 h-20 object-cover rounded-lg">
                <div class="flex-1">
                  <p class="font-semibold text-slate-900">OEM Brake Pads - Honda Civic 2018</p>
                  <p class="text-sm text-slate-600">Quantity: 2</p>
                  <p class="text-sm font-semibold text-slate-900">$179.98</p>
                </div>
              </div>
              <div class="flex items-center space-x-4">
                <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=100&h=100&fit=crop" 
                     alt="Product" 
                     class="w-20 h-20 object-cover rounded-lg">
                <div class="flex-1">
                  <p class="font-semibold text-slate-900">LED Headlights - Toyota Camry 2020</p>
                  <p class="text-sm text-slate-600">Quantity: 1</p>
                  <p class="text-sm font-semibold text-slate-900">$245.00</p>
                </div>
              </div>
            </div>

            <div class="mt-4 flex items-center justify-between border-t border-slate-200 pt-4">
              <div>
                <p class="text-sm text-slate-600 mb-1">Delivered on December 8, 2024</p>
                <a href="/orders/12345/track" class="text-sm text-blue-600 hover:text-blue-700 font-semibold">
                  Track Package
                </a>
              </div>
              <div class="flex items-center space-x-3">
                <a href="/orders/12345" class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors text-sm font-semibold">
                  View Details
                </a>
                <a href="/orders/12345/reorder" class="px-4 py-2 bg-linear-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all text-sm font-semibold">
                  Reorder
                </a>
              </div>
            </div>
          </div>

          <!-- Order 2 -->
          <div class="bg-white rounded-xl border border-slate-200 p-6">
            <div class="flex items-start justify-between mb-4">
              <div>
                <div class="flex items-center space-x-3 mb-2">
                  <p class="font-bold text-slate-900">Order #12344</p>
                  <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-semibold rounded-full">Shipped</span>
                </div>
                <p class="text-sm text-slate-600">Placed on December 1, 2024</p>
              </div>
              <div class="text-right">
                <p class="font-bold text-slate-900 text-lg">$245.00</p>
                <p class="text-sm text-slate-600">1 item</p>
              </div>
            </div>
            
            <div class="border-t border-slate-200 pt-4">
              <div class="flex items-center space-x-4">
                <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=100&h=100&fit=crop" 
                     alt="Product" 
                     class="w-20 h-20 object-cover rounded-lg">
                <div class="flex-1">
                  <p class="font-semibold text-slate-900">LED Headlights - Toyota Camry 2020</p>
                  <p class="text-sm text-slate-600">Quantity: 1</p>
                  <p class="text-sm font-semibold text-slate-900">$245.00</p>
                </div>
              </div>
            </div>

            <div class="mt-4 flex items-center justify-between border-t border-slate-200 pt-4">
              <div>
                <p class="text-sm text-slate-600 mb-1">Shipped on December 3, 2024</p>
                <p class="text-sm text-blue-600 font-semibold">Tracking: 1Z999AA10123456784</p>
              </div>
              <div class="flex items-center space-x-3">
                <a href="/orders/12344" class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors text-sm font-semibold">
                  View Details
                </a>
                <a href="/orders/12344/track" class="px-4 py-2 bg-linear-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all text-sm font-semibold">
                  Track Package
                </a>
              </div>
            </div>
          </div>

          <!-- Order 3 -->
          <div class="bg-white rounded-xl border border-slate-200 p-6">
            <div class="flex items-start justify-between mb-4">
              <div>
                <div class="flex items-center space-x-3 mb-2">
                  <p class="font-bold text-slate-900">Order #12343</p>
                  <span class="px-3 py-1 bg-orange-100 text-orange-700 text-xs font-semibold rounded-full">Pending</span>
                </div>
                <p class="text-sm text-slate-600">Placed on December 10, 2024</p>
              </div>
              <div class="text-right">
                <p class="font-bold text-slate-900 text-lg">$125.00</p>
                <p class="text-sm text-slate-600">1 item</p>
              </div>
            </div>
            
            <div class="border-t border-slate-200 pt-4">
              <div class="flex items-center space-x-4">
                <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=100&h=100&fit=crop" 
                     alt="Product" 
                     class="w-20 h-20 object-cover rounded-lg">
                <div class="flex-1">
                  <p class="font-semibold text-slate-900">Brake Rotors - Premium Grade</p>
                  <p class="text-sm text-slate-600">Quantity: 1</p>
                  <p class="text-sm font-semibold text-slate-900">$125.00</p>
                </div>
              </div>
            </div>

            <div class="mt-4 flex items-center justify-between border-t border-slate-200 pt-4">
              <div>
                <p class="text-sm text-slate-600 mb-1">Order is being processed</p>
              </div>
              <div class="flex items-center space-x-3">
                <a href="/orders/12343" class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors text-sm font-semibold">
                  View Details
                </a>
                <button class="px-4 py-2 border border-red-300 text-red-600 rounded-lg hover:bg-red-50 transition-colors text-sm font-semibold">
                  Cancel Order
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
          <div class="flex items-center space-x-2">
            <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">
              <i class="fas fa-chevron-left"></i>
            </button>
            <button class="px-4 py-2 bg-linear-to-r from-blue-500 to-blue-600 text-white rounded-lg">1</button>
            <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">2</button>
            <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">3</button>
            <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-client-layout>

