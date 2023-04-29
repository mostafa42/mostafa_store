@extends('admin.layout.app')

@section('content')

<div class="home-strip">
    <div class="view">
        <ul>
            <li><a href="index.html"><i class="refresh"></i></a></li>
            <!--<li class="messages"><a href="#"><i class="msgs"></i><span class="red">3</span></a></li>-->
            <li>
                <div id="dd1" class="wrapper-dropdown-1"><i class="msgs"></i><span class="red">3</span>
                    <ul class="dropdown">
                        <div class="notification_header">
                            <h3>You have 3 new messages</h3>
                        </div>
                        <li><a href="#">
                                <div class="user_img"><img src="{{asset('admin/images/avatar2.jpg')}}" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor sit amet</p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clear"> </div>
                            </a></li>
                        <li class="odd"><a href="#">
                                <div class="user_img"><img src="{{asset('admin/images/avatar.jpg')}}" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor sit amet </p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clear"> </div>
                            </a></li>
                        <li><a href="#">
                                <div class="user_img"><img src="{{asset('admin/images/avatar1.jpg')}}" alt=""></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor sit amet </p>
                                    <p><span>1 hour ago</span></p>
                                </div>
                                <div class="clear"> </div>
                            </a></li>
                        <div class="notification_bottom">
                            <h3><a href="#">See all messages</a></h3>
                        </div>
                    </ul>
                </div>
                <!-----start-script---->
                <script type="text/javascript">
                    function DropDown(el) {
								this.dd1 = el;
								this.initEvents();
							}
							DropDown.prototype = {
								initEvents : function() {
									var obj = this;
				
									obj.dd.on('click', function(event){
										$(this).toggleClass('active');
										event.stopPropagation();
									});	
								}
							}
							$(function() {
				
								var dd1 = new DropDown( $('#dd1') );
				
								$(document).click(function() {
									// all dropdowns
									$('.wrapper-dropdown-1').removeClass('active');
								});
				
							});
                </script>
            </li>
            <!--<li class="notifications"><a href="#"><i class="bell"></i><span class="blue">7</span></a></li>-->
            <li>
                <div id="dd3" class="wrapper-dropdown-3"><i class="bell"></i><span class="blue">5</span>
                    <ul class="dropdown">
                        <div class="notification_header">
                            <h3>You have 5 notifications</h3>
                        </div>
                        <li><a href="#">
                                <div class="user_icon1"><i class="nur"></i></div>
                                <div class="notification_desc">
                                    <p>New user registered</p>
                                    <p><span>2 minutes ago</span></p>
                                </div>
                                <div class="clear"> </div>
                            </a></li>
                        <li class="odd"><a href="#">
                                <div class="user_icon2"><i class="cancel"></i></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor sit amet </p>
                                    <p><span>6 minutes ago</span></p>
                                </div>
                                <div class="clear"> </div>
                            </a></li>
                        <li><a href="#">
                                <div class="user_icon3"><i class="lock"></i></div>
                                <div class="notification_desc">
                                    <p>Lorem ipsum dolor sit amet </p>
                                    <p><span>10 minutes ago</span></p>
                                </div>
                                <div class="clear"> </div>
                            </a></li>
                        <div class="notification_bottom">
                            <h3><a href="#">See all notifications</a></h3>
                        </div>
                    </ul>
                </div>
                <!-----start-script---->
                <script type="text/javascript">
                    function DropDown(el) {
								this.dd3 = el;
								this.initEvents();
							}
							DropDown.prototype = {
								initEvents : function() {
									var obj = this;
				
									obj.dd.on('click', function(event){
										$(this).toggleClass('active');
										event.stopPropagation();
									});	
								}
							}
							$(function() {
				
								var dd3 = new DropDown( $('#dd3') );
				
								$(document).click(function() {
									// all dropdowns
									$('.wrapper-dropdown-3').removeClass('active');
								});
				
							});
                </script>
            </li>
        </ul>
    </div>
    <div class="member">
        <p><a href="#"><i class="men"></i></a><a href="#">{{ auth()->user()->first_name }}</a></p>
        <div id="dd" class="wrapper-dropdown-2" tabindex="1"><span><img
                    src="{{asset('admin/images/settings.png')}}" /></span>
            <ul class="dropdown">

                <li><a href="#">View Profile </a></li>
                <li><a href="#">Lists</a></li>
                <li><a href="#">Help</a></li>
                <li><a href="#">Activity log</a></li>
                <li><a href="#">Report a problem</a></li>
                <li><a href="#">Log out</a></li>
            </ul>
        </div>
        <!-----end-wrapper-dropdown-2---->
        <!-----start-script---->
        <script type="text/javascript">
            function DropDown(el) {
								this.dd = el;
								this.initEvents();
							}
							DropDown.prototype = {
								initEvents : function() {
									var obj = this;
				
									obj.dd.on('click', function(event){
										$(this).toggleClass('active');
										event.stopPropagation();
									});	
								}
							}
							$(function() {
				
								var dd = new DropDown( $('#dd') );
				
								$(document).click(function() {
									// all dropdowns
									$('.wrapper-dropdown-2').removeClass('active');
								});
				
							});
        </script>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="clearfix"></div>
<p class="home"><a href="{{ url('acp') }}">Home</a> > <strong> Update Category</strong></p>
<div class="list_of_members">
    <h1>Update Categories</h1><br>
    @include('admin.layout.errors')
    <form method="POST" action="{{ route('category.update' , $category->id) }}" enctype="multipart/form-data">
        @csrf
        {{ method_field('PUT') }}
        <div class="form-group">
            <img id="preview-image-before-upload" src="{{ asset($category->image) }}"
                alt="preview image" style="width: 100px">

            <input type="file" name="image" placeholder="Choose image" id="image" style="margin-top: 10px;">
            @error('image')
            <div class="alert alert-danger mt-1 mb-1">{{ $message }}</div>
            @enderror
        </div>


        <div class="form-group">
            <label for="exampleInputEmail1">Name (Arabic)</label>
            <input type="text" name="name_ar" value="{{ $category->getTranslation('name', 'ar') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Name (English)</label>
            <input type="text" name="name_en" value="{{ $category->getTranslation('name', 'en') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Slug (Arabic)</label>
            <input type="text" name="slug_ar" value="{{ $category->getTranslation('slug', 'ar') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Slug (English)</label>
            <input type="text" name="slug_en" value="{{ $category->getTranslation('slug', 'en') }}" class="form-control">
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description (Arabic)</label>
            <textarea class="form-control" name="desc_ar" cols="20" rows="10">
                {{ $category->getTranslation('description', 'ar') }}
            </textarea>
        </div>
        <div class="form-group">
            <label for="exampleInputEmail1">Description (English)</label>
            <textarea class="form-control" name="desc_en" cols="20" rows="10">
                {{ $category->getTranslation('description', 'en') }}
            </textarea>
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
</div>


@endsection