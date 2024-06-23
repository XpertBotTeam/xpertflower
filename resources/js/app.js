document.addEventListener("DOMContentLoaded", () => {
    const userButton = document.getElementById("userButton");
    const contactButton = document.getElementById("contactButton");
    const submitButton = document.getElementById("submitButton");
    const sendingTo = document.getElementById("sendingTo");
    const deliveryDate = document.getElementById("deliveryDate");

    userButton.addEventListener("click", () => {
        alert("User button clicked");
    });

    contactButton.addEventListener("click", () => {
        alert("Contact info: +961 76307006");
    });

    submitButton.addEventListener("click", () => {
        const sendingToValue = sendingTo.value;
        const deliveryDateValue = deliveryDate.value;

        if (!sendingToValue || !deliveryDateValue) {
            alert("Please fill in both fields");
        } else {
            alert(`Order sent to: ${sendingToValue} on ${deliveryDateValue}`);
        }
    });
});
