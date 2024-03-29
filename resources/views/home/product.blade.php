<section class="latest-products spad">
        <div class="container">
            <div class="product-filter">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="section-title">
                            <h2>Latest Products</h2>
                        </div>
                        <br><br>
                        <div>
            <form action="{{url('product_search')}}" method="GET">
            @csrf
               <input style="width:500;" type="text" name="search" placeholder="Search For Something">
               <input type="submit" value="search">

            </form>

            </div>
                       
                    </div>
                </div>
            </div>
          
              
</div>
            <div class="row">
               @foreach($product as $products)
               <div class="col-sm-6 col-md-4 col-lg-4">
                  <div class="box">
                     <div class="option_container">
                        <div class="options">
                           <a href="{{url('product_details',$products->id)}}" class="option1">
                        product_details
                           </a>
                     <form action="{{url('add_cart',$products->id)}}" method="post">
                        @csrf

                           <div class="row">

                           <div class="col-md-4">
                           <input type="number"  name="quantity" value="1"  min="1" style="width: 100px">
                           </div>
                     
                           <div class="col-md-4">
                           <input type="submit" value="Add To Cart">
                           </div>

                              </div>


                     </form>



                        </div>
                     </div>
                     <div class="img-box">
                        <img src="product/{{$products->image}}" alt="">
                     </div>
                     <div class="detail-box">
                        <h5>
                           {{$products->title}}
                        </h5>

                       <h6 style="color:blue">
                       Discount price
                        
                          ${{$products->discount_price}}
                          
                        </h6>
                        

                        <h6 style="text-decoration: line-through;color:red">Price
                         ${{$products->price}}
                        </h6>
                     </div>
                  </div>
               </div>
          
         @endforeach
         <span style="padding-top:20px;">

         {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
         </span>
      </div>
      </section> 