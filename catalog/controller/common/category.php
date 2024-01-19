<?php
class ControllerCommoncategory extends Controller
{
	public function index()
	{
		$this->document->setTitle($this->config->get('config_meta_title'));
		$this->document->setDescription($this->config->get('config_meta_description'));
		$this->document->setKeywords($this->config->get('config_meta_keyword'));

		if (isset($this->request->get['route'])) {
			$this->document->addLink($this->config->get('config_url'), 'canonical');
		}



		// category id get 
		if (isset($this->request->get['path'])) {
			$url = '';

			if (isset($this->request->get['sort'])) {
				$url .= '&sort=' . $this->request->get['sort'];
			}

			if (isset($this->request->get['order'])) {
				$url .= '&order=' . $this->request->get['order'];
			}

			if (isset($this->request->get['limit'])) {
				$url .= '&limit=' . $this->request->get['limit'];
			}

			$path = '';

			$parts = explode('_', (string)$this->request->get['path']);

			$category_id = (int)array_pop($parts);

			foreach ($parts as $path_id) {
				if (!$path) {
					$path = (int)$path_id;
				} else {
					$path .= '_' . (int)$path_id;
				}

				$category_info = $this->model_catalog_category->getCategory($path_id);

				if ($category_info) {
					$data['breadcrumbs'][] = array(
						'text' => $category_info['name'],
						'href' => $this->url->link('product/category', 'path=' . $path . $url)
					);
				}
			}
		} else {
			$category_id = 0;
		}

		// echo "<pre>";
		// print_r($category_id);
		// echo "</pre>";
		// die;
		//banner-top
	

		$this->load->model('design/banner');
		$this->load->model('tool/image');

		$data['banners'] = array();

		$new_results = $this->model_design_banner->getBanner(22);

		foreach ($new_results as $result) {
			if (is_file(DIR_IMAGE . $result['image'])) {
				$data['banners'][] = array(
					'title' => $result['title'],
					'link'  => $result['link'],
					'image' => $this->model_tool_image->resize($result['image'], '1920', '610')
				);
			}
		}


	//shop by room
	$this->load->model('catalog/category');



	$data['room_categories'] = array();

	$room_categories = $this->model_catalog_category->getCategories(133);


	$new_room_categories = array();
	for ($i = 0; $i < count($room_categories); $i++) {

		array_push($new_room_categories, $room_categories[$i]);
	}

	foreach ($new_room_categories as $category) {

		// Level 2
		$category_info = $this->model_catalog_category->getCategory($category['category_id']);
		if ($category_info) {
			if ($category_info['image']) {
				$image = $this->model_tool_image->resize($category_info['image'], '1000', '1000');
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			}
		}
		// echo "<pre>";

		// print_r( $category['category_id']);
		// echo "</pre>";

				

				// Level 1

		// Level 1
		$data['room_categories'][] = array(
			'thumb' =>  $image,
			'name'     => $category['name'],

			'column'   => $category['column'] ? $category['column'] : 1,
			'href'     => $this->url->link('product/category', 'path=' . $category['category_id'])
		);
	}
		$this->load->language('product/category');

		$this->load->model('catalog/category');

		$this->load->model('catalog/product');

		$this->load->model('tool/image');
		$filter_data = array(
			'filter_category_id' => '77',
			'start' => '0',
			'limit' => '100'
		);



		$new_results = $this->model_catalog_product->getProducts($filter_data);

		foreach ($new_results as $result) {
			if ($this->customer->isLogged()) {

				$this->load->model('account/wishlist');
				$wish_results = $this->model_account_wishlist->getWishlist();
				foreach ($wish_results as $result1) {

					$id = $result1['product_id'];
					if ($id == $result['product_id']) {

						$wish = true;
						break;
					} else {
						$wish = false;
					}
				}
				$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
			} else {
				$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
			}

			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$price = false;
			}
			$sprice = (int)$result['special'];
			$prr = (int)$result['price'];
			$p = (($prr - $sprice) / $prr) * 100;
			$percent = (number_format((float)$p, 0, '.', ''));
			if (!is_null($result['special']) && (float)$result['special'] >= 0) {
				$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				$tax_price = (float)$result['special'];
			} else {
				$special = false;
				$tax_price = (float)$result['price'];
			}
			$prsent = (float)$result['price'];
			if ($this->config->get('config_tax')) {
				$tax = $this->currency->format($tax_price, $this->session->data['currency']);
			} else {
				$tax = false;
			}

			if ($this->config->get('config_review_status')) {
				$rating = (int)$result['rating'];
			} else {
				$rating = false;
			}

			$data['new_products'][] = array(
				'product_id'  => $result['product_id'],
				'thumb'       => $image,
				'name'        => $result['name'],
				'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
				'price'       => $price,
				'special'     => $special,
				'percent'         => $percent,
				'tax'         => $tax,
				'wish'      => $wish,
				'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
				'rating'      => $result['rating'],
				'href'        => $this->url->link('product/product', '&product_id=' . $result['product_id'])
			);
		}

