window.onload=mainfunction;
	
	
function mainfunction(){
	size=2;
	
	document.getElementById("submitButton").onclick=function(){
		//check amount
		amounts=document.getElementsByClassName('amount');
		notPositive=false;
		notNumber=false;
		empty=false;
		for (var i = 0; i < amounts.length; ++i) {
			if(amounts[i].value==""){
				empty=true;
				
			}else if(isNaN(amounts[i].value)){
				notNumber=true;
				
			}else if(amounts[i].value<=0){
				notPositive=true;
			}
		}
		if(empty){
			alert("Amount is empty");
		}else if(notNumber){
			alert("Amount is not a number");
		}else if(notPositive){
			alert("Amount must be positive value");
		}
		
		//check ingredients
		ingredients=document.getElementsByClassName('ingredient');
		empty2=false;
		for(var i=0; i<ingredients.length; i++){
			if(ingredients[i].value==""){
				empty2=true;
			}
		}
		if(empty2){
			alert("Ingredient is empty");
		}
		
		
		if(!notPositive && !notNumber && !empty && !empty2){
			document.getElementById("coctailForm").submit();
		}
		
	};
	
	document.getElementById("delete").onclick=function(){
		var MyForm=document.getElementById("coctailForm");
		var element=document.getElementById("row"+size);
		MyForm.removeChild(element);
		size--;
		//alert(size);
	};
	
	document.getElementById("add").onclick=function(){
		var MyForm=document.getElementById("coctailForm");
		var nextEl=document.getElementById("paragraphOfButtons");
		var newEl=document.createElement("div");
		size++;
		newEl.id=("row"+size);
		newEl.className="inputRow";
		
		var input1=document.createElement("input");
		input1.name="amount"+size;
		input1.type="text";
		input1.placeholder="amount";
		input1.className="amount";
		input1.style.marginRight="5px";
		newEl.appendChild(input1);
		
		
		var select1=document.createElement("select");
		select1.name="unit"+size;
		select1.className="unit";
		select1.innerHTML='<option value="empty"></option><option value="part(s)">part</option>	<option value="ml">ml</option><option value="l">l</option><option value="piece">piece(s)</option><option value="oz">oz</option><option value="teaspoon">teaspoon</option><option value="dessertSpoon">dessert spoon</option>';
		select1.style.marginRight="5px";
		newEl.appendChild(select1);
		
		var input2=document.createElement("input");
		input2.name="ingredient"+size;
		input2.type="text";
		input2.placeholder="ingredient";
		input2.className="ingredient";
		input2.style.marginRight="5px";
		newEl.appendChild(input2);
		
		MyForm.insertBefore(newEl,nextEl);
		
	};
	
	document.getElementById("shot").onmouseover=function(){
		document.getElementById("medvedText").style.display="inline";
		document.getElementById("medved").style.display="inline";
	};
	
};
