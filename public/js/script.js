$(document).ready(function(){
    $('#category-table').dataTable( {
            "pagingType": "bootstrap_full_number",
            "language": {
                "search": "Search: ",
                "paginate": {
                    "previous":"Prev",
                    "next": "Next",
                    "last": "Last",
                    "first": "First"
                }
            },
            "columns": [{
            "orderable": true
        }, {
            "orderable": true
        }, {
            "orderable": false
        }, {
            "orderable": false
        }],
         "bSort": true
    });
    $('#question-table').dataTable( {
            "pagingType": "bootstrap_full_number",
            "language": {
                "search": "Search: ",
                "paginate": {
                    "previous":"Prev",
                    "next": "Next",
                    "last": "Last",
                    "first": "First"
                }
            },
            "columns": [{
            "orderable": true
        }, {
            "orderable": false
        }, {
            "orderable": false
        }],
         "bSort": true
    });

    /***close modal Edit category**/
    $('.close-modal').click(function(){
       $('#editModal').modal('hide');
       $('#deleteModal').modal('hide');
    });
    //Opening Delete modal
    $('.open-cat-delete').click(function(){
        $('.delete_cat').val($(this).val());
    });

    $('.delete_cat').click(function(e){
        e.preventDefault();
        var id_delete = $(this).val();
        var token = $(this).data('token');
        $.ajax({
            method : 'POST' ,
            url : baseUrl+'category/'+id_delete+'/delete',
            data:{
                id : id_delete,
                _token : token
            }
        }).done(function(msg){
            $('#deleteModal').modal('hide');
            $("tr."+id_delete).hide();
        });
    });
    var n=1;
    $('#add_answer').click(function(e){

        if(n<5){
            var m = n-1;
            $(".list-answer").append(
                '<div class="col-sm-12 margin-top answer'+n+'">'+
                    '<input type="radio" name="correct" value="'+m+'">'+
                    '<div class="col-sm-8">'+
                      '<input required="required" class="form-control" name="answer[]" type="text">'+
                    '</div>'+
                '</div>'
            );
        }else {
            $(".list-answer").append(
                '<p>Sorry, You can put only 4 answers maximum.'
            );
            $("#add_answer").hide();
        }
        n++;
    });

});
