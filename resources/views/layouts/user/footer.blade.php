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
  <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/3.2.1/anime.min.js"></script>
   <!--  Sweet alert    -->
   <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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


    <script>
      function confirmDelete(id) {
        const swalWithBootstrapButtons = Swal.mixin({
          customClass: {
            confirmButton: 'btn btn-success',
            cancelButton: 'btn btn-danger mx-2'
          },
          buttonsStyling: false
        });

        swalWithBootstrapButtons.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonText: 'Yes, delete it!',
          cancelButtonText: 'No, cancel!',
          reverseButtons: true
        }).then((result) => {
          if (result.isConfirmed) {
            // Form submission code here
            document.getElementById('deleteForm_' + id).submit();

            swalWithBootstrapButtons.fire(
              'Deleted!',
              'User has been deleted.',
              'success'
            );
          } 
        });
      }
    </script>

    @stack('scripts')

    @livewireScripts

   </body>
</html>