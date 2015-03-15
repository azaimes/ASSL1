<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Posts_model extends Model {
 
    function addPost($state, $city) {
        $data = array(
            'state' => $state,
            'city' => $city
        );
 
        $this->db->insert('favorites', $data);
    }
 
}

?>