document.addEventListener("DOMContentLoaded", function () {
    fetch("/chart-data")
        .then((response) => response.json())
        .then((data) => {
            const pieConfig = {
                type: "doughnut",
                data: {
                    datasets: [
                        {
                            data: [data.belumDiRespon, data.sudahDiRespon],
                            backgroundColor: ["#1c64f2", "#0694a2"],
                            label: "Laporan",
                        },
                    ],
                    labels: ["Genre Horror", "Total Movie"],
                },
                options: {
                    responsive: true,
                    cutoutPercentage: 80,
                    legend: {
                        display: false,
                    },
                },
            };

            const pieCtx = document.getElementById("pie");
            window.myPie = new Chart(pieCtx, pieConfig);
        });
});

document.addEventListener("DOMContentLoaded", function () {
    fetch("/chart-user")
        .then((response) => response.json())
        .then((data) => {
            const pieConfig = {
                type: "doughnut",
                data: {
                    datasets: [
                        {
                            data: [data.totalUser],
                            backgroundColor: ["#1c64f2"],
                            label: "User",
                        },
                    ],
                    labels: ["Total User"],
                },
                options: {
                    responsive: true,
                    cutoutPercentage: 80,
                    legend: {
                        display: false,
                    },
                },
            };

            const pieCtx = document.getElementById("pieuser");
            window.myPie = new Chart(pieCtx, pieConfig);
        });
});
