function calculateCalories(goal) {
    const maintenance = parseFloat(document.getElementById("maintenance").value);
    let calories = 0;

    if (goal === "gain") {
        calories = maintenance + 500; // A common surplus for weight gain
    }

    document.getElementById("calories").textContent = calories.toFixed(2);
}
