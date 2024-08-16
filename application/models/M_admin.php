<?php

class M_admin extends CI_Model
{
    public function getcountpencari($where = '')
    {
        return $this->db->query("select count(*) as pencari from V_Users $where;");
    }

    public function getcountpenyedia($where = '')
    {
        return $this->db->query("select count(*) as penyedia from V_Users $where;");
    }

    public function getcountposition()
    {
        return $this->db->query("select count(*) as position from V_Position");
    }

    public function getcountausers($where = '')
    {
        return $this->db->query("select count(*) as users from V_Users $where;");
    }

    public function getusers($where = '')
    {
        return $this->db->query("select * from tbl_users $where;");
    }

    public function getapplication($where = '')
    {
        return $this->db->query("select * from tbl_application $where;");
    }

    public function getlevel($where = '')
    {
        return $this->db->query("select * from tbl_level $where;");
    }

    public function getmaritalstatus($where = '')
    {
        return $this->db->query("select * from tbl_maritalstatus $where;");
    }

    public function getreligion($where = '')
    {
        return $this->db->query("select * from tbl_religion $where;");
    }

    public function getptkp($where = '')
    {
        return $this->db->query("select * from tbl_ptkp $where;");
    }

    public function getbloodtype($where = '')
    {
        return $this->db->query("select * from tbl_bloodtype $where;");
    }

    public function getbankname($where = '')
    {
        return $this->db->query("select * from tbl_bankname $where;");
    }

    public function getovertime($where = '')
    {
        return $this->db->query("select * from tbl_overtime $where;");
    }

    public function gettaxconfig($where = '')
    {
        return $this->db->query("select * from tbl_taxconfig $where;");
    }

    public function getperusahaan($where = '')
    {
        return $this->db->query("select * from tbl_perusahaan $where;");
    }

    public function getallusers($where = '')
    {
        return $this->db->query("select * from V_Users $where;");
    }

    public function getprestasi($where = '')
    {
        return $this->db->query("select * from V_KandidatPrestasi $where;");
    }

    public function getpendidikan($where = '')
    {
        return $this->db->query("select * from V_KandidatPendidikan $where;");
    }

    public function getpengalamankerja($where = '')
    {
        return $this->db->query("select * from V_KandidatPengalamanKerja $where;");
    }

    public function getpengalamanorganisasi($where = '')
    {
        return $this->db->query("select * from V_KandidatPengalamanOrganisasi $where;");
    }

    public function getkandidatdocuments($where = '')
    {
        return $this->db->query("select * from tbl_kandidatdocuments $where;");
    }

    public function getlogactivity($where = '')
    {
        return $this->db->query("select * from V_LogActivity $where;");
    }

    public function getprovinces($where = '')
    {
        return $this->db->query("select * from tbl_provinces $where;");
    }

    public function getregencies($where)
    {
        return $this->db->get_where('tbl_regencies',array('provinces_kode' => $where));
    }

    public function getdistricts($where)
    {
        return $this->db->get_where('tbl_districts',array('regencies_kode' => $where));
    }

    public function getvillages($where)
    {
        return $this->db->get_where('tbl_villages',array('districts_kode' => $where));
    }

    public function getmonth($where = '')
    { 
        return $this->db->query("select * from tbl_month $where;");
    }

    public function getposition($where = '')
    {
        return $this->db->query("select * from V_Position $where;");
    }

    public function getjobvacancy($where = '')
    {
        return $this->db->query("select * from V_JobVacancy $where;");
    }

    public function getjobproposal($where = '')
    {
        return $this->db->query("select * from V_JobProposal $where;");
    }

    public function getmenumanagement($where = '')
    {
        return $this->db->query("select * from tbl_systemmanagementmenu $where;");
    }

    public function getaccessmanagement($where = '')
    {
        return $this->db->query("select * from V_MenuAccess $where;");
    }
}