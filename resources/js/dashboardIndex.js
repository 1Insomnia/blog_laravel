const tabButtons = document.querySelectorAll(".tab-button");
const tabContent = document.querySelectorAll(".tab-content");

tabButtons.forEach(button => {
    button.addEventListener('click', (e) => {
        // Current Target
        const target = document.querySelector(button.dataset.tabTarget);
        // Hide all tab content
        tabContent.forEach(tab => tab.classList.add('hidden'));
        // Remove active class for each button
        tabButtons.forEach(button => button.classList.remove('bg-accent-2'));
        // Display current tab
        target.classList.remove('hidden');
        // Add active class for current button
        button.classList.add('bg-accent-2');
    })
})
