<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Unit_model extends CI_Model
{
    protected $table = 'sl_m_unit'; // Table name

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get units with pagination + search
     */
    public function unitListing($searchText = '', $limit = null, $offset = null)
    {
        if (!empty($searchText)) {
            $this->db->like('name', $searchText);
        }

        $this->db->order_by('id', 'DESC');

        if ($limit != null && $offset != null) {
            $this->db->limit($limit, $offset);
        }

        $query = $this->db->get($this->table);
        return $query->result();
    }

    /**
     * Count total units (for pagination)
     */
    public function unitListingCount($searchText = '')
    {
        if (!empty($searchText)) {
            $this->db->like('name', $searchText);
        }
        return $this->db->count_all_results($this->table);
    }

    /**
     * Get single unit by ID
     */
    public function getUnitInfo($id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return $query->row();
    }

    /**
     * Insert new unit
     */
    public function addNewUnit($data)
    {
        //print_r($data);die;
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    /**
     * Update unit
     */
    public function updateUnit($data, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    /**
     * Delete unit
     */
    public function deleteUnit($id)
    {
        return $this->db->delete($this->table, ['id' => $id]);
    }
}
