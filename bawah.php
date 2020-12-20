
    <footer class="ftco-footer ftco-section" style="background: #1976d2; margin:0 !important; padding:15px;" >
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="ftco-footer-widget">
              <h2 class="ftco-heading-2">DESA PALEMBAPANG</h2>
              <p>Website Resmi Pemerintahan Desa Palembapang</p>
            </div>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft ">
              <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
              <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
            </ul>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget ml-md-5">
              <h2 class="ftco-heading-2">LINK CEPAT</h2>
              <ul class="list-unstyled">
                <li><a href="home" class="py-2 d-block">Home</a></li>
                <li><a href="informasi" class="py-2 d-block">Informasi Desa</a></li>
                <li><a href="galeri" class="py-2 d-block">Galeri Desa</a></li>
                <li><a href="berita" class="py-2 d-block">Berita Desa</a></li>
                <li><a href="data" class="py-2 d-block">Data Administratif</a></li>
                <li><a href="admin/login" class="py-2 d-block">Login Admin Web</a></li>
                </ul>
            </div>
          </div>
         
          <div class="col-md-6">
            <div class="ftco-footer-widget">
            	<h2 class="ftco-heading-2">Alamat</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Desa Palembapang Kecamatan Kalianda Kabupaten Lampung Selatan Provinsi Lampung</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text"> 0852 69754025</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">www.desapalembapang.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p>
  Copyright @2020 Nabilah Syaufii </p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

  <!-- Modal -->
  <div class="modal fade" id="modalRequest" tabindex="-1" role="dialog" aria-labelledby="modalRequestLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="modalRequestLabel">Make an Appointment</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#">
            <div class="form-group">
              <!-- <label for="appointment_name" class="text-black">Full Name</label> -->
              <input type="text" class="form-control" id="appointment_name" placeholder="Full Name">
            </div>
            <div class="form-group">
              <!-- <label for="appointment_email" class="text-black">Email</label> -->
              <input type="text" class="form-control" id="appointment_email" placeholder="Email">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_date" class="text-black">Date</label> -->
                  <input type="text" class="form-control appointment_date" placeholder="Date">
                </div>    
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <!-- <label for="appointment_time" class="text-black">Time</label> -->
                  <input type="text" class="form-control appointment_time" placeholder="Time">
                </div>
              </div>
            </div>
            

            <div class="form-group">
              <!-- <label for="appointment_message" class="text-black">Message</label> -->
              <textarea name="" id="appointment_message" class="form-control" cols="30" rows="10" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Make an Appointment" class="btn btn-primary">
            </div>
          </form>
        </div>
        
      </div>
    </div>
  </div>


  
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>
  <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
  <script>
      $(document).ready( function () {
      $('#table_id').DataTable();
  } );
  </script>
  <script type="text/javascript">

			function generateCalendar(d) {
				var days = howManyDays(d);
				var shift = getDayFirstDate(d);
				clear();
				for(var i=0; i<days;i++) {
					var posi_row = Math.floor((i+shift)/7);
					var posi_col = Math.floor((i+shift)%7);
					$('#calendar_display .r'+posi_row).children('.col'+posi_col).html(i+1);
				}
			}

			function clear(){
				$('#calendar_display tbody td').each(function(){
					$(this).html('');
				})
			}

			function getDayFirstDate(d) {
				var tempd = new Date();
				tempd.setFullYear(d.getFullYear());
				tempd.setMonth(d.getMonth());
				tempd.setDate(1);
				tempd.setHours(0);
				tempd.setMinutes(0);
				tempd.setSeconds(0);
				// var timeSince1970 = tempd.getTime();
				// var daysSince1970 = Math.floor(timeSince1970/(1000*60*60*24));
				// return (daysSince1970+4)%7;
				return tempd.getDay();
			}

			function howManyDays(d) {
				var m = d.getMonth()+1 ;
				if(m==1||m==3||m==5||m==7||m==8||m==10||m==12) return 31;
				if(m==2) {
					if(isLeapYear(d.getFullYear())) {
						return 29
					} else {
						return 28
					}
				}
				return 30;
			}

			function isLeapYear(year) {
				if(year%400==0) {
					return true;
				} else if(year%100==0) {
					return false;
				} else if(year%4==0) {
					return true;
				} else {
					return false;
				}
			}

			function updateDate(d, sign) {
				var m = d.getMonth();
				if(sign) {
					if(m+1>11) {
						d.setFullYear(d.getFullYear()+1);
						d.setMonth(0);
					} else {
						d.setMonth(m+1);
					}

				} else {
					if(m-1<0) {
						d.setFullYear(d.getFullYear()-1);
						d.setMonth(11);
					} else {
						d.setMonth(m-1);
					}

				}
			}

			$(function(){

				var d = new Date();
				$('#data_chooser').html(d.getFullYear()+' -  '+(d.getMonth()+1)+' ');
				generateCalendar(d);

				$('.left').click(function() {
					updateDate(d, 0);
					$('#data_chooser').html(d.getFullYear()+' -  '+(d.getMonth()+1)+' ');
					generateCalendar(d);

					return false;
				});

				$('.right').click(function() {
					updateDate(d, 1);
					$('#data_chooser').html(d.getFullYear()+' -  '+(d.getMonth()+1)+' ');
					generateCalendar(d);

					return false;
				});
			});



		</script>
  </body>
</html>