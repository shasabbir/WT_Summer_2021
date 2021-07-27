
function validateForm() {
    //var fname = document.getElementById("fname").value;
    //var lname = document.getElementById("lname").value;
    var email = document.getElementById("email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    
    /*if (fname == "" || fname.length < 6 ) {
     document.getElementById("errorfname").innerHTML="Please fill out first name";
      return false;
    }
   if ( lname == "" || lname.length < 6 ) {
     document.getElementById("errorlname").innerHTML="Please fill out last name";
      return false;
    }*/
  if(!(document.getElementById('male').checked || document.getElementById('female').checked || document.getElementById('other').checked)) {
      document.getElementById("gender").innerHTML="gender not selected";
      return false;
    }
    if(!(document.getElementById('read').checked || document.getElementById('dance').checked || document.getElementById('sing').checked)) {
      document.getElementById("hobby").innerHTML="hobby not selected";
}
  if(!res)
    {
      document.getElementById("errormail").innerHTML="Email format is not correct";
      return false; 
    }


    
  }
function emailval()

  {
    var email = document.getElementById("email").value;
    var patt = /^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/;
    var res = patt.test(email);
    if (!res) {
        document.getElementById("errormail").innerHTML="Please insert a valid email";
       }
       else
       {
        document.getElementById("errormail").innerHTML="your email is valid";

       }
  } 
 function nameval()

  {
    var name = document.getElementById("name").value;
    if (name == "" || name.length < 6 ) {
        document.getElementById("errorname").innerHTML="Please insert a valid name";
       }
       else
       {
        document.getElementById("errorname").innerHTML="your name is valid";

       }
  } 
function passval()

  {
    var pass = document.getElementById("pass").value;
    if (pass == "" || pass.length < 8 ) {
        document.getElementById("errorpass").innerHTML="password must have length of atleast 8";
       }
       else
       {
        document.getElementById("errorpass").innerHTML="your Password is valid";

       }
  }
  function commentval()
  {
    var comment = document.getElementById("comment").value;
    if (comment == "" || comment.length < 12 ) {
        document.getElementById("errorcomment").innerHTML="Comment is too short";
       }
       else
       {
        document.getElementById("errorcomment").innerHTML="your Comment is valid";

       }
  } 

  function myfunc()
  {
alert("hellow world");
  }