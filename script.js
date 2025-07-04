function showCategory(category) {
    alert(`You selected the ${category} category.`);
    // Here, you can add functionality to display products specific to the category
}

// Search Functionality (Placeholder)
function searchProducts() {
    const query = document.getElementById('search-bar').value.toLowerCase();
    console.log('Searching for:', query);
    // Implement actual product search logic here
}

// Open Modals with Overlay
// Open Modals with Overlay
function openSignInModal() {
    document.getElementById('sign-in-modal').style.display = 'block';
    document.querySelector('.modal-overlay').style.display = 'block';
}

function openSignUpModal() {
    document.getElementById('sign-up-modal').style.display = 'block';
    document.querySelector('.modal-overlay').style.display = 'block';
}

function closeModal(modalId) {
    document.getElementById(modalId).style.display = 'none';
    document.querySelector('.modal-overlay').style.display = 'none';
}

// Check password match before submitting Sign Up form
document.getElementById('sign-up-form')?.addEventListener('submit', function (e) {
    const password = document.getElementById('signup-password').value;
    const confirmPassword = document.getElementById('signup-confirm-password').value;

    if (password !== confirmPassword) {
        e.preventDefault();
        alert('Passwords do not match');
    }
});
