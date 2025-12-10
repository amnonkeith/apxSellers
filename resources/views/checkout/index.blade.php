<x-client-layout title="Checkout - AutoPartsX">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <h1 class="text-3xl font-bold text-slate-900 mb-8">Checkout</h1>

    <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
      <!-- Checkout Form -->
      <div class="lg:col-span-2 space-y-6">
        <!-- Shipping Information -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <h2 class="text-xl font-bold text-slate-900 mb-6">Shipping Information</h2>
          <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
              <label class="block text-sm font-semibold text-slate-700 mb-2">First Name *</label>
              <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
            </div>
            <div>
              <label class="block text-sm font-semibold text-slate-700 mb-2">Last Name *</label>
              <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
            </div>
            <div class="md:col-span-2">
              <label class="block text-sm font-semibold text-slate-700 mb-2">Email Address *</label>
              <input type="email" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
            </div>
            <div class="md:col-span-2">
              <label class="block text-sm font-semibold text-slate-700 mb-2">Phone Number *</label>
              <input type="tel" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
            </div>
            <div class="md:col-span-2">
              <label class="block text-sm font-semibold text-slate-700 mb-2">Street Address *</label>
              <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
            </div>
            <div>
              <label class="block text-sm font-semibold text-slate-700 mb-2">City *</label>
              <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
            </div>
            <div>
              <label class="block text-sm font-semibold text-slate-700 mb-2">State/Province *</label>
              <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
            </div>
            <div>
              <label class="block text-sm font-semibold text-slate-700 mb-2">ZIP/Postal Code *</label>
              <input type="text" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
            </div>
            <div>
              <label class="block text-sm font-semibold text-slate-700 mb-2">Country *</label>
              <select class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
                <option>United States</option>
                <option>Canada</option>
                <option>Mexico</option>
              </select>
            </div>
          </div>
        </div>

        <!-- Payment Method -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <h2 class="text-xl font-bold text-slate-900 mb-6">Payment Method</h2>
          <div class="space-y-4">
            <label class="flex items-center p-4 border-2 border-emerald-500 rounded-lg cursor-pointer bg-emerald-50">
              <input type="radio" name="payment" value="card" checked class="mr-3">
              <i class="fas fa-credit-card text-emerald-600 text-xl mr-3"></i>
              <span class="font-semibold text-slate-900">Credit/Debit Card</span>
            </label>
            <label class="flex items-center p-4 border-2 border-slate-200 rounded-lg cursor-pointer hover:border-emerald-500">
              <input type="radio" name="payment" value="paypal" class="mr-3">
              <i class="fab fa-paypal text-blue-600 text-xl mr-3"></i>
              <span class="font-semibold text-slate-900">PayPal</span>
            </label>
          </div>

          <!-- Card Details -->
          <div id="card-details" class="mt-6 space-y-4">
            <div>
              <label class="block text-sm font-semibold text-slate-700 mb-2">Card Number *</label>
              <input type="text" placeholder="1234 5678 9012 3456" 
                     class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
            </div>
            <div class="grid grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">Expiry Date *</label>
                <input type="text" placeholder="MM/YY" 
                       class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
              </div>
              <div>
                <label class="block text-sm font-semibold text-slate-700 mb-2">CVV *</label>
                <input type="text" placeholder="123" 
                       class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
              </div>
            </div>
            <div>
              <label class="block text-sm font-semibold text-slate-700 mb-2">Cardholder Name *</label>
              <input type="text" 
                     class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500">
            </div>
          </div>
        </div>

        <!-- Shipping Method -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <h2 class="text-xl font-bold text-slate-900 mb-6">Shipping Method</h2>
          <div class="space-y-3">
            <label class="flex items-center justify-between p-4 border-2 border-emerald-500 rounded-lg cursor-pointer bg-emerald-50">
              <div class="flex items-center">
                <input type="radio" name="shipping" value="standard" checked class="mr-3">
                <div>
                  <p class="font-semibold text-slate-900">Standard Shipping</p>
                  <p class="text-sm text-slate-600">5-7 business days</p>
                </div>
              </div>
              <span class="font-semibold text-emerald-600">Free</span>
            </label>
            <label class="flex items-center justify-between p-4 border-2 border-slate-200 rounded-lg cursor-pointer hover:border-emerald-500">
              <div class="flex items-center">
                <input type="radio" name="shipping" value="express" class="mr-3">
                <div>
                  <p class="font-semibold text-slate-900">Express Shipping</p>
                  <p class="text-sm text-slate-600">2-3 business days</p>
                </div>
              </div>
              <span class="font-semibold text-slate-900">$12.99</span>
            </label>
            <label class="flex items-center justify-between p-4 border-2 border-slate-200 rounded-lg cursor-pointer hover:border-emerald-500">
              <div class="flex items-center">
                <input type="radio" name="shipping" value="overnight" class="mr-3">
                <div>
                  <p class="font-semibold text-slate-900">Overnight Shipping</p>
                  <p class="text-sm text-slate-600">Next business day</p>
                </div>
              </div>
              <span class="font-semibold text-slate-900">$24.99</span>
            </label>
          </div>
        </div>
      </div>

      <!-- Order Summary -->
      <div class="lg:col-span-1">
        <div class="bg-white rounded-xl border border-slate-200 p-6 sticky top-24">
          <h2 class="text-xl font-bold text-slate-900 mb-6">Order Summary</h2>
          
          <!-- Order Items -->
          <div class="space-y-4 mb-6">
            <div class="flex items-center space-x-3">
              <img src="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=80&h=80&fit=crop" 
                   alt="Product" 
                   class="w-16 h-16 object-cover rounded-lg">
              <div class="flex-1">
                <p class="text-sm font-semibold text-slate-900">Brake Pads</p>
                <p class="text-xs text-slate-500">Qty: 2</p>
              </div>
              <p class="text-sm font-semibold text-slate-900">$179.98</p>
            </div>
            <div class="flex items-center space-x-3">
              <img src="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=80&h=80&fit=crop" 
                   alt="Product" 
                   class="w-16 h-16 object-cover rounded-lg">
              <div class="flex-1">
                <p class="text-sm font-semibold text-slate-900">LED Headlights</p>
                <p class="text-xs text-slate-500">Qty: 1</p>
              </div>
              <p class="text-sm font-semibold text-slate-900">$245.00</p>
            </div>
          </div>

          <hr class="border-slate-200 mb-6">

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

          <button onclick="placeOrder()" class="w-full bg-linear-to-r from-emerald-500 to-emerald-600 text-white px-6 py-4 rounded-lg font-semibold hover:from-emerald-600 hover:to-emerald-700 transition-all transform hover:scale-105 shadow-lg hover:shadow-xl mb-4">
            <i class="fas fa-lock mr-2"></i>Place Order
          </button>

          <div class="text-center text-sm text-slate-500">
            <i class="fas fa-shield-alt mr-1"></i>Secure checkout • SSL encrypted
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    function placeOrder() {
      alert('Order placed successfully! Thank you for your purchase.');
      // Implement actual order processing here
    }
  </script>
</x-client-layout>

