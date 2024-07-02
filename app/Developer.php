<?php


namespace App;


class Developer extends Worker
{
    use HasRest;
    public string $position = 'Undefined';
    public string $language;
    public string $framework;
    public array $attribute;

    /**
     * @return array
     */
    public function getAttribute(): array
    {
        return $this->attribute;
    }


    public function __construct($name, $age, $hours, $language, $framework)
    {
        parent::__construct($name, $age, $hours);
        $this->language = $language;
        $this->framework = $framework;
    }

    public function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->getName().' '.$this->getPosition();
    }


    public function work(){
        print_r("I am developing\n");
    }

    public function __set(string $name, $value):void{
        $this->attribute[$name] = $value;
    }

    public function __get(string $name){
        if(isset($this->attribute[$name])){
            return $name;
        }
        return null;
    }

    /**
     * @param string $language
     */
    public function setLanguage(string $language): void
    {
        $this->language = $language;
    }

    /**
     * @param string $framework
     */
    public function setFramework(string $framework): void
    {
        $this->framework = $framework;
    }

    /**
     * @return string
     */
    public function getLanguage(): string
    {
        return $this->language;
    }

    /**
     * @return string
     */
    public function getFramework(): string
    {
        return $this->framework;
    }

    public function setName($value){
        $this->name = $value;
    }
    public function getName():string{
        return $this->name;
    }

    public function setPosition($value){
        $this->position = $value;
    }
    public function getPosition():string{
        return $this->position;
    }

    public function setHours($value){
        $this->hours = $value;
    }
    public function getHours():array{
        return $this->hours;
    }
}