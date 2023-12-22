<?php 
class UserRepository {

    protected $db;
    public function __construct() {
        $this->db = ConnexionBD::getInstance();
    }

    public function findAll() {
        $query = "SELECT * FROM `user`";
        // Retourner quelque chose d'inutilisable
        $response = $this->db->query($query);

        // On va utilsier fetchAll si on veut +eurs elements 
        $users = $response->fetchAll(PDO::FETCH_OBJ);
        return $users;
    }

    public function findById($id) {
        $query = "SELECT * FROM `user` WHERE `id` = ?";
        // Retourner quelque chose d'inutilisable
        $response = $this->db->prepare($query);
        $response->execute([$id]);
        return $response->fetch(PDO::FETCH_OBJ);
    }

    public function delete($id) {
        $query = "DELETE FROM user WHERE `user`.`id` = ? ";
        // Retourner quelque chose d'inutilisable
        $response = $this->db->prepare($query);
        $response->execute([$id]);
    }
        // 
    // UPDATE `user` SET `name` = ?, `birthday` = ?  WHERE `user`.`id` = ?;

    public function create($name, $birthday) {
        $query = "INSERT INTO `user` (`id`, `name`, `birthday`) VALUES (NULL, :name, :birthday)";
        // Retourner quelque chose d'inutilisable
        $response = $this->db->prepare($query);
        $response->execute(['name' => $name, 'birthday' => $birthday]);
    }

    public function update($id, $name, $birthday) {
        $query = "UPDATE `user` SET `name` = ?, `birthday` = ?  WHERE `user`.`id` = ?";
        // Retourner quelque chose d'inutilisable
        $response = $this->db->prepare($query);
        $response->execute([$name, $birthday, $id]);
    }
}