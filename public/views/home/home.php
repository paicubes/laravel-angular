<section class="main">
<aside class="col-left">
    <div class="left-cont"> 
      <span>
      <div class="logo-left"><a href="#/home"><img src="images/left-logo.jpg" alt="" /></a></div>
      <h2>My Pets</h2>
      <div class="categories cate-div">
      		<ul class="user-cate">
            	<li><div class="user-img"><img src="images/cat-img.jpg" alt="" /></div><a href="#"><b>Fipper</b></a><span>32mins ago</span> <div class="p-abs right top green"><i class="fa fa-home"></i></div></li>
               
			   <li><div class="user-img"><img src="images/cat-img2.jpg" alt="" /></div><a href="#"><b>Felix</b></a><span>44mins ago</span> <div class="p-abs right top orange"><i class="fa fa-cloud"></i></div></li>
				
				
            </ul>
            <div class="user-add">
            	<div class="add-pet"><a href="#"><i class="fa fa-plus-circle"></i> Add Pet</a></div>
                <div class="manage-pet"><a href="#"><i class="fa fa-pencil-square-o"></i> Manage</a></div>
            </div>
      </div>
      </span>
      <hr/>
      <span>
		<h2>My Devices</h2>
        	<ul class="device-cate">
            	<li><span><img src="images/surehub-setup.jpg" width="50px" alt="" /></span>SureHub
                	<ul>
                    	<li><span><img src="images/devices-icon.png" width="50px" alt="" /></span>Pet Door</li>
						
                    </ul>
                </li>
            </ul>
            <div class="clear"></div>
                  <hr/>
            <div class="user-add">
            	<div class="add-pet"><a href="#"><i class="fa fa-plus-circle"></i> Add Pet</a></div>
                <div class="manage-pet"><a href="#"><i class="fa fa-pencil-square-o"></i> Manage</a></div>
            </div>
      </span>
    </div><!-- end-left-cont --> 
  </aside>

<aside class="col-right">


	<div class="right-cont">
    	<div class="top-setting">
        	<div class="top-setting-left" ng-controller="NavController">
			
            	<ul class="listing">
                	<li><a  ui-sref=".timeline" ng-class="{active: $state.current.url == '/timeline'}" class="button"><i class="fa fa-home"></i> Timeline</a></li>
                    <li><a ui-sref=".reports" ng-class="{active: $state.current.url == '/reports'}" class="button"><i class="fa fa-align-center"></i> Reports</a></li>
                    <li><a ui-sref=".lock" ng-class="{active: $state.current.url == '/lock'}" class="button "><i class="fa fa-lock"></i> Lock</a></li>
                    <li><a ui-sref=".people" ng-class="{active: $state.current.url == '/people'}" class="button"><i class="fa fa-user"></i> People</a></li>
                </ul>
            </div>
            <div class="top-setting-right">
            	<ul class="listing">
                	<li><a href="#">Help</a></li>
                    <li><a href="#">Account</a></li>
                </ul>
            </div>
        </div><!-- end-top-setting-left -->

<div class="clear"></div>


	<div class="bottom-content" ui-view="contentRightCenter" >
        <div class="col-left-50">
            <div class="page-hd">Home </div>
        </div><!-- end-col-left-50 -->
    
        <div class="col-right-50">
            <ul class="listing">
                <li>
                    <select class="styled">
                        <option>All Pets</option>
                        <option>two</option>
                        <option>something</option>
                        <option>4</option>
                        <option>5</option>
                    </select>
                </li>
            </ul>
        </div><!-- end-col-right-50 -->
		
<div class="clear"></div>       
         <div class="timeline-add-section">
            <p><i class="fa fa-lock fa-5x"></i> </p>
            <p><big><b>No door found</b></big></p>
            <p>You must add a Surehub and Pet Door to access lock setting.</p>
            <p><a href="#" class="button iris-blue"><i class="fa fa-plus"></i>Add SureHub</a></p>
        </div>
    <div class="clear"></div>
    </div>
	
	<!-- end-bottom-content -->
	
	
    </div><!-- end-right-cont --> 
	
	
	
</aside>
</section>