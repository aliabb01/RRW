<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'bottom-end',
    showConfirmButton: false,
    timer: 10000,
    timerProgressBar: true,
    onOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  
  Toast.fire({
    icon: 'info',
    title: '<span>Account has been successfully deleted!<br><small>We are sorry to see you go</small></span>',
    footer: '<a onclick="deleteFeedback()" class="delete-feedback text-primary" style="cursor:pointer;">Tell us why you deleted your account <i class="fas fa-question"></i></a>'    
  })
  </script>