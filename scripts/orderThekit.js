const form = document.getElementById('form');
const forname = document.getElementById('forname');
const surname = document.getElementById('surname');
const houseno = document.getElementById('houseno');
const street = document.getElementById('street');
const postcode = document.getElementById('postcode');
const city = document.getElementById('city');
const email = document.getElementById('email');
//const datetime = document.getElementById('datetime');



const phone = document.getElementById('phone');

form.addEventListener('submit', e => {
	e.preventDefault();

	checkInputs();
});

function checkInputs() {
	// trim to remove the whitespaces
	const fornameValue = forname.value.trim();
  const surnameValue = surname.value.trim();
	const housenoValue = houseno.value.trim();
	const streetValue = street.value.trim();
	const postcodeValue = postcode.value.trim();
	const cityValue = city.value.trim();
	const emailValue = email.value.trim();
	const phoneValue = phone.value.trim();
  //const dateValue = datetime.value;

	if(fornameValue === '') {
		setErrorFor(forname, 'Forname cannot be blank');
	} else if (!isForname(fornameValue)) {
	setErrorFor(forname, 'Not a valid Forname');
	} else {
		setSuccessFor(forname);
	}


	if(surnameValue === '') {
		setErrorFor(surname, 'Surname cannot be blank');

	} else if (!isForname(surnameValue)){
		setErrorFor(surname, 'Not a valid Surname');
	}else{
			setSuccessFor(surname);
	}



	if(housenoValue === '') {
		setErrorFor(houseno, 'House number cannot be blank');
		// test if it is a number between 1 and 999
	}
else if ((housenoValue)>=999) {
setErrorFor(houseno, 'House number cannot be greater than 999');
}

	else if (!isNumber(housenoValue)){
		setErrorFor(houseno, 'Not a valid house number');
	}
	else {
		setSuccessFor(houseno);
	}


	if(streetValue === '') {
		setErrorFor(street, 'Street name cannot be blank');
		// test if it is a long character
	} else if (!isForname(streetValue)) {
		setErrorFor(street, 'Not a valid street name');

	} else {
		setSuccessFor(street);
	}





	if(postcodeValue === '') {
		setErrorFor(postcode, 'Post Code cannot be blank');
			// test if it is a correct format for postcode
		} else if (!isValidPostcode(postcodeValue)) {
	setErrorFor(postcode, 'Not a valid postcode');

	} else {
		setSuccessFor(postcode);
	}


	if(cityValue === '') {
		setErrorFor(city, 'City name cannot be blank');
		// test if it is a long character
	} else if (!isForname(cityValue)) {
setErrorFor(city, 'Not a valid city name');
	} else {


		setSuccessFor(city);
	}


	if(emailValue === '') {
		setErrorFor(email, 'Email cannot be blank');
	} else if (!isEmail(emailValue)) {
		setErrorFor(email, 'Not a valid email');
	} else {
		setSuccessFor(email);
	}


	if(phoneValue === '') {
		setErrorFor(phone, 'Phone number cannot be blank');
			// test if it is  composed with 11 number
	} else if (!isPhone(phoneValue)) {
		setErrorFor(phone, 'Not a valid mobile phone number');

	} else {

		setSuccessFor(phone);
	}
}

//-----------------------------------------------------------
// datetime picker need to be greater than a current date
//var minDate=new datetime();


//if(datetime<minDate){
//	setErrorFor(datetime, 'Not a valid date choosed');
//}






//-----------------------------------
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
	return /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/.test(email);
}


function isForname(forname) {
return /([a-zA-Z])/.test(forname);
}


function isNumber(houseno) {
return /^-?[\d.]+(?:e-?\d+)?$/.test(houseno);
}



function isValidPostcode(postcode) {
return /^[a-zA-Z]{1,2}[0-9]{1,2} ?[0-9][a-zA-Z]{2}$/ .test(postcode);
}


function isPhone(phone) {
return /^\d{10}$/.test(phone);
}
