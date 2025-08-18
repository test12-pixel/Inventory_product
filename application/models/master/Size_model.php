<?php if(!defined('BASEPATH')) exit('No direct script access allowed');

class Size_model extends CI_Model
{
    protected $table = "sl_m_size";

    public function sizeListing($searchText = '', $page = null, $segment = null)
    {
        $this->db->select('id, name, status');
        $this->db->from($this->table);
        if(!empty($searchText)) {
            $likeCriteria = "(name LIKE '%".$searchText."%')";
            $this->db->where($likeCriteria);
        }
        $this->db->order_by('id','DESC');

        if($page != null && $segment != null) {
            $this->db->limit($page, $segment);
        }

        $query = $this->db->get();
        return $query->result();
    }

    public function addNewSize($sizeInfo)
    {
        $this->db->trans_start();
        $this->db->insert($this->table, $sizeInfo);
        $insert_id = $this->db->insert_id();
        $this->db->trans_complete();
        return $insert_id;
    }

    public function getSizeInfo($id)
    {
         $query = $this->db->get_where($this->table, ['id' => $id]);
        return $query->row();
    }

    public function updateSize($sizeInfo, $id)
    {
        $this->db->where('id', $id);
        return $this->db->update($this->table, $sizeInfo);
    }

    public function deleteSize($id)
    {
        $this->db->where('id', $id);
        $this->db->delete($this->table);
        return TRUE;
    }
}
