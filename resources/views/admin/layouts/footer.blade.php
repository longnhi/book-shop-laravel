<script src="{{ asset('templates/admin/js/jquery.min.js') }}"></script>
<script src="{{ asset('templates/admin/js/popper.min.js') }}"></script>
<script src="{{ asset('templates/admin/js/moment.min.js') }}"></script>
<script src="{{ asset('templates/admin/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('templates/admin/js/simplebar.min.js') }}"></script>
<script src="{{ asset('templates/admin/js/daterangepicker.js') }}"></script>
<script src="{{ asset('templates/admin/js/jquery.stickOnScroll.js') }}"></script>
<script src="{{ asset('templates/admin/js/tinycolor-min.js') }}"></script>
<script src="{{ asset('templates/admin/js/config.js') }}"></script>
<script src="{{ asset('templates/admin/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('templates/admin/js/dataTables.bootstrap4.min.js') }}"></script>
<script>
$('#dataTable-1').DataTable({
    autoWidth: true,
    "lengthMenu": [
        [16, 32, 64, -1],
        [16, 32, 64, "All"]
    ]
});
</script>
<script src="{{ asset('templates/admin/js/apps.js') }}"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-56159088-1"></script>
<script>
window.dataLayer = window.dataLayer || [];

function gtag() {
    dataLayer.push(arguments);
}
gtag('js', new Date());
gtag('config', 'UA-56159088-1');
</script>