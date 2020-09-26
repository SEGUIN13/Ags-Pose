<!--?php
namespace App\Model;

use App\Core\Database;

class ArticleModel {

    // Déclaration des propriétés
    private $db;

    // Constructeur
    public function __construct()
    {
        $this->db = new Database();
    }

    /**
     * Retourne les x derniers articles
     */
    public function getLasts(int $howmany=10)
    {

        //Recuperer les articles du blog par une requete préparée
        $sql = 'SELECT
        idArt,
        nomCat,
        titreArt,
        contenuArt,
        nomUser
        FROM articles
        INNER JOIN utilisateur ON articles.idUser =utilisateur.idUser
        INNER JOIN categories ON articles.idCat = categories.idCat
        ORDER BY nomUser
        

        // Récupération des résultats 
        return $this->db->getAllRows($sql);
    }

    /**
     * Retourne un article en fonction de son identifiant
     */
    public function getOneById(int $id) {

        $sql = 'SELECT
        idArt,
        nomCat,
        titreArt,
        contenuArt,
        nomUser
        FROM articles
        INNER JOIN utilisateur ON articles.idUser =utilisateur.idUser
        INNER  JOIN categories ON articles.idCat = categories.idCat
        WHERE idArt = ?';

        // Récupération des résultats 
        return $this->db->getOneRow($sql, [$id]);
    }

    /**
     * Insère un article dans la base de données
     */
    public function insert(string $title, string $content, int $idCat, int $idAut)
    {

        $sql = 'INSERT INTO article
                (titreArt, contenuArt, idCat, idAut)
                VALUES (?, ?, ?, ?, NOW())';

        $this->db->executeQuery($sql, [$title, $content, $idCat, $idAut]);
    }

    public function DeleteArticle(int $idArt){
        $sql = 'DELETE FROM article
            WHERE idArt = ?';
        $this->db->executeQuery($sql, [$idArt]);
    }
}-->