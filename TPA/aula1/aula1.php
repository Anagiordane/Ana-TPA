<?php
echo "<h4> Esta página é dinâmica; executada no servidor Web e enviada ao navegador!</h4>";
echo "<h3> Aprenderemos a linguagem de programação PHP</h3>";
// No PHP, uma variavel começa com o $sinal, seguido do nome da variavel
$nota1 = 10;
$nota2 = 9;
$media = ($nota1 + $nota2) / 2;
echo "A média das notas é igual a $media";
//php posui mais de 1000 funções integradas
echo "<br>" . data('D/M/Y');
$nome = "Seu Nome";
echo "<br>" . strtoupper($nome);
echo "<br> Seu nome tem " . strien($nome). " letras<br>";
echo "O numero sorteado foi: " . (rand(10,100));
//Instruções condicionais são usadas para executar ações diferentes com base em condições diferentes
if ($media >= 7){
    echo "<br>A média é igual a:" . $media . "<br> ou seja Aluno: APROVADO";
}
else{
    echo "<br>A média é igual a:" . $media . "<br> ou seja Aluno: REPROVADO";
}
//Aray indexado
$disciplinas = array ("BD", "TPA", "Front-End", "Matemática", "Português");
echo "<hr><h4> Mostrando o conteúdo do aray indexado </h4>";
var_dump($disciplinas);
echo "A disciplina com indice 1, ou seja, a segunda do aray é: " . $disciplinas[1];
// Estruturas de repetição FOR - percorendo um Array Modo difícil
$tam_array = count ($disciplinas);
for ($x = 0; $x < $tam_array; $x +){
    echo "<br>". $disciplinas[$x];
}
//
echo "<h4>Usando FOREACH</h4>";
foreach ($disciplinas as $x) {
    echo "$x <br>";
}
$professor_disciplina = array ("Halley" => "BD", "Mario" => "TPA", "Susu" => "Front-End", "Ione" => "Português" );
var_dump($professor_disciplina);
foreach ($professor_disciplina as $key => value) {
    echo "<br>- Professor(a) " . $key . "Ministra a disciplina " . $value;\
}
?>