// Faça um programa que receba três notas e retorne 
// verdadeiro caso a média seja maior ou igual a 6 e falso caso contrário

var nota1 = prompt("Digite a nota 1: ")
var nota2 = prompt("Digite a nota 2: ")
var nota3 = prompt("Digite a nota 3: ")

var nota1F = parseFloat(nota1)
var nota2F = parseFloat(nota2)
var nota3F = parseFloat(nota3)

var media = (nota1F+nota2F+nota3F)/3

var aprovado = media >= 6

alert("Aluno aprovado?" +aprovado)

// aprovado: se nota >= 6

// Exercício 2:
// Faça um programa que calcule o custo final de um imóvel para o comprador,
// sabendo que ele é dado pela soma de seu valor com a porcentagem do corretor
// considere que essa taxa é de 10%

var valorInicial = parseFloat(prompt("Digite o valor inicial do imóvel: "))
var valorFinal = valorInicial*1.1

alert("Valor Inicial:" +valorInicial+ "Valor final: " +valorFinal)

// Exercicio 3:

var possuiEntrada = true
var nomeLimpo = true
var concederParcelamento = possuiEntrada && nomeLimpo
alert("Parcelamento concedido?" +concederParcelamento)

// Exercício 4:
// Para que eu possa comprar um carro parcelado, preciso de ter 10k para dar de entrada
// ou posso pagar 5k em duas parcelas:

