
    let form = document.getElementById('form');
    let email = document.getElementById('email');
    let password = document.getElementById('password');

    form.addEventListener ('submit', (e) =>{
        e.preventDefault();

        checkInputs();
    });

    function checkInputs(){
        let emailValue = email.value.trim();
        let passwordValue = password.value.trim();

        if(emailValue === '') {
		   setErrorFor(email, 'This field is required');
	    } else if (!isEmail(emailValue)) {
		    setErrorFor(email, 'Not a valid email!');
	    } else {
		   setSuccessFor(email);
	    }
	
	    if(passwordValue === '') {
		  setErrorFor(password, 'This field is required');
	    } else if(!isPassword(passwordValue)){
		   setSuccessFor(password, 'Not a valid password!');
	    }else {
		   setSuccessFor(password);
	    }
    }
    function setErrorFor(input, message) {
	   const formControl = input.parentElement;
	   const small = formControl.querySelector('small');
	   formControl.className = 'form-control error';
	   small.innerText = message;
    }

    function setSuccessFor(input) {
	   const formControl = input.parentElement;
	   formControl.className = 'form-control success';
    }

    function isEmail(email) {
	   return /^[A-Za-z.-_]+@+[a-z]+\.[a-z]{2,3}$/.test(email);
    }
    function isPassword(password) {
	   return /^[A-Za-z.-_]+@+[a-z]+\.[a-z]{2,3}$/.test(password);
    }


