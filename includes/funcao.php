<?php  include_once("head.php") ?>

<body>
   <?php include_once('header.php') ?>

    <article>
        <div class="container bg-black bg-opacity-75 " id="hero">
            <div class="row ">
                <h1 class="text-center display-4 mt-1 py-4">Funções</h1>
                <hr class="border border-primary border-2 opacity-25">
            </div>
            <div class="row">
                <p>
                    As funções são blocos de código que executam uma tarefa determinada,como por exemplo elas podem
                    processar um conjunto de valores e retornar alterações nos valores fornecidos dentro dela.
                </p>
                <p>
                    Nesse primeira parte usaremos funções determinadas pelo programador, o PHP, assim como outras
                    linguagens, possuem funções pré-determinadas que servem para facilitar o trabalho trazendo agilidade
                    na hora de programar.
                </p>
                <p>
                    Agora veremos um exemplo de função, onde filtramos valores maiores que 40 em um array:
                <pre>
            <code>
                function filtro($valor){
                  return $valor >=40;
               }
                 $numeros = [1,2,34,67,80,455,89,123,90,4,6,7,8];
                 $filtro = array_filter($numeros,'filtro');
                 print_r($filtro);
            </code>
        </pre>
                </p>
                <p>Essa função dará como resultado Array ( [3] => 67 [4] => 80 [5] => 455 [6] => 89 [7] => 123 [8] => 90
                    ) Justamente os números maiores que 40 presentes no array.</p>

               
            </div>
           
                 
           
             <div class="row">
                <h2 class="text-center display-4 py-3"> Sintaxe</h2>
                <hr class="border border-primary border-2 opacity-25">
                <p>Antes de mais nada devemos entender a sintaxe das funções, que são é bem simples e de fácil memorização. 
            <pre>
                <code>
                    function [nome da função]([1°parâmetro],[2°parâmetro].....[parâmetro N]){
                        //código
                        return [retorno da função];
                    }
                </code>
            </pre>
                </p>
                <p>Igual ao que vimos na função acima as funções se mantem sempre com uma estrutura parecida, oque vai mudar em todas as vezes é os <em>atributos e funcionalidades</em> que atribuimos a essas funções</p>
                <p>
                    Toda função é declarada a partir da chamada da palavra reservada <em>Function</em> e em seguida o nome da função. Uma particularidade do php é que ele não diferencia letras maíusculas das minúsculas em nome de funções, ou seja, tanto faz a forma que você escreva o nome de uma função, ela continuará a mesma.
                </p>
                
             </div>
             <div class="row">
                <h4 class="text-center display-6 py-3">Parâmetros da função</h4>
                <hr class="border border-primary border-2 opacity-25">
                <p>
                    O PHP suporta três formas de passar parâmetros por função, sendo elas por valor (o padrão), referência e valores padrões de argumentos. 
                     Vamos ver o método de valor primeiro, onde passamos a  variável a ser transfomada na função por meio de seu parâmetro
                </p>
                <h4 class="text-center display-6 py-3">função por valor</h4>
                <hr class="border border-info border-2 opacity-25 w-50">
        <pre>
            <code>
                //classe que possui as variáveis a ser modificadas
                Class Pessoa{
                   public $nome;
                   public $serie;
                }
               //declarando a função e passandos as variáveis para um parâmetro
               function Gente ($nome,$serie){ 
               $this->nome = $nome;
               $this->serie = $serie;
               
                function GetNome(){
               return $this->nome;
               }
                function GetSerie(){
               return $this->serie;
               }
               function SetNome(){
               $this->nome = $nome;
               }
                function SetSerie(){
               $this->serie = $serie;
               }
               }
               
               $pessoa = new Pessoa();
               $pessoa->setNome("Juan");
               $pessoa->setSerie("Breaking Bad");
               echo  "Olá, meu nome é" . $pessoa->getNome() . " e assito a série". $pessoa->getSerie();
               ?>

            </code>
        </pre>
        <p>
            Nesse exemplo veja que os parâmetros $nome e $serie passam dentro do parametro da <em>função Gente</em> que torna possivel utilizar esse exemplo para diversos valores de variáveis sem ter que alterar muito o código.
        </p>
        <h4 class="text-center display-6 py-3">função por referência</h4>
        <hr class="border border-info border-2 opacity-25 w-50">
        <p>
          Nesse método o parâmetro de uma função recebe a referência de uma variável externa da função, para que isso seja feito o parâmetro recebe o &(E comercial) antes da variável. 
        </p>
       
           <p>Para exemplificar mostrarei como é feito esta passagem:</p>

    <pre>
    <code>
        function refer(&$valor1){
            $valor1 *=10;

            return $valor1;
        }
        $valor2 = 20;
        //função sendo utilizada
        refer($valor2);
        echo $valor2;

    </code>
    </pre>
                </p>
                <p>
                    O $valor1 receberá o valor do $valor2, alterando-o por conta da atribuição feita pelo & (E
                    comercial), assim sendo retornado o valor final de $valor1.
                    Quando a função <em>Refer()</em> for executada passando o valor de $valor2 para $valor1 será
                    impresso o valor de 200.
                </p>
                <h4 class="text-center display-6 py-3">função por valor padrão</h4>
                <hr class="border border-info border-2 opacity-25 w-50">
                <p>
                    Nesse tipo de passagem damos o valor direto nos parâmetros da função, deixando o valor algo fixo nos
                    parâmetros.
                    Um exemplo para melhor compreensão
                </p>
                <pre>
        <code>
            //declarando a função e colocando o valor no parâmetro.
            function pass($valor = 10){
                return $valor;
            }
            echo pass();
        </code>
       </pre>
                <p>
                    Veja que o valor declarado na função é de 10, e após a função dar o seu retorno podemos utilizar a
                    função para obter o valor presente em seu parâmetro.
                </p>
                <h3 class="text-center display-6 py-3">Retorno da Função</h3>
                <hr class="border border-primary border-2 opacity-25 ">

                <p>
                    Como já vimos anteriromente, toda função pode retornar os valores operados coma  função interna do php <em>return</em>, inclusive tanto arrays e objetos podem ser retornados dessa forma.
                </p>
                <p>
                    Isso faz que a funçaõ encerre a sua execução imediatamente e passa o controle de volta a linha de onde ela foi chamada.
                </p>
                <p>
                    Temos um exemplo simple de uso de <em>Return</em>. 
        <pre>
            <code>
               Function Cubic($Number)
               {
                return $Number * $Number * $Number 
               } 
               echo Cubic(2); //retorna '8'.
            </code>
        </pre>

                </p>
                <p>
                    Bem vimos que o retorna coloca o valor operado para o escopo global, podendo ser reutilizado de diversas formas. 
                    Observação, caso o valor de <em>return</em> seja omitido de alguma forma, o valor <strong>null</strong> será retornado.
                </p>
             </div>
        </div>
    </article>

    <?php include_once('footer.php') ?>

</body>