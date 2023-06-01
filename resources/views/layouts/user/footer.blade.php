<footer>
    <div class="container">
      <div class="col-lg-12">
        <p>Copyright © 2023 TechX. All rights reserved.</p>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('js/isotope.min.js') }}"></script>
  <script src="{{ asset('js/owl-carousel.js') }}"></script>
  <script src="{{ asset('js/counter.js') }}"></script>
  <script src="{{ asset('js/custom.js') }}"></script>
  <script src="{{ asset('js/cart.js') }}"></script>
  <script src="{{ asset('js/dropdown.js') }}"></script>
  <script src="{{ asset('js/notify.js') }}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>

  <script>
    document.addEventListener('DOMContentLoaded', function() {
      var notification = document.querySelector('.notification');
      var message = notification.querySelector('.message');
      var successMessage = '{{ session('success') }}';
  
      if (successMessage) {
        // Set the success message
        message.textContent = successMessage;
  
        // Show notification
        notification.classList.add('show');
  
        // Hide notification after 3 seconds
        setTimeout(function() {
          notification.classList.remove('show');
        }, 3000);
      }
    });
  </script>

   </body>
</html>