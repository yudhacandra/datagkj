<?php
if (isset($alert)){ ?>
<script>
  Swal.fire({
  position: 'center',
  icon: 'success',
  title: '<?= $alert; ?>',
  showConfirmButton: false,
  timer: 500
})

</script>


<?php  unset($alert); }