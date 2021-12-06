const button = document.getElementById('add');
const brandName = document.getElementById('brand');
const catName = document.getElementById('cat');


button.addEventListener('click', (e)=>{
    brandValidate(e);

});

button.addEventListener('click', (e)=>{
	CatValidate(e);

});


const brandValidate = (e) =>{
    const brandValue = brandName.value.trim();

    if(brandValue === '') {
		setEmptyFor(brandName, 'Field cannot be blank');
		e.preventDefault();
	} else if (!isFormat(brandValue)) {
		setEmptyFor(brandName, 'Format Invalid: Eg. Sony');
		e.preventDefault();
	} else {
		setNotEmptyFor(brandName);
	}

    if(brandValue != '' && !isFormat(brandValue)){
		Loader();
		Loader.show();
		alert("Format Acceptable. Success");
	}
}


const CatValidate = (e) =>{
	const catValue = catName.value.trim();

	if(catValue === '') {
		setEmptyFor(catName, 'Field cannot be blank');
		e.preventDefault();
	} else if (!isFormat(catValue)) {
		setEmptyFor(catName, 'Format Invalid: Eg. Phone');
		e.preventDefault();
	} else {
		setNotEmptyFor(catName);
	}

    if(catValue != '' && !isFormat(catValue)){
		Loader();
		Loader.show();
		alert("Format Acceptable. Success");
	}

}







function setEmptyFor(input, message) {
	const formControl = input.parentElement;
	const small = formControl.querySelector('small');
	formControl.className = 'form-control error';
	small.innerText = message;
}

function setNotEmptyFor(input) {
	const formControl = input.parentElement;
	formControl.className = 'form-control success';
}


function isFormat(brandName) {
	return  /^[A-Za-z][A-Za-z\'\-]+([\ A-Za-z][A-Za-z\'\-]+)*$/.test(brandName);
}