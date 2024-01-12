function calculateCalories(goal) {
    const maintenance = parseFloat(document.getElementById("maintenance").value);
    let calories = 0;

    if (goal === "lose") {
        calories = maintenance - 500; // A common deficit for weight loss
    }

    document.getElementById("calories").textContent = calories.toFixed(2);
}
