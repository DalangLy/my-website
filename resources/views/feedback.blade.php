<div class="d-feed-back">

    <form class="needs-validation" novalidate>
        <div class="form-group">
            <label for="validationCustom01">Name</label>
            <input type="text" class="form-control" id="validationCustom01" value="Mark" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>
        <div class="form-group">
            <label for="validationCustom02">Email</label>
            <input type="text" class="form-control" id="validationCustom02" value="Otto" required>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <div class="form-group">
            <label for="txtMessage">Message</label>
            <textarea class="form-control" id="txtMessage" rows="3" required></textarea>
            <div class="valid-feedback">
                Looks good!
            </div>
        </div>

        <div class="form-group">
            <button class="btn btn-primary" type="submit">Submit form</button>
        </div>

    </form>

    <script>
        // Example starter JavaScript for disabling form submissions if there are invalid fields
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                // Fetch all the forms we want to apply custom Bootstrap validation styles to
                var forms = document.getElementsByClassName('needs-validation');
                // Loop over them and prevent submission
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();
    </script>


</div>




<style>
    .d-feed-back{
        width: 100%;
        background-color: white;
        padding: 50px;
    }
</style>
