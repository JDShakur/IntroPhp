<?php include('head.php') ?>

<body>
    <?php  include_once('header.php') ?>
    <section class="container-md">
        <div class="row">
            <div class="bg-black bg-opacity-75 px-md-5">
                <h2 class="display-4 text-center mt-1 py-3 ">Arrays</h2>
                <hr class="border border-primary border-2 opacity-25">
                <h3 class="text-center mt-1 py-3 fw-semibold">Sintaxe</h3>
                <p>Um array pode ser construido com o parâmentro array() ou array[]. Ele armazena os valores, os separando por vírgula. Seguindo a regra para arrays associativos temos: $key => $value. Como no exemplo </p>
            <pre>
            <code>
                array(
                    $key => "Valor",
                    $key2 => "Valor2",
                    $key3 => "Valor3"
                );
            </code>
            </pre>
                <p>
                    a vírgula no último elemento pode ser omitida,já que logo após o fechamento do array é obrigatório
                    ter um
                    ";".
                    As Keys do array pode ser de valor numérico Inteiro ou uma string,já seu valor pode ser dos
                    seguintes tipos.
                </p>
                <ul>
                    <li><em>String</em> </li>
                    <li><em>Floats</em> </li>
                    <li><em>Bools</em> </li>
                    <li><em>Null</em> </li>
                </ul>
                <p>
                    Exemplo para cada um deles;
                <pre>
                <code>
            $var = array(
                "1" => "valor",
                "2" => "3",
                "3"=> 4,
                "5"=> true,
                "6"=> Null,
                "7"=> 2.5,
            );
            var_dump ($var);
                </code>
                </pre>
                o código exibirá:
                <pre>
                <code>
        array(6) {
        [1]=> string(5) "valor"
        [2]=> string(1) "3"
        [3]=> int(4)
        [5]=> bool(true)
        [6]=> NULL
        [7]=> float(2.5) }
                </code>
                </pre>
                a [1] chave mostra uma string.
                A chave [2] o número "3" é uma string enquanto o número da chave [3] é um numeral inteiro e o da chave
                [7] é um
                valor <em>float</em>.
                repare que na key[5] o valor <em>true</em> pode ser representado número 1. Isso vem do binário, onde 1 é
                positivo e 0
                negativo ou falso.
                </p>
                <p>Um array no PHP pode conter diferentes tipos de dados, sendo possivel colocar em um único array
                    números,strings,objetos e até mesmo um outro array, nesse caso, o array é chamado de matriz</p>
                <br>

                <h2 class="text-center mt-1 py-3 fw-semibold">Mostrando um array na tela</h2>
                <hr class="border border-primary border-2 opacity-25">
                <p>Há diversos métodos de mostrar um array na tela, sendo um deles o uso da palavra reservada
                    <em>echo</em>,
                    porém esse método só exibe uma única chave por vez sendo escrito dessa maneira:
                </p>
                <p>
                <pre>
        <code>
        $numeros = [5, 6, 4, 8, 8, 9];
        echo $numeros[0]; // exibe 5
        echo $numeros[1]; // exibe 6
        echo $numeros[2]; // exibe 4
        echo $numeros[3]; // exibe 8
        echo $numeros[4]; // exibe 8
        echo $numeros[5]; // exibe 9
        </code>
        </pre>
                </p>
                <p>Outro método é com a função <em>var_dump</em>, que exibe o array com muito mais detalhes:

                <pre>
        <code>
        $jogos = array(
        "Elden ring",
        "Klonoa",
        "Cronno Trigger",
        "Final Fantasy"
        );
        print_r( $jogos);//código

        //será exibido:

        array(4) {
        [0]=> string(10) "Elden ring"
        [1]=> string(6) "Klonoa"
        [2]=> string(14) "Cronno Trigger"
        [3]=> string(13) "Final Fantasy"
        }
        </code>
        </pre>

                Veja que o array é exibido informando seu tipo e a quantidade de caracteres dentro de cada um dos
                <em>valores</em>
                e por ultimo temos o <em>print_r</em>, que é bem parecido com o <em>var_dump</em> porém exibe muito
                menos detalhes:
                <pre>
        <code>
        $musicas = array(
        'Dear mama',
        'sanctuary',
        'you break my heart out',
        'predictable',
        'this is ffffire');
        print_r ($musicas);//código
        //será exibido:
        Array
        (
            [0] => Dear mama
            [1] => sanctuary
            [2] => you break my heart out
            [3] => predictable
            [4] => this is ffffire
        )
        </code>
        </pre>
                </p>

                <br>
                <h2 class="text-center mt-1 py-3 fw-semibold">Arrays Multidimensionais</h2>
                <hr class="border border-primary border-2 opacity-25">
                <p>Como citei antes, arrays podem receber qualquer valor inclusive outros arrays. Esse procedimento é
                    chamado de matriz, e eles podem ser representados como:
                <pre>
        <code>

            $warhammer = array
            (
            "imperium" =>
            [
            "imperialis" =>[
            "inquisition",
            "adeptas sororitas",
            "Astra Militarum"
            ],
            "Astartes" =>[
            "Ultramarines",
            "Space Wolfs",
            "Dark Angels"
            ]
            ],
            "Aeldari" =>[
            "craftworld"=>[
            "FarSeer Mecha",
            "Eldrad Ulthran",
            "Zephyrblade"
            ],
            "Drukhari"=>[
            "Urien Rakarth",
            "Kulith Scourgehand",
            "Lelith Hesperax"
            ]
            ],

            );
            print_r($warhammer);

