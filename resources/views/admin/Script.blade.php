
<script src="../admin dashboard/vendors/jquery/dist/jquery.min.js"></script>
<script src="../admin dashboard/vendors/popper.js/dist/umd/popper.min.js"></script>
<script src="../admin dashboard/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="../admin dashboard/assets/js/main.js"></script>


<script src="../admin dashboard/vendors/chart.js/dist/Chart.bundle.min.js"></script>
<script src="../admin dashboard/assets/js/dashboard.js"></script>
<script src="../admin dashboard/assets/js/widgets.js"></script>
<script src="../admin dashboard/vendors/jqvmap/dist/jquery.vmap.min.js"></script>
<script src="../admin dashboard/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
<script src="../admin dashboard/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert2/11.12.1/sweetalert2.min.js" integrity="sha512-TV1UlDAJWH0asrDpaia2S8380GMp6kQ4S6756j3Vv2IwglqZc3w2oR6TxN/fOYfAzNpj2WQJUiuel9a7lbH8rA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    (function($) {
        "use strict";

        jQuery('#vmap').vectorMap({
            map: 'world_en',
            backgroundColor: null,
            color: '#ffffff',
            hoverOpacity: 0.7,
            selectedColor: '#1de9b6',
            enableZoom: true,
            showTooltip: true,
            values: sample_data,
            scaleColors: ['#1de9b6', '#03a9f5'],
            normalizeFunction: 'polynomial'
        });
    })(jQuery);
</script>