var active_layout;
jQuery(document).ready(function(jQuery){
  jQuery(".sbs_grid_view").addClass("active");
  jQuery(document).on('click','.list_grid_view li',function(){
    jQuery(".list_grid_view li").removeClass("active");
    jQuery(this).addClass("active");
    var layout_type = jQuery(this).attr('data-format');
    active_layout = layout_type;
    switch(layout_type){
      case 'list':{
        jQuery(".products").addClass(layout_type);
      } break;
      case 'grid':{
        jQuery(".products").removeClass("list");
      } break;
    }
  })
});