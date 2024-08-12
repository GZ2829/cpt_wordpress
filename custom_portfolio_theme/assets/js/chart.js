// Chart Options
Chart.defaults.global.defaultFontFamily = "'Roboto', sans-serif;";
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: skillVariables.skill_titles,
        datasets: [{
            label: 'Mastery',
            data: skillVariables.skill_numbers.map(Number),
            backgroundColor: skillVariables.skill_colors,
            borderColor: 0,
            borderWidth: 0
        }]
    },
    options: {
        legend: {
            display: false
        },
        title: {
            display: true,
            text: skillVariables.skill_chart_title,
            position: 'top',
            fontSize: 16,
            padding: 20
        },
        scales: {
            yAxes: [{
                ticks: {
                    min: 0,
                    max: 100,
                    callback: function(label, index, labels) {
                        switch (label) {
                            case 100:
                                return 'Master';
                            case 0:
                                return 'Beginner';
                            case 50:
                                return 'Adept';
                        }
                    }
                }
            }]
        }
    }
});