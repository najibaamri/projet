var myInput = document.getElementById("nom");
var myDiv = document.getElementById("div");


myInput.onkeypress = function (myInput)
{
	 var charCode = (myInput.which) ? myInput.which : myInput.keyCode
         if (!((charCode > 31 && (charCode < 48 || charCode > 57))))
           {           	myDiv.innerHTML = "veuillez entrer des lettres seulement"; 
           	return false;
           	/*myDiv.style.visibility = 'visible';*/
           }
else 
{
		         myDiv.style.visibility = 'hidden';
         return true;
              };

};



/*myButtton.onhover = function ()
{
	var num = /^[0-9]+$/;

	if (myInput.value.match(num)) 
		{
			myDiv.innerHTML="Veuillez entrer des lettres seulement";

		}
	else
	{
		myDiv.fadeOut();
	}
	*/

