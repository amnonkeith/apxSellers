<!-- Client Navigation Bar -->
<nav class="fixed top-0 left-0 right-0 bg-blue-600 border-b border-slate-200 shadow-sm z-50">
  <div class="px-4 sm:px-6 lg:px-10">
    <div class="flex justify-between items-center h-16">
      <!-- Logo -->
      <div class="flex items-center space-x-8">
        <a href="/" class="flex-shrink-0">
          <h1 class="text-2xl font-bold text-white">
            <i class="fas fa-cogs mr-2"></i>AutoPartsX
          </h1>
        </a>
        
        <!-- Navigation Links -->
        <div class="hidden md:flex items-center space-x-6">
          <a href="/" class="text-white hover:text-gray-300 font-medium transition-colors">Home</a>
          <a href="/products" class="text-white hover:text-gray-300 font-medium transition-colors">Products</a>
          <a href="/categories" class="text-white hover:text-gray-300 font-medium transition-colors">Categories</a>
          <a href="/about" class="text-white hover:text-gray-300 font-medium transition-colors">About</a>
          <a href="/contact" class="text-white hover:text-gray-300 font-medium transition-colors">Contact</a>
        </div>
      </div>

      <!-- Search Bar -->
      <div class="hidden lg:block flex-1 max-w-md mx-8">
        <div class="relative">
          <input type="text" placeholder="Search for auto parts..." 
                 class="w-full pl-10 pr-4 py-2 border border-white text-white rounded-lg focus:ring-2 focus:ring-white focus:border-white">
          <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
            <i class="fas fa-search text-white"></i>
          </div>
        </div>
      </div>

      <!-- Right side: Cart and Account -->
      <div class="flex items-center space-x-4">
        <!-- Cart -->
        <a href="/cart" class="relative p-2 text-white hover:text-gray-300 transition-colors">
          <i class="fas fa-shopping-cart text-xl"></i>
          <span class="absolute top-0 right-0 bg-emerald-600 text-white text-xs rounded-full h-5 w-5 flex items-center justify-center font-semibold">0</span>
        </a>

        <!-- Account Menu -->
        <div class="relative">
          <button id="account-menu-btn" class="flex items-center space-x-2 p-2 hover:bg-white/20 rounded-lg transition-colors">
            <i class="fas fa-user-circle text-xl text-white hover:text-blue-600"></i>
            <span class="hidden md:block text-sm font-medium text-white">Account</span>
            <i class="fas fa-chevron-down text-xs text-white hover:text-blue-600"></i>
          </button>
          
          <!-- Account Dropdown -->
          <div id="account-dropdown" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-lg shadow-lg py-2 z-50 border border-slate-200">
            <a href="/account" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
              <i class="fas fa-user mr-2"></i>My Account
            </a>
            <a href="/orders" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
              <i class="fas fa-shopping-bag mr-2"></i>My Orders
            </a>
            <a href="/favorites" class="block px-4 py-2 text-sm text-slate-700 hover:bg-slate-50">
              <i class="fas fa-heart mr-2"></i>Favorites
            </a>
            <hr class="my-2 border-slate-200">
            <a href="/login" class="block px-4 py-2 text-sm text-emerald-600 hover:bg-slate-50">
              <i class="fas fa-sign-in-alt mr-2"></i>Login
            </a>
          </div>
        </div>

        <!-- Mobile menu button -->
        <button id="mobile-menu-btn" class="md:hidden p-2 text-slate-700 hover:text-emerald-600 rounded-lg">
          <i class="fas fa-bars text-xl"></i>
        </button>
      </div>
    </div>
  </div>
</nav>

<script>
  // Account dropdown toggle
  document.getElementById('account-menu-btn')?.addEventListener('click', function(e) {
    e.stopPropagation();
    const dropdown = document.getElementById('account-dropdown');
    dropdown?.classList.toggle('hidden');
  });

  // Close dropdown when clicking outside
  document.addEventListener('click', function(e) {
    const dropdown = document.getElementById('account-dropdown');
    const btn = document.getElementById('account-menu-btn');
    if (dropdown && !dropdown.contains(e.target) && !btn?.contains(e.target)) {
      dropdown.classList.add('hidden');
    }
  });
</script>

