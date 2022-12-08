<script type="text/javascript">
    //File Upload
    $(function () {
        var fileupload = $("#FileUpload1");
        var filePath = $("#spnFilePath");
        var button = $("#btnFileUpload");
        button.click(function () {
           fileupload.click();
        });
        fileupload.change(function () {
            var fileName = $(this).val().split('\\')[$(this).val().split('\\').length - 1];
            filePath.html("<i class='feather icon-image mr-2'></i>" + fileName);
        });
    });

    //products Characteristics
    $(document).ready(function () {
        var i = 0;
        var nbcontent = 0;
        $('#btn_add').click(function () {
            i++;
            $('#dynamic_field').append('<div class="row" id="row' + i + '"><div class="col-sm-5"><div class="form-group"><input type="text" class="form-control" aria-describedby="emailHelp" name="charact_name[]" required></div></div><div class="col-sm-5"><div class="form-group"> <input type="text"  id="Text" class="form-control" name="charact_value[]" data-role="tagsinput" required></div></div><div class="col-sm-2"> <a href="#!" class="btn btn-icon btn-outline-danger btn_remove"><i class="feather icon-trash"></i></a></div></div>');
            $('#nbcontent').val(i + 1);
        });
        $(document).on('click', '.btn_remove', function () {
            var button_id = $(this).attr("id");
            $('#row' + button_id + '').remove();
            console.log(i--);
            $('#nbcontent').val(i + 1);
        });
    });

</script>