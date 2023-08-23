<?PHP

trait movimentos
{
    public function iniciar()
    {
    }
    public function saltar()
    {
    }
    public function parar()
    {
    }
}

trait movimentos_de_voo
{
    public function levantar()
    {
    }
    public function voar()
    {
    }
    public function pousar()
    {
    }
}

class SerVivo
{
    public $name;
    public $especie;
    public $peso;
}

class Homem extends SerVivo
{
    use movimentos;
}

class Leao extends SerVivo
{
    use movimentos;
}

class Passaro extends SerVivo
{
    use movimentos, movimentos_de_voo;
}
