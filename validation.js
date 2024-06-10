function dovalidate()
{
    if(document.myform.fname.value=="")
        {
            alert("please enter first name");
            document.myform.fname.focus();
            return false;
        }
    if(document.myform.lname.value=="")
            {
                alert("please enter last name");
                document.myform.lname.focus();
                return false;
            }
    if(document.myform.address.value=="")
        {
            alert("please enter address");
            document.myform.address.focus();
            return false;
        } 

        if(document.myform.email.value=="" )
            {
                alert("please enter email");
                document.myform.email.focus();
                return false;

    }
    if(document.myform.contactNo.value=="" )
        {
            alert("please enter contact");
            document.myform.contactNo.focus();
            return false;
        }    
      
                
           
  

     return true;  

    

}