<script>
    function previewFile(input, preview_id) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $("#" + preview_id).attr('src', e.target.result);
                    $("#" + preview_id).css('height', '150px');
                    $("#" + preview_id).parent().parent().removeClass('d-none');
                }
                $("label[for='" + $(input).attr('id') + "']").text(input.files[0].name);
                reader.readAsDataURL(input.files[0]);
            }
        }
</script>