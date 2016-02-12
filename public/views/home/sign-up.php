<section id="site-bg" ng-controller="LoginController">
	<div class="login-col">
		<div class="logo"><a href="#"><img src="images/logo.jpg" alt="" /></a></div>
        <p>Create SureFalp Account</p>
        <div class="so-link-account"><a href="#" class="active">Email</a> <a href="#">Facebook</a> <a href="#">Twitter</a></div>
        <form method="" class="login-form">
        	<div><input type="text" class="input" onfocus="javascript:if(this.value=='Full name') this.value = '';" onblur="javascript:if(this.value=='') this.value = 'Full name';"  value="Full name" /></div>
        	<div><input type="text" class="input" onfocus="javascript:if(this.value=='Email address') this.value = '';" onblur="javascript:if(this.value=='') this.value = 'Email address';"  value="Email address" /></div>
            <div><input type="text" class="input" onfocus="javascript:if(this.value=='Password') this.value = '';" onblur="javascript:if(this.value=='') this.value = 'Password';"  value="Password" /></div>
            <div>
			<input ng-click="signUp()" class="login-but" type="button" value="Continue" /></div>
            <div class="clear"></div>
        </form>
    </div>
    <p class="l-b-text">Already have an account? <a href="#/">Sign in</a></p>
    <div class="clear"></div>
</section>