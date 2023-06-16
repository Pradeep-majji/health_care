function validate()
{
  var name=/^[a-zA-Z]+[." "]*[a-zA-Z" ".]*$/;
  var phone=/^[6789]{1}\d{9}$/;
  var email=/^\w+@gmail.com$/;
  var password=/^\w+[@&£#$¥€]{1}[0-9]+$/;

  var ru=name.test(document.getElementById("name").value);
  var rp=phone.test(document.getElementById("phone").value);
  var re=email.test(document.getElementById("email").value);
  var rpa=password.test(document.getElementById("password").value);
  if(ru!=true||rp!=true||re!=true||rpa!=true)
  {
       alert("enter correct inputs");
       return false;
  }
}