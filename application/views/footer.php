<script src="<?php echo base_url('assets/jquery/jquery-1.12.0.min.js')?>"></script>
<script src="<?php echo base_url('assets/jquery/jquery-2.1.4.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/bootstrap.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/material.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/ripples.min.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/jquery.dropdown.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jquery.dataTables.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.bootstrap.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/buttons.html5.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/dataTables.buttons.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/jszip.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/pdfmake.min.js')?>"></script>
<script src="<?php echo base_url('assets/datatables/js/vfs_fonts.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap-datepicker/js/bootstrap-datepicker.min.js')?>"></script>
<!-- plugin javascript-->
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
<script src="<?php echo base_url('assets/bootstrap/js/classie.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/cbpAnimatedHeader.js')?>"></script>
    <!-- Contact Form JavaScript -->
<script src="<?php echo base_url('assets/bootstrap/js/jqBootstrapValidation.js')?>"></script>
<script src="<?php echo base_url('assets/bootstrap/js/contact_me.js')?>"></script>
<!-- costom theme javascript -->
<script src="<?php echo base_url('assets/bootstrap/js/agency.js')?>"></script>

<script>
var employ;
  $.material.init();
  $().dropdown({autoinit: "#selectaja"});


function redirectLoad(){
a = location.href.split('#');
if(a.length<2) return;
switch(a[1]){
case 'Employee': ajax_load_employ();break;
case 'Report': load_report(); break;
case 'Reward': load_reward(); break;
case 'Claim':load_claim();break;
}
}
    
function ajax_load_page_bph()
  {
      $("#te").slideUp("slow");
  $.ajax({
   url: "<?php echo site_url('home/load_page_bph') ?>",
   success: function(data)
   {
            $("#keterangan").html(data);
   },
  });
      $("#keterangan").hide();
      $("#keterangan").slideDown("slow");
  }
    
$(document).ready(function(){
    $("#keilmuan").click(function(){
        $("#te").slideUp("slow");
          $.ajax({
           url: "<?php echo site_url('home/load_page_bph') ?>",
           success: function(data)
           {
                    $("#keterangan").html(data);
           },
          });
          $("#keterangan").hide();
          $("#keterangan").slideDown("slow");
    });
});
</script>
</body>
</html>
