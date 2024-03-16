<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="{{asset('backend/assets/images/logo-icon.png')}}" class="logo-icon" alt="logo icon">
        </div>
        <div>
            <h4 class="logo-text">Admin Dash</h4>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-arrow-back'></i>
        </div>
     </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{route('admin.dashboard')}}" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-home-alt'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li class="menu-label">Manage Content</li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Cart</div>
            </a>
            <ul>
                <li> <a href="ecommerce-products.html"><i class='bx bx-radio-circle'></i>Products</a>
                </li>
                <li> <a href="ecommerce-products-details.html"><i class='bx bx-radio-circle'></i>Product Details</a>
                {{-- </li>
                <li> <a href="ecommerce-add-new-products.html"><i class='bx bx-radio-circle'></i>Add New Products</a>
                </li>
                <li> <a href="ecommerce-orders.html"><i class='bx bx-radio-circle'></i>Orders</a>
                </li> --}}
            </ul>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-repeat"></i>
                </div>
                <div class="menu-title">Our Menu</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.category')}}"><i class='bx bx-radio-circle'></i>Category</a>
                </li>
                <li> <a href="{{route('admin.all.food')}}"><i class='bx bx-radio-circle'></i>Food</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('admin.all.chef')}}" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Chef</div>
            </a>
        </li>
        <li>
            <a href="{{route('admin.all.testimonial')}}" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Testimonial</div>
            </a>
        </li>
        <li>
            <a class="has-arrow" href="javascript:;">
                <div class="parent-icon"><i class="bx bx-repeat"></i>
                </div>
                <div class="menu-title">Blog</div>
            </a>
            <ul>
                <li> <a href="{{route('admin.all.blog')}}"><i class='bx bx-radio-circle'></i>BlogCategory</a>
                </li>
                <li> <a href="{{route('admin.all.post')}}"><i class='bx bx-radio-circle'></i>Post</a>
                </li>
                <li> <a href="{{route('admin.all.comment')}}"><i class='bx bx-radio-circle'></i>Comment</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="{{route('admin.all.setting')}}" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-cart'></i>
                </div>
                <div class="menu-title">Setting</div>
            </a>
        </li>
    </ul>
    <!--end navigation-->
</div>
