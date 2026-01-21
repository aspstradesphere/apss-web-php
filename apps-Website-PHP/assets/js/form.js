/**
 * Form Validation and AJAX Submission
 */

document.addEventListener('DOMContentLoaded', function () {
    const contactForm = document.getElementById('contactForm');

    if (contactForm) {
        contactForm.addEventListener('submit', function (e) {
            e.preventDefault();

            // Clear previous messages
            const formMessage = document.getElementById('formMessage');
            formMessage.style.display = 'none';

            // Validate form
            if (!validateForm()) {
                return;
            }

            // Get form data
            const formData = new FormData(contactForm);

            // Show loading state
            const submitButton = contactForm.querySelector('button[type="submit"]');
            const originalButtonText = submitButton.textContent;
            submitButton.textContent = 'Sending...';
            submitButton.disabled = true;

            // Submit form via AJAX
            fetch(contactForm.action, {
                method: 'POST',
                body: formData
            })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        showMessage('success', data.message || 'Thank you! Your message has been sent successfully. We will get back to you soon.');
                        contactForm.reset();
                    } else {
                        showMessage('error', data.message || 'Sorry, there was an error sending your message. Please try again or contact us directly.');
                    }
                })
                .catch(error => {
                    console.error('Error:', error);
                    showMessage('error', 'Sorry, there was an error sending your message. Please try again or contact us directly.');
                })
                .finally(() => {
                    // Reset button state
                    submitButton.textContent = originalButtonText;
                    submitButton.disabled = false;
                });
        });
    }

    // Form validation function
    function validateForm() {
        let isValid = true;

        // Get form fields
        const name = document.getElementById('name');
        const email = document.getElementById('email');
        const phone = document.getElementById('phone');
        const subject = document.getElementById('subject');
        const message = document.getElementById('message');

        // Clear previous errors
        clearErrors();

        // Validate name
        if (!name.value.trim()) {
            showFieldError(name, 'Please enter your name');
            isValid = false;
        } else if (name.value.trim().length < 2) {
            showFieldError(name, 'Name must be at least 2 characters');
            isValid = false;
        }

        // Validate email
        if (!email.value.trim()) {
            showFieldError(email, 'Please enter your email address');
            isValid = false;
        } else if (!isValidEmail(email.value.trim())) {
            showFieldError(email, 'Please enter a valid email address');
            isValid = false;
        }

        // Validate phone
        if (!phone.value.trim()) {
            showFieldError(phone, 'Please enter your phone number');
            isValid = false;
        } else if (!isValidPhone(phone.value.trim())) {
            showFieldError(phone, 'Please enter a valid phone number');
            isValid = false;
        }

        // Validate subject
        if (!subject.value) {
            showFieldError(subject, 'Please select a subject');
            isValid = false;
        }

        // Validate message
        if (!message.value.trim()) {
            showFieldError(message, 'Please enter your message');
            isValid = false;
        } else if (message.value.trim().length < 10) {
            showFieldError(message, 'Message must be at least 10 characters');
            isValid = false;
        }

        return isValid;
    }

    // Email validation
    function isValidEmail(email) {
        const emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        return emailRegex.test(email);
    }

    // Phone validation (supports various formats)
    function isValidPhone(phone) {
        const phoneRegex = /^[\d\s\-\+\(\)]{10,}$/;
        return phoneRegex.test(phone);
    }

    // Show field error
    function showFieldError(field, message) {
        field.style.borderColor = '#dc3545';
        const errorDiv = document.createElement('div');
        errorDiv.className = 'field-error';
        errorDiv.style.color = '#dc3545';
        errorDiv.style.fontSize = '14px';
        errorDiv.style.marginTop = '5px';
        errorDiv.textContent = message;
        field.parentElement.appendChild(errorDiv);
    }

    // Clear all errors
    function clearErrors() {
        const errorDivs = document.querySelectorAll('.field-error');
        errorDivs.forEach(div => div.remove());

        const fields = contactForm.querySelectorAll('input, select, textarea');
        fields.forEach(field => {
            field.style.borderColor = '#ddd';
        });
    }

    // Show success/error message
    function showMessage(type, text) {
        const formMessage = document.getElementById('formMessage');
        formMessage.style.display = 'block';
        formMessage.textContent = text;

        if (type === 'success') {
            formMessage.style.backgroundColor = '#d4edda';
            formMessage.style.color = '#155724';
            formMessage.style.border = '1px solid #c3e6cb';
        } else {
            formMessage.style.backgroundColor = '#f8d7da';
            formMessage.style.color = '#721c24';
            formMessage.style.border = '1px solid #f5c6cb';
        }

        // Scroll to message
        formMessage.scrollIntoView({ behavior: 'smooth', block: 'nearest' });
    }
});
