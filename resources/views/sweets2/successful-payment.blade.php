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
    footer: '<span><i class="far fa-envelope mr-2"></i></span><a class="mr-5" href="https://mail.google.com/mail/u/0/#inbox" target="_blank"> Check your email</a><a href="javascript:void(0)" data-toggle="modal" data-target="#cancelModal" onclick="cancelForm()" class="cancel-payment-label danger">Cancel here</a>'    
  })
</script>



<script>
  /*function cancelForm(){
      Swal.fire({
  title: 'Are you sure you want to cancel your ticket?',
  text: "You won't be able to revert this!",
  icon: 'warning',
  showCancelButton: true,
  cancelButtonText: 'No, keep my ticket!',
  confirmButtonColor: '#3085d6',
  cancelButtonColor: '#d33',
  confirmButtonText: 'Yes, cancel!'
  confirmButtonHref
}).then((result) => {
  if (result.value) {
    Swal.fire(
      'Canceled!',
      'Your reservation has been canceled successfully.',
      'success'
    )
  }
})
    }*/
</script>

<style>
  .swal2-timer-progress-bar {
    background-color: dodgerblue;
  }

  .cancel-payment-label:hover {
    color: orangered;
    text-decoration: underline;
  }
</style>