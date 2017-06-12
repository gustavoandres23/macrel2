</div>


<!--  Scripts-->
<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
<script src="<?php echo base_url()?>assets/js/materialize.js"></script>
<script src="<?php echo base_url()?>assets/js/init.js"></script>
<!--script form-->
<script>
$('.datepicker').pickadate({
  selectMonths: true, // Creates a dropdown to control month
  selectYears: 15 // Creates a dropdown of 15 years to control year
});
$(document).ready(function() {
   $('select').material_select();
 });

 $('#textarea1').val('');
 $('#textarea1').trigger('autoresize');
 $(".button-collapse").sideNav();

</script>


</body>
</html>
