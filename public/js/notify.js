document.addEventListener('DOMContentLoaded', function() {
    var notification = document.querySelector('.notification');
    var message = notification.querySelector('.message');
    var successMessage = '{{ session('success') }}';
  
    if (successMessage && successMessage.trim() !== '') {
      // Set the success message
      message.textContent = successMessage;
  
      // Show notification
      notification.classList.add('show');
  
      // Hide notification after 3 seconds
      setTimeout(function() {
        notification.classList.remove('show');
      }, 3000);
  
      // Clear the session flash data
      '{{ session()->forget('success') }}';
    }
  });
  