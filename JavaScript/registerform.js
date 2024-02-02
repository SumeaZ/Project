 let form = document.getElementById('form');
    let firstname = document.getElementById('firstname');
    let lastname = document.getElementById('lastname');
    let email = document.getElementById('email');
    let password = document.getElementById('password');

    form.addEventListener('submit', e => {
        e.preventDefault();

        valideForm();
    });

    function valideForm(){
        let firstnameValue = firstname.value.trim();
        let lastnameValue = lastname.value.trim();
        let emailValue = email.value.trim();
        let passwordValue = password.value.trim();

        if(firstnameValue === ''){
            setErrorFor(firstname, 'This field is required');
        }else{
            setSuccessFor(firstname);
        }

        if(lastnameValue === ''){
            setErrorFor(lastname, 'This field is required');
        }else{
            setSuccessFor(lastname);
        }

        if(emailValue === ''){
            setErrorFor(email, 'This field is required');
        }else if(!isEmail(emailValue)){
            setErrorFor(email, 'Not a valid email!')
        }else{
            setSuccessFor(email);
        }

        if(passwordValue === '') {
		  setErrorFor(password, 'This field is required');
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

    function isFirstName(){
        return /^[A-Za-z]$/.test(firstname);
    }
    function isLastName(){
        return /^[A-Za-z]$/.test(lastname);
    }
    function isEmail(email) {
	   return /^[A-Za-z.-_]+@+[a-z]+\.[a-z]{2,3}$/.test(email);
    }
    function isPassword(password){
        return /[A-Za-z]+[0-9]{3}$/.test(password);
    }