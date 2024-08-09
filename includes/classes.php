<?php include('head.php') ?>
<body>
    <?php include ('header.php'); ?>


    <article>
        <div id="hero" class="container pb-3 bg-black bg-opacity-75 ">
            <h1 class="text-center fw-semibold fs-1 py-3">Classes</h1>
            <hr class="border border-primary border-2 border-opacity-50">
            <p>
                As classes, podemos interpreta-las como um molde ou um esqueleto, uma forma de determinar os tipos de dados processados, podemos dizer também que certas classes determinam o comportamento dos objetos, sendo usados em métodos e modificando seus estados como os atributos.
            </p>  
            <p> A sintaxe para a criaçao de uma classe:
    <pre>
        <code>
            class Cliente{
            //código
            }          
        </code>
    </pre>
            </p>
            <h3 class="text-center fw-semibold fs-1 py-3">Objetos</h3>
            <hr class="border border-primary border-2 border-opacity-50">
            <p>
                Um objeto na programação é conhecida como instância (um exemplar) de uma classe. Que é capaz de armazenar estados através de seus atributos e reagir a mensagens enviadas a ele, assim como se relacionar e enviar mensagens a outros objetos.
            </p>

            <h3 class="text-center fw-semibold fs-1 py-3">Atributos</h3>
            <hr class="border border-primary border-2 border-opacity-50">
            <p>Os atributos seriam as variáveis que darão as caracteristicas do objeto a serem feitos. Temos como exemplo a Classe <em>Carro</em> onde podemos atribuir: A marca, O modelo e O custo. E como métodos poderiamos ter: Velocidade máxima, Gasto de combustível e potência do motor.
            </p>
            <p>
                uma classe define todos os <em>atributos e comportamentos</em> comuns compartilhados por um mesmo tipo de dado.
            </p>
            <p>
                Simplificando o exemplo anterior, perceba que no mundo real há muitos modelos de carros com suas diferentes funções e modalidades, porém todos possuem caracteristicas semelhantes que os tornam carros, por exemplo, ter um motor, 4 rodas,embreagem etc. Todas essas caracteristicas semelhantes tornar esses "objetos" carros.
             
            </p>
            <h3 class="text-center fw-semibold fs-1 py-3">Métodos</h3>
            <hr class="border border-primary border-2 border-opacity-50">
            <p>
                Métodos em geral pode ser visto como uma função, na qual vai ditar o comportamento dos objetos de uma classe e são análogos aos procedimentos da programação estruturada.
            </p> 
            <p>Um exemplo de tudo apresentado até agora:
<pre>
    <code>
        
class Carro {
    private $marca;
    private $modelo;
    private $custo;

    function __construct($marca, $modelo, $custo) {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->custo = $custo;
    }

    function velocidadeMaxima() {
        // Método para calcular a velocidade máxima do carro
        // Aqui é feita uma implementação simplificada
        // apenas para fins de exemplo
        switch ($this->modelo) {
            case 'Modelo A':
                return 180;
            case 'Modelo B':
                return 200;
            case 'Modelo C':
                return 220;
            default:
                return 160;
        }
    }

    function gastoCombustivel() {
        // Método para calcular o gasto de combustível do carro
        // Aqui é feita uma implementação simplificada
        // apenas para fins de exemplo
        switch ($this->modelo) {
            case 'Modelo A':
                return 10;
            case 'Modelo B':
                return 12;
            case 'Modelo C':
                return 15;
            default:
                return 8;
        }
    }

    function potenciaMotor() {
        // Método para calcular a potência do motor do carro
        // Aqui é feita uma implementação simplificada
        // apenas para fins de exemplo
        switch ($this->modelo) {
            case 'Modelo A':
                return 120;
            case 'Modelo B':
                return 150;
            case 'Modelo C':
                return 180;
            default:
                return 100;
        }
    }
}
    </code>
</pre>
 Neste exemplo, a classe Carro tem três atributos: $marca, $modelo e $custo, que são definidos no construtor. Além disso, a classe tem três métodos: velocidadeMaxima(), gastoCombustivel() e potenciaMotor(), que retornam informações específicas sobre cada modelo de carro. Note que as implementações dos métodos são apenas para fins de exemplo, e podem variar bastante dependendo das características dos carros reais.

            </p>
        </div>
    </article>
<?php include('footer.php'); ?>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>
</html>