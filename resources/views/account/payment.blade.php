<x-client-layout title="Payment Methods - AutoPartsX">
  <!-- Hero Section -->
  <div class="bg-slate-50 border-b border-slate-200 py-12">
    <div class="px-4 sm:px-6 lg:px-12">
      <h1 class="text-4xl font-bold mb-4 text-slate-900">Payment Methods</h1>
      <p class="text-xl text-slate-600">Manage your payment methods</p>
    </div>
  </div>

  <!-- Payment Methods Content -->
  <div class="px-4 sm:px-6 lg:px-12 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Account Sidebar -->
      <div class="lg:col-span-1">
        <x-account-sidebar active="payment" />
      </div>

      <!-- Payment Methods Main Content -->
      <div class="lg:col-span-3">
        <!-- Add New Payment Method Button -->
        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
          <div class="flex items-center justify-between">
            <div>
              <h2 class="text-2xl font-bold text-slate-900">Saved Payment Methods</h2>
              <p class="text-sm text-slate-600 mt-1">Manage your credit and debit cards</p>
            </div>
            <button id="addPaymentBtn" class="px-6 py-3 bg-linear-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all font-semibold">
              <i class="fas fa-plus mr-2"></i>Add New Card
            </button>
          </div>
        </div>

        <!-- Payment Methods List -->
        <div class="space-y-4">
          <!-- Card 1 - Default -->
          <div class="bg-white rounded-xl border-2 border-blue-500 p-6 relative">
            <div class="absolute top-4 right-4">
              <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-semibold rounded-full">Default</span>
            </div>
            <div class="pr-20">
              <div class="flex items-center space-x-4 mb-4">
                <div class="w-12 h-8 bg-linear-to-r from-blue-600 to-blue-800 rounded flex items-center justify-center">
                  <i class="fas fa-credit-card text-white text-sm"></i>
                </div>
                <div>
                  <p class="font-bold text-slate-900 text-lg">•••• •••• •••• 4242</p>
                  <p class="text-sm text-slate-600">Visa</p>
                </div>
              </div>
              <div class="flex items-center space-x-6 text-sm text-slate-600">
                <div>
                  <p class="text-xs text-slate-500 mb-1">Cardholder Name</p>
                  <p class="font-semibold text-slate-900">John Doe</p>
                </div>
                <div>
                  <p class="text-xs text-slate-500 mb-1">Expires</p>
                  <p class="font-semibold text-slate-900">12/25</p>
                </div>
              </div>
              <div class="mt-4 flex items-center space-x-3">
                <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors text-sm font-semibold">
                  <i class="fas fa-edit mr-2"></i>Edit
                </button>
                <button class="px-4 py-2 border border-red-300 text-red-600 rounded-lg hover:bg-red-50 transition-colors text-sm font-semibold">
                  <i class="fas fa-trash mr-2"></i>Delete
                </button>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="bg-white rounded-xl border border-slate-200 p-6 relative">
            <div class="absolute top-4 right-4">
              <button class="px-3 py-1 bg-slate-100 text-slate-700 text-xs font-semibold rounded-full hover:bg-blue-100 hover:text-blue-700 transition-colors">
                Set as Default
              </button>
            </div>
            <div class="pr-20">
              <div class="flex items-center space-x-4 mb-4">
                <div class="w-12 h-8 bg-linear-to-r from-orange-500 to-orange-700 rounded flex items-center justify-center">
                  <i class="fas fa-credit-card text-white text-sm"></i>
                </div>
                <div>
                  <p class="font-bold text-slate-900 text-lg">•••• •••• •••• 8888</p>
                  <p class="text-sm text-slate-600">Mastercard</p>
                </div>
              </div>
              <div class="flex items-center space-x-6 text-sm text-slate-600">
                <div>
                  <p class="text-xs text-slate-500 mb-1">Cardholder Name</p>
                  <p class="font-semibold text-slate-900">John Doe</p>
                </div>
                <div>
                  <p class="text-xs text-slate-500 mb-1">Expires</p>
                  <p class="font-semibold text-slate-900">08/26</p>
                </div>
              </div>
              <div class="mt-4 flex items-center space-x-3">
                <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors text-sm font-semibold">
                  <i class="fas fa-edit mr-2"></i>Edit
                </button>
                <button class="px-4 py-2 border border-red-300 text-red-600 rounded-lg hover:bg-red-50 transition-colors text-sm font-semibold">
                  <i class="fas fa-trash mr-2"></i>Delete
                </button>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="bg-white rounded-xl border border-slate-200 p-6 relative">
            <div class="absolute top-4 right-4">
              <button class="px-3 py-1 bg-slate-100 text-slate-700 text-xs font-semibold rounded-full hover:bg-blue-100 hover:text-blue-700 transition-colors">
                Set as Default
              </button>
            </div>
            <div class="pr-20">
              <div class="flex items-center space-x-4 mb-4">
                <div class="w-12 h-8 bg-linear-to-r from-emerald-600 to-emerald-800 rounded flex items-center justify-center">
                  <i class="fas fa-credit-card text-white text-sm"></i>
                </div>
                <div>
                  <p class="font-bold text-slate-900 text-lg">•••• •••• •••• 1234</p>
                  <p class="text-sm text-slate-600">American Express</p>
                </div>
              </div>
              <div class="flex items-center space-x-6 text-sm text-slate-600">
                <div>
                  <p class="text-xs text-slate-500 mb-1">Cardholder Name</p>
                  <p class="font-semibold text-slate-900">John Doe</p>
                </div>
                <div>
                  <p class="text-xs text-slate-500 mb-1">Expires</p>
                  <p class="font-semibold text-slate-900">03/27</p>
                </div>
              </div>
              <div class="mt-4 flex items-center space-x-3">
                <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors text-sm font-semibold">
                  <i class="fas fa-edit mr-2"></i>Edit
                </button>
                <button class="px-4 py-2 border border-red-300 text-red-600 rounded-lg hover:bg-red-50 transition-colors text-sm font-semibold">
                  <i class="fas fa-trash mr-2"></i>Delete
                </button>
              </div>
            </div>
          </div>
        </div>

        <!-- Add Payment Method Modal (Hidden by default) -->
        <div id="addPaymentModal" class="hidden fixed inset-0 bg-black/50 z-50 flex items-center justify-center p-4">
          <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200 flex items-center justify-between">
              <h3 class="text-xl font-bold text-slate-900">Add New Payment Method</h3>
              <button id="closePaymentModal" class="text-slate-500 hover:text-slate-700">
                <i class="fas fa-times text-xl"></i>
              </button>
            </div>
            <div class="p-6 space-y-4">
              <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Card Number *</label>
                <input type="text" placeholder="1234 5678 9012 3456" maxlength="19" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
              </div>
              <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Cardholder Name *</label>
                <input type="text" placeholder="John Doe" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
              </div>
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-1">Expiry Date *</label>
                  <input type="text" placeholder="MM/YY" maxlength="5" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-1">CVV *</label>
                  <input type="text" placeholder="123" maxlength="4" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
              </div>
              <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Billing Address</label>
                <select class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                  <option>Use saved address</option>
                  <option>123 Main Street, New York, NY 10001</option>
                  <option>456 Oak Avenue, Los Angeles, CA 90001</option>
                  <option>Add new address</option>
                </select>
              </div>
              <div class="flex items-center">
                <input type="checkbox" id="setAsDefaultPayment" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <label for="setAsDefaultPayment" class="text-sm text-slate-700">Set as default payment method</label>
              </div>
            </div>
            <div class="p-6 border-t border-slate-200 flex items-center justify-end space-x-3">
              <button id="cancelPaymentBtn" class="px-6 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors font-semibold">
                Cancel
              </button>
              <button class="px-6 py-2 bg-linear-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all font-semibold">
                Save Card
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('addPaymentBtn')?.addEventListener('click', function() {
      document.getElementById('addPaymentModal')?.classList.remove('hidden');
    });

    document.getElementById('closePaymentModal')?.addEventListener('click', function() {
      document.getElementById('addPaymentModal')?.classList.add('hidden');
    });

    document.getElementById('cancelPaymentBtn')?.addEventListener('click', function() {
      document.getElementById('addPaymentModal')?.classList.add('hidden');
    });

    // Close modal when clicking outside
    document.getElementById('addPaymentModal')?.addEventListener('click', function(e) {
      if (e.target === this) {
        this.classList.add('hidden');
      }
    });
  </script>
</x-client-layout>

