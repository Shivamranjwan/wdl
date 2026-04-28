let transactions = [];

function addTransaction(type) {
    const text = document.getElementById("text").value;
    let amount = parseFloat(document.getElementById("amount").value);

    if (text === "" || isNaN(amount)) {
        alert("Enter valid data");
        return;
    }

    // Make expense negative
    if (type === "expense") {
        amount = -Math.abs(amount);
    } else {
        amount = Math.abs(amount);
    }

    const transaction = {
        id: Date.now(),
        text,
        amount
    };

    transactions.push(transaction);
    updateUI();

    document.getElementById("text").value = "";
    document.getElementById("amount").value = "";
}

function updateUI() {
    const list = document.getElementById("list");
    list.innerHTML = "";

    let income = 0, expense = 0;

    transactions.forEach(t => {
        const li = document.createElement("li");
        li.classList.add(t.amount > 0 ? "plus" : "minus");

        li.innerHTML = `
            ${t.text} ₹${t.amount}
            <button onclick="deleteTransaction(${t.id})">x</button>
        `;

        list.appendChild(li);

        if (t.amount > 0) income += t.amount;
        else expense += t.amount;
    });

    document.getElementById("income").innerText = income;
    document.getElementById("expense").innerText = Math.abs(expense);
    document.getElementById("balance").innerText = income + expense;

    updateChart(income, Math.abs(expense));
}

function deleteTransaction(id) {
    transactions = transactions.filter(t => t.id !== id);
    updateUI();
}

let chart;

function updateChart(income, expense) {
    const ctx = document.getElementById("chart");

    if (chart) chart.destroy();

    chart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ['Income', 'Expense'],
            datasets: [{
                data: [income, expense]
            }]
        }
    });
}