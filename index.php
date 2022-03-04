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
    public  $title;
    public  $author;
    public  $release_date;
    public  $genre;
   

    public function __construct( $title,  $author,  $release_date,  $genre)
    {
        $this->title = $title;
        $this->author = $author;
        $this->release_date = $release_date;
        $this->genre = $genre;
    }

    public function getTicketPrice()
    {
        return 10;
    }
    

}

$pulp_fiction = new Movie('Pulp Fiction', 'Quentin Tarantino', '10/28/1994', 'Pulp'); 




$alien = new Movie('Alien', 'Ridley Scott', '1979', 'Sci - Fi'); 



    var_dump($pulp_fiction);
    
    var_dump($alien);

       
