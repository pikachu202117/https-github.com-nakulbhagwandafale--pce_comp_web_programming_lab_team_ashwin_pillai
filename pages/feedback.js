const name = document.getElementById('fname');
const sname = document.getElementById('sname');
const email = document.getElementById('mail');
const feedback = document.getElementById('return1');
const sugg = document.getElementById('return2');
const form = document.getElementById('formm');


const name_error = document.getElementById('name_error');

const sname_error = document.getElementById('name_error');

const email_error = document.getElementById('email_error');

const pass_error = document.getElementById('pass_error');

form.addEventListener('submit',(e)=>
{  


   var email_check = /^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;

   if(fname.value === '' || fname.value == null)

   {
      e.preventDefault();
      name_error.innerHTML = "Name is required";
   }


   else
   {
      name_error.innerHTML = "";
   }

   if(sname.value === '' || sname.value == null)

   {
      e.preventDefault();
      sname_error.innerHTML = "Name is required";
   }


   else
   {
      sname_error.innerHTML = "";
   }

   if(!email.value.match(email_check))
   {
      e.preventDefault();
      email_error.innerHTML = "Valid Email is required";

   }


   else
   {
      email_error.innerHTML = "";
   }



   if(sugg.value.length >= 20)

   {
      e.preventDefault();
      sugg_error.innerHTML = "Password cannot be less than 20 characters";
   }

   if(sugg.value === '')

   {
      e.preventDefault();
      pass_error.innerHTML = "this flied cant be empty";
   }







});