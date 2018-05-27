/* Javascript sheet for form field validation */

//character limit for name in signup form 

function doLimitName(v)
{
		len  = v.length;
		if(len>30)
		{
			m = v.substr(0,30);
			document.signUpForm.name.value = m;
			alert("Your Name must be less than 30 char");
		}
}
// character limit for name in Let us know form

function doLimitFeedbackName(v)
{
		len  = v.length;
		if(len>30)
		{
			m = v.substr(0,30);
			document.feedbackForm.name.value = m;
			alert("Your Name must be less than 30 char");
		}
}

// character limit for name in contact form

function doLimitContactName(v)
{
		len  = v.length;
		if(len>30)
		{
			m = v.substr(0,30);
			document.contactForm.name.value = m;
			alert("Your Name must be less than 30 char");
		}
}
// character limit for subject in contact form

function doLimitSubject(v)
{
		len  = v.length;
		if(len>100)
		{
			m = v.substr(0,100);
			document.contactForm.subject.value = m;
			alert("Your Name must be less than 100 char");
		}
}

// character limit for message in contact form

function doLimitMessage(v)
{
		len  = v.length;
		if(len>355)
		{
			m = v.substr(0,355);
			document.contactForm.message.value = m;
			alert("Your Name must be less than 355 char");
		}
}

// character limit for password in signup form

function doLimitPass(v)
{
		len  = v.length;
		if(len>12)
		{
			m = v.substr(0,12);
			document.signUpForm.password.value = m;
			alert("Your Password must be less than 12 char");
		}
}

// character limit for textarea in Let us know form

function doLimitText(v)
{
		len  = v.length;
		if(len>355)
		{
			m = v.substr(0,355);
			document.feedbackForm.txt.value = m;
			alert("Your Password must be less than 355 char");
		}
}


// validation for password and confirm password matches or not and length shouldn't be more than 12

function validatePassword()
{
	var pass = document.newPassword.newPass.value;
	var cnfpass = document.newPassword.confirmPass.value;
	if(pass != "" || cnfpass != "")
	{
		len = pass.length;
		if(len>12)
		{
			alert('Password must be less than 12 char');
			document.newPassword.newPass.value = pass.substr(0,12);
		}
		else
		{
			if(pass == cnfpass)
			{
				document.getElementById('dyn').style.color = 'green';
				document.getElementById('dyn').innerHTML = "Match";	
				document.newPassword.reset.disabled = false;
			}
			else
			{
				document.getElementById('dyn').style.color = 'red';
				document.getElementById('dyn').innerHTML = "Not match";
				document.newPassword.reset.disabled = true;
			}
		}
		
	}
	
}	

// validation for password and confirm password matches or not in dashboard and length shouldn't be more than 12

function validateDashboardPassword()
{
	var pass = document.dashboardPassword.newPass.value;
	var cnfpass = document.dashboardPassword.cnfPass.value;
	if(pass != "" || cnfpass != "")
	{
		len = pass.length;
		if(len>12)
		{
			alert('Password must be less than 12 char');
			document.dashboardPassword.newPass.value = pass.substr(0,12);
		}
		else
		{
			if(pass == cnfpass)
			{
				document.getElementById('dyn').style.color = 'green';
				document.getElementById('dyn').innerHTML = "Match";	
				document.dashboardPassword.changePassword.disabled = false;
			}
			else
			{
				document.getElementById('dyn').style.color = 'red';
				document.getElementById('dyn').innerHTML = "Not match";
				document.dashboardPassword.changePassword.disabled = true;
			}
		}
		
	}
	
}	

// character limit for Achievement_one in dashboard

function LimitText_one(v)
{
		len  = v.length;
		if(len>455)
		{
			m = v.substr(0,455);
			document.achievement.achievement_one.value = m;
			alert("Your Password must be less than 355 char");
		}
}

// character limit for Achievement_two in dashboard

function LimitText_two(v)
{
		len  = v.length;
		if(len>455)
		{
			m = v.substr(0,455);
			document.achievement.achievement_two.value = m;
			alert("Your Password must be less than 355 char");
		}
}

// character limit for Achievement_three in dashboard

function LimitText_three(v)
{
		len  = v.length;
		if(len>455)
		{
			m = v.substr(0,455);
			document.achievement.achievement_three.value = m;
			alert("Your Password must be less than 355 char");
		}
}


// creating smooth scrool for links

$(document).ready(function(){
var $root = $('html, body');

$('a[href^="#"].slide-section').click(function () {
    $root.animate({
        scrollTop: $( $.attr(this, 'href') ).offset().top
    }, 1000);

    return false;
});
});


// select all , none , even , odd in skills

function sAll()
{
	len=document.skillForm.elements.length;
	for(i=0;i<len;i++)
	{ 
		elt=document.skillForm.elements[i];
		if(elt.type=='checkbox' && elt.name=='skills[]')
	{
	elt.checked=true;
	}
	}
}
function sNone()
{
len=document.skillForm.elements.length;
	for(i=0;i<len;i++)
	{ 
		elt=document.skillForm.elements[i];
		if(elt.type=='checkbox' && elt.name=='skills[]')
	{
	elt.checked=false;
	}
	}
}

function sEven()
{
len=document.skillForm.elements.length;
     sNone();
	for(i=0;i<len;i++)
	{ 
		elt=document.skillForm.elements[i];
		if(i%2==0 && elt.type=='checkbox' && elt.name=='skills[]')
	{
	elt.checked=true;
	}
	}

}

function sOdd()
{ 
len=document.skillForm.elements.length;
    sNone();
	for(i=0;i<len;i++)
	{ 
		elt=document.skillForm.elements[i];
		if(i%2!=0 && elt.type=='checkbox' && elt.name=='skills[]')
	{
	elt.checked=true;
	}
	}
}


		

