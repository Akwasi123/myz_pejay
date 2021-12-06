const Button = document.getElementById('addVar');
const product = document.getElementById('product');
const size = document.getElementById('size');
const color = document.getElementById('color');
const image = document.getElementById('image');


Button.addEventListener('click', (e)=> {	
	addProduct(e);
});

const addProduct = (e) =>{
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

	if(colorValue === ''){
		setEmptyFor(color, 'Title cannot be blank');
		e.preventDefault();
	}
    else if(!isFormat(colorValue)){
        setEmptyFor(color, 'Input must be a number');
        e.preventDefault();
    }
    else{
		setNotEmptyFor(color);
	}

	if(imageValue === ''){
		setEmptyFor(image, 'Select Product Image');
		e.preventDefault();
	} else{
		setNotEmptyFor(image);
	}


	if(catValue !== '' && sizeValue !== '' && colorValue !== '' && imageValue !== '' && descValue !== '' && imageValue !== '' && keyValue !== '' && stockValue !== ''){
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

