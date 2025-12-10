@props(['active' => 'account'])

<div class="bg-white rounded-xl border border-slate-200 p-6 sticky top-24 space-y-2">
  <a href="/account" class="flex items-center space-x-3 px-4 py-3 rounded-lg {{ $active === 'account' ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-slate-50 text-slate-700 transition-colors' }}">
    <i class="fas fa-user {{ $active === 'account' ? 'text-blue-600' : 'text-slate-600' }}"></i>
    <span>My Account</span>
  </a>
  <a href="/orders" class="flex items-center space-x-3 px-4 py-3 rounded-lg {{ $active === 'orders' ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-slate-50 text-slate-700 transition-colors' }}">
    <i class="fas fa-shopping-bag {{ $active === 'orders' ? 'text-blue-600' : 'text-slate-600' }}"></i>
    <span>My Orders</span>
  </a>
  <a href="/favorites" class="flex items-center space-x-3 px-4 py-3 rounded-lg {{ $active === 'favorites' ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-slate-50 text-slate-700 transition-colors' }}">
    <i class="fas fa-heart {{ $active === 'favorites' ? 'text-blue-600' : 'text-slate-600' }}"></i>
    <span>Favorites</span>
  </a>
  <hr class="my-2 border-slate-200">
  <a href="/account/addresses" class="flex items-center space-x-3 px-4 py-3 rounded-lg {{ $active === 'addresses' ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-slate-50 text-slate-700 transition-colors' }}">
    <i class="fas fa-map-marker-alt {{ $active === 'addresses' ? 'text-blue-600' : 'text-slate-600' }}"></i>
    <span>Addresses</span>
  </a>
  <a href="/account/payment" class="flex items-center space-x-3 px-4 py-3 rounded-lg {{ $active === 'payment' ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-slate-50 text-slate-700 transition-colors' }}">
    <i class="fas fa-credit-card {{ $active === 'payment' ? 'text-blue-600' : 'text-slate-600' }}"></i>
    <span>Payment Methods</span>
  </a>
  <a href="/account/settings" class="flex items-center space-x-3 px-4 py-3 rounded-lg {{ $active === 'settings' ? 'bg-blue-50 text-blue-600 font-semibold' : 'hover:bg-slate-50 text-slate-700 transition-colors' }}">
    <i class="fas fa-cog {{ $active === 'settings' ? 'text-blue-600' : 'text-slate-600' }}"></i>
    <span>Settings</span>
  </a>
</div>

