<!-- Задание 1 Дан инпут. В него вводится число. По потери фокуса найдите сумму цифр этого числа. -->
<script>
		"use strict";
		let elem = document.querySelector('.main input');
		let elem1 = document.querySelector('.main');
		let p = document.createElement('p');
		
		elem.addEventListener('blur', function() {
			console.log(elem);
			let k = elem.value.split('');
			console.log(k);
			let count = 0;
			for (let s of k){
				count +=+s;				
			}
			p.innerHTML = count;
			elem1.append(p);
			console.log(count);

		});
	</script>
 <!-- Задание 5: Даны 4 инпута. В первый инпут вводится ФИО через пробел. По потери фокуса запишите фамилию, имя и отчество в остальные 3 инпута -->
    <script>
		"use strict";
		let elems = document.querySelectorAll(".Need");
		let elem = document.querySelector('.main input');
		let p = document.createElement('p');
		
		elem.addEventListener('blur', function() {
			console.log(elem);
			let k = elem.value.split(' ');
			console.log(k);
			let count = 0;
			for (let s of k){
			 	elems[count].value = s;
				count++;				
			 }
		});
	</script>
    <!--Задание 6: Дан инпут. В него вводится ФИО через пробел. ФИО вводится с маленькой буквы. Сделайте так, чтобы по потери фокуса инпутом, введенные фамилия, имя и отчество автоматически стали записанными с большой буквы (в этом же инпуте).  -->
    <script>
		"use strict";
		let elems = document.querySelectorAll(".Need");
		let elem = document.querySelector('.main input');
		let p = document.createElement('p');
		
		elem.addEventListener('blur', function() {
			console.log(elem);
			let k = elem.value.split(' ');
			console.log(k);
			let result = "";
			for (let s of k){
			 	result +=UppFirst(s) + " ";			
			 }
			elem.value = result;
			// elem1.append(p);
			// console.log(count);
			function UppFirst(str){
				if(!str) return;
				return str[0].toUpperCase() + str.slice(1);
			}
		});
	</script>