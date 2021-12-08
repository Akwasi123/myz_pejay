const button = document.getElementById('updatePass');

const pass = document.getElementById('pass');
const cpass = document.getElementById('cpass');

button.addEventListener('click', (e)=> {	
	register(e);
    // console.log('wow');
});

const register = (e) =>{
	const password = pass.value.trim();
	const cpassword = cpass.value.trim();
    const passreg = /^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/;
    const passError = document.getElementById("passwordError");
    const cpassError = document.getElementById("cpasswordError");
    const testPassword = passreg.test(password);
    const testPassword2 = passreg.test(cpassword);

    
	
	if(!password){
        passError.innerText = "* Password is required";
        passError.style.color='red';
        
        e.preventDefault();
    }
    else{
        if(!testPassword){
            passError.innerText = "* Enter a valid password";
            pass.style.borderColor = "red";
            e.preventDefault();
        }
        else{
            passError.innerText = "";
            passError.style.color='green';
        }
    }

	if(!cpassword){
        cpassError.innerText = "* Password is required";
        cpassError.style.color = "red";
        e.preventDefault();
    }
    else{
        if(!testPassword2){
            cpassError.innerText = "* Enter a valid password";
            cpassError.style.color = "red";
            e.preventDefault();
        }
        else{
            cpassError.innerText = "";
            cpassError.style.color = "green";
        }
    }

}



