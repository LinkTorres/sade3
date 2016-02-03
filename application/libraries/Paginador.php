
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Paginador

{
    function __construct()
    {
       $CI =& get_instance();
       $CI->load->library('pagination');
    }


function create_paginator($base_url,$total_rows,$per_page,$uri_segment)
{
	
				$config = array();
        		$config["base_url"] = $base_url;
        		$config["total_rows"] = $total_rows;
        		$config["per_page"] = $per_page;
        		$config["uri_segment"] = $uri_segment;     //Cuarto segmento de la url url/controller/argument/page
 				$config['full_tag_open'] = '<ul class="pagination">';
                $config['full_tag_close'] = '</ul>';            
                $config['prev_link'] = '&laquo;';
                $config['prev_tag_open'] = '<li>';
                $config['prev_tag_close'] = '</li>';
                $config['first_tag_open'] = '<li>';
                $config['first_tag_close'] = '</li>';
                $config['last_tag_open'] = '<li>';
                $config['last_tag_close'] = '</li>';
                $config['next_link'] = '&raquo;';
                $config['next_tag_open'] = '<li>';
                $config['next_tag_close'] = '</li>';
                $config['cur_tag_open'] = '<li class="active"><a href="#">';
                $config['cur_tag_close'] = '</a></li>';
                $config['num_tag_open'] = '<li>';
                $config['num_tag_close'] = '</li>';
                $config['first_link'] = 'primera&laquo;';
				$config['last_link'] =  'ultima&raquo;';
        		
}

}