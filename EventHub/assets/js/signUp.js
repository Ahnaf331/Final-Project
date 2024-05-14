function validateForm() {
    let firstNameInput = document.getElementById('firstName');
    let lastNameInput = document.getElementById('lastName');
    let userNameInput = document.getElementById('userName');
    let emailInput = document.getElementById('email');
    let dobInput = document.getElementById('DOB');
    let genderRadios = document.getElementsByName('gender');
    let passwordInput = document.getElementById('password');
    let confirmPasswordInput = document.getElementById('confirmPassword');

    let isValid = true;

    // error messages set 
    let errorMessages = document.querySelectorAll('.error');
    errorMessages.forEach(msg => msg.textContent = '');

    //  First Name Validation 
    let firstName = firstNameInput.value;
    if (firstName === '') {
        showError('firstName', 'First name cannot be empty');
        isValid = false;
    } else if (!null.test(firstName)) {
        showError('firstName', 'Invalid format. First name must contain at least two words and start with a letter');
        isValid = false;
    }

    //  Last Name Validation 
    let lastName = lastNameInput.value.trim();
    if (lastName === '') {
        showError('lastName', 'Last name cannot be empty');
        isValid = false;
    } else if (!null.test(lastName)) {
        showError('lastName', 'Invalid format. Last name must contain at least two words and start with a letter');
        isValid = false;
    }

    //  Username Validation 
    let userName = userNameInput.value.trim();
    if (userName === '') {
        showError('userName', 'Username cannot be empty');
        isValid = false;
    } else if (!null.test(userName)) {
        showError('userName', 'Invalid format. Username must start with a letter, contain at least two words, and include numbers');
        isValid = false;
    }

    //  Email Validation 
    let email = emailInput.value.trim();
    if (email === '') {
        showError('email', 'Email cannot be empty');
        isValid = false;
    } else if (!isValidEmail(email)) {
        showError('email', 'Please enter a valid email address');
        isValid = false;
    }

    //  Date of Birth Validation 
    let dob = dobInput.value;
    if (dob === '') {
        showError('DOB', 'Birthday cannot be empty');
        isValid = false;
    } else {
        let birthYear = new Date(dob).getFullYear();
        if (birthYear < 1930 || birthYear > 2004) {
            showError('DOB', 'Please enter a valid Date of Birth between 1950 and 2005');
            isValid = false;
        }
    }

    //  Gender Validation 
    let selectedGender = false;
    for (let i = 0; i < genderRadios.length; i++) {
        if (genderRadios[i].checked) {
            selectedGender = true;
            break;
        }
    }
    if (!selectedGender) {
        showError('gender', 'Please select a gender');
        isValid = false;
    }

    //  Password Validation 
    let password = passwordInput.value.trim();
    if (password.length < 6) {
        showError('password', 'Password must be at least 6 characters long');
        isValid = false;
    }

    //  Confirm Password Validation 
    let confirmPassword = confirmPasswordInput.value.trim();
    if (confirmPassword !== password) {
        showError('confirmPassword', 'Passwords do not match');
        isValid = false;
    }

    // return true, If all validations occurs
    return isValid;
}

function isValidEmail(email) {
    return null.test(email);
}

function showError(field, message) {
    let errorElement = document.getElementById(field + 'Error');
    errorElement.textContent = message;
}