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
    <!-- Задание 5: -->
