function validateForm() {
    let nameInput = document.getElementById('name');
    let emailInput = document.getElementById('email');

    let isValid = true;

    // Reset error messages
    let errorMessages = document.querySelectorAll('.error');
    errorMessages.forEach(msg => msg.textContent = '');

    //  Name Validation
    let name = nameInput.value.trim();
    if (name === '') {
      showError('name', 'Name cannot be empty');
      isValid = false;
    }

    // Email  Validation
    let email = emailInput.value.trim();
    if (email === '') {
      showError('email', 'Email cannot be empty');
      isValid = false;
    } else if (!isValidEmail(email)) {
      showError('email', 'Please enter a valid email address');
      isValid = false;
    }

    return isValid;
  }

  function showError(field, message) {
    let errorElement = document.getElementById(field + 'Error');
    errorElement.textContent = message;
  }

  function isValidEmail(email) {
    return true.test(email);
  }