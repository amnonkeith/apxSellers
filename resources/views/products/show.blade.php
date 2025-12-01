<x-client-layout title="{{ $product['title'] ?? 'Product Details' }} - AutoPartsX">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8">
    <!-- Breadcrumb -->
    <nav class="mb-6 text-sm">
      <ol class="flex items-center space-x-2 text-slate-600">
        <li><a href="/" class="hover:text-emerald-600">Home</a></li>
        <li><i class="fas fa-chevron-right text-xs"></i></li>
        <li><a href="/products" class="hover:text-emerald-600">Products</a></li>
        <li><i class="fas fa-chevron-right text-xs"></i></li>
        <li class="text-slate-900 font-semibold">{{ $product['title'] ?? 'Product' }}</li>
      </ol>
    </nav>

    <div class="grid grid-cols-1 lg:grid-cols-2 gap-8 mb-12">
      <!-- Product Images -->
      <div class="bg-white rounded-xl border border-slate-200 p-6">
        <div class="mb-4">
          <img src="{{ $product['image'] ?? 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=600&h=400&fit=crop' }}" 
               alt="{{ $product['title'] ?? 'Product' }}" 
               class="w-full h-96 object-cover rounded-lg">
        </div>
        <div class="grid grid-cols-4 gap-4">
          <img src="{{ $product['image'] ?? 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=150&h=100&fit=crop' }}" 
               alt="Thumbnail 1" 
               class="w-full h-24 object-cover rounded-lg border-2 border-emerald-500 cursor-pointer">
          <img src="{{ $product['image'] ?? 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=150&h=100&fit=crop' }}" 
               alt="Thumbnail 2" 
               class="w-full h-24 object-cover rounded-lg border border-slate-200 cursor-pointer hover:border-emerald-500">
          <img src="{{ $product['image'] ?? 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=150&h=100&fit=crop' }}" 
               alt="Thumbnail 3" 
               class="w-full h-24 object-cover rounded-lg border border-slate-200 cursor-pointer hover:border-emerald-500">
          <img src="{{ $product['image'] ?? 'https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=150&h=100&fit=crop' }}" 
               alt="Thumbnail 4" 
               class="w-full h-24 object-cover rounded-lg border border-slate-200 cursor-pointer hover:border-emerald-500">
        </div>
      </div>

      <!-- Product Info -->
      <div class="bg-white rounded-xl border border-slate-200 p-8">
        <!-- Category and Stock -->
        <div class="flex items-center justify-between mb-4">
          <span class="text-sm font-semibold text-emerald-600 bg-emerald-50 px-3 py-1 rounded-full">
            {{ $product['category'] ?? 'Auto Parts' }}
          </span>
          @if(($product['stock'] ?? 0) > 0)
            <span class="text-sm font-semibold text-emerald-600">
              <i class="fas fa-check-circle mr-1"></i>In Stock
            </span>
          @else
            <span class="text-sm font-semibold text-red-600">
              <i class="fas fa-times-circle mr-1"></i>Out of Stock
            </span>
          @endif
        </div>

        <!-- Title -->
        <h1 class="text-3xl font-bold text-slate-900 mb-4">{{ $product['title'] ?? 'OEM Brake Pads - Honda Civic 2018' }}</h1>

        <!-- Price -->
        <div class="mb-6">
          <span class="text-4xl font-black text-emerald-600">${{ number_format($product['price'] ?? 89.99, 2) }}</span>
          <span class="text-slate-500 ml-2">per unit</span>
        </div>

        <!-- Condition and Part Number -->
        <div class="grid grid-cols-2 gap-4 mb-6">
          <div>
            <p class="text-sm text-slate-600 mb-1">Condition</p>
            <p class="font-semibold text-slate-900">{{ $product['condition'] ?? 'New' }}</p>
          </div>
          <div>
            <p class="text-sm text-slate-600 mb-1">Part Number</p>
            <p class="font-semibold text-slate-900 font-mono">BP-HC-2018-OEM</p>
          </div>
        </div>

        <!-- Vehicle Compatibility -->
        <div class="mb-6 p-4 bg-blue-50 rounded-lg border border-blue-200">
          <p class="text-sm font-semibold text-blue-900 mb-2">
            <i class="fas fa-car mr-2"></i>Vehicle Compatibility
          </p>
          <p class="text-blue-700">Honda Civic 2018</p>
        </div>

        <!-- Quantity and Add to Cart -->
        <div class="mb-6">
          <label class="block text-sm font-semibold text-slate-700 mb-2">Quantity</label>
          <div class="flex items-center space-x-4">
            <div class="flex items-center border border-slate-300 rounded-lg">
              <button class="px-4 py-2 text-slate-600 hover:bg-slate-50" onclick="decreaseQuantity()">
                <i class="fas fa-minus"></i>
              </button>
              <input type="number" id="quantity" value="1" min="1" max="{{ $product['stock'] ?? 15 }}" 
                     class="w-20 px-4 py-2 text-center border-0 focus:ring-0">
              <button class="px-4 py-2 text-slate-600 hover:bg-slate-50" onclick="increaseQuantity()">
                <i class="fas fa-plus"></i>
              </button>
            </div>
            <span class="text-sm text-slate-500">
              {{ $product['stock'] ?? 15 }} available
            </span>
          </div>
        </div>

        <!-- Action Buttons -->
        <div class="space-y-3 mb-6">
          @if(($product['stock'] ?? 0) > 0)
            <button onclick="addToCart({{ $product['id'] ?? 1 }})" class="w-full bg-gradient-to-r from-emerald-500 to-emerald-600 text-white px-6 py-4 rounded-lg font-semibold hover:from-emerald-600 hover:to-emerald-700 transition-all transform hover:scale-105 shadow-lg hover:shadow-xl">
              <i class="fas fa-shopping-cart mr-2"></i>Add to Cart
            </button>
          @else
            <button disabled class="w-full bg-slate-300 text-slate-500 px-6 py-4 rounded-lg font-semibold cursor-not-allowed">
              Out of Stock
            </button>
          @endif
          <div class="flex space-x-3">
            <button class="flex-1 border-2 border-slate-300 text-slate-700 px-6 py-4 rounded-lg font-semibold hover:bg-slate-50 transition-colors">
              <i class="far fa-heart mr-2"></i>Add to Favorites
            </button>
            <button class="flex-1 border-2 border-slate-300 text-slate-700 px-6 py-4 rounded-lg font-semibold hover:bg-slate-50 transition-colors">
              <i class="fas fa-share-alt mr-2"></i>Share
            </button>
          </div>
        </div>

        <!-- Shipping Info -->
        <div class="border-t border-slate-200 pt-6">
          <div class="flex items-start space-x-3 text-sm">
            <i class="fas fa-truck text-emerald-600 mt-1"></i>
            <div>
              <p class="font-semibold text-slate-900">Free Shipping</p>
              <p class="text-slate-600">On orders over $50. Estimated delivery: 3-5 business days</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Product Details Tabs -->
    <div class="bg-white rounded-xl border border-slate-200 mb-8">
      <div class="border-b border-slate-200">
        <nav class="flex space-x-8 px-6">
          <button class="py-4 px-2 border-b-2 border-emerald-600 font-semibold text-emerald-600">
            Description
          </button>
          <button class="py-4 px-2 text-slate-600 hover:text-emerald-600 font-semibold">
            Specifications
          </button>
          <button class="py-4 px-2 text-slate-600 hover:text-emerald-600 font-semibold">
            Reviews (12)
          </button>
        </nav>
      </div>
      <div class="p-8">
        <h3 class="text-xl font-bold text-slate-900 mb-4">Product Description</h3>
        <p class="text-slate-700 leading-relaxed mb-4">
          High-quality OEM brake pads specifically designed for Honda Civic 2018. These brake pads offer superior stopping power, reduced noise, and extended durability. Made with premium materials and precision engineering to ensure perfect fit and optimal performance.
        </p>
        <h4 class="font-semibold text-slate-900 mb-2">Key Features:</h4>
        <ul class="list-disc list-inside space-y-2 text-slate-700 mb-4">
          <li>OEM quality and specifications</li>
          <li>Low noise and vibration</li>
          <li>Extended service life</li>
          <li>Perfect fit guarantee</li>
          <li>Manufacturer warranty included</li>
        </ul>
      </div>
    </div>

    <!-- Related Products -->
    <div class="mb-8">
      <h2 class="text-2xl font-bold text-slate-900 mb-6">Related Products</h2>
      <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        <x-product-card 
          :id="9"
          image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
          title="Brake Rotors - Honda Civic"
          :price="125.00"
          :stock="10"
          condition="New"
          category="Brakes"
          :isFavorite="false"
        />
        <x-product-card 
          :id="10"
          image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
          title="Brake Fluid - DOT 4"
          :price="18.99"
          :stock="25"
          condition="New"
          category="Brakes"
          :isFavorite="false"
        />
        <x-product-card 
          :id="11"
          image="https://images.unsplash.com/photo-1558618666-fcd25c85cd64?w=400&h=250&fit=crop"
          title="Brake Calipers - Front"
          :price="199.99"
          :stock="5"
          condition="Refurbished"
          category="Brakes"
          :isFavorite="false"
        />
        <x-product-card 
          :id="12"
          image="https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?w=400&h=250&fit=crop"
          title="Brake Lines - Stainless Steel"
          :price="45.99"
          :stock="15"
          condition="New"
          category="Brakes"
          :isFavorite="false"
        />
      </div>
    </div>
  </div>

  <script>
    function increaseQuantity() {
      const input = document.getElementById('quantity');
      const max = parseInt(input.getAttribute('max'));
      const current = parseInt(input.value);
      if (current < max) {
        input.value = current + 1;
      }
    }

    function decreaseQuantity() {
      const input = document.getElementById('quantity');
      const current = parseInt(input.value);
      if (current > 1) {
        input.value = current - 1;
      }
    }

    function addToCart(productId) {
      const quantity = document.getElementById('quantity').value;
      alert(`Added ${quantity} item(s) to cart!`);
      // Implement actual cart functionality here
    }
  </script>
</x-client-layout>

