<?php
class Chaine
{

    public function __construct(private $string = '')
    {}

    /**
     * @return string
     */
    public function getString(): string
    {
        return $this->string;
    }

    /**
     * @param string $string
     * 
     * @return Chaine
     */
    public function setString($string): Chaine
    {
        $this->string = $string;

        return $this;
    }

    /**
     * retourne la taille de la chaine
     *
     * @return int
     */
    public function length(): int
    {
        return strlen($this->string);
    }
    /**
     * retourne le iéme caractère de la chaine
     *
     * @return int
     */
    public function charAt($index): string
    {   
        if ($index>0 && $index<strlen($this->string)) {
            return $this->string[$index];
        }
        throw new BadMethodCallException('Index invalid');
    }

    /**
     * Retourne la première occurence d'une chaine dans la sous chaine
     *
     * @param Chaine $chaine
     * @param integer $start
     * @return int | false
     */
    public function findPosition(Chaine $chaine, int $start = 0): int | false
    {
        return stripos($this->string, $chaine->getString(), $start);
    }

    /**
     * Retourne toutes les occurences d'une chaine
     *
     * @param Chaine $chaine
     * @param integer $start
     * @return array
     */
    public function findPositions(Chaine $chaine, int $start = 0): array
    {
        $positions = [];
        // Bonjour jeudi suis actuellement dehors, jeudi vous rappelle.
        $position = $this->findPosition($chaine, $start);
        // Tantque tu trouves
        while ($position!==false) { 
            // stocke la position dans le tableau de positions
            $positions[] = $position;
            // met à jour l'index
            $start = $position + $chaine->length();
            // Je relance une recherche
            $position = $this->findPosition($chaine, $start);    
        }    
        return $positions;
    }
    /**
     * Retourne une sous chaine de votre Chaine
     * 
     * @param integer $start
     * @param integer $end
     * @return string
     */
    public function extract(int $start = 0, int $end = -1): string
    {
        if($end > $this->length() || $end == -1 ) {
            $end = $this->length() - 1;
        }
        if($end < $start || $start < 0) {
            throw new OutOfBoundsException('Les indices ne sont pas correctes');
        }
        $nb = $end - $start + 1;
        return substr($this->getString(), $start, $nb);
    }
    /**
     * Efface les espaces ....
     *
     * @param integer $option
     * @return string
     */
    public function trim(int $option = 0): string
    {
        switch ($option) {
            case 0: return trim($this->string);
            case 1: return ltrim($this->string);
            default: return rtrim($this->string);
        } 
    }

    /**
     * Retourne votre chaine en majuscule
     *
     * @return string
     */
    public function upperCase(): string {
        return strtoupper($this->string);
    }

    /**
     * Retourne votre chaine en minuscule
     *
     * @return string
     */
    public function lowerCase(): string {
        return strtolower($this->string);
    }

    /**
     * Comparer avec la chaine passée en paramètre en prenant en considération la casse
     *
     * @param Chaine $chaine
     * @return string
     */
    public function compare(Chaine $chaine): int {
        return strcmp($this->string, $chaine->string);
    }

    /**
     * Comparer avec la chaine passée en paramètre sans prendre en considération la casse
     *
     * @param Chaine $chaine
     * @return string
     */
    public function caseCompare(Chaine $chaine): string {
        return strcasecmp($this->string, $chaine->string);
    }

    /**
     * Décompose une chaine en un tableau en se basant sur un séparateur
     *
     * @param string $separateur
     * @return string[]
     */
    public function decomposer(string $separateur): array {
        return explode($separateur, $this->string);
    }

    /**
     * Regroupe les éléments d'un tableau en une chaine en se basant sur un séparateur
     *
     * @param array $elements
     * @param string $separateur
     * @return string
     */
    public function regrouper(array $elements, string $separateur): string {
        $this->string = implode($separateur, $elements);
        return $this->string;
    }
}
