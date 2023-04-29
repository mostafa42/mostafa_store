<div class="col-md-3 side-bar">
    <div class="logo text-center">
        <a href="#"><img src="{{asset('admin/images/logo.png')}}" alt="" /></a>
    </div>
    <div class="navigation">
        <h3>Categories</h3>
        <ul>
            <li><a href="#"><i class="chat"></i></a></li>
            <li><a href="{{ route('category.index') }}">Categories</a></li>
            <li><span class="badge bg-danger" style="background-color: red; font-size: 20px; margin-left: 10px">{{ \App\Models\Category::count() }}</span></li>
        </ul>
        <ul>
            <li><a href="#"><i class="art"></i></a></li>
            <li><a href="#">Sub Categories</a></li>
        </ul>
    </div>
    <div class="navigation">
        <h3>Products</h3>
        <ul>
            <li><a href="#"><i class="chat"></i></a></li>
            <li><a href="#">Products</a></li>
        </ul>
        <ul>
            <li><a href="#"><i class="art"></i></a></li>
            <li><a href="#">In stock</a></li>
        </ul>
        <ul>
            <li><a href="#"><i class="art"></i></a></li>
            <li><a href="#">Out of stock</a></li>
        </ul>
        <ul>
            <li><a href="#"><i class="art"></i></a></li>
            <li><a href="#">Featured</a></li>
        </ul>
    </div>
    <div class="navigation">
        <h3>Settings</h3>
        <ul>
            <li><a href="#"><i class="chat"></i></a></li>
            <li><a href="#">Promocodes</a></li>
        </ul>
    </div>
    <div class="navigation">
        <h3>User Front</h3>
        <ul>
            <li><a href="#"><i class="chat"></i></a></li>
            <li><a href="#">Top Navbar</a></li>
        </ul>
        <ul>
            <li><a href="#"><i class="art"></i></a></li>
            <li><a href="#">HomePage Sliders</a></li>
        </ul>
        <ul>
            <li><a href="#"><i class="user"></i></a></li>
            <li><a href="#">Tesimonials</a></li>
        </ul>
        <ul>
            <li><a href="#"><i class="fat"></i></a></li>
            <li><a href="#">Our Features</a></li>
        </ul>
        <ul>
            <li><a href="#"><i class="speed"></i></a></li>
            <li><a href="#">Links</a></li>
        </ul>
        <ul>
            <li><a href="#"><i class="setting"></i></a></li>
            <li><a href="#">Settings</a></li>
        </ul>
    </div>
    <div class="navigation">
        <h3>Footer</h3>
        <ul>
            <li><a href="#"><i class="chat"></i></a></li>
            <li><a href="#">About Us</a></li>
        </ul>
        <ul>
            <li><a href="#"><i class="art"></i></a></li>
            <li><a href="#">Get in touch</a></li>
        </ul>
        <ul>
            <li><a href="#"><i class="user"></i></a></li>
            <li><a href="#">Quick Links</a></li>
        </ul>
        <ul>
            <li><a href="#"><i class="fat"></i></a></li>
            <li><a href="#">Sign up for offers</a></li>
        </ul>
    </div>
</div>