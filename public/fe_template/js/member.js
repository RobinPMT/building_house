function Del(delUrl) {
		if (confirm("Bạn có chắc chắn muốn xáo bài viết này không?")) { document.location = delUrl; }
}
$(document).ready(function () {
  function getLocation(table, id, field){
    $.ajax({
      type: "POST",dataType: "html",
      url: window.location.href, data: { "c_table" : table, "c_id" : id },
      success: function (datas) {
        var getData = $.parseJSON(datas);
        if(field != '' && datas != ''){
          $('select[name="'+field+'"]').html(getData.exp_location);
        }
      }
    });
  }
  $('.location-field').change(function(){
    var table = $(this).attr('name'), id =  $(this).find('option:selected').val(), field = $(this).attr('data-child');
    if(field == 'undefined') field = '';
    if(table != 'ward') $('select[name="ward"]').html('<option value="">Chọn phường xã (*)</option>');
    getLocation(table, id, field);
  });
  //if($('select[name="province"]').length > 0 && $('select[name="province"]').find('option:selected').val() != '')
    //getLocation('province', $('select[name="province"]').find('option:selected').val(), $('select[name="province"]').attr('data-child'));
});
