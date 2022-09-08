<script src="../assets/js/jquery.min.js"></script>
<script src="../assets/js/mag-popup.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<script>
    $(function() {
        $('.show').magnificPopup({
            disableOn: 700,
            type: 'iframe',
            mainClass: 'mfp-fade',
            removalDelay: 160,
            preloader: false,
            closeBtnInside: true,

            fixedContentPos: false
        });
    });

    function showMessage(status, msg) {
        Swal.fire(
            '',
            msg,
            status
        )
    }
</script>