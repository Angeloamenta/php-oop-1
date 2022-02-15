<!-- Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
metodi d’istanza che abbiamo visto stamattina e create un file Movie.php in cui:
- è definita una classe ‘Movie’
   => all’interno della classe sono dichiarate delle variabili d’istanza
   => all’interno della classe è definito un costruttore
   => all’interno della classe è definito almeno un metodo
- vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->
<?php
class Movie 
{
    public $title;
    public $genres;
    public $author;
    public $releaseYear;
    public $vote;
    public $languages;


    function __construct($_title, $_author, $_releaseYear) {
        $this->title = $_title;
        $this->author = $_author;
        $this->relaseYear = $_releaseYear;
    }

    /**
     * Get the value of title
     */ 
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set the value of title
     *
     * @return  self
     */ 
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of genres
     */ 
    public function getGenres()
    {
        return $this->genres;
    }

    /**
     * Set the value of genres
     *
     * @return  self
     */ 
    public function setGenres($genres)
    {
        $this->genres = $genres;

        return $this;
    }

    /**
     * Get the value of author
     */ 
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * Set the value of author
     *
     * @return  self
     */ 
    public function setAuthor($author)
    {
        $this->author = $author;

        return $this;
    }

    /**
     * Get the value of relaseYear
     */ 
    public function getRelaseYear()
    {
        return $this->relaseYear;
    }

    /**
     * Set the value of relaseYear
     *
     * @return  self
     */ 
    public function setRelaseYear($relaseYear)
    {
        $this->relaseYear = $relaseYear;

        return $this;
    }

    /**
     * Get the value of vote
     */ 
    public function getVote()
    {
        return $this->vote;
    }

    /**
     * Set the value of vote
     *
     * @return  self
     */ 
    public function setVote($vote)
    {
        $this->vote = $vote;

        return $this;
    }

    /**
     * Get the value of languages
     */ 
    public function getLanguages()
    {
        return $this->languages;
    }

    /**
     * Set the value of languages
     *
     * @return  self
     */ 
    public function setLanguages($languages)
    {
        $this->languages = $languages;

        return $this;
    }


}

$movie = new Movie ('A Knight\'s Tale', 'Brian Helgeland', 2001);
echo $movie->getTitle();
echo $movie->getAuthor();
echo $movie->getRelaseYear();
var_dump($movie);