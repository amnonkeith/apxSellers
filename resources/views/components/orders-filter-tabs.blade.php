@props(['active' => 'all'])

<div class="bg-white rounded-xl border border-slate-200 p-6 mb-6">
  <div class="flex items-center space-x-4 border-b border-slate-200 pb-4 overflow-x-auto">
    <a href="/orders" class="px-4 py-2 font-semibold {{ $active === 'all' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-slate-600 hover:text-blue-600' }} whitespace-nowrap">
      All Orders
    </a>
    <a href="/orders/pending" class="px-4 py-2 font-semibold {{ $active === 'pending' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-slate-600 hover:text-blue-600' }} whitespace-nowrap">
      Pending
    </a>
    <a href="/orders/shipped" class="px-4 py-2 font-semibold {{ $active === 'shipped' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-slate-600 hover:text-blue-600' }} whitespace-nowrap">
      Shipped
    </a>
    <a href="/orders/delivered" class="px-4 py-2 font-semibold {{ $active === 'delivered' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-slate-600 hover:text-blue-600' }} whitespace-nowrap">
      Delivered
    </a>
    <a href="/orders/cancelled" class="px-4 py-2 font-semibold {{ $active === 'cancelled' ? 'text-blue-600 border-b-2 border-blue-600' : 'text-slate-600 hover:text-blue-600' }} whitespace-nowrap">
      Cancelled
    </a>
  </div>
</div>

