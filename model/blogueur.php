<?php
class Blogueur
{
    private $nom;
    private $prenom;
    private $mail;
    private $password;
    
    public function getNom()
    {
        return $this->nom;
    }
    public function getPrenom()
    {
    	return $this->prenom;
    }
    public function getMail()
    {
    	return $this->mail;
    }
    public function getPassword()
    {
    	return $this->password;
    }
    
    public function setNom($nouveaunom)
    {
        $this->nom = $nouveaunom;
    }
    public function setPrenom($nouveauprenom)
    {
    	$this->prenom = $nouveauprenom;
    }
    public function setMail($nouveaumail)
    {
    	$this->mail = $nouveaumail;
    }
    public function setPassword($nouveaupassword)
    {
    	$this->password = $nouveaupassword;
    }
}
