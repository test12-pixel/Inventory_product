<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Category_model extends CI_Model
{
    protected $table = 'sl_m_category'; // ✅ Category table

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get category list with optional search & pagination
     */
    public function categoryListing($searchText = '', $limit = null, $offset = null)
    {
        if (!empty($searchText)) {
            $this->db->like('category_name', $searchText);
            $this->db->or_like('description', $searchText);
        }

        $this->db->order_by('id', 'DESC');

        if ($limit !== null && $offset !== null) {
            $this->db->limit($limit, $offset);
        }

        return $this->db->get($this->table)->result();
    }

    /**
     * Count total categories
     */
    public function categoryListingCount($searchText = '')
    {
        if (!empty($searchText)) {
            $this->db->like('category_name', $searchText);
            $this->db->or_like('description', $searchText);
        }

        return $this->db->count_all_results($this->table);
    }

    /**
     * Get single category by ID
     */
    public function getCategoryInfo($id)
    {
        return $this->db->get_where($this->table, ['id' => $id])->row();
    }

    /**
     * Insert new category
     */
    public function addNewCategory($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    /**
     * Update category by ID
     */
    public function updateCategory($data, $id)
    {
        return $this->db->where('id', $id)->update($this->table, $data);
    }

    /**
     * Delete category by ID
     */
    public function deleteCategory($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}
