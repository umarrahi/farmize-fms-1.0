// JavaScript for Tab Switching
document.addEventListener("DOMContentLoaded", function () {
    const tabButtons = document.querySelectorAll('[role="tab"]');
    const tabPanels = document.querySelectorAll('[role="tabpanel"]');

    // Add click event listener to each tab button
    tabButtons.forEach((button) => {
        button.addEventListener("click", () => {
            const targetId = button.getAttribute("data-hs-tab"); // Get the target tab content ID

            // Deactivate all tabs and hide their content
            tabButtons.forEach((btn) => btn.classList.remove("text-white", "bg-primary"));
            tabPanels.forEach((panel) => panel.classList.add("hidden"));

            // Activate the clicked tab and show its content
            button.classList.add("text-white", "bg-primary");
            document.querySelector(targetId).classList.remove("hidden");
        });
    });

    // Initialize the first tab as active by default
    tabButtons[0].classList.add("text-white", "bg-primary");
    tabPanels[0].classList.remove("hidden");
});