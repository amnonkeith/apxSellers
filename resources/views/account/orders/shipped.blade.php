<x-client-layout title="Shipped Orders - AutoPartsX">
  <!-- Hero Section -->
  <div class="bg-slate-50 border-b border-slate-200 py-12">
    <div class="px-4 sm:px-6 lg:px-12">
      <h1 class="text-4xl font-bold mb-4 text-slate-900">Shipped Orders</h1>
      <p class="text-xl text-slate-600">Orders currently in transit</p>
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
        <x-orders-filter-tabs active="shipped" />

        <!-- Orders List -->
        <div class="space-y-4">
          <!-- Order 1 -->
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
                <p class="text-sm text-slate-600 mt-1">Estimated delivery: December 8, 2024</p>
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

          <!-- Order 2 -->
          <div class="bg-white rounded-xl border border-slate-200 p-6">
            <div class="flex items-start justify-between mb-4">
              <div>
                <div class="flex items-center space-x-3 mb-2">
                  <p class="font-bold text-slate-900">Order #12340</p>
                  <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-semibold rounded-full">Shipped</span>
                </div>
                <p class="text-sm text-slate-600">Placed on November 28, 2024</p>
              </div>
              <div class="text-right">
                <p class="font-bold text-slate-900 text-lg">$180.00</p>
                <p class="text-sm text-slate-600">1 item</p>
              </div>
            </div>
            
            <div class="border-t border-slate-200 pt-4">
              <div class="flex items-center space-x-4">
                <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=100&h=100&fit=crop" 
                     alt="Product" 
                     class="w-20 h-20 object-cover rounded-lg">
                <div class="flex-1">
                  <p class="font-semibold text-slate-900">Shock Absorbers - Premium</p>
                  <p class="text-sm text-slate-600">Quantity: 1</p>
                  <p class="text-sm font-semibold text-slate-900">$180.00</p>
                </div>
              </div>
            </div>

            <div class="mt-4 flex items-center justify-between border-t border-slate-200 pt-4">
              <div>
                <p class="text-sm text-slate-600 mb-1">Shipped on November 30, 2024</p>
                <p class="text-sm text-blue-600 font-semibold">Tracking: 1Z999AA10123456785</p>
                <p class="text-sm text-slate-600 mt-1">Estimated delivery: December 5, 2024</p>
              </div>
              <div class="flex items-center space-x-3">
                <a href="/orders/12340" class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors text-sm font-semibold">
                  View Details
                </a>
                <a href="/orders/12340/track" class="px-4 py-2 bg-linear-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all text-sm font-semibold">
                  Track Package
                </a>
              </div>
            </div>
          </div>
        </div>

        <!-- Empty State (if no orders) -->
        <div class="bg-white rounded-xl border border-slate-200 p-12 text-center hidden">
          <i class="fas fa-shipping-fast text-6xl text-slate-300 mb-4"></i>
          <h3 class="text-xl font-bold text-slate-900 mb-2">No Shipped Orders</h3>
          <p class="text-slate-600 mb-6">You don't have any orders in transit at the moment.</p>
          <a href="/products" class="inline-block px-6 py-3 bg-linear-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all font-semibold">
            Start Shopping
          </a>
        </div>

        <!-- Pagination -->
        <div class="mt-8 flex justify-center">
          <div class="flex items-center space-x-2">
            <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">
              <i class="fas fa-chevron-left"></i>
            </button>
            <button class="px-4 py-2 bg-linear-to-r from-blue-500 to-blue-600 text-white rounded-lg">1</button>
            <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors">
              <i class="fas fa-chevron-right"></i>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-client-layout>

