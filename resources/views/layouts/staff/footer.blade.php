  {{-- <footer >
        <div class="container-fluid">
          <nav>
            <ul>
              <li>
                <a href="https://www.crispy-code.com"> CrispyCode </a>
              </li>
            </ul>
          </nav>
          <div class="copyright" id="copyright">
            &copy;
            <script>
              document
                .getElementById("copyright")
                .appendChild(document.createTextNode(new Date().getFullYear()));
            </script>
            - Developed by
            <a href="https://www.crispy-code.com" target="_blank">CrispyCode</a>
          </div>
        </div>
    </footer> --}}
    </div>
    <!--   Core JS Files   -->
    <script src="{{ asset('assets/js/core/jquery.min.js') }} "></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }} "></script>
    <script src="{{ asset('assets/js/core/bootstrap.min.js') }} "></script>
    <script src="{{ asset('assets/js/plugins/perfect-scrollbar.jquery.min.js') }}"></script>
    <!--  Google Maps Plugin    -->
    <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
    <!--  Notifications Plugin    -->
    <script src="{{ asset('assets/js/plugins/bootstrap-notify.js') }}"></script>
    <!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="{{ asset('assets/js/now-ui-dashboard.min.js?v=1.5.0') }}" type="text/javascript"></script>
    <!--  Sweet alert    -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

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
