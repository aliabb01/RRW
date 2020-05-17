<script>
    const Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 10000,
    timerProgressBar: true,
    onOpen: (toast) => {
      toast.addEventListener('mouseenter', Swal.stopTimer)
      toast.addEventListener('mouseleave', Swal.resumeTimer)
    }
  })
  
  Toast.fire({
    icon: 'success',
    title: '<span>Payment is successfully finished!<br><small>Check your email for the receipt</small><span>',
    footer: '<a class="mr-5" href="https://mail.google.com/mail/u/0/#inbox" target="_blank"><i class="far fa-envelope"></i> Check your email</a><a href="welcome" class="danger">Cancel here</a>'    
  })
  </script>

<style>
    .swal2-timer-progress-bar{
        background-color:dodgerblue;
    }
</style>