$( function() {
  

     //parent
     $("#parent_sortable").sortable({
        items: "#parent_id_1,#parent_id_2,#parent_id_3"
      });
      
      $("#parent_sortable").disableSelection();
      
      
      //children
      $("#row_3,#row_2,#row_1").sortable({
        items: "#row_2_col_1,#row_2_col_2,#row_2_col_3,#row_2_col_4,#row_1_col_1,#row_1_col_2,#row_1_col_3,#row_3_col_1,#row_3_col_2"
    
      });

      $("#row_3,#row_2,#row_1").disableSelection();

   
      
  });
