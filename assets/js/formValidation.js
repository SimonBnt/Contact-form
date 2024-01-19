const submitInputs = document.getElementById("submitBtn")

const nameInput = document.getElementById("nameInput")
const nameValidationMessage = document.getElementById("nameValidation")
const nameErrorMessage = document.getElementById("nameError")

const emailInput = document.getElementById("emailInput")
const emailValidationMessage = document.getElementById("emailValidation")
const emailErrorMessage = document.getElementById("emailError")

const messageInput = document.getElementById("messageInput")
const messageValidationMessage = document.getElementById("messageValidation")
const messageErrorMessage = document.getElementById("messageError")

const contactForm = document.getElementById("contactForm")

const contactErrorMessage = document.getElementById("contactErrorMessage")

const displayMessage = (element, message, color) => {
    element.style.display = "block"
    element.innerHTML = message
    element.style.color = color
}

const clearErrorMessage = (errorMessage) => {
    errorMessage.innerHTML = ""
}

const resetForm = (form) => {
    form.reset()
    clearErrorMessage(contactErrorMessage)

    nameValidationMessage.innerHTML = ""
    emailValidationMessage.innerHTML = ""
    messageValidationMessage.innerHTML = ""
}

const validateName = (input) => {
    if (input.value === "" || input.value == null) {
        nameValidationMessage.innerHTML = ""
        nameErrorMessage.innerHTML = "Your name must be complete"
    } else if (!input.value.match(/^[A-Za-z\s]+$/)) {
        nameValidationMessage.innerHTML = ""
        nameErrorMessage.innerHTML = "The name must be in correct format"
    } else {
        nameErrorMessage.innerHTML = ""
        nameValidationMessage.innerHTML = "<i class='fas fa-check-circle'></i>"
    }
}

const validateEmail = (input) => {
    if (input.value === "" || input.value == null) {
        emailValidationMessage.innerHTML = ""
        emailErrorMessage.innerHTML = "Your mail have to be complete"
    } else if (!input.value.match(/^[^\s@]+@[^\s@]+\.[^\s@]+$/)) {
        emailValidationMessage.innerHTML = ""
        emailErrorMessage.innerHTML = "Your mail must be in correct format"
    } else {
        emailErrorMessage.innerHTML = ""
        emailValidationMessage.innerHTML = "<i class='fas fa-check-circle'></i>"
    }
}

const validateMessage = (input) => {
    if (input.value === "" || input.value == null) {
        messageValidationMessage.innerHTML = ""
        messageErrorMessage.innerHTML = "A message is necessary to understand your need."
    } else {
        messageErrorMessage.innerHTML = ""
        messageValidationMessage.innerHTML = "<i class='fas fa-check-circle'></i>"
    }
} 

contactForm.addEventListener("submit", (e) => {
    validateName(nameInput)
    validateEmail(emailInput)
    validateMessage(messageInput)

    const errorMessages = [nameErrorMessage.innerHTML, emailErrorMessage.innerHTML, messageErrorMessage.innerHTML]

    if (errorMessages.some(message => message !== "")) {
        displayMessage(contactErrorMessage, "Please fill the form correctly before submitting.", "indianred")
        e.preventDefault()
    } else {
        displayMessage(contactErrorMessage, "Your form has been submitted successfully.", "mediumseagreen")
        contactForm.submit()
        resetForm(contactForm)
    }
})