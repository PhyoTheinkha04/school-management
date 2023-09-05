<!--**********************************
			Footer start
		***********************************-->
<div class="footer out-footer style-2">
    <div class="copyright">
        <p>Copyright © Designed &amp; Developed by <a href="http://maymyanmarlin.com/" target="_blank">May Myanmar
                Lin</a> 2023</p>
    </div>
</div>
<!--**********************************
			Footer end
		***********************************-->


</div>
<script>
    function previewImage(event) {
        var reader = new FileReader();
        var imagePreview = document.getElementById('imagePreview');

        reader.onload = function() {
            if (reader.readyState === 2) {
                imagePreview.style.backgroundImage = 'url(' + reader.result + ')';
            }
        }

        if (event.target.files[0]) {
            reader.readAsDataURL(event.target.files[0]);
        } else {
            imagePreview.style.backgroundImage = 'url(/admin/images/no-img-avatar.png)';
        }
    }
</script>
<!-- Required vendors -->
<script src="{!!asset('admin/vendor/global/global.min.js')!!}"></script>
<script src="{!!asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')!!}"></script>
<script src="{!!asset('admin/vendor/chart.js/Chart.bundle.min.js')!!}"></script>
<!-- Apex Chart -->
<script src="{!!asset('admin/vendor/apexchart/apexchart.js')!!}"></script>



<!-- Daterangepicker -->
<!-- momment js is must -->
<script src="{!!asset('admin/vendor/moment/moment.min.js')!!}"></script>
<script src="{!!asset('admin/vendor/bootstrap-daterangepicker/daterangepicker.js')!!}"></script>
<!-- clockpicker -->
<script src="{!!asset('admin/vendor/clockpicker/js/bootstrap-clockpicker.min.js')!!}"></script>
<!-- asColorPicker -->
<script src="{!!asset('admin/vendor/jquery-asColor/jquery-asColor.min.js')!!}"></script>
<script src="{!!asset('admin/vendor/jquery-asGradient/jquery-asGradient.min.js')!!}"></script>
<script src="{!!asset('admin/vendor/jquery-asColorPicker/js/jquery-asColorPicker.min.js')!!}"></script>
<!-- Material color picker -->
<script src="{!!asset('admin/vendor/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js')!!}"></script>
<!-- pickdate -->
<script src="{!!asset('admin/vendor/pickadate/picker.js')!!}"></script>
<script src="{!!asset('admin/vendor/pickadate/picker.time.js')!!}"></script>
<script src="{!!asset('admin/vendor/pickadate/picker.date.js')!!}"></script>



<!-- Daterangepicker -->
<script src="{!!asset('admin/js/plugins-init/bs-daterange-picker-init.js')!!}"></script>
<!-- Clockpicker init -->
<script src="{!!asset('admin/js/plugins-init/clock-picker-init.js')!!}"></script>
<!-- asColorPicker init -->
<script src="{!!asset('admin/js/plugins-init/jquery-asColorPicker.init.js')!!}"></script>
<!-- Material color picker init -->
<script src="{!!asset('admin/js/plugins-init/material-date-picker-init.js')!!}"></script>
<!-- Pickdate -->
<script src="{!!asset('admin/js/plugins-init/pickadate-init.js')!!}"></script>
<script src="{!!asset('admin/vendor/bootstrap-select/dist/js/bootstrap-select.min.js')!!}"></script>
<script src="{!!asset('admin/vendor/jquery-nice-select/js/jquery.nice-select.min.js')!!}"></script>

<script src="{!!asset('admin/js/custom.min.js')!!}"></script>
<script src="{!!asset('admin/js/dlabnav-init.js')!!}"></script>
<script src="{!!asset('admin/js/demo.js')!!}"></script>



</body>

</html>
