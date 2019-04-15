
function valid()
{
	var fname = document.forms["RegForm"]["FName"];
  var lname = document.forms["RegForm"]["LName"];
	var email = document.forms["RegForm"]["email"];
	var phone = document.forms["RegForm"]["mob"];
	var password = document.forms["RegForm"]["pass"];
  	var cpass = document.forms["RegForm"]["Conform"];

	if (fname.value == "")
	{
		window.alert("Please enter your Fname.");
		fname.focus();
		return false;
	}
  if (lname.value == "")
  {
    window.alert("Please enter your Fname.");
    lname.focus();
    return false;
  }

	if (email.value == "")
	{
		window.alert("Please enter a valid e-mail address.");
		email.focus();
		return false;
	}

	if (email.value.indexOf("@", 0) < 0)
	{
		window.alert("Please enter a valid e-mail address.");
		email.focus();
		return false;
	}

	if (email.value.indexOf(".", 0) < 0)
	{
		window.alert("Please enter a valid e-mail address.");
		email.focus();
		return false;
	}

	if (phone.value == "")
	{
		window.alert("Please enter your telephone number.");
		phone.focus();
		return false;
	}

	if (password.value == "")
	{
		window.alert("Please enter your password");
		password.focus();
		return false;
	}

if(password.value != cpass.value)
{
window.alert("password does not matched")
cpass.focus();
return false;
}

	return true;
}
