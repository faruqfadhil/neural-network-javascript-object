<!-- CEEATED FOR EXCERCISE MACHINE LEARNING
AT INFORMATICS ENGINGEERING EEPIS
BY FARUQ
22 DEC 2017
berhenti pada posisi error/tidak muncul saat clik button training -->

<html>
<head>
	<body>
		<br>
		<br>
		<br>
		<h1>data training</h1>
		<form>
			<table border="1" id="tbodyTraining">
				<tr>
					
					<td>
						endurance
					</td>
					<td>
						strength
					</td>
					<td>
						result
					</td>
				</tr>
				<tr>
					
					<td>
						9
					</td>
					<td>
						8
					</td>
					<td>
						bad (o)
					</td>
				</tr>
				<tr>
					
					<td>
						8
					</td>
					<td>
						7
					</td>
					<td>
						bad (o)
					</td>
				</tr>
				<tr>
					
					<td>
						7
					</td>
					<td>
						7
					</td>
					<td>
						bad (o)
					</td>
				</tr>
				<tr>
					
					<td>
						7
					</td>
					<td>
						4
					</td>
					<td>
						bad (o)
					</td>
				</tr>
				<tr>
					
					<td>
						3
					</td>
					<td>
						4
					</td>
					<td>
						good (1)
					</td>
				</tr>
				<tr>
					
					<td>
						1
					</td>
					<td>
						4
					</td>
					<td>
						good (1)
					</td>
				</tr>
				<tr>
					
					<td>
						2
					</td>
					<td>
						3
					</td>
					<td>
						good (1)
					</td>
				</tr>
				
			</table>
			<button type="button" id="training">start training</button>
			
		</form>

			<h1>data testing</h1>
			<table border="1" id="hipotes">
				<tr>
					
					<td>
						endurance
					</td>
					<td>
						stregth
					</td>
					<td>
						result
					</td>
				</tr>
				<tr>
					<td>
						<select name="x1" id="x1">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</td>
					<td>
						<select name="x2" id="x2">
							<option value="1">1</option>
							<option value="2">2</option>
							<option value="3">3</option>
							<option value="4">4</option>
							<option value="5">5</option>
							<option value="6">6</option>
							<option value="7">7</option>
							<option value="8">8</option>
							<option value="9">9</option>
							<option value="10">10</option>
						</select>
					</td>
					
					<td>
						<p id="result"></p>
					</td>
				</tr>
				
			</table>
				<button type="button" id="testbut">testing</button>
	</body>
</head>
<script src="jquery-1.11.3.min.js"></script>
<script>
	//var objek_training = new Object();
	//definition object
	var objek_training1 = {
		x1 : 1,
		x2 : 1,
		result: 1,
		setData : function(x1,x2,result){
			this.x1 = x1;
			this.x2 = x2;
			this.result = result;
		}

	};
	var objek_training2 = {
		x1 : 1,
		x2 : 1,
		result: 1,
		setData : function(x1,x2,result){
			this.x1 = x1;
			this.x2 = x2;
			this.result = result;
		}

	};
	var objek_training3 = {
		x1 : 1,
		x2 : 1,
		result: 1,
		setData : function(x1,x2,result){
			this.x1 = x1;
			this.x2 = x2;
			this.result = result;
		}

	};
	var objek_training4 = {
		x1 : 1,
		x2 : 1,
		result: 1,
		setData : function(x1,x2,result){
			this.x1 = x1;
			this.x2 = x2;
			this.result = result;
		}

	};
	var objek_training5 = {
		x1 : 1,
		x2 : 1,
		result: 1,
		setData : function(x1,x2,result){
			this.x1 = x1;
			this.x2 = x2;
			this.result = result;
		}

	};
	var objek_training6 = {
		x1 : 1,
		x2 : 1,
		result: 1,
		setData : function(x1,x2,result){
			this.x1 = x1;
			this.x2 = x2;
			this.result = result;
		}

	};
	var objek_training7 = {
		x1 : 1,
		x2 : 1,
		result: 1,
		setData : function(x1,x2,result){
			this.x1 = x1;
			this.x2 = x2;
			this.result = result;
		}

	};

	//function for random
	function getRandomArbitrary(min,max){
		return Math.random()*(max-min)+min;
	}
	var dataTraining = [];
	var w = [];
	var constBias = 1;
	var constEpoch =0;
	var consThreshold = 0;
	var decError = false;
	dataTraining[0] = objek_training1;
	dataTraining[1] = objek_training2;
	dataTraining[2] = objek_training3;
	dataTraining[3] = objek_training4;
	dataTraining[4] = objek_training5;
	dataTraining[5] = objek_training6;
	dataTraining[6] = objek_training7;
	// //set data to object
	dataTraining[0].setData(9,8,0);
	dataTraining[1].setData(8,7,0);
	dataTraining[2].setData(7,7,0);
	dataTraining[3].setData(7,4,0);
	dataTraining[4].setData(3,4,1);
	dataTraining[5].setData(1,4,1);
	dataTraining[6].setData(2,3,1);

	$('#training').click(function(event) {
		
		w[0] = getRandomArbitrary(-1,1);
		w[1] = getRandomArbitrary(-1,1);
		w[2] = getRandomArbitrary(-1,1);
		var miu = getRandomArbitrary(0,1);
		while(decError==false && constEpoch <=100){
			//epoch iterasi
			console.log("iterasi epoch = "+constEpoch);
			for(var i=0;i<dataTraining.length;i++){
				//attribute iterasi
				var sumData=0,output =0,error = 0,tampW0 =0,tampW1 =0,tampW2 =0;
				decError = true;
				sumData = (dataTraining[i].x1*w[0])+(dataTraining[i].x2*w[1])+(constBias*w[2]);
				console.log("iterasi attribute = "+i);
				console.log("x1 = "+dataTraining[i].x1);
				console.log("x2 = "+dataTraining[i].x2);
				console.log("bias = "+constBias);
				console.log("w1 = "+w[0]);
				console.log("w2 = "+w[1]);
				console.log("w3 = "+w[2]);
				console.log("sum = "+sumData);
				if(sumData>=consThreshold){
					output=1;
				}
				console.log("output = "+output);
				console.log("target = "+dataTraining[i].result);
				error = dataTraining[i].result - output;
				console.log("error = "+error);
				if(error!=0){
					//this is error;
					decError=false;
					tampW0 = w[0];
					tampW1 = w[1];
					tampW2 = w[2];
					w[0] = 0;
					w[1] = 0;
					w[2] = 0;
					//create new W
					w[0] = tampW0 + (miu*dataTraining[i].x1*error);
					w[1] = tampW1 + (miu*dataTraining[i].x2*error);
					w[2] = tampW2 + (miu*constBias*error);
					break;
				}

			}
			constEpoch++;
			console.log("==================================");
		}

	});

	// testingg
	$('#testbut').click(function(event) {
		var x1 = document.getElementById('x1').value;
		var x2 = document.getElementById('x2').value;
		var out = 0;
		var sum_result = (x1*w[0])+(x2*w[1])+(constBias*w[2]);
		console.log("============TESTING===========");
		console.log("x1 = "+x1);
		console.log("x2 = "+x2);
		console.log("w1 = "+w[0]);
		console.log("w2 = "+w[1]);
		console.log("w3 = "+w[2]);
		console.log("sum = "+sum_result);
		if(sum_result>=consThreshold){
			out = 1;
			document.getElementById('result').innerHTML = "good";
		}else{
			document.getElementById('result').innerHTML = "bad";
			out = 0;
		}
		console.log("output = "+out); 

	});


</script>
</html>