		//populor products
		$filter_data = array(
			'filter_category_id' => '79',
			'start' => '0',
			'limit' => '100'
		);



		$new_results = $this->model_catalog_product->getProducts($filter_data);


		foreach ($new_results as $result) {
			if ($this->customer->isLogged()) {

				$this->load->model('account/wishlist');
				$wish_results = $this->model_account_wishlist->getWishlist();
				foreach ($wish_results as $result1) {

					$id = $result1['product_id'];
					if ($id == $result['product_id']) {

						$wish = true;
						break;
					} else {
						$wish = false;
					}
				}
				$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), $this->model_account_wishlist->getTotalWishlist());
			} else {
				$data['text_wishlist'] = sprintf($this->language->get('text_wishlist'), (isset($this->session->data['wishlist']) ? count($this->session->data['wishlist']) : 0));
			}

			if ($result['image']) {
				$image = $this->model_tool_image->resize($result['image'], $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			} else {
				$image = $this->model_tool_image->resize('placeholder.png', $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_width'), $this->config->get('theme_' . $this->config->get('config_theme') . '_image_product_height'));
			}

			if ($this->customer->isLogged() || !$this->config->get('config_customer_price')) {
				$price = $this->currency->format($this->tax->calculate($result['price'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
			} else {
				$price = false;
			}
			$sprice = (int)$result['special'];
			$prr = (int)$result['price'];
			$p = (($prr - $sprice) / $prr) * 100;
			$percent = (number_format((float)$p, 0, '.', ''));
			if (!is_null($result['special']) && (float)$result['special'] >= 0) {
				$special = $this->currency->format($this->tax->calculate($result['special'], $result['tax_class_id'], $this->config->get('config_tax')), $this->session->data['currency']);
				$tax_price = (float)$result['special'];
			} else {
				$special = false;
				$tax_price = (float)$result['price'];
			}
			$prsent = (float)$result['price'];
			if ($this->config->get('config_tax')) {
				$tax = $this->currency->format($tax_price, $this->session->data['currency']);
			} else {
				$tax = false;
			}

			if ($this->config->get('config_review_status')) {
				$rating = (int)$result['rating'];
			} else {
				$rating = false;
			}

			$data['pop_products'][] = array(
				'product_id'  => $result['product_id'],
				'thumb'       => $image,
				'name'        => $result['name'],
				'description' => utf8_substr(trim(strip_tags(html_entity_decode($result['description'], ENT_QUOTES, 'UTF-8'))), 0, $this->config->get('theme_' . $this->config->get('config_theme') . '_product_description_length')) . '..',
				'price'       => $price,
				'special'     => $special,
				'percent'         => $percent,
				'tax'         => $tax,
				'wish'      => $wish,
				'minimum'     => $result['minimum'] > 0 ? $result['minimum'] : 1,
				'rating'      => $result['rating'],
				'href'        => $this->url->link('product/product', '&product_id=' . $result['product_id'])
			);
		}



		$data['column_left'] = $this->load->controller('common/column_left');
		$data['column_right'] = $this->load->controller('common/column_right');
		$data['content_top'] = $this->load->controller('common/content_top');
		$data['content_bottom'] = $this->load->controller('common/content_bottom');
		$data['footer'] = $this->load->controller('common/footer');
		$data['header'] = $this->load->controller('common/header');

		$this->response->setOutput($this->load->view('common/category', $data));
	}
}
