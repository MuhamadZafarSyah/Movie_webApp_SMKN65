document.addEventListener("DOMContentLoaded", function () {
    fetch("/user-traffic-data")
        .then((response) => response.json())
        .then((data) => {
            const lineConfig = {
                type: "line",
                data: {
                    labels: data.dates,
                    datasets: [
                        {
                            label: "Pengguna",
                            backgroundColor: "#9333ea",
                            borderColor: "#9333ea",
                            data: data.counts,
                            fill: false,
                        },
                    ],
                },
                options: {
                    responsive: true,
                    legend: {
                        display: false,
                    },
                    tooltips: {
                        mode: "index",
                        intersect: false,
                    },
                    hover: {
                        mode: "nearest",
                        intersect: true,
                    },
                    scales: {
                        x: {
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: "Date",
                            },
                        },
                        y: {
                            display: true,
                            scaleLabel: {
                                display: true,
                                labelString: "Users",
                            },
                        },
                    },
                },
            };

            const lineCtx = document.getElementById("line");
            window.myLine = new Chart(lineCtx, lineConfig);
        });
});
