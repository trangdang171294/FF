/**
 * Created by HP on 3/6/2017.
 */
function Allnumber(idtag) {
    var inputidtag= document.getElementById(idtag);
    var pattern = /^[0-9]$/;
    var TheP= document.getElementById("message1");
    if(inputidtag.value.match(pattern))
    {
        TheP.style.display="none";
        return true;
    }
    else
    {
        TheP.style.display="block";
        TheP.innerHTML="Hãy nhập tất cả các ký tự đều là số";
        TheP.style.color="red";
        return false;
    }


}



