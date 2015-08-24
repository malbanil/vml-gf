(function ($) {
   $(document).ready(function() {
      
      $('#sabform_tabs li').click(function(){
          var tab_id = $(this).attr('data-tab');
          $('#sabform_tabs li').removeClass('current');
          $('#sabm-globalforms-form .form-wrapper').removeClass('current');
          $(this).addClass('current');
          $("#"+tab_id).addClass('current');
      });

      $('.sabm-forms-next').click(function(){
          var tab_id = $(this).attr('data-tab');
          var tab_n = $(this).attr('data-tabn');
          $('#sabform_tabs li').removeClass('current');
          $('#sabm-globalforms-form .form-wrapper').removeClass('current');
          $('#sabform_tabs li.'+tab_n).addClass('current');
          $("#"+tab_id).addClass('current');
      });
  
      $('#edit-tmpstate').change(function() {
          var sel_txt = $('#edit-tmpstate option:selected').text();
          $('#sabmform-state').val(sel_txt);
          var sel_val = $('#edit-tmpstate option:selected').val();
          var id_group = sel_val.split("/");
          //reset select
          _sabm_reset_select('edit-tmpcity');
          //show options
          $("#edit-tmpcity > option").each(function() {
              var id_cityg = this.value.split("/");
              if(id_group[1] == id_cityg[1]) $(this).show();
          });
      });  
       
      $('#edit-tmpcity').change(function() {
          var sel_txt = $('#edit-tmpcity option:selected').text();
          $('#sabmform-city').val(sel_txt);       
      });

      $('#sabm-answer-select').click(function(){
          $('#edit-answers').show('slow');
      });

      function _sabm_reset_select(obj){
          var i_flag = 0;
          $('#sabmform-city').val('');       
          $("#"+obj+" > option").each(function() { 
             if(i_flag != 0){
                $(this).hide(); 
             }else{
                $(this).attr('selected','selected');
             }
             i_flag++; 
          });
      }

   });
})(jQuery);



