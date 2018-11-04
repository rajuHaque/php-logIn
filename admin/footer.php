	<footer class="footer">
      <div class="container">
		<div class="row">
			<div class="col-sm-7 copyright">
				<span class="text-primay font-weight-bold">&copy;-2018 Md. Sharif Ullah Sarkar</span>
			</div>
			<div class="col-sm-5">
				<ul class="list-inline text-right mb-0 social">
					<li  class="list-inline-item"><i class="fab fa-facebook"></i></li>
					<li  class="list-inline-item"><i class="fab fa-twitter"></i></li>
					<li  class="list-inline-item"><i class="fab fa-linkedin"></i></li>
					<li  class="list-inline-item"><i class="fab fa-google-plus"></i></li>
				</ul>
			</div>
		</div>
      </div>
    </footer>
	</main>
  </div>
</div>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

    <!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>

    <!-- Graphs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.1/Chart.min.js"></script>
    <script>
      var ctx = document.getElementById("myChart");
      var myChart = new Chart(ctx, {
        type: 'line',
        data: {
          labels: ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
          datasets: [{
            data: [15339, 21345, 18483, 24003, 23489, 24092, 12034],
            lineTension: 0,
            backgroundColor: 'transparent',
            borderColor: '#007bff',
            borderWidth: 4,
            pointBackgroundColor: '#007bff'
          }]
        },
        options: {
          scales: {
            yAxes: [{
              ticks: {
                beginAtZero: false
              }
            }]
          },
          legend: {
            display: false,
          }
        }
      });
    </script>
  </body>
</html>
