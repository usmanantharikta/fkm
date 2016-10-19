var save_method;
var table;
var title;

// data employ

function add_employ(){
  save_method='add';
  $('#form')[0].reset();
  $('#myModal').modal('show');
  $('.modal-title').text('Add New Employ Data');
}

function edit_employ(id)
{
  save_method='update';
  $('#form')[0].reset();

  $.ajax({
    url : "<?php echo site_url('control_crud/ajax_edit_employ/')?>/" + id,
    type:"GET",
    dataType: "JSON",
    success: function(data)
    {
      $('[name="id"]').val(data.id);
      $('[name="id_employ"]').val(data.id_employ);
      $('[name="name"]').val(data.name);
    //	$('[name="gender"]').val(data.gender);
      $('[name="departement"]').val(data.departement);
      $('[name="division"]').val(data.division);
      $('[name="location"]').val(data.location);

      $('#myModal').modal('show');
      $('.modal-title').text('Edit Data Employ');
    },
    error: function (jqXHR, textStatus, errorThrown)
    {
        alert('Error get data from ajax');
    }
  });
}

function save_employ(){
  var url;
  if(save_method=='add'){
    url="<?php echo site_url('control_crud/ajax_add_employ')?>";
  }
  else {
    url="<?php echo site_url('control_crud/ajax_update_employ')?>";
  }

  $.ajax({
    url: url,
    type :"POST",
    data: $('#form').serialize(),
    dataType: "JSON",
    success: function(data){
      $('#myModal').modal('hide');
      reload_table();
    },
    error: function (jqXHR, textStatus, errorThrown){
      alert('Error add / update data');
    }

  });
}

function delete_employ(id){
  if(confirm('Are you sure delete this data?')){
    $.ajax({
      url:"<?php echo site_url('control_crud/ajax_delete_employ')?>/"+id,
      type:"POST",
      dataType: "JSON",
      success: function (data){
        $('myModal').modal('hide');
        reload_table();
      },
      error: function (jqXHR, textStatus, errorThrown){
        alert('Error delete data');
      }
    });
  }
}


function save_poin()
{
	var url;
	if(save_method=='like_this'){
		url="<?php echo site_url('control_crud/ajax_add_like_this')?>";
	}
	else {
		url="<?php echo site_url('control_crud/ajax_add_blue_thumb')?>";
	}

	$.ajax({
		url: url,
		type :"POST",
		data: $('#form_add_poin').serialize(),
		dataType: "JSON",
		success: function(data){
			$('#modal_for_add_poin').modal('hide')
			alert('Sucsess coy');
			//reload_table();
		},
		error: function (jqXHR, textStatus, errorThrown){
			alert('Error add / update data');
		}

	});
}
