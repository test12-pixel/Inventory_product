<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Brand_model extends CI_Model
{
    protected $table = 'sl_m_brand'; // Table name

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get brands with pagination + search
     */
    public function brandListing($searchText = '', $limit = null, $offset = null)
    {
        if (!empty($searchText)) {
            $this->db->like('brand_name', $searchText);
            $this->db->or_like('description', $searchText);
        }

        $this->db->order_by('id', 'DESC');

        if ($limit != null && $offset != null) {
            $this->db->limit($limit, $offset);
        }

        $query = $this->db->get($this->table);
        return $query->result();
    }

    /**
     * Count total brands (for pagination)
     */
    public function brandListingCount($searchText = '')
    {
        if (!empty($searchText)) {
            $this->db->like('brand_name', $searchText);
            $this->db->or_like('description', $searchText);
        }
        return $this->db->count_all_results($this->table);
    }

    /**
     * Get single brand by ID
     */
    public function getBrandInfo($id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return $query->row();
    }

    /**
     * Insert new brand
     */
    public function addNewBrand($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    /**
     * Update brand
     */
    public function updateBrand($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    /**
     * Delete brand
     */
    public function deleteBrand($id)
    {
       // return $this->db->delete($this->table, ['id' => $id]);
        return $this->db->delete($this->table, array('id' => $id));
    }
}
