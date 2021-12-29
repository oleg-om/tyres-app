<?php
if (!isset($filter['in_stock4'])) {
	$filter['in_stock4'] = 0;
}
if (!isset($filter['in_stock'])) {
	$filter['in_stock'] = 0;
}
$url = array('controller' => 'disks', 'action' => 'index', '?' => $filter);
if (!empty($brand['Brand']['slug'])) {
	$url = array('controller' => 'disks', 'action' => 'brand', 'slug' => $brand['Brand']['slug'], '?' => $filter);
}
$this->Paginator->options(array('url' => $url));
?>
<h2 class="title">Диски</h2>
<?php
echo $this->element('currency');
echo $this->element('mode_selector', array('url' => $url));
?>
<div class="clear"></div>
<?php
echo $this->element('index_disks');
echo $this->element('pager', array('show_limits' => true, 'url' => $url, 'bottom' => true));
if (!empty($brand['Brand']['h1_title'])) { 
	echo '<h1>' . h($brand['Brand']['h1_title']) . '</h1>';
	echo $brand['Brand']['content'];
}
echo $this->element('seo_disks');
?>