$(function(){
    	function hideLoader() {
	    $('#loading').hide();
	}
    setTimeout(hideLoader, 3 * 1000);
    // $(window).ready(hideLoader);

    // $('[data-toggle="tooltip"]').tooltip();

	$(".req-input input, .req-input textarea").on("click input", function(){
		validate($(this).closest("[data-form-container]"));
	});
	$(".submit-form").on("click input", function(){
		var submitResp = validate($(this).closest("[data-form-container]"));
    if(submitResp == true){

    }
	});

	//This is for the on blur, if the form fields are all empty but the target was one of the fields do not resetfb to defaul state
	var currentlySelected;
	$(document).mousedown(function(e) {
        currentlySelected = $(e.target);
    });

	//Reset to form to the default state of the none of the fields were filled out
	$(".req-input input,  .req-input textarea").on("blur", function(e){
		var Parent = $(this).closest("[data-form-container]");
		//if the target that was clicked is inside this form then do nothing
		if(typeof currentlySelected != "undefined" && currentlySelected.parent().hasClass("req-input") && Parent.attr("id") == currentlySelected.closest(".form-container").attr("id"))
			return;

		var length = 0;
		Parent.find("input").each(function(){
			length += $(this).val().length;
		});
		Parent.find("textarea").each(function(){
			length += $(this).val().length;
		});
		if(length == 0){
			var container = $(this).closest(".form-container");
			resetForm(container);
		}
	});



})

function resetForm(target){
	var container = target;
	container.find(".valid, .invalid").removeClass("valid invalid")
	container.css("background", "");
	container.css("color", "");
}

function setRow(valid, Parent){
	var error = 0;
	if(valid){
		Parent.addClass("valid");
		Parent.removeClass("invalid");
	} else {
		error = 1;
		Parent.addClass("invalid");
		Parent.removeClass("valid");
	}
	return error;
}

function validate(target){
	var error = 0;
	target.find(".req-input input, .req-input textarea, .req-input select").each(function(){
		var type = $(this).attr("type");

		if($(this).parent().hasClass("confirm-password") && type == "password"){
			var type = "confirm-password";
		}

		var Parent = $(this).parent();
		var val = $(this).val();

		if($(this).is(":visible") == false)
			return true; //skip iteration

		switch(type) {
			case "confirm-password":
				var initialPassword = $(".input-password input").val();
				error += setRow(initialPassword  == val && initialPassword.length > 0, Parent);
				break;
			case "password":
			case "textarea":
			case "text":
				var minLength = $(this).data("min-length");
				if(typeof minLength == "undefined")
					minLength = 0;
				error += setRow(val.length >= minLength, Parent);
				break;
			case "email":
				error += setRow(validateEmail(val), Parent);
				break;
			case "tel":
				error += setRow(phonenumber(val), Parent);
				break;
		}
	});

	var submitForm = target.find(".submit-form");
	var formContainer = target;
	var formTitle = target.find(".form-title");
	if(error == 0){
		formContainer.css("background", "#C8E6C9");
		formContainer.css("color", "#2E7D32");
		submitForm.addClass("valid");
		submitForm.removeClass("invalid");

        return true;
	} else {
		formContainer.css("background", "#FFCDD2");
		formContainer.css("color", "#C62828");
		submitForm.addClass("invalid");
		submitForm.removeClass("valid");

        return false;
	}
}
function phonenumber(inputtxt) {
	if(typeof inputtxt == "undefined")
		return;
	var phoneno = /^\d{10}$/;
	if((inputtxt.match(phoneno))) {
		return true;
	}
	else {
		return false;
	}
}

function validateEmail(email) {
    var re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(email);
}

