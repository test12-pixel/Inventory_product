<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Supplier_model extends CI_Model
{
    protected $table = 'sl_m_supplier';

    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Get all suppliers (optionally with pagination/search)
     */
    public function getAllSuppliers($searchText = '', $limit = null, $offset = null)
    {
        if (!empty($searchText)) {
            $this->db->like('supplier_name', $searchText);
            $this->db->or_like('organisation', $searchText);
        }

        $this->db->order_by('id', 'DESC');

        if ($limit != null && $offset != null) {
            $this->db->limit($limit, $offset);
        }

        $query = $this->db->get($this->table);
        return $query->result();
    }

    /**
     * Count total suppliers (for pagination)
     */
    public function getSupplierCount($searchText = '')
    {
        if (!empty($searchText)) {
            $this->db->like('supplier_name', $searchText);
            $this->db->or_like('organisation', $searchText);
        }
        return $this->db->count_all_results($this->table);
    }

    /**
     * Get supplier by ID
     */
    public function getSupplierById($id)
    {
        $query = $this->db->get_where($this->table, ['id' => $id]);
        return $query->row();
    }

    /**
     * Insert new supplier
     */
    public function insertSupplier($data)
    {
        $this->db->insert($this->table, $data);
        return $this->db->insert_id();
    }

    /**
     * Update supplier by ID
     */
    public function updateSupplier($id, $data)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $data);
    }

    /**
     * Delete supplier by ID
     */
    public function deleteSupplier($id)
    {
        return $this->db->delete('sl_m_supplier', array('id' => $id));
    }

}
