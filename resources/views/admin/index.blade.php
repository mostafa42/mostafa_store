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
<p class="home"><a href="#">Home</a> > <strong> Dashboard</strong></p>
<div class="list_of_members">
    <div class="sales">
        <div class="icon">
            <i class="dollar"></i>
        </div>
        <div class="icon-text">
            <h3>15896</h3>
            <p>Sales</p>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="new-users">
        <div class="icon">
            <i class="user1"></i>
        </div>
        <div class="icon-text">
            <h3>5356</h3>
            <p>New Users</p>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="orders">
        <div class="icon">
            <i class="order"></i>
        </div>
        <div class="icon-text">
            <h3>26856</h3>
            <p>New Orders</p>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="visitors">
        <div class="icon">
            <i class="visit"></i>
        </div>
        <div class="icon-text">
            <h3>85k</h3>
            <p>Visits</p>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="clearfix"></div>
</div>
<div class="total-sales">
    <div class="user-trends">
        <div class="alert-close7"> </div>

        <canvas id="bar" height="340" width="780"></canvas>
        <script>
            var barChartData = {
							labels : ["January","February","March","April","May","June","July"],
							datasets : [
								{
									fillColor : "rgba(255, 137, 167, 0.78)",
									strokeColor : "rgba(220,220,220,1)",
									data : [65,59,90,81,56,55,40]
								},
								{
									fillColor : "rgba(140, 145, 255, 0.69)",
									strokeColor : "rgba(151,187,205,1)",
									data : [28,48,40,19,96,27,100]
								}
							]
							
						}

					var myLine = new Chart(document.getElementById("bar").getContext("2d")).Bar(barChartData);
					
        </script>
    </div>
    <div class="to-do">
        <div class="alert-close5"> </div>
        <h3>To-Do</h3>
        <div class="checkbox-form">
            <div class="check">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Do the
                    dishes.</label>
            </div>
            <div class="check">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Hit the
                    gym.</label>
            </div>
            <div class="check">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Walk the
                    dog.</label>
            </div>
            <div class="check">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Get
                    wireframing!</label>
            </div>
            <div class="check">
                <label class="checkbox"><input type="checkbox" name="checkbox" checked=""><i> </i>Talk to
                    the cat.</label>
            </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>


@endsection