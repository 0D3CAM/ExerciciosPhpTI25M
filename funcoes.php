<?php
    namespace Projeto\Exercicios\funcoesPhp;

    Class Funcoes
    {
        private float $num1;
        private float $num2;
        private float $resultado;
        private float $quadrado;
        private float $cubo;


        
        //Construtor = Instancia as variaveis -> Cria as variaveis na memoria do servidor 

        public function __construct() 
        {
            $this->num1 = 0;
            $this->num2 = 0;
            $this->resultado = 0;
        }//fim do construtor

        //Método de acesso e modificadores
        public function __get(string $dado):mixed
        {
            return $this->dado;
        }//fim do get

        public function __set(string $variavel, string $novoDado):void
        {
            $this->variavel = $novoDado;
        }//fim do set

        public function somarDoisNumeros(float $num1,float $num2)
        {
        
            $this->resultado = $num1 + $num2;
            return $this->resultado;
        
        }

        public function subtrairDoisNumeros(float $num1,float $num2)
        {
        
            $this->resultado = $num1 - $num2;
            return $this->resultado;
    
        }

        public function multiplicarDoisNumeros(float $num1,float $num2)
        {
        
            $this->resultado = $num1 * $num2;
            return $this->resultado;

        }

        public function dividirDoisNumeros(float $num1,float $num2)
        {
        if($num2 <= 0 ){
            return "Impossível dividir por 0";
        }
        else{
            $this->resultado = $num1 / $num2;
             return $this->resultado;

        }
        }

        public function delta(int $a, int $b, int $c){
            $delta = pow($b,2)-4*$a*$c;
            return $delta;
        }
        
        public function calcularX1X2(int $a,int $b,int $c){
            $del = $this->delta($a,$b,$c);
            if($del < 0){
                return "Não possui raízes reais";
            }
            else{
                $x1 = (-$b + sqrt($del))/2*$a;
                $x2 = (-$b - sqrt($del))/2*$a;
                return "X1 = $x1 <br> <br> X2 = $x2";
            }
        }

        public function dobrarNumero(int $num1)
        {
           $this->resultado = $num1 * 2;
           return $this->resultado;
        }

        public function mediaTres(int $num1,int $num2,int $num3)
        {
            $this-> resultado = ($num1 + $num2 + $num3)/3;
            return $this->resultado;
        }

        public function raizQuadrada(int $num1){
            $this-> resultado = sqrt($num1);
            return $this->resultado;
        }

        public function converterMetrosCentimetros(int $num1){
            $this-> resultado = $num1*100;
            return $this->resultado;
        }

        public function raioCirculo(int $num1){
            $this-> resultado = pi()*$num1*$num1;
            return $this->resultado;

        }

        public function converterCelsiusFaren(int $num1){
             $this-> resultado = (($num1*(9/5)) + 32);
             return $this->resultado;
        }

        public function desconto10(int $num1){
            $this->resultado = $num1*0.9;
            return $this->resultado;
        }

        public function converterIdadeMeses(int $num1){
            $this->resultado = $num1*(12);
            return $this->resultado;    
        }

        public function calcParImpar(int $num1){
            if($num1%2 == 0){
                return "O número é par";
            }
            else{
                return "O número é impar";
            }
        }

        public function areaTriangulo(int $num1, int $num2)//num 1 = base num 2 = altura 
        {
            $this->resultado = (($num1*$num2)/2);
            return $this->resultado;
        }

        public function volumeCaixa(int $num1, int $num2, int $num3){
            $this-> resultado = $num1*$num2*$num3;
            return $this->resultado;
        }

        public function calcularQuadrado(float $num1){
            $this->quadrado = $num1*$num1;
            return $this->quadrado;
        }

        public function calcularCubo(float $num1){
            $this->cubo = $num1*$num1*$num1;
            return $this->cubo;

        }

        public function add18Imposto(int $num1){
            $this->resultado = $num1*1.18;
            return $this->resultado;
        }
        
        public function velocidadeMedia(int $num1, int $num2){
            $this-> resultado = $num1/$num2;
            return $this-> resultado;
        }

        public function media2Numeros(int $num1, int $num2){
            $this-> resultado = ($num1+$num2)/2;
            return $this-> resultado;
        }

        public function valorSalario(int $num1){
            $this->resultado = $num1*7.37;
            return $this->resultado;
        }

        public function converterIdadeDias(int $num1){
            $this->resultado = $num1*365;
            return $this->resultado;    
        }

        public function idade100Anos(int $num1){
            $this->resultado = 100-$num1;
            return $this->resultado;    
        }

        public function somaTres(int $num1, int $num2, int $num3){
            $soma = $num1+$num2+$num3;
            return $soma;    
        }
        public function mediaTresNumeros(int $num1, int $num2, int $num3){
            $media = ($num1+$num2+$num3)/3;
            return $media;    
        }
    } //fim da classe

?>