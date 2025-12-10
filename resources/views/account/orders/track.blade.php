<x-client-layout title="Track Order - AutoPartsX">
  <!-- Hero Section -->
  <div class="bg-slate-50 border-b border-slate-200 py-12">
    <div class="px-4 sm:px-6 lg:px-12">
      <div class="flex items-center space-x-4 mb-4">
        <a href="/orders" class="text-blue-600 hover:text-blue-700">
          <i class="fas fa-arrow-left text-xl"></i>
        </a>
        <h1 class="text-4xl font-bold text-slate-900">Track Your Order</h1>
      </div>
      <p class="text-xl text-slate-600">Order #12345</p>
    </div>
  </div>

  <!-- Tracking Content -->
  <div class="px-4 sm:px-6 lg:px-12 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Account Sidebar -->
      <div class="lg:col-span-1">
        <x-account-sidebar active="orders" />
      </div>

      <!-- Tracking Main Content -->
      <div class="lg:col-span-3 space-y-6">
        <!-- Order Info Card -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <div class="flex items-center justify-between mb-6">
            <div>
              <h2 class="text-2xl font-bold text-slate-900 mb-2">Order #12345</h2>
              <p class="text-sm text-slate-600">Placed on December 5, 2024</p>
            </div>
            <span class="px-4 py-2 bg-emerald-100 text-emerald-700 text-sm font-semibold rounded-full">Delivered</span>
          </div>
          
          <div class="grid grid-cols-1 md:grid-cols-3 gap-4 border-t border-slate-200 pt-6">
            <div>
              <p class="text-sm text-slate-600 mb-1">Tracking Number</p>
              <p class="font-semibold text-slate-900">1Z999AA10123456784</p>
            </div>
            <div>
              <p class="text-sm text-slate-600 mb-1">Carrier</p>
              <p class="font-semibold text-slate-900">UPS</p>
            </div>
            <div>
              <p class="text-sm text-slate-600 mb-1">Estimated Delivery</p>
              <p class="font-semibold text-slate-900">December 8, 2024</p>
            </div>
          </div>
        </div>

        <!-- Tracking Timeline -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <h2 class="text-xl font-bold text-slate-900 mb-6">Tracking History</h2>
          
          <div class="relative">
            <!-- Timeline Line -->
            <div class="absolute left-5 top-0 bottom-0 w-0.5 bg-emerald-200"></div>
            
            <!-- Timeline Items -->
            <div class="space-y-6">
              <!-- Delivered -->
              <div class="relative flex items-start space-x-4">
                <div class="relative z-10 w-10 h-10 bg-emerald-500 rounded-full flex items-center justify-center shadow-lg">
                  <i class="fas fa-check text-white"></i>
                </div>
                <div class="flex-1 pb-6">
                  <div class="flex items-center justify-between mb-2">
                    <h3 class="font-bold text-slate-900">Delivered</h3>
                    <span class="text-sm text-slate-600">December 8, 2024</span>
                  </div>
                  <p class="text-sm text-slate-600 mb-1">Your package was delivered</p>
                  <p class="text-sm text-slate-500">3:45 PM - Signed by: John Doe</p>
                  <p class="text-sm text-slate-500 mt-2">123 Main Street, New York, NY 10001</p>
                </div>
              </div>

              <!-- Out for Delivery -->
              <div class="relative flex items-start space-x-4">
                <div class="relative z-10 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center shadow-lg">
                  <i class="fas fa-truck text-white"></i>
                </div>
                <div class="flex-1 pb-6">
                  <div class="flex items-center justify-between mb-2">
                    <h3 class="font-bold text-slate-900">Out for Delivery</h3>
                    <span class="text-sm text-slate-600">December 8, 2024</span>
                  </div>
                  <p class="text-sm text-slate-600 mb-1">Package is on the delivery truck</p>
                  <p class="text-sm text-slate-500">8:00 AM - Out for delivery</p>
                </div>
              </div>

              <!-- In Transit -->
              <div class="relative flex items-start space-x-4">
                <div class="relative z-10 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center shadow-lg">
                  <i class="fas fa-shipping-fast text-white"></i>
                </div>
                <div class="flex-1 pb-6">
                  <div class="flex items-center justify-between mb-2">
                    <h3 class="font-bold text-slate-900">In Transit</h3>
                    <span class="text-sm text-slate-600">December 6, 2024</span>
                  </div>
                  <p class="text-sm text-slate-600 mb-1">Package is in transit to destination</p>
                  <p class="text-sm text-slate-500">2:30 PM - Departed from New York Distribution Center</p>
                </div>
              </div>

              <!-- Shipped -->
              <div class="relative flex items-start space-x-4">
                <div class="relative z-10 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center shadow-lg">
                  <i class="fas fa-box text-white"></i>
                </div>
                <div class="flex-1 pb-6">
                  <div class="flex items-center justify-between mb-2">
                    <h3 class="font-bold text-slate-900">Shipped</h3>
                    <span class="text-sm text-slate-600">December 3, 2024</span>
                  </div>
                  <p class="text-sm text-slate-600 mb-1">Package has been shipped</p>
                  <p class="text-sm text-slate-500">10:15 AM - Picked up by carrier</p>
                  <p class="text-sm text-slate-500">Origin: New York Distribution Center</p>
                </div>
              </div>

              <!-- Order Confirmed -->
              <div class="relative flex items-start space-x-4">
                <div class="relative z-10 w-10 h-10 bg-blue-500 rounded-full flex items-center justify-center shadow-lg">
                  <i class="fas fa-check-circle text-white"></i>
                </div>
                <div class="flex-1">
                  <div class="flex items-center justify-between mb-2">
                    <h3 class="font-bold text-slate-900">Order Confirmed</h3>
                    <span class="text-sm text-slate-600">December 5, 2024</span>
                  </div>
                  <p class="text-sm text-slate-600 mb-1">Your order has been confirmed</p>
                  <p class="text-sm text-slate-500">2:35 PM - Payment received, preparing for shipment</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Shipping Details -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Shipping Address -->
          <div class="bg-white rounded-xl border border-slate-200 p-6">
            <h2 class="text-xl font-bold text-slate-900 mb-4">Shipping To</h2>
            <div class="space-y-2 text-slate-700">
              <p class="font-semibold">John Doe</p>
              <p>123 Main Street</p>
              <p>Apartment 4B</p>
              <p>New York, NY 10001</p>
              <p>United States</p>
              <p class="mt-4">
                <i class="fas fa-phone mr-2 text-slate-600"></i>+1 (555) 123-4567
              </p>
            </div>
          </div>

          <!-- Package Details -->
          <div class="bg-white rounded-xl border border-slate-200 p-6">
            <h2 class="text-xl font-bold text-slate-900 mb-4">Package Details</h2>
            <div class="space-y-3">
              <div class="flex items-center justify-between">
                <span class="text-slate-600">Weight</span>
                <span class="font-semibold text-slate-900">5.2 lbs</span>
              </div>
              <div class="flex items-center justify-between">
                <span class="text-slate-600">Dimensions</span>
                <span class="font-semibold text-slate-900">12 × 8 × 6 in</span>
              </div>
              <div class="flex items-center justify-between">
                <span class="text-slate-600">Items</span>
                <span class="font-semibold text-slate-900">3</span>
              </div>
              <div class="flex items-center justify-between">
                <span class="text-slate-600">Service</span>
                <span class="font-semibold text-slate-900">Ground Shipping</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Actions -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <div class="flex items-center justify-between">
            <div>
              <h2 class="text-xl font-bold text-slate-900 mb-2">Need Help?</h2>
              <p class="text-sm text-slate-600">Contact us if you have any questions about your shipment</p>
            </div>
            <div class="flex items-center space-x-3">
              <a href="/orders/12345" class="px-6 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors font-semibold">
                <i class="fas fa-file-alt mr-2"></i>View Order Details
              </a>
              <a href="https://www.ups.com/track?tracknum=1Z999AA10123456784" target="_blank" class="px-6 py-2 bg-linear-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all font-semibold">
                <i class="fas fa-external-link-alt mr-2"></i>Track on UPS
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-client-layout>

