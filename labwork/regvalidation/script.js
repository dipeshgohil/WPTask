function filladd()
{
if(filltoo.checked == true)
{
var tal11 =document.getElementById("laddress").value;
var copytal =tal11 ;
document.getElementById("paddress").value = copytal;
}
else if(filltoo.checked == false)
{
document.getElementById("paddress").value='';
}
}