<x-client-layout title="My Account - AutoPartsX">
  <!-- Hero Section -->
  <div class="bg-slate-50 border-b border-slate-200 py-12">
    <div class="px-4 sm:px-6 lg:px-12">
      <h1 class="text-4xl font-bold mb-4 text-slate-900">My Account</h1>
      <p class="text-xl text-slate-600">Manage your account settings and preferences</p>
    </div>
  </div>

  <!-- Account Content -->
  <div class="px-4 sm:px-6 lg:px-12 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Account Sidebar -->
      <div class="lg:col-span-1">
        <x-account-sidebar active="account" />
      </div>

      <!-- Account Main Content -->
      <div class="lg:col-span-3">
        <!-- Account Overview -->
        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
          <h2 class="text-2xl font-bold text-slate-900 mb-6">Account Overview</h2>
          
          <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            <!-- Personal Information -->
            <div>
              <h3 class="text-lg font-semibold text-slate-900 mb-4">Personal Information</h3>
              <div class="space-y-3">
                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-1">Full Name</label>
                  <input type="text" value="John Doe" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-1">Email</label>
                  <input type="email" value="john.doe@example.com" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <div>
                  <label class="block text-sm font-medium text-slate-700 mb-1">Phone</label>
                  <input type="tel" value="+1 (555) 123-4567" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
                </div>
                <button class="w-full bg-linear-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all font-semibold">
                  Save Changes
                </button>
              </div>
            </div>

            <!-- Account Stats -->
            <div>
              <h3 class="text-lg font-semibold text-slate-900 mb-4">Account Statistics</h3>
              <div class="space-y-4">
                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-lg">
                  <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-blue-100 rounded-lg flex items-center justify-center">
                      <i class="fas fa-shopping-bag text-blue-600"></i>
                    </div>
                    <div>
                      <p class="text-sm text-slate-600">Total Orders</p>
                      <p class="text-xl font-bold text-slate-900">12</p>
                    </div>
                  </div>
                </div>
                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-lg">
                  <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-emerald-100 rounded-lg flex items-center justify-center">
                      <i class="fas fa-heart text-emerald-600"></i>
                    </div>
                    <div>
                      <p class="text-sm text-slate-600">Favorites</p>
                      <p class="text-xl font-bold text-slate-900">8</p>
                    </div>
                  </div>
                </div>
                <div class="flex items-center justify-between p-4 bg-slate-50 rounded-lg">
                  <div class="flex items-center space-x-3">
                    <div class="w-10 h-10 bg-orange-100 rounded-lg flex items-center justify-center">
                      <i class="fas fa-star text-orange-600"></i>
                    </div>
                    <div>
                      <p class="text-sm text-slate-600">Reviews</p>
                      <p class="text-xl font-bold text-slate-900">5</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <!-- Recent Orders -->
        <div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
          <div class="flex items-center justify-between mb-4">
            <h2 class="text-2xl font-bold text-slate-900">Recent Orders</h2>
            <a href="/orders" class="text-blue-600 hover:text-blue-700 text-sm font-semibold">
              View all <i class="fas fa-chevron-right ml-1 text-xs"></i>
            </a>
          </div>
          <div class="space-y-4">
            <div class="flex items-center justify-between p-4 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors">
              <div class="flex items-center space-x-4">
                <div class="w-16 h-16 bg-slate-100 rounded-lg flex items-center justify-center">
                  <i class="fas fa-box text-slate-600"></i>
                </div>
                <div>
                  <p class="font-semibold text-slate-900">Order #12345</p>
                  <p class="text-sm text-slate-600">Placed on Dec 5, 2024</p>
                  <p class="text-sm text-emerald-600 font-medium">Delivered</p>
                </div>
              </div>
              <div class="text-right">
                <p class="font-bold text-slate-900">$458.98</p>
                <a href="/orders/12345" class="text-sm text-blue-600 hover:text-blue-700">View Details</a>
              </div>
            </div>
            <div class="flex items-center justify-between p-4 border border-slate-200 rounded-lg hover:bg-slate-50 transition-colors">
              <div class="flex items-center space-x-4">
                <div class="w-16 h-16 bg-slate-100 rounded-lg flex items-center justify-center">
                  <i class="fas fa-box text-slate-600"></i>
                </div>
                <div>
                  <p class="font-semibold text-slate-900">Order #12344</p>
                  <p class="text-sm text-slate-600">Placed on Dec 1, 2024</p>
                  <p class="text-sm text-blue-600 font-medium">Shipped</p>
                </div>
              </div>
              <div class="text-right">
                <p class="font-bold text-slate-900">$245.00</p>
                <a href="/orders/12344" class="text-sm text-blue-600 hover:text-blue-700">View Details</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-client-layout>

