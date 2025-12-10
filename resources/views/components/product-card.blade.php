<!-- Product Card for Client View -->
<div class="group bg-white rounded-xl border border-slate-200 overflow-hidden hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
  <div class="relative overflow-hidden">
    <a href="/products/{{ $id }}">
      <img src="{{ $image }}" alt="{{ $title }}" class="w-full h-64 object-cover group-hover:scale-110 transition-transform duration-500">
    </a>
    
    <!-- Discount Badge (AliExpress Style) -->
    @if(isset($discount) && $discount > 0)
      <span class="absolute top-2 left-2 px-2 py-1 bg-red-500 text-white text-xs font-bold rounded">
        -{{ $discount }}%
      </span>
    @endif

    <!-- Favorite Button -->
    <button class="absolute top-4 right-4 p-2 bg-white/90 backdrop-blur-sm rounded-full shadow-lg hover:bg-white transition-all opacity-0 group-hover:opacity-100">
      <i class="{{ $isFavorite ?? false ? 'fas' : 'far' }} fa-heart {{ $isFavorite ?? false ? 'text-red-500' : 'text-slate-400' }}"></i>
    </button>

    <!-- Stock Badge -->
    @if($stock > 0)
      <span class="absolute bottom-2 left-2 px-2 py-1 bg-emerald-500/90 text-white text-xs font-semibold rounded">
        In Stock
      </span>
    @else
      <span class="absolute bottom-2 left-2 px-2 py-1 bg-red-500/90 text-white text-xs font-semibold rounded">
        Out of Stock
      </span>
    @endif
  </div>
  
  <div class="p-5">
    <!-- Company Logo and Name -->
    @if(isset($companyName) || isset($companyLogo))
      <div class="flex items-center space-x-2 mb-2">
        @if(isset($companyLogo) && $companyLogo)
          <img src="{{ $companyLogo }}" alt="{{ $companyName ?? 'Company' }}" class="h-5 w-auto object-contain max-w-[80px]">
        @endif
        @if(isset($companyName) && $companyName)
          <span class="text-xs font-semibold text-slate-600">{{ $companyName }}</span>
        @endif
      </div>
    @endif

    <!-- Category -->
    <div class="mb-2">
      <span class="text-xs font-semibold text-emerald-600 bg-emerald-50 px-2 py-1 rounded">
        {{ $category }}
      </span>
    </div>

    <!-- Title -->
    <a href="/products/{{ $id }}">
      <h3 class="font-bold text-slate-900 mb-2 text-lg group-hover:text-emerald-600 transition-colors line-clamp-2">
        {{ $title }}
      </h3>
    </a>

    <!-- Condition -->
    <p class="text-sm text-slate-500 mb-2">
      <i class="fas fa-tag mr-1"></i>{{ $condition }}
    </p>

    <!-- Ratings (Amazon Style) -->
    @if(isset($rating) && $rating > 0)
      <div class="flex items-center space-x-2 mb-3">
        <div class="flex items-center">
          @for($i = 1; $i <= 5; $i++)
            @if($i <= floor($rating))
              <i class="fas fa-star text-yellow-400 text-xs"></i>
            @elseif($i - 0.5 <= $rating)
              <i class="fas fa-star-half-alt text-yellow-400 text-xs"></i>
            @else
              <i class="far fa-star text-yellow-400 text-xs"></i>
            @endif
          @endfor
        </div>
        <span class="text-xs text-emerald-600 hover:text-emerald-700 font-semibold">{{ number_format($rating, 1) }}</span>
        @if(isset($reviews) && $reviews > 0)
          <span class="text-xs text-slate-500">({{ $reviews }})</span>
        @endif
      </div>
    @endif
    
    <!-- Price and Stock -->
    <div class="flex items-center justify-between mb-4">
      <div>
        @if(isset($originalPrice) && $originalPrice > $price)
          <div class="flex items-center space-x-2">
            <span class="text-2xl font-black text-emerald-600">${{ number_format($price, 2) }}</span>
            <span class="text-sm text-slate-400 line-through">${{ number_format($originalPrice, 2) }}</span>
          </div>
        @else
          <span class="text-2xl font-black text-emerald-600">${{ number_format($price, 2) }}</span>
        @endif
      </div>
      @if($stock > 0)
        <span class="text-xs text-slate-500">
          <i class="fas fa-boxes mr-1"></i>{{ $stock }}
        </span>
      @endif
    </div>
    
    <!-- Action Buttons -->
    <div class="flex space-x-2">
      @if($stock > 0)
        <button onclick="addToCart({{ $id }})" class="flex-1 bg-linear-to-r from-emerald-500 to-emerald-600 text-white px-4 py-3 rounded-lg text-sm font-semibold hover:from-emerald-600 hover:to-emerald-700 transition-all transform hover:scale-105 shadow-md hover:shadow-lg">
          <i class="fas fa-shopping-cart mr-2"></i>Add to Cart
        </button>
      @else
        <button disabled class="flex-1 bg-slate-300 text-slate-500 px-4 py-3 rounded-lg text-sm font-semibold cursor-not-allowed">
          Out of Stock
        </button>
      @endif
      <a href="/products/{{ $id }}" class="px-4 py-3 border border-slate-300 text-slate-700 rounded-lg hover:bg-slate-50 transition-colors">
        <i class="fas fa-eye"></i>
      </a>
    </div>
  </div>
</div>

<script>
function addToCart(productId) {
  // This will be implemented with actual cart functionality
  alert('Product added to cart!');
  // You can add AJAX call here to add to cart
}
</script>

