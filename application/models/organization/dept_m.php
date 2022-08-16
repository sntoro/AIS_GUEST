<?php

class dept_m extends CI_Model {

    private $tabel = 'TM_DEPT';

    function get_dept() {
        $query = $this->db->query("select a.INT_ID_DEPT, a.CHR_DEPT, a.CHR_DEPT_DESC, b.CHR_GROUP_DEPT 
            from TM_DEPT a, TM_GROUP_DEPT b where a.INT_ID_GROUP_DEPT = b.INT_ID_GROUP_DEPT and a.BIT_FLG_DEL = 0");
        return $query->result();
    }

    function get_name_dept($id) {
        $query = $this->db->query("select CHR_DEPT from TM_DEPT where INT_ID_DEPT = '" . $id . "'")->row_array();
        $dept = $query['CHR_DEPT'];
        return $dept;
    }

    function get_desc_dept($id) {
        $query = $this->db->query("select CHR_DEPT_DESC from TM_DEPT where INT_ID_DEPT = '" . $id . "'")->row_array();
        $dept = $query['CHR_DEPT_DESC'];
        return $dept;
    }

    function save_dept($data) {
        $this->db->insert($this->tabel, $data);
    }

    function get_data_dept($id) {
        $query = $this->db->query("select INT_ID_DEPT, CHR_DEPT ,CHR_DEPT_DESC, INT_ID_GROUP_DEPT from TM_DEPT where BIT_FLG_DEL = 0 and INT_ID_DEPT = '" . $id . "'");
        return $query;
    }
    
    function get_dept_by_groupdept($id) {
        $query = $this->db->query("select INT_ID_DEPT, CHR_DEPT ,CHR_DEPT_DESC from TM_DEPT where BIT_FLG_DEL = 0 and INT_ID_GROUP_DEPT = '" . $id . "'")->result();
        return $query;
    }
    
    function get_groupdept_by_dept($id) {
        $query = $this->db->query("select INT_ID_GROUP_DEPT from TM_DEPT where INT_ID_DEPT = '" . $id . "'")->row_array();
        $part_of = $query['INT_ID_GROUP_DEPT'];
        return $part_of;
    }

    function delete($id) {
        $data = array('BIT_FLG_DEL' => 1);

        $this->db->where('INT_ID_DEPT', $id);
        $this->db->update($this->tabel, $data);
    }

    function update($data, $id) {
        $this->db->where('INT_ID_DEPT', $id);
        $this->db->update($this->tabel, $data);
    }

    function check_id_dept($id) {
        $find_id = $this->db->query("select * from TM_DEPT where CHR_DEPT = '" . $id . "'");
        if ($find_id->num_rows() > 0) {
            return $find_id->result();
        }
        return false;
    }

    function generate_id_dept() {
        return $this->db->query('select max(INT_ID_DEPT) as a from TM_DEPT')->row()->a + 1;
    }
    function get_dept_from_sect($sect){
        return $this->db->query('select INT_ID_DEPT, CHR_DEPT, CHR_DEPT_DESC from TM_DEPT')->row();
    }
}
