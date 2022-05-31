document.addEventListener("DOMContentLoaded", () => {
    const suffixField = document.querySelector("#suffix");
    const outputNode = document.querySelector("#isAvailable");

    suffixField.addEventListener("blur", (event) => {
        const currentSuffix = suffixField.value.trim();

        fetch(`/dashboard/query/${currentSuffix}`)
            .then((response) => response.json())
            .then((json) => {
                let message = `"${currentSuffix}"`;
                if (json.isAvailable) {
                    message += " is available!";
                    outputNode.classList.remove("text-red-500");
                    outputNode.classList.add("text-green-500");
                } else {
                    message += "is NOT available!";
                    outputNode.classList.add("text-red-500");
                    outputNode.classList.remove("text-green-500");
                }

                outputNode.textContent = message;
            });
    });
});
