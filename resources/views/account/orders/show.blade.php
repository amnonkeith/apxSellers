<x-client-layout title="Order Details - AutoPartsX">
  <!-- Hero Section -->
  <div class="bg-slate-50 border-b border-slate-200 py-12">
    <div class="px-4 sm:px-6 lg:px-12">
      <div class="flex items-center space-x-4 mb-4">
        <a href="/orders" class="text-blue-600 hover:text-blue-700">
          <i class="fas fa-arrow-left text-xl"></i>
        </a>
        <h1 class="text-4xl font-bold text-slate-900">Order Details</h1>
      </div>
      <p class="text-xl text-slate-600">Order #12345</p>
    </div>
  </div>

  <!-- Order Details Content -->
  <div class="px-4 sm:px-6 lg:px-12 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Account Sidebar -->
      <div class="lg:col-span-1">
        <x-account-sidebar active="orders" />
      </div>

      <!-- Order Details Main Content -->
      <div class="lg:col-span-3 space-y-6">
        <!-- Order Status Card -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <div class="flex items-center justify-between mb-6">
            <div>
              <h2 class="text-2xl font-bold text-slate-900 mb-2">Order #12345</h2>
              <p class="text-sm text-slate-600">Placed on December 5, 2024 at 2:30 PM</p>
            </div>
            <span class="px-4 py-2 bg-emerald-100 text-emerald-700 text-sm font-semibold rounded-full">Delivered</span>
          </div>
          
          <!-- Order Timeline -->
          <div class="border-t border-slate-200 pt-6">
            <div class="space-y-4">
              <div class="flex items-center space-x-4">
                <div class="w-10 h-10 bg-emerald-100 rounded-full flex items-center justify-center">
                  <i class="fas fa-check text-emerald-600"></i>
                </div>
                <div class="flex-1">
                  <p class="font-semibold text-slate-900">Order Delivered</p>
                  <p class="text-sm text-slate-600">Delivered on December 8, 2024 at 3:45 PM</p>
                </div>
              </div>
              <div class="flex items-center space-x-4">
                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                  <i class="fas fa-shipping-fast text-blue-600"></i>
                </div>
                <div class="flex-1">
                  <p class="font-semibold text-slate-900">Out for Delivery</p>
                  <p class="text-sm text-slate-600">December 8, 2024 at 8:00 AM</p>
                </div>
              </div>
              <div class="flex items-center space-x-4">
                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                  <i class="fas fa-box text-blue-600"></i>
                </div>
                <div class="flex-1">
                  <p class="font-semibold text-slate-900">Shipped</p>
                  <p class="text-sm text-slate-600">December 3, 2024 at 10:15 AM</p>
                </div>
              </div>
              <div class="flex items-center space-x-4">
                <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center">
                  <i class="fas fa-check-circle text-blue-600"></i>
                </div>
                <div class="flex-1">
                  <p class="font-semibold text-slate-900">Order Confirmed</p>
                  <p class="text-sm text-slate-600">December 5, 2024 at 2:35 PM</p>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Order Items -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <h2 class="text-xl font-bold text-slate-900 mb-6">Order Items</h2>
          <div class="space-y-4">
            <div class="flex items-center space-x-4 p-4 border border-slate-200 rounded-lg">
              <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=150&h=150&fit=crop" 
                   alt="Product" 
                   class="w-24 h-24 object-cover rounded-lg">
              <div class="flex-1">
                <h3 class="font-semibold text-slate-900 mb-1">OEM Brake Pads - Honda Civic 2018</h3>
                <p class="text-sm text-slate-600 mb-2">SKU: BP-HC-2018-001</p>
                <div class="flex items-center space-x-4 text-sm">
                  <span class="text-slate-600">Quantity: <span class="font-semibold text-slate-900">2</span></span>
                  <span class="text-slate-600">Price: <span class="font-semibold text-slate-900">$89.99</span></span>
                </div>
              </div>
              <div class="text-right">
                <p class="font-bold text-slate-900 text-lg">$179.98</p>
                <a href="/products/1" class="text-sm text-blue-600 hover:text-blue-700">View Product</a>
              </div>
            </div>
            <div class="flex items-center space-x-4 p-4 border border-slate-200 rounded-lg">
              <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=150&h=150&fit=crop" 
                   alt="Product" 
                   class="w-24 h-24 object-cover rounded-lg">
              <div class="flex-1">
                <h3 class="font-semibold text-slate-900 mb-1">LED Headlights - Toyota Camry 2020</h3>
                <p class="text-sm text-slate-600 mb-2">SKU: LED-TC-2020-001</p>
                <div class="flex items-center space-x-4 text-sm">
                  <span class="text-slate-600">Quantity: <span class="font-semibold text-slate-900">1</span></span>
                  <span class="text-slate-600">Price: <span class="font-semibold text-slate-900">$245.00</span></span>
                </div>
              </div>
              <div class="text-right">
                <p class="font-bold text-slate-900 text-lg">$245.00</p>
                <a href="/products/2" class="text-sm text-blue-600 hover:text-blue-700">View Product</a>
              </div>
            </div>
            <div class="flex items-center space-x-4 p-4 border border-slate-200 rounded-lg">
              <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=150&h=150&fit=crop" 
                   alt="Product" 
                   class="w-24 h-24 object-cover rounded-lg">
              <div class="flex-1">
                <h3 class="font-semibold text-slate-900 mb-1">Brake Fluid - DOT 4 Premium</h3>
                <p class="text-sm text-slate-600 mb-2">SKU: BF-DOT4-001</p>
                <div class="flex items-center space-x-4 text-sm">
                  <span class="text-slate-600">Quantity: <span class="font-semibold text-slate-900">1</span></span>
                  <span class="text-slate-600">Price: <span class="font-semibold text-slate-900">$18.99</span></span>
                </div>
              </div>
              <div class="text-right">
                <p class="font-bold text-slate-900 text-lg">$18.99</p>
                <a href="/products/10" class="text-sm text-blue-600 hover:text-blue-700">View Product</a>
              </div>
            </div>
          </div>
        </div>

        <!-- Order Summary & Details -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
          <!-- Shipping Address -->
          <div class="bg-white rounded-xl border border-slate-200 p-6">
            <h2 class="text-xl font-bold text-slate-900 mb-4">Shipping Address</h2>
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

          <!-- Payment Method -->
          <div class="bg-white rounded-xl border border-slate-200 p-6">
            <h2 class="text-xl font-bold text-slate-900 mb-4">Payment Method</h2>
            <div class="flex items-center space-x-4">
              <div class="w-12 h-8 bg-linear-to-r from-blue-600 to-blue-800 rounded flex items-center justify-center">
                <i class="fas fa-credit-card text-white text-sm"></i>
              </div>
              <div>
                <p class="font-semibold text-slate-900">•••• •••• •••• 4242</p>
                <p class="text-sm text-slate-600">Visa</p>
              </div>
            </div>
          </div>
        </div>

        <!-- Order Summary -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <h2 class="text-xl font-bold text-slate-900 mb-4">Order Summary</h2>
          <div class="space-y-3">
            <div class="flex items-center justify-between">
              <span class="text-slate-600">Subtotal</span>
              <span class="font-semibold text-slate-900">$443.97</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-600">Shipping</span>
              <span class="font-semibold text-slate-900">$9.99</span>
            </div>
            <div class="flex items-center justify-between">
              <span class="text-slate-600">Tax</span>
              <span class="font-semibold text-slate-900">$5.02</span>
            </div>
            <hr class="border-slate-200">
            <div class="flex items-center justify-between">
              <span class="text-lg font-bold text-slate-900">Total</span>
              <span class="text-lg font-bold text-slate-900">$458.98</span>
            </div>
          </div>
        </div>

        <!-- Actions -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <div class="flex items-center justify-between">
            <div>
              <h2 class="text-xl font-bold text-slate-900 mb-2">Need Help?</h2>
              <p class="text-sm text-slate-600">Contact us if you have any questions about your order</p>
            </div>
            <div class="flex items-center space-x-3">
              <a href="/orders/12345/track" class="px-6 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors font-semibold">
                <i class="fas fa-shipping-fast mr-2"></i>Track Package
              </a>
              <a href="/orders/12345/reorder" class="px-6 py-2 bg-linear-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all font-semibold">
                <i class="fas fa-redo mr-2"></i>Reorder
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-client-layout>

