<script>

    $(document).ready(function () {
        $('#questionForm').submit(function (e){
            e.preventDefault();

            var formData = {
                questionType: $('#questionType').val(),
                difficulty:   $('#difficulty').val(),
                topic:        $('#topic').val(),
                _token: "{{ csrf_token() }}" // Add CSRF token to data
            };
            $.ajax({
                url: 'createQuestion', // Replace with your actual route
                method: 'POST',
                data: formData,

                success: function(response) {
                    console.log(response);
                },

                error: function(xhr) {
                    console.log(xhr);
                }
            });

        })

    });

</script>
