<?php include('head.php'); ?>

<body>
  <?php include("header.php") ?>
  <article>
    <div class="container pb-3 bg-black bg-opacity-75 " id="hero">
      <div class="row px-5">
        <h1 class="text-center fs-1 py-3">Programação Orientada a Objetos</h1>
        <hr class="border border-primary border-2 border-opacity-50">
        <p>
          Como umas das principais caracteristicas do PHP, a programação orientada a objetos traz para a linguagem
          uma nova forma de programar que a deixa muito mais dinâmica e versátil.
          O Php em si não é dependente das POO, porém aprender como funciona esse método na prática faz um enorme
          diferencial. Ainda mais por que o PHP suporta todos os conceitos básicos da POO, sendo eles
          encapsulamento,herança,polimorfismo e abstração.
        </p>
        <p>
          Nas POO todos os objetos podem ser instanciados em uma classe, que é um molde que dará a forma para os
          objetos. As classes podem ter propriedades(variáveis)Essas que representaram os dados do objeto e
          métodos (funções) que darão funcionalidade para o objeto, ditando o seu comportamento.
        </p>
        <p>
          No PHP possuimos uma ampla variedade de palavras-chaves que servem justamente paras as POO, são palavras
          que servem para definir classes,propriedades e métodos, além de outras funcionalidades para trabalhar
          com objetos.
          Algumas dessas palavras são:
        </p>
        <hr class="border border-primary border-2 border-opacity-75">
        <ul class="list-group-flush">
          <li class="list-group">Class: que define uma nova classe</li>
          <li class="list-group">new: cria um novo objeto</li>
          <li class="list-group">__construct: método construtor da classe, que é executado quando um objeto é criado</li>
          <li class="list-group">__destruct: método destrutor da classe, que é executado quando um objeto é destruido</li>
          <li class="list-group">extends: muito usado para variáveis protected, define uma classe filha que herda as
            propriedades e métodos do pai</li>
          <li class="list-group">parent: também usados para usar propriedades e métodos de uma classe pai.</li>
          <li class="list-group">interface: define uma interface, que é um conjunto de métodos que devem ser implementados
            por uma classe que a utiliza</li>
          <li class="list-group">Get & Set: Os gets servem para retornar o valor de uma propriedade, enqaunto os sets
            recebem um valor por parâmetro e armazenam o valor nas propriedades.</li>
        </ul>
        <ul class="list-group-flush">
          <p> e também os parâmetros de visibilidade sendo eles:</p>
          <li class="list-group">Public</li>
          <li class="list-group">Protected</li>
          <li class="list-group">Private</li>
        </ul>
        <p class="pb-3">
          Agora vejamos como algumas dessas palavras-chave são usadas:
        </p>
        <h3 class="text-center fw-semibold fs-1 py-3">Visibilidade</h3>
        <hr class="border border-primary border-2 border-opacity-50">
        <p>
          Na programação orientada a objetos há certos parâmetros para que um <strong>atributo</strong> seja acessado,
          Para isso usamos palavras reservadas da linguagem para determinar de que modo poderemos acessa-las. Nesses
          modificadores de acesso determinamos a visibilidade de um método ou atributo pertencente a classe. Ou seja,
          determinamos se ele pode ou não ser acessado fora da classe em que foi declarado.
        </p>
        <p>
          Para modificar a visibilidade de um atributo ou método devemos preceder sua declaração de uma das palavras que
          representam o modificador, essas declarações são
          <em><strong>Public</strong></em>,<em><strong>Private</strong></em> e <em><strong>Protected</strong></em>. Cada
          um deles possuem parâmetros bem sugestivos pelo nome, veremos a seguir como cada um deles se comporta.
        </p>
        <h3 class="text-center fw-semibold fs-1 py-3">Public</h3>
        <hr class="border border-primary border-2 border-opacity-50">
        <p>
          É o método padrão, de acesso permissivo, onde pode-se ser acessado de qualquer ponto do código e por outras
          classes. Um exemplo de acesso public:
        <pre>
              <code>
          class Montador{
              public $Atributo ='um pequeno texto';
              public function metodoPublico() { }
          }
              </code>
          </pre>
        Nesse código temos uma classe denominada <em>Montador</em> que possui um atributo público chamado $Atributo e um
        método público chamado de metodoPublico(). Ambos podem ser acessados por qualquer parte do código e por qualquer
        outra classe.
        </p>
        <p>
          Podemos instanciá-las para que essa classe para termos acesso ao elemento, como no exemplo:
        <pre>
              <code>
          $objeto = new Montador();
          $objeto->Atributo = 'teste'
          $objeto->metodoPublico();
              </code>
          </pre>
        </p>
        <h3 class="text-center fw-semibold fs-1 py-3">Private</h3>
        <hr class="border border-primary border-2 border-opacity-50">
        <p>
          Private é o método mais restrito. Com ele apenas atributos e métodos presentes dentro da classe tem a permissão
          de acessa-lo. Deste modo somente algumas funções possuem acesso à ele, já outras parte do código não possuem
          acesso a ele, nem mesmo as sub-classes (filhas) possuem acesso a ele.
          Tendo somente o método <em>get"variável"()</em> que retornam os valores presentes na classe.
        </p>
        <p>
          Um exemplo de classe com Private.
        <pre>
              <code>
                  class Pessoa {
                      private $nome;
                      private $idade;
        
                      public function __construct($nome, $idade) {
                        $this->nome = $nome;
                        $this->idade = $idade;
                      }
        
                      public function getNome() {
                        return $this->nome;
                      }
        
                      public function getIdade() {
                        return $this->idade;
                      }
        
                      public function setIdade($idade) {
                        $this->idade = $idade;
                      }
                    }
              </code>
          </pre>
        Neste exemplo, a classe <em>Pessoa</em> tem duas variáveis privadas, sendo elas $nome e $idade. Sendo que elas só
        são acessiveis dentro da própria classe, dando um erro caso tente usá-las fora da classe Pessoa.
        </p>
        <p>
          Além disso, também foi criado o método <em>setIdade()</em>, que permite modificar o valor da variável $idade,
          mas só pode ser chamada dentro dessa classe.
        </p>
        <h3 class="text-center fw-semibold fs-1 py-3">Protected</h3>
        <hr class="border border-primary border-2 border-opacity-50">
        <p>
          Já o Protected somente a classes e suas classes filhas possuem acesso aos atributos e métodos. Assim, ao ser
          instanciado a classes e os elementos protegidos (protected) não podem ser acessados diretamente, como ocorre no
          público.
          Sabendo disto um exemplo de como o protected funciona seria assim:
        <pre>
              <code>
                  class Animal {
                      protected $raça;
                      protected $tamanho;
        
                      protected function fazerBarulho() {
                        echo "O animal fez um barulho!";
                      }
        
                      public function __construct($raça, $tamanho) {
                        $this->raça = $raça;
                        $this->tamanho = $tamanho;
                      }
        
                      public function getRaça() {
                        return $this->raça;
                      }
        
                      public function getTamanho() {
                        return $this->tamanho;
                      }
                    }
        
              </code>
          </pre>
        Veja que a classe animal possui duas variáveis protegidas, $raça e $tamanho. Podendo ser somente acessadas pela
        própria classe ou pelas suas classes filhas.
        </p>
        <p>
          Também possui um método de "fazerBarulho" que só pode ser chamado dentro da classe e suas filhas.
        </p>
        <p>
          do mesmo modo que o exemplo anterior os valores de $raça e $tamanho podem ser verificados pelo método
          get"$valor()" retornando o valor correspondente dessas variáveis.
        </p>
        <p>
          Para as classes filhas, acessar os elementos protegidos é nescessário seguir algumas regras como:
        <ul>
          <li>
            -> Para obter o valor de um atributo protegido da classe pai basta usar $this->atributo;
          </li>
          <li>
            -> Para alterar o valor de um atributo protegido da classe pai é preciso redeclará-lo na classe filha;
          </li>
          <li>
            -> para chamar um método protegido da classe pai é nescessário usar parent::metodo();
          </li>
        </ul>
        </p>
        <p>
          para melhor entendimento, temos os seguintes exemplos:
        </p>
        <pre>
          <code>
              //essa é a classe pai, com seus atributos sendo feitos por um <em>construct</em>
              // e o método dentro de uma função
              class Pessoa {
                  protected $nome;
                  protected $idade;
        
                  public function __construct($nome, $idade) {
                    $this->nome = $nome;
                    $this->idade = $idade;
                  }
        
                  protected function dizerOla() {
                    echo "Olá, meu nome é {$this->nome} e tenho {$this->idade} anos.";
                  }
                }
          // agora vem a classe filha(Cliente) extendendo as funções do pai
          class Cliente extends Pessoa {
              private $saldo;
        
              public function __construct($nome, $idade, $saldo) {
                parent::__construct($nome, $idade);
                $this->saldo = $saldo;
              }
        
              public function mostrarDados() {
                $this->dizerOla();
                echo " Meu saldo é de {$this->saldo} reais.";
              }
            }
          </code>
            </pre>
        <p>
          Nesse exemplo a Classe pai "Pessoa" possui os atributos $nome e $idade, além de um método protegido chamado
          "dizerOla( )"";
          A classe filha que se extende da classe "Pessoa", possui um atributo privado $saldo, e um método público chamado
          "mostrarDados( )".
        </p>
        <p>
          Dentro do construct de "Cliente" há o método "parent::__construct( )" para chamar o construtor da classe pai e
          passar os parâmetros "$nome" e "$idade". O atributo "$saldo" é inicializado na própria classe "Cliente".
        </p>
        <p>
          No método "mostrarDados( )", é chamado o método "dizerOlá( )" da classe pai através da palavra-chave
          <em>"this->"</em>. Além disso, é mostrado o saldo do cliente. Assim, a classe filha "Cliente" utiliza o método e
          o atributo da classe pai "Pessoa".
        </p>
        <p>
          Uma pequena tabela exemplificando as permissões de cada parâmetro:
        </p>
        <table class="table table-dark border">
          <thead>
            <tr>
              <th scope="col">Modificador</th>
              <th scope="col">Classe</th>
              <th scope="col">Sub-classe</th>
              <th scope="col">Globalmente</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <th scope="row">Public</th>
              <td>Sim</td>
              <td>Sim</td>
              <td>Sim</td>
            </tr>
            <tr>
              <th scope="row">Protected</th>
              <td>Sim</td>
              <td>Sim</td>
              <td>Não</td>
            </tr>
            <tr>
              <th scope="row">Private</th>
              <td>Sim</td>
              <td>Não</td>
              <td>Não</td>
            </tr>
          </tbody>
        </table>
        <h3 class="text-center fw-semibold fs-1 py-3">Constructors e Destructors</h3>
        <hr class="border border-primary border-2 border-opacity-50">
        <p>
          Construtores e Destruidores são métodos em Programação Orientada a objetos (OOP) que podem ser invocados quando
          um objeto é criado ou destruido. No PHP, você pode usar construtor e destructor para administrar a inicialização
          e a limpeza dos seus objetos.
        </p>
        <h4 class="text-center fw-semibold fs-1 py-3">Como funciona um _construct</h4>
        <hr class="border border-primary border-2 border-opacity-50">
        <p>
          O construct é um método que é automáticamente chamado quando é criado uma nova instancia da classe. O
          constructor é invocado pelo caracter especial __construct, e ele pode aceitar parâmetros que serão passados para
          o Objeto. Sendo este o seu principal proposito, o de dar inicio aos estados de propriedade dos objeto, bem como
          atribuir qualquer dependencia que o objeto nescessitará, Como por exemplo, você pode usar o método _construct
          para atribur uma conexão a database, o log in ou a configuração de um objeto dentro de uma classe.
        </p>
        <h4 class="text-center fw-semibold fs-1 py-3">Como funciona um _destruct</h4>
        <hr class="border border-primary border-2 border-opacity-50">
        <p>
          O destructor é um método que é automáticamente chamado quando um bjeto não é mais nescessário ou referênciado. O
          destructor é chamado pelo nome especial __destruct, e ele não aceita nenhum parâmetro. Sua principal função é
          Limpar ou finalizar as tarefas de um objeto, como por exemplo, fechar as conexões a database, liberar recursos
          ou limpar o histórico.
        </p>
        <p>
          segue alguns exemplos de __construct e __destruct do mesmo objeto.
        <pre>
          <code>
              //O construct
              class Pessoa {
                  private $nome;
        
                  public function __construct($nome) {
                    $this->nome = $nome;
                    echo "Pessoa criada com nome {$this->nome}.";
                  }
                }
        
                $pessoa = new Pessoa("João");
          </code>
            </pre>
        </p>
        <p>
          pare entender o que fizemos, Temos que ver que a classe <em>Pessoa</em> tem um único atributo privado chamado
          <em>$nome</em>, e um construtor que recebe esse atributo.
          Quando um objeto da Classe <em>Pessoa</em> é criada com o operador <em>new</em> o construtor é executado
          automáticamente. Neste caso, ele armazena o valor de <em>$nome</em> no atributo "$this->nome" e mostra uma
          mensagem indicando que a pessoa foi criada.
        </p>
        <p>
          Para o __destruct temos o seguinte exemplo:
        <pre>
          <code>
              class Pessoa {
                  private $nome;
        
                  public function __construct($nome) {
                    $this->nome = $nome;
                    echo "Pessoa criada com nome {$this->nome}.";
                  }
        
                  public function __destruct() {
                    echo "Pessoa de nome {$this->nome} foi destruída.";
                  }
                }
        
                $pessoa = new Pessoa("João");
                unset($pessoa);
          </code>
            </pre>
        </p>
        <p>
          Perceba que mantemos o __construct , para que depois de executá-lo demos início ao processo de destruct.
        </p>
        <p>
          Quando um objeto da classe "Pessoa" é criado com o operador "new", o constructor é executado automáticamente.
          Desta forma, ele armazena o valor de "$nome" no atributo "$this->nome" e mostra uma mensagem indicando que a
          pessoa foi criada.
        </p>
        <p>
          o "__destruct()" é chamado automáticamente quando o objeto é removido da memória, o que pdoe ser feito
          explicitamente com a função "unset()". Neste exemplo, após a criação do objeto "$pessoa" a função
          "unset($pessoa)" é usada para remover o objeto da memória.
        </p>
        <p>
          Após esse processo o próprio Destructor é chamado para retornar a confirmação de sua função. Ou seja, que ele
          destruio o objeto.
        </p>
        <h2 class="text-center fw-semibold fs-1 py-3">As caracteristicas da POO</h2>
        <hr class="border border-primary border-2 border-opacity-50">
        <p>
          Como citamos anteriormente, as POO possuem caracteristicas básicas, conceitos que auxiliam na construção desse
          paradigma resolvendo alguns problemas da programação estruturada. Sendo eles o conceito de
          <em>encapsulamento</em>, <em>herança</em>, <em>interfaces</em> e <em>polimorfismo</em>.
        </p>
        <h3 class="text-center fw-semibold fs-1 py-3">Encapsulamento</h3>
        <hr class="border border-primary border-2 border-opacity-50">
        <p>
          Igual ao tópico de <em>visibilidade</em>, o encapsulamento se encarrega de ditar os níveis de autorização que os
          métodos tem sobre uma classe. Por exemplo atributos privados não podem ser acessados fora de sua própria classe,
          sem falar que temos métodos especificos para ter acesso à esse tipo de conteúdo, comos setters e getters. Outra
          forma de enxergar o encapsulamento é entendermos que o encapsulamento de métodos e atributos os impede de ser
          vazados do escopo, onde um atributo ou método é visivel por alguém que não deveria ter acesso a ele, como por
          exemplo outros objetos e classes. Isso evita a confusão do uso de variáveis globais no programa, deixandomasi
          fácil de identificar em qual estado cada variável vai estar a cada momento do programa , já que a restrição de
          acesso nos permite identificar quem consegue modifica-la.
        </p>
        <p>
          O encapsulamento ajuda proteger a integridade dos dados e a reduzir a complexidade do código. Ele também ajudar
          a melhorar a manutenibilidade e a reutilização do código, pois permite que as mudanças na implementação de uma
          classe sejam feitas sem afetar outros componentes do sistema.
        </p>
        <p>
          Um pequeno exemplo de classe encapsulada, onde temos a Classe Car com propriedades definidas como
          <em>private</em> onde seus métodos(públicos) são usadas para acessá-las e modifica-las.
          Possuimos também prorpiedades privadas como $make, $model e $year que só podem ser acessadas dentro do escopo da
          classe.
        </p>
        <pre>
            <code>
              class Car {
                private $make;
                private $model;
                private $year;
        
                public function __construct($make, $model, $year) {
                  $this->make = $make;
                  $this->model = $model;
                  $this->year = $year;
                }
        
                public function getMake() {
                  return $this->make;
                }
        
                public function getModel() {
                  return $this->model;
                }
        
                public function getYear() {
                  return $this->year;
                }
        
                public function setMake($make) {
                  $this->make = $make;
                }
        
                public function setModel($model) {
                  $this->model = $model;
                }
        
                public function setYear($year) {
                  $this->year = $year;
                }
              }
        
              $car = new Car("Toyota", "Corolla", 2020);
              echo $car->getMake(); // outputs "Toyota"
        
              $car->setMake("Honda");
              echo $car->getMake(); // outputs "Honda"
        
            </code>
          </pre>
        <p>
          Todos os métodos <em>get</em> são usados para obter e retornar os valores dentro de cada atributo, enquanto, os
          <em>set</em> são usados para definir que atributos são esses, dessa forma podemos ter acesso a classe Car que
          controla o acesso e a modificação de suas propriedades.
        </p>
        <p>
          Também usamos um "$car = new Car()" para criarmos um objeto através dessa classe. Onde passamos os valores
          atraves do parâmetro de um<em>Car( )</em> e o devolvemos com o getMake.
        </p>
        <h3 class="text-center fw-semibold fs-1 py-3">Herança</h3>
        <hr class="border border-primary border-2 border-opacity-50">
        <p>
          Para entender o conceito de herança devemos entender que as classes podem compartilhgar seu conteúdo para outras
          sub-classes, por meio das funções especiais <em>extend</em> e <em>parent</em>, essas sub-classes herdam todos os
          atributos e métodos presentes na classe pai, assim evitando reescrever um código já existente, melhorando a
          reutilização do código e também mantendo o código de forma mais lógica e hierárquica. Lembrando que esse forma
          só é possivel para classes públicas e protegidas.
        </p>
        <p>
          Além de herdar todos os métodos e atributos, essas sub-classes também podem adicionar outros métodos e atributos
          para si, assim recriando um novo objeto que possui caracteristicas tanto do pai quanto da filha. No entanto, é
          importante usar a herança com moderação e planejar cuidaddosamente a hierarquia de classes, a fim de evitar
          problemas de design e complexidade excessiva.
        </p>
        <p>
          Temos um pequeno exemplo de herança, onde a Classe <em>Animal</em> possui uma sub-classe <em>Dog</em> que herda
          todas as caracteristicas da classe animal e possui seus proprios métodos para se diferenciar como Classe Dog
        </p>
        <pre>
        <code>
          class Animal {
            protected $name;
        
            public function __construct($name) {
              $this->name = $name;
            }
        
            public function getName() {
              return $this->name;
            }
          }
        
          class Dog extends Animal {
            public function latir() {
              return "AuuAuuu!";
            }
          }
        
          $dog = new Dog("Snoopy");
          echo $dog->getName(); // outputs "Snoopy"
          echo $dog->latir(); // outputs "AuuAuuu!"
        </code>
            </pre>
        <h3 class="text-center fw-semibold fs-1 py-3">Interface</h3>
        <hr class="border border-primary border-2 border-opacity-50">
        <p>
          De todos essas caracteristicas essa é uma das mais interessantes, A <em>interface</em> funciona como uma espécie
          de <em>herança</em> porém com a diferença que nada de fato é herdado e sim implementadas, assim, podemos dizer
          que as classes presentes compartilham um conjunto de <em>métodos</em> em comum. Podemos dizer que a interface é
          como um "contrato" de uma classe que a implementa. Uma interface deve fornecer uma implementação a todos os
          métodos que a interface define.
        </p>
        <p>
          As interfaces ajudam a melhorar a modularidade do código e permitem que o código seja mais flexivel e
          extensivel. Elas são especialmente úteis em grandes projetos de equipe, pois permitem que diferentes
          desenvolvidores trabalhem em diferentes partes do código sem interferir um no outro (que nem acontece com git
          git-hub).
        </p>
        <p>
          Aqui possuimos a <em>Interface</em> Veiculo que possui métodos publicos para getMake( ), getModel( ) e getYear(
          ), esses métodos são o que vai ser implementado em cada sub-classe sub-sequente.
        </p>
        <pre>
          <code>
            interface Veiculo {
        public function getMake();
        public function getModel();
        public function getYear();
            }
            
            class Car implements Veiculo {
        //a palavra-chave imprements serve para a classe implementar as propriedades da interface Veiculo.
        private $make;
        private $model;
        private $year;
        public function __construct($make, $model, $year) {
          $this->make = $make;
          $this->model = $model;
          $this->year = $year;
        }
        public function getMake() {
          return $this->make;
        }
        public function getModel() {
          return $this->model;
        }
        public function getYear() {
          return $this->year;
        }
            }
            
            $car = new Car("Toyota", "Corolla", 2020);
            echo $car->getMake(); // outputs "Toyota"
            
          </code>
        </pre>
        <p>
          Visto que todos os métodos Get são definidos na classe Car e retornam os valores das prorpiedads privadas $make,
          $model e $year, respectivamente. Ao criar um novo objeto Car e chamar o método "getMake( )" podemos obter o
          valor da prorpiedade "make". Como a classe Car implementada a interface Veiculo, podemos usá-la em qualquer
          lugar que a interface "Veiculo" seja esperada.
        </p>
        <h3 class="text-center fw-semibold fs-1 py-3">Polimorfismo</h3>
        <hr class="border border-primary border-2 border-opacity-50">
        <p>
          Outra funcionalidader bem interessante, digamos que temos dois videos Jogos, que apesar de fazerem os jogos funcionarem há uma certa diferença entre eles, um aceita o jogo por meio de um cartucho enquanto o outro aceita o jogo por meio de um cd, agora digamos que esse jogo é o mesmo para ambos os consoles, tendo o mesmo número de fases e os mesmos controles, agora vemos que apesar de ambos serem iguais a forma de implementa-los é diferente, desse modo podemos ter uma clara impressão do que é polimorfismo, onde temos dois objetos identicos, em classes diferentes, que nescessitam de uma forma prórpia para ser imposta.
        </p>
        <p>
          Podemos entender que o método "jogarJogo" é uma forma de polimorfismo, pois dois objetos, de duas classes diferentes, têm um mesmo método que é implementado de formas diferentes, ou seja, um método possui várias formas, várias implementações diferentes em classes diferentes, mas que possuem o mesmo efeito.
        </p>
        <p>
          Um pequeno exemplo de polimorfismo, onde temos ambos os consoles que apesar de diferentes rodam o mesmo jogo:
        </p>
        <pre>
          <code>
            interface Console {
              public function JogarJogo($Jogo);
            }
        
            class ConsoledeCartucho implements Console {
              public function JogarJogo($Jogo) {
                echo "Playing $Jogo Em um console de Cartucho." . PHP_EOL;
              }
            }
        
            class ConsoleCD implements Console {
              public function JogarJogo($Jogo) {
                echo "Playing $Jogo Em um console de CD." . PHP_EOL;
              }
            }
        
            class Jogo {
              private $title;
        
              public function __construct($title) {
                $this->title = $title;
              }
        
              public function getTitle() {
                return $this->title;
              }
            }
        
            $Jogo = new Jogo("MonsterHunter.");
            $ConsoledeCartucho = new ConsoledeCartucho();
            $ConsoleCD = new ConsoleCD();
        
            $ConsoledeCartucho->JogarJogo($Jogo->getTitle()); // outputs "Jogando MonsterHunter. Em um console de Cartucho."
            $ConsoleCD->JogarJogo($Jogo->getTitle()); // outputs "Jogando MonsterHunter. Em um console de CD."
        
          </code>
        </pre>
        <p>
          Nesse exemplo usamos uma <em>Interface</em> "Console" que tem como método definido "playGame()".
          Tamém possuimos duas classes "ConsoledeCartucho" e "ConsoleCD", ambas implementando a classe "Console". Cada uma delas implementa o método público e seu parâmetro "JogarJogo($jogo)".
        </p>
        <p>
          Em seguida temos a Classe "Jogo" que possui o atributo privado de $title, que com os parâmetros certos nos retornará o Titulo do Jogo.
        </p>
        <p>
          Ao criar um novo objeto "Jogo", podemos passar o titulo do jogo para os métodos "JogarJogo( )" de cada console, que usam o <em>polimorfismo</em> para executar o mesmo método, mas com implementações diferentes, dependendo do tipo de console em que o jogo está sendo jogado.
        </p>
        <p>
          Ao chamar o método "JogarJogo( )"do objeto "$ConsoledeCartucho", podemos jogar o jogo no console de cartucho, enquanto ao chamar o método "JogarJogo( )"do objeto "$ConsoleCD", podemos jogar o mesmo jogo em um console de CD, sem precisar alterar o código do jogo ou da classe "Jogo".
        </p>
        <h3 class="text-center fw-semibold fs-1 py-3">Getters e Setters</h3>
        <hr class="border border-primary border-2 border-opacity-50">
        <p>
          Visto que em muitas vezes um atributo não pode ser facilmente acessado (atributos private especificamente)
          usamos os métodos especiais Get e Set para ter acesso e manipular esse atributo.
        </p>
        <p>
          Como o nome sugere Get (pegar) e Set (Definir/Colocar) são métodos usados no escopo da classe para ter acesso
          aos dados presentes nele.
        </p>
        <p>
          seguimos com um exemplo utilizando ambos os métodos em uma classe com atributos privados:
        </p>
        <pre>
            <code>
        class Eu {
          private $nome;
          private $idade;
          private $jogo;
        
          public function getNome() {
            return $this->nome;
          }
        
        
          public function setNome($nome) {
            $this->nome = $nome;
          }
        
          public function getIdade() {
            return $this->idade;
          }
        
          public function setIdade($idade) {
            $this->idade = $idade;
          }
          public function getJogo(){
            return $this->jogo;
          }
          public function setJogo($jogo){
            $this->jogo = $jogo;
          }
        }
        
            </code>
          </pre>
        <p>
          Veja que nessa Classe Eu possuimos as propriedades privadas $nome $idade e $jogo que possuem os métodos públicos de Get e Set para cada um desse atributos, com tudo isso definido se torna possivel manipular os atributos privados dessa classe.
        </p>
        <p>
          Para setar e apresentar os valores retornados faremos isto:
        </p>
        <pre>
            <code>
          $pessoa = new Pessoa();
          $pessoa->setNome("Juan");
          $pessoa->setIdade(27);
          $pessoa->setJogo("Elden Ring")
          echo $pessoa->getNome() . " tem " . $pessoa->getIdade() . " anos." . "e joga" . $pessoa->getJogo();
        
            </code>
          </pre>
        <p>
          Com esta formula podemos setar o nome a idade e um jogo que a pessoa possua, podemos retornar todos esse valores e exibi-los na tela, lembrando de deixar todos esses códigos no escopo da classe, para que o acesso seja permitido.
        </p>
      </div>
    </div>
  </article>


<?php include("footer.php"); ?>


</body>

</html>