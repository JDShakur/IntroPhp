<?php include_once('head.php') ?>

<body>
  <?php include_once('header.php') ?>

    <article>
        <div class="container bg-black bg-opacity-75 " id="hero">
            <div class="row">
                <h1 class="display-5 text-center mt-1 py-3">Estrutura de dados</h1>
                <hr class="border border-primary border-2 opacity-25">
                <p>
                    Estrutura de dados é a forma na qual os dados são armazenados, manipulados e podem também serem
                    excluídos do banco de dados onde permanecem. A maneira na qual esses dados são armazenados será em
                    um array no arquivo de formato .php, na qual é utilizado com os metodos de manipulação de dados os
                    conceitos: pilha, fila, lista, árvore e dentre outros.
                </p>
                <p>
                    Os arrays (vetores) são estruturas que são formadas para armazenamento de numeros finitos de dados,
                    onde em sua estrutura os elementos presentes recebe uma forma de dados onde , cada valor possui uma
                    chave que podem ser livrementes manipulados.
                    como no exemplo temos:
                </p>
                <p>
                <pre>
            <code>
              $CaixadeBrinquedos =  array("Carrinho","Boneca","Pelucia","Bola de gude"); 
              var_dump $CaixadeBrinquedos;
              //será exibido
              ]     array(4) {
                [0]=>
                string(8) "Carrinho"
                [1]=>
                string(6) "Boneca"
                [2]=>
                string(7) "Pelucia"
                [3]=>
                string(12) "Bola de gude"
              }
               

            </code>
        </pre>

                </p>

                <p>
                    Veja como o array se comporta, colocando cada elemento em uma $key numérica que começa sempre pelo
                    [0], e se estende até o último elemento presente.
                </p>

                <h1 class="display-6 text-center mt-1 py-3">Conceito de Pilhas</h1>
                <hr class="border border-primary border-2 opacity-25">

                <p>
                    As pilhas podem ser vistats como um método de organização de dados onde cada dado colocado lá recebe
                    uma $key e um $value se pensarmos como uma lista de arrays, elas seguem a regra LIFO que significa
                    <em>Last in, First out</em> O último a entrar é o primeiro a sair.
                    Os elementos são empilhados um por um, e apenas o último elemento empilhado pode ser removido da
                    pilha, pois se tentarmos remover qualquer um dos outros corremos o risco de desestruturar toda a
                    estrutura.

                </p>
                <p>
                    Imagine um estoque de mercado onde a primeira caixa colocada na prateleira será a última a ser
                    retirada, visto que terá outras caixas em sua frente.
                </p>
                <p>
                <pre>
        <code>
            
                $Caixas = array('Shampoo','Sabonete','Pasta de Dente');
                print_r ($Caixas); 
                //exibe as caixas 
                $VaiSair = array_pop($Caixas);
                print_r ($VaiSair);
                //tira o ultimo elemento da array
                print_r ($Caixas);
                //exibe a quantiadade de caixas sobrando
        </code>
    </pre>
                </p>
                <p>
                    Veja que em nosso array de $Caixas colocamos três valores, e com a função array_pop foi retirado o
                    último elemento colocado. É deste modo que um array do tipo pilha deve funcionar
                </p>
            </div>

            <h1 class="display-6 text-center mt-1 py-3">Conceito de Fila</h1>
            <hr class="border border-primary border-2 opacity-25">
            <p>
                As filas funcionam com o conceito de primeiro a entrar é primeiro a sair. No mundo real temos o exemplo
                de uma fila de atendimento , onde as primeiras pessoas a fazerem os seus pedidos são os primeiros a
                serem atendidos dando assim um pequeno entedimento desse método.
            </p>
            <p>
                Temos um exemplo de um pequeno programa que realiza esse conceito:
            <pre>
        <code>
            $jogos = array("Elden ring","Klonoa","Cronno Trigger","Final Fantasy");
            print_r( $jogos);// mostra a sequencia de jogos no array           
            $jgs = array_shift($jogos);//tira  o 1° elemento do vetor,nulo se não tiver elemento nenhum ou se não for um array  
            print_r( $jogos);//exibe quantos jogos ficaram na fila
            print_r ($jgs);//exibe o jogo "retirado" da fila
            
        </code>
    </pre>
            </p>

            <h1 class="display-6 text-center mt-1 py-3">Conceito de Árvore</h1>
            <hr class="border border-primary border-2 opacity-25">

        </div>

    </article>
    <?php include_once('footer.php') ?>

</body>