<x-client-layout title="My Addresses - AutoPartsX">
  <!-- Hero Section -->
  <div class="bg-slate-50 border-b border-slate-200 py-12">
    <div class="px-4 sm:px-6 lg:px-12">
      <h1 class="text-4xl font-bold mb-4 text-slate-900">My Addresses</h1>
      <p class="text-xl text-slate-600">Manage your shipping addresses</p>
    </div>
  </div>

  <!-- Addresses Content -->
  <div class="px-4 sm:px-6 lg:px-12 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Account Sidebar -->
      <div class="lg:col-span-1">
        <x-account-sidebar active="addresses" />
      </div>

      <!-- Addresses Main Content -->
      <div class="lg:col-span-3">
        <!-- Add New Address Button -->
        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
          <div class="flex items-center justify-between">
            <div>
              <h2 class="text-2xl font-bold text-slate-900">Saved Addresses</h2>
              <p class="text-sm text-slate-600 mt-1">Manage your delivery addresses</p>
            </div>
            <button id="addAddressBtn" class="px-6 py-3 bg-linear-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all font-semibold">
              <i class="fas fa-plus mr-2"></i>Add New Address
            </button>
          </div>
        </div>

        <!-- Addresses List -->
        <div class="space-y-4">
          <!-- Address 1 - Default -->
          <div class="bg-white rounded-xl border-2 border-blue-500 p-6 relative">
            <div class="absolute top-4 right-4">
              <span class="px-3 py-1 bg-blue-100 text-blue-700 text-xs font-semibold rounded-full">Default</span>
            </div>
            <div class="pr-20">
              <h3 class="text-lg font-bold text-slate-900 mb-2">John Doe</h3>
              <p class="text-slate-700 mb-1">123 Main Street</p>
              <p class="text-slate-700 mb-1">Apartment 4B</p>
              <p class="text-slate-700 mb-1">New York, NY 10001</p>
              <p class="text-slate-700 mb-4">United States</p>
              <p class="text-slate-600 mb-4">
                <i class="fas fa-phone mr-2"></i>+1 (555) 123-4567
              </p>
              <div class="flex items-center space-x-3">
                <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors text-sm font-semibold">
                  <i class="fas fa-edit mr-2"></i>Edit
                </button>
                <button class="px-4 py-2 border border-red-300 text-red-600 rounded-lg hover:bg-red-50 transition-colors text-sm font-semibold">
                  <i class="fas fa-trash mr-2"></i>Delete
                </button>
              </div>
            </div>
          </div>

          <!-- Address 2 -->
          <div class="bg-white rounded-xl border border-slate-200 p-6 relative">
            <div class="absolute top-4 right-4">
              <button class="px-3 py-1 bg-slate-100 text-slate-700 text-xs font-semibold rounded-full hover:bg-blue-100 hover:text-blue-700 transition-colors">
                Set as Default
              </button>
            </div>
            <div class="pr-20">
              <h3 class="text-lg font-bold text-slate-900 mb-2">John Doe</h3>
              <p class="text-slate-700 mb-1">456 Oak Avenue</p>
              <p class="text-slate-700 mb-1">Suite 200</p>
              <p class="text-slate-700 mb-1">Los Angeles, CA 90001</p>
              <p class="text-slate-700 mb-4">United States</p>
              <p class="text-slate-600 mb-4">
                <i class="fas fa-phone mr-2"></i>+1 (555) 987-6543
              </p>
              <div class="flex items-center space-x-3">
                <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors text-sm font-semibold">
                  <i class="fas fa-edit mr-2"></i>Edit
                </button>
                <button class="px-4 py-2 border border-red-300 text-red-600 rounded-lg hover:bg-red-50 transition-colors text-sm font-semibold">
                  <i class="fas fa-trash mr-2"></i>Delete
                </button>
              </div>
            </div>
          </div>

          <!-- Address 3 -->
          <div class="bg-white rounded-xl border border-slate-200 p-6 relative">
            <div class="absolute top-4 right-4">
              <button class="px-3 py-1 bg-slate-100 text-slate-700 text-xs font-semibold rounded-full hover:bg-blue-100 hover:text-blue-700 transition-colors">
                Set as Default
              </button>
            </div>
            <div class="pr-20">
              <h3 class="text-lg font-bold text-slate-900 mb-2">John Doe</h3>
              <p class="text-slate-700 mb-1">789 Pine Street</p>
              <p class="text-slate-700 mb-1">Chicago, IL 60601</p>
              <p class="text-slate-700 mb-4">United States</p>
              <p class="text-slate-600 mb-4">
                <i class="fas fa-phone mr-2"></i>+1 (555) 456-7890
              </p>
              <div class="flex items-center space-x-3">
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

        <!-- Add Address Modal (Hidden by default) -->
        <div id="addAddressModal" class="hidden fixed inset-0 bg-black/50 z-50 items-center justify-center p-4">
          <div class="bg-white rounded-xl max-w-2xl w-full max-h-[90vh] overflow-y-auto">
            <div class="p-6 border-b border-slate-200 flex items-center justify-between">
              <h3 class="text-xl font-bold text-slate-900">Add New Address</h3>
              <button id="closeAddressModal" class="text-slate-500 hover:text-slate-700">
                <i class="fas fa-times text-xl"></i>
              </button>
            </div>
            <div class="p-6 space-y-4">
              <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-1">Full Name *</label>
                  <input type="text" placeholder="John Doe" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-1">Phone Number *</label>
                  <input type="tel" placeholder="+1 (555) 123-4567" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
              </div>
              <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Street Address *</label>
                <input type="text" placeholder="123 Main Street" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
              </div>
              <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Apartment, Suite, etc. (Optional)</label>
                <input type="text" placeholder="Apartment 4B" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
              </div>
              <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-1">City *</label>
                  <input type="text" placeholder="New York" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-1">State *</label>
                  <select class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                    <option>Select State</option>
                    <option>New York</option>
                    <option>California</option>
                    <option>Illinois</option>
                    <option>Texas</option>
                  </select>
                </div>
                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-1">ZIP Code *</label>
                  <input type="text" placeholder="10001" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
              </div>
              <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Country *</label>
                <select class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                  <option>United States</option>
                  <option>Canada</option>
                  <option>Mexico</option>
                </select>
              </div>
              <div class="flex items-center">
                <input type="checkbox" id="setAsDefault" class="mr-2 rounded border-slate-300 text-blue-600 focus:ring-blue-500">
                <label for="setAsDefault" class="text-sm text-slate-700">Set as default address</label>
              </div>
            </div>
            <div class="p-6 border-t border-slate-200 flex items-center justify-end space-x-3">
              <button id="cancelAddressBtn" class="px-6 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors font-semibold">
                Cancel
              </button>
              <button class="px-6 py-2 bg-linear-to-r from-blue-500 to-blue-600 text-white rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all font-semibold">
                Save Address
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.getElementById('addAddressBtn')?.addEventListener('click', function() {
      document.getElementById('addAddressModal')?.classList.remove('hidden');
    });

    document.getElementById('closeAddressModal')?.addEventListener('click', function() {
      document.getElementById('addAddressModal')?.classList.add('hidden');
    });

    document.getElementById('cancelAddressBtn')?.addEventListener('click', function() {
      document.getElementById('addAddressModal')?.classList.add('hidden');
    });

    // Close modal when clicking outside
    document.getElementById('addAddressModal')?.addEventListener('click', function(e) {
      if (e.target === this) {
        this.classList.add('hidden');
      }
    });
  </script>
</x-client-layout>

