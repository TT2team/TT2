<?php
echo 
'<form id="coctailForm" action="http://naivist.net/form" onSubmit="return false">
		<h3>Cocktail maker</h3>
		<div class="inputRow" id="row1">
		<input type="text" name="amount1" placeholder="amount" class="amount">
		<select name="unit1" class="unit">
			<option value="empty"></option>
			<option value="part(s)">part</option>
			<option value="ml">ml</option>
			<option value="l">l</option>
			<option value="piece">piece(s)</option>
			<option value="oz">oz</option>
			<option value="teaspoon">teaspoon</option>
			<option value="dessertSpoon">dessert spoon</option>
		</select>
		<input name="ingredient1" type="text" placeholder="ingredient" class="ingredient">
		</div>
		
		<div class="inputRow" id="row2">
			<input name="amount2" type="text" placeholder="amount" class="amount">
		<select name="unit2" class="unit">
			<option value="empty"></option>
			<option value="part(s)">part</option>
			<option value="ml">ml</option>
			<option value="l">l</option>
			<option value="piece">piece(s)</option>
			<option value="oz">oz</option>
			<option value="teaspoon">teaspoon</option>
			<option value="dessertSpoon">dessert spoon</option>
		</select>
		<input name="ingredient2" type="text" placeholder="ingredient" class="ingredient">
		</div>
		
		
		<p id="paragraphOfButtons">
			<button id="submitButton">Submit</button>
			<button id="add">Add ingredient</button>
			<button id="delete">Delete ingredient</button>
		</p>
		 
	
	</form>
';
?>
