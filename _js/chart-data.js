var randomScalingFactor = function() { return Math.round(Math.random() * 1000) };
var randomScalingFactor10 = function() { return Math.round(Math.random() * 100) };


var lineChartData = {
    labels: ["Ciências Humanas", "Ciências da Natureza", "Linguagens", "Matemática"],
    datasets: [{
            label: "My First dataset",
            fillColor: "rgba(178,55,47,0.2)",
            strokeColor: "rgba(255,127,118,1)",
            pointColor: "rgba(178,55,47,1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(178,55,47,1)",
            data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
        },

        {
            label: "My Second dataset",
            fillColor: "rgba(143,255,189,0.2)",
            strokeColor: "rgba(65,178,111,1)",
            pointColor: "rgba(37, 190, 174, 1)",
            pointStrokeColor: "#fff",
            pointHighlightFill: "#fff",
            pointHighlightStroke: "rgba(37, 190, 174, 1)",
            data: [randomScalingFactor(), randomScalingFactor(), randomScalingFactor(), randomScalingFactor()]
        }
    ]

}


var barChartData = {
    labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Outubro", "Novembro", "Dezembro"],
    datasets: [

        {
            fillColor: "rgba(143,255,189,0.2)",
            strokeColor: "rgba(65,178,111,0.8)",
            highlightFill: "rgba(65,178,111,0.75)",
            highlightStroke: "rgba(65,178,111,1)",
            data: [randomScalingFactor10(), randomScalingFactor10(), randomScalingFactor10(), randomScalingFactor10(), randomScalingFactor10(), randomScalingFactor10(), randomScalingFactor10(), randomScalingFactor10(), randomScalingFactor10(), randomScalingFactor10(), randomScalingFactor10(), randomScalingFactor10()]
        }
    ]

}

var pieData = [{
        value: 60,
        color: "#FF7F76",
        highlight: "#B2372F",
        label: "Questões Incorretas"
    },
    {
        value: 120,
        color: "#8FFFBD",
        highlight: "#41B26F",
        label: "Questões Corretas"
    }

];