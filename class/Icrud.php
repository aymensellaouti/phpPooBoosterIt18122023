<?php 
interface ICrud  {

    // Ajouter 
    function add(Object $element);

    // retourne tous les éléments
    function findAll(): array;

    function findOneByCriteria(string $index, $value): Object | null ;
}


// 2 Créer La classe Annulaire qui implements Icrud