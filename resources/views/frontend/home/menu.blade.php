<section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
            <div class="col-md-7 text-center heading-section ftco-animate">
                <span class="subheading">Specialties</span>
                <h2 class="mb-4">Our Menu</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Breakfast</h3>
                    </div>
                    @php
                    //   $categories = App\Models\Category::where('category_name','BREAKFAST')->get();
                    //   $menu =$categories->foods;
                    //   $foods = App\Models\Food::limit(3)->get();
                    $category = App\Models\Category::find(1);
                    $foods = $category->foods;
                @endphp
            {{-- @if (  $foods->foods->category_name == 'BREAKFAST') --}}
                @foreach ( $foods as  $food )
                <div class="menus d-flex ftco-animate">
                    <div class="menu-img img" style="background-image: url('{{$food->food_image}}');"></div>
                    <div class="text">
                        <div class="d-flex">
                            <div class="one-half">
                                <h3>{{ $food->food_name}}</h3>
                            </div>
                            <div class="one-forth">
                                <span class="price">${{ $food->price}}</span>
                            </div>
                        </div>
                        <p>{{ $food->food_description}}</p>
                    </div>
                </div>
                @endforeach
                {{-- @endif --}}
                    {{-- <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/breakfast-1.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div> --}}
                    {{-- <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/breakfast-2.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    <div class="menus border-bottom-0 d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/breakfast-3.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div> --}}
                    <span class="flat flaticon-bread" style="left: 0;"></span>
                    <span class="flat flaticon-breakfast" style="right: 0;"></span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Lunch</h3>
                    </div>
                    @php
                    //   $categories = App\Models\Category::where('category_name','BREAKFAST')->get();
                    //   $menu =$categories->foods;
                    //   $foods = App\Models\Food::limit(3)->get();
                    $category = App\Models\Category::find(3);
                    $foods = $category->foods;
                @endphp
               @foreach ( $foods as  $food )
               <div class="menus d-flex ftco-animate">
                   <div class="menu-img img" style="background-image: url('{{$food->food_image}}');"></div>
                   <div class="text">
                       <div class="d-flex">
                           <div class="one-half">
                               <h3>{{ $food->food_name}}</h3>
                           </div>
                           <div class="one-forth">
                               <span class="price">${{ $food->price}}</span>
                           </div>
                       </div>
                       <p>{{ $food->food_description}}</p>
                   </div>
               </div>
               @endforeach
                    {{-- <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/lunch-1.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/lunch-2.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    <div class="menus border-bottom-0 d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/lunch-3.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div> --}}
                    <span class="flat flaticon-pizza" style="left: 0;"></span>
                    <span class="flat flaticon-chicken" style="right: 0;"></span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Dinner</h3>
                    </div>
                    @php
                    //   $categories = App\Models\Category::where('category_name','BREAKFAST')->get();
                    //   $menu =$categories->foods;
                    //   $foods = App\Models\Food::limit(3)->get();
                    $category = App\Models\Category::find(15);
                    $foods = $category->foods;
                @endphp
                      @foreach ( $foods as  $food )
                      <div class="menus d-flex ftco-animate">
                          <div class="menu-img img" style="background-image: url('{{$food->food_image}}');"></div>
                          <div class="text">
                              <div class="d-flex">
                                  <div class="one-half">
                                      <h3>{{ $food->food_name}}</h3>
                                  </div>
                                  <div class="one-forth">
                                      <span class="price">${{ $food->price}}</span>
                                  </div>
                              </div>
                              <p>{{ $food->food_description}}</p>
                          </div>
                      </div>
                      @endforeach
                    {{-- <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/dinner-1.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/dinner-2.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    <div class="menus border-bottom-0 d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/dinner-3.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div> --}}
                    <span class="flat flaticon-omelette" style="left: 0;"></span>
                    <span class="flat flaticon-burger" style="right: 0;"></span>
                </div>
            </div>

            <!--  -->
            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Desserts</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/dessert-1.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/dessert-2.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    <div class="menus border-bottom-0 d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/dessert-3.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    <span class="flat flaticon-cupcake" style="left: 0;"></span>
                    <span class="flat flaticon-ice-cream" style="right: 0;"></span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Wine Card</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/wine-1.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/wine-2.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    <div class="menus border-bottom-0 d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/wine-3.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    <span class="flat flaticon-wine" style="left: 0;"></span>
                    <span class="flat flaticon-wine-1" style="right: 0;"></span>
                </div>
            </div>

            <div class="col-md-6 col-lg-4">
                <div class="menu-wrap">
                    <div class="heading-menu text-center ftco-animate">
                        <h3>Drinks &amp; Tea</h3>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/drink-1.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    <div class="menus d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/drink-2.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    <div class="menus border-bottom-0 d-flex ftco-animate">
                        <div class="menu-img img" style="background-image: url(images/drink-3.jpg);"></div>
                        <div class="text">
                            <div class="d-flex">
                                <div class="one-half">
                                    <h3>Beef Roast Source</h3>
                                </div>
                                <div class="one-forth">
                                    <span class="price">$29</span>
                                </div>
                            </div>
                            <p><span>Meat</span>, <span>Potatoes</span>, <span>Rice</span>, <span>Tomatoe</span></p>
                        </div>
                    </div>
                    <span class="flat flaticon-wine" style="left: 0;"></span>
                    <span class="flat flaticon-wine-1" style="right: 0;"></span>
                </div>
            </div>
        </div>
    </div>

</section>
