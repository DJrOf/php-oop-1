<!-- 
    Create un file index.php in cui:
        - è definita una classe ‘Movie’
        => all'interno della classe sono dichiarate delle variabili d'istanza
        => all'interno della classe è definito un costruttore
        => all'interno della classe è definito almeno un metodo
        - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà 
-->

<?php 

class Movie 
{
    public string $title;
    public string $author;
    public string $release_date;
    public string $genre;
   

    public function __construct(string $title, string $author, string $release_date, string $genre)
    {
        $this->$title;
        $this->$author;
        $this->$release_date;
        $this->$genre;
    }
}

$pulp_fiction = new Movie('Pulp Fiction', 'Quentin Tarantino', '10/28/1994', 'Pulp'); 
$pulp_fiction->$title = 'Pulp Fiction';
$pulp_fiction->$author = 'Quentin Tarantino';
$pulp_fiction->$release_date = '10/28/1994';
$pulp_fiction->$genre = 'Pulp';


$alien = new Movie('Pulp Fiction', 'Quentin Tarantino', '10/28/1994', 'Pulp'); 
$alien->$title = 'Alien';
$alien->$author = 'Ridley Scott';
$alien->$release_date = '1979';
$alien->$genre = 'Sci - fi';

    var_dump($pulp_fiction);
    var_dump($alien);
       
