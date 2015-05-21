$(document).ready(function()
{
	$('li a').click(function()
	{ 
	   $('body').css('background-color', '' + $(this).text()); 
	});

	camelize_string("al-btata-c");
}); 

// here we try to camlize a string , example : al-btata-c = alBtataC
function camelize_string(value)
{
	 // here we create an array with words extracted by removing "-" array[0] = al,array[1] = b...
	var string_splitted_array = value.split("-");

	//here we iterate through each word from splitted array
	for(var i in string_splitted_array)
	{
		//here we test to not camelize first word
		//if i != means that we use other words , but not first
		if(i!=0)
		{
			//here we wil camelize everything
			string_splitted_array[i] = capitalize(string_splitted_array[i]);
		}

	}

	//here we put back words in a string and alert them
	alert(string_splitted_array.join(""));
}

//this piece of crap will upper case first letter in a word
function capitalize(value)
{   
	// here we take first letter and uppercase it, first letter on first position in a string
	// then we concatenate it using + with what remains from string
	// 'mama'.slice(1) = 'ama'
	return value.charAt(0).toUpperCase() + value.slice(1);
}