function validate()
{
  var name=/^[a-zA-Z]+[." "]*[a-zA-Z" ".]*$/;
  var specialization=/^\w+$/;
  var phone=/^[6789]{1}\d{9}$/;
  var email=/^\w+@gmail.com$/;
  var password=/^\w+[@&£#$¥€]{1}[0-9]+$/;

  var ru1=name.test(document.getElementById("name").value)
  var rs1=specialization.test(document.getElementById("Specialization").value)
  var rp1=phone.test(document.getElementById("phone").value)
  var re1=email.test(document.getElementById("email").value)
  var rpa1=password.test(document.getElementById("password").value)
  if(ru1==true)
  {
    if(rp1==true)
    {
      if(re1==true)
      {
         if(rpa1==true)
         {
            if(rs1==true)
            {
              alert("inputs are valid");
            }
            else{
              alert("special");
              return false;
            }
         }
         else{
          alert("pass");
          return false;
         }
      }
      else{
        alert("email");
        return false;
      }
    }
    else{
      alert("phone");
      return false;
    }
  }
  else{
    alert("name are invalid");
    return false;
  }
}