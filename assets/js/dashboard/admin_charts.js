//bar


  //line
  var ctxL = document.getElementById("lineChart").getContext('2d');
  var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
      labels: ["January", "February", "March", "April", "May", "June", "July" , "August"  , "September" , "October" , "November" , "December"],
      datasets: [{
          label: "Birthday",
          data: [65, 59, 80, 81, 56, 55, 40 , 50 , 60 , 70 , 100 , 70],
          backgroundColor: [
            'rgba(105, 0, 132, .2)',
          ],
          borderColor: [
            'rgba(200, 99, 132, .7)',
          ],
          borderWidth: 2
        },
        {
          label: "Mariage",
          data: [20, 43, 37, 22, 90, 22, 80 , 20 , 30 , 1  , 2 , 63 , 20],
          backgroundColor: [
            'rgba(0, 137, 132, .2)',
          ],
          borderColor: [
            'rgba(0, 10, 130, .7)',
          ],
          borderWidth: 2
        },
        {
          label: "Death",
          data: [28, 48, 90, 80, 86, 57, 90 , 12 , 20 , 30 , 38 , 40 , 54],
          backgroundColor: [
            'rgba(141, 161, 47, .2)',
          ],
          borderColor: [
            'rgba(242, 159, 64, .7)',
          ],
          borderWidth: 2
        }
      ]
    },
    options: {
      responsive: true
    }
  });