//facebook login code
  // This is called with the results from from FB.getLoginStatus().
  function statusChangeCallback(response) {
    console.log(response);
    // The response object is returned with a status field that lets the
    // app know the current login status of the person.
    // Full docs on the response object can be found in the documentation
    // for FB.getLoginStatus().
    if (response.status === 'connected') {
        console.log('cpmm');      // Logged into your app and Facebook.
      testAPI();
    } else {
      // The person is not logged into your app or we are unable to tell.
    //   document.getElementById('status').innerHTML = 'Please log ' +
    //     'into this app.';
    }
  }

  // This function is called when someone finishes with the Login
  // Button.  See the onlogin handler attached to it in the sample
  // code below.
  function checkLoginState() {
    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });
  }

  window.fbAsyncInit = function() {
    FB.init({
      appId      : '334215120842859',
      cookie     : true,  // enable cookies to allow the server to access
                          // the session
      xfbml      : true,  // parse social plugins on this page
      version    : 'v3.3' // The Graph API version to use for the call
    });

    // Now that we've initialized the JavaScript SDK, we call
    // FB.getLoginStatus().  This function gets the state of the
    // person visiting this page and can return one of three states to
    // the callback you provide.  They can be:
    //
    // 1. Logged into your app ('connected')
    // 2. Logged into Facebook, but not your app ('not_authorized')
    // 3. Not logged into Facebook and can't tell if they are logged into
    //    your app or not.
    //
    // These three cases are handled in the callback function.

    FB.getLoginStatus(function(response) {
      statusChangeCallback(response);
    });

  };

  // Load the SDK asynchronously
  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "https://connect.facebook.net/en_US/sdk.js";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));

  // Here we run a very simple test of the Graph API after login is
  // successful.  See statusChangeCallback() for when this call is made.
  function testAPI() {
    FB.api('/me?fields=name,email', function(response) {
        resp = JSON.stringify(response);
            var name = response.name;
            var email = response.email;
            var submit = 'facebook';
            var id = response.id;
          $.post('admin/process.php', {name:name,email:email,accesstoken:id,'action':'2',submit:submit}, function(data){
              console.log(data+'yessssss');
                if(data=='200')
        		{
        		  //  $('#poup-form').modal('toggle');
        		  //alert('Thanks our representative will contact you soon.');

        		}else
        		{
        		  //  $('#poup-form').modal('toggle');
        			console.log('something goes wrong');
        		}

    		 });
        });
  }


//google api login cide

function onLoadGoogleCallback(){
  gapi.load('auth2', function() {
    auth2 = gapi.auth2.init({
      client_id: '1052498260626-4dq7d16dnr5egsej74f0e4p89c349vc2.apps.googleusercontent.com',
      cookiepolicy: 'single_host_origin',
      scope: 'profile email'
    });

  auth2.attachClickHandler(element, {},
    function(googleUser) {
    	var name = googleUser.getBasicProfile().getName();
    	var email = googleUser.getBasicProfile().getEmail();
    	var accesstoken = googleUser.getBasicProfile().getId();
    	var submit = 'google';
        // console.log('response' + name + email);
    	$.post('admin/process.php', {name:name,email:email,accesstoken:accesstoken,'action':'1',submit:submit}, function(data){
		                        if(data=='200')
								{
								    // $('#poup-form').modal('toggle');
								  alert('Thanks our representative will contact you soon.');
								}else
								{
								    // $('#poup-form').modal('toggle');
									alert('something goes wrong');
								}

		 });



      }, function(error) {
        console.log('Sign-in error', error);
      }
    );
  });

  element = document.getElementById('googleSignIn');
}


//chart form code
var totalAmtVal = 0;
var tenureVal = 0;
var interestVal = 0;


var numberEl = document.querySelector('input.number');
var tenureEl = document.querySelector('input.tenure');
var interestEl = document.querySelector('input.interest');
numberEl.addEventListener('keyup', function (event) {
  if (event.which >= 37 && event.which <= 40) return;
  this.value = this.value.replace(/\D/g, '')
     .replace(/\B(?=(\d{3})+(?!\d))/g, ',');
});
//tenure validation allow below 32
tenureEl.addEventListener('keyup', function (event) {
  if (event.which >= 37 && event.which <= 40) return;
  if(this.value > 31){
		$(this).addClass("red-border");
    $(this).focus();
	}else{
		$(this).removeClass("red-border");
	}
});
// interrest validation allow below 21

interestEl.addEventListener('keyup', function (event) {
  if (event.which >= 37 && event.which <= 40) return;
  if(this.value > 21){
		$(this).addClass("red-border");
    $(this).focus();
	}else{
		$(this).removeClass("red-border");
	}
});
//on leave get values
interestEl.onblur = function() {
  var interestVal = interestEl.value;
	console.log('interestVal '+interestVal);
};
tenureEl.onblur = function() {
  var tenureVal = tenureEl.value;

};
//on leave get values done
	var numberEl = document.querySelector('input.number');
	numberEl.onblur = function() {
	  var totalAmtVal = numberEl.value;
	};
//new ckode


google.charts.load('current', {
  'callback': function () {
		alert("chart");
    var dataSales = google.visualization.arrayToDataTable([
      ['Year', 'Sales'],
      ['2015',  1000],
      ['2016',  1030]
    ]);


    var options = {
      legend: 'none',
      title: 'Results',
      pieHole: 0.3,

    };

    var chart = new google.visualization.PieChart(document.getElementById('chart_div'));
    chart.draw(dataSales, options);
		// 	$('#interestForm :input').blur(){
		// 		alert("yes");
		// 		chart.draw(dataSales, options);
		// }, false);
		$('#interestForm :input').focusout(function(){
				alert("yes");
				alert(dataSales);
				alert(options);
				chart.draw(dataSales, options);
			});
  },
  'packages':['corechart']
});
