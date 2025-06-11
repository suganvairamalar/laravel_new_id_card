<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Generate Random number</title>
	<script type="text/javascript">
		//below is for page load random number generate
		function test() {
  var min = 1;
  var max = 9999999999;
  var num = Math.floor(Math.random() * (max - min + 1)) + min;
  var timeNow = new Date().getTime();
  document.getElementById('field10').value = num + '_' + timeNow;
}
window.onload = test;
setTimeout(function () {
  console.log(document.getElementById('field10').value);
}, 500);

//below is for onclick random number generate
function generateRandomNumber() {
  const randomNumber = getRndInteger(10000, 99999);
  document.getElementById('numberbox').value = randomNumber;
}

function getRndInteger(min, max) {
  return Math.floor(Math.random() * (max - min + 1)) + min;
}

	</script>
</head>
<body>
<input type="hidden" id="field10" />
<input type="text" name="numberbox" id="numberbox" value="" size="17" maxlength="10" required>
<button type="button" onclick="generateRandomNumber()">Number Generator</button>
</body>
</html>