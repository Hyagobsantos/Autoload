<?php

interface Veiculo {

public function acelerar($velocidade);
public function frenar($velocidade);
public function trocarMarcha($marcha);
}

//para implementar outras interfaces usa-se , ex: class Civic implements Veiculo, outrainterface {
abstract class Automovel implements Veiculo {

public function acelerar($velocidade){
    echo "O veiculo acelerou até " . $velocidade . " km/h";
}
public function frenar($velocidade){
    echo "o veiculo Frenou até " . $velocidade . " km/k";
}
public function trocarMarcha($marcha){
    echo "o veiculo engatou a marcha " . $marcha;
}

}

?>