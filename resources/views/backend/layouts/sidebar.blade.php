<!-- sidebar -->
<div class="sidebar px-4 py-4 py-md-5 me-0">
    <div class="d-flex flex-column h-100">
        <a href="{{ route('admin') }}" class="mb-0 brand-icon">
            <span class="logo-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-clipboard-check" viewBox="0 0 448 512">
                    <path d="M112 112C112 50.14 162.1 0 224 0C285.9 0 336 50.14 336 112V160H400C426.5 160 448 181.5 448 208V416C448 469 405 512 352 512H96C42.98 512 0 469 0 416V208C0 181.5 21.49 160 48 160H112V112zM160 160H288V112C288 76.65 259.3 48 224 48C188.7 48 160 76.65 160 112V160zM136 256C149.3 256 160 245.3 160 232C160 218.7 149.3 208 136 208C122.7 208 112 218.7 112 232C112 245.3 122.7 256 136 256zM312 208C298.7 208 288 218.7 288 232C288 245.3 298.7 256 312 256C325.3 256 336 245.3 336 232C336 218.7 325.3 208 312 208z"/></svg>
                </span>
            <span class="logo-text">Chowkbazaar</span>
        </a>
        <!-- Menu: main ul -->

        <ul class="menu-list flex-grow-1 mt-3">
            <li class="collapsed">
                <a class="m-link active" href="{{ route('admin') }}">
                    <i class="icofont-home fs-5"></i> <span>Dashboard</span></a>
            </li>
            <li  class="collapsed">
                <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#banners-Components" href="">
                <i class="icofont-list"></i><span>Banners</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <ul class="sub-menu collapse" id="banners-Components">
                    <li><a class="ms-link" href="{{ route('banners.index') }}"><span>All Banners</span></a></li>
                    <li><a class="ms-link" href="{{ route('banners.create') }}"><span>Add Banner</span></a></li>
                </ul>
            </li>
            <li  class="collapsed">
                <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#categories-Components" href="">
                    <i class="icofont-briefcase"></i><span>Categories</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <ul class="sub-menu collapse" id="categories-Components">
                    <li><a class="ms-link" href=""><span>All Categories</span></a></li>
                    <li><a class="ms-link" href=""><span>Add Category</span></a></li>
                </ul>
            </li>
            <li  class="collapsed">
                <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#products-Components" href="">
                    <i class="icofont-jacket"></i><span>Products</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <ul class="sub-menu collapse" id="products-Components">
                    <li><a class="ms-link" href=""><span>All Products</span></a></li>
                    <li><a class="ms-link" href=""><span>Add Product</span></a></li>
                </ul>
            </li>

            <li  class="collapsed">
                <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#posts-category-Components" href="">
                    <i class="icofont-fountain-pen"></i><span>Post Categories</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <ul class="sub-menu collapse" id="posts-category-Components">
                    <li><a class="ms-link" href=""><span>All Posts Categories</span></a></li>
                    <li><a class="ms-link" href=""><span>Add Post Category</span></a></li>
                </ul>
            </li>

            <li  class="collapsed">
                <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#posts-tags-Components" href="">
                    <i class="icofont-tags"></i><span>Post Tags</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <ul class="sub-menu collapse" id="posts-tags-Components">
                    <li><a class="ms-link" href=""><span>All Post Tags</span></a></li>
                    <li><a class="ms-link" href=""><span>Add Post Tag</span></a></li>
                </ul>
            </li>
           
            <li  class="collapsed">
                <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#posts-Components" href="">
                    <i class="icofont-history"></i><span>Posts</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <ul class="sub-menu collapse" id="posts-Components">
                    <li><a class="ms-link" href=""><span>All Posts</span></a></li>
                    <li><a class="ms-link" href=""><span>Add Post</span></a></li>
                </ul>
            </li>

            <li  class="collapsed">
                <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#coupons-Components" href="">
                    <i class="icofont-sale-discount"></i><span>Coupons</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <ul class="sub-menu collapse" id="coupons-Components">
                    <li><a class="ms-link" href=""><span>All Coupons</span></a></li>
                    <li><a class="ms-link" href=""><span>Add Coupon</span></a></li>
                </ul>
            </li>

            <li  class="collapsed">
                <a class="m-link"  data-bs-toggle="collapse" data-bs-target="#users-Components" href="">
                    <i class="icofont-users"></i><span>Users</span> <span class="arrow icofont-dotted-down ms-auto text-end fs-5"></span></a>
                <ul class="sub-menu collapse" id="users-Components">
                    <li><a class="ms-link" href=""><span>All Users</span></a></li>
                    <li><a class="ms-link" href=""><span>Add User</span></a></li>
                </ul>
            </li>

            <li class="collapsed">
                <a class="m-link" href="{{ route('admin') }}">
                    <i class="icofont-price fs-5"></i> <span>Orders</span></a>
            </li>

            <li class="collapsed">
                <a class="m-link" href="{{ route('admin') }}">
                    <i class="icofont-food-basket fs-5"></i> <span>Carts</span></a>
            </li>
            <li class="collapsed">
                <a class="m-link" href="{{ route('admin') }}">
                    <i class="icofont-speech-comments fs-5"></i> <span>Comments</span></a>
            </li>
            <li class="collapsed">
                <a class="m-link" href="{{ route('admin') }}">
                    <i class="icofont-ui-rate-blank"></i> <span>Reviews</span></a>
            </li>
            <li class="collapsed">
                <a class="m-link" href="{{ route('admin') }}">
                    <i class="icofont-gears fs-5"></i> <span>Settings</span></a>
            </li>
        </ul>
    </div>
</div>