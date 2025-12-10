<x-client-layout title="Account Settings - AutoPartsX">
  <!-- Hero Section -->
  <div class="bg-slate-50 border-b border-slate-200 py-12">
    <div class="px-4 sm:px-6 lg:px-12">
      <h1 class="text-4xl font-bold mb-4 text-slate-900">Account Settings</h1>
      <p class="text-xl text-slate-600">Manage your account preferences and security</p>
    </div>
  </div>

  <!-- Settings Content -->
  <div class="px-4 sm:px-6 lg:px-12 py-8">
    <div class="grid grid-cols-1 lg:grid-cols-4 gap-6">
      <!-- Account Sidebar -->
      <div class="lg:col-span-1">
        <x-account-sidebar active="settings" />
      </div>

      <!-- Settings Main Content -->
      <div class="lg:col-span-3 space-y-6">
        <!-- Profile Settings -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <h2 class="text-2xl font-bold text-slate-900 mb-6">Profile Settings</h2>
          <div class="space-y-4">
            <div class="flex items-center space-x-4">
              <div class="w-20 h-20 bg-blue-100 rounded-full flex items-center justify-center">
                <i class="fas fa-user text-blue-600 text-2xl"></i>
              </div>
              <div class="flex-1">
                <p class="font-semibold text-slate-900">Profile Picture</p>
                <p class="text-sm text-slate-600">JPG, PNG or GIF. Max size 2MB</p>
              </div>
              <div class="flex items-center space-x-3">
                <button class="px-4 py-2 border border-slate-300 rounded-lg hover:bg-slate-50 transition-colors text-sm font-semibold">
                  <i class="fas fa-upload mr-2"></i>Upload
                </button>
                <button class="px-4 py-2 border border-red-300 text-red-600 rounded-lg hover:bg-red-50 transition-colors text-sm font-semibold">
                  <i class="fas fa-trash mr-2"></i>Remove
                </button>
              </div>
            </div>
            <hr class="border-slate-200">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
              <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">First Name</label>
                <input type="text" value="John" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
              </div>
              <div>
                <label class="block text-sm font-medium text-slate-700 mb-1">Last Name</label>
                <input type="text" value="Doe" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
              </div>
            </div>
            <div>
              <label class="block text-sm font-medium text-slate-700 mb-1">Email</label>
              <input type="email" value="john.doe@example.com" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
              <label class="block text-sm font-medium text-slate-700 mb-1">Phone Number</label>
              <input type="tel" value="+1 (555) 123-4567" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
              <label class="block text-sm font-medium text-slate-700 mb-1">Date of Birth</label>
              <input type="date" value="1990-01-01" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <button class="w-full bg-linear-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all font-semibold">
              Save Profile Changes
            </button>
          </div>
        </div>

        <!-- Password & Security -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <h2 class="text-2xl font-bold text-slate-900 mb-6">Password & Security</h2>
          <div class="space-y-4">
            <div>
              <label class="block text-sm font-medium text-slate-700 mb-1">Current Password</label>
              <input type="password" placeholder="Enter current password" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <div>
              <label class="block text-sm font-medium text-slate-700 mb-1">New Password</label>
              <input type="password" placeholder="Enter new password" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
              <p class="text-xs text-slate-500 mt-1">Must be at least 8 characters long</p>
            </div>
            <div>
              <label class="block text-sm font-medium text-slate-700 mb-1">Confirm New Password</label>
              <input type="password" placeholder="Confirm new password" class="w-full px-4 py-2 border border-slate-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-blue-500">
            </div>
            <button class="w-full bg-linear-to-r from-blue-500 to-blue-600 text-white px-4 py-2 rounded-lg hover:from-blue-600 hover:to-blue-700 transition-all font-semibold">
              Update Password
            </button>
          </div>
        </div>

        <!-- Notification Preferences -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <h2 class="text-2xl font-bold text-slate-900 mb-6">Notification Preferences</h2>
          <div class="space-y-4">
            <div class="flex items-center justify-between">
              <div>
                <p class="font-semibold text-slate-900">Email Notifications</p>
                <p class="text-sm text-slate-600">Receive updates about your orders and account</p>
              </div>
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" checked class="sr-only peer">
                <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
              </label>
            </div>
            <hr class="border-slate-200">
            <div class="flex items-center justify-between">
              <div>
                <p class="font-semibold text-slate-900">SMS Notifications</p>
                <p class="text-sm text-slate-600">Receive text messages about order updates</p>
              </div>
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer">
                <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
              </label>
            </div>
            <hr class="border-slate-200">
            <div class="flex items-center justify-between">
              <div>
                <p class="font-semibold text-slate-900">Marketing Emails</p>
                <p class="text-sm text-slate-600">Receive promotional offers and deals</p>
              </div>
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" checked class="sr-only peer">
                <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
              </label>
            </div>
            <hr class="border-slate-200">
            <div class="flex items-center justify-between">
              <div>
                <p class="font-semibold text-slate-900">Order Updates</p>
                <p class="text-sm text-slate-600">Get notified when your order status changes</p>
              </div>
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" checked class="sr-only peer">
                <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
              </label>
            </div>
          </div>
        </div>

        <!-- Privacy Settings -->
        <div class="bg-white rounded-xl border border-slate-200 p-6">
          <h2 class="text-2xl font-bold text-slate-900 mb-6">Privacy Settings</h2>
          <div class="space-y-4">
            <div class="flex items-center justify-between">
              <div>
                <p class="font-semibold text-slate-900">Profile Visibility</p>
                <p class="text-sm text-slate-600">Make your profile visible to other users</p>
              </div>
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" class="sr-only peer">
                <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
              </label>
            </div>
            <hr class="border-slate-200">
            <div class="flex items-center justify-between">
              <div>
                <p class="font-semibold text-slate-900">Data Sharing</p>
                <p class="text-sm text-slate-600">Allow us to use your data for analytics</p>
              </div>
              <label class="relative inline-flex items-center cursor-pointer">
                <input type="checkbox" checked class="sr-only peer">
                <div class="w-11 h-6 bg-slate-200 peer-focus:outline-none peer-focus:ring-4 peer-focus:ring-blue-300 rounded-full peer peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-slate-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-blue-600"></div>
              </label>
            </div>
          </div>
        </div>

        <!-- Danger Zone -->
        <div class="bg-white rounded-xl border-2 border-red-200 p-6">
          <h2 class="text-2xl font-bold text-red-600 mb-6">Danger Zone</h2>
          <div class="space-y-4">
            <div class="flex items-center justify-between">
              <div>
                <p class="font-semibold text-slate-900">Delete Account</p>
                <p class="text-sm text-slate-600">Permanently delete your account and all associated data</p>
              </div>
              <button class="px-6 py-2 border-2 border-red-600 text-red-600 rounded-lg hover:bg-red-50 transition-colors font-semibold">
                Delete Account
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</x-client-layout>