o print_r exibirá:
Array
(
    [imperium] => Array
        (
            [imperialis] => Array
                (
                    [0] => inquisition
                    [1] => adeptas sororitas
                    [2] => Astra Militarum
                )
            [Astartes] => Array
                (
                    [0] => Ultramarines
                    [1] => Space Wolfs
                    [2] => Dark Angels
                )
        )
    [Aeldari] => Array
        (
            [craftworld] => Array
                (
                    [0] => FarSeer Mecha
                    [1] => Eldrad Ulthran
                    [2] => Zephyrblade
                )
            [Drukhari] => Array
                (
                    [0] => Urien Rakarth
                    [1] => Kulith Scourgehand
                    [2] => Lelith Hesperax
                )
        )
)
                </code>
            </pre>
                apesar da estrutura complicada, essas matrizes são muito úteis quando se precisa armazenar uma grande
                quantidade de informações.As matrizes PHP é umas das estruturas de dados mais úteis e flexivéis da
                linguagem e são usadas em muitos casos para armazenar e manipular conjuntos de dados relacionados.
                </p>
                <br>
                <h2 class="text-center mt-1 py-3 fw-semibold">O uso de For Each</h2>
                <hr class="border border-primary border-2 opacity-25">
                <h3 class="text-center mt-1 py-3 fw-semibold">Sintaxe</h3>
                <br>
                <p> Arrays também podem ser interados por laço de repetição, sendo o mais recomendado dele o foreach,
                    A sintaxe básica do <em>for each</em> é conforme o código abaixo:
            
                <pre>
                    foreach ($array as $value){
                        //código a ser executado;
                    }
                </pre>
                Dessa forma a cada iteração do laço de repetição, o valor do elemento atual do array é atribuido ao valor $value. Consequentemente o ponteiro do Array é movido um a um, até atingir seu último elemento.  Como por exemplo:

                <pre>

                    $musicas = array("Holiday","Boulevard of broken dreams","American idiot");
                    foreach ($musicas as $value){
                    echo "$value";
                    }                
                </pre>
                dessa forma o laço de repetição percorrerá cada elemento do array e irá imprimi-lo na tela. O código imprimido ficará assim:
                <pre>
                    Holiday
                    Boulevard of broken dreams
                    American idiot
                </pre>
                É possivel modificar diretamente o elemento  de um array por meio de laço de repetição, basta adicionar um <em>&</em> ao $value.
                <pre>
                    $numeros = array(1,3,6,9),
                    foreach($numeros as &$value){
                        $value = $value * 3;
                    }
                    print_r ($numeros);//Agora os valores presentes na variável $numeros passam a ser (3,9,18,27);
                </pre>
                </p>
                <p>Também é possivel utilizar o valor da chave, utilizando-a para trabalhar no nosso código, basta usar a sintaxe:
                <pre>
                    foreach ($array as $key => $value){
                        //código
                    }
                </pre>
                Dessa forma podemos utilizar como:
                <pre>

                    $cores = array("Azul","Amarelo","Vermelho");
                    foreach ($cores as $key => $value) { 
                    echo "Minha cor no indice ".$key." é ".$value."
                    };
                </pre>
                Desta forma a cada vez que o laço de repetição fizer a leitura do código teremos printado na tela o valor da chave e o valor do array.
                
                <pre>
                    Minha cor no indice 0 é Azul
                    Minha cor no indice 1 é Amarelo
                    Minha cor no indice 2 é Vermelho
                </pre>
                é possivel utilizar essa estrutura para chaves personalizadas, como no exemplo:
                <pre>
                    $pessoa = array(
                        "nome"=> "Januário",
                        "sobrenome"=> "Firmino",
                        "apelido"=> "Seu Minino"
                    );
                    foreach ($pessoa as $key => $value){
                        echo $key."=>".$value;
                    }
                </pre>
                Dessa forma teriamos:
                <pre>
                    nome => Januário
                    sobrenome => Firmino
                    apelido => Seu Minino
                </pre>
                </p>
                <h3 class="text-center mt-1 py-3 fw-semibold">Algumas funções de Array no PHP</h3>    
                <hr class="border border-primary border-2 opacity-25">
                <h3 class="text-center mt-1 py-3 fw-semibold">Função Count()</h3>
                <p>Para contar quantos elementos um array possui podemos usar a função <em>count()</em>
                como no exemplo:
                <pre>
                    <code>
                $aleatorio =('alana','arthur','david','13',
                'azul,'rato','camisa',
                'verde','januário','adeptus','Astra',
                'beligerante','warlord','fred',
                'ken',[1]=>'barbie','1.4','KO','street','rosa');

                echo "O número de elementos nesse array é de :".count($aleatorio);

                vai ser mostrado O número de elementos nesse array é de:20
                    </code>
                </pre>
                Veja que idependente do que o array carrega é mostrado o número total de elementos.
                </p>

                <h3 class="text-center mt-1 py-3 fw-semibold">Adicionando Valores em um array</h3>    
                <hr class="border border-primary border-2 opacity-25">

                <p>
                    podemos declarar um array e adicionar valores a ele dinâmicamente utilizando-se deste método
                <pre>
                $arr ();
                $arr[] ='jabuticaba';
                $arr[] ='ornitorrinco';
                $arr[] ='trampolim';
                $arr[] ='azul';    
                $arr[] ='cachorro';
                $arr[]='abacaxi';
                    
                //teremos o resultado
                $arr =(
                [0]=>'jabuticaba',
                [1]=>'ornitorrinco',
                [2]=>'trampolim',
                [3]=>'azul',
                [4]=>'cachorro',
                [5]=>'abacaxi'
                    )
                </pre>
                desse método qualquer valor adicionado como $arr[] vai para a última chave do array.
                </p>
                <h3 class="text-center mt-1 py-3 fw-semibold">Adicionando Valores no inicio do array</h3>    
                <hr class="border border-primary border-2 opacity-25">
                <p>
                    Podemos usar a função <em>array_unshift()</em> para adicionar valores para o inicio do array como no exemplo abaixo.
