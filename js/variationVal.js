const Button = document.getElementById('addVar');



Button.addEventListener('click', (e)=> {	
	addProduct(e);
});

const addProduct = (e) =>{
	const product = document.getElementById('product');
	const size = document.getElementById('size');
	const color = document.getElementById('color');
	const image = document.getElementById('image');


    const catValue = product.value
    const sizeValue = size.value
    const colorValue = color.value.trim();
    const imageValue = image.value;

    if(catValue === '--Select product--') {
		setEmptyFor(product, 'product cannot be blank');
		e.preventDefault();
	}else{
		setNotEmptyFor(product);
	}

	if(sizeValue === '--Select size--'){
		setEmptyFor(size, 'size cannot be blank');
		e.preventDefault();
	} else{
		setNotEmptyFor(size);
	}

	if(colorValue === '--Select color--'){
		setEmptyFor(color, 'Title cannot be blank');
		e.preventDefault();
	}
    else{
		setNotEmptyFor(color);
	}

	if(imageValue === '--Select image--'){
		setEmptyFor(image, 'Select Product Image');
		e.preventDefault();
	} else{
		setNotEmptyFor(image);
	}


	if(catValue !== '' && sizeValue !== '' && colorValue !== '' && imageValue !== ''){
		Loader();
		Loader.show();
		alert("Products Have Been Added");
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

function isFormat(text){
	return /^[A-Za-z][A-Za-z\'\-]+([\ A-Za-z][A-Za-z\'\-]+)*$/.test(text);
}



const valSize = () =>{

	const sizee = document.getElementById('sizee');

	const sizeeValue = sizee.value.trim();

	if(sizeeValue === ''){
		setEmptyFor(sizee, 'size cannot be blank');
		return false;
	} else{
		setNotEmptyFor(sizee);
	}


}

const valColor = () =>{

	const colorr = document.getElementById('colorr');

	const colorrValue = colorr.value.trim();

	if(colorrValue === ''){
		setEmptyFor(colorr, 'color cannot be blank');
		return false;
	} else{
		setNotEmptyFor(colorr);
	}


}

const valImage = () =>{

	const imagee = document.getElementById('imagee');

	const imageeValue = imagee.value.trim();

	if(imageeValue === ''){
		setEmptyFor(imagee, 'Select Product Image');
		return false;
	} else{
		setNotEmptyFor(imagee);
	}


}