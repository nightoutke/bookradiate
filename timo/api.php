	<?php
	//Enter your IDs
	define("Access_Key_ID", "AKIAJCMQDVYRM6ZS674A");
	define("Associate_tag", "x00a7-20");
	//Set up the operation in the request

	$msg=""; 
	if(!empty($_GET['msg'])) {
		$msg=$_GET['msg'];
		$msg=urldecode($msg);
	}

	if(!empty($_GET['booksearch']) && !empty($_GET['category']) && !empty($_GET['sort'])) {
		$booksearch = '';
		$category = '';
		$sort = '';
		$SearchIndex = '';
		$Keywords = '';
	}

	if(!empty($_GET['collegesearch'])) {
		$collegesearch = '';
		$SearchIndex = '';
		$Keywords = '';
	}



	function ItemSearch($SearchIndex, $Keywords){
	//Set the values for some of the parameters
	$Operation = "ItemSearch";
	$Version = "2011-08-01";
	$ResponseGroup = "ItemAttributes,Offers";
	//User interface provides values
	//for $SearchIndex and $Keywords


	//Define the request
	$request=
	"http://webservices.amazon.com/onca/xml"
	. "?Service=AWSECommerceService"
	. "&AssociateTag=" . Associate_tag
	. "&AWSAccessKeyId=" . Access_Key_ID
	. "&Operation=" . $Operation
	. "&Version=" . $Version
	. "&SearchIndex=" . $SearchIndex
	. "&Keywords=" . $Keywords
	. "&Signature=" . 'U70LnyayslkOmH9y4eSOTKnkYzcwqfnWJOusoMJ%2FcS4%3D'
	. "&ResponseGroup=" . $ResponseGroup;
	//Catch the response in the $response object
	$response = file_get_contents($request);
	$parsed_xml = simplexml_load_string($response);
	printSearchResults($parsed_xml, $SearchIndex);
	}
	?>

<!-- <table align='left'>

<form name='SearchTerms' action=SimpleStore.php method='GET'>
<tr><td valign='top'>
<b>Choose a Category</b><br>
	<select name='SearchIndex'>
	<option value='Books'>Books</option>
	<option value='DVD'>DVD</option>
	<option value='Music'>Music</option>
	</select>
</td></tr>
<tr><td><b>Enter Keywords</b><br><input type='text' name='Keywords' size='40'/></td></tr>
	<input type='hidden' name='Action' value='Search'>
	<input type='hidden' name='CartId' value=$CartId>
	<input type='hidden' name='HMAC' value=$HMAC>
<tr align='center'><td><input type='submit'/></td></tr>
</form> "
</table> -->