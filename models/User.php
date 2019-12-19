<?php


class User
{
    private $db;

    public function __construct()
    {
        $this->db = new Database();
    }

    //Register User
    public function register($data)
    {
        $this->db->query('INSERT INTO users(user_name, user_email, user_password, user_role) VALUES (:user_name, :user_email, :user_password, :user_role)');
        $this->db->bind(':user_name', $data['user_name']);
        $this->db->bind(':user_email', $data['user_email']);
        $this->db->bind(':user_password', $data['user_password']);
        $this->db->bind(':user_role', $data['user_role']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
    //check if email exist in db
    public function check_email($email)
    {
        $this->db->query('SELECT user_email FROM users WHERE user_email = :user_email');
        $this->db->bind(':user_email', $email);
        return $this->db->single();
    }

    //find user by email
    public function findUserByEmail($user_email)
    {
        $this->db->query('SELECT * FROM users WHERE user_email = :user_email');
        $this->db->bind(':user_email', $user_email);
        $row = $this->db->single();
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }
    }
    //User Login
    public function userLogin($email, $db_password)
    {
        $this->db->query('SELECT * FROM users WHERE user_email = :user_email AND user_password = :password');
        $this->db->bind(':user_email', $email);
        $this->db->bind(':password', $db_password);

        $row = $this->db->single();
        if ($this->db->rowCount() > 0) {
            return $row;
        } else {
            return false;
        }

    }

    //GEt user details for profile page
    public function getUserById($user_id)
    {
        $this->db->query("SELECT * FROM users WHERE user_id = :user_id");
        $this->db->bind(':user_id', $user_id);
        $row = $this->db->single();

        return $row;
    }
    
    //Update Image
    public function updateImage($data)
    {
        $this->db->query('UPDATE users SET user_image = :user_image WHERE user_id = :user_id');
        $this->db->bind(':user_image', $data['user_image']);
        $this->db->bind(':user_id', $data['user_id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}