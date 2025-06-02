
<!DOCTYPE html>
<html lang="en">
<head>
@include('home.css')
</head>
<body>
   
@include('home.header')
    <!-- Hero Section -->
    <section class="featured-products">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Product Details</h2>
                <p class="section-description">Hand-picked items just for you</p>
            </div>
             <img width="400" height="300"  src="/products/{{$data->image}}" alt="">
            

            <div class="products-grid">
               
                   
              
                <div class="product-card">
                    
                    <div class="product-image-container">
                        
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
                        <h3 class="product-title">{{$data->title}}</h3>
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
                                <span class="current-price">${{$data->price}}</span>
                                <!-- <span class="original-price">$149.99</span> -->
                            </div>
                            <button class="add-to-cart-btn">Add to Cart</button>
                        </div>
                        <br>
                         

                        
                    
                    </div>
                    
                </div>

                <div class="product-content">


                            <h1>Category:</h1>
                                <span class="product-title">{{$data->category}}</span>
                                <!-- <span class="original-price">$149.99</span> -->
                           <br>
                            <br>
                              
                               
                                <span class="product-title">Available Quantity:</span>

                                <br>
                                 <br>
                                <span class="product-title">{{$data->quantity}}</span>

                               
                                <!-- <span class="original-price">$149.99</span> -->
                            </div>
                             
             

               
        </div>
        
                                 <h1>Description</h1>
                                <p>{{$data->Description}}</p>
    </section>


    <!-- Newsletter Section -->
    @include('home.newsletter')
    <!-- Footer -->
    
@include('home.footer')
    <script src="script.js"></script>
</body>
</html>