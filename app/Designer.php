<?php


namespace App;


class Designer extends Worker
{
    use HasRest;
    private string $position = 'Undefined';
    protected string $language;
    protected string $framework;



    public function __construct($name, $age, $hours, $language, $framework)
    {
        parent::__construct($name, $age, $hours);
        $this->language = $language;
        $this->framework = $framework;
    }

    public function work(){
        print_r("I am designing\n");
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