

            
            
            </div>
            <div class="mFooter">
              <p class="text-center fw-bold text-light">Page rendered in <strong>{elapsed_time}</strong> seconds. <?php echo  (ENVIRONMENT === 'development') ?  'La^Pharma V <strong> 1.0</strong>' : '' ?> | <a style="text-decoration: none; color: deepskyblue" href="https://infoconsults.info/" target="_blank">@ObuntuTechnologies</a></p>
            </div>
        </div>
        
        <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
        
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V" crossorigin="anonymous"></script>

        <!-- Popper JS for dropdowns and tooltips -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
        
        <!-- Datatables.net -->
        <script src="https://cdn.datatables.net/2.2.2/js/dataTables.js"></script>


        <!-- --------------------- SITE JS LINKS ------------- -->
        <!-- <script src="/assets/js/jquery.min.js"></script> -->
        <!-- <script src="/assets/js/jquery-migrate-3.0.1.min.js"></script>
        <script src="/assets/js/popper.min.js"></script> -->
        <!-- <script src="/assets/js/bootstrap.min.js"></script> -->
        <!-- <script src="/assets/js/jquery.easing.1.3.js"></script>
        <script src="/assets/js/jquery.waypoints.min.js"></script>
        <script src="/assets/js/jquery.stellar.min.js"></script>
        <script src="/assets/js/owl.carousel.min.js"></script>
        <script src="/assets/js/jquery.magnific-popup.min.js"></script>
        <script src="/assets/js/aos.js"></script>
        <script src="/assets/js/jquery.animateNumber.min.js"></script>
        <script src="/assets/js/bootstrap-datepicker.js"></script>
        <script src="/assets/js/scrollax.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
        <script src="/assets/js/google-map.js"></script>
        <script src="/assets/js/main.js"></script> -->

          <script>                 
            let table = new DataTable('#datatable1', {
                scrollX: true,
                scrollCollapse: true,
            });

            // Toggling the full
            let icon = document.getElementById('setFullScreenIcon');
            var elem = document.documentElement;

            icon.addEventListener("click", ()=>{
              if(icon.className == "bi bi-arrows-fullscreen text-white fs-4"){
                openFullscreen()
                icon.className = "bi bi-fullscreen-exit text-white fs-4";
              }
              else{
                icon.className = "bi bi-arrows-fullscreen text-white fs-4";
                closeFullscreen()
              }
            })

            /* View in fullscreen */
            function openFullscreen() {
              if (elem.requestFullscreen) {
                elem.requestFullscreen();
              } else if (elem.webkitRequestFullscreen) { /* Safari */
                elem.webkitRequestFullscreen();
              } else if (elem.msRequestFullscreen) { /* IE11 */
                elem.msRequestFullscreen();
              }
            }

            /* Close fullscreen */
            function closeFullscreen() {
              if (document.exitFullscreen) {
                document.exitFullscreen();
              } else if (document.webkitExitFullscreen) { /* Safari */
                document.webkitExitFullscreen();
              } else if (document.msExitFullscreen) { /* IE11 */
                document.msExitFullscreen();
              }
            }


            // Initializing tooltips
            const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]')
            const tooltipList = [...tooltipTriggerList].map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl))

          </script>
  </body>
</html>