<pre>
    <code>
        $tech =array('pc','notbook','monitor');
        array_unshift($tech,'mouse','teclado');//valores a serem adicionados
        print_r $tech;
        
        Array ( [0] => mouse [1] => teclado [2] => pc [3] => notbook [4] => monitor )
    </code>
</pre>
    Os valores 'mouse' e 'teclado' forem adicionados no inicio do array, ocupando respectivamente as chaves [0] e [1] alterando as chaves dos elementos posteriores.
        </p>

        <h3 class="text-center mt-1 py-3 fw-semibold">Adicionando Valores no final do array</h3>    
        <hr class="border border-primary border-2 opacity-25">
        <p>Além da forma dinâmica de adição de elementos ao fim de um array, podemos também utilizar de uma função que realiza essa mesma tarefa. Podemos utilizar a função <em>array_push()</em> para acrescentar mais elementos ao fim do array. Por exemplo temos:
        
    <pre>
        <code>
        $carros = array('corvette','ferrari','lamborghini');
        array_push($carros,'mustang','bugatti');
        print_r ($carros); 

        //Dessa forma teriamos o resultado :
           
        Array ([0]=>corvette [1]=> ferrari [2]=>lamborghini [3]=>mustang [4]=>bugatti)
        </code>
            </pre>
                Assim podemos manter o Array com seus valores iniciais intactos e em adicional colocamos mais valores em suas chaves finais. Sem mencionar que desse modo, é bem mais fácil adicionar multiplos valores. Basta separa-los por " , " após declarar a variável utilizada dentro do array_push.
            </p>

        <h3 class="text-center mt-1 py-3 fw-semibold">Removendo Valores Do inicio do array</h3>    
        <hr class="border border-primary border-2 opacity-25">
            <p>
                Podemos utilizar a função <em>array_shift()</em> para remover o 1° elemento de um array, como no exemplo:
        <pre>
            <code>
              $clima = array('chuvoso','ensolarado','nublado','temporal');
              array_shift($clima);
              print_r($clima);  

              //teremos no print: 
              Array ([0]=>ensolarado [1]=> nublado [2]=>temporal);
            </code>
        </pre>
                Observe que o 1° valor foi retirado, enquanto os demais tiveram uma mudança em suas respectivas chaves, fazendo o que era antes o 2° valor passar a ser o 1°.

            </p>
            <h3 class="text-center mt-1 py-3 fw-semibold">Removendo Valores Do final do array</h3>    
        <hr class="border border-primary border-2 opacity-25">
            <p>
                Podemos também remover o último valor e chave de um array, para isso utilizamos a função <em>array_pop()</em>. Como no exemplo abaixo;
        <pre>
            <code>
            $moeda = array('Real','yen','Libras','pesos','dolar');
            array_pop($moeda);
            print_r($moeda);

            //Teremos no print:
            Array ([0]=>Real [1]=>yen [2]=> Libras [3]=> pesos)               
            </code>
        </pre> 
        Ao fim desse array tanto a chave quanto o valor nela foram retirados.
        Obs: o return dessa função verifica se o array realmente é um array, caso não seja(ou esteja vazio) o valor <em>null</em> é retornado.
            </p>
        <h3 class="text-center mt-1 py-3 fw-semibold">Ordenando um Array</h3>    
        <hr class="border border-primary border-2 opacity-25">
        <h3 class="text-center mt-1 py-3 fw-semibold">Função Sort</h3>  
            <p>
                Os elementos contidos em um array podem ser ordenados. Classificando-os em ordem alfabética ou numérica de forma crescente ou decrescente.
                Para isso iniciamos as funções de sort. Que nos permite organizar tanto valores e chaves da maneira que necessitarmos.
            </p>
            <p>
                Para ordenar de forma crescente podemos usar o próprio <em>sort()</em> que nos permite organizar os arrays tanto de forma numérica quanto alfabética.
                Vemos no exemplo abaixo:

    <pre>
        <code>
            $nomes = array['Bernardo','Manuel','Agenor','Lúcia','Vitória'];
            sort($nomes);
            print_r ($nomes);

            //Teremos o array deistibuido dessa forma:
            Array([0]=>Agenor [1]=>Bernardo [2]=>Lúcia [3]=>Manuel [4]=>Vitória);
        </code>
    </pre>
        Vamos ver também como ele organiza valores numéricos.
    <pre>
        <code>
            $numbers = array(3,6,2,52,11);
            sort($numbers);
            print_r($numbers);
            
            //teremos o resultado:
            Array([0]=>2 [1]=>3 [2]=>6 [3]=>11 [4]=>52)
        </code>
    </pre>
            </p>
            <h3 class="text-center mt-1 py-3 fw-semibold">Ordenando um Array de forma decrescente</h3>    
        <hr class="border border-primary border-2 opacity-25">

            <p>
                Ao contrário do sort(). podemos organizar nossos valores em um array de forma decrescente. Basta usarmos a função <em>rsort()</em>, como mostrado no exemplo abaixo.
    <pre>
        <code>
            $cper = array('David','Lucy','Rebecca','Kiwi','Maine','NightCity');
            rsort($cper);
            print_r($cper);

            //O array ficará dessa maneira:
            Array ([0]=>Rebecca [1]=>NightCity [2]=>Maine [3]=>Lucy [4]=>Kiwi [5]=>David)
        </code>
    </pre>
            podemos usar a forma numérica também.
    <pre>
        <code>
            $numbers = array(3,6,2,52,11);
            rsort($numbers);
            print_r($numbers);

            //teremos o resultado:
            Array([0]=>52 [1]=>11 [2]=>6 [3]=>3 [4]=>2);
        </code>
    </pre>  

            </p>
            <h3 class="text-center mt-1 py-3 fw-semibold">Ordenando Arrays com chaves personalizadas</h3>    
        <hr class="border border-primary border-2 opacity-25">
            <p>
                podemos ordernar as chaves do array de diversas formas, sendo elas as seguintes:           
            </p>
            <ol>
                <li>1- Valor de forma crescente</li>
                <li>2- Valor de forma decrescente</li>
                <li>3- Chave de forma crescente</li>
                <li>4- Chave de forma decrescente</li>
                <li>5- Remover elementos repetidos no array</li>
            </ol>
            <p>
                podemos resumir essa formas como:
            </p>

            <h5 class="text-center mt-1 py-3 fw-semibold">1 - Ordenando um array com chaves personalizadas através do valor de forma crecente</h6>    
                    <hr class="border border-primary border-2 opacity-25">
                    <p>
                        para este método usamos a função <em>asort()</em>, ela organiza os valores do array de chave personalizada de forma crescente.
        <pre>
        <code>
            $carteira = array ('Juan'=>'0','Lucas'=>'100','Débora'=> '30','Vitoria'=> '15');
            asort($carteira);
            print_r($carteira);

            //o resultado será:
            Array ( [Juan] => 0 [Vitoria] => 15 [Débora] => 30 [Lucas] => 100 )

            
        </code>
        O resultado NÃO leva em consideração o valor das chaves,
        e sim, a ordem numérica dos valores 
        "Funciona mesmo quando os valores de ordem alfabética ".
        </pre>
        </p>
        <h5 class="text-center mt-1 py-3 fw-semibold">2 - Ordenando um array com chaves personalizadas através do valor de forma decrescente</h6>    
        <hr class="border border-primary border-2 opacity-25">
         <p>
            No exemplo a seguir vamos ordenar o valor do array de forma decrescente, utilizando da função <em>arsort()</em> 
        <pre>
            <code>
              $idades = array('Lucas'=>'21','Débora'=>'26','Victoria'=>'24','Juan'=>'27');
              arsort($idade);
              print_r($idade); 
              o código ficará assim: 
              Array ( [Juan] => 27 [Débora] => 26 [Victoria] => 24 [Lucas] => 21 )
            </code>
        </pre>
         </p>               
         <h5 class="text-center mt-1 py-3 fw-semibold">3 - Ordenando um array com chaves personalizadas através da Chave de forma crescente</h6>    
            <hr class="border border-primary border-2 opacity-25">
            <p>Como falamos antes, também é possivel ordenar as chaves do array, para fazermos isso de forma crescente, utilizamos a função <em>ksort()</em>,
                como no exemplo abaixo:
        <pre>
            <code>
            $colecao = array(5=>'30','actionfigure'=>'10',1.6=>'20','cartas'=>'300','azul');
            ksort($colecao);
            var_dump($colecao);
            //será exibido:

             array(5) { 
            ["actionfigure"]=> string(2) "10"
            ["cartas"]=> string(3) "300" 
            [1]=> string(2) "20"
            [5]=> string(2) "30" 
            [6]=> string(4) "azul" }
            </code>
        </pre>
        Veja que os valores não são considerados pelo ksort(), e sim o que vem dentro das chaves,tendo a prioridade Chaves alfabéticas,numerais e por ultimo valores float.
        </p>
        <h5 class="text-center mt-1 py-3 fw-semibold">4 - Ordenando um array com chaves personalizadas através da Chave de forma decrescente</h6>    
        <hr class="border border-primary border-2 opacity-25">
        <p>
            A seguir utilizaremos a função krsort() para ordenar as chaves de forma decrescente.
    <pre>
        <code>
            $aleatorio = array('20'=> 'casa','30'=>'dinheiro','50'=>'bolsa',"1.5"=>'mesada',1=>'chápeu');
            krsort($aleatorio);
            print_r($aleatorio);
            
            //será exibido
            Array ( [50] => bolsa [30] => dinheiro [20] => casa [1.5] => mesada [1] => chápeu )
        </code>
    </pre>
        </p>
        <h5 class="text-center mt-1 py-3 fw-semibold">5 - Removendo elementos repetidos</h6>    
            <hr class="border border-primary border-2 opacity-25">
            <p>
                É possivel remover elementos repetidos de um array utilizando-se da função <em>array_unique</em>, que filtra nosso array procurando esses elementos e os eliminando, criando assim um novo array.
                Vejamos o exemplo:
    <pre>
        <code>
            $comida = array('Pão','Arroz','Pão','Feijão','Arroz','Gelatina','Pão','Macarrão','ARROZ');
            $comidas = array_unique($comida);
            print_r($comidas);
            //será printado
            Array ( [0] => Pão [1] => Arroz [3] => Feijão [5] => Gelatina [7] => Macarrão [8] => ARROZ )
        </code>
    </pre>
    Observe que foram retirados os valores repetidos, porém, o valor da chave [8] que apesar de ser semelhante ao da chave [1] é tratado de forma diferente por estar em maíuscula.
        </p>
        <h5 class="text-center mt-1 py-3 fw-semibold">Combinando Arrays</h6>    
            <hr class="border border-primary border-2 opacity-25">
                <p>É possivel combinar arrays diferentes para que se tornem um só, para isso utilizamos a função <em>array_merge()</em>, que modificará nosso array, como no exemplo:
        <pre>
            
        <code>
             $hobbies = array('leitura','esportes','games','coleções','video');
             $novoshobbies = array('anime','cosplay','musicas','pintura');
             $diversao = array_merge($hobbies,$novoshobbies);
             print_r ($diversao);

             //será exibido:

             Array ( [0] => leitura [1] => esportes 
             [2] => games [3] => coleções 
             [4] => video [5] => anime 
             [6] => cosplay [7] => musicas 
             [8] => pintura)

        </code>
        </pre>
        Veja que combinamos os arrays <em>$hobbies</em> e <em>$novoshobbies</em> em um novo array que chamamos de <em>$diversao</em>, nele foi agrupado todos os arrays existentes nos arrays anteriores, mantendo a chaves do 1° array declarado no array_merge e adicionando novas chaves para os valores do 2° array.
             </p>

             <h5 class="text-center mt-1 py-3 fw-semibold">Filtrando Elementos</h6>    
            <hr class="border border-primary border-2 opacity-25">

            <p>
                E por fim, temos uma função para filtrar nossos arrays, mas antes de inicia-lo devemos criar uma <em>function filtro</em> para para servir de parâmetro de filtragem. Posteriormente chamamos a sintaxe:
                <pre>
                    array_filter($array,'function');
                </pre> 
                Após a chamada da função devemos configura-la para que ela filtre os valores desejados. Após a configuração usaremos o <em>array_filter()</em> para exibir o nosso resultado.
                começamos desse jeito:
            <pre>
                <code>
                function filtro($valor){
                    return $valor >=40;
                }
                $numeros = [1,2,34,67,80,455,89,123,90,4,6,7,8];
                $filtro = array_filter($numeros,'filtro');
                print_r($filtro);

                //temos no print
                Array ( [3] => 67 [4] => 80 [5] => 455 [6] => 89 [7] => 123 [8] => 90 )
                </code>
            </pre>
            Veja como foi feita a chamada da função, logo após declararmos a variável $filtro chamamos o array_filter e colocamos nos parâmetros a variável a ser filtrada e a função que retornará o valor que deve ser filtrado.
            </p>
            <h5 class="text-center mt-1 py-3 fw-semibold">Conclusão</h6>    
                <hr class="border border-primary border-2 opacity-25">
                <p>Após todas essas informações apresentadas, com toda a certeza você poderá experimentar executar os códigos e funções  a sua maneira, sempre pratique e busque pelas informações que necessita, procurando não só neste portal mas também em toda biblioteca do PHP ou de outraos blogs.</p>
                <p>Enfim chegamos ao fim, mas isso não é tudo, o objetivo dessa página é mostrar que com um pouco de comprometimento, é possivel realizar um grande feitos, esta página demostra um pouco disso. Agradeço a aqueles que tenham visto tudo isso até aqui. E que continuem os estudos! o/ </p>
            </div>
        </div>
    </section>
    <?php include('footer.php'); ?>


</body>

</html>