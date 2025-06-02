 <section class="featured-products">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Featured Products</h2>
                <p class="section-description">Hand-picked items just for you</p>
            </div>

            <div class="products-grid">
                @foreach ($product as $products)
                    
              
                <div class="product-card">
                    <div class="product-image-container">
                        <img src="products/{{$products->image}}" alt="Wireless Bluetooth Headphones" class="product-image">
                        <span class="product-badge badge-best-seller">Best Seller</span>
                        <button class="wishlist-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                        </button>
                        <button class="quick-add-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z"></path>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z"></path>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6"></path>
                            </svg>
                        </button>
                    </div>

                    
                    <div class="product-content">
                        <h3 class="product-title">{{$products->title}}</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                            </div>
                            <span class="review-count">(124)</span>
                        </div>
                        <div class="product-pricing">
                            <div class="price-container">
                                <span class="current-price">${{$products->price}}</span>
                                <!-- <span class="original-price">$149.99</span> -->
                            </div>
                            <a class="newsletter-btn" href="{{url('add_cart', $products->id)}}">Add to Cart</a>
                            <!-- <button class="add-to-cart-btn">Add to Cart</button> -->
                        </div>
                        <br>

                        
                        <div>
                            <a class="newsletter-btn" href="{{url('product_details', $products->id)}}">Details</a>
                        </div>
                    </div>
                </div>
                @endforeach

                <!-- <div class="product-card">
                    <div class="product-image-container">
                        <img src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=400&fit=crop&crop=center" alt="Premium Cotton T-Shirt" class="product-image">
                        <span class="product-badge badge-new">New</span>
                        <button class="wishlist-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                        </button>
                        <button class="quick-add-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z"></path>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z"></path>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">Premium Cotton T-Shirt</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star">★</span>
                            </div>
                            <span class="review-count">(89)</span>
                        </div>
                        <div class="product-pricing">
                            <div class="price-container">
                                <span class="current-price">$29.99</span>
                                <span class="original-price">$39.99</span>
                            </div>
                            <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="product-card">
                    <div class="product-image-container">
                        <img src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&h=400&fit=crop&crop=center" alt="Smart Fitness Watch" class="product-image">
                        <span class="product-badge badge-sale">Sale</span>
                        <button class="wishlist-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                        </button>
                        <button class="quick-add-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z"></path>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z"></path>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">Smart Fitness Watch</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                            </div>
                            <span class="review-count">(256)</span>
                        </div>
                        <div class="product-pricing">
                            <div class="price-container">
                                <span class="current-price">$199.99</span>
                                <span class="original-price">$299.99</span>
                            </div>
                            <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="product-card">
                    <div class="product-image-container">
                        <img src="https://images.unsplash.com/photo-1606983340126-99ab4feaa64a?w=400&h=400&fit=crop&crop=center" alt="Professional Camera Lens" class="product-image">
                        <span class="product-badge badge-limited">Limited</span>
                        <button class="wishlist-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                        </button>
                        <button class="quick-add-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z"></path>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z"></path>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">Professional Camera Lens</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star">★</span>
                            </div>
                            <span class="review-count">(78)</span>
                        </div>
                        <div class="product-pricing">
                            <div class="price-container">
                                <span class="current-price">$399.99</span>
                                <span class="original-price">$499.99</span>
                            </div>
                            <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div> -->

                <!-- <div class="product-card">
                    <div class="product-image-container">
                        <img src="https://images.unsplash.com/photo-1595777457583-95e059d581b8?w=400&h=400&fit=crop&crop=center" alt="Elegant Summer Dress" class="product-image">
                        <span class="product-badge badge-trending">Trending</span>
                        <button class="wishlist-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                        </button>
                        <button class="quick-add-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z"></path>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z"></path>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">Elegant Summer Dress</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star">★</span>
                            </div>
                            <span class="review-count">(167)</span>
                        </div>
                        <div class="product-pricing">
                            <div class="price-container">
                                <span class="current-price">$79.99</span>
                                <span class="original-price">$119.99</span>
                            </div>
                            <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>

                <div class="product-card">
                    <div class="product-image-container">
                        <img src="https://images.unsplash.com/photo-1541140532154-b024d705b90a?w=400&h=400&fit=crop&crop=center" alt="Gaming Mechanical Keyboard" class="product-image">
                        <span class="product-badge badge-hot">Hot</span>
                        <button class="wishlist-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M20.84 4.61a5.5 5.5 0 0 0-7.78 0L12 5.67l-1.06-1.06a5.5 5.5 0 0 0-7.78 7.78l1.06 1.06L12 21.23l7.78-7.78 1.06-1.06a5.5 5.5 0 0 0 0-7.78z"></path>
                            </svg>
                        </button>
                        <button class="quick-add-btn">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                                <path d="M9 22C9.55228 22 10 21.5523 10 21C10 20.4477 9.55228 20 9 20C8.44772 20 8 20.4477 8 21C8 21.5523 8.44772 22 9 22Z"></path>
                                <path d="M20 22C20.5523 22 21 21.5523 21 21C21 20.4477 20.5523 20 20 20C19.4477 20 19 20.4477 19 21C19 21.5523 19.4477 22 20 22Z"></path>
                                <path d="M1 1H5L7.68 14.39C7.77144 14.8504 8.02191 15.264 8.38755 15.5583C8.75318 15.8526 9.2107 16.009 9.68 16H19.4C19.8693 16.009 20.3268 15.8526 20.6925 15.5583C21.0581 15.264 21.3086 14.8504 21.4 14.39L23 6H6"></path>
                            </svg>
                        </button>
                    </div>
                    <div class="product-content">
                        <h3 class="product-title">Gaming Mechanical Keyboard</h3>
                        <div class="product-rating">
                            <div class="stars">
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                                <span class="star filled">★</span>
                            </div>
                            <span class="review-count">(203)</span>
                        </div>
                        <div class="product-pricing">
                            <div class="price-container">
                                <span class="current-price">$149.99</span>
                                <span class="original-price">$199.99</span>
                            </div>
                            <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div> -->

            <!-- <div class="view-all-container">
                <button class="btn btn-dark">View All Products</button>
            </div> -->
        </div>
    </section>