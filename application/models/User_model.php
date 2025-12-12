<?php
class User_model extends CI_Model {

    public function login($username, $password)
    {
        return $this->db->get_where('users', [
            'username' => $username,
            'password' => md5($password)
        ])->row();
    }

    public function get_all()
    {
        return $this->db->get('users')->result();
    }

    public function insert($data)
    {
        return $this->db->insert('users', $data);
    }

    public function update($id, $data)
    {
        return $this->db->where('id', $id)->update('users', $data);
    }

    public function delete($id)
    {
        return $this->db->delete('users', ['id' => $id]);
    }

    public function get($id)
    {
        return $this->db->get_where('users', ['id' => $id])->row();
    }

}
