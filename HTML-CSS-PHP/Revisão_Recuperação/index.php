<?php
class JogoDAO {
    private $conn;

    public function __construct($host, $usuario, $senha, $banco) {
        $this->conn = new mysqli($host, $usuario, $senha, $banco);
        if ($this->conn->connect_error) {
            die("Erro de conexão: " . $this->conn->connect_error);
        }
    }

    // CREATE
    public function inserir($titulo, $genero, $plataforma, $situacao, $imagem) {
        $plataformaStr = implode(", ", $plataforma);
        $stmt = $this->conn->prepare("INSERT INTO jogo (titulo, genero, plataforma, situacao, imagem) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sisss", $titulo, $genero, $plataformaStr, $situacao, $imagem);
        return $stmt->execute();
    }

    // READ (listar todos)
    public function listarTodos() {
        $result = $this->conn->query("SELECT * FROM jogo");
        return $result->fetch_all(MYSQLI_ASSOC);
    }

    // READ (buscar por id)
    public function buscarPorId($id) {
        $stmt = $this->conn->prepare("SELECT * FROM jogo WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    // UPDATE
    public function atualizar($id, $titulo, $genero, $plataforma, $situacao, $imagem) {
        $plataformaStr = implode(", ", $plataforma);
        $stmt = $this->conn->prepare("UPDATE jogo SET titulo=?, genero=?, plataforma=?, situacao=?, imagem=? WHERE id=?");
        $stmt->bind_param("sisssi", $titulo, $genero, $plataformaStr, $situacao, $imagem, $id);
        return $stmt->execute();
    }

    // DELETE
    public function excluir($id) {
        $stmt = $this->conn->prepare("DELETE FROM jogo WHERE id=?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>

<?php
// Exemplo de uso
require_once 'JogoDAO.php';
$jogoDAO = new JogoDAO("localhost", "usuario", "senha", "nome_do_banco");

// Inserir
$jogoDAO->inserir("Título", 1, ["Computador", "Videogame"], "Disponível", "imagem.png");

// Listar todos
$jogos = $jogoDAO->listarTodos();

// Buscar por id
$jogo = $jogoDAO->buscarPorId(1);

// Atualizar
$jogoDAO->atualizar(1, "Novo Título", 2, ["Computador"], "Indisponível", "nova_imagem.png");

// Excluir
$jogoDAO->excluir(1);