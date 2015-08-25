	function jiSuan(num1, num2, operator){
		var res=0;
		if(operator=="+"){
			res=num1+num2;
		}else if(operator=="-"){
			res=num1-num2;
		}else if(operator=="*"){
			res=num1*num2;
		}else if(operator=="/"){
			res=num1/num2;
		}
		return res;
	}

	function test(val){
		window.alert("you input:"+val);
		return 90;
	}

	function abc(num1){
		if(num1>3){
			abc(--num1);
		}
		document.writeln(num1);
	}