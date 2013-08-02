<?php decorate_with('layout') ?>

<?php include_partial('global/map_and_controls') ?>

<script>
var netmap = new Netmap(850, 550, "#netmap", '<?php echo sfConfig::get("app_netmap_api_key") ?>');
netmap.load_map(<?php echo $map["id"] ?>);
</script>