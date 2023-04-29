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
<p class="home"><a href="{{ url('/acp') }}">Home</a> > <strong> All Categories</strong></p>
<div class="list_of_members">
    <h1>All Categories</h1><br>
    <a href="{{ route('category.create') }}" class="btn btn-primary">Add New Category</a>
    @if ( count($categories) > 0 )
    <table style="margin-top: 10px" class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">image</th>
                <th scope="col">Arabic</th>
                <th scope="col">English</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($categories as $category)
            <tr>
                <th scope="row"> <img src="{{asset($category->image)}}" style="width: 50px;">
                </th>
                <td>{{ $category->getTranslation('name', 'ar') }}</td>
                <td>{{ $category->getTranslation('name', 'en') }}</td>
                <td>
                    <a href="{{ route('category.show' , $category->id) }}" class="btn btn-primary"> <i class="fa fa-eye" aria-hidden="true"></i> </a>
                    <a href="{{ route('category.edit' , $category->id) }}" class="btn btn-success"> <i class="fa fa-pencil" aria-hidden="true"></i> </a>
                    <form style="display: contents" method="POST" action="{{ route('category.destroy', $category->id) }}">
                        @csrf
                        <input name="_method" type="hidden" value="DELETE">
                        <button type="submit" class="btn btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i> </button>
                    </form>
                </td>
            </tr>
            @endforeach


        </tbody>
    </table>
    @else
    <h4 style="margin-top: 10px">No Categories</h4>
    @endif
</div>

@endsection