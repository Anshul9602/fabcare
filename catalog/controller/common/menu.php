<?php
class ControllerCommonMenu extends Controller {
	public function index() {
		$this->load->language('common/menu');
		if ($this->request->server['HTTPS']) {
			$server = $this->config->get('config_ssl');
		} else {
			$server = $this->config->get('config_url');
		}

// logo 
if (is_file(DIR_IMAGE . $this->config->get('config_logo'))) {
	$data['logo'] = $server . 'image/' . $this->config->get('config_logo');
} else {
	$data['logo'] = '';
}




		// Menu
		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$data['categories'] = array();

		$categories = $this->model_catalog_category->getCategories(59);

		foreach ($categories as $category) {
			if ($category['top']) {
				// Level 2
				$children_data = array();
				if ($category['image']) {
					$image = $this->model_tool_image->resize($category['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				} else {
					$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
				}
				$children = $this->model_catalog_category->getCategories($category['category_id']);

				foreach ($children as $child) {
					$filter_data = array(
						'filter_category_id'  => $child['category_id'],
						'filter_sub_category' => true
					);

					$children_data[] = array(
						'name'  => $child['name'] . ($this->config->get('config_product_count') ? ' (' . $this->model_catalog_product->getTotalProducts($filter_data) . ')' : ''),
						'href'  => $this->url->link('product/category', 'path=' . $category['category_id'] . '_' . $child['category_id'])
					);
				}
if("Contact Us" ==  $category['name']){
$href = $this->url->link('information/contact');
}
elseif("Services" == $category['name']){
	$href = $this->url->link('common/services');
}
elseif("Pricing" == $category['name']){
	$href = $this->url->link('common/price');
}
else{
	$href = $this->url->link('product/category', 'path=' . $category['category_id'] );
}
				// Level 1
				$data['categories'][] = array(
					'name'     => $category['name'],
					'image'      => $image,
					'children' => $children_data,
					'column'   => $category['column'] ? $category['column'] : 1,
					'href'     => $href
				);
			}
		}
	// echo "<pre>"; print_r($data['categories']);
	// echo "</pre>";


		return $this->load->view('common/menu', $data);
	}
}