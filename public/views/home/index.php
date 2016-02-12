<section id="site-bg" ng-controller="LoginController">
	<div class="login-col">
		<div class="logo"><a href="#"><img src="images/logo.jpg" alt="" /></a></div>
        <p>Sign in to your SureHub Account</p>
        <form method="" class="login-form">
        	<div><input type="text" class="input" onfocus="javascript:if(this.value=='Email address') this.value = '';" onblur="javascript:if(this.value=='') this.value = 'Email address';"  value="Email address" /></div>
            <div><input type="text" class="input" onfocus="javascript:if(this.value=='Password') this.value = '';" onblur="javascript:if(this.value=='') this.value = 'Password';"  value="Password" /></div>
            <div><label><a href="#/forgot-password"> Forgot your Password </a></label> 
			<input class="login-but" ng-click="login()" type="button" value="Login" /></div>
        </form>
    </div>
    <p class="l-b-text">Not yet registered? <a href="#/sign-up">Sign up</a></p>
    <div class="clear"></div>
</section>