<?php 
class Session {
    
    /**
     * Crée une session 
     * Chaque personne qui instancie une session 
     * Il aura une session ouverte
     * 
     */
    public function __construct() {
        session_start();
    }

    /**
     * Vérifie si une variable de clé key existe dans la session
     * 
     * @param string $key
     * @return bool 
     */
    public function has(string $key) {
        return isset($_SESSION[$key]);
    }

    /**
     * Récupérer une variable de clé key dans la session
     * 
     * @param string $key
     * @return mixed  
     */
    public function get(string $key): mixed {
        if (isset($_SESSION[$key])) {
            return $_SESSION[$key];
        }
        throw new Exception("Key invalide");
    } 
    
    /**
     * Ajouter une variable de clé key dans la session
     * 
     * @param string $key
     * @param mixed $value
     */
    public function set(string $key, $value) {
        $_SESSION[$key] = $value;
    }
    
    /**
     * Supprimer une variable de clé key de la session
     * 
     * @param string $key
     */
    public function delete(string $key) {
        if (isset($_SESSION[$key])) {
            unset($_SESSION[$key]);
        }
        throw new Exception("Key invalide");
    }

    /**
     * Vider la session
     * 
     */
    public function reset() {
        $_SESSION = [];
    }
}